<?php
$xcrud = Xcrud::get_instance();
$xcrud->table('orders');
$xcrud->label('amount', 'Total');
$xcrud->label('paid', 'Pagado');
$xcrud->label('leftover', 'Restante');
$items = $xcrud->nested_table('orders','id','purchase_items','purchase_id'); // 2nd level
$items->fields('amount, paid, leftover, adults, minors, passengers, days, purchase_id', true);
$items->columns('amount, paid, leftover, adults, minors, passengers, days, purchase_id', true);
$items->column_width('name','80%');
$items->column_cut(250,'name');

$xcrud->fields('customer_id, modified, customer_id, created, status, customers.firstname, customers.lastname, customers.created, customers.modified, customers.status', true);
$xcrud->join('customer_id','customers','id');
$xcrud->no_editor('customers.address');
$xcrud->limit(100);
echo $xcrud->render();