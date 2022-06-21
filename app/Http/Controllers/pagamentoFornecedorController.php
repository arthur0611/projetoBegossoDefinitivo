<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pagamentoFornecedor;

class pagamentoFornecedorController extends Controller
{
    public function create(){
        return view('pagamentoFornecedores.createPagamentoFornecedores');
    }

    public function store(Request $request){
        pagamentoFornecedor::create([
            'compra_fornecedors_id' => $request->compra_fornecedors_id,
            'DataPagamento' => $request->DataPagamento,
            'Parcela' => $request->Parcela,
        ]);
        return view('welcome');
    }

    public function show(){
        $pagamentoFornecedor = pagamentoFornecedor::all();
        return view('pagamentoFornecedores.listarPagamentoFornecedores',['pagamentoFornecedor' => $pagamentoFornecedor]);
    }

    public function relatorio(){
        $pagamentoFornecedor = pagamentoFornecedor::all();
        return view('pagamentoFornecedores.relatorioPagamentoFornecedores',['pagamentoFornecedor' => $pagamentoFornecedor]);
    }

    public function destroy($id){
        $pagamentoFornecedor = pagamentoFornecedor::findOrFail($id);
        $pagamentoFornecedor->delete();
        return view('welcome');
    }

    public function edit($id){
        $pagamentoFornecedor = pagamentoFornecedor::findOrFail($id);
        return view('pagamentoFornecedores.editarPagamentoFornecedores',['pagamentoFornecedor' => $pagamentoFornecedor]);
    }

    public function update(Request $request, $id){
        $pagamentoFornecedor = pagamentoFornecedor::findOrFail($id);
        $pagamentoFornecedor -> update([
            'compra_fornecedors_id' => $request->compra_fornecedors_id,
            'DataPagamento' => $request->DataPagamento,
            'Parcela' => $request->Parcela,
        ]);
        return view('welcome');
    }
}
