<?php
require_once("config/database.php");
class administrador{
    private $con=null;

    public function __construct(){
        $this->con=database::create()->conect(new mysql);
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
     * <--NO USE SESSION-->
     * GET DATA NAME ---ELIMINATE 
     */
    public function getName(){
        $sql="SELECT * FROM people ";
    }
}