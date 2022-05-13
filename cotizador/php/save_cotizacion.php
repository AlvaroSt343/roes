<?PHP
include("../../files/config.sys.php");
 include("class.phpmailer.php");
include("class.smtp.php");

 $fecha=$_POST['fecha'];
 $tel=$_POST['tel'];
 $asesor=$_POST['asesor'];
 $oficina=$_POST['oficina'];
 $inversionista=$_POST['inversionista'];
 $email=$_POST['email'];
 $ocupacion=$_POST['ocupacion'];
 $ecivil=$_POST['ecivil'];
 $desarrollo=$_POST['desarrollo'];
 $nlote=$_POST['nlote'];
 $m2_lote=$_POST['m2_lote'];
 $val_lote=$_POST['val_lote'];
 $etapa=$_POST['etapa'];
 $precio_m2=$_POST['precio_m2'];
 $tipo_promo=$_POST['tipo_promo'];
 $valor_descuento=$_POST['valor_descuento'];
 $precio_m2_promo=$_POST['precio_m2_promo'];
 $val_lote_promo=$_POST['val_lote_promo'];
 $porce_enganche=$_POST['porce_enganche'];
 $saldo_lote=$_POST['saldo_lote'];
 $monto_enganche=$_POST['monto_enganche'];
  $mes_interes=$_POST['mes_interes'];
  $monto_mes=$_POST['monto_mes'];
 $val_mes6=$_POST['val_mes6'];
 $val_mes12=$_POST['val_mes12'];
 $val_mes18=$_POST['val_mes18'];
 $val_mes24=$_POST['val_mes24'];
 $val_mes30=$_POST['val_mes30'];
 $val_mes36=$_POST['val_mes36'];
  $tipo_pago=$_POST['tipo_pago'];
$costo_admin=$_POST['costo_admin'];
$costo_enganche=$_POST['costo_enganche'];
$total_pago=$_POST['total_pago'];
$moneda_total=$_POST['moneda_total'];

$fecha_penganche=$_POST['fecha_penganche'];
$txtcostoadmin=$_POST['txtcostoadmin'];
$agregar_lotes=$_POST['agregar_lotes'];
$cal_lotes_tot=$_POST['cal_lotes_tot'];
$cal_lote_m2tot=$_POST['cal_lote_m2tot'];
$cal_lote_preciotot=$_POST['cal_lote_preciotot'];

