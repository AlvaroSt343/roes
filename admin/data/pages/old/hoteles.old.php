<?php
$xcrud = Xcrud::get_instance();
$xcrud->table('cpanel_hoteles');
//$xcrud->where('id_zona =', 0);
//$xcrud->where('id =', $_GET['id']);
$xcrud->relation('id_zona','zonas','id','nombre');
$xcrud->label('id_zona','Zona');
//$xcrud->column_pattern('precio_mx', '<a href="#" class="xcrud-action" data-task="edit" data-primary="{id}">{value}</a>');
$roomstable = $xcrud->nested_table('cpanel_hoteles','id','habitaciones','id_hotel'); // 2nd level


//$xcrud->columns('ubicacion,descripcion,precio_usd,nombre_en,ordering,zona,categoria', true);
$xcrud->columns('id_ciudad, nombre_es, precio_usd, fecha_creacion, activo');
$xcrud->highlight_row('activo', '=', 1, '#dbf5d5');
$xcrud->highlight_row('activo', '=', 0, '#f5d5d5');
$xcrud->unset_numbers(true);

$roomstable->columns('id_hotel, precio_usd, ordering', true);
$roomstable->button('#', "Top", 'glyphicon glyphicon-arrow-up icon-arrow-up', 'btn xcrud-action', array(
    'data-action' => 'movetop',
    'data-task' => 'action',
    'data-primary' => '{id}'));
$roomstable->button('#', "Bottom", 'glyphicon glyphicon-arrow-down icon-arrow-down', 'btn xcrud-action', array(
    'data-action' => 'movebottom',
    'data-task' => 'action',
    'data-primary' => '{id}'));
$roomstable->fields('id_hotel, precio_usd, fecha_creacion, fecha_modificacion, ordering, activo', true);
$roomstable->change_type('imagen', 'image', false, array(
    'not_rename'=>true,
    'width' => 800,
    'crop'=>false,
    'path' => '../../images/habitaciones/',
    'thumbs' => array(array(
        'width' => 400,
        'crop' => false,
        'folder' => 'thumbs'))));
$roomstable->modal('imagen');

$roomstable->create_action('movetop', 'movetop');
$roomstable->create_action('movebottom', 'movebottom');
$roomstable->unset_sortable();
$roomstable->order_by('ordering');
$roomstable->unset_view(true);
$roomstable->unset_print(true);
$roomstable->unset_csv(true);
$roomstable->unset_search(true);
$roomstable->unset_numbers(true);
$roomstable->unset_limitlist();
$roomstable->limit_list(100);
//$roomstable->unset_pagination(true);
$roomstable->after_insert('test');

$ratestable = $roomstable->nested_table('habitaciones','id','tarifas','id_habitacion'); // 2nd level
$ratestable->unset_remove(true);
$ratestable->unset_view(true);
$ratestable->unset_add(true);
$ratestable->order_by('fecha');
$ratestable->columns('precio_usd, temporada_alta, available, id_habitacion', true);
$ratestable->limit(500);
$roomstable->column_pattern('precio_mx', '<a href="index.php?page=tarifas&id={id}">Modificar Tarifas {value}</a>');

$xcrud->unset_view(true);
//$xcrud->unset_remove(true);
$xcrud->limit(25);
$xcrud->relation('id_categoria','categorias_hotel','id','nombre');
$xcrud->label('id_categoria','Categoria');
$xcrud->relation('id_ciudad','ciudades','id','nombre');
$xcrud->label('id_ciudad','Ciudad');

$xcrud->field_tooltip('activo','Se muestra en el sitio');

$xcrud->fields('precio_usd, fecha_creacion,fecha_modificacion, id, ordering', true);

echo $xcrud->render();
