<?php
class Database {

    private static $db;
    private $connection;

    private function __construct() {
        $dbname = 'cancunaz_db'; // Your database name
        $dbuser = 'root'; // Your database username
        $dbpass = ''; // // Your database password
        $dbhost = 'localhost'; // Your database host, 'localhost' is default.
        $this->connection = new MySQLi($dbhost, $dbuser, $dbpass,$dbname);
    }

    function __destruct() {
        $this->connection->close();
    }

    public static function getConnection() {
        if (self::$db == null) {
            self::$db = new Database();
        }
        return self::$db->connection;
    }
}

function date_exists($date, $id_habitacion){

$conn = Database::getConnection();

    $query = mysqli_query($conn,"SELECT 1 FROM tarifas WHERE fecha = '$date' and id_habitacion = $id_habitacion");

    if(mysqli_num_rows($query) > 0){

        return true;

    } else {

        return false;

    }

}

function create_dates($id_habitacion, $precio_mx) {

    $db = Xcrud_db::get_instance();

    $today = date('Y-m-d');
    $begin = new DateTime($today);
    $end = new DateTime( '2020-04-25' );

    $interval = DateInterval::createFromDateString('1 day');
    $period = new DatePeriod($begin, $interval, $end);

    foreach ( $period as $dt ) {
        $date = $dt->format( "Y-m-d" );
        if(!date_exists($date, $id_habitacion)) {
            $db->query("insert into tarifas (fecha, precio_mx, id_habitacion) values ('$date', $precio_mx, $id_habitacion)");
        }
    }

}

function test($postdata, $primary, $xcrud)
{
    $array = $postdata->to_array();
    $precio_mx = $array['habitaciones.precio_mx'];
    create_dates($primary, $precio_mx);
//        $db = Xcrud_db::get_instance();
//        $query = "insert into tarifas (fecha, precio_mx, id_habitacion)
//                    values
//                    ('2017-04-17', $precio_mx, $primary)";
//        $db->query($query);







}
function publish_action($xcrud)
{
    if ($xcrud->get('primary'))
    {
        $db = Xcrud_db::get_instance();
        $query = 'UPDATE base_fields SET `bool` = b\'1\' WHERE id = ' . (int)$xcrud->get('primary');
        $db->query($query);
    }
}
function unpublish_action($xcrud)
{
    if ($xcrud->get('primary'))
    {
        $db = Xcrud_db::get_instance();
        $query = 'UPDATE base_fields SET `bool` = b\'0\' WHERE id = ' . (int)$xcrud->get('primary');
        $db->query($query);
    }
}

function exception_example($postdata, $primary, $xcrud)
{
    $xcrud->set_exception('ban_reason', 'Lol!', 'error');
    $postdata->set('ban_reason', 'lalala');
}

function test_column_callback($value, $fieldname, $primary, $row, $xcrud)
{
    return $value . ' - nice!';
}

function after_upload_example($field, $file_name, $file_path, $params, $xcrud)
{
    $ext = trim(strtolower(strrchr($file_name, '.')), '.');
    if ($ext != 'pdf' && $field == 'uploads.simple_upload')
    {
        unlink($file_path);
        $xcrud->set_exception('simple_upload', 'This is not PDF', 'error');
    }
}

function date_example($postdata, $primary, $xcrud)
{
    $created = $postdata->get('datetime')->as_datetime();
    $postdata->set('datetime', $created);
}

