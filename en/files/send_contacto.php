 
<?PHP
date_default_timezone_set("America/Cancun");
//include("config.sys.php");
 

//include("class.phpmailer.php");
//include("class.smtp.php");

 $nombre=htmlentities($_POST['name'], ENT_QUOTES, "UTF-8"); 
 $email=$_POST['email']; 
 $phone=$_POST['phone'];  
 $subject=htmlentities($_POST['subject'], ENT_QUOTES, "UTF-8");    
 $message=htmlentities($_POST['message'], ENT_QUOTES, "UTF-8"); 
 $lang=$_POST['lang'];

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


  $contenido='<body><div style="border:#33F 2px solid; width:850px"><p>&nbsp;</p>
  <table width="600" border="0" align="center">
    <tr><th colspan="2" scope="col"><strong>CONTACTO EN '.$subject.' ('.date("d-m-Y").')</strong></th></tr>
    <tr><td width="92" height="30"><strong>NOMBRE</strong>:</td><td width="498">'.$nombre.'</td> </tr>
    <tr><td height="31"><strong>TELEFONO</strong>:</td> <td>'.$phone.'</td> </tr> 
    <tr><td height="30"><strong>EMAIL</strong>:</td> <td>'.$email.'</td> </tr>
    
    <tr><td height="31"><strong>MENSAJE</strong>:</td> <td>'.$message.'</td> </tr> 
    <tr><td height="46" colspan="2" align="center">Enviado en sitio web  inversionesconplusvalia.com/en - Contact Us </td></tr>
    <tr><td height="10" bgcolor="#001E47" colspan="2"> </td></tr>
  </table> <p>IP Conexion: '.$ipreal.'</p></div> <body>';
  
  $titulo = "Datos Contacto";
   //para el envío en formato HTML 
  $headers = "MIME-Version: 1.0\r\n"; 
  $headers .= "Content-type: text/html; charset=utf-8\r\n"; 

  //dirección del remitente 
  $headers .= "From: Contacto - Asesor <asesor@inversionesconplusvalia.com>\r\n";     //copia 
  $headers .= "Bcc: Copia <diegodavid.ek@gmail.com>\r\n"; 

    //dirección de respuesta, si queremos que sea distinta que la del remitente  
  $headers .= "Reply-To: asesor@inversionesconplusvalia.com\r\n"; 

  //ruta del mensaje desde origen a destino 
  $headers .= "Return-path: asesor@inversionesconplusvalia.com\r\n"; 
  //$para = 'diegodavid.ek@gmail.com';
  $para = 'callcenter@inversionesconplusvalia.com';
  /*
  if($email=="" || $phone=="" || $nombre=="") {
      $alerta = 1;
  } else {
      mail($para, $titulo, $contenido, $headers);
      $alerta = 2;
  }
 */

  mail($para, $titulo, $contenido, $headers);

?>
<h2>¡GRACIAS POR CONFIAR EN NOSOTROS!</h2>
<h3>En breve uno de nuestros especialistas se comunicará con usted.</h3>