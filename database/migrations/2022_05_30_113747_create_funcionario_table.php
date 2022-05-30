<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('idade');
            $table->string('email');
            $table->string('cidade');
            $table->string('rua');
            $table->string('cpf');
            $table->string('bairro');
            $table->string('estado');
            $table->string('complemento');
            $table->string('salario');
            $table->string('dataadmissao');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('funcionario');
    }
}
