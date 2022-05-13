<?PHP
require_once('../files/config.sys.php');
/*
require_once("../config.sys.php");
$id_res = $_GET['id_res'];
$sql=mysql_query("SELECT * FROM tb_resevations WHERE id_res='".$id_res."'") or die(mysql_error());
$res=mysql_fetch_array($sql);

set_time_limit(0);
date_default_timezone_set("America/Cancun");
*/

$id = $_GET['id'];
$cot = $_GET['cot'];
$sql=mysqli_query($con, "SELECT * FROM web_coti_hojat WHERE id='".$id."' AND id_cot='".$cot."' ");
$res=mysqli_fetch_array($sql);

/*
$val_mes6= number_format($res['val_mes6'] ,2);
$val_mes12= number_format($res['val_mes12'] ,2);
$val_mes18= number_format($res['val_mes18'] ,2);
$val_mes24= number_format($res['val_mes24'] ,2);
$val_mes30= number_format($res['val_mes30'] ,2);
$val_mes36= number_format($res['val_mes36'] ,2);
*/

//if($res){


define ('FPDF_FONTPATH','font/');
require('pdf/mc_table.php');
//require(pdf/fpdf.php');
echo '<title>Hola de Trabajo</title>';

$pdf=new PDF_MC_Table();
$pdf->Open();
$pdf->AddPage("P");
$pdf->SetFont('Arial','B',10);
//$pdf->Image('logo1.jpg',10,5,177,15,'JPG');
//$pdf->Image('logo1.jpg',156,22,30,14,'JPG');

	//$r=154;$g=208;$b=214; 229, 227, 227
	$r=242;$g=244;$b=244;
	$r2=0;$g2=0;$b2=0;
	$font = 6;
        
$pdf->Image('images/inversion-banner.jpg',6,5,196,37,0, '', '', true);
//$pdf->Image('images/logo.jpg',145,12, 40,25, 0, '', '', true);

$pdf->SetTextColor(0,0,0);
$pdf->SetXY(10,15); 
//$pdf->MultiCell(90,2,utf8_decode("FORMATO DE COTIZACIÓN"),0,'L');
$pdf->Cell(65, 5,utf8_decode("H O J A  D E  T R A B A J O  R O E S & C O."), 0,  'L');
$pdf->Ln(5); 
$pdf->SetFont('Arial','B',8);
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(65, 5,utf8_decode("EMAIL: inversionesconplusvalia.com"), 0,  'L');
$pdf->Ln(5); 
$pdf->Cell(65, 5,utf8_decode("TELÉFONO: 998 229 2880"), 0,  'L');
$pdf->Ln(5); 
$pdf->Cell(65, 5, "FECHA: ".$res['fecha'] , 0,  'L');

