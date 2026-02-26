<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});


Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/estante', function () {
    return view('estante');
});

Route::get('/visualiza_livro/{id_livro}',[LivroController::class,'visualiza_livro']);
Route::get('/alterar_livro/{id_livro}',[LivroController::class,'alterar_livro']);
Route::get('/deleta_livro/{id_livro}',[LivroController::class,'deleta_livro']);


require __DIR__.'/auth.php';

