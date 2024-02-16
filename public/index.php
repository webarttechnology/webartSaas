<?php
session_start();

// ini_set('max_execution_time', -1);

use Dotenv\Dotenv;
use Core\Router;

if (version_compare(PHP_VERSION, '7.4.0', '<')) {
    die('Your MVC Framework requires PHP 7.4 or higher. Please upgrade your PHP version.');
}

require_once __DIR__ . '/../vendor/autoload.php';

////// Core helper Function
require_once __DIR__ . '/../core/Helpers.php';


define('CONTROLLER_PATH', 'App\Controllers\\');

define('BASE_PATH', __DIR__ . '/../');
define('PUBLIC_PATH', __DIR__ . '/');

/* The `date_default_timezone_set("Asia/Calcutta");` function is setting the default timezone for date
and time functions used in the PHP script. In this case, it is setting the timezone to
"Asia/Calcutta", which is the timezone for Kolkata, India. This ensures that any date and time
calculations or formatting in the script will be based on the Kolkata timezone. */

date_default_timezone_set("Asia/Calcutta");


$dotenv = Dotenv::createImmutable(BASE_PATH);
$dotenv->load();


error_reporting(E_ALL);
ini_set('display_errors', 1);

$router = new Router();

// Extract the URI and method from the request
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);



