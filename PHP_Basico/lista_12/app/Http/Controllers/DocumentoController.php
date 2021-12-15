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
}
