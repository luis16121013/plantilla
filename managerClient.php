<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registrarse</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PupilosdeVidcy</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/principal/normalize.css">
    <link rel="stylesheet" href="assets/css/principal/main.css">
</head>

<body>
    <header class="site-header ">
        <div class="contenedor contenido-header">
            <div class="barrasub">
                <a href="index.php">
                <img src="assets/img/principal/logo_secundario.svg" alt="logotipo de Mobiliaria Ccopa">
                </a>
                <nav class="navegacion">
                    <a href="nosotros.php">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="blog.php">Blog</a>
                    <a href="contacto.php">Contacto</a>
                </nav>
            </div> <!--contenedor-->
        </div>

    </header>
    	<div class="inicio2">
	        <h1 class="fw-300 centrar-texto"></h1>
	
	        <main class="contenedor seccion contenido-centrado">
	            <h2 class="fw-3002 centrar-texto ">Registrate y Encuentra Novedades de Nuestra Inmobiliaria!</h2>
	
	            <form action="../sClient?accion=REGISTRAR" method="Post" enctype="multipart/form-data" class="contacto2">
	
	                <fieldset class="rel">
	                    <legend>Información Personal</legend>
	                    <label >Tipo de Documento</label>
	                    <select name="tipo_documento">
	                        <option value="" disabled selected>--Seleccione--</option>
	                        <option value="DNI">DNI</option>
	                        <option value="CARNET DE ESTRANJERIA" >CARNET DE ESTRANJERIA</option>
	                    </select>
	                    <label>N° Documento:</label>
	                    <input type="text" name="dni" placeholder="Tu Dni"required>
	                    <label >Nombre:</label>
	                    <input type="text" name="nombre" placeholder="Tu Nombre" required >
	                    <label >Apellido:</label>
	                    <input type="text" name="apellidos" placeholder="Tu Apellido" required >
	                    <label >Dirección<label>
	                    <input type="text" name="direccion" placeholder="Tu Dirección" required>
	                    <label >Celular</label>
	                    <input type="tel" name="celular" placeholder="Tu Celular" required>
	                    <label >E-mail:</label>
	                    <input type="email" name="correo" placeholder="Tu Correo Electrónico" required>
	                    <label>Sexo</label>
	                    <div class="forma-contacto">
	                        <label for="telefono">Masculino</label>
	                        <input type="radio" name="sexo"  id="0">
	
	                        <label for="correo">Femenino</label>
	                        <input type="radio" name="sexo" id="1">
	                    </div>
	                    <label >Fecha de Nacimiento:</label>
	                    <input type="date" name="fecha" required>
	                    <label>Foto</label>
	                    <input type="file" name="fileImage" >
	                    <label>N° de Ruc</label>
	                    <input type="number" name="ruc">
	
	                </fieldset >
					
					
	                <fieldset class="rel">
	                    <legend>Ahora Crea una Cuenta </legend>
	                    <label >Usuario:</label>
	                    <input type="text" name="username" placeholder="Tu Nombre de Usuario" required >
	                    <label >Nueva Contraseña:</label>
	                    <input type="password" name="password" placeholder="Tu Contraseña" required >
	                   
	
	
	                </fieldset >
	
	
	                 <input type="submit" value="Enviar" class="boton boton-verde">
	
	            </form>
	
	        </main>
        </div>



        <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>

            </nav>
            <p class="copyright">"Todos los Derechos Reservados de dccopay&commat;gmail.com 2020"</p>
        </div>
    </footer>

</body>
</html>
