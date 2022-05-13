<?PHP
include("../config.sys.php");
include("class.phpmailer.php");
include("class.smtp.php");



function GetUserIP() {

	if(isset($_SERVER)){


       if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))

        return $_SERVER["HTTP_X_FORWARDED_FOR"];



       if (isset($_SERVER["HTTP_CLIENT_IP"]))

        return $_SERVER["HTTP_CLIENT_IP"];



       return $_SERVER["REMOTE_ADDR"];

	}

	if (getenv('HTTP_X_FORWARDED_FOR'))

      return getenv('HTTP_X_FORWARDED_FOR');

  

	if (getenv('HTTP_CLIENT_IP'))

      return getenv('HTTP_CLIENT_IP');



    return getenv('REMOTE_ADDR');

}



$ipreal=GetUserIP();
$folio=$_POST['folio'];
$hotel=$_POST['hotel'];
$name=htmlentities($_POST['name'],ENT_NOQUOTES,'UTF-8');
$coment=htmlentities($_POST['coment'],ENT_NOQUOTES,'UTF-8');
$edad=$_POST['edad'];
$domicilio=htmlentities($_POST['domicilio'],ENT_NOQUOTES,'UTF-8');
$email=$_POST['email'];
$lada=$_POST['lada'];
$telefono=$_POST['telefono'];
$pais=$_POST['pais'];
$origen='http://myvacations4life.com/GNP/';

$mes_act=date("m");

switch ($mes_act) {

    case '01': $mes_t="ENE"; break;

    case '02': $mes_t="FEB"; break;

    case '03': $mes_t="MAR"; break;

	case '04': $mes_t="ABR"; break;

	case '05': $mes_t="MAY"; break;

	case '06': $mes_t="JUN"; break;

	case '07': $mes_t="JUL"; break;

	case '08': $mes_t="AGO"; break;

	case '09': $mes_t="SEP"; break;

	case '10': $mes_t="OCT"; break;

	case '11': $mes_t="NOV"; break;

	case '12': $mes_t="DIC"; break;

}



$codigo_semana=$day."".$mes_t."".$year;

$text_ok="Registro Exitoso";

$text_error="Error";

$mail_serv="certificados@myvacations4life.com";

$pass_serv="CEmvl17**";

