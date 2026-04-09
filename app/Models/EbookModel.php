<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EbookModel extends Model
{
    protected $table = 'ebook';

    protected $fillable = [
        'titulo',
        'autor',
        'genero',
        'sinopse',
        'texto',
        'user_id',
    ];
}
