<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipojogo_id',
        'tipo_plataforma_id',
        'descricaoproduto',
        'quantidadeEstoque',
        'valorCompra',
        'valorVenda',
        'dataLancamento',
        'empresa',
        'classificacaoEtaria',
        'classificacaoQuantidade',
    ];



    public function tipoJogo(){
        return $this->belongsTo(tipo_jogo::class,'tipojogo_id','id');
    }

    public function tipoplataformas(){
    return $this->belongsTo(Produto::class,'tipo_plataforma_id','id');
}
public function produtos(){
    return $this->hasMany(Venda::class,'Produto_id','id');
}

}