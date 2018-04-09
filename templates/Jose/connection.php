<?php
function conectar(){
	$user="id3627976_root";
	$pass="123456789";
	$server="localhost";
	$db="id3627976_dinnoapp";
	$con =mysqli_connect($server,$user,$pass,$db) or die("Error al conectar".mysql_error());
return $con;
}
?>