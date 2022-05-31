<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente', function () {
        return view('./cliente/listarCliente');
});




//funcionario
Route::get('/funcionario', function () {
    return view('./funcionario/listarFuncionario');
});

Route::get('/funcionario/editar', function () {
    return view('./funcionario/EditarFuncionario');
});

Route::get('/funcionario/cadastrar', function () {
    return view('./funcionario/CadastrarFuncionario');
});

Route::get('/funcionario/deletar', function () {
    return view('./funcionario/DeletarFuncionario');
});


//Tipo Jogos
    //post
Route::get('tipoJogo/novo','TipoJogosController@create');
Route::post('tipoJogo/novo','TipoJogosController@store')->name('salvar_tipoJogo');
    //read
Route::get('/tipoJogo/listar','TipoJogosController@show');
    //delete
Route::get('/tipoJogo/del/{id}','TipoJogosController@destroy')->name('excluir_tipoJogo');
    //edit
Route::get('/tipoJogo/edit/{id}','TipoJogosController@edit')->name('editar_tipoJogo');
Route::post('/tipoJogo/edit/{id}','TipoJogosController@update')->name('atualizar_tipoJogo');


//Tipo Plataforma
    //post
Route::get('tipoPlataforma/novo','PlataformaController@create');
Route::post('tipoPlataforma/novo','PlataformaController@store')->name('salvar_tipoPlataforma');
    //read
Route::get('/tipoPlataforma/listar','PlataformaController@show');
    //delete
Route::get('/tipoPlataforma/del/{id}','PlataformaController@destroy')->name('excluir_tipoPlataforma');
    //edit
Route::get('/tipoPlataforma/edit/{id}','PlataformaController@edit')->name('editar_tipoPlataforma');
Route::post('/tipoPlataforma/edit/{id}','PlataformaController@update')->name('atualizar_tipoPlataforma');