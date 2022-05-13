<?php
$xcrud = Xcrud::get_instance();
$xcrud->table('terrenos');

$gallerytable = $xcrud->nested_table('terrenos','id','imagenes','id_terreno'); // 2nd level
$gallerytable->change_type('imagen', 'image', false, array(
    'width' => 450,
    'path' => '../uploads/gallery',
    'thumbs' => array(array(
        'height' => 55,
        'width' => 120,
        'crop' => true,
        'marker' => '_th'))));
$gallerytable->fields('id_terreno', true);
$gallerytable->columns('id_terreno', true);




$xcrud->columns('superficie_m2, m2_frente, m2_fondo, descripcion, agua, drenaje, luz, uso_de_suelo, transporte_publico, escriturado,
orientacion, superficie_construida_m2, id_contacto_propietario, id_contacto_visitas, tiene_acceso_restringido, tiene_superficie_regular,
es_desarrollo, nombre_desarrollo', true);
$xcrud->relation('id_ciudad','ciudades','id','nombre');
$xcrud->label('id_ciudad','Ciudad');

$xcrud->relation('id_contacto_propietario','contactos','id','nombre');
$xcrud->label('id_contacto_propietario','Propietario');

$xcrud->relation('id_contacto_visitas','contactos','id','nombre');
$xcrud->label('id_contacto_visitas','Contacto para Visitas');

$xcrud->fields('fecha_creacion,fecha_modificacion', true);

//$xcrud->columns('firstName,lastName,officeCode');
//$xcrud->fields('firstName,lastName,officeCode');
//$xcrud->limit(10);


echo $xcrud->render();