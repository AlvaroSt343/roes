<?php
//DB details


$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'admin01*';
$dbName = 'db_trasportescun';
/*
$dbHost = 'localhost';
$dbUsername = 'DBTCANCUN';
$dbPassword = 'TCancun20*';
$dbName = 'transportescancun';
*/
//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}
if(!isset($_POST['id_hab']) || !isset($_POST['price']) || !isset($_POST['daterange'])) {
    die("error");
}

$id_habitacion = $_POST['id_hab'];
$price = $_POST['price'];
$range = explode(" - " , $_POST['daterange']);
$begin_str = $range[0];
$end_str = $range[1];



if(check_dates($db, $id_habitacion, $price, $begin_str, $end_str)) {
    header("location:index.php?page=hoteles");
}

function check_dates($db, $id_habitacion, $precio_mx, $begin_str, $end_str) {

    $begin = new DateTime($begin_str);
    $end = new DateTime($end_str);
    $end->modify('+1 day');

    $interval = DateInterval::createFromDateString('1 day');
    $period = new DatePeriod($begin, $interval, $end);

    foreach ( $period as $dt ) {
        $date = $dt->format( "Y-m-d" );
        if(!date_exists($db, $date, $id_habitacion)) {
            mysqli_query($db,"insert into tarifas (fecha, precio_mx, id_habitacion) values ('$date', $precio_mx, $id_habitacion)") or die();
        } else {
            mysqli_query($db,"update tarifas set precio_mx = $precio_mx where fecha = '$date' and id_habitacion = $id_habitacion") or die();
        }
    }
    return true;
}
function date_exists($conn, $date, $id_habitacion){

    $query = mysqli_query($conn,"SELECT 1 FROM tarifas WHERE fecha = '$date' and id_habitacion = $id_habitacion");

    if(mysqli_num_rows($query) > 0){

        return true;

    } else {

        return false;

    }

}

