<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_plataforma extends Model
{
    use HasFactory;
    protected $fillable = ['descricao'];

    public function produtos(){
        return $this->hasMany(Produto::class,'tipo_plataforma_id','id');
}
}
