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
$origen='http://myvacations4life.com/certificados/';
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

$text_ok="THANK YOU";
$text_error="Error";
$mail_serv="info@myvacations4life.com";
$pass_serv="INFOv4l!";
if($email!=''){

	  echo '<div class="borde_ok" align="center" style="margin:20px 20px 0px 60px;"><br />';

	  echo '  <div class="alert alert-success">'.$text_ok.' <br /> <span class="close"></span></div>';

	  echo '<a class="button btn-small" style="background-color:#F79300; color:#000;" href="./"><h3>Gracias por ponerse en contacto con nosotros, pronto uno de nuestros especialistas se pondrá en contacto con usted.</h3></a></div>';     

	/////////// MAIL 1

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->Host ="mail.myvacations4life.com";
	$mail->Port ="26";
	$mail->Username =$mail_serv;
	$mail->Password =$pass_serv;
	$mail->From ="info@myvacations4life.com";
	$mail->FromName ="V4L Certificate";
	$mail->Subject ="Contacto V4L Certificate";

	$mail->MsgHTML("<body><table align='center' width='600' border='0'><tr>
  <td height='45' align='center'><p>GRACIAS POR SU REGISTRO</p>
    <p>ACTIVACI&Oacute;N DE CERTIFICADO</p></td></tr><tr>
    <td><strong>Hola:  ".$name." </strong></td>
    </tr><tr><td><div style='width:600px; margin:15px; text-align:justify;'><br /><span >Bienvenido a la comunidad de clientes de V4L. A partir de ahora, tendr&aacute;s acceso a nuestras ofertas de viaje exclusivas. Tal como prometimos, en breve le enviaremos un correo electr&oacute;nico con informaci&oacute;n de nuestros hoteles participantes.</span><br /><span><br /> Ll&aacute;menos al <a href='tel:018001410024'><strong>01-800-141-0024</strong></a> o espere a que uno de nuestros asesores de viajes se comunique con usted.<br />
  <br />PD: Si tiene alguna pregunta, no dude en contactarnos a trav&eacute;s de nuestro Chat de soporte en nuestro sitio web de V4L.<br />
  </span><br /><br />  Gracias!<br />Equipo V4L</div></td></tr><tr><td colspan='4' bgcolor='#00A19C'></td></tr><tr><td><img src='http://myvacations4life.com/images/mail_tira.jpg' alt='Gracias2'/></td></tr> </table></body>");

	$mail->AddAddress($email);
	$mail->AddAddress("info@myvacations4life.com");
	//$mail->AddBCC($mail_mkt);
	$mail->IsHTML(true);
  	if(!$mail->Send()) {  echo "Error: " . $mail->ErrorInfo;  } else { echo "..."; }
	

}else{

  echo '<div class="borde_ok" align="center" style="margin:20px 20px 0px 60px;"> <br />';

  echo '<a class="button btn-small sky-blue1" href="./" >'.$text_error.'</a><br /><br /></div>';

}



///////////SEGUNDO MAIL - INFO

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host ="mail.myvacations4life.com";
$mail->Port ="26";
$mail->Username =$mail_serv;
$mail->Password =$pass_serv;

$mail->From ="info@myvacations4life.com";
$mail->FromName ="V4L Certificate";
$mail->Subject ="Contacto: ".$name."";
$mail->MsgHTML("<body><table align='center' width='650' border='0'>
  <tr><td colspan='2' align='center'><BR />  <strong>ACTIVACION DE CERTIFICADO</strong></td></tr>  <tr><td colspan='2' height='10' bgcolor='#F79300'></td></tr>
  <tr><td width='455' height='147'><strong> Estimado: ".$name." </strong></td><td width='185' align='center'><p><strong>Folio:</strong> ".$folio." </p><p><strong>Fecha:</strong> ".date("d-m-Y")." </p></td></tr>  <tr><td colspan='2'><div style='width:600px; margin:15px; text-align:justify;'>
   Nombre: ".$name." <br /> Nombre 2: ".$name2." <br />
   Ocupacion 1: ".$ocupacion1." <br />Ocupacion 2: ".$ocupacion2." <br />
   Edad: ".$edad."<br />Edad 2: ".$edad2."<br />
   Domicilio: ".$domicilio." <br />
  Fecha alternativa de viaje: ".$fecha_tentativa." <br />
  Email: ".$email." <br /> Email 2: ".$email2." <br />
  Tel: ".$telefono." <br /> Tel 2: ".$telefono2." <br />
  Ciudad: ".$ciudad."<br /> Estado: ".$estado." <br />Pais: ".$pais." <br /><br />
  <br />Correo enviado en V4L Certificate, IP: ".$ipreal."<br />".$origen."</div></td></tr>
  <tr><td colspan='2' height='10' bgcolor='#96CAEB'></td></tr>
  <tr><td height='30' colspan='5' bgcolor='#66B2E3'>&nbsp;</td></tr></table></body>");
  
$mail->AddAddress("info@myvacations4life.com");
$mail->AddAddress("hector.moran@nat-group.com");
$mail->AddBCC("betty.ponce@nat-group.com"); 
//$mail->AddBCC("enrique.ortiz@nat-group.com");
//$mail->AddBCC("yessica.lopez@thetravel-butler.com");

/*
$mail->AddAddress("system@myvacations4life.com");
$mail->AddBCC("manuel.cabrera@nat-group.com");
$mail->AddBCC("diego.ek@nat-group.com");
*/
$mail->IsHTML(true);

  if(!$mail->Send()) {  echo "Error: " . $mail->ErrorInfo;  } else { echo "..."; }

 $sql_register= mysql_query("INSERT INTO `tb_certificados`( `folio`, `his_name`, `her_name`, `tel1`, `tel2`, `mail1`, `mail2`, `edad1`, `edad2`, `ocupacion1`, `ocupacion2`, `pais`, `estado`, `city`, `status`, `notas`, `date`, `direccion`, `ejecutivo`, `codeweek`, `origen`, `idioma` ) VALUES ('$folio', '$name', '$name2', '$telefono', '$telefono2', '$email', '$email2', '$edad', '$edad2', '$ocupacion1', '$ocupacion2', '$pais', '$estado', '$ciudad', 'Nuevo', '$fecha_tentativa', '$today', '$domicilio', '', '$codigo_semana', 'CERTIFICADOS', 'ES'  )") or die (mysql_error());


?>

<!DOCTYPE html>

<html lang="es">



    <head>



    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GRACIAS POR SU REGISTRO</title>

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

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">

        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="../assets/css/animate.css">

        <link rel="stylesheet" href="../assets/css/style.css">

        <link rel="stylesheet" href="../assets/css/media-queries.css">



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>

            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

        <![endif]-->

    

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



    <body bgcolor="#64B0E2">

      <!-- Google Tag Manager (noscript) -->

        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53JCKQW"

        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

        <!-- End Google Tag Manager (noscript) -->



        <!-- Top content -->

        <div class="top-content2">

          <div class="container">



        <div class="row" style="background-color:#64B0E2">       

                    <div class="col-sm-2"> &nbsp; </div>

          <div class="col-sm-8 text wow fadeInUp" >

            <center><img src="../assets/img/v4l-logo.png"  alt="V4L" width="400"></center>
            <h1>V4L GRACIAS</h1>

            <!--<h3 style="color: #FFF">Starting At $899 USD</h3> -->
            <div class="description">

              <p class="medium-paragraph" style="color: #FF9D00;">Bienvenido a la comunidad de clientes de V4L. A partir de ahora, tendrás acceso a nuestras ofertas de viaje exclusivas. Tal como prometimos, en breve le enviaremos un correo electrónico con un enlace a nuestros hoteles participantes.

                <br /><br />Un asesor de viajes lo llamará hoy para ayudarlo a encontrar el hotel que más le convenga. Para su comodidad, también puede llamarnos al <a href="tel:018001410024"><strong>01-800-141-0024</strong></a></strong>

              </p>

            </div>

            <div class="top-buttons">

              <a class="btn btn-link-1 fadeInDown" href="https://myvacations4life.com/certificados/" data-modal-id="modal-terms"><strong>GRACIAS</strong></a>



            </div>

          </div>

          

        </div>

                

            </div>

        </div>






        



        <!-- Javascript -->

        <script src="../assets/js/jquery-1.11.1.min.js"></script>

        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

        <script src="../assets/js/jquery.backstretch.min.js"></script>

        <script src="../assets/js/wow.min.js"></script>

        <script src="../assets/js/retina-1.1.0.min.js"></script>

        <script src="../assets/js/scripts.js"></script>

        

        <!--[if lt IE 10]>

            <script src="assets/js/placeholder.js"></script>

        <![endif]-->



    </body>



</html>







