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



//Funcionario
    //post
    Route::get('funcionario/novo','FuncionarioController@create');
    Route::post('funcionario/novo','FuncionarioController@store')->name('salvar_funcionario');
     //read
    Route::get('/funcionario/listar','FuncionarioController@show');
        //delete
    Route::get('/funcionario/del/{id}','FuncionarioController@destroy')->name('excluir_funcionario');
        //edit
    Route::get('/funcionario/edit/{id}','FuncionarioController@edit')->name('editar_funcionario');
    Route::post('/funcionario/edit/{id}','FuncionarioController@update')->name('atualizar_funcionario');
    

    


//Cliente
    //post
    Route::get('cliente/novo','ClienteController@create');
    Route::post('cliente/novo','ClienteController@store')->name('salvar_cliente');
        //read
    Route::get('/cliente/listar','ClienteController@show');
        //delete
    Route::get('/cliente/del/{id}','ClienteController@destroy')->name('excluir_cliente');
        //edit
    Route::get('/cliente/edit/{id}','ClienteController@edit')->name('editar_cliente');
    Route::post('/cliente/edit/{id}','ClienteController@update')->name('atualizar_cliente');



//Fornecedor
    //post
    Route::get('fornecedor/novo','FornecedoresController@create');
    Route::post('fornecedor/novo','FornecedoresController@store')->name('salvar_fornecedor');
        //read
    Route::get('/fornecedor/listar','FornecedoresController@show');
        //delete
    Route::get('/fornecedor/del/{id}','FornecedoresController@destroy')->name('excluir_fornecedor');
        //edit
    Route::get('/fornecedor/edit/{id}','FornecedoresController@edit')->name('editar_fornecedor');
    Route::post('/fornecedor/edit/{id}','FornecedoresController@update')->name('atualizar_fornecedor');



