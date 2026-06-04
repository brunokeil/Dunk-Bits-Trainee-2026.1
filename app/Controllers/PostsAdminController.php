<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostsAdminController
{

    public function index()
    {
        return view('admin/posts-admin');
    }
}