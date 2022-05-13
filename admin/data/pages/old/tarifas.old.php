<?php
//DB details
$dbHost = '50.87.144.189';
$dbUsername = 'oflores_user';
$dbPassword = 'Cancun2017';
$dbName = 'oflores_times';



//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}

$id = (isset($_GET['id'])) ? $_GET['id'] : false;

$consulta = "select * from habitaciones where id = $id";

$resultado = mysqli_query($db, $consulta);

$registro = mysqli_fetch_assoc($resultado);

$nombre_hab = $registro['nombre_es'];
$id_hotel = $registro['id_hotel'];


$consultahotel = "select nombre_es from hoteles where id = $id_hotel";

$resultadohotel = mysqli_query($db, $consultahotel);

$registrohotel = mysqli_fetch_assoc($resultadohotel);

$nombre_hotel = $registrohotel['nombre_es'];





?>
<link href="data/assets/tarifas.css" rel="stylesheet" type="text/css" />

<!-- Include Required Prerequisites -->
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" /><!-- Include Date Range Picker -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>


<?php
if(isset($_POST['ok'])) { ?>
    <script type="text/javascript">
        alert("Los cambios se han aplicado correctamente");
    </script>
<?php } ?>


<script type="text/javascript">
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            locale: {
                format: 'YYYY-MM-DD'
            }
        });
    });
</script>




<div class="container">
	<div class="row">
        <h1>Aplicar tarifas por rango de fechas</h1>
        <h2>Hotel: <?=$nombre_hotel?></h2>
        <h3>Habitación: <?=$nombre_hab?></h3>
	</div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <form action="rates_process.php" method="post">

                <div class="row form-group">
                    <label for="basic-url">Rango de fechas: </label>
                    <div class="input-group">
                        <span class="input-group-addon primary"><span class="glyphicon glyphicon-calendar"></span></span>
                        <input type="text" name="daterange" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group">
                    <label for="basic-url">Precio por aplicar:</label>
                    <div class="input-group">
                        <span class="input-group-addon info"><span class="glyphicon glyphicon-usd"></span></span>
                        <input type="text" name="price" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group">
                    <input type="hidden" name="id_hab" value="<?=$id?>" required>
                <button class="btn btn-primary" type="submit">Aplicar</button>
            </form>
        </div>
    </div>
</div>