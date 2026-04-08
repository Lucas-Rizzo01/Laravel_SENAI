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
        'setor_id',
        'detalhes_id'
    ];
    
    public function setor(){
        return $this->belongsTo(Setor::class);
    }

    public function detalhe(){
        return $this->belongsTo(DetalhesProduto::class, 'detalhes_id');
    }
}
