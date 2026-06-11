<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class CadastroControllerGET
{

    public function index()
    {
        return view('site/cadastro');
    }
}