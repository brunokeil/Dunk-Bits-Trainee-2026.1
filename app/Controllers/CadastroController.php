<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class CadastroController
{

    public function index()
    {
        return view('site/cadastro');
    }

    
    public function criar()
    {
        $senhaInput = $_POST['senha'];
        $confirmarsenha = $_POST['confirmarsenha'];

        $senhaSegura = password_hash($senhaInput, PASSWORD_DEFAULT);    

        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $senhaSegura,
            'is_admin' => 0,
        ];

        if($confirmarsenha !== $senhaInput){
            $_SESSION['senhas-diferentes'] = "Senhas diferentes!";
            header('Location: /cadastro');
            exit();
        }else if(!$parameters['email']){
            $_SESSION['semEmail'] = "Nenhum email digitado!";
            header('Location: /cadastro');
            exit();
        }else if(App::get(key: 'database')->existe($parameters['email'])){
            $_SESSION['email-usado'] = "Email já cadastrado!";
            header('Location: /cadastro');
            exit();
        }

        if($parameters['name'] && $parameters['email'] && $parameters['password']){
            App::get('database')->insert('users', $parameters);
            $user = App::get(key: 'database')->selectOneEmail('users', $parameters['email']);
            $_SESSION['id'] = $user->id;
            $_SESSION['is_admin'] = $user->is_admin;
            header('Location: /dashboard');
            exit();
        } else{
            header('Location: /cadastro');
            exit();
        }
    }

}