<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fornecedor;

class FornecedoresController extends Controller
{
    public function create(){
        return view('fornecedor.createFornecedor');
    }

    public function store(Request $request){
        fornecedor::create([
            'nome'=>$request->nome,
            'cnpj'=>$request->cnpj,
            'nomeFantasia'=>$request->nomeFantasia,
            'endereco'=>$request->endereco,
            'contato'=>$request->contato,
            'cep'=>$request->cep,
            'site'=>$request->site,
        ]);
        return view('welcome');
    }

    public function show(){
        $fornecedor = fornecedor::all();
        return view('fornecedor.listarFornecedores',['fornecedor' => $fornecedor]);
    }

    public function relatorio(){
        $fornecedor = fornecedor::all();
        return view('fornecedor.relatorioFornecedores',['fornecedor' => $fornecedor]);
    } 
    
    public function destroy($id){
        $fornecedor = fornecedor::findOrFail($id);
        $fornecedor->delete();
        return view('welcome');
    }

    public function edit($id){
        $fornecedor = fornecedor::findOrFail($id);
        return view('fornecedor.editarFornecedor',['fornecedor' => $fornecedor]);
    }

    public function update(Request $request, $id){
        $fornecedor = fornecedor::findOrFail($id);
        $fornecedor -> update([
            'nome'=>$request->nome,
            'cnpj'=>$request->cnpj,
            'nomeFantasia'=>$request->nomeFantasia,
            'endereco'=>$request->endereco,
            'contato'=>$request->contato,
            'cep'=>$request->cep,
            'site'=>$request->site,
        ]);
        return view('welcome');
    }
}
