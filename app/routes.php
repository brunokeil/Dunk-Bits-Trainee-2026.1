<?php

namespace App\Controllers;

use App\Controllers\UsuariosController;
use App\Controllers\ExampleController;
use App\Controllers\NavbarController;
use App\Controllers\LandingPageController;
use App\Core\Router;

$router->get('', 'ExampleController@index');

$router->get('navbar', 'NavbarController@index');

$router->get('landingpage', 'LandingPageController@index');

$router->get('admin-users', 'UsuariosController@index');

$router->post('admin-users/create', 'UsuariosController@store');

$router->post('admin-users/edit', 'UsuariosController@edit');

$router->post('admin-users/delete', 'UsuariosController@delete');

$router->get('lista-posts', 'ListaPostsController@index');

$router->get('cadastro', 'CadastroController@index');

$router->get('login', 'LoginControllerGET@LoginView');

$router->get('pagposts', 'PagPostsController@index');

$router->get('dashboard', 'DashboardController@index');

$router->post('login', 'LoginControllerPOST@logar');

$router->post('logout', 'LogoutControllerPOST@deslogar');

$router->get('cadastro', 'CadastroControllerGET@index');

$router->post('cadastro/create', 'CadastroControllerPOST@criar');

$router->get('post-individual', 'PostIndividualController@index');
