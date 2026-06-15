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
        $senha = $_POST['senha'];
        $redirect = $_POST['redirect'] ?? "dashboard";

        $user = App::get(key: 'database')->verificaLogin($email, $senha);

        if ($user){
            $_SESSION['id'] = $user->id;
            $_SESSION['is_admin'] = $user->is_admin;
            header("Location: " . $redirect);
        } else {
            $_SESSION['mensagem-erro'] = "Usuário e/ou senha incorretos";
            header('Location: /login');
        }
    }
        public function deslogar()
    {
        session_unset();
        session_destroy();
        header('Location: /login');
    }
}
