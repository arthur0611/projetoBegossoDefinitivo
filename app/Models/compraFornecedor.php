<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compraFornecedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'Fornecedor_id',
        'dataCompra',
        'totalComprado',
        'valorTotalCFornecedores'
    ];



    public function fornecedor(){
        return $this->belongsTo(fornecedor::class,'Fornecedor_id','id');
    }

    public function produtos(){
    return $this->hasMany(Venda::class,'Produto_id','id');
}
}
