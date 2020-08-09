<?php
if(isset($ctrl)){
    /**
     * importando database-config/controller
     */
    require_once("../config/database.php");
    require_once("../config/config.php");
    require_once("../config/Igestor.php");
    require_once("../config/mysql.php");
}else{
    require_once("config/database.php");
}
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
        $active=1;
        $logueado=0;
        $var=null;
        $sql="INSERT INTO people VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($var,$dni,$nombre,$apellido,$dir,$cel,$email,$sex,$fechNac,$user,$pass,$active,$logueado,$var));
    }
    public function createClient($dni){
        $idPeople=$this->getIdPeople($dni);
        /**param::::
         * 1->null auto increment
         */
        $sql="INSERT INTO  client(identificador,id_people) VALUES(fnReturnId('3'),?)";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($idPeople));
    }
    public function eliminarCliente($idPeople){
        $sql="DELETE FROM PEOPLE WHERE id_people=? ";
        $rs=$this->con->prepare($sql);
        $rs->execute(array($idPeople));
    }


}