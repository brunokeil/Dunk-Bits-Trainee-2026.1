<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class CadastroControllerPOST
{

    public function criar()
    {
        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['senha'],
            'is_admin' => 0,
        ];
        if(App::get('database')->existe($parameters['email'])){
             header('Location: /cadastro');
             exit();
        }else if($parameters['name'] && $parameters['email'] && $parameters['password']){
            App::get('database')->insert('users', $parameters);
            header('Location: /dashboard');
        } else{
            header('Location: /cadastro');
        }
    }
}