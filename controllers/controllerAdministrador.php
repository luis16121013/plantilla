<?php
require_once('models/administrador.php');
require_once("../bin/sesion.php");
if(isset($_SERVER['REQUEST_METHOD'])){
    if($_SERVER['REQUEST_METHOD']==='POST'){

    }else if($_SERVER['REQUEST_METHOD']==='GET'){
        if($_GET['action']="salir"){
            closeSesion();
            header("location:http://localhost/plantilla/index.php");
        }
    }
}else{
    echo 'ACCESO RESTRINGIDO';
}