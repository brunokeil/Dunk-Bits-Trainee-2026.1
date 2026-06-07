<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginControllerPOST
{

    public function logar(): void
    {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $user = App::get(key: 'database')->verificaLogin($email, $senha);

        if($user){
            session_start();
            $_SESSION['id'] = $user->id;
            header(header: 'Location: /dashboard');
        }
        // } else{
        //     session_start();   
        //     $_SESSION['mensagem-erro'];
        //     header(header:'Location: /login');
        // }
    }
}