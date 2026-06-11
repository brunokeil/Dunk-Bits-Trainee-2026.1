<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostIndividualController
{

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

        $comments = $database->selectByForeignKey('comments', 'post_id', $currentPost);

        return view('site/post-individual', [
            'post' => $post,
            'comments' => $comments
        ]);
    }
}
