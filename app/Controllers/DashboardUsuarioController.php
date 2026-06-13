<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class DashboardUsuarioController
{

    public function index()
    {
        return view('site/dashboard-usuario');
    }
}