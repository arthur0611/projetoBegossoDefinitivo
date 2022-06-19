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
        return view('welcome');
    }

    public function show(){
        $tipojogos = tipo_jogo::all();
        return view('tipoJogos.listar',['tipojogos' => $tipojogos]);
    }

    public function relatorio(){
        $tipojogos = tipo_jogo::all();
        return view('tipoJogos.relatorioTipoJogo',['tipojogos' => $tipojogos]);
    }

    public function destroy($id){
        $tipojogos = tipo_jogo::findOrFail($id);
        $tipojogos->delete();
        return view('welcome');
    }

    public function edit($id){
        $tipojogo = tipo_jogo::findOrFail($id);
        return view('tipoJogos.editar',['tipojogo' => $tipojogo]);
    }

    public function update(Request $request, $id){
        $tipojogo = tipo_jogo::findOrFail($id);
        $tipojogo -> update([
            'descricao' => $request->descricao 
        ]);
        return view('welcome');
    }
}
