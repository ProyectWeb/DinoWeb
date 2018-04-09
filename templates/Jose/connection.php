<?php
function conectar(){
	$user="root";
	$pass="qonmqa3p";
	$server="localhost";
	$db="DinnoApp";
	$con =mysqli_connect($server,$user,$pass,$db) or die("Error al conectar".mysql_error());
return $con;
}
?>