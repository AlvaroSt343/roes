<?PHP
include("../../files/config.sys.php");


 $nlote=$_POST['nlote'];
 $precio_m2=$_POST['precio_m2'];
 $desarrollo=$_POST['desarrollo'];
  $num=$_POST['num'];

 switch ($desarrollo) {
    case "AACTUN-HA": $db_selecion="lotes_aactunha";
        break;
    case "LAS SALINAS": $db_selecion="lotes_salinas";
        break;
    case "MARAVILLAS DEL MAYAB": $db_selecion="lotes_marravillas";
        break; 
    //case "MAYAKAAN": $db_selecion="lotes_mayakaan";
    case "LOTES DE INVERSION": $db_selecion="lotes_mayakaan";
        break;
    case "YAXKU": $db_selecion="lotes_yaxku";
        break;
}

$sql_consulta= mysqli_query($con, "SElECT * FROM ".$db_selecion." WHERE lote_num='".$nlote."'  ");
$mcuadrado= mysqli_fetch_array($sql_consulta);

$lote_m2= $mcuadrado['metro_cuadrado'];
$lote_status= $mcuadrado['status'];
 
switch ($lote_status) {
    case 0:
        $lote_view="<label style='color:red;'> Lote NO esta en Venta </label><br />";
        break;
    case 1:
        $lote_view="";
        break;
    case 2:
        $lote_view="<label style='color:orange;'>Lote Resevado </label><br />";
        break;
    case 3:
        $lote_view="<label style='color:blue;'>Lote Vendido </label><br />";
        break;
    /*
    default:
        // code...
        break; */
}
if (($lote_m2=="") || ($lote_m2==0)) {
    $disponib="<label style='color:red;'>Lote No valido</label>";
}else{
    $disponib="";
}
echo $disponib.$lote_view."<br />";
if(($disponib=="") && ($lote_view=="")) {
    $costo_lote=$lote_m2*$precio_m2;
     $costo_lote= round($costo_lote, 2); 
}

echo '<label>METROS CUADRADOS DEL LOTE:</label>
                                <input type="text" id="m2_lote'.$num.'" value="'.$lote_m2.'" size="13" class="form-control1">';

echo ' <br /><label>VALOR DEL LOTE: $</label>
                                <input type="text" id="val_lote'.$num.'" value="'.$costo_lote.'" class="form-control1">';








