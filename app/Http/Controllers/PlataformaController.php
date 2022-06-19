<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipo_plataforma;

class PlataformaController extends Controller
{
    public function create(){
        return view('tipoPlataforma.createPlataforma');
    }

    public function store(Request $request){
        tipo_plataforma::create([
            'descricao'=>$request->descricao,
        ]);
        return view('welcome');
    }

    public function show(){
        $tipoPlataformas = tipo_plataforma::all();
        return view('tipoPlataforma.listarPlataforma',['tipoPlataformas' => $tipoPlataformas]);
    }

    public function relatorio(){
        $tipoPlataformas = tipo_plataforma::all();
        return view('tipoPlataforma.relatorioPlataforma',['tipoPlataformas' => $tipoPlataformas]);
    }

    
    public function destroy($id){
        $tipoPlataforma = tipo_plataforma::findOrFail($id);
        $tipoPlataforma->delete();
        return view('welcome');
    }

    public function edit($id){
        $tipoPlataforma = tipo_plataforma::findOrFail($id);
        return view('tipoPlataforma.editarPlataforma',['tipoPlataforma' => $tipoPlataforma]);
    }

    public function update(Request $request, $id){
        $tipojogo = tipo_plataforma::findOrFail($id);
        $tipojogo -> update([
            'descricao' => $request->descricao 
        ]);
        return view('welcome');
    }
}
