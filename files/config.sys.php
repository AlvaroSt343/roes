<?PHP
//ARCHIVO DE CONFIGURACION
date_default_timezone_set("America/Cancun");

$today=date("Y-m-d");
$year=date("Y");
$mes=date("m");
$day=date("d");
$year3=date("Y-m-d", strtotime("$today +2 year"));
//$fecha_registro=date("Y-m-d H:i");
$fecha_registro=date("d-m-Y");
$hora_registro=date("h:i");
//DIRECTORIO DE LAS LIBRERIAS/
$libdir="src/";

//DIRECTORIO DE LAS IMAGENES
$imagedir="src/img/";
// variables de conexion
/*
$servidor='localhost';
$usuario='root';
$password='admin01*';
$database='bd_time2invest';
*/
$servidor='localhost';
$usuario='CRMtime2invest';
$password='time2invest2022*';
$database='bd_time2invest';

//sesion
$nombre_sesion='T2I';

//conexion
//$conexion=mysql_connect($servidor,$usuario,$password) or die("Error al conectarse al servidor");
//$selbd=mysql_select_db($database,$conexion) or die("Error al seleccionar la base de datos");
$con = mysqli_connect($servidor, $usuario,$password,$database);

//$icon="<img src='src/img/vinietas/2.png'>";

?>
 