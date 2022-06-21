<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venda extends Model
{
    use HasFactory;

    protected $fillable = [
        'Cliente_id',
        'Funcionario_id',
        'Produto_id',
        'dataCompra',
        'quantidadeCompra',
        'TotalVenda',
    ];

    public function Cliente(){
        return $this->belongsTo(Cliente::class,'Cliente_id','id');
    }
    

    public function funcionario(){
        return $this->belongsTo(Funcionario::class,'Funcionario_id','id');
    }

   
public function Produto(){
    return $this->belongsTo(Produto::class,'Produto_id','id');
}

public function PagamentosClientes(){
    return $this->hasMany(PagamentosClientes::class,'Vendas_id','id');
}

}
