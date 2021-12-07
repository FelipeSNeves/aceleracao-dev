<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    function index()
    {
        $usuario = Usuario::usuarioLogado();
        $documentos = Documento::all();

        return view('usuario.perfil', compact('usuario', 'documentos'));
    }
}
