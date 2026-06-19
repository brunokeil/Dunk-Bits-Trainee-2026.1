<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostsAdminController
{

    public function existPhotoPost($imageName)
    {
        $imagemPadrao = "/public/assets/post_featured_pics/padrao.png";

        if (empty($imageName)) {
            return $imagemPadrao;
        }

        $caminhoFisico = "public/assets/post_featured_pics/" . $imageName;

        if (file_exists($caminhoFisico)) {
            return $caminhoFisico;
        }

        return $imagemPadrao;
    }

    public function index()
    {
        $database = App::get('database');
        if (isset($_SESSION['id'])) {

            $searchText = isset($_GET['search']) ? $_GET['search'] : '';
            $searchColumn = $searchText !== '' ? ['title', 'content'] : null;

            $limit = 5;
            $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

            if ($currentPage < 1) {
                $currentPage = 1;
            }

            $offset = ($currentPage - 1) * $limit;

            $totalPosts = $database->countAll('posts', $searchText, $searchColumn, null);
            $totalPages = ceil($totalPosts / $limit);


            $posts = $database->paginate('posts', $limit, $offset, $searchText, $searchColumn, null);

            foreach ($posts as $p) {
                $p->authorData = $database->selectOne('users', $p->author);

                $p->imagem_exibicao = $this->existPhotoPost($p->cover_image);
            }

            $usuarioLogado = $database->selectOne('users', $_SESSION['id']);

            $compactoPosts = array_merge(compact('posts'), [
                'currentPage' => $currentPage,
                'totalPages' => $totalPages,
                'searchText' => $searchText,
                'usuarioLogado' => $usuarioLogado
            ]);


            return view('admin/posts-admin', $compactoPosts);
        }
        header('Location: /login');
    }

    public function store()
    {

        if (empty($_POST['tituloDoPost'])) {
            $_SESSION['semTitulo'] = "Não foi possível criar, post sem título.";
            header('Location: /postsadmin');
            exit();
        } else if (empty($_POST['descricaoDoPost'])) {
            $_SESSION['semDescricao'] = "Não foi possível criar, post sem descrição.";
            header('Location: /postsadmin');
            exit();
        } else if (empty($_FILES['cover_image']['tmp_name'])) {
            $_SESSION['semImagem'] = "Não foi possível criar, post sem imagem.";
            header('Location: /postsadmin');
            exit();
        } else if (empty($_POST['postTipo'])) {
            $_SESSION['semTipo'] = "Não foi possível criar, post sem tipo.";
            header('Location: /postsadmin');
            exit();
        }

        $temporario = $_FILES['cover_image']['tmp_name'];

        $nomeimagem = sha1(uniqid($_FILES['cover_image']['name'], true)) . "." . pathinfo($_FILES['cover_image']['name'], PATHINFO_EXTENSION);

        $caminhodaimagem = "public/assets/post_featured_pics/" . $nomeimagem;

        move_uploaded_file($temporario, $caminhodaimagem);

        $parameters = [
            'title' => $_POST['tituloDoPost'],
            'content' => $_POST['descricaoDoPost'],
            'cover_image' => $caminhodaimagem,
            'created_at' => date('Y-m-d H:i:s'),
            'author' => $_SESSION['id'],
            'type' => $_POST['postTipo'],
        ];

        App::get(key: 'database')->insert('posts', $parameters);
        header('Location: /postsadmin');
    }

    public function edit()
    {
        $id = $_POST['id'];

        $conteudo = App::get(key: 'database')->selectOne('posts', $id);

        if (!empty($_POST['tituloDoPost'])) {
            $titulo = $_POST['tituloDoPost'];
        } else {
            $titulo = $conteudo->title;
        }

        if (!empty($_POST['descricaoDoPost'])) {
            $descricao = $_POST['descricaoDoPost'];
        } else {
            $descricao = $conteudo->content;
        }

        if (!empty($_FILES['cover_image']['tmp_name'])) {
            $temporario = $_FILES['cover_image']['tmp_name'];
            $nomeimagem = sha1(uniqid($_FILES['cover_image']['name'], true)) . "." . pathinfo($_FILES['cover_image']['name'], PATHINFO_EXTENSION);
            $caminhodaimagem = "public/assets/post_featured_pics/" . $nomeimagem;

            move_uploaded_file($temporario, $caminhodaimagem);
        } else {
            $caminhodaimagem = $conteudo->cover_image;
        }

        if (!empty($_POST['postTipo'])) {
            $postTipo = $_POST['postTipo'];
        } else {
            $postTipo = $conteudo->type;
        }


        $parameters = [
            'title' => $titulo,
            'content' => $descricao,
            'cover_image' => $caminhodaimagem,
            'created_at' => date('d-m-Y H:i:s'),
            'author' => $_POST['author'],
            'type' => $postTipo,
        ];

        App::get(key: 'database')->update('posts', $id, $parameters);
        header('Location: /postsadmin');
    }

    public function delete()
    {
        $id = $_POST['id'];
        App::get(key: 'database')->delete('posts', $id);
        header('Location: /postsadmin');
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

    public function editUser()
    {

        $imgName = $this->getFormImage();

        $database = App::get("database");

        $id = $_POST['id'];

        $usuario = $database->selectOne('users', $id);

        if ($_POST['password'] == "") {
            $_POST['password'] = $usuario->password;
        }

        if ($database->existe($_POST['email']) && $usuario->email != $_POST['email']) {
            $_SESSION['emailEmUso'] = "Não foi possível atualizar: O e-mail informado já está em uso!";
            header('Location: /postsadmin');
            exit;
        }

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

        $database->update('users', $id, $parameters);
        header('Location: /postsadmin');
    }
}
