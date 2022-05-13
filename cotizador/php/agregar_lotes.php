 <?PHP
//date_default_timezone_set("America/Cancun");


 include("../../files/config.sys.php");

 $agregar_lotes=$_POST['agregar_lotes'];   
 $lang=$_POST['lang'];

 for ($i=1; $i < $agregar_lotes; $i++) {
    $num=$i + 1;
   echo '<div class="col-md-6">
                            <label style="color: #000000; ">AGREGAR '.$num.' LOTE:</label>
                            <input type="text" id="nlote'.$num.'" onkeyup="ver_lote_mas('.$num.')" size="15"  class="form-control1">
                            <button onclick="ver_lote_mas('.$num.')">REVISAR</button>
                            
                            <div id="lote_div'.$num.'">
                                <label>METROS CUADRADOS DEL LOTE '.$num.':</label>
                                <input type="text" id="m2_lote'.$num.'" size="13" class="form-control1">
                                <br />
                                <label>VALOR DEL LOTE '.$num.': $</label>
                                <input type="text" id="val_lote'.$num.'" onblur="ver_lote_mas('.$num.')" class="form-control1">
                            </div>
                        </div>';
 }




/*
switch ($desarrollo) {
    case "AACTUN-HA": $db_selecion="lotes_aactunha";
        break;
    case "LAS SALINAS": $db_selecion="lotes_salinas";
        break;
    case "MARAVILLAS DEL MAYAB": $db_selecion="lotes_marravillas";
        break; 
}

$sql_consulta= mysqli_query($con, "SElECT * FROM ".$db_selecion." WHERE lote_num='".$nlote."'  ");
$mcuadrado= mysqli_fetch_array($sql_consulta);

$lote_m2= $mcuadrado['metro_cuadrado'];
$lote_status= $mcuadrado['status'];
*/
?>