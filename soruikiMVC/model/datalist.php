<?php

    //Simple take all data from db 
    class Datalist extends Model{
        public function getAll()
        {
            return $this->db->query('SELECT * FROM datatable')->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>