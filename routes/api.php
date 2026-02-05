<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
     
Route::get('/teste',[TestController::class,'envia_teste']);
     
Route::get('/soma',[TestController::class,'soma']);

Route::post('/salva_livro',[LivroController::class,'salva_livro']);

Route::get('/exibe_livro/{id}',[LivroController::class,'exibe_livro']);
Route::get('/todos_livros',[LivroController::class,'todos_livros']);