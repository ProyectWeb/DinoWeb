<?php
function conectar(){
$user="root";
$pass="12345678";
$db="dinnoapp";
$con=mysqli_connect($server,$user,$pass,$db)
or die ("Error al conectar".mysqli_error());
return $con; 
}

?>