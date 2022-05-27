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