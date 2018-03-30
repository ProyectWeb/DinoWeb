<?php
  include 'conexion.php';
/*Se llama a la base de datos para seleccionar los registros y pueda modificarlos, por lo que se deberan de declarar los campos que haya en la tabla usuarios*/
  $consulta=Consultarusuario($_GET['idUsuario']);

  function Consultarusuario($idUsur)
  {
    $sentencia="SELECT * FROM usuario WHERE idUsuario='".$idUsur."' ";
    $resultado=mysql_query($sentencia) or die (mysql_error());
    $filas=mysql_fetch_assoc($resultado);
    return [

      $filas['correo'],
      $filas['password'],
      $filas['nombre'],
      $filas['edad'],
      $filas['genero'],
      $filas['superusuario'],
      $filas['administrador'],
      $filas['create_date']
    ];

  }


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Usuario</title>
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
  		<span> <h1>Modificar Usuario</h1> </span>
  		<br>
	  <form action="modif_usuario2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden" name="idUsuario" value="<?php echo $_GET['idUsuario']?> ">
     
  		
  		<label>correo: </label>
  		<input type="text" id="correo" name="correo" value="<?php echo $consulta[0] ?>"><br>

      <label>password: </label>
      <input type="text" id="password" name="password" value="<?php echo $consulta[1] ?>"><br>


      <label>nombre: </label>
      <input type="text" id="nombre"  name="nombre" value="<?php echo $consulta[2] ?>" ><br>
      
      <label>edad: </label>
      <input type="text" id="edad"  name="edad" value="<?php echo $consulta[3] ?>"><br>

      <label>genero: </label>
      <input type="text" id="genero" name="genero" value="<?php echo $consulta[4] ?>" ><br>
      
      <label>superusuario: </label>
      <input type="text" id="superusuario"  name="superusuario" value="<?php echo $consulta[5] ?>"><br>

      <label>administrador: </label>
      <input type="text" id="administrador"  name="administrador" value="<?php echo $consulta[6] ?>" ><br>
      
      <label>create_date: </label>
      <input type="text" id="create_date"   name="create_date" value="<?php echo $consulta[7] ?>"><br>











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