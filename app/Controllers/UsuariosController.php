<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsuariosController
{

    public function index()
    {

        $database = App::get("database");
        $limit = 5;
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        if ($currentPage < 1) {
            $currentPage = 1;
        }

        $offset = ($currentPage - 1) * $limit;

        $totalUsuarios = $database->countAll('users');
        $totalPages = ceil($totalUsuarios / $limit);

        $usuarios = $database->paginate('users', $limit, $offset);

        return view('admin/admin-users', [
            'usuarios' => $usuarios,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages
        ]);
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

    public function edit()
    {
         $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];
          $id = $_POST['id'];

        App::get("database")->update('users', $id, $parameters);
        header('Location: /admin-users');
    }

    public function delete()
    {
         $id = $_POST['id']; 

         App::get('database')->delete('users', $id);
         header('Location: /admin-users');
    }
}
