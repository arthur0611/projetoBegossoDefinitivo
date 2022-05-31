<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipo_jogo;

class TipoJogosController extends Controller
{
    public function create(){
        return view('tipoJogos.create');
    }

    public function store(Request $request){
        tipo_jogo::create([
            'descricao' => $request->descricao,
        ]);
        return "Tipo de Jogo Salvo com sucesso";
    }
}
