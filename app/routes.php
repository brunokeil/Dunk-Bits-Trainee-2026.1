<?php

namespace App\Controllers;

use App\Controllers\UsuariosController;
use App\Controllers\ExampleController;
use App\Core\Router;


$router->get('', 'ExampleController@index');
$router->get('admin-users', 'UsuariosController@index');
$router->post('admin-users/create', 'UsuariosController@store');
