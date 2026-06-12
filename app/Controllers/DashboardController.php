<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class DashboardController
{
    public function index()
    {
        if(!isset($_SESSION['id'])){
            header(header: 'Location: /login');
        }
        return view('admin/dashboard');
    }
}