//$pdf->SetXY(10,15); 

		$pdf->SetXY(10,52);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetFillColor(255,255,255);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->MultiCell(192,7, utf8_decode("D A T O S  D E L  C L I E N T E"), 0,'L',true);

		$pdf->Ln(2);
		$pdf->SetFont('Arial','B',7);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(25, 6,utf8_decode("NOMBRE: "), 0, 0);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(167, 6, $res['nombre'] , 0, 0,'l',true);

		$pdf->Ln(7);
		$pdf->SetFont('Arial','B',7);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(25, 6,utf8_decode("TELEFONO: "), 0, 0);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(65, 6, $res['tel'] , 0, 0,'l',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 6,"CORREO ELECTRONICO: ", 0, 0,'l',true);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(67, 6, $res['email'] , 0, 0,'l',true);

		$pdf->Ln(7);
		$pdf->SetFont('Arial','B',7);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(25, 6,utf8_decode("OCUPACIÓN: "), 0, 0);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(65, 6, $res['ocupacion'] , 0, 0,'l',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 6,"ESTADO CIVIL: ", 0, 0,'l',true);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(67, 6, $res['ecivil'] , 0, 0,'l',true);

		$pdf->Ln(7);
		$pdf->SetFont('Arial','B',7);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 6, utf8_decode("MÉTODO DE PAGO:") , 0, 0);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(157, 6, $res['metodopago'] , 0, 0,'l',true);

		$pdf->Ln(12);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->MultiCell(192,7, utf8_decode("D A T O S  D E  E Q U I P O  C O M E R C I A L"), 0,'L',true);
		
		$pdf->Ln(2);
		$pdf->SetFont('Arial','B',7);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 6,utf8_decode("CERRADOR: ") , 0, 0);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(157, 6,  $res['cerrador']  , 0, 0,'l',true);

		$pdf->Ln(7); 
		$pdf->SetFont('Arial','B',7);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 6,"ASESOR: ", 0, 0);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(157, 6,  $res['asesor']  , 0, 0,'l',true);

		$pdf->Ln(7);
		$pdf->SetFont('Arial','B',7);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 6,"TIPO DE ASESOR: ", 0, 0);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(157, 6, $res['tipo_asesor'] , 0, 0,'l',true);

		$pdf->Ln(7);
		$pdf->SetFont('Arial','B',7);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 6,"ORIGEN DEL CLIENTE: ", 0, 0);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(157, 6, $res['origen_cli'] , 0, 0,'l',true);

		$pdf->Ln(7);
		$pdf->SetFont('Arial','B',7);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 6,"PLAZA: ", 0, 0);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(157, 6, $res['plaza'] , 0, 0,'l',true);

		$pdf->Ln(12);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->MultiCell(192,7, utf8_decode("D A T O S  D E L  L O T E "), 0,'L',true);

		$pdf->Ln(2);
		$pdf->SetFont('Arial','B',7);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(20, 6, utf8_decode("PROYECTO: "), 0, 0);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(45, 6, $res['proyecto'] , 0, 0,'l',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(20, 6, utf8_decode("MANZANA: ") , 0, 0,'l',true);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(45, 6, $res['manzana'] , 0, 0,'l',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(22, 6, utf8_decode("NUM. DE LOTE: ") , 0, 0,'l',true);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(40, 6, $res['num_lote'] , 0, 0,'l',true);

		$pdf->Ln(7); 
		$pdf->SetFont('Arial','B',7);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(20, 6,"ETAPA: ", 0, 0);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(75, 6, $res['etapa'] , 0, 0,'l',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(40, 6,"SUPERFICIE TOTAL DEL LOTE:", 0, 0,'l',true);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(57, 6, $res['m2_lote'] , 0, 0,'l',true);

		$pdf->Ln(7); 
		$pdf->SetFont('Arial','B',7);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 6,"PRECIO METRO2: ", 0, 0);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(157, 6, $res['precio_m2'] , 0, 0,'l',true);

		$pdf->Ln(7); 
		$pdf->SetFont('Arial','B',7);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 6,"VALOR TOTAL: ", 0, 0);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(157, 6, $res['valor_m2'] , 0, 0,'l',true);

		$pdf->Ln(7); 
		$pdf->SetFont('Arial','B',7);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 6,utf8_decode("PROMOCIÓN: "), 0, 0);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(157, 6, $res['promocion'] , 0, 0,'l',true);

		$pdf->Ln(7); 
		$pdf->SetFont('Arial','B',7);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 6,"ENGANCHE: ", 0, 0);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(157, 6, $res['enganche'] , 0, 0,'l',true);

		$pdf->Ln(7); 
		$pdf->SetFont('Arial','B',7);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(40, 6,"FECHA DE PAGO ENGANCHE: ", 0, 0);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(152, 6, $res['fecha_pagoengan'] , 0, 0,'l',true);

		$pdf->Ln(7); 
		$pdf->SetFont('Arial','B',7);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 6,"FINANCIAMIENTO: ", 0, 0);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(157, 6, $res['financia'] , 0, 0,'l',true);

		$pdf->Ln(12);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->MultiCell(192,7, "C O M E N T A R I O S", 0,'L',true);
		$pdf->SetFont('Arial','B',8);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->MultiCell(192, 7, $res['comentario'] , 0,'L',true);

		/*
	    // Go to 1.5 cm from bottom
	    $pdf->SetY(-28);
	    //$pdf->SetFont('Arial','I',8);
	    //$pdf->Cell(0,10,'Page ',0,0,'C');
	    $pdf->SetFont('Arial','B',10);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->MultiCell(192,7, "SE ACEPTAN TARJETAS", 1,'L',true);
		//$pdf->Image('images/tarjetas.jpg',87,268.5, 32,8.1,0, '', '', true);
		//$pdf->Image('images/inversion-banner.jpg',6,5,196,37,0, '', '', true);
		*/


		/*
		$pdf->Ln(5);
		//$pdf->SetXY(65,$pdf->GetY()-0);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(40, 5,"NOTAS", 1, 0,'C',true);
		$pdf->Ln(5);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->MultiCell(185, 5,html_entity_decode($res['nota_hotel'], ENT_QUOTES ,'UTF-8'),0,'J','0');
		
				
		$sql_notas=mysqli_query($con, "SELECT * FROM tb_res_solicitud WHERE id_res='".$id_res."' ");
		while($rows=$con->fetcharray($sql_notas)){
			
		  $pdf->Ln(5);
		  $pdf->SetFillColor($r, $g, $b);
		  $pdf->SetTextColor($r2, $g2, $b2);
		  $pdf->Cell(40, 5,"NOTAS (".$rows['fecha'].")", 1, 0,'C',true);
		  $pdf->Ln(5);
		  $pdf->SetFillColor(255, 255, 255);
		  $pdf->SetTextColor(0, 0, 0);
		  $pdf->MultiCell(185, 5,html_entity_decode($rows['observaciones']),0,'J','0');
		}
		*/

$pdf->Output();
?>