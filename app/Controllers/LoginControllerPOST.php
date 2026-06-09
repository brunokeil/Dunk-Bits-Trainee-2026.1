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
        $confirmarsenha = $_POST['confirmarsenha'];

        if($senha !== $confirmarsenha){
            session_start();   
            header('Location: /login');
            exit();
        }

        $user = App::get(key: 'database')->verificaLogin($email, $senha);

        if($user){
            session_start();
            $_SESSION['id'] = $user->id;
            header('Location: /dashboard');
            exit();
        }else{
             session_start();   
             header('Location: /login');
             exit();
         }
    }
}