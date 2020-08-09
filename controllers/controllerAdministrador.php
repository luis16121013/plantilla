<?php
//require_once('models/administrador.php');
//require_once("../bin/sesion.php");
if(isset($_SERVER['REQUEST_METHOD'])){

    if($_SERVER['REQUEST_METHOD']==='POST'){
        if(isset($_POST['actualizar'])){
            echo "actuaizzamos";
        }else if(isset($_GET['tipo'])){
            if($_GET['tipo']=="cliente"){
                /**
                 * logica de registro con ddbb
                 * 
                 */
                header("location:http://localhost/plantilla/admin-tabla-clientes.php");
            }
        }

    }else if($_SERVER['REQUEST_METHOD']==='GET'){
        if($_GET['action']=="salir"){
            session_start();
            session_unset();
            session_destroy();

            /**
             * redirigiendo 
             */
            header("location:http://localhost/plantilla/index.php");

        }else if($_GET['action']=="ListarClientes"){
            /**
             * redirigiendo 
             */
            header("location:http://localhost/plantilla/admin-tabla-clientes.php");
        }
        else if($_GET['action']=="registrarCliente"){


            header("location:http://localhost/plantilla/add-table-cliente.php");
        }
    }
}else{
    echo 'ACCESO RESTRINGIDO';
}