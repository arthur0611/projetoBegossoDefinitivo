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
        //relatorio
    Route::get('/cliente/relatorio','ClienteController@relatorio');

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
        //relatorio
    Route::get('/fornecedor/relatorio','FornecedoresController@relatorio');
        //delete
    Route::get('/fornecedor/del/{id}','FornecedoresController@destroy')->name('excluir_fornecedor');
        //edit
    Route::get('/fornecedor/edit/{id}','FornecedoresController@edit')->name('editar_fornecedor');
    Route::post('/fornecedor/edit/{id}','FornecedoresController@update')->name('atualizar_fornecedor');


//Produto
 //post
    Route::get('produto/novo','ProdutoController@create');
    Route::post('produto/novo','ProdutoController@store')->name('salvar_produto');
 //read
    Route::get('/produto/listar','ProdutoController@show');
 //delete
 Route::get('/produto/del/{id}','ProdutoController@destroy')->name('excluir_produto');
 //edit
Route::get('/produto/edit/{id}','ProdutoController@edit')->name('editar_produto');
Route::post('/produto/edit/{id}','ProdutoController@update')->name('atualizar_produto');

//Venda
    //post
    Route::get('venda/novo','vendaController@create');
    Route::post('venda/novo','vendaController@store')->name('salvar_venda');
    //read
    Route::get('/venda/listar','vendaController@show');
    //delete
    Route::get('/venda/del/{id}','vendaController@destroy')->name('excluir_venda');
    //edit
    Route::get('/venda/edit/{id}','vendaController@edit')->name('editar_venda');
    Route::post('/venda/edit/{id}','vendaController@update')->name('atualizar_venda');


//Compra fornecedores
       //post
       Route::get('compraFornecedores/novo','compraFornecedoresController@create');
       Route::post('compraFornecedores/novo','compraFornecedoresController@store')->name('salvar_compraFornecedores');
       //read
       Route::get('/compraFornecedores/listar','compraFornecedoresController@show');
       //delete
       Route::get('/compraFornecedores/del/{id}','compraFornecedoresController@destroy')->name('excluir_compraFornecedores');
       //edit
       Route::get('/compraFornecedores/edit/{id}','compraFornecedoresController@edit')->name('editar_compraFornecedores');
       Route::post('/compraFornecedores/edit/{id}','compraFornecedoresController@update')->name('atualizar_compraFornecedores');
   
