<?PHP
include("../config.sys.php");
include("class.phpmailer.php");
include("class.smtp.php");

//enviar.send("nombre_es="+nombre_es+"&tele_es="+tele_es+"&indus_es="+indus_es+"&tamano_es="+tamano_es+"&dear="+dear+"&campaign="+campaign+"&datos_notas="+datos_notas);
$name=htmlentities($_POST['firstname'],ENT_NOQUOTES,'UTF-8');
$phone=$_POST['phone'];
$email=$_POST['email'];
$dear=$_POST['dear'];
$campaign=$_POST['campaign'];
$datos_notas=htmlentities($_POST['datos_notas'],ENT_NOQUOTES,'UTF-8');
 
$idioma="ENG";
$origen='mexico.myvacations4life.com';
$codigo="Getaway at 899";
$text_ok="Information sent successfully";
$text_error="Error, Information not sent";

$tel_sitio="1888 971 6954";
$horario_trabajo="Monday to Friday from 9:00am to 9:00pm and Saturdays from 9:00am to 2:00pm";


$mes_act=date("m");
switch ($mes_act) {
    case 01: $mes_t="ENE"; break;
    case 02: $mes_t="FEB"; break;
    case 03: $mes_t="MAR"; break;
	case 04: $mes_t="ABR"; break;
	case 05: $mes_t="MAY"; break;
	case 06: $mes_t="JUN"; break;
	case 07: $mes_t="JUL"; break;
	case 08: $mes_t="AGO"; break;
	case 09: $mes_t="SEP"; break;
	case 10: $mes_t="OCT"; break;
	case 11: $mes_t="NOV"; break;
	case 12: $mes_t="DIC"; break;
}

$codigo_semana=$day."".$mes_t."".$year;

$sql_registro_crm= mysql_query("INSERT INTO tb_kpimkt (`his_name`,`mail1`, `tel1`, date, status, notas, origen, codeweek, codepromo, idioma) VALUES  ('$dear $name', '$email', '$phone', '$today', 'Nuevo', '$origen $campaign Promo: $codigo $datos_notas', 'Social Media LP', '$codigo_semana', '$codigo', '$idioma') ") or die (mysql_error());


