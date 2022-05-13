<?PHP
require_once("../files/config.sys.php");

$id= $_GET['id'];
$sql_consulta= mysqli_query($con, "SElECT * FROM lotes_aactunha WHERE lote_num='".$id."'  ");
$mcuadrado= mysqli_fetch_array($sql_consulta);

$lote_m2= $mcuadrado['metro_cuadrado'];
$lote_status= $mcuadrado['status'];
$desarrollo="AACTUN-HA";

echo '

                    <div class="col-md-12">
                                    <div class="col-md-6">
                                        <h5>Desarrollo: AACTUN-HA</h5>
                                        <h5>LT-'.$id.'</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Estatus '.$lote_status.'</h5>
                                        <h5>Metros Cuadrado: '.$lote_m2.'</h5>
                                    </div>
                                    <div class="col-md-12"> 
                                    <br />
                                    </div>
                    </div>
                                
                    <div class="col-md-12 text wow fadeInUp" id="cotiza_form" style="background-color:#001E47;">
                        <center> 
                            <a href="../cotizador/?lote='.$id.'&desarrollo='.$desarrollo.'" >
                            <button id="dinamico" type="button" class="btn btn-link-1 fadeInDown"><span> IR A COTIZADOR </span></button></a>
                        </center>
                    </div>

';
?>
