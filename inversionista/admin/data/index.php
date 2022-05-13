<?php
error_reporting(E_ALL); // error reporting (debug)
ini_set('display_errors', 1); // error showing (debug)
require_once '../xcrud/Classes/Logger.php';
Logger::spread();
// Logger::info("test");

require ('../xcrud/xcrud.php');
require ('html/pagedata.php');
session_start();
$theme = 'default';
switch ($theme)
{
    case 'bootstrap':
        Xcrud_config::$theme = 'bootstrap';
        $title_2 = 'Bootstrap theme';
        break;
    case 'minimal':
        Xcrud_config::$theme = 'minimal';
        $title_2 = 'Minimal theme';
        break;
    default:
        Xcrud_config::$theme = 'default';
        $title_2 = 'Default theme';
        break;
}

$page = (isset($_GET['page']) && isset($pagedata[$_GET['page']])) ? $_GET['page'] : 'default';
extract($pagedata[$page]);

$file = dirname(__file__) . '/pages/' . $filename;
$code = file_get_contents($file);
include ('html/template.php');
