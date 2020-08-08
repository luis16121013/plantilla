<?php
require_once('models/administrador.php');
class controllerAdministrador{
    private $obj=null;
    public function __construct(){
        $this->obj=new administrador();
    }
    public function listarUsuarios(){
        return $this->obj->listUsers();
    }
}