<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginControllerPOST
{

    public function logar() 
    {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $user = App::get(key: 'database')->verificaLogin($email, $senha);

        if($user){
            session_start();
            $_SESSION['id'] = $user->id;
            header('Location: /dashboard');
            exit();
        }else{
             $_SESSION['mensagem-erro'] = "Usuário e/ou senha incorretos";  
             header('Location: /login');
             exit();
         }
    }
}