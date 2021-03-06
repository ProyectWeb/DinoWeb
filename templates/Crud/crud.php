<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pagina Superusuario</title>
<style type="text/css">
@import url("../../static/css/mycss.css");
</style>
<link href="../../static/css/catalogoestilos/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../../static/css/main.css">
<!-- HTML5 shim y Respond.js para compatibilidad con IE8 de elementos HTML5 y consultas de medios -->
<!-- ADVERTENCIA: Respond.js no funciona si ves la página a través de un archivo: // -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<?php
include('../Richi/navBar.php');
?>
<div class="todo">
  
  <div id="cabecera">
    <img src="../../static/images/swirl.png" height="200px" width="100%">
  </div>


    <!-- Modal para enviar correo-->
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enviar Correo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="correo.php">
                        <div class="form-group">
                            <label for="staticEmail">Correo</label>
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="drdr_2@hotmail.com">
                        </div>
                        <div class="form-group">
                            <label for="subject">Titulo</label>
                            <input type="text" class="form-control" id="subject" >
                        </div>
                        <div class="form-group">
                            <label for="message">Example textarea</label>
                            <textarea class="form-control" id="message" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Correo</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>



    <!--PDF-->
    <div class="container">
        <a target="_blank" href="usuarios.php" class="btn btn-danger">Exportar PDF</a>
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
          echo "<td> <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal1'>Enviar Correo </button>";
          echo "<td>  <a href='modif_usuario.php?idUsuario=".$filas['idUsuario']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td> <a href='eliminar.php?idUsuario=".$filas['idUsuario']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
        /*Asi mismo se declaran 2 botones que seran redirigidos a otros archivos oho, dandoles como variable el idUsuario el cual recibiran para recibir informacion*/
      }

      ?>
  	</table>
  </div>
  
	<div id="footer">
      <img src="../../static/images/swirl2.png" height="200px" width="100%">
  	</div>

    <script src="../../static/javascript/base/jquery-3.3.1.js"> </script>
    <script src="../../static/javascript/base/popper.js"> </script>
    <script src="../../static/javascript/base/bootstrap.js"> </script>
    <?php
        include('../Richi/footer.html');
    ?>

</div>


</body>
</html>