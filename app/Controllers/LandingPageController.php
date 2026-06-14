<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LandingPageController
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
        $database = App::get("database");


        $posts = $database->paginate('posts', 9, 0, null, null, null);

        foreach ($posts as $p) {
            
            $p->authorData = $database->selectOne('users', $p->author);
            
            $p->imagem_exibicao = $this->existPhotoPost($p->cover_image);
        }

        return view('site/landing-page', [
        'posts' => $posts,
        ]);
    }
}