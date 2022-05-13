<?php
$xcrud = Xcrud::get_instance();
$xcrud->table('categorias');
$xcrud->fields('id, image_slug, codigo, ordering', true);
$xcrud->columns('id, image_slug, codigo, ordering', true);

$xcrud->button('#', "Top", 'glyphicon glyphicon-arrow-up icon-arrow-up', 'btn xcrud-action', array(
    'data-action' => 'movetopTour',
    'data-task' => 'action',
    'data-primary' => '{id}'));
$xcrud->button('#', "Bottom", 'glyphicon glyphicon-arrow-down icon-arrow-down', 'btn xcrud-action', array(
    'data-action' => 'movebottomTour',
    'data-task' => 'action',
    'data-primary' => '{id}'));

$xcrud->change_type('imagen', 'image', false, array(
        'not_rename'=>true,
        'crop'=>false,
        'path' => '../../images/uploads/main')
);


$xcrud->create_action('movetopTour', 'movetopTour');
$xcrud->create_action('movebottomTour', 'movebottomTour');

$xcrud->unset_sortable();
$xcrud->order_by('ordering');
$xcrud->limit(100);


echo $xcrud->render();