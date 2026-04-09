<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\EbookController;

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

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/autor', function () {
    return view('autor');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/ebook', function () {
    return view('ebook');
});

Route::get('/prevendas', [EbookController::class, 'prevendas']);

Route::get('/visualiza_livro/{id_livro}',[LivroController::class,'visualiza_livro']);
Route::get('/alterar_livro/{id_livro}',[LivroController::class,'visualiza_livro']);
Route::get('/deleta_livro/{id_livro}',[LivroController::class,'deleta_livro']);

Route::get('/visualiza_cadastro/{id_cadastro}',[UsuarioController::class,'visualiza_cadastro']);
Route::get('/altera_cadastro/{id_cadastro}',[UsuarioController::class,'altera_cadastro']);
Route::get('/deleta_cadastro/{id_cadastro}',[UsuarioController::class,'deleta_cadastro']);

Route::get('/visualiza_autor/{id_autor}',[AutorController::class,'visualiza_autor']);
Route::get('/altera_autor/{id_autor}',[AutorController::class,'visualiza_autor']);
Route::get('/deleta_autor/{id_autor}',[AutorController::class,'deleta_autor']);

Route::get('/visualiza_ebook/{id_ebook}',[EbookController::class,'visualiza_ebook']);
Route::get('/deleta_ebook/{id_ebook}',[EbookController::class,'deleta_ebook']);


require __DIR__.'/auth.php';

