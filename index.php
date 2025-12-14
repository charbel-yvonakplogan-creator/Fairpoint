<?php
require_once '../config/autoload.php';


$controller = $_GET['controller'] ?? 'depense';
$action = $_GET['action'] ?? 'index';



$controllerName = ucfirst($controller) . 'Controller';
$controllerFile = "../app/controllers/$controllerName.php";


if (!file_exists($controllerFile)) {
die('Controller introuvable');
}


require_once $controllerFile;
$controllerInstance = new $controllerName();


if (!method_exists($controllerInstance, $action)) {
die('Action introuvable');
}


$controllerInstance->$action();

