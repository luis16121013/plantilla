<?php
if(isset($_SERVER['REQUEST_METHOD'])){

    /** 
     * 
     *configurar segun al metodo POST
    */
    if($_SERVER['REQUEST_METHOD']==='POST'){
        require_once("../models/people.php");

        $obj= new people();
        /**
         * capturamos datos enviados del formulario
         */
        $user=$_POST['username'];//DILAN
        $pass=$_POST['password'];//1234

        $obj=$obj->validar($user,$pass);
        
        session_start();
        if(!$obj){
            /**
             * si el user no existe redirigimos al index
             */
            header("location:http://localhost/PLANTILLA/");
        }else if($obj->is_user=='3'){

            /**
             * usamos el objeto que nos retorna
             */
            $firsName=$obj->firsName;
            $lastName=$obj->lastName;
            $rol=$obj->is_user;
            require_once("../bin/sesion.php");

            header("location:http://localhost/plantilla/administrador.php");
      
        }else if($obj->is_user=='2'){

            /**
             * NOTA:::::----FALTA
             * configurar segun usuario
             */
            header("location:http://localhost/plantilla/");
      
        }else if($obj->is_user=='1'){

            /**
             * NOTA:::::----FALTA
             * configurar segun usuario
             */
            header("location:http://localhost/plantilla/");
      
        }
    }else {
        /**
         * VALIDAMOS QUE SOLO NOS HAGAN PETICIONES TIPO POST
         */
        header("location:http://localhost/plantilla/404.html");
    }
}else{
    echo 'ACCESO RESTRINGIDO';
}