<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_jogo extends Model
{
    use HasFactory;

    protected $fillable = ['descricao'];

    public function produto(){
        return $this->belongsTo('App\Models\produto');
    }
}
