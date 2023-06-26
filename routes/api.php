<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\EditoraController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\ReservaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/autores', AutorController::class);
Route::resource('/reservas', ReservaController::class);
Route::resource('/livros', LivroController::class);
Route::get('/alunos/ra/{ra}', [AlunoController::class, 'getByRa']);
Route::get('/alunos/livros/{ra}', [AlunoController::class, 'getLivrosByRa']);
Route::resource('/alunos', AlunoController::class);
Route::resource('/cursos', CursoController::class);
Route::resource('/editoras', EditoraController::class);




