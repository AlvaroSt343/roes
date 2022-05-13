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

$sql=mysqli_query($con, "SELECT * FROM web_cotizador WHERE id='".$id."' ");
$res=mysqli_fetch_array($sql);


$val_mes6= number_format($res['val_mes6'] ,2);
$val_mes12= number_format($res['val_mes12'] ,2);
$val_mes18= number_format($res['val_mes18'] ,2);
$val_mes24= number_format($res['val_mes24'] ,2);
$val_mes30= number_format($res['val_mes30'] ,2);
$val_mes36= number_format($res['val_mes36'] ,2);

$precio_m2= number_format($res['precio_m2'] ,2);
$val_lote= number_format($res['val_lote'] ,2);
$precio_m2_promo= number_format($res['precio_m2_promo'] ,2);
$val_lote_promo= number_format($res['val_lote_promo'] ,2);
$monto_enganche= number_format($res['monto_enganche'] ,2);
$saldo_lote= number_format($res['saldo_lote'] ,2);

$costo_admin= number_format($res['costo_admin'],2);
$costo_enganche= number_format($res['costo_enganche'] ,2);
$total_pago= number_format($res['total_pago'] ,2);

$monto_mes= number_format($res['monto_mes'] ,2); 
$moneda= $res['moneda'];

//if($res){

define ('FPDF_FONTPATH','font/');
require('pdf/mc_table.php');
//require(pdf/fpdf.php');

 

$pdf=new PDF_MC_Table();
$pdf->Open();
$pdf->AddPage("P");
$pdf->SetFont('Arial','B',10);
//$pdf->Image('logo1.jpg',10,5,177,15,'JPG');
//$pdf->Image('logo1.jpg',156,22,30,14,'JPG');

	//$r=154;$g=208;$b=214;
	$r=0;$g=30;$b=71;
	$r2=255;$g2=255;$b2=255;
	$font = 6;
        
$pdf->Image('images/inversion-banner.jpg',6,5,196,37,0, '', '', true);

