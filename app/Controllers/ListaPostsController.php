<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ListaPostsController
{

    public function existPhotoPost($imageName)
    {
        $imagemPadrao = "/public/assets/post_featured_pics/padrao.png";

        if (empty($imageName)) {
            return $imagemPadrao;
        }

        $caminhoFisico = $imageName;

        if (file_exists($caminhoFisico)) {
            return $caminhoFisico;
        }

        return $imagemPadrao;
    }

    public function index()
    {

        $database = App::get("database");

        $searchText = isset($_GET['search']) ? $_GET['search'] : '';
        $searchColumn = $searchText !== '' ? ['title', 'content'] : null;

        $filtro = isset($_GET['filtro']) ? $_GET['filtro'] : '';

        $limit = 6;
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        if ($currentPage < 1) {
            $currentPage = 1;
        }

        $offset = ($currentPage - 1) * $limit;

        $totalPosts = $database->countAll('posts', $searchText, $searchColumn, $filtro);
        $totalPages = ceil($totalPosts / $limit);

        $posts = $database->paginate('posts', $limit, $offset, $searchText, $searchColumn, $filtro);

        foreach ($posts as $p) {
            $p->authorData = $database->selectOne('users', $p->author);

            $p->imagem_exibicao = $this->existPhotoPost($p->cover_image);
        }

        return view('site/lista-posts', [
            'posts' => $posts,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'searchText' => $searchText,
            'valor_filtro' => $filtro
        ]);
    }
}
