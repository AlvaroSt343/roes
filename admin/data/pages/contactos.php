<?php
$xcrud = Xcrud::get_instance();
$xcrud->table('contactos');


$xcrud->relation('id_tipo','tipos_de_contacto','id','tipo');
$xcrud->label('id_ciudad','Ciudad');
$xcrud->change_type('sexo','select','',',Hombre,Mujer');

$xcrud->fields('fecha_creacion,fecha_modificacion', true);

//$xcrud->columns('firstName,lastName,officeCode');
//$xcrud->fields('firstName,lastName,officeCode');
//$xcrud->limit(10);


echo $xcrud->render();