<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
/*
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'admin01*');
define('DB_NAME', 'db_inversionista');
*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'CRMtime2invest');
define('DB_PASSWORD', 'time2invest2022*');
define('DB_NAME', 'bd_time2invest');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>