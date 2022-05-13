<?php
include '_lib/secure.php';
error_reporting(E_ALL); // error reporting (debug)
ini_set('display_errors', 1); // error showing (debug)
//require_once 'xcrud/Classes/Logger.php';
//Logger::spread();
// Logger::info("test");

require ('xcrud/xcrud.php');
require ('data/html/pagedata.php');
$theme = 'default';

$page = (isset($_GET['page']) && isset($pagedata[$_GET['page']])) ? $_GET['page'] : 'default';
extract($pagedata[$page]);

$file = dirname(__file__) . '/data/pages/' . $filename;
$code = file_get_contents($file);
include ('data/html/template.php');
