<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostsAdminController
{

    public function index()
    {
        $posts = App::get('database')->selectAll('posts');

        return view('admin/posts-admin', compact('posts'));
    }
}