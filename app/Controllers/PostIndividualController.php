<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostIndividualController
{

    public function getPostImage($post)
    {
        $imagemPadrao = "/public/assets/post_featured_pics/padrao.png";

        $imageName = $post->cover_image;

        if (empty($imageName)) {
            return $imagemPadrao;
        }

        $caminhoFisico = "public/assets/post_featured_pics/" . $imageName;

        if (file_exists($caminhoFisico)) {
            return '/' . $caminhoFisico;
        }

        return $imagemPadrao;
    }

    public function index()
    {
        $database = App::get("database");

        $currentPost = isset($_GET['post']) ? (int)$_GET['post'] : 1;

        if ($currentPost < 1) {
            $currentPost = 1;
        }



        $post = $database->selectOne('posts', $currentPost);

        if (!$post) {
            header("Location: /lista-posts");
            return;
        }

        $author = $database->selectOne('users', $post->author);

        $comments = $database->selectByForeignKey('comments', 'post_id', $currentPost);

        foreach ($comments as $comment) {
            $comment->authorData = $database->selectOne('users', $comment->author);
        }

        $postImage = $this->getPostImage($post);

        $usuarioLogado = null;
        $userEhAdmin = false;

        if (isset($_SESSION['id'])) {
            $usuarioLogado = $database->selectOne('users', $_SESSION['id']);
            $userEhAdmin = $usuarioLogado ? (bool)$usuarioLogado->is_admin : false;
        }



        return view('site/post-individual', [
            'post' => $post,
            'author' => $author,
            'comments' => $comments,
            'postCoverImage' => $postImage,
            'usuarioLogado' => $usuarioLogado,
            'userEhAdmin' => $userEhAdmin
        ]);
    }

    public function storeComment()
    {
        if (!isset($_SESSION['id'])) {
            header('Location: /login');
            exit;
        }

        $parameters = [
            'content' => $_POST['comment'],
            'author' => $_SESSION['id'],
            'post_id' => $_POST['post_id'],
        ];

        App::get("database")->insert('comments', $parameters);
        header('Location: /post-individual?post=' . $_POST['post_id']);
    }

    public function deleteComment()
    {
        $id = $_POST['id'];

        $postId = $_POST['post_id'];

        App::get('database')->delete('comments', $id);
        header('Location: /post-individual?post=' . $postId);
    }

    public function editComment()
    {
        if (!isset($_SESSION['id'])) {
            header('Location: /login');
            exit;
        }

        $id = $_POST['id'];
        $postId = $_POST['post_id'];
        $novoConteudo = $_POST['comment'];

        $database = App::get("database");

        $comment = $database->selectOne('comments', $id);
        $usuarioLogado = $database->selectOne('users', $_SESSION['id']);
        $userEhAdmin = $usuarioLogado ? (bool)$usuarioLogado->is_admin : false;

        if ($comment && ($userEhAdmin || $comment->author == $_SESSION['id'])) {
            $database->update('comments', $id, [
                'content' => $novoConteudo
            ]);
        }

        header('Location: /post-individual?post=' . $postId);
        exit;
    }
}
