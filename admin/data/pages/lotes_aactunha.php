<?php
 

$xcrud = Xcrud::get_instance();
$xcrud->table('lotes_aactunha');
$xcrud->fields('id', true);
$xcrud->unset_numbers(true);
$xcrud->columns('lote_num, metro_cuadrado, status, activo');
 
$xcrud->highlight_row('activo', '=', 1, '#dbf5d5');
$xcrud->highlight_row('activo', '=', 0, '#f5d5d5');
 

$xcrud->limit(25);
echo $xcrud->render();
?>