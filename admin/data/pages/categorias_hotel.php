<?php
$xcrud = Xcrud::get_instance();
$xcrud->table('categorias_hotel');
$xcrud->fields('id', true);

echo $xcrud->render();