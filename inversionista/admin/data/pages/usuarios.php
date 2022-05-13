<?php
 

$xcrud = Xcrud::get_instance();
$xcrud->table('users');
 

$xcrud->fields('id', true);
$xcrud->unset_numbers(true);
$xcrud->columns('nombre, tel, email, puesto, username');
//$xcrud->no_editor('ubicacion, lotes'); 
//$xcrud->highlight_row('status', '=', 1, '#dbf5d5');
//$xcrud->highlight_row('status', '=', 0, '#f5d5d5');


$xcrud->limit(25);
echo $xcrud->render();
?>