<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LivroModel extends Model

{
    
    protected $table = 'livro';

    protected $fillable = [
        'titulo',
        'autor',
        'ano_publicacao',
        'editora',
        'isbn',
        'paginas',
        'preco',
        'genero',
        'user_id'
    ];
}

