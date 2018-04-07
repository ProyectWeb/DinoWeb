<?php
require('fpdf/fpdf.php');
require('conexion.php');

$pdf = new FPDF();
$pdf-> AddPage();
$pdf-> SetFont('Arial', '', 10);
$pdf-> Image('../../static/images/dino.png',10,8,10,13,'PNG');
$pdf-> Cell(18,10,'',0);
$pdf-> Cell(150,10,'DinnoWeb',0);
$pdf-> SetFont('Arial','',9);
$pdf-> Ln(15);
$pdf-> SetFont('Arial','B',11);
$pdf-> Cell(70,8,'',11);
$pdf-> Cell(100,8,'Listado de usuarios',0);
$pdf-> Ln(8);
$pdf-> Ln(15);
$pdf-> SetFont('Arial','B',8);
$pdf-> Cell(15,8,'idUsuario',0);
$pdf-> Cell(29,8,'correo',0);
$pdf-> Cell(20,8,'password',0);
$pdf-> Cell(20,8,'nombre',0);
$pdf-> Cell(20,8,'edad',0);
$pdf-> Cell(20,8,'genero',0);
$pdf-> Cell(20,8,'superusuario',0);
$pdf-> Cell(25,8,'administrador',0);
$pdf-> Cell(200,8,'create_date',0);
$pdf-> Ln(8);
$pdf-> SetFont('Arial','',8);

//consulta

$usuarios = mysql_query("SELECT * FROM usuario");
$idUsuario=0;
while ($usuarios2=mysql_fetch_array($usuarios)) {
    $idUsuario = $idUsuario+1;
    $pdf->Cell(15,8,$idUsuario,0);
    $pdf->Cell(29,8,$usuarios2['correo'],0);
    $pdf->Cell(20,8,$usuarios2['password'],0);
    $pdf->Cell(20,8,$usuarios2['nombre'],0);
    $pdf->Cell(20,8,$usuarios2['edad'],0);
    $pdf->Cell(20,8,$usuarios2['genero'],0);
    $pdf->Cell(20,8,$usuarios2['superusuario'],0);
    $pdf->Cell(25,8,$usuarios2['administrador'],0);
    $pdf->Cell(20,8,$usuarios2['create_date'],0);
    $pdf-> Ln(8);



}
$pdf->Output();


?>