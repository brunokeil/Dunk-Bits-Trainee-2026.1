<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ListaPostsController
{

    public function index()
    {

        $database = App::get("database");

        $searchText = isset($_GET['search']) ? $_GET['search'] : '';
        $searchColumn = $searchText !== '' ? ['title', 'content'] : null;

        $limit = 6;
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        if ($currentPage < 1) {
            $currentPage = 1;
        }

        $offset = ($currentPage - 1) * $limit;

        $totalPosts = $database->countAll('posts', $searchText, $searchColumn);
        $totalPages = ceil($totalPosts / $limit);

        $posts = $database->paginate('posts', $limit, $offset, $searchText, $searchColumn);

        return view('site/lista-posts', [
            'posts' => $posts,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'searchText' => $searchText
        ]);
    }
}
