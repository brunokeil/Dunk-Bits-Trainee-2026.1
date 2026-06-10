<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Controllers\PostsAdminController;
use App\Controllers\LoginControllerGET;
use App\Controllers\LoginControllerPOST;
use App\Controllers\PagPostsControllerGET;

use App\Controllers\CadastroController;
use App\Core\Router;

$router->get('', 'ExampleController@index');

$router->get('posts-admin', 'PostsAdminControllerGET@index');

$router->post('posts-admin/create', 'PostsAdminControllerPOST@criar');
$router->get('cadastro', 'CadastroController@index');
$router->get('login', 'LoginControllerGET@LoginView');

$router->get('pagposts', 'PagPostsController@index');

$router->get('dashboard', 'DashboardController@index');

$router->post('login', 'LoginControllerPOST@logar');

$router->post('logout', 'LogoutControllerPOST@deslogar');
$router->get('cadastro', 'CadastroControllerGET@index');

$router->get('dashboard', 'DashboardController@index');

$router->post('cadastro/create', 'CadastroControllerPOST@criar');
