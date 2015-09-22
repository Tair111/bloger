<?php 
include_once __DIR__ . '/boot.php';

/*
$route = $_GET['r'];

$routeParts = explode('/', $route);
$controllerClassName = ucfirst($routeParts[0]) . 'Controller';
$actionName = $routeParts[1];

$Controller = new $controllerClassName();
$Controller->action($actionName);
*/
$route = $_GET['r'];
$router = new Route($route);
$controllerClassName = ucfirst($router->controller) . 'Controller';
$Controller = new $controllerClassName();
$Controller->action($router->action);
