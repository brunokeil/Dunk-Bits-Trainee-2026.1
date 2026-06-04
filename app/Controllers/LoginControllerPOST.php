<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginControllerPOST
{

    public function logar()
    {
        $email = $_POST['username'];
        $senha = $_POST['senha'];
    }
}