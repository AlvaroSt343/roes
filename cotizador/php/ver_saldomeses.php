<script type="text/javascript" src="../js/ajax_origi.js"></script>
<?PHP
include("../../files/config.sys.php");

$saldo_lote=$_POST['saldo_lote'];
$mes_interes=$_POST['mes_interes'];
 
  
  $mensualidad= $saldo_lote / $mes_interes ;
  $mensualidad2=number_format($mensualidad ,2);
/*
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
 */
echo ' <div class="col-md-6"> 
                                <h4 align="center">'.$mes_interes.' MENSUALIDADES </h4>
                            </div>
                            <div class="col-md-6">
                                <h4 align="center">MONTO MENSUAL= $ '.$mensualidad2.'</h4>
                                <input type="hidden" id="monto_mes" value="'.$mensualidad.'">
                            </div>
                   ';

        





?>
 