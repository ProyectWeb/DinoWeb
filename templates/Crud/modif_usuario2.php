<?php
	include 'conexion.php';
	/*Se declara conexion php para que llame a la base de datos y se usa $_POST para acceder a la informacion enviada, por lo que se debera declarar $_POST a cada campo de la tabla usuarios*/

	ModificarUsuario($_POST['correo'], $_POST['password'], $_POST['nombre'], $_POST['edad'], $_POST['genero'], $_POST['superusuario'], $_POST['administrador'], $_POST['create_date'],  $_POST['idUsuario']);

	function ModificarUsuario($corr, $pass, $nomb, $ed, $gen, $super, $admin, $create, $idUsur)
	{
		$sentencia="UPDATE usuario SET correo='".$corr."', password= '".$pass."', nombre='".$nomb."',  edad='".$ed."',  genero='".$gen."',  superusuario='".$super."',  administrador='".$admin."', create_date='".$create."' WHERE idUsuario='".$idUsur."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Usuario Modificado exitosamente");
	window.location.href='crud.php';
</script>