<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsuariosController
{

    public function index()
    {

        if (!isset($_SESSION['id'])) {
            header(header: 'Location: /login');
            exit;
        }

        $database = App::get("database");

        $usuarioLogado = $database->selectOne('users', $_SESSION['id']);

        if (!$usuarioLogado->is_admin) {
            header(header: 'Location: /dashboard');
            exit;
        }

        $searchText = isset($_GET['search']) ? $_GET['search'] : '';
        $searchColumn = $searchText !== '' ? ['name', 'email'] : null;

        $limit = 5;
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        if ($currentPage < 1) {
            $currentPage = 1;
        }

        $offset = ($currentPage - 1) * $limit;

        $totalUsuarios = $database->countAll('users', $searchText, $searchColumn, null);
        $totalPages = ceil($totalUsuarios / $limit);

        $usuarios = $database->paginate('users', $limit, $offset, $searchText, $searchColumn, null);

        return view('admin/admin-users', [
            'usuarios' => $usuarios,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'searchText' => $searchText
        ]);
    }

    public function getFormImage()
    {
        $imgPath = null;
        $nomeImagem = null;

        if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
            $temporario = $_FILES['imagem']['tmp_name'];

            $nomeImagem = sha1(uniqid($_FILES['imagem']['name'], True)) . "." . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);

            $imgPath = "public/assets/user_profile_pics/" . $nomeImagem;

            move_uploaded_file($temporario, $imgPath);
        }

        return $nomeImagem;
    }

    public function store()
    {
        $database = App::get("database");
        $imgName = $this->getFormImage();

        if ($_POST['password'] != $_POST['confirm-password']) {
            $_SESSION['error_message'] = "As senhas são diferentes!";
            header('Location: /admin-users');
            exit;
        }

        if ($database->existe($_POST['email'])) {
            $_SESSION['error_message'] = "Não foi possível atualizar: O e-mail informado já está em uso!";
            header('Location: /admin-users');
            exit;
        }

        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'is_admin' => isset($_POST['is_admin']) ? 1 : 0,
            'profile_image' => $imgName
        ];

        $database->insert('users', $parameters);
        header('Location: /admin-users');
    }

    public function edit()
    {

        $imgName = $this->getFormImage();



        $database = App::get("database");



        if ($imgName != null) {
            $parameters = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'profile_image' => $imgName
            ];
        } else {
            $parameters = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ];
        }


        $id = $_POST['id'];

        $database->update('users', $id, $parameters);
        header('Location: /admin-users');
    }

    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')->delete('users', $id);
        header('Location: /admin-users');
    }
}
