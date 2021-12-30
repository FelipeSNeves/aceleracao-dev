<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Documento;

class DocumentoController extends Controller
{
    public function index()
    {
        $documentos = Documento::paginate(10);

        return response()->json($documentos);
    }

    public function exibe($id)
    {
        $documento = Documento::where('id', $id)->first();

        if(!$documento) {
            return response()->json(['code' => '500', 'msg' => 'Erro ao exibir o documento']);
        }

        return response()->json($documento);

    }
}
