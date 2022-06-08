<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;

class ClienteController extends Controller
{
    public function create(){
        return view('cliente.createCliente');
    }

    public function store(Request $request){
        cliente::create([
            'nome'=>$request->nome,
            'idade'=>$request->idade,
            'email'=>$request->email,
            'telefone'=>$request->telefone,
            'cidade'=>$request->cidade,
            'estado'=>$request->estado,
            'bairro'=>$request->bairro,
            'rua'=>$request->rua,
            'cpf'=>$request->cpf,
        ]);
        return view('welcome');
    }

    public function show(){
        $cliente = cliente::all();
        return view('cliente.listarCliente',['cliente' => $cliente]);
    }

    
    public function destroy($id){
        $cliente = cliente::findOrFail($id);
        $cliente->delete();
        return view('welcome');
    }

    public function edit($id){
        $cliente = cliente::findOrFail($id);
        return view('cliente.editarcliente',['cliente' => $cliente]);
    }

    public function update(Request $request, $id){
        $cliente = cliente::findOrFail($id);
        $cliente -> update([
            'nome'=>$request->nome,
            'idade'=>$request->idade,
            'email'=>$request->email,
            'telefone'=>$request->telefone,
            'cidade'=>$request->cidade,
            'estado'=>$request->estado,
            'bairro'=>$request->bairro,
            'rua'=>$request->rua,
            'cpf'=>$request->cpf,
        ]);
        return view('welcome');
    }
}
