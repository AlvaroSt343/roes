 <?PHP
include("../../files/config.sys.php");

$dep_inicial=$_POST['dep_inicial'];
$aportar_anual=$_POST['aportar_anual'];
$increm_anual=$_POST['increm_anual'];
$anio_inversion=$_POST['anio_inversion'];
$rendim_anual=$_POST['rendim_anual'];

/*$sql_consulta= mysqli_query($con, "SElECT * FROM ".$db_selecion." WHERE lote_num='".$nlote."'  ");
$mcuadrado= mysqli_fetch_array($sql_consulta);

$lote_m2= $mcuadrado['metro_cuadrado'];
$lote_status= $mcuadrado['status'];
*/

$porce_increm_anual=($increm_anual/100);
$porce_rendim_anual=($rendim_anual/100);

?>
<div class="col-md-12"> 
    <div class="col-md-12">
        <h1>Resultados del cálculo del Plan de Retiro</h1>
    </div>
    
</div>
<div class="col-md-12">
    <div class="col-md-12 fadeInDown">
        <table width="90%" border="0">
            <tr>
                <th>Anio</th>
                <th>Saldo inicial</th>
                <th>Aportación</th>
                <th>Rendimiento</th>            
                <th>Saldo final</th>
            </tr>
            <?PHP

            $saldo_inicial=0;
            $aportacion=0;
            $rendi_totsuma=0;
            for ($i=1;  $i <= $anio_inversion ; $i++) {

                $saldo_inicial= $dep_inicial;

                $aportacion= $aportar_anual;

                $rendi_suma= $dep_inicial + $aportacion;
                $rendi_tot=$rendi_suma * $porce_rendim_anual;

                $saldo_total= $dep_inicial + $aportacion + $rendi_tot;

                echo ' <tr><td>'.$i.'</td>
                <td height="20">$ '.number_format($saldo_inicial,2).'</td>
                <td>$ '.number_format($aportacion,2).'</td>
                <td>$ '.number_format($rendi_tot,2).'</td>
                <td>$ '.number_format($saldo_total,2).'</td> 
                </tr>';
                $dep_inicial=$saldo_total;
                $aportacion_anual=$aportacion + ($aportacion * $porce_increm_anual);
                //$aportacion= $aportacion + $aportar_anual + $aportacion_an;
                $aportar_anual= $aportacion_anual;
                $rendi_totsuma= $rendi_totsuma + $rendi_tot;
            }

            ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

        </table>
    </div>
    <div class="col-md-12">
        <br />
    </div>
    <div class="col-md-4 text wow fadeInUp">
        <div class="top-buttons fadeInDown">
            <p style="font-size: 18px;">Ganancias por inversión: 
                <label id="gan_inversion">$ <?PHP echo number_format($rendi_totsuma,2);?></label>
            </p>
        </div>
        <div class="top-buttons fadeInDown">
            <p style="font-size: 18px;">Monto final:: 
                <label id="mon_final">$ <?PHP echo number_format($saldo_total,2);?></label>
            </p>
        </div>
    </div>
    <!--
    <div class="col-md-4 text wow fadeInUp">
        <div class="top-buttons fadeInDown">
            <p style="font-size: 18px;">Ingreso anual:
                <label id="gan_inversion">$ <?PHP echo number_format($saldo_total,2);?></label>
            </p>
        </div>
         <div class="top-buttons fadeInDown">
            <p style="font-size: 18px;">Ingreso mensual:
                <label id="gan_inversion">$ 1,285.56</label>
            </p>
        </div>
    </div>
    -->

</div>





