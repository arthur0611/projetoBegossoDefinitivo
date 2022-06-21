<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pagamentoFornecedor extends Model
{
    use HasFactory;

    protected $fillable = ['compra_fornecedors_id','DataPagamento','Parcela'];

    public function PagamentosClientes(){
        return $this->belongsTo(compraFornecedor::class,'compra_fornecedors_id','id');
    }
}
