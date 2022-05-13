<?php
$xcrud = Xcrud::get_instance();
$xcrud->table('cpanel_destinos');
$xcrud->fields('id', true);
$xcrud->unset_numbers(true);
$xcrud->columns('destino, pais, seo, activo');

$xcrud->limit(25);
echo $xcrud->render();