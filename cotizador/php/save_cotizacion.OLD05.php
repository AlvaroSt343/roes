<?PHP
include("../../files/config.sys.php");
 
 $fecha=$_POST['fecha'];
 $tel=$_POST['tel'];
 $asesor=$_POST['asesor'];
 $oficina=$_POST['oficina'];
 $inversionista=$_POST['inversionista'];
 $email=$_POST['email'];
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

$sql_insert= mysqli_query($con,"INSERT INTO `web_cotizador`( `fecha`, `tel`, `asesor`, `oficina`, `inversionista`, `email`, `desarrollo`, `nlote`, `m2_lote`, `val_lote`, `etapa`, `precio_m2`, `tipo_promo`, `valor_descuento`, `precio_m2_promo`, `val_lote_promo`, `porce_enganche`, `saldo_lote`, `monto_enganche`,  `mes_interes`, `monto_mes`, `val_mes6`, `val_mes12`, `val_mes18`, `val_mes24`, `val_mes30`, `val_mes36`, `tipo_pago`, `costo_admin`, `costo_enganche`, `total_pago`) 
    VALUES ('$fecha', '$tel','$asesor', '$oficina','$inversionista','$email','$desarrollo','$nlote','$m2_lote','$val_lote','$etapa','$precio_m2','$tipo_promo','$valor_descuento','$precio_m2_promo','$val_lote_promo','$porce_enganche','$saldo_lote','$monto_enganche', '$mes_interes', '$monto_mes', '$val_mes6','$val_mes12','$val_mes18','$val_mes24','$val_mes30','$val_mes36','$tipo_pago', '$costo_admin','$costo_enganche','$total_pago' ) ");


if($sql_insert){
    echo $id_ultimo=mysqli_insert_id($con);
    echo '<div class="col-md-10 text wow fadeInUp" style="background-color:#001E47;">
                        <center>
                            <a href="cotizacion-pdf.php?id='.$id_ultimo.'"  target="_blank"><button id="dinamico" type="button" class="btn btn-link-1 fadeInDown"><span> GENERAR PDF </span></button>   </a>
                        </center>
                        
                    </div>';

}



?>


