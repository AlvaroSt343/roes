<?PHP
include("../../files/config.sys.php");
 
 $id_cot= $_POST['id_cot'];
 $fecha=$_POST['fecha'];
 $nombre=$_POST['nombre'];
 $tel=$_POST['tel'];
 $email=$_POST['email'];
 $metodopago=$_POST['metodopago'];
 $cerrador=$_POST['cerrador'];
 $asesor=$_POST['asesor'];
 $tipo_asesor=$_POST['tipo_asesor'];
 $origen_cli=$_POST['origen_cli'];
 $plaza=$_POST['plaza'];
 $proyecto=$_POST['proyecto'];
 $manzana=$_POST['manzana'];
 $num_lote=$_POST['num_lote'];
 $etapa=$_POST['etapa'];
 $m2_lote=$_POST['m2_lote'];
 $precio_m2=$_POST['precio_m2'];
 $valor_m2=$_POST['valor_m2'];
 $promocion=$_POST['promocion'];
 $enganche=$_POST['enganche'];
 $fecha_pagoengan=$_POST['fecha_pagoengan'];
 $financia=$_POST['financia'];
 $comentario=$_POST['comentario'];
 
$sql_insert= mysqli_query($con,"INSERT INTO `web_coti_hojat`( `id_cot`, `fecha`, `nombre`, `tel`, `email`, `metodopago`, `cerrador`, `asesor`, `tipo_asesor`, `origen_cli`, `plaza`, `proyecto`, `manzana`, `num_lote`, `etapa`, `m2_lote`, `precio_m2`, `valor_m2`, `promocion`, `enganche`, `fecha_pagoengan`, `financia`, `comentario`)

    VALUES ('$id_cot', '$fecha','$nombre', '$tel','$email','$metodopago','$cerrador','$asesor','$tipo_asesor','$origen_cli','$plaza','$proyecto','$manzana','$num_lote','$etapa','$m2_lote','$precio_m2','$valor_m2','$promocion', '$enganche', '$fecha_pagoengan', '$financia','$comentario' ) ");



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
            <a href="pdf_hojadetrabajo.php?cot='.$id_cot.'&id='.$id_ultimo.'"  target="_blank">
            <button id="dinamico" type="button" class="btn btn-link-1 fadeInDown"><span> GENERAR PDF - HT</span></button>
            </a>
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
        $mail->FromName ="Hoja de Trabajo ROES";
        $mail->Subject ="ROES - Hoja de Trabajo PDF";
        $mail->MsgHTML('<body><div style="border:#33F 2px solid; width:850px">
          <table width="600" border="0" align="center">
            <tr><th height="58" colspan="2" scope="col"><strong>HOJA DE TRABAJO - ROES & CO ('.date("d-m-Y").') </strong></th></tr>
            <tr><td width="92" height="30"><strong>NOMBRE</strong>:</td><td width="498">'.$inversionista.'</td> </tr>
            <tr><td height="31"><strong>TELEFONO</strong>:</td> <td>'.$tel.'</td> </tr> 
            <tr><td height="30"><strong>EMAIL</strong>:</td> <td>'.$email.'</td> </tr>
            <tr><td height="31"><strong>DESARROLLO:</strong></td> <td>'.$desarrollo.'</td> </tr> 
            <tr><td height="31"><strong><span role="presentation" dir="ltr">ASESOR</span>:</strong></td> 
              <td>'.$asesor.'</td> </tr> 
            <tr> <td height="31"><strong>Lotes:</strong></td> <td>'.$nlote.', '.$cal_lotes_tot.'</td> </tr> 
            <tr><td height="46" colspan="2" align="center"><a href="https://inversionesconplusvalia.com/hoja-de-trabajo/pdf_hojadetrabajo.php?cot='.$id_cot.'&id='.$id_ultimo.'">DESCARGAR PDF AQUI<br /><img src="https://inversionesconplusvalia.com/images/pdf.jpg" alt="PDF" width="60px"></a></td></tr>
            <tr><td height="10" bgcolor="#001E47" colspan="2"> </td></tr>
          </table> <p>Enviado en sitio web  inversionesconplusvalia.com - Hoja de Trabajo.<br />IP Conexion: '.$ipreal.'</p></div><body>');

        $mail->AddAddress("diegodavid.ek@gmail.com");
        //$mail->AddAddress("asolano@inversionesconplusvalia.com");
        //$mail->AddAddress("lilianroal87@gmail.com");
        //$mail->AddBCC("diegodavid.ek@gmail.com");
        $mail->IsHTML(true);

        if(!$mail->Send()) {  echo "Error: " . $mail->ErrorInfo;  } else { echo "."; }
        */

        $contenido='<body><div style="border:#33F 2px solid; width:850px">
          <table width="600" border="0" align="center">
            <tr><th height="58" colspan="2" scope="col"><strong>HOJA DE TRABAJO - ROES & CO ('.date("d-m-Y").') </strong></th></tr>
            <tr><td width="92" height="30"><strong>NOMBRE</strong>:</td><td width="498">'.$nombre.'</td> </tr>
            <tr><td height="31"><strong>TELEFONO</strong>:</td> <td>'.$tel.'</td> </tr> 
            <tr><td height="30"><strong>EMAIL</strong>:</td> <td>'.$email.'</td> </tr>
            <tr><td height="31"><strong>DESARROLLO:</strong></td> <td>'.$proyecto.'</td> </tr> 
            <tr><td height="31"><strong><span role="presentation" dir="ltr">ASESOR</span>:</strong></td> 
              <td>'.$asesor.'</td> </tr> 
            <tr> <td height="31"><strong>Lotes:</strong></td> <td>'.$num_lote.'</td> </tr> 
            <tr><td height="46" colspan="2" align="center"><a href="https://inversionesconplusvalia.com/hoja-de-trabajo/pdf_hojadetrabajo.php?cot='.$id_cot.'&id='.$id_ultimo.'">DESCARGAR PDF AQUI<br /><img src="https://inversionesconplusvalia.com/images/pdf.jpg" alt="PDF" width="60px"></a></td></tr>
            <tr><td height="10" bgcolor="#001E47" colspan="2"> </td></tr>
          </table> <p>Enviado en sitio web  inversionesconplusvalia.com - Hoja de Trabajo.<br />IP Conexion: '.$ipreal.'</p></div><body>';
  
          $titulo = "Hoja de Trabajo PDF - ROES";
           //para el envío en formato HTML 
          $headers = "MIME-Version: 1.0\r\n"; 
          $headers .= "Content-type: text/html; charset=utf-8\r\n"; 

          //dirección del remitente 
          $headers .= "From: Hoja de Trabajo - Asesor <inversiones@inversionesconplusvalia.com>\r\n";     //copia 
          $headers .= "Bcc: Copia <diegodavid.ek@gmail.com>\r\n"; 
          //$headers .= "Bcc: Copia <lilianroal87@gmail.com>\r\n"; 

          //dirección de respuesta, si queremos que sea distinta que la del remitente  
          $headers .= "Reply-To: inversiones@inversionesconplusvalia.com\r\n"; 
          //ruta del mensaje desde origen a destino 
          $headers .= "Return-path: inversiones@inversionesconplusvalia.com.mx\r\n"; 
          //$para ="asolano@inversionesconplusvalia.com.mx"
          $para = 'ddavid.ekc@gmail.com';

          mail($para, $titulo, $contenido, $headers);

    }

}



?>


