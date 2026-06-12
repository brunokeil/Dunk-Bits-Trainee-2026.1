<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginControllerGET
{

    public function LoginView()
    {
        if(isset($_SESSION['id'])){
            header(header: 'Location: /dashboard');
        }
        return view('site/login');
    }
}