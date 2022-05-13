<?php

$xcrud = Xcrud::get_instance();
$xcrud->table('tarifas');
$xcrud->fields('id', true);
$xcrud->unset_numbers(true);
$xcrud->columns('destinos,capacidad,servicio,tipo, sencillo,redondo,activo');

$xcrud->highlight_row('activo', '=', 1, '#dbf5d5');
$xcrud->highlight_row('activo', '=', 0, '#f5d5d5');


$xcrud->limit(50);
echo $xcrud->render();
?>