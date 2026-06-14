<?php

namespace App\Controllers;

use App\Controllers\ExampleController;
use App\Controllers\LoginController;
use App\Controllers\PagPostsControllerGET;
use App\Controllers\CadastroController;
use App\Controllers\PostsAdminController;
use App\Controllers\NavbarController;
use App\Controllers\LandingPageController;
use App\Core\Router;



$router->get('navbar', 'NavbarController@index');

$router->get('', 'LandingPageController@index');

$router->get('admin-users', 'UsuariosController@index');

$router->post('admin-users/create', 'UsuariosController@store');

$router->post('admin-users/edit', 'UsuariosController@edit');

$router->post('admin-users/delete', 'UsuariosController@delete');

$router->get('lista-posts', 'ListaPostsController@index');

$router->post('posts-admin/create', 'PostsAdminControllerPOST@criar');

$router->get('cadastro', 'CadastroController@index');

$router->get('login', 'LoginController@LoginView');

$router->get('pagposts', 'PagPostsController@index');

$router->get('dashboard', 'DashboardController@index');

$router->get('landingpage', 'LandingPageController@index');

$router->post('login', 'LoginController@logar');

$router->get('logout', 'LoginController@deslogar');

$router->post('logout', 'LoginController@deslogar');

$router->post('cadastro/create', 'CadastroController@criar');

$router->get('footer', 'FooterController@index');

$router->get('posts-admin', 'PostsAdminController@index');

$router->post('postsadmin/create', 'PostsAdminController@store');

$router->post('login', 'LoginController@logar');

$router->get('post-individual', 'PostIndividualController@index');

$router->get('admin-users', 'UsuariosController@index');

$router->post('admin-users/create', 'UsuariosController@store');

$router->post('admin-users/edit', 'UsuariosController@edit');

$router->post('postsadmin/edit', 'PostsAdminController@edit');

$router->post('postsadmin/delete', 'PostsAdminController@delete');

$router->post('admin-users/delete', 'UsuariosController@delete');

$router->post('post-individual/comment', 'PostIndividualController@storeComment');

$router->post('post-individual/comment/delete', 'PostIndividualController@deleteComment');

$router->post('post-individual/comment/edit', 'PostIndividualController@editComment');
