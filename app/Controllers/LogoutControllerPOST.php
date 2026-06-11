<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LogoutControllerPOST
{

    public function deslogar(): void
    {
        session_start();
        session_unset();
        session_destroy();
        header(header: 'Location: /login');
    }
}