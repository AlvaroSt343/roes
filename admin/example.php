<?php
include '_lib/secure.php';
include('xcrud/xcrud.php');
    $xcrud = Xcrud::get_instance();
    $xcrud->table('terrenos');
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Some page title</title>
</head>
 
<body>
 
<?php
    echo $xcrud->render();
?>
 
</body>
</html>