<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_jogo extends Model
{
    use HasFactory;

    protected $fillable = ['descricao'];


    public function produtos(){
        return $this->hasMany(Produto::class,'tipojogo_id','id');
}
}
