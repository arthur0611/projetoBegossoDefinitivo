<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function show(){
        $funcionarios = funcionario::all();
        return view('funcionario.listarFuncionario',['funcionarios' => $funcionarios]);
    }
}
