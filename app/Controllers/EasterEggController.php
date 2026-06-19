<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class EasterEggController
{

    public function index()
    {
        return view('site/easter-egg');
    }
}