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

$name=htmlentities($_POST['name'],ENT_NOQUOTES,'UTF-8');

$name2=htmlentities($_POST['name2'],ENT_NOQUOTES,'UTF-8');

$ocupacion1=htmlentities($_POST['ocupacion1'],ENT_NOQUOTES,'UTF-8');

$ocupacion2=htmlentities($_POST['ocupacion2'],ENT_NOQUOTES,'UTF-8');

$edad=$_POST['edad'];

$edad2=$_POST['edad2'];

$domicilio=htmlentities($_POST['domicilio'],ENT_NOQUOTES,'UTF-8');

$fecha_tentativa=htmlentities($_POST['fecha_tentativa'],ENT_NOQUOTES,'UTF-8');

$email=$_POST['email'];

$email2=$_POST['email2'];

$telefono=$_POST['telefono'];

$telefono2=$_POST['telefono2'];

$ciudad=$_POST['ciudad'];

$estado=$_POST['estado'];

$pais=$_POST['pais'];



//$pais=htmlentities($_POST['pais'],ENT_NOQUOTES,'UTF-8');

//$lang=$_POST['lang'];

$origen='http://myvacations4life.com/certificado-GNP/';

//$fech_cumple=$_POST['fech_cumple'];



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



$text_ok="GRACIAS ";

$text_error="Error";

$mail_serv="certificados@myvacations4life.com";

$pass_serv="CEmvl17**";

