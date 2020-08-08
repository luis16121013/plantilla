<?php
require_once("../config/database.php");
class people{
    private $con=null;

    public function __construct(){
        $this->con=database::create()->conect(new mysql);
    }
    public function validar($user,$pass){
        $sql="SELECT*FROM table_users WHERE cargo=? AND pass=?";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($user,$pass));
        return $rs->fetch(PDO::FETCH_OBJ);
    }
}