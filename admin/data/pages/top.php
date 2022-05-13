<?php
$xcrud = Xcrud::get_instance();
$xcrud->table('tours');
$xcrud->where('top', 1);
$xcrud->columns('titulo, titulo_en, top');





$xcrud->button('#', "Top", 'glyphicon glyphicon-arrow-up icon-arrow-up', 'btn xcrud-action', array(
    'data-action' => 'movetopmain',
    'data-task' => 'action',
    'data-primary' => '{id}'));
$xcrud->button('#', "Bottom", 'glyphicon glyphicon-arrow-down icon-arrow-down', 'btn xcrud-action', array(
    'data-action' => 'movebottommain',
    'data-task' => 'action',
    'data-primary' => '{id}'));
$xcrud->create_action('movetopmain', 'movetopmain');
$xcrud->create_action('movebottommain', 'movebottommain');
$xcrud->unset_sortable();
$xcrud->order_by('ordering');







$xcrud->unset_view(true);
$xcrud->unset_remove(true);
$xcrud->unset_print(true);
$xcrud->unset_csv(true);
$xcrud->unset_search(true);
$xcrud->unset_numbers(true);
$xcrud->unset_limitlist();
//$xcrud->unset_pagination(true);
























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

echo $xcrud->render();