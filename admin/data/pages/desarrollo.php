<?php
 

$xcrud = Xcrud::get_instance();
$xcrud->table('web_desarrollo');

$xcrud->change_type('baner_slide1_1900x1000', 'image', false, array(
    'not_rename'=>true,
    'crop'=>false,
    'path' => '../../images/main-slider')
);
$xcrud->change_type('baner_slide2_1900x1000', 'image', false, array(
    'not_rename'=>true,
    'crop'=>false,
    'path' => '../../images/main-slider')
);
$xcrud->change_type('baner_slide3_1900x1000', 'image', false, array(
    'not_rename'=>true,
    'crop'=>false,
    'path' => '../../images/main-slider')
);


$xcrud->change_type('n_imagen_750x700', 'image', false, array(
    'not_rename'=>true,
    'crop'=>false,
    'path' => '../../images/desarrollo')
);
$xcrud->change_type('u_imagen1200x', 'image', false, array(
    'not_rename'=>true,
    'crop'=>false,
    'path' => '../../images/desarrollo')
);
$xcrud->change_type('mas_img1_750x700', 'image', false, array(
    'not_rename'=>true,
    'crop'=>false,
    'path' => '../../images/desarrollo')
);
$xcrud->change_type('mas_img2_750x700', 'image', false, array(
    'not_rename'=>true,
    'crop'=>false,
    'path' => '../../images/desarrollo')
);

$xcrud->change_type('fondo_amenid_1900', 'image', false, array(
    'not_rename'=>true,
    'crop'=>false,
    'path' => '../../images/desarrollo')
);


$xcrud->change_type('a_imagen700x700', 'image', false, array(
    'not_rename'=>true,
    'crop'=>false,
    'path' => '../../images/desarrollo')
);

$xcrud->fields('id', true);
$xcrud->unset_numbers(true);
$xcrud->columns('nombre, nombre_seo, estado, status');
$xcrud->no_editor('ubicacion, lotes'); 
$xcrud->highlight_row('status', '=', 1, '#dbf5d5');
$xcrud->highlight_row('status', '=', 0, '#f5d5d5');


$xcrud->limit(25);
echo $xcrud->render();
?>