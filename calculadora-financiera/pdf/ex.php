<?php
include ("../config.sys.php");
$hola="hola";
if (!$hola)
		die ("Hola");
define('FPDF_FONTPATH','../font/');
require('cellpdf.php');

$pdf=new CellPDF();
$pdf->Open();
$pdf->AddPage('L');
$pdf->SetFont('Arial','',6);

$pdf->Cell(20,50,"(1) Tecnológico",2,0,'C');
$pdf->VCell(4,50,"(2)TOTAL DE PROYECTOS",2,0,'D');
$pdf->VCell(4,50,'Gabriel Mizael Ku Segura',1,0,'D');
$pdf->VCell(15,50,"cn top",1,0,'U');


$pdf->Cell(50,50,"Text ovhe left",'',0,'L');
$pdf->Cell(50,50,'This line is very long and gets compressed','',0,'C');
$pdf->Cell(50,50,"Text vvthe right",'',0,'R');


$pdf->Output();
?>
