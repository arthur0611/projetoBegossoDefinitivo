<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    use HasFactory;


    public function tipojogos(){
        return $this->hasMany('App\Models\tipo_jogo');
}

}