<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController
{

    public function LoginView()
    {
        session_start();
        if(isset($_SESSION['id'])) {
            header('Location: /dashboard');
        }

        // $redirectLabel = 'dashboard';


        // if(isset($_REQUEST['redirect'])) {
        //     $redirectLabel = $_REQUEST['redirect'];
        // }
        return view('site/login');
    }


    public function logar()
    {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        // $redirect = $_POST['redirect'] ?? "dashboard";

        $user = App::get(key: 'database')->verificaLogin($email, $senha);

        if ($user) {
            session_start();
            $_SESSION['id'] = $user->id;
            header("Location: /dashboard");
        } else {
            session_start();
            header('Location: /login');
        }
    }
}