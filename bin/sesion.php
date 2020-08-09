<?php
/* 
 * GUARDANDO DATOS DE LA SESION DEL USUARIO
 * 
 * */
    session_start();

    function openSesion($firsName,$lastName,$rol){
        $_SESSION['name']=$firsName.' '.$lastName;
        $_SESSION['rol']=$rol;
    }
    function closeSesion(){
        session_unset();
        session_destroy();
    }
    function NameSesion(){
        return $_SESSION['name'];
    } 
