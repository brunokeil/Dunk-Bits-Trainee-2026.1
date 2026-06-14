<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostsAdminController
{

    public function index()
    {
        if(isset($_SESSION['id'])){
            $posts = App::get('database')->selectAllAndJoin('posts');
            return view('admin/posts-admin', compact('posts'));
        }
        header('Location: /login');
    }

    public function store(){

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

    public function edit(){
        $temporario = $_FILES['cover_image']['tmp_name'];
    
        $nomeimagem = sha1(uniqid($_FILES['cover_image']['name'], true)) . "." . pathinfo($_FILES['cover_image']['name'], PATHINFO_EXTENSION);

        $caminhodaimagem = "public/assets/post_featured_pics/" . $nomeimagem;

        move_uploaded_file($temporario, $caminhodaimagem);

        $parameters = [
            'title' => $_POST['tituloDoPost'],
            'content' => $_POST['descricaoDoPost'],
            'cover_image' => $caminhodaimagem,
            'created_at' => date('Y-m-d H:i:s'),
            'author' => $_POST['author'],
            'type' => $_POST['postTipo'],
        ];

        $id = $_POST['id'];

        App::get(key: 'database')->update('posts', $id, $parameters);
        header('Location: /postsadmin');
    }

    public function delete(){
        $id = $_POST['id'];
        App::get(key: 'database')->delete('posts', $id);
        header('Location: /postsadmin');
    }
}