<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Controllers\LoginControllerGET;
use App\Controllers\LoginControllerPOST;
use App\Controllers\PagPostsControllerGET;

use App\Core\Router;

$router->get('', 'ExampleController@index');

$router->get('login', 'LoginControllerGET@LoginView');

$router->post('login', 'LoginControllerPOST@logar');

$router->get('pagposts', 'PagPostsController@index');
