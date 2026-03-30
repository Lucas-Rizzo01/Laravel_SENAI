<?php
// Estou no arquivo Aluno.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Produto extends Model
{
    protected $fillable = [
        'nome',
        'quant',
        'valor'
    ];
}