function movetop($xcrud) {
    if ($xcrud->get('primary') !== false)
    {
        $primary = (int)$xcrud->get('primary');
        $db = Xcrud_db::get_instance();
        $query = 'SELECT `id` FROM `imagenes` ORDER BY `ordering`,`id`';
        $db->query($query);
        $result = $db->result();
        $count = count($result);

        $sort = array();
        foreach ($result as $key => $item)
        {
            if ($item['id'] == $primary && $key != 0)
            {
                array_splice($result, $key - 1, 0, array($item));
                unset($result[$key + 1]);
                break;
            }
        }

        foreach ($result as $key => $item)
        {
            $query = 'UPDATE `imagenes` SET `ordering` = ' . $key . ' WHERE id = ' . $item['id'];
            $db->query($query);
        }
    }
}
function movebottom($xcrud) {
    if ($xcrud->get('primary') !== false)
    {
        $primary = (int)$xcrud->get('primary');
        $db = Xcrud_db::get_instance();
        $query = 'SELECT `id` FROM `imagenes` ORDER BY `ordering`,`id`';
        $db->query($query);
        $result = $db->result();
        $count = count($result);

        $sort = array();
        foreach ($result as $key => $item)
        {
            if ($item['id'] == $primary && $key != $count - 1)
            {
                unset($result[$key]);
                array_splice($result, $key + 1, 0, array($item));
                break;
            }
        }

        foreach ($result as $key => $item)
        {
            $query = 'UPDATE `imagenes` SET `ordering` = ' . $key . ' WHERE id = ' . $item['id'];
            $db->query($query);
        }
    }
}

function movetopTour($xcrud) {
    if ($xcrud->get('primary') !== false)
    {
        $primary = (int)$xcrud->get('primary');
        $db = Xcrud_db::get_instance();
        $query = 'SELECT `id` FROM `categorias` ORDER BY `ordering`,`id`';
        $db->query($query);
        $result = $db->result();
        $count = count($result);

        $sort = array();
        foreach ($result as $key => $item)
        {
            if ($item['id'] == $primary && $key != 0)
            {
                array_splice($result, $key - 1, 0, array($item));
                unset($result[$key + 1]);
                break;
            }
        }

        foreach ($result as $key => $item)
        {
            $query = 'UPDATE `categorias` SET `ordering` = ' . $key . ' WHERE id = ' . $item['id'];
            $db->query($query);
        }
    }
}
function movetopmain($xcrud) {
    if ($xcrud->get('primary') !== false)
    {
        $primary = (int)$xcrud->get('primary');
        $db = Xcrud_db::get_instance();
        $query = 'SELECT `id` FROM `tours` where top = 1 ORDER BY `ordering`,`id`';
        $db->query($query);
        $result = $db->result();
        $count = count($result);

        $sort = array();
        foreach ($result as $key => $item)
        {
            if ($item['id'] == $primary && $key != 0)
            {
                array_splice($result, $key - 1, 0, array($item));
                unset($result[$key + 1]);
                break;
            }
        }

        foreach ($result as $key => $item)
        {
            $query = 'UPDATE `tours` SET `ordering` = ' . $key . ' WHERE id = ' . $item['id'];
            $db->query($query);
        }
    }
}
function movebottomTour($xcrud) {
    if ($xcrud->get('primary') !== false)
    {
        $primary = (int)$xcrud->get('primary');
        $db = Xcrud_db::get_instance();
        $query = 'SELECT `id` FROM `categorias` ORDER BY `ordering`,`id`';
        $db->query($query);
        $result = $db->result();
        $count = count($result);

        $sort = array();
        foreach ($result as $key => $item)
        {
            if ($item['id'] == $primary && $key != $count - 1)
            {
                unset($result[$key]);
                array_splice($result, $key + 1, 0, array($item));
                break;
            }
        }

        foreach ($result as $key => $item)
        {
            $query = 'UPDATE `categorias` SET `ordering` = ' . $key . ' WHERE id = ' . $item['id'];
            $db->query($query);
        }
    }
}
function movebottommain($xcrud) {
    if ($xcrud->get('primary') !== false)
    {
        $primary = (int)$xcrud->get('primary');
        $db = Xcrud_db::get_instance();
        $query = 'SELECT `id` FROM `tours` where top = 1 ORDER BY `ordering`,`id`';
        $db->query($query);
        $result = $db->result();
        $count = count($result);

        $sort = array();
        foreach ($result as $key => $item)
        {
            if ($item['id'] == $primary && $key != $count - 1)
            {
                unset($result[$key]);
                array_splice($result, $key + 1, 0, array($item));
                break;
            }
        }

        foreach ($result as $key => $item)
        {
            $query = 'UPDATE `tours` SET `ordering` = ' . $key . ' WHERE id = ' . $item['id'];
            $db->query($query);
        }
    }
}


