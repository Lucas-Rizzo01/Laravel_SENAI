<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model{

    protected $fillable = [
        'nome',
        'numCorredor'
    ];

    public function produtos(){
        return $this->hasMany(Produto::class);
    }
}
