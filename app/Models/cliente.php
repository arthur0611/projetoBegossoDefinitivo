<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'idade',
        'email',
        'telefone',
        'cidade',
        'estado',
        'bairro',
        'rua',
        'cpf',
    ];

    public function produtos(){
        return $this->hasMany(Venda::class,'Cliente_id','id');
    }
}
