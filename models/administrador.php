<?php
require_once("config/database.php");
class administrador{
    private $con=null;

    public function __construct(){
        $this->con=database::create()->conect(new mysql);
    }
    private function getIdPeople($dni){
        $sql="SELECT id_people FROM people WHERE dni=?";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($dni));
        return $rs->fetch(PDO::FETCH_OBJ);
    }

    /**
     * get all users from table people
     */
    public function listUsers(){
        $sql="SELECT dni,first_name,last_name,adress,email,is_active FROM people";
        $rs=$this->con->prepare($sql);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * set register user client
     */
    public function createPeople($dni,$nombre,$apellido,$dir,$cel,$email,$sex,$fechNac,$user,$pass){
        /**
         * action 1: access system
         * action 0: is active
         */
        $sql="INSERT INTO people VALUES('null',?,?,?,?,?,?,?,?,?,?,'1','0','null')";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($dni,$nombre,$apellido,$dir,$cel,$email,$sex,$fechNac,$user,$pass));
    }
    public function createClient($identificador,$dni,$ruc){
        $idPeople=$this->getIdPeople($dni);
        /**param::::
         * 1->null auto increment
         */
        $sql="INSERT INTO client VALUES('null',?,?,?)";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($identificador,$idPeople,$ruc));
    }

}