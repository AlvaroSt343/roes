<?php
$xcrud = Xcrud::get_instance();
$xcrud->table('zonas');
$xcrud->fields('id', true);
$xcrud->unset_numbers(true);
$xcrud->columns('nombre, precio_1_5_mx, precio_6_10_mx, precio_1_5_mx_rt, precio_6_10_mx_rt');

echo $xcrud->render();