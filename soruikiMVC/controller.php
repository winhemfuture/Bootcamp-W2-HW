<?php

    //As a name controller control between view and model
    class Controller{
        public static function view($name,$data = [])
        {
            //if we take data extract will separate them as array
            extract($data);
            //we show the view directory which php file have to run
            require __DIR__.'/view/'.strtolower($name).'.php';
        }

        public static function model($name)
        {
            //same as view we have to show which model file has to works
            require __DIR__.'/model/'.strtolower($name).'.php';
            //this using init constract method
            return new $name;
        }
    }
?>