<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Controllers\LoginControllerGET;
use App\Core\Router;

$router->get('', 'ExampleController@index');

$router->get('login', 'LoginControllerGET@LoginView');

$router->post('login', 'LoginControllerPOST@index');