<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalhesProduto extends Model{

    protected $table = 'detalhesProduto';

    protected $fillable = [
        'descricao',
        'tamanho',
        'peso'
    ];

    public function produtos(){
        return $this->hasMany(Produto::class);
    }
}
