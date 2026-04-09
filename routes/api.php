<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\EbookController;
use App\Http\Middleware\auth_api;

Route::get('/livraria', [LivrariaController::class, 'index']);
     
Route::get('/exibe_livro/{id}',[LivroController::class,'exibe_livro']);

Route::post('/cadastro_usuario',[UsuarioController::class,'cadastra_usuario']);
Route::get('/login_novo',[UsuarioController::class,'login']);
Route::put('/altera_cadastro',[UsuarioController::class,'altera_cadastro']);
Route::delete('/deleta_cadastro',[UsuarioController::class,'apagar_cadastro']);

Route::get('/ebooks/{id}/pdf', [EbookController::class, 'generate']);


Route::middleware(auth_api::class)->group(function(){

  Route::post('/favoritar', [LivroController::class, 'favoritar']);

  Route::post('/cadastra_autor',[AutorController::class,'cadastra_autor']);
  Route::put('/altera_autor',[AutorController::class,'altera_autor']);
  Route::delete('/deleta_autor',[AutorController::class,'apaga_autor']);
  
  Route::get('/todos_livros',[LivroController::class,'todos_livros']);
  Route::post('/salva_livro',[LivroController::class,'salva_livro']);  
  Route::put('/altera_livro',[LivroController::class,'altera_livro']);
  Route::delete('/deleta_livro',[LivroController::class,'apagar_livro']);

  Route::post('/cadastra_ebook',[EbookController::class,'cadastra_ebook']);
  Route::put('/altera_ebook',[EbookController::class,'altera_ebook']);
  Route::delete('/deleta_ebook',[EbookController::class,'apaga_ebook']);

  Route::get('/dashboard', [LivroController::class, 'dashboard']);
});