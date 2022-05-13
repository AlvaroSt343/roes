<?PHP
/*
require_once("../config.sys.php");
$id_res = $_GET['id_res'];
$sql=mysql_query("SELECT * FROM tb_resevations WHERE id_res='".$id_res."'") or die(mysql_error());
$res=mysql_fetch_array($sql);
*/
set_time_limit(0);
date_default_timezone_set("America/Cancun");
require_once('src/sentry.php');
include("src/dbconnector.php");
$con=new dbconnector();

$id_oper=$_SESSION['iden'];
$sesiom_activa=$_SESSION['user'];
$id_res = $_GET['id'];
//$id_res = 1;

$sql=$con->query("SELECT * FROM tb_resevations WHERE id_res='".$id_res."' ");
$res=$con->fetcharray($sql);
//if($res){

define ('FPDF_FONTPATH','src/font/');
require('src/pdf/mc_table.php');
//require('../pdf/fpdf.php');

$pdf=new PDF_MC_Table();
$pdf->Open();
$pdf->AddPage("P");
$pdf->SetFont('Arial','B',10);
//$pdf->Image('logo1.jpg',10,5,177,15,'JPG');
//$pdf->Image('logo1.jpg',156,22,30,14,'JPG');

	$r=154;$g=208;$b=214;
	$r2=0;$g2=0;$b2=0;
	$font = 6;
        
//$pdf->Image('src/pdf/logo.jpg',10,12,40,15,0, '', '', true);

