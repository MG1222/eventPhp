<?php 
session_start();

require 'helpers.php';


spl_autoload_register(function ($className) {
    $fileName = str_replace('\\', '/', $className);
    require "src/$fileName.php";
});

$routes = require 'config/routes.php';

if (isset($routes[$route])) {
    list($controllerName, $method) = $routes[$route];

    $controller = new $controllerName();
    $controller->$method();
} else {
    echo 'bug';
}