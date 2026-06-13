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
        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['senha'],
            'is_admin' => 0,
        ];
        
        $confirmarsenha = $_POST['confirmarsenha'];

        if($parameters['name'] && $parameters['email'] && $parameters['password'] && ($confirmarsenha === $parameters['password'])){
            App::get('database')->insert('users', $parameters);
            $user = App::get(key: 'database')->verificaLogin($parameters['email'], $parameters['password']);
            $_SESSION['id'] = $user->id;
            header('Location: /dashboard');
        } else{
            header('Location: /cadastro');
        }
    }

}