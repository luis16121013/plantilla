<?php
/**
 * AQUI FALTA CODIGO PARA HACERLO DINAMICO
 */

/*require_once('controllers/controllerAdministrador.php');
$rs=new controllerAdministrador();*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
    <link rel="shortcut icon" href="assets/icon/EscuelaVirtual.png"/>
    

    <link rel="stylesheet" href="lib/animate.css/animate.css">
    <link rel="stylesheet" href="lib/sweetAlert2/sweetalert2.min.css"> 
    
</head>
<body class="background-gris">


<!---------------------------- navergador principal pantalla grande---------------------------------------------------------------->
<nav class="navbar d-none d-sm-none d-lg-flex navbar-expand-lg bg-dark navbar-dark fixed-top " style=" width: 100%;">
    <a class="navbar-brand dropdown dropdown-toggle mr-3" href="navbardrop" id="navbardrop" data-toggle="dropdown">
     <img src="assets/img/administrador/admin3.jpg" alt="Logo" style="width:40px; border-radius:55%;">
    </a>
        <div class="dropdown-menu bg-dark"> 
          <a id="perfil" class="dropdown-item text-primary" href="?a=perfil">Perfil</a>
          <a class="dropdown-item text-primary" href="#configuracion">Configuracion</a>
          <a class="dropdown-item text-primary" href="?id=close">Salir</a>
        </div>
    <ul class="navbar-nav ">
        <li class="nav-item">
          <a id="inicio" class="nav-link" href="?a=inicio">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?a=cursos">Inmuebles</a>
        </li>
<!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Usuarios
          </a>
        <div class="dropdown-menu bg-dark">
          <a class="dropdown-item text-primary" href="?a=pageDocente">Empleados</a>
          <a class="dropdown-item text-primary" href="#">Clientes</a>
          <a class="dropdown-item text-primary" href="#">Administradores</a>
        </div>
        </li>
    </ul>
</nav> 

 <!------------------------ navergador principal pantalla pequeña---------------------------------------------------------------->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark  d-lg-none fixed-top">
    <a class="navbar-brand" href="#">Administrador</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="?a=inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?a=cursos">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Usuarios
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="?a=pageDocente">Docentes</a>
            <a class="dropdown-item" href="#">Alumnos</a>
            <a class="dropdown-item" href="#">Administradores</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Configuracion</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="?a=perfil">Perfil</a>
            <a class="dropdown-item" href="?id=close">Salir</a>
          </div>
        </li>      
      </ul>
    </div>  
</nav>




<div id="contenido-inicio" class="container-fluid  border " id="inicio" style="height: 100vh;">
      <h1 class="text-center text-primary "style="padding-top: 80px;">Bienvenido <br>

      <?php 
      /**
       * aqui DAR CODIGO PARA MOSTRAR NOMBRE DE USUARIO
       */
      //echo $_SESSION['name'];
      ?>

      
      </h1><br>
      <div class="container ">
          <h3 class="text-center">ESTIMADO USUARIO!</h3>
          <h4 class="text-center">Le damos una cordial bienvenida al sistema de la Inmobiliaria Ccopa !</h4><br>
          <br>
          <p class="text-center">
            <img src="assets/img/administrador/admin3.jpg"alt="" style="width: 35%; border-radius:50%;">
          </p>
          <h6 class="text-center">Administrador</h6>
      </div>
</div>




<script src="lib/bootstrap/js/popper.min.js"></script>
<script src="lib/bootstrap/js/jquery-3.2.1.slim.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/sweetAlert2/sweetalert2.all.min.js"></script>
</body>
</html>