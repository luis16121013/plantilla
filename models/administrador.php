<?php
require_once("config/database.php");
class administrador{
    private $con=null;

    public function __construct(){
        $this->con=database::create()->conect(new mysql);
    }

    /**
     * All si son varios rows
     */
    public function listUsers(){
        $sql="SELECT*FROM table_users";
        $rs=$this->con->prepare($sql);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_OBJ);
    }
}