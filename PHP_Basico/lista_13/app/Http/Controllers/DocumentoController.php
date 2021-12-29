<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Documento;

use Illuminate\Support\Facades\Log;

class DocumentoController extends Controller
{
    function index()
    {
        $documentos = Documento::all();

        Log::channel('documentos')->info('Documento acessado com sucesso');

        return view('documento', compact('documentos'));

    }

    function exibedoc($id)
    {
        $documento = Documento::where('id', $id)->first();
        return view('exibedoc', compact('documento'));

    }

    function novo()
    {
        return view('insereDocumento');
    }

    function insere(Request $form)
    {
        $documento = Documento::create($form->all());
        if($documento) {
            $documento;
        }

        return redirect()->route('documentos.index');
    }

    function remover($id)
    {
        $documento = Documento::find($id);
        if(!$documento){
            return redirect()->route('documentos.index');
        }

        $documento->delete();
        
        return redirect()->route('documentos.index')->with('mensagem', "Documento $id deletado com sucesso");

    }
}
