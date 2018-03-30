<?php
	include 'conexion.php';
/*Se llama a la base de datos mediante la conexion php  y se ocupa el $_POST para acceder a la informacion enviada y despues se seclara que creara un nuevo registro con el insert into*/
	NuevoUsuario($_POST['idUsuario'], $_POST['correo'], $_POST['password'], $_POST['nombre'], $_POST['edad'], $_POST['genero'], $_POST['superusuario'], $_POST['administrador'], $_POST['create_date']);

	function NuevoUsuario($idUsur, $corr, $pass, $nomb, $ed, $gen, $super, $admin, $create)
	{
		echo $sentencia="INSERT INTO usuario (idUsuario, correo, password, nombre, edad, genero, superusuario, administrador, create_date) VALUES ('".$idUsur."', '".$corr."', '".$pass."', '".$nomb."', '".$ed."', '".$gen."', '".$super."', '".$admin."', '".$create."')";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Usuario Ingresado exitosamente");
	window.location.href='crud.php';
</script>