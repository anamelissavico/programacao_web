<?php

$controller = $_GET['controller'];
$metodo = $_GET['acao'];
$controller .= "Controller";

require_once $_SERVER['DOCUMENT_ROOT'] . '/aula3/controller/EstudanteController.php';

$objeto = new $controller();
$objeto->$metodo();

// $classe .=  'Controller';

// require_once 'controller/'.$classe.'.php';


// $estudanteController = new $classe();
// $estudanteController->$metodo();
