<?PHP
include("../../files/config.sys.php");


 $nlote=$_POST['nlote'];
 $precio_m2_promo=$_POST['precio_m2_promo'];

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
}
if (($lote_m2=="") || ($lote_m2==0)) {
    $disponib="Ingrese el Lote correcto ";
}else{
    $disponib="";
}
echo $disponib.$lote_view."<br />";
if(($disponib=="") && ($lote_view=="")) {
    $costo_lote_promo=$lote_m2*$precio_m2_promo;
    $costo_lote_promo= round($costo_lote_promo, 2);
    //$costo_lote_promo= number_format($costo_lote_promo,2); 
}

echo '<label>VALOR DE LOTE CON PROMOCIÓN: $</label>
    <input type="text" id="val_lote_promo" value="'.$costo_lote_promo.'" class="form-control1">';









