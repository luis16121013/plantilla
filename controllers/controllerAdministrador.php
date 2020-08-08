<?php
require_once('models/administrador.php');
if(isset($_SERVER['REQUEST_METHOD'])){
    if($_SERVER['REQUEST_METHOD']==='POST'){

    }else if($_SERVER['REQUEST_METHOD']==='GET'){

    }
}else{
    echo 'ACCESO RESTRINGIDO';
}