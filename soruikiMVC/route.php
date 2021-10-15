<?php
    class Route{
        //parse url works for separate dir name
        public static function parse_url()
        {
            //basename and dirname difference basename show dir with file name
            //dirname just show directory
            $dirname = dirname($_SERVER['SCRIPT_NAME']);
            $basename = basename($_SERVER['SCRIPT_NAME']);
            //we want to trim out main dir for to this 
            //dir name or base name trim from request uri 
            //This process some kind of delete as equals to null
            $request_uri = str_replace([$dirname, $basename], null, $_SERVER['REQUEST_URI']);
            return $request_uri;
        }

        //run method navigate us from index to anywhere in project
        //url filename, $callback func and pull data method
        public static function run($url,$callback,$method = 'get')
        {
            //which method comes post or get 
            $method  = explode('|', strtoupper($method));

            //we have to know our form and pull method same
            if (in_array($_SERVER['REQUEST_METHOD'], $method)) 
            {

                $patterns = [
                    '{url}' => '([0-9a-zA-Z]+)',
                    '{id}' => '([0-9]+)'
                ];


                $url = str_replace(array_keys($patterns), array_values($patterns), $url);

                //uri separate with func
                $request_uri = self::parse_url();
                
                
                if (preg_match('@^'.$url.'$@', $request_uri, $parameters)) {
                    unset($parameters[0]);

                    if (is_callable(($callback))) {
                        call_user_func_array($callback, $parameters);
                    }

                    $controller = explode('@', $callback);
                    $className = explode('/', $controller[0]);
                    $className = end($className);
                    //echo $className;
                    //exit;

                    $controllerFile = __DIR__.'/controller/'.strtolower($controller[0]).'.php';
                    if (file_exists($controllerFile)) {
                        require $controllerFile;
                        call_user_func_array([new $className, $controller[1]], $parameters);
                    }
                }
            }
        }
    }
?>