if($email!=''){

echo '<div class="borde_ok" align="center" style="margin:20px 20px 0px 60px;"><br />';
echo '  <div class="alert alert-success">'.$text_ok.' <br /> </div>';

	/////////// MAIL 1

	$mail = new PHPMailer();

$mail->IsSMTP();

$mail->SMTPAuth = true;

$mail->Host ="mail.myvacations4life.com";

$mail->Port ="26";

$mail->Username =$mail_serv;

$mail->Password =$pass_serv;

$mail->From ="certificados@myvacations4life.com";

$mail->FromName ="V4L Certificado_GNP";

	$mail->Subject ="V4L Certificado_GNP";

	$mail->MsgHTML('<body scroll="auto" style="padding:0; margin:0; FONT-SIZE: 12px; FONT-FAMILY: Arial, Helvetica, sans-serif; cursor:auto; background:#F3F3F3">
<TABLE class=mainTable cellSpacing=0 cellPadding=0 width="100%" bgColor=#f3f3f3>
<TR>
<TD style="LINE-HEIGHT: 0; HEIGHT: 20px; FONT-SIZE: 0px">&#160;</TD></TR>
<TR>
<TD vAlign=top>
<TABLE style="MARGIN: 0px auto; WIDTH: 803px" border=0 cellSpacing=0 cellPadding=0 width=803 align=center>
<TR>
<TD style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; PADDING-BOTTOM: 1px; BACKGROUND-COLOR: transparent; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 1px">
<TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0 align=left>
<TR style="HEIGHT: 1px">
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 1px; BACKGROUND-COLOR: transparent; PADDING-LEFT: 15px; WIDTH: 100%; PADDING-RIGHT: 15px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 1px">
<P style="LINE-HEIGHT: 125%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #7c7c7c; FONT-SIZE: 14px; mso-line-height-rule: exactly" align=center>&nbsp;</P></TD></TR></TABLE></TD></TR>
<TR>
<TD style="BORDER-BOTTOM: #dbdbdb 1px solid; BORDER-LEFT: #dbdbdb 1px solid; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #feffff; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BORDER-TOP: #dbdbdb 1px solid; BORDER-RIGHT: #dbdbdb 1px solid; PADDING-TOP: 0px">
<TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0 align=left>
<TR style="HEIGHT: 10px">
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #feffff; PADDING-LEFT: 0px; WIDTH: 100%; PADDING-RIGHT: 0px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0px">
<TABLE border=0 cellSpacing=0 cellPadding=0 align=center>
<TR>
<TD style="PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px" align=middle>
<TABLE border=0 cellSpacing=0 cellPadding=0>
<TR>
<TD style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; BORDER-TOP: medium none; BORDER-RIGHT: medium none"><A href="http://www.myvacations4life.com/"><IMG style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; DISPLAY: block; BORDER-TOP: medium none; BORDER-RIGHT: medium none" border=0 src="https://myvacations4life.com/images/CERTIFICADO_GNP/Image_1.png" width=800 height=235 hspace="0" vspace="0"></A></TD></TR></TABLE></TD></TR></TABLE> </TD></TR></TABLE></TD></TR>
<TR>
<TD style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: transparent; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0px">
<TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0 align=left>
<TR style="HEIGHT: 82px">
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: transparent; PADDING-LEFT: 0px; WIDTH: 33%; PADDING-RIGHT: 0px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0px">
<TABLE border=0 cellSpacing=0 cellPadding=0 align=center>
<TR>
<TD style="PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 8px" align=middle>
<TABLE border=0 cellSpacing=0 cellPadding=0>
<TR>
<TD style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; BORDER-TOP: medium none; BORDER-RIGHT: medium none"><A href="http://www.facebook.com/vacations4L"><IMG style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; DISPLAY: block; BORDER-TOP: medium none; BORDER-RIGHT: medium none" border=0 src="https://myvacations4life.com/images/CERTIFICADO_GNP/Image_2.png" width=267 height=62 hspace="0" vspace="0"></A></TD></TR></TABLE></TD></TR></TABLE></TD>
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: transparent; PADDING-LEFT: 0px; WIDTH: 33%; PADDING-RIGHT: 0px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0px">
<TABLE border=0 cellSpacing=0 cellPadding=0 align=center>
<TR>
<TD style="PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 8px" align=middle>
<TABLE border=0 cellSpacing=0 cellPadding=0>
<TR>
<TD style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; BORDER-TOP: medium none; BORDER-RIGHT: medium none"><A href="https://myvacations4life.com/files/SECTUR.pdf"><IMG style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; DISPLAY: block; BORDER-TOP: medium none; BORDER-RIGHT: medium none" border=0 src="https://myvacations4life.com/images/CERTIFICADO_GNP/Image_3.png" width=266 height=62 hspace="0" vspace="0"></A></TD></TR></TABLE></TD></TR></TABLE></TD>
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: transparent; PADDING-LEFT: 0px; WIDTH: 33%; PADDING-RIGHT: 0px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0px">
<TABLE border=0 cellSpacing=0 cellPadding=0 align=center>
<TR>
<TD style="PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 8px" align=middle>
<TABLE border=0 cellSpacing=0 cellPadding=0>
<TR>
<TD style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; BORDER-TOP: medium none; BORDER-RIGHT: medium none"><A href="https://www.bbb.org/mexico/business-reviews/travel-agencies-and-bureaus/my-vacations-4-life-in-cancun-qr-1746?bluerefx=1"><IMG style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; DISPLAY: block; BORDER-TOP: medium none; BORDER-RIGHT: medium none" border=0 src="https://myvacations4life.com/images/CERTIFICADO_GNP/Image_4.png" width=266 height=62 hspace="0" vspace="0"></A></TD></TR></TABLE></TD></TR></TABLE></TD></TR></TABLE></TD></TR>
<TR>
<TD style="BORDER-BOTTOM: #dbdbdb 1px solid; BORDER-LEFT: #dbdbdb 1px solid; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #feffff; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BORDER-TOP: #dbdbdb 1px solid; BORDER-RIGHT: #dbdbdb 1px solid; PADDING-TOP: 0px">
<TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0 align=left>
<TR style="HEIGHT: 10px">
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #feffff; PADDING-LEFT: 0px; WIDTH: 100%; PADDING-RIGHT: 0px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0px">
<TABLE border=0 cellSpacing=0 cellPadding=0 align=center>
<TR>
<TD style="PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px" align=middle>
<TABLE border=0 cellSpacing=0 cellPadding=0>
<TR>
<TD style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; BORDER-TOP: medium none; BORDER-RIGHT: medium none"><IMG style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; DISPLAY: block; BORDER-TOP: medium none; BORDER-RIGHT: medium none" border=0 src="https://myvacations4life.com/images/CERTIFICADO_GNP/Image_5.png" width=800 height=325 hspace="0" vspace="0"></TD></TR></TABLE></TD></TR></TABLE> </TD></TR></TABLE></TD></TR>
<TR>
<TD style="BORDER-BOTTOM: #dbdbdb 1px solid; BORDER-LEFT: #dbdbdb 1px solid; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #feffff; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BORDER-TOP: #dbdbdb 1px solid; BORDER-RIGHT: #dbdbdb 1px solid; PADDING-TOP: 0px">
<TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0 align=left>
<TR style="HEIGHT: 20px">
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 35px; BACKGROUND-COLOR: #feffff; PADDING-LEFT: 15px; WIDTH: 100%; PADDING-RIGHT: 15px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 35px">
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #009f64; FONT-SIZE: 24px; mso-line-height-rule: exactly" align=center><STRONG>&#161;REGISTRO EXITOSO!</STRONG></P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #515151; FONT-SIZE: 16px; mso-line-height-rule: exactly" align=center><STRONG>'.$name.'</STRONG></P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #515151; FONT-SIZE: 14px; mso-line-height-rule: exactly" align=center>Nos da mucho gusto que hayas decidido elegirnos para hacernos cargo de tus pr&#243;ximas vacaciones al mejor precio que puedas encontrar y en los mejores hoteles de M&#233;xico y el Caribe. En Vacations4Life te aseguramos que tendr&#225;s unas vacaciones incre&#237;bles.</P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #515151; FONT-SIZE: 14px; mso-line-height-rule: exactly" align=center>Olv&#237;date de pasar horas buscando la mejor opci&#243;n para tus vacaciones, con Vacations4Life puedes estar seguro que encontraras la mejor opci&#243;n para ti y tu familia al mejor precio.</P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #515151; FONT-SIZE: 14px; mso-line-height-rule: exactly" align=center>Este certificado te permite recibir una tarifa especial para poder tomar unas vacaciones en cualquiera de los pr&#243;ximos 12 meses, disponible para 2 adultos&#160;y 2 menores*&#160;en los destinos y hoteles&#160;mencionados&#160;en&#160;este correo. </P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #515151; FONT-SIZE: 14px; mso-line-height-rule: exactly" align=center>Tu estancia&#160;consta de 5 d&#237;as / 4 noches TODO INCLUIDO*</P></TD></TR></TABLE></TD></TR>
<TR>
<TD style="BORDER-BOTTOM: #dbdbdb 1px solid; BORDER-LEFT: #dbdbdb 1px solid; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #feffff; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BORDER-TOP: #dbdbdb 1px solid; BORDER-RIGHT: #dbdbdb 1px solid; PADDING-TOP: 0px">
<TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0 align=left>
<TR style="HEIGHT: 10px">
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #feffff; PADDING-LEFT: 0px; WIDTH: 100%; PADDING-RIGHT: 0px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0px">
<TABLE border=0 cellSpacing=0 cellPadding=0 align=center>
<TR>
<TD style="PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px" align=middle>
<TABLE border=0 cellSpacing=0 cellPadding=0>
<TR>
<TD style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; BORDER-TOP: medium none; BORDER-RIGHT: medium none"><IMG style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; DISPLAY: block; BORDER-TOP: medium none; BORDER-RIGHT: medium none" border=0 src="https://myvacations4life.com/images/CERTIFICADO_GNP/Image_6.png" width=800 height=325 hspace="0" vspace="0"></TD></TR></TABLE></TD></TR></TABLE> </TD></TR></TABLE></TD></TR>
<TR>
<TD style="BORDER-BOTTOM: #dbdbdb 1px solid; BORDER-LEFT: #dbdbdb 1px solid; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #feffff; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BORDER-TOP: #dbdbdb 1px solid; BORDER-RIGHT: #dbdbdb 1px solid; PADDING-TOP: 0px">
<TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0 align=left>
<TR style="HEIGHT: 116px">
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #00a19b; PADDING-LEFT: 0px; WIDTH: 100%; PADDING-RIGHT: 0px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0px">
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #a8a7a7; FONT-SIZE: 24px; mso-line-height-rule: exactly" align=center><STRONG><BR><FONT style="COLOR: #fafefe; FONT-SIZE: 25px">HOTELES DISPONIBLES PARA TI Y TU FAMILIA</FONT></STRONG></P></TD></TR></TABLE></TD></TR>
<TR>
<TD style="BORDER-BOTTOM: transparent 3px dotted; BORDER-LEFT: medium none; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: transparent; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0px">
<TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0 align=left>
<TR style="HEIGHT: 20px">
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #fafefe; PADDING-LEFT: 0px; WIDTH: 29%; PADDING-RIGHT: 0px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0px">
<TABLE border=0 cellSpacing=0 cellPadding=0 align=center>
<TR>
<TD style="PADDING-BOTTOM: 15px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; PADDING-TOP: 15px" align=middle>
<TABLE border=0 cellSpacing=0 cellPadding=0>
<TR>
<TD style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; BORDER-TOP: medium none; BORDER-RIGHT: medium none"><IMG style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; DISPLAY: block; BORDER-TOP: medium none; BORDER-RIGHT: medium none" border=0 src="https://myvacations4life.com/images/CERTIFICADO_GNP/Image_7.jpg" width=230 height=297 hspace="0" vspace="0"></TD></TR></TABLE></TD></TR></TABLE></TD>
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 10px; BACKGROUND-COLOR: #fafefe; PADDING-LEFT: 10px; WIDTH: 71%; PADDING-RIGHT: 10px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 10px">
<P style="LINE-HEIGHT: 125%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #3c3e3e; FONT-SIZE: 18px; mso-line-height-rule: exactly" align=left><STRONG><BR>GLOBE QUEST VACATION CLUB</STRONG></P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #fafefe; FONT-SIZE: 14px; mso-line-height-rule: exactly" align=left><STRONG><FONT style="COLOR: #3c3e3e; FONT-SIZE: 16px">ORLANDO O MIAMI<BR></FONT><FONT style="COLOR: #ef7c14">5 D&#205;AS 4 NOCHES*<BR>2 ADULTOS 2 MENORES*</FONT></STRONG></P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #3c3e3e; FONT-SIZE: 13px; mso-line-height-rule: exactly" align=left>- Parejas casadas o en Uni&#243;n Libre de 28 a 70 a&#241;os de edad.<BR>- 1 tarjeta de cr&#233;dito (Visa, MasterCard, American Express) tarjetas departamentales, corporativas o empresariales no son v&#225;lidas.<BR>- Tomar presentaci&#243;n de GLOBE QUEST VACATION CLUB con duraci&#243;n de 120 minutos.<BR>- * Menores incluidos de 0 a 12 a&#241;os.<BR>- Cuota de reservaci&#243;n por noches $ 460.00 pesos.<BR>- * Precio total por 5 d&#237;as 4 noches 2 adultos y 2 menores de 12 a&#241;os $ 5,999 pesos.</P></TD></TR></TABLE></TD></TR>
<TR>
<TD style="BORDER-BOTTOM: transparent 3px solid; BORDER-LEFT: transparent 3px solid; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: transparent; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BORDER-TOP: transparent 3px solid; BORDER-RIGHT: transparent 3px solid; PADDING-TOP: 0px">
<TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0 align=left>
<TR style="HEIGHT: 20px">
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 10px; BACKGROUND-COLOR: #fafefe; PADDING-LEFT: 10px; WIDTH: 71%; PADDING-RIGHT: 10px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 10px">
<P style="LINE-HEIGHT: 125%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #3c3e3e; FONT-SIZE: 18px; mso-line-height-rule: exactly" align=left><STRONG><BR>UNLIMITED VACATION CLUB</STRONG></P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #fafefe; FONT-SIZE: 14px; mso-line-height-rule: exactly" align=left><STRONG><FONT style="COLOR: #3c3e3e; FONT-SIZE: 16px">CANC&#218;N, RIVIERA MAYA, COZUMEL, LOS CABOS, NUEVO VALLARTA, PUERTO VALLARTA, HUATULCO, IXTAPA, REPUBLICA DOMINICANA, PANAM&#193;, CURAZAO, JAMAICA O COSTA RICA</FONT><FONT style="COLOR: #f1a514"><FONT style="COLOR: #ef7c14"><BR>5 D&#205;AS 4 NOCHES*<BR>2 ADULTOS 2 MENORES</FONT>*</FONT></STRONG></P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #3c3e3e; FONT-SIZE: 13px; mso-line-height-rule: exactly" align=left>- Parejas casadas o en Uni&#243;n Libre de 35 a 65 a&#241;os de edad.<BR>- 2 tarjetas de cr&#233;dito ( Visa, MasterCard, American Express) tarjetas departamentales, corporativas o empresariales no son v&#225;lidas.<BR>- Tomar presentaci&#243;n de Club Vacacional. Unlimited ,Vacation Club con duraci&#243;n de 120 minutos.<BR>- *Menores incluidos de 0 a 3 a&#241;os. Mayores de 3 a 12 a&#241;os pagan 1,200 pesos por noche por menor.<BR>- Cuota de reservaci&#243;n por noches 460 pesos por noche.<BR>- Precio total por 5 d&#237;as 4 noches 2 adultos y 2 menores de 2 a&#241;os $ 9,999 pesos.&#160;<BR>- *No aplica para Socios de UNLIMITED VACATIONS CLUB.</P></TD>
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #fafefe; PADDING-LEFT: 0px; WIDTH: 29%; PADDING-RIGHT: 0px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0px">
<TABLE border=0 cellSpacing=0 cellPadding=0 align=center>
<TR>
<TD style="PADDING-BOTTOM: 35px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; PADDING-TOP: 40px" align=middle>
<TABLE border=0 cellSpacing=0 cellPadding=0>
<TR>
<TD style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; BORDER-TOP: medium none; BORDER-RIGHT: medium none"><IMG style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; DISPLAY: block; BORDER-TOP: medium none; BORDER-RIGHT: medium none" border=0 src="https://myvacations4life.com/images/CERTIFICADO_GNP/Image_8.jpg" width=230 height=297 hspace="0" vspace="0"></TD></TR></TABLE></TD></TR></TABLE></TD></TR></TABLE></TD></TR>
<TR>
<TD style="BORDER-BOTTOM: transparent 3px solid; BORDER-LEFT: transparent 3px solid; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: transparent; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BORDER-TOP: transparent 3px solid; BORDER-RIGHT: transparent 3px solid; PADDING-TOP: 0px">
<TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0 align=left>
<TR style="HEIGHT: 20px">
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #fafefe; PADDING-LEFT: 0px; WIDTH: 29%; PADDING-RIGHT: 0px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0px">
<TABLE border=0 cellSpacing=0 cellPadding=0 align=center>
<TR>
<TD style="PADDING-BOTTOM: 15px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; PADDING-TOP: 35px" align=middle>
<TABLE border=0 cellSpacing=0 cellPadding=0>
<TR>
<TD style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; BORDER-TOP: medium none; BORDER-RIGHT: medium none"><IMG style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; DISPLAY: block; BORDER-TOP: medium none; BORDER-RIGHT: medium none" border=0 src="https://myvacations4life.com/images/CERTIFICADO_GNP/Image_9.jpg" width=230 height=297 hspace="0" vspace="0"></TD></TR></TABLE></TD></TR></TABLE></TD>
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 10px; BACKGROUND-COLOR: #fafefe; PADDING-LEFT: 10px; WIDTH: 71%; PADDING-RIGHT: 10px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 10px">
<P style="LINE-HEIGHT: 125%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #3c3e3e; FONT-SIZE: 18px; mso-line-height-rule: exactly" align=left><STRONG><BR>ROYAL HOLIDAY VACATION CLUB</STRONG></P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #fafefe; FONT-SIZE: 14px; mso-line-height-rule: exactly" align=left><STRONG><FONT style="COLOR: #3c3e3e; FONT-SIZE: 16px">CANCUN<BR></FONT><FONT style="COLOR: #ef7c14">5 D&#205;AS 4 NOCHES*<BR>2 ADULTOS 2 MENORES*</FONT></STRONG></P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #3c3e3e; FONT-SIZE: 13px; mso-line-height-rule: exactly" align=left>-Parejas casadas o en Uni&#243;n Libre de 30 a 60 a&#241;os de edad.<BR>-2 tarjetas de cr&#233;dito por lo menos 1 tarjeta debe de ser platino o superior (Visa, MasterCard, American Express) tarjetas departamentales, corporativas o empresariales no son v&#225;lidas.<BR>-Ingreso mensual mancomunado mayor a $ 50,000 pesos<BR>-Tomar presentaci&#243;n de Club Vacacional Royal Holiday Vacation Club con duraci&#243;n de 120 minutos. <BR>-*Menores incluidos de 0 a 6 a&#241;os Mayores de 7 a 12 a&#241;os pagan $ 999.00 pesos por noche por menor.<BR>-Cuota de reservaci&#243;n por noches $460.00. Precio total por 5 d&#237;as 4 noches 2 adultos y 2 menores de 6 a&#241;os $ 9,999 pesos.<BR>-*No aplica para Socios de ROYAL HOLIDAY VACATION CLUB.</P></TD></TR></TABLE></TD></TR>
<TR>
<TD style="BORDER-BOTTOM: transparent 3px solid; BORDER-LEFT: transparent 3px solid; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: transparent; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BORDER-TOP: transparent 3px solid; BORDER-RIGHT: transparent 3px solid; PADDING-TOP: 0px">
<TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0 align=left>
<TR style="HEIGHT: 20px">
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 10px; BACKGROUND-COLOR: #fafefe; PADDING-LEFT: 10px; WIDTH: 71%; PADDING-RIGHT: 10px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 10px">
<P style="LINE-HEIGHT: 125%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #3c3e3e; FONT-SIZE: 18px; mso-line-height-rule: exactly" align=left><STRONG><BR>CARACOL&#160;VACATION CLUB</STRONG></P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #fafefe; FONT-SIZE: 14px; mso-line-height-rule: exactly" align=left><STRONG><FONT style="COLOR: #3c3e3e; FONT-SIZE: 16px">CANC&#218;N<BR></FONT><FONT style="COLOR: #f1a514"><FONT style="COLOR: #ef7c14">5 D&#205;AS 4 NOCHES*<BR>2 ADULTOS 2 MENORES</FONT>*</FONT></STRONG></P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #3c3e3e; FONT-SIZE: 13px; mso-line-height-rule: exactly" align=left>- Parejas casadas o en Uni&#243;n Libre de 30 a 65 a&#241;os de edad.<BR>- 2 tarjetas de cr&#233;dito (Visa, MasterCard, American Express) tarjetas departamentales, corporativas o empresariales no son v&#225;lidas.<BR>- Ingresos mancomunados mensuales de 80,000 pesos mexicanos.<BR>- Tomar presentaci&#243;n de Caracol Vacation Club con duraci&#243;n de 120 minutos<BR>-*Menores incluidos de 0 a 11 a&#241;os Mayores de 12 a&#241;os pagan cuota de adultos.&#160; <BR>- Cuota de reservaci&#243;n por noches adicionales: $ 460.00 pesos por noche por habitaci&#243;n.<BR>- Precio total por 5 d&#237;as 4 noches 2 adultos y 2 menores de 5 a&#241;os $ 11,399 mxn<BR>- *No aplica para Socios de CARACOL VACATION CLUB</P></TD>
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #fafefe; PADDING-LEFT: 0px; WIDTH: 29%; PADDING-RIGHT: 0px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0px">
<TABLE border=0 cellSpacing=0 cellPadding=0 align=center>
<TR>
<TD style="PADDING-BOTTOM: 35px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; PADDING-TOP: 40px" align=middle>
<TABLE border=0 cellSpacing=0 cellPadding=0>
<TR>
<TD style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; BORDER-TOP: medium none; BORDER-RIGHT: medium none"><IMG style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; DISPLAY: block; BORDER-TOP: medium none; BORDER-RIGHT: medium none" border=0 src="https://myvacations4life.com/images/CERTIFICADO_GNP/Image_10.png" width=230 height=297 hspace="0" vspace="0"></TD></TR></TABLE></TD></TR></TABLE></TD></TR></TABLE></TD></TR>
<TR>
<TD style="BORDER-BOTTOM: transparent 3px solid; BORDER-LEFT: transparent 3px solid; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: transparent; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BORDER-TOP: transparent 3px solid; BORDER-RIGHT: transparent 3px solid; PADDING-TOP: 0px">
<TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0 align=left>
<TR style="HEIGHT: 20px">
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #fafefe; PADDING-LEFT: 0px; WIDTH: 29%; PADDING-RIGHT: 0px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0px">
<TABLE border=0 cellSpacing=0 cellPadding=0 align=center>
<TR>
<TD style="PADDING-BOTTOM: 15px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; PADDING-TOP: 35px" align=middle>
<TABLE border=0 cellSpacing=0 cellPadding=0>
<TR>
<TD style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; BORDER-TOP: medium none; BORDER-RIGHT: medium none"><IMG style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; DISPLAY: block; BORDER-TOP: medium none; BORDER-RIGHT: medium none" border=0 src="https://myvacations4life.com/images/CERTIFICADO_GNP/Image_11.jpg" width=230 height=297 hspace="0" vspace="0"></TD></TR></TABLE></TD></TR></TABLE></TD>
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 10px; BACKGROUND-COLOR: #fafefe; PADDING-LEFT: 10px; WIDTH: 71%; PADDING-RIGHT: 10px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 10px">
<P style="LINE-HEIGHT: 125%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #3c3e3e; FONT-SIZE: 18px; mso-line-height-rule: exactly" align=left><STRONG><BR>MEXICO DESTINATION CLUB BY XCARET</STRONG></P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #fafefe; FONT-SIZE: 14px; mso-line-height-rule: exactly" align=left><STRONG><FONT style="COLOR: #3c3e3e; FONT-SIZE: 16px">CANCUN<BR></FONT><FONT style="COLOR: #ef7c14">5 D&#205;AS 4 NOCHES*<BR>2 ADULTOS 2 MENORES*</FONT></STRONG></P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #3c3e3e; FONT-SIZE: 13px; mso-line-height-rule: exactly" align=left>Parejas casadas o en Uni&#243;n Libre de 30 a 70 a&#241;os de edad.<BR>- 2 tarjetas de cr&#233;dito (Visa, MasterCard, American Express) tarjetas departamentales, corporativas o empresariales no son v&#225;lidas.<BR>- Tomar presentaci&#243;n de Club Vacacional Mexico Destination Club by Xcaret con duraci&#243;n de 120 minutos.<BR>- Menores incluidos de 0 a 5 a&#241;os Mayores de 6 a 12 a&#241;os pagan $ 1,600 pesos por noche por menor.<BR>- Cuota de reservaci&#243;n por noche $ 460.00 pesos.<BR>- Precio total por 5 d&#237;as 4 noches 2 adultos y 2 menores de 5 a&#241;os $ 19,999 pesos. - Incluye entradas ilimitadas a todos los parques de Experiencias Xcaret ( Xcaret, Xplore, Xplore Fuego, Xenses, Xoximilco, Xichen, Xenotes)<BR>- *No aplica para Socios de MEXICO DESTINATION CLUB BY XCARET</P></TD></TR></TABLE></TD></TR>
<TR>
<TD style="BORDER-BOTTOM: #dbdbdb 1px solid; BORDER-LEFT: #dbdbdb 1px solid; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #feffff; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BORDER-TOP: #dbdbdb 1px solid; BORDER-RIGHT: #dbdbdb 1px solid; PADDING-TOP: 0px">
<TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0 align=left>
<TR style="HEIGHT: 10px">
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #feffff; PADDING-LEFT: 0px; WIDTH: 100%; PADDING-RIGHT: 0px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0px">
<TABLE border=0 cellSpacing=0 cellPadding=0 align=center>
<TR>
<TD style="PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px" align=middle>
<TABLE border=0 cellSpacing=0 cellPadding=0>
<TR>
<TD style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; BORDER-TOP: medium none; BORDER-RIGHT: medium none"><IMG style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; DISPLAY: block; BORDER-TOP: medium none; BORDER-RIGHT: medium none" border=0 src="https://myvacations4life.com/images/CERTIFICADO_GNP/Image_12.png" width=800 height=325 hspace="0" vspace="0"></TD></TR></TABLE></TD></TR></TABLE> </TD></TR></TABLE></TD></TR>
<TR>
<TD style="BORDER-BOTTOM: #dbdbdb 1px solid; BORDER-LEFT: #dbdbdb 1px solid; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #feffff; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BORDER-TOP: #dbdbdb 1px solid; BORDER-RIGHT: #dbdbdb 1px solid; PADDING-TOP: 0px">
<TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0 align=left>
<TR style="HEIGHT: 20px">
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 35px; BACKGROUND-COLOR: #feffff; PADDING-LEFT: 15px; WIDTH: 100%; PADDING-RIGHT: 15px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 35px">
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #515151; FONT-SIZE: 14px; mso-line-height-rule: exactly" align=center><EM>*No aplica para dos o m&#225;s familias teniendo la misma promoci&#243;n en el mismo y hotel y destino.</EM></P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #515151; FONT-SIZE: 14px; mso-line-height-rule: exactly" align=center><FONT style="FONT-SIZE: 16px">Si ya cuentas con una fecha de viaje y has decidido en que hotel quieres viajar, solo&#160;haz click en responder correo y llena los datos abajo mencionados. En breve un <STRONG>TRAVEL SPECIALIST </STRONG>se pondr&#225; en contacto</FONT>.</P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #515151; FONT-SIZE: 14px; mso-line-height-rule: exactly" align=center><STRONG>HOTEL:<BR>___________________________</STRONG></P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #515151; FONT-SIZE: 14px; mso-line-height-rule: exactly" align=center><STRONG>FECHA DE LLEGADA:<BR></STRONG>___________________________ </P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #515151; FONT-SIZE: 14px; mso-line-height-rule: exactly" align=center><STRONG>FECHA DE SALIDA:<BR></STRONG>___________________________</P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #515151; FONT-SIZE: 14px; mso-line-height-rule: exactly" align=center><STRONG>N&#218;MERO DE NOCHES:<BR></STRONG>___________________________</P>
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #515151; FONT-SIZE: 14px; mso-line-height-rule: exactly" align=center><STRONG>N&#218;MERO DE HU&#201;SPEDES:<BR></STRONG>___________________________</P></TD></TR></TABLE></TD></TR>
<TR>
<TD style="BORDER-BOTTOM: #dbdbdb 1px solid; BORDER-LEFT: #dbdbdb 1px solid; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #feffff; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BORDER-TOP: #dbdbdb 1px solid; BORDER-RIGHT: #dbdbdb 1px solid; PADDING-TOP: 0px">
<TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0 align=left>
<TR style="HEIGHT: 10px">
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #feffff; PADDING-LEFT: 0px; WIDTH: 100%; PADDING-RIGHT: 0px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0px">
<TABLE border=0 cellSpacing=0 cellPadding=0 align=center>
<TR>
<TD style="PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px" align=middle>
<TABLE border=0 cellSpacing=0 cellPadding=0>
<TR>
<TD style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; BORDER-TOP: medium none; BORDER-RIGHT: medium none"><IMG style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; DISPLAY: block; BORDER-TOP: medium none; BORDER-RIGHT: medium none" border=0 src="https://myvacations4life.com/images/CERTIFICADO_GNP/Image_13.png" width=800 height=325 hspace="0" vspace="0"></TD></TR></TABLE></TD></TR></TABLE> </TD></TR></TABLE></TD></TR>
<TR>
<TD style="BORDER-BOTTOM: #dbdbdb 1px solid; BORDER-LEFT: #dbdbdb 1px solid; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #feffff; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BORDER-TOP: #dbdbdb 1px solid; BORDER-RIGHT: #dbdbdb 1px solid; PADDING-TOP: 0px">
<TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0 align=left>
<TR style="HEIGHT: 225px">
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #feffff; PADDING-LEFT: 0px; WIDTH: 50%; PADDING-RIGHT: 0px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0px">
<TABLE border=0 cellSpacing=0 cellPadding=0 align=center>
<TR>
<TD style="PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px" align=middle>
<TABLE border=0 cellSpacing=0 cellPadding=0>
<TR>
<TD style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; BORDER-TOP: medium none; BORDER-RIGHT: medium none"><A href="http://www.myvacations4life.com/"><IMG style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; DISPLAY: block; BORDER-TOP: medium none; BORDER-RIGHT: medium none" border=0 src="https://myvacations4life.com/images/CERTIFICADO_GNP/Image_14.png" width=533 height=225 hspace="0" vspace="0"></A></TD></TR></TABLE></TD></TR></TABLE> </TD>
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #feffff; PADDING-LEFT: 0px; WIDTH: 52%; PADDING-RIGHT: 0px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0px">
<TABLE border=0 cellSpacing=0 cellPadding=0 align=center>
<TR>
<TD style="PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px" align=middle>
<TABLE border=0 cellSpacing=0 cellPadding=0>
<TR>
<TD style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; BORDER-TOP: medium none; BORDER-RIGHT: medium none"><A href="http://www.facebook.com/travelbutlertb/"><IMG style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent; DISPLAY: block; BORDER-TOP: medium none; BORDER-RIGHT: medium none" border=0 src="https://myvacations4life.com/images/CERTIFICADO_GNP/Image_15.png" width=268 height=225 hspace="0" vspace="0"></A></TD></TR></TABLE></TD></TR></TABLE> </TD></TR></TABLE></TD></TR>
<TR>
<TD style="BORDER-BOTTOM: #dbdbdb 1px solid; BORDER-LEFT: #dbdbdb 1px solid; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #feffff; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BORDER-TOP: #dbdbdb 1px solid; BORDER-RIGHT: #dbdbdb 1px solid; PADDING-TOP: 0px">
<TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0 align=left>
<TR style="HEIGHT: 86px">
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #4469b0; PADDING-LEFT: 0px; WIDTH: 100%; PADDING-RIGHT: 0px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0px">
<P style="LINE-HEIGHT: 155%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #fafefe; FONT-SIZE: 18px; mso-line-height-rule: exactly" align=center><STRONG><BR><FONT style="FONT-SIZE: 20px"><A style="COLOR: #f8faf8; FONT-WEIGHT: bold; TEXT-DECORATION: none" title="" href="https://www.facebook.com/myvacations4L"></A>S&#205;GUENOS EN FACEBOOK</FONT></STRONG></P></TD></TR></TABLE></TD></TR>
<TR>
<TD style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: transparent; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 0px">
<TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0 align=left>
<TR style="HEIGHT: 141px">
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 35px; BACKGROUND-COLOR: transparent; PADDING-LEFT: 15px; WIDTH: 100%; PADDING-RIGHT: 15px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 35px">
<P style="LINE-HEIGHT: 125%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #7c7c7c; FONT-SIZE: 10px; mso-line-height-rule: exactly" align=left><FONT style="FONT-SIZE: 16px">Cont&#225;ctanos Lunes a Viernes de 9:00 am a 8:00 pm y S&#225;bados de 9:00 am a 02:00 pm</FONT><A style="COLOR: #7c7d7c" href="http://www.mysite.com"></A></P>
<P style="LINE-HEIGHT: 125%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #7c7c7c; FONT-SIZE: 16px; mso-line-height-rule: exactly" align=left>Tambi&#233;n puede responder a este mismo correo con los siguientes datos: nombre del hotel, destino, fechas y horario de preferencia para tomar la llamada. Nos pondremos en contacto con usted a la brevedad.</P></TD></TR></TABLE></TD></TR>
<TR>
<TD style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; PADDING-BOTTOM: 1px; BACKGROUND-COLOR: transparent; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 1px">
<TABLE style="WIDTH: 100%" cellSpacing=0 cellPadding=0 align=left>
<TR style="HEIGHT: 10px">
<TD style="BORDER-BOTTOM: medium none; TEXT-ALIGN: center; BORDER-LEFT: medium none; PADDING-BOTTOM: 1px; BACKGROUND-COLOR: transparent; PADDING-LEFT: 15px; WIDTH: 100%; PADDING-RIGHT: 15px; VERTICAL-ALIGN: top; BORDER-TOP: medium none; BORDER-RIGHT: medium none; PADDING-TOP: 1px">
<P style="LINE-HEIGHT: 125%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #7c7c7c; FONT-SIZE: 10px; mso-line-height-rule: exactly" align=left>SI NO DESEAS RECIBIR NUESTROS CORREOS CLICK AQU&#205;&#160;<A style="COLOR: #7c7d7c" href="mailto:info@myvacations4life.com">HAZ CLICK</A>.</P>
<P style="LINE-HEIGHT: 125%; BACKGROUND-COLOR: transparent; MARGIN-TOP: 0px; FONT-FAMILY: Arial, Helvetica, sans-serif; MARGIN-BOTTOM: 1em; COLOR: #7c7c7c; FONT-SIZE: 10px; mso-line-height-rule: exactly" align=left>V4L &#169;2018 Derechos Reservados</P></TD></TR></TABLE></TD></TR></TABLE></TD></TR>
<TR>
<TD style="LINE-HEIGHT: 0; HEIGHT: 8px; FONT-SIZE: 0px">&#160;</TD></TR></TABLE>
</body>');

	$mail->AddAddress($email);

	$mail->AddAddress("certificados@myvacations4life.com");

	//$mail->AddAddress("diego.ek@nat-group.com");
  //$mail->AddBCC("manuel.cabrera@nat-group.com");
  
	$mail->IsHTML(true);

  	if(!$mail->Send()) {  echo "Error: " . $mail->ErrorInfo;  } else { echo "."; }



}else{

  echo '<div class="borde_ok" align="center" style="margin:20px 20px 0px 60px;"> <br />';
  echo '<a class="button btn-small" href="./" >'.$text_error.'</a><br /><br /></div>';


}


///////////SEGUNDO MAIL - INFO
$mail = new PHPMailer();

$mail->IsSMTP();

$mail->SMTPAuth = true;

$mail->Host ="mail.myvacations4life.com";

$mail->Port ="26";

$mail->Username =$mail_serv;

$mail->Password =$pass_serv;



$mail->From ="certificados@myvacations4life.com";

$mail->FromName ="V4L Certificado";

$mail->Subject ="Contacto: ".$name."";

$mail->MsgHTML("<body><table align='center' width='650' border='0'>

  <tr><td colspan='2' align='center'><BR />  <strong>ACTIVACION DE CERTIFICADO</strong></td></tr>  <tr><td colspan='2' height='10' bgcolor='#F79300'></td></tr>

  <tr><td width='455' height='147'><strong> Estimado: ".$name." </strong></td><td width='185' align='center'><p><strong>Fecha:</strong> ".date("d-m-Y")." </p></td></tr>  <tr><td colspan='2'><div style='width:600px; margin:15px; text-align:justify;'>
   
   Folio: ".$folio." <br /> 
   Hotel: ".$hotel." <br /> 
   Nombre: ".$name." <br /> 
   Edad: ".$edad."<br />
   Domicilio: ".$domicilio." <br />
   Email: ".$email." <br />
   Lada: ".$lada." <br /> 
   Tel: ".$telefono." <br /> 
   Pais: ".$pais." <br /><br />
   Comentario: ".$coment." <br />
  <br />Correo enviado en V4L Certificato GNP, IP: ".$ipreal."<br />".$origen."</div></td></tr>

  <tr><td colspan='2' height='10' bgcolor='#96CAEB'></td></tr>

  <tr><td height='30' colspan='5' bgcolor='#66B2E3'>&nbsp;</td></tr></table></body>");


//$mail->AddAddress("promo@myvacations4life.com");
$mail->AddAddress("certificados@myvacations4life.com");
//$mail->AddAddress("diego.ek@nat-group.com");
$mail->AddBCC("manuel.cabrera@nat-group.com");

$mail->IsHTML(true);



  if(!$mail->Send()) {  echo "Error: " . $mail->ErrorInfo;  } else { echo "..."; }

$sql_register= mysql_query("INSERT INTO `tb_certific_gnp`( `folio`, `his_name`,  `tel1`, `tel2`, 
 `mail1`, `edad1`, `ocupacion1`, `ocupacion2`, `pais`, `estado`, `city`, `status`, `notas`, `date`, `direccion`, `ejecutivo`, `codeweek`, `origen`, `idioma` ) VALUES ('$folio', '$name', '$lada',  '$telefono',  '$email',  '$edad',  '$ocupacion1', '$ocupacion2', '$pais', '$estado', '$ciudad', 'Nuevo', '$fecha_tentativa', '$today', '$domicilio', '', '$codigo_semana', 'LANDING PAGE GNP', 'ES'  )") or die (mysql_error());


?>






<!DOCTYPE html>

<html lang="es">



    <head>



    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gracias</title>

    <META NAME="DC.Language" SCHEME="RFC1766" CONTENT="Spanish">

    <meta name="description" content="V4L | My Vacations 4 Life, Más de 40 hoteles de lujo 5 estrellas en 10 destinos, en las mejores playas de México, el Caribe, Centro América y Sudamérica">

    <META NAME="KEYWORDS" CONTENT="hoteles,viajes,turismo,vacaciones,mexico,centroamerica,sudamerica,playa,club vacacional,todo incluido,cancun, V4L Travelers">



  <META NAME="REPLY-TO" CONTENT="info@myvacations4life.com">

  <LINK REV="made" href="mailto:info@myvacations4life.com">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:image" content="http://www.myvacations4life.com/images/logo/v4l.jpg">

    <META NAME="Resource-type" CONTENT="Document">

    <META NAME="Revisit-after" CONTENT="3 days">

    <META NAME="robots" content="ALL">

        <!-- CSS -->

        <link id="main-style" rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/updates.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
     <!-- Responsive Styles -->
    <link rel="stylesheet" href="../css/responsive.css">


       <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="../assets/css/animate.css">

        <link rel="stylesheet" href="../assets/css/style.css">

        <link rel="stylesheet" href="../assets/css/media-queries.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="http://myvacations4life.com/images/v4l.png">

        <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    
            })(window,document,'script','dataLayer','GTM-53JCKQW');</script>

        <!-- End Google Tag Manager -->

    </head>
    <body>

      <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53JCKQW"

        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->


        <!-- Features -->

    <!--<div class="container">

            <div class="row">

              <div id="main" class="col-md-12">
                      <h1 align="center">Bienvenido a Vacations4Life.</h1>  
              </div>


                <div class="col-md-6" align="center">
                  <img src="https://www.myvacations4life.com/images/logo_v4l.png" width="200px"  alt="V4L">
            
                      
            <h3 style="color:#000; margin:15px">                            
                            <br /><br />
                            
