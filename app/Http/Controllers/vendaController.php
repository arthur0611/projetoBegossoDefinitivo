<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\venda;

class vendaController extends Controller
{
    public function create(){
        return view('venda.createVenda');
    }

    public function store(Request $request){
        venda::create([
            'Cliente_id'=>$request->Cliente_id,
            'Funcionario_id'=>$request->Funcionario_id,
            'Produto_id'=>$request->Produto_id,
            'dataCompra'=>$request->dataCompra,
            'quantidadeCompra'=>$request->quantidadeCompra,
            'TotalVenda'=>$request->TotalVenda,
        ]);
        return view('welcome');
    }


    public function show(){
        $venda = venda::all();
        return view('venda.listarVenda',['venda' => $venda]);
    }

    public function destroy($id){
        $venda = venda::findOrFail($id);
        $venda->delete();
        return view('welcome');
    }

    public function edit($id){
        $venda = venda::findOrFail($id);
        return view('venda.editarVenda',['venda' => $venda]);
    }

    public function update(Request $request, $id){
        $venda = venda::findOrFail($id);
        $venda -> update([
            'Cliente_id'=>$request->Cliente_id,
            'Funcionario_id'=>$request->Funcionario_id,
            'Produto_id'=>$request->Produto_id,
            'dataCompra'=>$request->dataCompra,
            'quantidadeCompra'=>$request->quantidadeCompra,
            'TotalVenda'=>$request->TotalVenda,
        ]);
        return view('welcome');
    }
}


