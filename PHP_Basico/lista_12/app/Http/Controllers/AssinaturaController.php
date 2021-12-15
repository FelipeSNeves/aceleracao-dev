<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Assinatura;

class AssinaturaController extends Controller
{
    function index()
    {
        $assinaturas = Assinatura::all();

        return view('assinatura', compact('assinaturas'));

    }

    function exibeassinatura($id)
    {
        $assinatura = Assinatura::where('id', $id)->first();
        return view('exibeassinatura', compact('assinatura'));

    }
}


