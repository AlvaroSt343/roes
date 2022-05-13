<?php
$xcrud = Xcrud::get_instance();
$xcrud->table('config');
/*
$xcrud->change_type('one_way', 'image', false, array(
    'not_rename'=>true,
    'width' => 800,
    'crop'=>false,
    'path' => '../../images/uploads',
    'thumbs' => array(array(
        'width' => 400,
        'crop' => false,
        'folder' => 'thumbs'))));
$xcrud->modal('one_way');
$xcrud->change_type('round_trip', 'image', false, array(
    'not_rename'=>true,
    'width' => 800,
    'crop'=>false,
    'path' => '../../images/uploads',
    'thumbs' => array(array(
        'width' => 400,
        'crop' => false,
        'folder' => 'thumbs'))));
*/
$xcrud->change_type('banner1_1744x1000', 'image', false, array(
    'not_rename'=>true,
    'crop'=>false,
    'path' => '../../images/slider')
);
$xcrud->change_type('banner2_1744x1000', 'image', false, array(
    'not_rename'=>true,
    'crop'=>false,
    'path' => '../../images/slider')
);
$xcrud->change_type('banner3_1744x1000', 'image', false, array(
    'not_rename'=>true,
    'crop'=>false,
    'path' => '../../images/slider')
);
$xcrud->change_type('banner4_1744x1000', 'image', false, array(
    'not_rename'=>true,
    'crop'=>false,
    'path' => '../../images/slider')
);
 
$xcrud->change_type('banner_2000X320', 'image', false, array(
    'not_rename'=>true,
    'crop'=>false,
    'path' => '../../images')
);

//$xcrud->no_editor('titulo_sitio, fb_pixel, fb_conversion, analytics_conversion, terminos, terminos_en, politica, politica_en, acerca, acerca_en, analytics');
$xcrud->no_editor('titulo_sitio, facebook, twitter, youtube, instagram, google_plus,  fb_conversion, analytics_conversion, terminos, terminos_en, politica, politica_en, acerca, acerca_en, analytics, fb_pixel,'); 
//$xcrud->modal('round_trip');
$xcrud->fields('id_tour, ordering, id, ordering', true);
$xcrud->columns('id_tour, ordering', true);
$xcrud->unset_print(true);
$xcrud->unset_csv(true);
$xcrud->unset_search(true);
$xcrud->unset_numbers(true);
$xcrud->unset_limitlist();

//$gallerytable->unset_pagination(true);
/*
$xcrud->label('color1', 'Color de Fondo');
$xcrud->label('color2', 'Caja de Búsqueda');
$xcrud->label('color3', 'Resaltado 1');
$xcrud->label('color4', 'Barra Header 1');
$xcrud->label('color5', 'Barra Header 2');
$xcrud->label('color6', 'Fondo Footer');
*/
























$xcrud->no_editor('youtube_video');
//$xcrud->columns('colonia_sm,calle,precio_mx');
//$xcrud->unset_print(true);
//$xcrud->unset_csv(true);
//$xcrud->unset_search(true);
//$xcrud->unset_numbers(true);
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

//echo $xcrud->render();
echo $xcrud->render("edit" , 1);
echo "<style>
    a[data-after=list] {
        display: none !important;
    }
    a[data-after=create] {
        display: none !important;
    }
    a[data-task=list] {
        display: none !important;
    }
</style>";