if($email!=''){
	
	echo '<div class="borde_ok" align="center" style="margin:20px 20px 0px 60px;" ><br />';
	echo '<a href="http://mexico.myvacations4life.com/thankyou.php"><input value="NEXT" class="buton" type="button"></a><div style=" color:#000"><h1>'.$text_ok.'</h1>A TRAVEL SPECIALIST WILL COMMUNICATE WITH YOU TO GIVE YOU THE DETAILS OF THE PROMOTION</div>';
	//secho '<a class="button btn-small sky-blue1" href="#" onclick="cerrar_popup()">Gracias. '.$text_ok.', Aceptar</a><br />';
	//echo '<meta http-equiv="Refresh" content="1;URL=http://mexico.myvacations4life.com/thankyou.php">';
	echo '<br /></div>';
	//header("Location: http://mexico.myvacations4life.com/thankyou.php");

	
/////////// MAIL 1
$mail = new PHPMailer();
$mail->IsSMTP();
//$mail->IsSendmail();
$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Host ="mail.myvacations4life.com";
$mail->Port ="26";
$mail->Username =$mail_serv;
$mail->Password =$pass_serv;
$mail->From ="info@myvacations4life.com";
//$mail->AddReplyTo("micalaverita@myvacations4life.com","Vacations For Life");
$mail->FromName ="Promotion V4L";
$mail->Subject ="V4L Promotions";
//$mail->AltBody = "Hola, te doy mi nuevo numero\nxxxx.";
$mail->MsgHTML("<body><table align='center' width='600' border='0'><tr>
  <td colspan='2' align='center'><img src='http://myvacations4life.com/images/mail_banner_en.jpg' alt='Gracias'/></td></tr><tr>
    <td width='385'><strong>Hi: ".$dear." ".$name." </strong></td>
    <td width='261' align='center'>&nbsp;</td></tr><tr><td colspan='2'><div style='width:600px; margin:15px; text-align:justify;'><br />As promised, here&rsquo;s the <a href='http://myvacations4life.com/promociones_en.php'>hotel  list</a>. Pretty cool,  right?
  <br /><br />You may notice that we have a wide range of hotel rates (not exactly 4 nights for $899). Make no mistake, though, the $899 offer can only be redeemed over the phone.
  <br /><br />Call us at <strong>1888 971 6954</strong> or wait for one of our travel consultants to reach out to you.
  <br /><br /><em>PD: If you have any questions, feel free to contact  us via our support chat </em><a href='http://myvacations4life.com/index_en.php'><em>in  our website</em></a>. <br /><br />Cheers!.
  <br /><br />Thank you!<br />V4L Team</div></td></tr><tr><td colspan='5' bgcolor='#00A19C'></td></tr><tr><td colspan='2'><img src='http://myvacations4life.com/images/mail_tira.jpg' alt='Gracias2'/></td></tr> </table></body>");
//$mail->AddAddress($email); ".$tel_sitio." de ".$horario_trabajo."

//$mail->AddAddress("diego.ek@nat-group.com");
$mail->AddAddress($email);
$mail->AddAddress("info@myvacations4life.com");
//$mail->AddBCC($mail_mkt);
$mail->IsHTML(true);
  if(!$mail->Send()) {	echo "Error: " . $mail->ErrorInfo;	} else { echo "..."; }
  
}else{
	echo '<div class="borde_ok" align="center" style="margin:20px 20px 0px 60px;"> <br />';
	//echo '<div class="alert alert-error">'.$text_error.' <br /><span class="close"></span></div>';
	//echo '<a class="button btn-small sky-blue1" href="#" onclick="cerrar_popup()"> '.$text_error.', Aceptar</a>';
	echo '<a href="http://mexico.myvacations4life.com/"><input value="Ups!!!" class="buton" type="button" > <div class="activa"><h1>'.$text_error.'</h1></div></a>';
	echo '<br /><br /></div>';
}
///////////SEGUNDO MAIL - INFO

$mail = new PHPMailer();
$mail->IsSMTP();
//$mail->IsSendmail();
$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Host ="mail.myvacations4life.com";
$mail->Port ="26";
$mail->Username =$mail_serv;
$mail->Password =$pass_serv;
$mail->From ="info@myvacations4life.com";
//$mail->AddReplyTo("micalaverita@myvacations4life.com","Vacations For Life");
$mail->FromName ="Promocion V4L";
$mail->Subject ="V4L ENG: ".$name."";
//$mail->AltBody = "Hola, te doy mi nuevo numero\nxxxx.";
$mail->MsgHTML("<body><table align='center' width='650' border='0'>
  <tr><td colspan='2' align='center'><br /><strong>Registro Promo</strong></td></tr>
  <tr><td colspan='2' height='10' bgcolor='#FFC700'></td></tr>
  <tr><td width='299'><strong> Nombre: ".$name."</strong></td><td width='299'>Fecha: <strong>".date("d-m-Y")."</strong></td></tr>  <tr><td colspan='2'><div style='width:600px; margin:15px; text-align:justify;'>
 Correo Electronico: ".$email."<br />Tel: ".$phone."<br />Codigo de promocion: ".$codigo." <br /> 
  <br /><br />Correo enviado del sitio V4L - Promocion: ".$origen."</div></td></tr>
  <tr><td colspan='2' height='10' bgcolor='#3AA8D6'></td></tr>
  <tr><td height='30' colspan='5' bgcolor='#B3D1FF'>&nbsp;</td></tr></table></body>");
//$mail->AddAddress("diego.ek@nat-group.com");

$mail->AddAddress("info@myvacations4life.com");
$mail->AddAddress("hector.moran@nat-group.com");
$mail->AddBCC("yessica.lopez@thetravel-butler.com");
$mail->AddBCC("christopher.melton@nat-group.com"); 
$mail->AddBCC("maleny.bric@nat-group.com");
$mail->AddBCC("diseno.nat@gmail.com");

$mail->IsHTML(true);
  if(!$mail->Send()) {	echo "Error: " . $mail->ErrorInfo;	}else{ echo "..."; }


echo '<script>window.location="http://mexico.myvacations4life.com/thankyou.php";</script>';

?>
