<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Formulario de registro</title>
		<link rel="shortcurt icon" href="image/logoa.png" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>


  <header>
        <div class="header-content">
            <div class="logo">
                <img src="image/logoUS.png" alt="">
            </div>
            
            <div class="menu" id="show-menu">
                <nav>
                    <ul>
					<li><a href="../index.html">INICIO</a></li>
                        <li><a href="../conocenos.html">CONOCENOS</a></li>
                        <li ><a href="../universidades.html">UNIVERSIDADES</a></li>
                        <li><a href="../test/index.html">TEST</a></li>
                        <li class="menu-selected"><a href="" class="text-menu-selected">REGISTRATE</a></li>
                        <li><a href="../LOGINCRUD/login.html">INICIAR </a></li>

                    </ul>
                </nav>
            </div>
         </div>

         <div id="icon-menu">
            <i class="fas fa-bars"></i>
         </div>
    </header>

		<div class="container">
			
			<div class="images">
				<img class="brr" src="image/logo.png" alt="Logo">
				<h2>En busca de un <br>  mejor futuro </h2>

			</div>

			<form action="#" method="POST">

					<!-- Nombre -->
					<div class="form-item">
						<label for="nombre">Nombre</label>
						<input type="text" name="Nombre" placeholder="Ingresa tu nombre">	
					</div>
					
					<!-- Apellido -->
					<div class="form-item">
						<label for="apellido">Apellido</label>
						<input type="text" name="Apellido" placeholder="Ingresa tu apellido">
					</div>
					
					<!-- Correo -->
					<div class="form-item">
						<label for="correo">Correo</label>
						<input type="email" name="Correo" placeholder="Ingresa tu correo">
					</div>

					<!-- Telefono -->
					<div class="form-item">
						<label for="telefono">Telefono</label>
						<input type="tel" name="Telefono" placeholder="Numero de telefono">
					</div>

        			<!-- Ciudad -->
					<div class="form-item">
						<label for="Direccion">Ciudad de recidencia</label>
						<input type="text" name="Ciudad" placeholder="Escribe tu ciudad">
					</div>

					<!-- Direccion -->
					<div class="form-item">
						<label for="Direccion">Direccion</label>
						<input type="text" name="Direccion" placeholder="Agrega tu direccion">
					</div>



					<!-- Boton -->
					<div class="form-item">
						<input type="submit" name="Registrar" value="REGISTRAR">
					</div>

			
			</form>

			<?php include ("registrar.php"); ?>

		</div>


  </body>
</html>