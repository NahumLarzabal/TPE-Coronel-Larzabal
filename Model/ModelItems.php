<?php

class ModelItems{
    private $db;
    function __construct(){
       $this->db = new PDO('mysql:host=localhost;'.'dbname=tpecl_db;charset=utf8', 'root', '');
    }
    function getItems(){
        $sentencia = $this->db->prepare( "select * from items");
        $sentencia->execute();
        $item = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $item;
    }

}


?>