$pdf->SetTextColor(0,0,0);
$pdf->SetXY(80,23);
$pdf->MultiCell(90,2,"FORMATO DE RESERVACIONES",0,'L');
		
		$pdf->SetXY(10,30);
		$pdf->SetFont('Arial','B',$font);
		
		$pdf->SetFillColor(255,255,255);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(35, 5,"BOOKING", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(60, 5,$res['idbook'], 1, 0,'C',true);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		//$pdf->SetTextColor(255, 255, 255);
		$pdf->Cell(35, 5,"FECHA", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(55, 5,$res['fecha_res']." ".$res['hora_res'] , 1, 0,'C',true);
		
		$pdf->Ln(5);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(35, 5,"HOTEL", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(60, 5,$res['hotel'], 1, 0,'C',true);

		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(35, 5,"CONFIRMACION", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(55, 5,$res['confirma'], 1, 0,'C',true);
		
		$pdf->Ln(5);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(35, 5,"DESTINO", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(60, 5,$res['destino'], 1, 0,'C',true);

		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(20, 5,"T&C", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(25, 5,$res['TC'], 1, 0,'C',true);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(20, 5,"STATUS", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(25, 5,$res['age_status'], 1, 0,'C',true);
		
		$pdf->Ln(5);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(35, 5,"CHECK IN", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(30, 5,$res['llegada'], 1, 0,'C',true);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(15, 5,"NOCHES", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(15, 5,$res['noches'], 1, 0,'C',true);
		
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(20, 5,"ADULTOS", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(25, 5,$res['pax'], 1, 0,'C',true);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(20, 5,"ESTADO CIVIL.", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(25, 5,$res['etd_civil'], 1, 0,'C',true);
		
		$pdf->Ln(5);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(35, 5,"CHECK OUT", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(30, 5,$res['salida'], 1, 0,'C',true);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(15, 5,"HAB.", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(15, 5,$res['habitacion'], 1, 0,'C',true);
		
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(20, 5,"MENORES", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(25, 5,$res['menores'], 1, 0,'C',true);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(20, 5,"EDADES", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(25, 5,$res['edades'], 1, 0,'C',true);
		
		//HIS NAME
		$pdf->Ln(10);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(35, 5,"TITULAR 1", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(80, 5,$res['his_name'], 1, 0,'C',true);

		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(30, 5,"EDAD", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(40, 5,$res['edad1'], 1, 0,'C',true);
			
		$pdf->Ln(5);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(35, 5,"EMAIL", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(80, 5,$res['correo1'], 1, 0,'C',true);

		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(30, 5,"OCUPACION", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(40, 5,$res['ocupacion1'], 1, 0,'C',true);
		
		//HER NAME
		$pdf->Ln(5);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(35, 5,"TITULAR 2", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(80, 5,$res['her_name'], 1, 0,'C',true);

		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(30, 5,"EDAD", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(40, 5,$res['edad2'], 1, 0,'C',true);
		
		$pdf->Ln(5);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(35, 5,"EMAIL", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(80, 5,$res['correo2'], 1, 0,'C',true);

		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(30, 5,"OCUPACION", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(40, 5,$res['ocupacion2'], 1, 0,'C',true);
		
		$pdf->Ln(5);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(35, 5,"TARJETA CREDITO", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(30, 5,$res['tarjeta1'], 1, 0,'C',true);
		
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(15, 5,"T. CREDITO 2", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 5,$res['tarjeta2'], 1, 0,'C',true);
		
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(30, 5,"INGRESO MANCOMUNADO", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(40, 5,$res['ingreso'], 1, 0,'C',true);
		
		$pdf->Ln(5);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(35, 5,"TEL CASA", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(30, 5,$res['tel_1'], 1, 0,'C',true);
		
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(15, 5,"TEL OFICINA", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 5,$res['tel_2'], 1, 0,'C',true);
		
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(30, 5,"CELULAR", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(40, 5,$res['celular'], 1, 0,'C',true);
		
		$pdf->Ln(5);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(35, 5,"DIRECCION", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(80, 5,$res['domicilio'], 1, 0,'C',true);

		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(30, 5,"CIUDAD", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(40, 5,$res['ciudad'], 1, 0,'C',true);
		
		$pdf->Ln(5);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(35, 5,"ESTADO", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(30, 5,$res['estado'], 1, 0,'C',true);
		
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(15, 5,"PAIS", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 5,$res['pais'], 1, 0,'C',true);
		
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(30, 5,"CODIGO", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(40, 5,$res['cpostal'], 1, 0,'C',true);
		
		//SECCION COSTOS
		/*
		$pdf->Ln(10);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(35, 5,"VERIFICACION RESERVA", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(40, 5,$res['VO'], 1, 0,'C',true);

		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(20, 5,"DATE", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 5,$res['DATE_VO'], 1, 0,'C',true);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(20, 5,"STATUS", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 5,$res['STATUS_VLO'], 1, 0,'C',true);
		
		$pdf->Ln(5);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(35, 5,"VERIFICACION VENTA", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(40, 5,$res['vlo_venta'], 1, 0,'C',true);

		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(20, 5,"DATE", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 5,$res['fecha_vv'], 1, 0,'C',true);
		
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(20, 5,"VENTA", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 5,$res['VENTA_MEMB'], 1, 0,'C',true);
		
		$pdf->Ln(5);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(35, 5,"EXECUTIVE", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(40, 5,$res['ejecutivo'], 1, 0,'C',true);

		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(20, 5,"SUPERVISOR", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 5,$res['superv'], 1, 0,'C',true);
		
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(20, 5,"GERENTE", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 5,$res['gerente'], 1, 0,'C',true);
		
		$pdf->Ln(5);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(35, 5,"YELLOW TRANSFER", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(40, 5,$res['Yellow_Tr'], 1, 0,'C',true);

		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(20, 5,"COST YT", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 5,$res['Cost_YT'], 1, 0,'C',true);
		
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(20, 5,"PACK", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(35, 5,$res['PACK'], 1, 0,'C',true);
		
		$pdf->Ln(5);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(35, 5,"TRAVEL BUTLER", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(60, 5,$res['TTB'], 1, 0,'C',true);
		
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(35, 5,"", 1, 0,'C',true);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->Cell(55, 5,"" , 1, 0,'C',true);
		*/
		$pdf->Ln(10);
		//$pdf->SetXY(65,$pdf->GetY()-0);
		/*
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(40, 5,"NOTES", 1, 0,'C',true);
		$pdf->Ln(5);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0,  0);
		$pdf->MultiCell(180, 5,html_entity_decode($res['notes']),0,'J','0');
		*/
		
		$pdf->Ln(5);
		//$pdf->SetXY(65,$pdf->GetY()-0);
		$pdf->SetFillColor($r, $g, $b);
		$pdf->SetTextColor($r2, $g2, $b2);
		$pdf->Cell(40, 5,"NOTAS", 1, 0,'C',true);
		$pdf->Ln(5);
		$pdf->SetFillColor(255, 255, 255);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->MultiCell(185, 5,html_entity_decode($res['nota_hotel'], ENT_QUOTES ,'UTF-8'),0,'J','0');
		
				
		$sql_notas=$con->query("SELECT * FROM tb_res_solicitud WHERE id_res='".$id_res."' ");
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
		
		
$pdf->Output();

?>