<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class DashboardController
{

    public function ehAdmin($id, $database)
    {
        $usuario = $database->selectOne('users', $id);
        if ($usuario->is_admin) {
            return true;
        }

        return false;
    }
    public function index()
    {
        if (!isset($_SESSION['id'])) {
            header(header: 'Location: /login');
            exit;
        }
        $database = App::get("database");

        $ehAdmin = $this->ehAdmin($_SESSION['id'], $database);


        return view('admin/dashboard', [
            "ehAdmin" => $ehAdmin
        ]);
    }
}
