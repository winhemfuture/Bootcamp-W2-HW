<?php 
    class Database{
        protected $db;

        public function __construct()
        {
            //simple connection with db
            try {
                $this->db = new PDO('mysql:host=localhost;dbname=testdb','root','');
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

?>