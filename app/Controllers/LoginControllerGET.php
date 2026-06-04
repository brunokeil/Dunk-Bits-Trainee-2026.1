<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginControllerGET
{

    public function LoginView()
    {
        return view('site/login');
    }
}