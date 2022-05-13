<script type="text/javascript" src="../js/ajax_origi.js"></script>
<?PHP
include("../../files/config.sys.php");
//abrir.send("val_lote_promo="++"&porce_enganche="++"&monto_enganche="++"&saldo_lote="+saldo_lote);

 $val_lote_promo=$_POST['val_lote_promo'];
 $porce_enganche=$_POST['porce_enganche'];
 $monto_enganche=$_POST['monto_enganche'];
 $saldo_lote=$_POST['saldo_lote'];
 $desarrollo=$_POST['desarrollo'];
 

 
  $l_porcentaje= round($val_lote_promo*$porce_enganche/100 ,2);
   $l2_porcentaje= number_format($val_lote_promo*$porce_enganche/100 ,2);

  $l_saldo= $val_lote_promo - $l_porcentaje;
  $l2_saldo= number_format($l_saldo ,2);
   
  $meses6= $l_saldo / 6;
  $meses12= $l_saldo/12;
  $meses18= $l_saldo/18;
  $meses24= $l_saldo/24;
  $meses30= $l_saldo/30;
  $meses36= $l_saldo/36;

  $fmes6=number_format($meses6 ,2);
  $fmes12=number_format($meses12 ,2);
  $fmes18=number_format($meses18 ,2);
  $fmes24=number_format($meses24 ,2);
  $fmes30=number_format($meses30 ,2);
  $fmes36=number_format($meses36 ,2);
/*
$sql_consulta= mysqli_query($con, "SElECT * FROM lotes_aactunha WHERE lote_num='".$nlote."'  ");
$mcuadrado= mysqli_fetch_array($sql_consulta);

$lote_m2= $mcuadrado['metro_cuadrado'];
$lote_status= $mcuadrado['status'];
 */


//echo '<label>METROS CUADRADOS DEL LOTE:</label><input type="text" id="m2_lote" value="'.$lote_m2.'" size="13" class="form-control1">';

echo ' <div class="col-md-6"> 
                            <label>PORCENTAJE DE ENGANCHE:</label>
                            <select id="porce_enganche" onchange="ver_porcentaje2()">
                                <option value="'.$porce_enganche.'">'.$porce_enganche.' %</option>
                                <option value="20">20%</option>
                                <option value="25">25%</option>
                                <option value="30">30%</option>
                                <option value="35">35%</option>
                                <option value="40">40%</option>
                                <option value="45">45%</option>
                                <option value="50">50%</option>
                            </select> <br />
                            <label>SALDO DEL LOTE:</label>
                            <input type="hidden" id="saldo_lote" value="'.$l_saldo.'" class="form-control1">
                            <input type="text" id="saldo_lote2" value="'.$l2_saldo.'" class="form-control1">
                        </div> 
                        <div class="col-md-6">
                            <label>MONTO DE ENGANCHE:</label>
                            <input type="text" id="monto_enganche" value="'.$l_porcentaje.'" onblur="monto_enganche()" class="form-control1"> 
                            <input type="hidden" id="monto_enganche2" value="'.$l2_porcentaje.'" onkeyup="monto_enganche()" class="form-control1">
                            <br>
                            <label>SALDO A MESES SIN INTERESES</label>
                            <select id="mes_interes" onchange="ver_saldomeses()">
                                <option value="">Seleccione</option>
                                <option value="6">6 MESES</option>
                                <option value="12">12 MESES</option>
                                <option value="18">18 MESES</option>
                                <option value="24">24 MESES</option>
                                <option value="30">30 MESES</option>
                                <option value="36">36 MESES</option>';
                                if ($desarrollo=="LAS SALINAS") {
                                    echo '<option value="42">42 MESES</option>
                                <option value="48">48 MESES</option>
                                <option value="54">54 MESES</option>
                                <option value="60">60 MESES</option>';
                                }
                                echo '
                            </select>
                        </div>';

echo '
                    <input type="hidden" id="val_mes6" value="'.$meses6.'" >
                    <input type="hidden" id="val_mes12" value="'.$meses12.'" >
                    <input type="hidden" id="val_mes18" value="'.$meses18.'" >
                    <input type="hidden" id="val_mes24" value="'.$meses24.'" >
                    <input type="hidden" id="val_mes30" value="'.$meses30.'" >
                    <input type="hidden" id="val_mes36" value="'.$meses36.'" >';
?>
 