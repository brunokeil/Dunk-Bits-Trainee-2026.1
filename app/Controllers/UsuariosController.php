<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsuariosController
{

    public function index()
    {
        $usuarios = App::get("database")->selectAll('users');

        return view('admin/admin-users', ['usuarios' => $usuarios]);
    }

    public function store()
    {
        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'is_admin' => isset($_POST['is_admin']) ? 1 : 0
        ];

        App::get("database")->insert('users', $parameters);
        header('Location: /admin-users');
    }
}
