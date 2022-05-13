<?PHP
include("../../files/config.sys.php");


 $nlote=$_POST['nlote'];
 $precio_m2_promo=$_POST['precio_m2_promo'];
 $tipo_promo=$_POST['tipo_promo'];
  $valor_descuento=$_POST['valor_descuento'];
  $val_lote=$_POST['val_lote'];
  $moneda_pm2= $_POST['moneda_pm2'];
  $lote_m2= $_POST['m2_lote'];
  $agregar_lotes= $_POST['agregar_lotes'];
  $maslotes_val_precio= $_POST['maslotes_val_precio'];
  $m2lotes_val= $_POST['m2lotes_val'];
  
  
/*
$sql_consulta= mysqli_query($con, "SElECT * FROM lotes_aactunha WHERE lote_num='".$nlote."'  ");
$mcuadrado= mysqli_fetch_array($sql_consulta);

$lote_m2= $mcuadrado['metro_cuadrado'];
$lote_status= $mcuadrado['status'];
 
switch ($lote_status) {
    case 0:
        $lote_view="Lote NO esta en Venta <br />";
        break;
    case 1:
        $lote_view="";
        break;
    case 2:
        $lote_view="Lote Resevado <br />";
        break;
    case 3:
        $lote_view="Lote Vendido <br />";
        break;
}*/
if (($lote_m2=="") || ($lote_m2==0)) {
    $disponib="Ingrese el Lote correcto ";
}else{
    $disponib="";
}
echo $disponib.$lote_view."<br />";
if ($tipo_promo=="BONO") {
    if ($maslotes_val_precio!=0) {
        $val_lote = $val_lote + $maslotes_val_precio;
    }
    $costo_lote_promo=$val_lote - $valor_descuento;
    $costo_lote_promo= round($costo_lote_promo, 2);
}else{
    //if(($disponib=="") && ($lote_view=="")) {
    //if($disponib==""){
        if ($m2lotes_val!=0) {
           $lote_m2 = $lote_m2 + $m2lotes_val;
        }
        $costo_lote_promo=$lote_m2*$precio_m2_promo;
        $costo_lote_promo= round($costo_lote_promo, 2);
        //$costo_lote_promo= number_format($costo_lote_promo,2); 
    //}
}

echo '<label>VALOR DE LOTE CON PROMOCIÓN: $</label>
    <input type="text" id="val_lote_promo" value="'.$costo_lote_promo.'" class="form-control1">
    <input type="text" id="moneda_loteprom" value="'.$moneda_pm2.'" size="4">';









