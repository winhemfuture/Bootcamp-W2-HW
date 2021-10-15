<?php
    class Mainpage extends Controller{

        //route.php run func navigate to here!
        //index func works first init
        public function index(){

            //$takeData = $this->model('datalist');
            //$datalist = $takeData->getAll();

            //call view folder mainpage file
            $this->view('mainpage');
            //$this->view('mainpage',[
            //    'datalist'=> $datalist]);
        }

        //post func work send data from view
        public function post()
        {
            echo "Data = ".$_POST['data'];
        }
    }
?>