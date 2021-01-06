<?php
/*
	"0" FOR LOCAL ENVIROMENT (DEVELOPMENT)
	"1" FOR SERVER ENVIROMENT (PRODUCTION)
*/

define('ENV_KEY', 0);
define('COLOR_KEY', 0);
define('CACHE', 0);

define('DS', DIRECTORY_SEPARATOR);
define('SRC', dirname(__FILE__) . DS);
define('PROJECT', dirname(SRC) . DS);
define('PUBLIC_PATH', PROJECT . 'public_html' . DS);
define('CLASSES', SRC . 'classes' . DS);
define('AJAX', SRC . 'controller' . DS . 'ajax' . DS);
define('INC', SRC . 'includes' . DS);
define('CONT', SRC . 'controller' . DS);
define('JS', PUBLIC_PATH . 'js' . DS);
define('BR', '<br>');

if (! ENV_KEY) {
	// 	LOCAL
	define('MYSITE', 'https://localhost/' . basename(PROJECT) . '/' . basename(PUBLIC_PATH) . '/');
} else {
	// 	SERVER
	define('MYSITE', 'http://123badinstallaties.nl/');
}

date_default_timezone_set('UTC');
ini_set('error_log', SRC . 'error.log');

$stylesheet = [];
$javascript = [];

require_once 'functions.php';
?>