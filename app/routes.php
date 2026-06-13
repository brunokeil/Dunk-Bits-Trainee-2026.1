<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Controllers\LoginController;
use App\Controllers\PagPostsControllerGET;
use App\Controllers\CadastroController;

$router->get('', 'ExampleController@index');

$router->get('navbar', 'NavbarController@index');

$router->get('landingpage', 'LandingPageController@index');

$router->get('admin-users', 'UsuariosController@index');

$router->post('admin-users/create', 'UsuariosController@store');

$router->post('admin-users/edit', 'UsuariosController@edit');

$router->post('admin-users/delete', 'UsuariosController@delete');

$router->get('lista-posts', 'ListaPostsController@index');

$router->get('cadastro', 'CadastroController@index');

$router->get('login', 'LoginController@LoginView');

$router->get('pagposts', 'PagPostsController@index');

$router->get('dashboard', 'DashboardController@index');

$router->get('landingpage', 'LandingPageController@index');

$router->post('login', 'LoginController@logar');

$router->post('logout', 'LogoutControllerPOST@deslogar');

$router->post('cadastro/create', 'CadastroController@criar');

$router->get('footer', 'FooterController@index');