$pdf->SetTextColor(0,0,0);
$pdf->SetXY(80,23);
$pdf->MultiCell(90,2,utf8_decode("FORMATO DE COTIZACIÓN"),0,'L');
		
		$pdf->SetXY(10,50);
		$pdf->SetFont('Arial','B',12);
		$pdf->SetFillColor(255,255,255);
		$pdf->SetTextColor(0, 30, 71);
		$pdf->Cell(55, 5,utf8_decode("COTIZACIÓN: ").$res['id'], 0,  'L');

		$pdf->SetFont('Arial','B',6);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		//$pdf->SetTextColor(255, 255, 255);
		$pdf->Cell(67, 5,"FECHA: ".$res['fecha'], 1, 0);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(70, 5,"INVERSIONISTA: ".$res['inversionista'] , 1, 0,'l',true);

		$pdf->Ln(5); 
		$pdf->SetFillColor(255,255,255);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(55, 5," ", 0,  'L');
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(67, 5,utf8_decode("TELÉFONO: ").$res['tel'], 1, 0);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(70, 5,"EMAIL: ".$res['email'] , 1, 0,'l',true);

		$pdf->Ln(5); 
		$pdf->SetFillColor(255,255,255);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(55, 5," ", 0,  'L');
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(67, 5,utf8_decode("OCUPACIÓN: ").$res['ocupacion'], 1, 0);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(70, 5,"ESTADO CIVIL: ".$res['ecivil'] , 1, 0,'l',true);
		
		$pdf->Ln(5); 
		$pdf->SetFillColor(255,255,255);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(55, 5," ", 0,  'L');

		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(67, 5,"ASESOR: ".$res['asesor'], 1, 0);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(70, 5,"DESARROLLO: ".$res['desarrollo'] , 1, 0,'l',true);

		$pdf->Ln(5); 
		$pdf->SetFillColor(255,255,255);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(55, 5," ", 0,  'L');

		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(67, 5,"OFICINA: ".$res['oficina'], 1, 0);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(70, 5," ", 1, 0,'l',true);

		//$val_mes6= number_format($res['cal_lotes_tot'] ,2);
		if ($res['cal_lotes_tot']!="") {
			$cal_lotes_tot =$res['cal_lotes_tot'];
			$lote_separadas = explode(', ', $cal_lotes_tot);
			$longitud= count($lote_separadas);
			$longitud_new= $longitud -1;

			$new_lotes_tot="";
			for($i=0; $i < $longitud_new; $i++){
				$new_lotes_tot = $new_lotes_tot." / ".$lote_separadas[$i];
			}

		}else{
			$new_lotes_tot=$res['cal_lotes_tot'];
		}



		if ($res['cal_lote_m2tot']!="") {
			$cal_lote_m2tot =$res['cal_lote_m2tot'];
			$lote_m2divi = explode(', ', $cal_lote_m2tot);
			$longitud= count($lote_m2divi);
			$longitud_new= $longitud -1;

			$new_m2lotes_tot="";
			for($i=0; $i < $longitud_new; $i++){
				$new_m2lotes_tot = $new_m2lotes_tot." / ".$lote_m2divi[$i] ;
			}
		}else{
			$new_m2lotes_tot=$res['cal_lote_m2tot'];
		}

		if ($res['cal_lote_preciotot']!="") {
			//$cal_lote_preciotot = substr($res['cal_lote_preciotot'], 0, -1); 
			$cal_lote_preciotot =$res['cal_lote_preciotot'];
			$lote_predivi = explode(', ', $cal_lote_preciotot);
			$longitud= count($lote_predivi);
			$longitud_new= $longitud -1;

			$new_preciolotes_tot="";
			for($i=0; $i < $longitud_new; $i++){
				$new_preciolotes_tot = $new_preciolotes_tot." / $". number_format($lote_predivi[$i],2)." ".$moneda ;
			}
		}else{
			$new_preciolotes_tot=$res['cal_lote_preciotot'];
		}

		$pdf->SetXY(10,75);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->MultiCell(192,7, utf8_decode("INVERSIÓN"), 1,'C',true);
		
		$pdf->SetFont('Arial','B',6);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(95, 6,utf8_decode("NÚMERO DE LOTE: ").$res['nlote']." ".$new_lotes_tot , 1, 0);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(97, 6,"ETAPA:  ".$res['etapa'], 1, 0,'l',true);

		$pdf->Ln(6);
		$pdf->SetFont('Arial','B',6);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(95, 6,"METROS CUADRADOS DEL LOTE: ".$res['m2_lote']." ".$new_m2lotes_tot, 1, 0);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(97, 6,"PRECIO DEL METRO CUADRADO: $ ".$precio_m2." ".$moneda, 1, 0,'l',true);

		$pdf->Ln(6);
		$pdf->SetFont('Arial','B',6);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(95, 6,"VALOR DEL LOTE: $".$val_lote." ".$moneda." ".$new_preciolotes_tot, 1, 0);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(97, 6," " , 1, 0,'l',true);


		$pdf->Ln(10);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->MultiCell(192,7,utf8_decode("PROMOCIÓN"), 1,'C',true);
		
		$pdf->SetFont('Arial','B',6);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(95, 6,utf8_decode("TIPO DE PROMOCIÓN: ").$res['tipo_promo'], 1, 0);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(97, 6,utf8_decode("PRECIO METRO CUADRADO CON PROMOCIÓN: $ ").$precio_m2_promo ." ".$moneda, 1, 0,'l',true);
		if($res['tipo_promo']=="DESCUENTO"){
		
		$pdf->Ln(6);
		$pdf->SetFont('Arial','B',6);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(95, 6,"VALOR DEL DESCUENTO: ".$res['valor_descuento']." %", 1, 0);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(97, 6,utf8_decode("VALOR DE LOTE CON PROMOCIÓN: $ ").$val_lote_promo ." ".$moneda, 1, 0,'l',true);

		}
		if($res['tipo_promo']=="BONO"){
			$pdf->Ln(6);
		$pdf->SetFont('Arial','B',6);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(95, 6,"VALOR DEL BONO: $".$res['valor_descuento'], 1, 0);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(97, 6,utf8_decode("VALOR DE LOTE CON PROMOCIÓN: $ ").$val_lote_promo ." ".$moneda, 1, 0,'l',true);



		}

		
		$pdf->Ln(10);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->MultiCell(192,7, "ENGANCHE", 1,'C',true);

		$pdf->SetFont('Arial','B',6);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(95, 6,"PORCENTAJE DE ENGANCHE: ".$res['porce_enganche']." %", 1, 0);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(97, 6,"MONTO DE ENGANCHE: $ ".$monto_enganche ." ".$moneda, 1, 0,'l',true);

		$pdf->Ln(6);
		$pdf->SetFont('Arial','B',6);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(95, 6,"SALDO DEL LOTE: $ ".$saldo_lote ." ".$moneda, 1, 0);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(97, 6," FECHA PAGO DE ENGANCHE: ".$res['fecha_penganche'], 1, 0,'l',true);



		$pdf->Ln(10);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->MultiCell(192,7, "SALDO A MESES SIN INTERESES", 1,'C',true);

		$pdf->SetFont('Arial','B',7);
		$pdf->SetFillColor(166, 166, 166);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(95, 6,$res['mes_interes']." MENSUALIDADES ", 1, 0,'C',true);
		$pdf->SetFillColor(166, 166, 166);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(97, 6,"MONTO MENSUAL $ ".$monto_mes ." ".$moneda,1, 0,'C',true);
		/*
		$pdf->Ln(6);
		$pdf->SetFont('Arial','B',7);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(95, 7," 6 MESES", 0,0,'L',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(97, 7,"  $ ".$val_mes6, 0,0,'L',true);

		$pdf->Ln(6); 
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(95, 7," 12 MESES", 0,0,'L',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(97, 7,"  $ ".$val_mes12, 0,0,'L',true);

		$pdf->Ln(6); 
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(95, 7," 18 MESES", 0,0,'L',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(97, 7,"  $ ".$val_mes18, 0,0,'L',true);

		$pdf->Ln(6); 
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(95, 7," 24 MESES", 0,0,'L',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(97, 7,"  $ ".$val_mes24, 0,0,'L',true);

		$pdf->Ln(6); 
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(95, 7," 30 MESES", 0,0,'L',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(97, 7,"  $ ".$val_mes30, 0,0,'L',true);

		$pdf->Ln(6); 
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(95, 7," 36 MESES", 0 ,0,'L',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(97, 7,"  $ ".$val_mes36, 0,0,'L',true);
		*/
		$pdf->Ln(10);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->MultiCell(192,7, "TIPOS DE PAGOS", 1,'C',true);

		$pdf->SetFont('Arial','B',6);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(95, 7,"FORMA DE PAGO: ".$res['tipo_pago'], 1,0,'L',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(97, 7, "", 1,0,'L',true);

		//if($res['desarrollo']=="AACTUN-HA"){
		if($res['desarrollo']=="MARAVILLAS DEL MAYAB"){
			$pdf->Image("images/pagos_online.jpg" , 105,176, 50,21,  0,"https://lotes.grupofertia.com/pagos/altamisa/210722-msi");	
		}else{
			$pdf->Image('images/datos_pagos.jpg',105,174, 97,45, 0, '', '', true);
		}
	
		$pdf->Ln(40);
		$pdf->Ln(10);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->MultiCell(192,7, utf8_decode("MONTO DE INVERSIÓN INICIAL"), 1,'C',true);

		$pdf->SetFont('Arial','B',6);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(95, 7,"COSTO ADMINISTRATIVO: $ ".$costo_admin." ".$moneda, 1,0,'L',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(97, 7, $res['txtcostoadmin'], 1,0,'L',true);

		$pdf->Ln(6);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(95, 7,"ENGANCHE: $ ".$costo_enganche." ".$moneda, 1,0,'L',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(97, 7,"    ", 1,0,'L',true);

		$pdf->Ln(6);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(95, 7,"TOTAL A PAGAR = $ ".$total_pago." ".$moneda, 1,0,'L',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(97, 7,"    ", 1,0,'L',true);

		$pdf->Ln(7);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->MultiCell(192, 7,"La disponibilidad de los lotes se actualiza constantemente por lo que es importante apartarlo mediante el costo administrativo. ", 1, 'L');


	    // Go to 1.5 cm from bottom
	    $pdf->SetY(-28);
	    //$pdf->SetFont('Arial','I',8);
	    //$pdf->Cell(0,10,'Page ',0,0,'C');
	    $pdf->SetFont('Arial','B',10);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->MultiCell(192,7, "SE ACEPTAN TARJETAS", 1,'L',true);
		$pdf->Image('images/tarjetas.jpg',87,268.5, 32,8.1,0, '', '', true);
		//$pdf->Image('images/inversion-banner.jpg',6,5,196,37,0, '', '', true);
		$pdf->Image("images/ver_hojatrabajo.jpg" , 153,267, 48,11,  0,"https://inversionesconplusvalia.com/hoja-de-trabajo/?id=$id");	






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