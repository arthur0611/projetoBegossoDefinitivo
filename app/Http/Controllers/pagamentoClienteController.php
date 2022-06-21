<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pagamentoCliente;

class pagamentoClienteController extends Controller
{
    public function create(){
        return view('pagamentoClientes.createPagamentoCliente');
    }

    public function store(Request $request){
        pagamentoCliente::create([
            'Vendas_id' => $request->Vendas_id,
            'DataPagamento' => $request->DataPagamento,
            'Parcela' => $request->Parcela,
        ]);
        return view('welcome');
    }

    public function show(){
        $pagamentoCliente = pagamentoCliente::all();
        return view('pagamentoClientes.listarPagamentoCliente',['pagamentoCliente' => $pagamentoCliente]);
    }

    public function relatorio(){
        $pagamentoCliente = pagamentoCliente::all();
        return view('pagamentoClientes.relatorioPagamentoCliente',['pagamentoCliente' => $pagamentoCliente]);
    }

    public function destroy($id){
        $pagamentoCliente = pagamentoCliente::findOrFail($id);
        $pagamentoCliente->delete();
        return view('welcome');
    }

    public function edit($id){
        $pagamentoCliente = pagamentoCliente::findOrFail($id);
        return view('pagamentoClientes.editarPagamentoCliente',['pagamentoCliente' => $pagamentoCliente]);
    }

    public function update(Request $request, $id){
        $pagamentoCliente = pagamentoCliente::findOrFail($id);
        $pagamentoCliente -> update([
            'Vendas_id' => $request->Vendas_id,
            'DataPagamento' => $request->DataPagamento,
            'Parcela' => $request->Parcela,
        ]);
        return view('welcome');
    }
}