$sql_insert= mysqli_query($con,"INSERT INTO `web_cotizador`( `fecha`, `tel`, `asesor`, `oficina`, `inversionista`, `email`, `desarrollo`, `nlote`, `m2_lote`, `val_lote`, `etapa`, `precio_m2`, `tipo_promo`, `valor_descuento`, `precio_m2_promo`, `val_lote_promo`, `porce_enganche`, `saldo_lote`, `monto_enganche`,  `mes_interes`, `monto_mes`, `val_mes6`, `val_mes12`, `val_mes18`, `val_mes24`, `val_mes30`, `val_mes36`, `tipo_pago`, `costo_admin`, `costo_enganche`, `total_pago`, `moneda`, `fecha_penganche`, `txtcostoadmin`, `agregar_lotes`, `cal_lotes_tot`, `cal_lote_m2tot`, `cal_lote_preciotot`, `ocupacion`, `ecivil`  ) 
    VALUES ('$fecha', '$tel','$asesor', '$oficina','$inversionista','$email','$desarrollo','$nlote','$m2_lote','$val_lote','$etapa','$precio_m2','$tipo_promo','$valor_descuento','$precio_m2_promo','$val_lote_promo','$porce_enganche','$saldo_lote','$monto_enganche', '$mes_interes', '$monto_mes', '$val_mes6','$val_mes12','$val_mes18','$val_mes24','$val_mes30','$val_mes36','$tipo_pago', '$costo_admin','$costo_enganche','$total_pago', '$moneda_total', '$fecha_penganche','$txtcostoadmin','$agregar_lotes','$cal_lotes_tot','$cal_lote_m2tot','$cal_lote_preciotot', '$ocupacion','$ecivil'  ) ");


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


if($sql_insert){
    echo $id_ultimo=mysqli_insert_id($con);
    echo '<div class="col-md-10 text wow fadeInUp" style="background-color:#001E47;">
            <center>
                <a href="cotizacion-pdf.php?id='.$id_ultimo.'"  target="_blank"><button id="dinamico" type="button" class="btn btn-link-1 fadeInDown"><span> GENERAR PDF </span></button>   </a>
            </center>         
        </div>';

    $mail_serv="asesor@inversionesconplusvalia.com";
    $pass_serv="AsesT2I*";

    if($email!=''){
        /*
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host ="mail.inversionesconplusvalia.com";
        $mail->Port ="26";
        $mail->Username =$mail_serv;
        $mail->Password =$pass_serv;

        $mail->From ="asesor@inversionesconplusvalia.com";
        $mail->FromName ="ROES cotizacion";
        $mail->Subject ="ROES - Cotizacion PDF";
        $mail->MsgHTML('<body><div style="border:#33F 2px solid; width:850px">
          <table width="600" border="0" align="center">
            <tr><th height="58" colspan="2" scope="col"><strong>COTIZACION ROES & CO ('.date("d-m-Y").') </strong></th></tr>
            <tr><td width="92" height="30"><strong>NOMBRE</strong>:</td><td width="498">'.$inversionista.'</td> </tr>
            <tr><td height="31"><strong>TELEFONO</strong>:</td> <td>'.$tel.'</td> </tr> 
            <tr><td height="30"><strong>EMAIL</strong>:</td> <td>'.$email.'</td> </tr>
            <tr><td height="31"><strong>DESARROLLO:</strong></td> <td>'.$desarrollo.'</td> </tr> 
            <tr><td height="31"><strong><span role="presentation" dir="ltr">ASESOR</span>:</strong></td> 
              <td>'.$asesor.'</td> </tr> 
            <tr> <td height="31"><strong>Lotes:</strong></td> <td>'.$nlote.', '.$cal_lotes_tot.'</td> </tr> 
            <tr><td height="46" colspan="2" align="center"><a href="https://inversionesconplusvalia.com/cotizador/cotizacion-pdf.php?id='.$id_ultimo.'">DESCARGAR PDF AQUI</a></td></tr>
            <tr><td height="10" bgcolor="#001E47" colspan="2"> </td></tr>
          </table> <p>Enviado en sitio web  inversionesconplusvalia.com - Cotizador web.<br />IP Conexion: '.$ipreal.'</p></div><body>');

        $mail->AddAddress($email);
        //$mail->AddAddress("asolano@inversionesconplusvalia.com");
        $mail->AddBCC("diegodavid.ek@gmail.com");
        $mail->IsHTML(true);

        if(!$mail->Send()) {  echo "Error: " . $mail->ErrorInfo;  } else { echo "."; }
        */

        $contenido='<body><div style="border:#33F 2px solid; width:850px">
          <table width="600" border="0" align="center">
            <tr><th height="58" colspan="2" scope="col"><strong>COTIZACION ROES & CO ('.date("d-m-Y").') </strong></th></tr>
            <tr><td width="92" height="30"><strong>NOMBRE</strong>:</td><td width="498">'.$inversionista.'</td> </tr>
            <tr><td height="31"><strong>TELEFONO</strong>:</td> <td>'.$tel.'</td> </tr> 
            <tr><td height="30"><strong>EMAIL</strong>:</td> <td>'.$email.'</td> </tr>
            <tr><td height="31"><strong>DESARROLLO:</strong></td> <td>'.$desarrollo.'</td> </tr> 
            <tr><td height="31"><strong><span role="presentation" dir="ltr">ASESOR</span>:</strong></td> 
              <td>'.$asesor.'</td> </tr> 
            <tr> <td height="31"><strong>Lotes:</strong></td> <td>'.$nlote.', '.$cal_lotes_tot.'</td> </tr> 
            <tr><td height="46" colspan="2" align="center"><a href="https://inversionesconplusvalia.com/cotizador/cotizacion-pdf.php?id='.$id_ultimo.'">DESCARGAR PDF AQUI<br /><img src="https://inversionesconplusvalia.com/images/pdf.jpg" alt="PDF" width="60px"></a></td></tr>
            <tr><td height="10" bgcolor="#001E47" colspan="2"> </td></tr>
          </table> <p>Enviado en sitio web inversionesconplusvalia.com - Cotizador web.<br />IP Conexion: '.$ipreal.'</p></div><body>';
  
          $titulo = "ROES - Cotizacion PDF";
           //para el envío en formato HTML 
          $headers = "MIME-Version: 1.0\r\n"; 
          $headers .= "Content-type: text/html; charset=utf-8\r\n"; 

          //dirección del remitente 
          $headers .= "From: Cotizacion - Asesor <inversiones@inversionesconplusvalia.com>\r\n";     //copia 
          //$headers .= "Bcc: Copia <asolano@inversionesconplusvalia.com.mx>\r\n"; 
          $headers .= "Bcc: Copia <asesor@inversionesconplusvalia.com>\r\n"; 
          //$headers .= "Bcc: Copia <diegodavid.ek@gmail.com>\r\n"; 

          //dirección de respuesta, si queremos que sea distinta que la del remitente  
          $headers .= "Reply-To: inversiones@inversionesconplusvalia.com.mx\r\n"; 
          //ruta del mensaje desde origen a destino 
          $headers .= "Return-path: inversiones@inversionesconplusvalia.com.mx\r\n"; 
          $para = $email;
          //$para = 'ddavid.ekc@gmail.com';

          mail($para, $titulo, $contenido, $headers);

    }

}



?>


