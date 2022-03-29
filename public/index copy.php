<?php

require '../vendor/autoload.php';

define ('VIEWS', dirname(__DIR__).DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR);

define('SCRIPTS', trim(dirname($_SERVER['SCRIPT_NAME']), '\\'). '/');

$router = new \App\routes\Router($_GET['url']);


$router->get('/home', '\App\controllers\HomeController@index');
$router->get('/register', '\App\controllers\RegisterController@index');
$router->get('/login', '\App\controllers\LoginController@index');
$router->post('/register', '\App\controllers\RegisterController@store');

$router->run();



