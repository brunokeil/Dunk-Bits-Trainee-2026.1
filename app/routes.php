<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Controllers\CadastroController;
use App\Core\Router;

$router->get('', 'ExampleController@index');

$router->get('cadastro', 'CadastroControllerGET@index');

$router->get('dashboard', 'DashboardController@index');

$router->post('cadastro/create', 'CadastroControllerPOST@criar');