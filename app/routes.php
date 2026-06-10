<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Controllers\NavbarController;
use App\Controllers\LandingPageController;
use App\Core\Router;

$router->get('', 'ExampleController@index');

$router->get('navbar', 'NavbarController@index');

$router->get('landingpage', 'LandingPageController@index');