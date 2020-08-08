<?php
if(isset($_SERVER['REQUEST_METHOD'])){

    /** 
     *configurar segun al metodo POST
    */
    if($_SERVER['REQUEST_METHOD']==='GET'){
        require_once("../models/people.php");

        $obj= new people();
        $obj=$obj->validar("Administrador","4321");
        
        if(!$obj){
            header("location:http://localhost/v1/");
        }else if($obj->cargo=='Administrador'){

            /**
             * usamos el objeto que nos retorna
             */
            header("location:http://localhost/v1/administrador.php");
        }
    }else {
        echo'hola';
    }
}