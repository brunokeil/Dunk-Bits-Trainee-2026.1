<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController
{

    public function LoginView()
    {
        if (isset($_SESSION['id'])) {
            header(header: 'Location: /dashboard');
            exit();
        }

        $redirectLabel = '/dashboard';


        if (isset($_REQUEST['redirect'])) {
            $redirectLabel = $_REQUEST['redirect'];
        }
        return view('site/login', [
            "redirect" => $redirectLabel
        ]);
    }

    public function logar()
    {
        $email = $_POST['email'];
        $senhaInput = $_POST['senha'];
        $redirect = $_POST['redirect'] ?? "dashboard";

        $user = App::get(key: 'database')->selectOneEmail('users', $email);

        if(!$user){
            $_SESSION['mensagem-erro'] = "Usuário e/ou senha incorretos";
            header('Location: /login');
            exit();
        }

        $senhaVerificada = password_verify($senhaInput, $user->password);

        if(!$senhaVerificada){
            $_SESSION['mensagem-erro'] = "Usuário e/ou senha incorretos";
            header('Location: /login');
            exit();
        }else{
            $_SESSION['id'] = $user->id;
            $_SESSION['is_admin'] = $user->is_admin;
            header("Location: " . $redirect);    
            exit();
        }
    }
        public function deslogar()
    {
        session_unset();
        session_destroy();
        header('Location: /login');
        exit();
    }
}
