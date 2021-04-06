<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

// Accès aux pages normals

$router = new EdenNews\Router($_SERVER["REQUEST_URI"]);
$router->get('/', "HomeController@index");
$router->get('/login', "UserController@showLogin");
$router->get('/register', "UserController@showRegister");

// Système d'API en POST

$router->run();
