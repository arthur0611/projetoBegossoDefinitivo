<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produto;

class ProdutoController extends Controller
{
    public function create(){
        return view('produto.createProduto');
    }

    public function store(Request $request){
        produto::create([
            'tipojogo_id'=>$request->tipojogo_id,
            'tipo_plataforma_id'=>$request->tipo_plataforma_id,
            'descricaoproduto'=>$request->descricaoproduto,
            'quantidadeEstoque'=>$request->quantidadeEstoque,
            'valorCompra'=>$request->valorCompra,
            'valorVenda'=>$request->valorVenda,
            'dataLancamento'=>$request->dataLancamento,
            'empresa'=>$request->empresa,
            'classificacaoEtaria'=>$request->classificacaoEtaria,
            'classificacaoQuantidade'=>$request->classificacaoQuantidade,
        ]);
        return view('welcome');
    }


    public function show(){
        $produto = produto::all();
        return view('produto.listarProduto',['produto' => $produto]);
    }

    public function destroy($id){
        $produto = produto::findOrFail($id);
        $produto->delete();
        return view('welcome');
    }

    public function edit($id){
        $produto = produto::findOrFail($id);
        return view('produto.editarProduto',['produto' => $produto]);
    }

    public function update(Request $request, $id){
        $produto = produto::findOrFail($id);
        $produto -> update([
            'tipojogo_id'=>$request->tipojogo_id,
            'tipo_plataforma_id'=>$request->tipo_plataforma_id,
            'descricaoproduto'=>$request->descricaoproduto,
            'quantidadeEstoque'=>$request->quantidadeEstoque,
            'valorCompra'=>$request->valorCompra,
            'valorVenda'=>$request->valorVenda,
            'dataLancamento'=>$request->dataLancamento,
            'empresa'=>$request->empresa,
            'classificacaoEtaria'=>$request->classificacaoEtaria,
            'classificacaoQuantidade'=>$request->classificacaoQuantidade,
        ]);
        return view('welcome');
    }
}
