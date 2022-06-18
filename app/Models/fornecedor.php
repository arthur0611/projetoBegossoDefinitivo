<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fornecedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cnpj',
        'nomeFantasia',
        'endereco',
        'contato',
        'cep',
        'site',
    ];


    public function compraFornecedor(){
        return $this->hasMany(compraFornecedor::class,'Fornecedor_id','id');
}
}
