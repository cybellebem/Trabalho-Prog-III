<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    use HasFactory;
    protected $table = 'filme';
    protected $fillable = [
        'name',
        'sinopse',
        'ano',
        'categoria',
        'imagem',
        'link',
    ];
}
