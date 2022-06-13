<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    use HasFactory;


    public function tipoJogo(){
        return $this->belongsTo(tipo_jogo::class,'tipojogo_id','id');
    }

public function tipoplataformas(){
    return $this->belongsTo(Produto::class,'tipo_plataforma_id','id');
}

}