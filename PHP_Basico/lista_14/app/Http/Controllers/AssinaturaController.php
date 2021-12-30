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

    function novo()
    {
        return view('insereAssinatura');
    }

    function insere(Request $form)
    {
        $assinatura = Assinatura::create($form->all());
        if($assinatura) {
            $assinatura;
        }

        return redirect()->route('assinatura.index');
    }

    function remover($id)
    {
        $assinatura = Assinatura::find($id);
        if(!$assinatura){
            return redirect()->route('assinatura.index');
        }

        $assinatura->delete();
        
        return redirect()->route('assinatura.index')->with('mensagem', "Assinatura $id deletado com sucesso");

    }
}


