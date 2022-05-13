<?PHP
include("../../files/config.sys.php");


 $nlote=$_POST['nlote'];
 $precio_m2=$_POST['precio_m2'];
/*
 switch ($lote_status) {
    case 0: $lote_status="No Disponible";
        break;
    case 1: $lote_status="Disponible";
        break;
    case 2: $lote_status="Reservado";
        break;
    case 3: $lote_status="Vendido";
        break;
}
*/
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
    /*
    default:
        // code...
        break; */
}
if (($lote_m2=="") || ($lote_m2==0)) {
    $disponib="Lote No valido ";
}else{
    $disponib="";
}
echo $disponib.$lote_view."<br />";
if(($disponib=="") && ($lote_view=="")) {
    $costo_lote=$lote_m2*$precio_m2;
     $costo_lote= round($costo_lote, 2); 
}

echo '<label>METROS CUADRADOS DEL LOTE:</label>
                                <input type="text" id="m2_lote" value="'.$lote_m2.'" size="13" class="form-control1">';

echo ' <br /><label>VALOR DEL LOTE: $</label>
                                <input type="text" id="val_lote" value="'.$costo_lote.'" class="form-control1">';








