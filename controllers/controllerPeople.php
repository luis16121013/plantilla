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
        
        if(!$obj){
            /**
             * si el user no existe redirigimos al index
             */
            header("location:http://localhost/PLANTILLA/");
        }else if($obj->is_user=='3'){

            /**
             * usamos el objeto que nos retorna
             */
            require_once("../bin/sesion.php");
            openSesion($obj->firsName,$obj->lastName,$obj->is_user);

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