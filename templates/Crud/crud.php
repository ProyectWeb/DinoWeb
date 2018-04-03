<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pagina Superusuario</title>
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
  

  <!--Se declara los campos para representarlos en una tabla-->
  <div id="contenido">
  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
  			<th>idUsuario</th>
  			<th>correo</th>
  			<th>password</th>
  			<th>nombre</th>
        <th>edad</th>
        <th>genero</th>
        <th>superusuario</th>
        <th>administrador</th>
        <th>create_date</th>
        <!--Se crea un boton el cual sera redirigido a otro archivo php para realizar la funcion de crear un nuevo usuario-->
  			<th> <a href="nuevo_usuario.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>
  		
  		
  		<?php
      /*Se llama a la base de datos para que muestre los registros de la tabla usuarios*/
      include "conexion.php";
      $sentencia="SELECT * FROM usuario";
      $resultado=mysql_query($sentencia);
      while($filas=mysql_fetch_assoc($resultado))
      {
        echo "<tr>";
          echo "<td>"; echo $filas['idUsuario']; echo "</td>";
          echo "<td>"; echo $filas['correo']; echo "</td>";
          echo "<td>"; echo $filas['password']; echo "</td>";
          echo "<td>"; echo $filas['nombre']; echo "</td>";
          echo "<td>"; echo $filas['edad']; echo "</td>";
          echo "<td>"; echo $filas['genero']; echo "</td>";
          echo "<td>"; echo $filas['superusuario']; echo "</td>";
          echo "<td>"; echo $filas['administrador']; echo "</td>";
          echo "<td>"; echo $filas['create_date']; echo "</td>";
          echo "<td>  <a href='modif_usuario.php?idUsuario=".$filas['idUsuario']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td> <a href='eliminar.php?idUsuario=".$filas['idUsuario']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
        /*Asi mismo se declaran 2 botones que seran redirigidos a otros archivos oho, dandoles como variable el idUsuario el cual recibiran para recibir informacion*/
      }

      ?>
  	</table>
  </div>
  
	<div id="footer">
      <img src="../../static/images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>