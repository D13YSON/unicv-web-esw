<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('produtos', [ProdutosController::class, 'index']);
Route::get('produtos/novo', [ProdutosController::class, 'create']);
Route::get('produtos/editar/{id}', [ProdutosController::class, 'edit']);
Route::get('produtos/excluir/{id}', [ProdutosController::class, 'destroy']);
Route::get('produtos/{id}', [ProdutosController::class, 'show']);
Route::post('produtos/gravar/{id}', [ProdutosController::class, 'update']);
Route::post('produtos/salvar', [ProdutosController::class, 'store']);

Route::get('usuarios', [UsuariosController::class, 'index']);
Route::get('usuarios/novo', [usuariosController::class, 'create']);
Route::get('usuarios/editar/{id}', [usuariosController::class, 'edit']);
Route::get('usuarios/excluir/{id}', [usuariosController::class, 'destroy']);
Route::get('usuarios/{id}', [usuariosController::class, 'show']);
Route::post('usuarios/gravar/{id}', [usuariosController::class, 'update']);
Route::post('usuarios/salvar', [usuariosController::class, 'store']);

Route::get('home', [HomeController::class, 'index']);
Route::get('users', [HomeController::class, 'users']);
Route::get('users-db', [HomeController::class, 'usersDatabase']);

Route::get('/', function () {
    return view('welcome');
});