if($email!=''){



	  echo '<div class="borde_ok" align="center" style="margin:20px 20px 0px 60px;"><br />';

	  echo '  <div class="alert alert-success">'.$text_ok.' <br /> <span class="close"></span></div>';


	  //echo '<a class="button btn-small" style="background-color:#F79300; color:#000;" href="./"><h3 style="color: #ffffff;">Gracias por ponerse en contacto con nosotros, pronto uno de nuestros especialistas se pondr&aacute; en contacto con usted.</h3></a>';     



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

	$mail->MsgHTML("<body style='font-size:12px; width:100%; height:100%;'>

<table id='mainStructure' width='800' class='full-width' align='center' border='0' cellspacing='0' cellpadding='0' style='background-color: #efefef; width: 800px; max-width: 800px; outline: rgb(239, 239, 239) solid 1px; box-shadow: rgb(224, 224, 224) 0px 0px 5px; margin: 0px auto;'> <tbody><tr><td align='center' valign='top' class='container' style='background-color: #ffffff;' bgcolor='#ffffff'> <table width='600' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='min-width: 600px; background-color: #ffffff; padding-left: 20px; padding-right: 20px; width: 600px; margin: 0px auto;'><tbody><tr><td valign='top'> <table width='560' border='0' cellspacing='0' cellpadding='0' align='center' class='full-width' style='width: 560px; margin: 0px auto;'><tbody><tr><td valign='top' height='1' style='height: 1px; font-size: 0px; line-height: 0; border-collapse: collapse;'></td> </tr>

  <tr><td valign='top'> <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='margin: 0px auto;'><tbody><tr><td valign='middle'> <table width='auto' align='left' border='0' cellspacing='0' cellpadding='0' class='full-width-center' style='mso-table-lspace:0pt; mso-table-rspace:0pt;'><tbody><tr><td align='center' valign='top' width='136' style='width: 136px;'> <a href='#' style='text-decoration: none solid rgb(0, 0, 238) !important; font-size: inherit; border-style: none;' border='0'>   <img src='http://thetravel-butler.com/images/Templates/gracias/20170610013138_V4L_LOGO_GEN-01-01.png' width='136' style='max-width: 240px; display: block !important; width: 136px; height: auto;' alt='logo-top' border='0' hspace='0' vspace='0' height='auto'></a> </td> </tr></tbody></table> 

<table width='20' border='0' cellpadding='0' cellspacing='0' align='left' class='full-width' style='height: 1px; border-spacing: 0px; width: 20px;mso-table-lspace:0pt; mso-table-rspace:0pt;'><tbody><tr><td height='1' class='h-30' style='height: 1px; font-size: 0px; line-height: 0; border-collapse: collapse;'></td> </tr></tbody></table> <table width='auto' align='right' border='0' cellpadding='0' cellspacing='0' class='full-width-center' style='mso-table-lspace:0pt; mso-table-rspace:0pt;'><tbody><tr><td valign='top'> <table width='auto' align='left' border='0' cellpadding='0' cellspacing='0' class='full-width-center' style='mso-table-lspace:0pt; mso-table-rspace:0pt;'><tbody><tr><td align='center' style='font-size: 14px; color: #888888; font-weight: normal;   word-break: break-word; line-height: 22px;'><span style='color: #ff6600; text-decoration: none; line-height: 22px; font-size: 14px; font-weight: 400;  '><span style='text-decoration: none; line-height: 22px; font-size: 14px; font-weight: 400;  '><br style='font-size: 14px; font-weight: 400;  '></span></span><h4 style='font-size: 14px; font-weight: bold;'><span style='word-break: break-word; line-height: 26px; font-size: 18px; font-weight: bold;  '><font face='Montserrat, arial, sans-serif'><strong style='font-size: 18px; font-weight: bold;  '>M&Eacute;XICO: &nbsp;<a href='tel:01800-062-1704' data-mce-href='tel:01800-062-1704' style='border-style: none; text-decoration: none !important; line-height: 26px; font-size: 18px; font-weight: bold;  ' border='0'><font face='Montserrat, arial, sans-serif'><span style='color: #ff0000; line-height: 26px; font-size: 18px; font-weight: bold;  '><font face='Montserrat, arial, sans-serif'>01800-062-1704</font></span></font></a></strong></font></span></h4></td> </tr></tbody></table></td> </tr></tbody></table></td> </tr></tbody></table></td> </tr> <tr><td valign='top' height='2' style='height: 2px; font-size: 0px; line-height: 0; border-collapse: collapse;'> </td> </tr> </tbody></table></td></tr></tbody></table></td>

        </tr></tbody> <tbody> <tr>  <td align='center' valign='top' class='container' style='background-position:50% 0%,50% 50%; background-size: cover; background-color: #74BED5;' width='100%' height='100%' bgcolor='#74BED5'><img src='http://thetravel-butler.com/images/Templates/Conf-Xcaret/header_xcaret.png'  alt='Vacations 4 Life' width='100%'></td>   </tr></tbody>  <tbody><tr><td valign='top' align='center' class='container' style='background-color: #ffffff;' bgcolor='#ffffff'>  <table width='600' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='background-color: #ffffff; min-width: 600px; width: 600px; margin: 0px auto;'><!-- start space --><tbody><tr><td valign='top' height='9' style='height: 9px; font-size: 0px; line-height: 0; border-collapse: collapse;'> </td> </tr>  <tr dup='0'><td valign='top' align='center' class='clear-pad' style='padding-left:20px; padding-right:20px;'> <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' style='margin: 0px auto;'> <tbody> </tbody></table></td>

              </tr> <tr dup='0'><td valign='top' align='center' class='clear-pad' style='padding-left:20px; padding-right:20px;'> <table width='auto' align='center' border='0' cellpadding='0' cellspacing='0' style='margin: 0px auto;'><tbody><tr> <td valign='top' class='full-block' style='padding-top:5px; padding-bottom:5px; ' dup='0'>  <table width='auto' border='0' align='center' cellpadding='0' cellspacing='0' style='margin: 0px auto;'><tbody><tr><td valign='top' align='center' style='padding-left:5px; padding-right:5px;'>

                              <table width='auto' border='0' align='center' cellpadding='0' cellspacing='0' style='min-width: 150px; background-color: #3a5795; border-radius: 5px; margin: 0px auto;'><tbody><tr><td align='left' valign='middle' width='25' style='padding-right: 10px; padding-left: 10px; border-right: 1px solid rgb(255, 255, 255); width: 25px;' dup='0'>

                                    <a href='https://www.facebook.com/vacations4life' style='font-size: inherit; border-style: none; text-decoration: none !important;' border='0'><img src='http://thetravel-butler.com/images/Templates/gracias/set1-social-facebook-white.png' width='25' style='max-width: 25px; height: auto; display: block !important;' alt='facebook' border='0' hspace='0' vspace='0' height='auto'></a></td>

                                  <td width='auto' align='center' valign='middle' height='38' style='font-size: 14px; color: #ffffff; font-weight: normal;   background-clip: padding-box; padding-left: 20px; padding-right: 20px; word-break: break-word; line-height: 22px;'><span style='color: #ffffff; line-height: 22px; font-size: 14px; font-weight: 400;  '><font > <a href='https://www.facebook.com/lifevacations' style='color: #ffffff; text-decoration: none solid rgb(255, 255, 255) !important; border-style: none; line-height: 22px; font-size: 14px; font-weight: 400;  ' data-mce-href='https://www.facebook.com/lifevacations' border='0'><font > Facebook </font></a> </font></span></td>  </tr></tbody></table></td> </tr></tbody></table></td><td valign='top' class='full-block' style='padding-top:5px; padding-bottom:5px; ' dup='0'>

                        <table width='auto' border='0' align='center' cellpadding='0' cellspacing='0' style='margin: 0px auto;'><tbody><tr><td valign='top' align='center' style='padding-left:5px; padding-right:5px;'>

                              <table width='auto' border='0' align='center' cellpadding='0' cellspacing='0' style='min-width: 150px; background-color: #61953a; border-radius: 5px; margin: 0px auto;'><tbody><tr><td align='left' valign='middle' width='25' style='padding-right: 10px; padding-left: 10px; border-right: 1px solid rgb(255, 255, 255); width: 25px;' dup='0'>

                                    <img src='http://thetravel-butler.com/images/Templates/gracias/20171007030732_image021.png' width='25' style='max-width: 25px; height: auto; display: block !important;' alt='facebook' border='0' hspace='0' vspace='0' height='auto'></td>

                                  <td width='auto' align='center' valign='middle' height='38' style='font-size: 14px; color: #ffffff; font-weight: normal;   background-clip: padding-box; padding-left: 20px; padding-right: 20px; word-break: break-word; line-height: 22px;'><span style='line-height: 22px; font-size: 14px; font-weight: 400;  '><font ><a data-mce-href='http://myvacations4life.com/files/SECTUR.pdf' href='http://myvacations4life.com/files/SECTUR.pdf' target='_blank' style='border-style: none; text-decoration: none !important; line-height: 22px; font-size: 14px; font-weight: 400;  ' border='0'><font ><span style='color: #ffffff; line-height: 22px; font-size: 14px; font-weight: 400;  '><font>SECTUR</font></span></font></a><br style='font-size: 14px; font-weight: 400;  '></font></span></td>

                                </tr></tbody></table></td>

                          </tr></tbody></table></td><td valign='top' class='full-block' style='padding-top:5px; padding-bottom:5px; ' dup='0'>

                        <table width='auto' border='0' align='center' cellpadding='0' cellspacing='0' style='margin: 0px auto;'><tbody><tr><td valign='top' align='center' style='padding-left:5px; padding-right:5px;'>

                              <table width='auto' border='0' align='center' cellpadding='0' cellspacing='0' style='min-width: 150px; background-color: #3a7295; border-radius: 5px; margin: 0px auto;'><tbody><tr><td align='left' valign='middle' width='25' style='padding-right: 10px; padding-left: 10px; border-right: 1px solid rgb(255, 255, 255); width: 25px;' dup='0'>

                                    <img src='http://thetravel-butler.com/images/Templates/gracias/20171007030753_image020.png' width='25' style='max-width: 25px; height: auto; display: block !important;' alt='facebook' border='0' hspace='0' vspace='0' height='auto'></td>

                                  <td width='auto' align='center' valign='middle' height='38' style='font-size: 14px; color: #ffffff; font-weight: normal;   background-clip: padding-box; padding-left: 20px; padding-right: 20px; word-break: break-word; line-height: 22px;'><span style='color: #ffffff; line-height: 22px; font-size: 14px; font-weight: 400;  '><font><a href='https://www.bbb.org/mexico/business-reviews/travel-agencies-and-bureaus/my-vacations-4-life-in-cancun-qr-1746?bluerefx=1' target='_blank' data-mce-href='https://www.bbb.org/mexico/business-reviews/travel-agencies-and-bureaus/my-vacations-4-life-in-cancun-qr-1746?bluerefx=1' style='border-style: none; text-decoration: none !important; line-height: 22px; font-size: 14px; font-weight: 400;  ' border='0'><font><span style='color: #ffffff; line-height: 22px; font-size: 14px; font-weight: 400;  '><font>BBB</font></span></font></a></font></span></td> </tr></tbody></table></td> </tr></tbody></table></td></tr></tbody></table></td></tr> <tr><td valign='top' height='7' style='height: 7px; font-size: 0px; line-height: 0; border-collapse: collapse;'></td></tr></tbody></table> </td></tr></tbody>

        <tbody><tr><td align='center' valign='top' class='container' style='background-color: #ffffff;' bgcolor='#ffffff'>

            <table width='600' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='background-color: #ffffff; min-width: 600px; width: 600px; margin: 0px auto;'><tbody><tr><td valign='top' align='center'>  <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' class='full-width' style='margin: 0px auto;'><!-- start space --><tbody><tr> </tr> <tr dup='0'><td valign='top' class='clear-pad' style='padding-left:20px; padding-right:20px;'>  <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' style='margin: 0px auto;'> <tbody> <tr dup='0'><td valign='top'> <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' style='margin: 0px auto;'><tbody><tr><td align='center' style='font-size: 14px; color: #888888; font-weight: normal;   word-break: break-word; line-height: 22px;'><div style='text-align: left; font-size: 14px; font-weight: 400;  '></div></td>  </tr></tbody></table></td> </tr> </tbody></table></td> </tr> </tbody></table></td> </tr></tbody></table> </td>

        </tr> </tbody> <tbody><tr><td align='center' valign='top' class='container' style='background-color: #ffffff;' bgcolor='#ffffff'>

            <table width='600' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='background-color: #ffffff; min-width: 600px; width: 600px; margin: 0px auto;'><tbody><tr><td valign='top' align='center'> <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' class='full-width' style='margin: 0px auto;'> <tbody><tr><td valign='top' height='3' style='height: 3px; font-size: 0px; line-height: 0; border-collapse: collapse;'> </td>  </tr><tr dup='0'><td valign='top' class='clear-pad' style='padding-left:20px; padding-right:20px;'>

                        <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' style='margin: 0px auto;'> <tbody> <tr dup='0'><td valign='top'> <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' style='margin: 0px auto;'><tbody><tr><td align='center' style='font-size: 14px; color: #888888; font-weight: normal; word-break: break-word; line-height: 22px;'><div style='text-align: left; font-size: 14px; font-weight: 400;'> <p align='center' style='color:#09F'><strong>&iexcl;ACTIVACION DE CERTIFICADO EXITOSA!</strong></p>

<p style='text-align:justify; font-size:14px; font-weight:400'><span style='color:#000000; word-break:break-word; line-height:22px; font-size:14px; font-weight:400;'><font>Apreciable: ".$name." <br /><br />Nos da mucho gusto que haya decidido elegirnos para hacernos cargo de sus pr&oacute;ximas vacaciones al mejor precio que puedan encontrar y en los mejores hoteles de M&eacute;xico y el Caribe.

<br /><br />En <label style='color:#06F'><strong>V4L</strong></label> le aseguramos que tendr&aacute; unas vacaciones incre&iacute;bles, olv&iacute;date de pasar horas buscando la mejor opci&oacute;n para sus vacaciones, con Vacations 4 Life puede estar seguro que encontrara la mejor opci&oacute;n para usted y su familia al mejor precio.

<br /><br />Este certificado que ha adquirido le permite recibir una <label style='color:#F93'><strong>tarifa especial</strong></label> para poder tomar unas vacaciones en cualquiera de los pr&oacute;ximos 12 meses, disponible para 2 adultos con 2 menores de 3 a&ntilde;os en cualquiera de los destinos y hoteles que le anexaremos al final del correo, su estancia ser&aacute; de 5 d&iacute;as / 4 noches con todo incluido una vez llegando al hotel.  En caso de querer adicionar personas y noches extra se tendr&aacute; que realizar un pago adicional.*

<br /><br />Para poder disfrutar de todos estos servicios y obtener m&aacute;s informaci&oacute;n un <strong>TRAVEL SPECIALIST</strong> o <label style='color:#900'><strong>TRAVEL BUTLER</strong></label>  se pondr&aacute; en contacto para darle una atenci&oacute;n m&aacute;s personalizada y resolver cualquier duda que tengas.</font></span>

<span style='color: #000000; word-break: break-word; line-height: 22px; font-size: 14px; font-weight: 400;  '><font face='Montserrat, arial, sans-serif'>

<br /> </font></span></div></td></tbody></table></td> </tr> </tbody></table></td> </tr> </tbody></table></td></tr></tbody></table> </td> </tr> </tbody>

        <tbody><tr><td align='center' valign='top' class='container' style='background-color: #ffffff;' bgcolor='#ffffff'>

            <table width='600' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='background-color: #ffffff; min-width: 600px; width: 600px; margin: 0px auto;'><tbody><tr><td valign='top' align='center'>

                  <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' class='full-width' style='margin: 0px auto;'><!-- start space --><tbody> <tr dup='0'><td valign='top' class='clear-pad' style='padding-left:20px; padding-right:20px;'><table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' style='margin: 0px auto;'> <tbody><tr dup='0'><td valign='top'></td></tr></tbody></table></td>

                    </tr> </tbody></table></td>  </tr></tbody></table> </td>

        </tr> </tbody> <tbody><tr><td align='center' valign='top' class='container' style='background-color: #ffffff;' bgcolor='#ffffff'>

            <table width='600' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='background-color: #ffffff; min-width: 600px; width: 600px; margin: 0px auto;'><tbody><tr><td valign='top' align='center'>  <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' class='full-width' style='margin: 0px auto;'> <tbody><tr><td valign='top' height='2' style='height: 2px; font-size: 0px; line-height: 0; border-collapse: collapse;'>  </td> </tr><tr dup='0'><td valign='top' class='clear-pad' style='padding-left:20px; padding-right:20px;'>

                        <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' style='margin: 0px auto;'> <tbody> </tbody></table></td>

                    </tr> </tbody></table></td>  </tr></tbody></table> </td> </tr> </tbody> <tbody><tr><td align='center' valign='top' class='container' style='background-color: #ffffff;' bgcolor='#ffffff'>  <table width='600' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='background-color: #ffffff; min-width: 600px; width: 600px; margin: 0px auto;'><tbody><tr><td valign='top' align='center'>  <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' class='full-width' style='margin: 0px auto;'><!-- start space --><tbody><tr><td valign='top' height='2' style='height: 2px; font-size: 0px; line-height: 0; border-collapse: collapse;'> </td> </tr> <tr dup='0'><td valign='top' class='clear-pad' style='padding-left:20px; padding-right:20px;'>  <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' style='margin: 0px auto;'><!-- start title --><tbody> </tbody></table></td> </tr> </tbody></table></td>  </tr></tbody></table> </td>

        </tr> </tbody> <tbody><tr><td valign='top' align='center' class='container' style='background-color: #ffffff;' bgcolor='#ffffff'> </td>

        </tr> </tbody>  <tbody><tr><td valign='top' align='center' style='background:url(http://mailbuild.rookiewebstudio.com/item/64lm4Q4e/images/set11-bg2.jpg) no-repeat top center/cover; background-color: #ffffff; background-repeat: no-repeat; background-position: 50% 0%, 50% 50%; background-size: cover;' class='container' background='http://mailbuild.rookiewebstudio.com/item/64lm4Q4e/images/set11-bg2.jpg' width='100%' height='100%' bgcolor='#ffffff'>

  <table width='600' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='min-width: 600px; width: 600px; margin: 0px auto;'><tbody><tr><td valign='top' align='center'> <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' class='full-width' style='margin: 0px auto;'> <tbody><tr><td valign='top' height='7' style='height: 7px; font-size: 0px; line-height: 0; border-collapse: collapse;'>

                      </td> </tr> <tr dup='0'><td valign='top' class='clear-pad' style='padding-left:20px; padding-right:20px;'>

                        <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' style='margin: 0px auto;'> <tbody> </tbody></table></td>

                    </tr> <tr><td valign='top' height='1' style='height: 1px; font-size: 0px; line-height: 0; border-collapse: collapse;'> </td> </tr> </tbody></table></td> </tr></tbody></table></td>

        </tr> </tbody> <tbody><tr><td align='center' valign='top' class='full-width' style='background-color: #f4f5f6;' bgcolor='#f4f5f6'><p align='center'><strong>Lista de hoteles disponibles para ti y tu familia.</strong><br><br />

          <label style='color:#F93'><strong>CANCUN</strong></label><br>

          <a href='https://www.unlimitedvacationclub.com/Resorts/Dreams/DreamsSandsCancun'>UVC Resorts Sands Canc&uacute;n</a></p>

              <p align='center'><label style='color:#F93'><strong>RIVIERA  MAYA</strong></label><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Dreams/DreamsPuertoAventurasResortSpa'>UVC Resorts &amp; SPA&nbsp; Puerto Aventuras </a><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Dreams/DreamsRivieraCancunResortSpa'>UVC Resorts &amp; SPA&nbsp; Riviera Canc&uacute;n </a> <br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Dreams/DreamsTulumResortSpa'>UVC Resorts &amp; SPA Tulum </a><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Now/NowJadeRivieraCancun'>UVC Resorts $ SPA&nbsp; JADE Riviera Canc&uacute;n</a><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Now/NowSapphireRivieraCancun'>UVC Resorts &amp; SPA&nbsp; SAPPHIRE Riviera Canc&uacute;n</a><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Secrets/SecretsCapriRivieraCancun'>UVC Resorts &amp; SPA&nbsp; Capri&nbsp; Riviera Canc&uacute;n</a> (Solo adultos) </p>

              <p align='center'><label style='color:#F93'><strong>COZUMEL</strong></label><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Sunscape/SunscapeSaborCozumel'>UVC Resorts Sabor Cozumel</a><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Secrets/SecretsAuraCozumel'>UVC Resorts &amp; SPA&nbsp; Aura Cozumel</a> (Solo  adultos) </p>

              <p align='center'><label style='color:#F93'><strong>IXTAPA</strong></label><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Sunscape/SunscapeDoradoPacificoIxtapa'>UVC Resorts Dorado Pacifico Ixtapa</a></p>

              <p align='center'><label style='color:#F93'><strong>REPUBLICA</strong> <strong>DOMINICANA</strong></label><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Dreams/DreamsDominicusLaRomana'>UVC Resorts &amp; SPA Dominicus La Romana</a><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Dreams/DreamsLaRomanaResortSpa'>UVC Resorts &amp; SPA&nbsp; La Romana </a> <br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Dreams/DreamsPalmBeachPuntaCana'>UVC Resorts &amp; SPA  Palm Beach Punta Cana</a> <br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Breathless/BreathlessPuntaCana'>UVC Resorts &amp; SPA&nbsp; Punta Cana</a> &nbsp;(Solo  adultos)<br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Now/NowLarimarPuntaCana'>UVC Resorts &amp; SPA Larimar Punta Cana</a><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Now/NowOnyxPuntaCana'>UVC Resorts &amp; SPA&nbsp; Onyx&nbsp; Punta Cana</a><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Now/NowGardenPuntaCana'>UVC Resorts &amp; SPA Garden Punta Cana</a><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Sunscape/SunscapePuertoPlata'>UVC Resorts &amp; SPA&nbsp; Puerto Plata</a><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Sunscape/SunscapeDominicanBeachPuntaCana'>UVC Resorts &amp; SPA&nbsp; Dominican Beach Punta Cana</a><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Sunscape/SunscapeBavaroBeachPuntaCana'>UVC Resorts &amp; SPA Bavaro Beach Punta Cana</a></p>

              <p align='center'><label style='color:#F93'><strong>JAMAICA</strong></label><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Sunscape/SunscapeCoveMontegoBay'>UVC Resorts &amp; SPA  Cove Montego Bay</a> <br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Sunscape/SunscapeSplashMontegoBay'>UVC Resorts &amp;  SPA&nbsp; Splash Montego Bay</a></p>

              <p align='center'><label style='color:#F93'><strong>LOS  CABOS</strong></label><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Dreams/DreamsLosCabosSuitesGolfResortSpa'>UVC&nbsp; Los Cabos Suites Golf Resort &amp; Spa</a></p>

              <p align='center'><label style='color:#F93'><strong>HUATULCO</strong></label><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Dreams/DreamsHuatulcoResortSpa'>UVC Resorts &amp; SPA Huatulco </a></p>

              <p align='center'><label style='color:#F93'><strong>VALLARTA</strong></label><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Dreams/DreamsVillamagnaNuevoVallarta'>UVC Resorts &amp; SPA&nbsp; Villamagna Nuevo Vallarta</a><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Now/NowAmberPuertoVallarta'>UVC Resorts &amp; SPA&nbsp; Amber PuertoVallarta</a> <br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Sunscape/SunscapePuertoVallarta'>UVC Resorts &amp; SPA&nbsp; PuertoVallarta</a><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Secrets/SecretsVallartaBayPuertoVallarta'>UVC Resorts &amp; SPA&nbsp; Vallarta Bay&nbsp;  PuertoVallarta</a> (Solo adultos)</p>

              <p align='center'><label style='color:#F93'><strong>PANAM&aacute;</strong></label><br>

                <a href='https://www.unlimitedvacationclub.com/Resorts/Dreams/DreamsPlayaBonitaPanama'>UVC Resorts &amp; SPA&nbsp; Playa Bonita&nbsp; Panama</a></p>

              <p align='center'><label style='color:#F93'><strong>COSTA  RICA</strong></label></p>

              <a href='https://www.unlimitedvacationclub.com/Resorts/Dreams/DreamsLasMareasCostaRica'>UVC Resorts &amp; SPA&nbsp; Las&nbsp; Mareas&nbsp; Costa  Rica</a><br /><br /></td>

        </tr> </tbody> <tbody><tr><td valign='top' align='center' style='background:url(http://mailbuild.rookiewebstudio.com/item/64lm4Q4e/images/set11-bg2.jpg) no-repeat top center/cover; background-color: #ffffff; background-repeat: no-repeat; background-position: 50% 0%, 50% 50%; background-size: cover;' class='container' background='http://mailbuild.rookiewebstudio.com/item/64lm4Q4e/images/set11-bg2.jpg' width='100%' height='100%' bgcolor='#ffffff'>

           <table width='600' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='min-width: 600px; width: 600px; margin: 0px auto;'><tbody><tr><td valign='top' align='center'> <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' class='full-width' style='margin: 0px auto;'> <tbody><tr><td valign='top' height='7' style='height: 7px; font-size: 0px; line-height: 0; border-collapse: collapse;'>

                      </td> </tr> <tr dup='0'><td valign='top' class='clear-pad' style='padding-left:20px; padding-right:20px;'> <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' style='margin: 0px auto;'> <tbody> </tbody></table></td> </tr> <tr><td valign='top' height='1' style='height: 1px; font-size: 0px; line-height: 0; border-collapse: collapse;'> </td> </tr><!-- end space --></tbody></table></td> </tr></tbody></table> </td>  </tr></tbody>

        <tbody><tr><td align='center' valign='top' class='container' style='background-color: #fff;' bgcolor='#ffffff'>

            *No aplica para dos o m&aacute;s familias teniendo la misma promoci&oacute;n en el mismo y hotel y destino.

            <table width='600' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='background-color: #ffffff; min-width: 600px; padding-left: 20px; padding-right: 20px; width: 600px; margin: 0px auto;'> <tbody><tr><td valign='top'><table width='560' align='center' border='0' cellpadding='0' cellspacing='0' class='full-width' style='width: 560px; margin: 0px auto;'> <tbody> <tr><td valign='top'> <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' style='margin: 0px auto;'><tbody><tr><td valign='top' align='center'><table width='30' border='0' cellpadding='0' cellspacing='0' align='left' class='space-w-25' style='min-width: 30px; height: 1px; border-spacing: 0px; width: 30px;mso-table-lspace:0pt; mso-table-rspace:0pt;'><tbody><tr><td height='1' width='30' class='h-30' style='display: block; width: 30px; height: 1px; font-size: 0px; line-height: 0; border-collapse: collapse;'></td> </tr></tbody></table></td> </tr></tbody></table></td>

                    </tr><!-- start space --><tr><td valign='top' height='30' style='height: 30px; font-size: 0px; line-height: 0; border-collapse: collapse;'>&nbsp;</td> </tr> </tbody></table></td> </tr> </tbody></table> </td>  </tr>

        <tr><td align='center' valign='top' class='container' style='background-color: #ffffff;' bgcolor='#ffffff'>  <table width='600' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='background-color: #ffffff; min-width: 600px; width: 600px; margin: 0px auto;'><tbody><tr><td valign='top' align='center'> 

                  <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' class='full-width' style='margin: 0px auto;'> <tbody><tr><td valign='top' height='3' style='height: 3px; font-size: 0px; line-height: 0; border-collapse: collapse;'>

                      </td>  </tr> <tr dup='0'><td valign='top' class='clear-pad' style='padding-left:20px; padding-right:20px;'> <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' style='margin: 0px auto;'><!-- start title --><tbody><tr dup='0'><td valign='top'>

                              <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' style='margin: 0px auto;'><tbody><tr><td align='center' style='font-size: 14px;font-weight: normal; word-break: break-word; line-height: 22px;'><div style='text-align: left; font-size: 14px; font-weight: 400;  '>  <p align='center' ><strong>Si ya cuenta con una fecha de viaje y ha decidido en que hotel quiere viajar, solo da click en responder correo y llene los datos debajo mencionados. En breve un TRAVEL SPECIALIST se pondr&aacute; en contacto.</strong></p>

                                <table border='0' cellspacing='0' cellpadding='0' width='801'>

                                  <tr><td valign='top'><div align='center'>  <table border='0' cellspacing='0' cellpadding='0' width='600'><tr><td valign='top'><div align='center'>  <table border='0' cellspacing='0' cellpadding='0' width='560'>  <tr><td valign='top'><div align='center'> <table border='0' cellspacing='0' cellpadding='0' width='100%'> <tr> <td valign='top'><div align='center'>  <table border='0' cellspacing='0' cellpadding='0' width='100%'>  <tr> <td valign='top'><p>&nbsp;</p></td> </tr>   <tr> <td width='100' valign='top'><p>Hotel: </p></td> <td valign='top'><div align='center'> <table border='0' cellspacing='0' cellpadding='0' width='100%'><tr> <td valign='top'><p align='right'>____</p></td> </tr> </table>  </div></td> </tr> <tr> <td valign='top'><p>&nbsp;</p></td> <td></td> </tr>  </table> </div></td>  </tr> </table> </div></td> </tr> <tr> <td valign='top'><div align='center'>  <table border='0' cellspacing='0' cellpadding='0' width='100%'> <tr> <td valign='top'></td> </tr>  </table>  </div></td> </tr>

                                              <tr>  <td valign='top'><div align='center'> <table border='0' cellspacing='0' cellpadding='0' width='100%'> <tr>  <td valign='top'><div align='center'> <table border='0' cellspacing='0' cellpadding='0' width='100%'>  <tr> <td valign='top'><p>&nbsp;</p></td>  </tr> <tr> <td width='100' valign='top'><p>Fecha de llegada: </p></td> <td valign='top'><div align='center'> <table border='0' cellspacing='0' cellpadding='0' width='100%'>  <tr><td valign='top'><p align='right'>____</p></td> </tr>  </table>  </div></td>  </tr>  <tr> <td valign='top'><p>&nbsp;</p></td>  <td></td> </tr> </table>  </div></td> </tr> </table> </div></td> </tr>  

                                               <tr>  <td valign='top'><div align='center'> <table border='0' cellspacing='0' cellpadding='0' width='100%'> <tr> <td valign='top'><div align='center'> <table border='0' cellspacing='0' cellpadding='0' width='100%'> <tr>  <td valign='top'><p>&nbsp;</p></td> </tr>  <tr>  <td width='100' valign='top'><p>Fecha de salida: </p></td>  <td valign='top'><div align='center'>  <table border='0' cellspacing='0' cellpadding='0' width='100%'> <tr> <td valign='top'><p align='right'>____</p></td> </tr> </table>  </div></td> </tr>  <tr> <td valign='top'><p>&nbsp;</p></td> <td></td>  </tr>   </table> </div></td>  </tr>  </table>  </div></td>  </tr>  <tr> <td valign='top'><div align='center'>  <table border='0' cellspacing='0' cellpadding='0' width='100%'>  <tr> <td valign='top'><div align='center'> <table border='0' cellspacing='0' cellpadding='0' width='100%'> <tr>  <td valign='top'><p>&nbsp;</p></td>  </tr>  <tr> <td width='100' valign='top'><p>N&uacute;mero de noches: </p></td>  <td valign='top'><div align='center'> <table border='0' cellspacing='0' cellpadding='0' width='100%'> <tr> <td valign='top'><p align='right'>____</p></td>  </tr>   </table>  </div></td>  </tr>  <tr> <td valign='top'><p>&nbsp;</p></td> <td></td>  </table> </div></td>  </tr> </table> </div></td> </tr> <tr> <td valign='top'><div align='center'> <table border='0' cellspacing='0' cellpadding='0' width='100%'> <tr> <td valign='top'></td> </tr> </table> </div></td></tr>

                                                <tr> <td valign='top'><div align='center'> <table border='0' cellspacing='0' cellpadding='0' width='100%'> <tr> <td valign='top'></td> </tr> </table>  </div></td> </tr>  <tr> <td valign='top'><div align='center'> <table border='0' cellspacing='0' cellpadding='0' width='100%'> <tr>  <td valign='top'><div align='center'> <table border='0' cellspacing='0' cellpadding='0' width='100%'> <tr> <td valign='top'><p>&nbsp;</p></td> </tr>  <tr> <td width='100' valign='top'><p>N&uacute;mero de huespedes: </p></td> <td valign='top'><div align='center'>  <table border='0' cellspacing='0' cellpadding='0' width='100%'>  <tr> <td valign='top'><p align='right'>____</p></td>  </tr>  </table> </div></td> </tr>  <tr>  <td valign='top'><p>&nbsp;</p></td> <td></td> </tr>  </table> </div></td> </tr> </table> </div></td> </tr> </table>  </div></td> </tr> </table>  </div></td> </tr>

                                  <tr> <td valign='top'><div align='center'>  <table border='0' cellspacing='0' cellpadding='0' width='600'>  <tr> <td valign='top'><div align='center'> <table border='0' cellspacing='0' cellpadding='0' width='560'> <tr> <td width='560' valign='top'></td> </tr> </table> </div></td>

 </tr> </table> </div></td> </tr> <tr> <td valign='top'><div align='center'> <table border='0' cellspacing='0' cellpadding='0' width='600'>  <tr> <td valign='top'><div align='center'> <table border='0' cellspacing='0' cellpadding='0' width='100%'>  <tr>  <td valign='top'><p align='center'><strong>Cont&aacute;ctanos</strong></p> <p align='center'>Lunes a Viernes d  10:00 am a 7:00 pm y S&aacute;bados de 9:00 am a &nbsp;02:00 pm<br>  MEXICO: <a href='tel:01800-062-1704'>01800-062-1704</a> / COLOMBIA  <a href='tel:57 (4)204-0522'>57 (4)204-0522</a> <br>  Tambi&eacute;n puede responder a este mismo correo con los siguientes datos: nombre  del hotel, destino, fechas y horario de preferencia para tomar la llamada.<br> Nos pondremos en contacto con usted a la brevedad. </p> <p align='center'><img width='122' height='60' src='http://thetravel-butler.com/images/Templates/gracias/20170610013138_V4L_LOGO_GEN-01-01.png' alt='logo-top'><br /><br /><strong>¡GRACIAS POR CONFIAR EN V4L!</strong> </p> <p>&nbsp; </p></td> </tr>  <tr> <td valign='top'><div align='center'> <table border='0' cellspacing='0' cellpadding='0' width='100%'> <tr> <td></td>  </tr> </table> </div></td> </tr> <tr>  <td valign='top'><div align='center'>  <table border='0' cellspacing='0' cellpadding='0' width='100%'> <tr>  <td valign='top'></td>  </tr>  <tr>  <td valign='top'><div align='center'>  <table border='0' cellspacing='0' cellpadding='0' width='100%'> <tr> <td valign='top'><div align='center'>  <table border='0' cellspacing='0' cellpadding='0'> <tr>  <td></td> </tr>  </table>  </div></td> </tr>  </table> </div></td>  </tr>  <tr>  <td valign='top'></td> </tr> </table> </div></td>  </tr>  <tr> <td valign='top'></td> </tr> </table> </div></td> </tr> </table> </div></td>  </tr> </table>

<p style='text-align: justify; font-size: 14px; font-weight: 400; '><span style='color: #000000; word-break: break-word; line-height: 22px; font-size: 14px; font-weight: 400;  '><font face='Montserrat, arial, sans-serif'><br /></font></span></div></td>  </tbody></table></td></tr></tbody></table></td>

</tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table> </body>
");

	$mail->AddAddress($email);

	$mail->AddAddress("certificados@myvacations4life.com");

	$mail->AddBCC("diego.ek@nat-group.com");

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

  <tr><td width='455' height='147'><strong> Estimado: ".$name." </strong></td><td width='185' align='center'><p><strong>Folio:</strong> ".$folio." </p><p><strong>Fecha:</strong> ".date("d-m-Y")." </p></td></tr>  <tr><td colspan='2'><div style='width:600px; margin:15px; text-align:justify;'>

   Nombre: ".$name." <br /> Nombre 2: ".$name2." <br />

   Ocupacion 1: ".$ocupacion1." <br />Ocupacion 2: ".$ocupacion2." <br />

   Edad: ".$edad."<br />Edad 2: ".$edad2."<br />

   Domicilio: ".$domicilio." <br />

  Fecha de Check out: ".$fecha_tentativa." <br />

  Email: ".$email." <br /> Email 2: ".$email2." <br />

  Tel: ".$telefono." <br /> Tel 2: ".$telefono2." <br />

  Ciudad: ".$ciudad."<br /> Estado: ".$estado." <br />Pais: ".$pais." <br /><br />

  <br />Correo enviado en V4L Certificate, IP: ".$ipreal."<br />".$origen."</div></td></tr>

  <tr><td colspan='2' height='10' bgcolor='#96CAEB'></td></tr>

  <tr><td height='30' colspan='5' bgcolor='#66B2E3'>&nbsp;</td></tr></table></body>");



$mail->AddAddress("promo@myvacations4life.com");

$mail->AddAddress("certificados@myvacations4life.com");

$mail->AddBCC("diego.ek@nat-group.com");

$mail1->AddBCC("manuel.cabrera@nat-group.com");

//$mail->AddBCC("hector.moran@nat-group.com");

//$mail->AddBCC("betty.ponce@nat-group.com"); 

//$mail->AddBCC("enrique.ortiz@nat-group.com");

//$mail->AddBCC("yessica.lopez@thetravel-butler.com");



$mail->IsHTML(true);



  if(!$mail->Send()) {  echo "Error: " . $mail->ErrorInfo;  } else { echo "..."; }



 $sql_register= mysql_query("INSERT INTO `tb_certificados`( `folio`, `his_name`, `her_name`, `tel1`, `tel2`, `mail1`, `mail2`, `edad1`, `edad2`, `ocupacion1`, `ocupacion2`, `pais`, `estado`, `city`, `status`, `notas`, `date`, `direccion`, `ejecutivo`, `codeweek`, `origen`, `idioma` ) VALUES ('$folio', '$name', '$name2', '$telefono', '$telefono2', '$email', '$email2', '$edad', '$edad2', '$ocupacion1', '$ocupacion2', '$pais', '$estado', '$ciudad', 'Nuevo', '$fecha_tentativa', '$today', '$domicilio', '', '$codigo_semana', 'LANDING PAGE', 'ES'  )") or die (mysql_error());



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

    <div class="container">

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
                    
            
                  





        <!-- Javascript -->

        <script src="../assets/js/jquery-1.11.1.min.js"></script>

        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

        <script src="../assets/js/jquery.backstretch.min.js"></script>

        <script src="../assets/js/wow.min.js"></script>

        <script async src="../assets/js/retina-1.1.0.min.js"></script>

        <script src="../assets/js/scripts.js"></script>



    </body>



</html>









