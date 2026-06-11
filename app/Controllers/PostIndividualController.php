<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostIndividualController
{

    public function index()
    {

        session_start();

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

        if (
            empty($post->cover_image) ||
            !file_exists($_SERVER['DOCUMENT_ROOT'] . $post->cover_image)
        ) {
            $post->cover_image = '/public/assets/placeholder/dinosaur.png';
        }

        return view('site/post-individual', [
            'post' => $post,
            'author' => $author,
            'comments' => $comments
        ]);
    }

    public function storeComment()
    {
        session_start();
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
}
