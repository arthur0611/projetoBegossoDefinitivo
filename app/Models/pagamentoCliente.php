<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pagamentoCliente extends Model
{
    use HasFactory;

    protected $fillable = ['Vendas_id','DataPagamento','Parcela'];

    public function PagamentosClientes(){
        return $this->belongsTo(Venda::class,'Vendas_id','id');
    }
}
