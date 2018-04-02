<?php
  include "conexion.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alta de Producto</title>
<style type="text/css">
@import url("../../static/css/mycss.css");
</style>
<link href="../../static/css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim y Respond.js para compatibilidad con IE8 de elementos HTML5 y consultas de medios -->
<!-- ADVERTENCIA: Respond.js no funciona si ves la página a través de un archivo: // -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="../../static/images/swirl.png" width="1188" id="img1">
  </div>
  
  <!--Se declararan los label para hacer cuadros de texto en donde se mostrara la informacion-->
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Alta de Nuevo usuario</h1> </span>
  		<br>
	  <form action="nuevo_usuario2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
  		
      <label>idUsuario: </label>
      <input type="text" id="idUsuario" name="idUsuario"><br>


      <label>correo: </label>
  		<input type="text" id="correo" name="correo"><br>
  		
  		<label>password: </label>
  		<input type="text" id="password" name="password" ><br>

      <label>nombre: </label>
      <input type="text" id="correo" name="nombre"><br>
      
      <label>edad: </label>
      <input type="text" id="password" name="edad" ><br>

      <label>genero: </label>
      <input type="text" id="correo" name="genero"><br>
      
      <label>superusuario: </label>
      <input type="text" id="password" name="superusuario" ><br>

      <label>administrador: </label>
      <input type="text" id="correo" name="administrador"><br>
      
      <label>create_date: </label>
      <input type="text" id="password" name="create_date" ><br>
  		
  		
  		
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>
  
	<div id="footer">
  		<img src="../../static/images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>