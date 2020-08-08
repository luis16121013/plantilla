<?php
if(isset($_SERVER['REQUEST_METHOD'])){

    /** 
     *configurar segun al metodo POST
    */
    if($_SERVER['REQUEST_METHOD']==='GET'){
        require_once("../models/people.php");

        $obj= new people();
        $obj=$obj->validar("DILAN","1234");
        
        if(!$obj){
            header("location:http://localhost/PLANTILLA/");
        }else if($obj->is_user=='3'){

            /**
             * usamos el objeto que nos retorna
             */
            header("location:http://localhost/plantilla/administrador.php");
      
        }else{
            echo 'NO FOUND';
        }
    }else {
        echo'hola';
    }
}