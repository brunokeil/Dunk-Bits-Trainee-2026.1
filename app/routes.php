<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Controllers\PostsAdminController;
use App\Core\Router;

$router->get('', 'ExampleController@index');

$router->get('posts-admin', 'PostsAdminController@index');