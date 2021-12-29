<?php

use App\Http\Controllers\{UsuarioController, DocumentoController, AssinaturaController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perfil', [UsuarioController::class, 'index']);

Route::get('/documentos', [DocumentoController::class, 'index'])->name('documentos.index');
// Route::get('/documentos/{id}', [DocumentoController::class, 'exibedoc']);
Route::get('/documentos/novo', [DocumentoController::class, 'novo'])->name('documentos.novo');
Route::post('/documentos/novo', [DocumentoController::class, 'insere'])->name('documentos.inserir');
Route::delete('/documentos/remover/{id}', [DocumentoController::class, 'remover'])->name('documentos.remover');

Route::get('/assinatura', [AssinaturaController::class, 'index'])->name('assinatura.index');
// Route::get('/assinatura/{id}', [AssinaturaController::class, 'exibeassinatura']);
Route::get('/assinatura/novo', [AssinaturaController::class, 'novo'])->name('assinatura.novo');
Route::post('/assinatura/novo', [AssinaturaController::class, 'insere'])->name('assinatura.inserir');
Route::delete('/assinatura/remover/{id}', [AssinaturaController::class, 'remover'])->name('assinatura.remover');