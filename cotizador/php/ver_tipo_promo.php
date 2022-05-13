<?PHP
include("../../files/config.sys.php");


 $tipo_promo=$_POST['tipo_promo'];
  


/*$sql_consulta= mysqli_query($con, "SElECT * FROM ".$db_selecion." WHERE lote_num='".$nlote."'  ");
$mcuadrado= mysqli_fetch_array($sql_consulta);

$lote_m2= $mcuadrado['metro_cuadrado'];
$lote_status= $mcuadrado['status'];
 */
if($tipo_promo=="DESCUENTO"){
    echo '<label>VALOR DEL DESCUENTO: </label>
                            <!--<input type="text" id="valor_descuento" class="form-control1"> -->
                            <select id="valor_descuento" onchange="ver_lote_promo()">
                                <option value="">Seleccione</option>
                                <option value="10">10%</option>
                                <option value="15">15%</option> 
                                <option value="20">20%</option>
                                <option value="25">25%</option>
                                <option value="30">30%</option>
                                <option value="35">35%</option>
                                <option value="40">40%</option>
                                <option value="45">45%</option>
                                <option value="50">50%</option>
                            </select> ';
}
if ($tipo_promo=="BONO") {
    echo '<label>VALOR DEL BONO: </label>
                            <input type="text" id="valor_descuento" onkeyup="ver_lote_promo()" placeholder="50000.00" class="form-control1">
                            <!--<select id="valor_descuento" onchange="ver_lote_promo()">
                                <option value="">Seleccione</option>
                                <option value="10000">10,000</option>
                                <option value="15000">15,000</option> 
                                <option value="20000">20,000</option>
                                <option value="25000">25,000</option>
                                <option value="30000">30,000</option>
                                <option value="35000">35,000</option>
                                <option value="40000">40,000</option>
                                <option value="45000">45,000</option>
                                <option value="50000">50,000</option>
                                <option value="55000">55,000</option>
                                <option value="60000">60,000</option>
                            </select> -->';
}









