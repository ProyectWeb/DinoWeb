<?php
	include "conexion.php";


/*Se recibe informacion del idUsuario para luego eliminar de la tabla usuarios donde se encuentre el idUsuario*/

	EliminarUsuario($_GET['idUsuario']);

	function EliminarUsuario($idUsuario)
	{
		$sentencia="DELETE FROM usuario WHERE idUsuario='".$idUsuario."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">

	alert("Usuario Eliminado exitosamente");
	window.location.href='crud.php';
</script>