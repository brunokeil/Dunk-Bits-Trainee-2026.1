<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class CadastroControllerPOST
{

    public function criar()
    {
        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'is_admin' => 0,
        ];

        App::get('database')->insert('users', $parameters);
        header('Location: /dashboard');

    }
}