Es un placer ayudarlo a planificar sus próximas vacaciones a una de nuestras muchas propiedades y destinos de vacaciones.

Recibirá su certificado por correo electrónico, revise su bandeja de entrada en los próximos cinco minutos si no lo encuentra verifique su correo no deseado.

Su especialista en viajes lo llamará en las próximas dos horas al número de teléfono que proporcionó.

Para cualquier pregunta, escríbanos a <a href="mailto:info@myvacations4life.com">info@myvacations4life.com</a> o llame al <strong><a href="tel:01800-062-1704" >01800-062-1704</strong><br/>
<strong><a href="tel:01.800.141.0024" >MÉXICO: 01800-062-1704 </strong><br/>
<strong><a href="tel:57 (4)204-0522" >COLOMBIA 57 (4)204-0522 </strong><br/>
<strong><a href="tel:56 (2)2-940-2156" >CHILE 56 (2)2-940-2156 </strong>

                  </h3>
                    <div class="top-buttons">
            
                          <a class="btn btn-link-1 fadeInDown" href=".././" data-modal-id="modal-terms"><strong>Gracias</strong></a>
            
            
            
                        </div>
    
                   
               </div>

              
              <div class="col-md-5 text wow fadeInUp">
                           <br /><br /><br /><br /><br /><br /><br />
                      <img src="https://myvacations4life.com/images/email.png"  alt="V4L">
                
     
                
              </div>

      </div>      
                    
            
                  
</div>-->




        <!-- Javascript -->

        <script src="../assets/js/jquery-1.11.1.min.js"></script>

        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

        <script src="../assets/js/jquery.backstretch.min.js"></script>

        <script src="../assets/js/wow.min.js"></script>

        <script async src="../assets/js/retina-1.1.0.min.js"></script>

        <script src="../assets/js/scripts.js"></script>



    </body>



</html>









