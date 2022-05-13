<?php
$xcrud = Xcrud::get_instance();
$xcrud->table('cpanel_hoteles');
$xcrud->relation('id_zona','zonas','id','nombre');
$xcrud->columns('nombre_es,nombre_en');
$xcrud->fields('nombre_es,nombre_en');
$xcrud->disabled('nombre_es,nombre_en');

$gallerytable = $xcrud->nested_table('cpanel_hoteles','id','imagenes_hoteles','id_hotel'); // 2nd level
$gallerytable->change_type('imagen', 'image', false, array(
    'not_rename'=>true,
    'width' => 800,
    'crop'=>false,
    'path' => '../../images/hoteles',
    'thumbs' => array(array(
        'width' => 400,
        'crop' => false,
        'folder' => 'thumbs'))));
$gallerytable->modal('imagen');
$gallerytable->fields('id_hotel, ordering, id, ordering, id_zona', true);
$gallerytable->columns('id_hotel, ordering', true);
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
$gallerytable->unset_print(true);
$gallerytable->unset_csv(true);
$gallerytable->unset_search(true);
$gallerytable->unset_numbers(true);
$gallerytable->unset_limitlist();
$gallerytable->unset_pagination(true);


$xcrud->unset_view(true);
$xcrud->unset_remove(true);
$xcrud->limit(25);
$xcrud->relation('id_categoria','categorias_hotel','id','nombre');
$xcrud->label('id_categoria','Categoria');
$xcrud->relation('id_ciudad','ciudades','id','nombre');
$xcrud->label('id_ciudad','Ciudad');

$xcrud->field_tooltip('activo','Se muestra en el sitio');

echo $xcrud->render();