<?PHP
require_once("../files/config.sys.php");
//echo $id= $_POST['text'];
$val_id= $_GET['id'];

$id=abs($val_id);

$sql_consulta= mysqli_query($con, "SElECT * FROM lotes_yaxku WHERE lote_num='".$id."'  ");
$mcuadrado= mysqli_fetch_array($sql_consulta);

$lote_m2= $mcuadrado['metro_cuadrado'];
$lote_status= $mcuadrado['status'];
switch ($lote_status) {
    case 0: $lote_status="No Disponible";
        break;
    case 1: $lote_status="Disponible";
        break;
    case 2: $lote_status="Reservado";
        break;
    case 3: $lote_status="Vendido";
        break;
    /*
    default:
        // code...
        break; */
}
$desarrollo="YAXKU";

echo '

                    <div class="col-md-12">
                                    <div class="col-md-6">
                                        <h5>Desarrollo: <strong>'.$desarrollo.'</strong></h5>
                                        <h5>Lote: <strong>LT-'.$id.'</strong></h5>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Estatus: <strong>'.$lote_status.'</strong></h5>
                                        <h5>Metros Cuadrado: <strong>'.$lote_m2.'<label style="font-size:10px ;">M2</label></strong></h5>
                                    </div>
                                    <div class="col-md-12"> 
                                    <br />
                                    </div>
                    </div>
                                
                    <div class="col-md-12 text wow fadeInUp" id="cotiza_form" style="background-color:#001E47;">
                        <center> ';
                        if ($lote_status=="Disponible") {
                            echo '
                            <a href="../cotizador/?lote='.$id.'&desarrollo='.$desarrollo.'" target="new">
                            <button id="dinamico" type="button" class="btn btn-link-2 fadeInDown"><span style="color:#FFFFFF"> IR A COTIZADOR </span></button></a>';
                        }else{
                            echo '
                             
                            <button id="dinamico" type="button" class="btn btn-link-1 fadeInDown"><span> '.$lote_status.'</span></button>';
                        }
                        echo '
                        </center>
                    </div>

';
?>
