<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalhesProduto extends Model{

    protected $fillable = [
        'descricao',
        'tamanho',
        'peso'
    ];

    public function produtos(){
        return $this->hasMany(Produto::class);
    }
}
