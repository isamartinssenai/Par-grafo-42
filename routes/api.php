<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\COntrollers\UsuarioController;


Route::get('/livraria', [LivrariaController::class, 'index']);
     
Route::post('/salva_livro',[LivroController::class,'salva_livro']);
Route::put('/altera_livro',[LivroController::class,'altera_livro']);

Route::get('/exibe_livro/{id}',[LivroController::class,'exibe_livro']);
Route::get('/todos_livros',[LivroController::class,'todos_livros']);
Route::delete('/deleta_livro',[LivroController::class,'apagar_livro']);

Route::post('/cadastro_usuario',[UsuarioController::class,'cadastra_usuario']);