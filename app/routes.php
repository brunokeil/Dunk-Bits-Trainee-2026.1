<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Controllers\LoginControllerGET;
use App\Controllers\LoginControllerPOST;
use App\Controllers\PagPostsControllerGET;

use App\Core\Router;

$router->get('', 'ExampleController@index');

$router->get('login', 'LoginControllerGET@LoginView');

$router->get('pagposts', 'PagPostsController@index');

$router->get('dashboard', 'DashboardController@index');

$router->post('login', 'LoginControllerPOST@logar');

$router->post('logout', 'LogoutControllerPOST@deslogar');
