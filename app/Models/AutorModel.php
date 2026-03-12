<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AutorModel extends Model
{
    
    protected $table = 'autorr';

    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'nascimento',
        'genero',
        'user_id',
    ];
}




