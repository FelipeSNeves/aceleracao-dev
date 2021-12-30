<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        $usuario = ["id" => rand(1000, 9999), "name" => "Felipe Neves"];
        session(["usuario" => $usuario]);
    }

    public function logout()
    {
        session()->forget('usuario');
    }
}
