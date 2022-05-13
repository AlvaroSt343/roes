<?php
$xcrud = Xcrud::get_instance();
$xcrud->table('tours');
$xcrud->field_tooltip('top','Activar para mostrar en el Home');
//$xcrud->change_type('top', 'Principal');

$gallerytable = $xcrud->nested_table('tours','id','imagenes','id_tour'); // 2nd level
$gallerytable->change_type('imagen', 'image', false, array(
    'not_rename'=>true,
    'width' => 800,
    'crop'=>false,
    'path' => '../../images/tours',
    'thumbs' => array(array(
        'width' => 400,
        'crop' => false,
        'folder' => 'thumbs'))));
$gallerytable->modal('imagen');
$gallerytable->fields('id_tour, ordering, id, ordering', true);
$gallerytable->columns('id_tour, ordering', true);


$gallerytable->button('#', "Top", 'glyphicon glyphicon-arrow-up icon-arrow-up', 'btn xcrud-action', array(
    'data-action' => 'movetop',
    'data-task' => 'action',
    'data-primary' => '{id}'));
$gallerytable->button('#', "Bottom", 'glyphicon glyphicon-arrow-down icon-arrow-down', 'btn xcrud-action', array(
    'data-action' => 'movebottom',
    'data-task' => 'action',
    'data-primary' => '{id}'));

$gallerytable->create_action('movetop', 'movetop');
$gallerytable->create_action('movebottom', 'movebottom');

$gallerytable->unset_sortable();
$gallerytable->order_by('ordering');

$gallerytable->unset_view(true);
$xcrud->unset_view(true);
//$xcrud->unset_remove(true);
$gallerytable->unset_print(true);
$gallerytable->unset_csv(true);
$gallerytable->unset_search(true);
$gallerytable->unset_numbers(true);
$gallerytable->unset_limitlist();
//$gallerytable->unset_pagination(true);
























$xcrud->no_editor('youtube_video');
$xcrud->columns('id_ciudad, titulo, precio_mx, fecha_creacion, activo, id_categoria');
$xcrud->highlight_row('activo', '=', 1, '#dbf5d5');
$xcrud->highlight_row('activo', '=', 0, '#f5d5d5');
//$xcrud->unset_print(true);
//$xcrud->unset_csv(true);
//$xcrud->unset_search(true);
$xcrud->unset_numbers(true);
//$xcrud->unset_limitlist();
// $xcrud->unset_pagination(true);
$xcrud->limit(25);
$xcrud->relation('id_categoria','categorias','id','nombre');
$xcrud->relation('id_ciudad','ciudades','id','nombre');
$xcrud->label('id_ciudad','Ciudad');

//$xcrud->relation('id_contacto_propietario','contactos','id','nombre');
//$xcrud->label('id_contacto_propietario','Propietario');
//$xcrud->label('m_frente','Frente');
//$xcrud->field_tooltip('m_frente','Medida de la fachada en Metros');
//$xcrud->label('m_fondo','Fondo');
//$xcrud->field_tooltip('m_fondo','Profundidad en Metros');

//$xcrud->relation('id_contacto_visitas','contactos','id','nombre');
//$xcrud->field_tooltip('id_contacto_visitas','A quién llamar para mostrar la propiedad');
//$xcrud->label('id_contacto_visitas','Contacto para Visitas');

//$xcrud->field_tooltip('tiene_acceso_restringido','No accesible para el público en general');
//$xcrud->field_tooltip('tiene_superficie_regular','Si es cuadrado o rectangular');
//$xcrud->field_tooltip('orientacion','Hacia dónde apunta la fachada (Norte, Sur, Este, Oeste)');
$xcrud->field_tooltip('youtube_video','Código idenficador. Va después de v=. Ejemplo: aTcfhpD3w2Q');
$xcrud->field_tooltip('activo','Solo los tours marcados como activo se muestran en el sitio');

$xcrud->fields('fecha_creacion,fecha_modificacion, id, ordering', true);

echo $xcrud->render();