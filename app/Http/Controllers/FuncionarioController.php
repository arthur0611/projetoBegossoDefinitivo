<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\funcionario;

class FuncionarioController extends Controller
{
    public function create(){
        return view('funcionario.createFuncionario');
    }

    public function store(Request $request){
        funcionario::create([
            'nome'=>$request->nome,
            'idade'=>$request->idade,
            'email'=>$request->email,
            'cidade'=>$request->cidade,
            'rua'=>$request->rua,
            'cpf'=>$request->cpf,
            'bairro'=>$request->bairro,
            'estado'=>$request->estado,
            'complemento'=>$request->complemento,
            'salario'=>$request->salario,
            'dataAdmissao'=>$request->dataAdmissao,
        ]);
        return view('welcome');
    }

    public function show(){
        $funcionario = funcionario::all();
        return view('funcionario.listarFuncionario',['funcionario' => $funcionario]);
    }

    
    public function destroy($id){
        $funcionario = funcionario::findOrFail($id);
        $funcionario->delete();
        return view('welcome');
    }

    public function edit($id){
        $funcionario = funcionario::findOrFail($id);
        return view('funcionario.editarFuncionario',['funcionario' => $funcionario]);
    }

    public function update(Request $request, $id){
        $funcionario = funcionario::findOrFail($id);
        $funcionario -> update([
            'nome'=>$request->nome,
            'idade'=>$request->idade,
            'email'=>$request->email,
            'cidade'=>$request->cidade,
            'rua'=>$request->rua,
            'cpf'=>$request->cpf,
            'bairro'=>$request->bairro,
            'estado'=>$request->estado,
            'complemento'=>$request->complemento,
            'salario'=>$request->salario,
            'dataAdmissao'=>$request->dataAdmissao,
        ]);
        return view('welcome');
    }
}
