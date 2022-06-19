<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\compraFornecedor;

class compraFornecedoresController extends Controller
{
    public function create(){
        return view('compraFornecedores.createCompraFornecedor');
    }

    public function store(Request $request){
        compraFornecedor::create([
            'Fornecedor_id'=>$request->Fornecedor_id,
            'Produto_id'=>$request->Produto_id,
            'dataCompra'=>$request->dataCompra,
            'totalComprado'=>$request->totalComprado,
            'valorTotalCFornecedores'=>$request->valorTotalCFornecedores,
        ]);
        return view('welcome');
    }


    public function show(){
        $compraFornecedor = compraFornecedor::all();
        return view('compraFornecedores.listarCompraFornecedores',['compraFornecedor' => $compraFornecedor]);
    }

    public function relatorio(){
        $compraFornecedor = compraFornecedor::all();
        return view('compraFornecedores.relatoriocompraFornecedores',['compraFornecedor' => $compraFornecedor]);
    }

    public function destroy($id){
        $compraFornecedor = compraFornecedor::findOrFail($id);
        $compraFornecedor->delete();
        return view('welcome');
    }

    public function edit($id){
        $compraFornecedor = compraFornecedor::findOrFail($id);
        return view('compraFornecedores.editarCompraFornecedores',['compraFornecedor' => $compraFornecedor]);
    }

    public function update(Request $request, $id){
        $compraFornecedor = compraFornecedor::findOrFail($id);
        $compraFornecedor -> update([
            'Fornecedor_id'=>$request->Fornecedor_id,
            'Produto_id'=>$request->Produto_id,
            'dataCompra'=>$request->dataCompra,
            'totalComprado'=>$request->totalComprado,
            'valorTotalCFornecedores'=>$request->valorTotalCFornecedores,
        ]);
        return view('welcome');
    }
}
