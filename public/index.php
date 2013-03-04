<?php
$_SERVER['HTTP_HOST'] == 'mywesite.com' ? define('ENV', 'production') : define('ENV', 'development');

date_default_timezone_set("Europe/Paris");
if(ENV === "development") {
    error_reporting(E_ALL | E_STRICT);
    ini_set('display_errors', 1);
} 

define('ROOT_PATH', dirname(__DIR__));

// AUTOLOADING
// ===========
include ROOT_PATH . '/app/autoload_register.php';

try {

    // LOAD RESOURCES
    // ==============
    $resources = include_once(ROOT_PATH . '/app/resources.php');

    // INIT APPLICATION
    // ================
    // TODO: replace checkers and filter by events
    $application = new \Incube\Mvc\Application('example-app', $resources['uri'], $resources);
    $application->start();

    //$resource['data_model']->close();

} catch (Exception $e) {
    throw $e;
    //require_once '503.phtml'; 
}

