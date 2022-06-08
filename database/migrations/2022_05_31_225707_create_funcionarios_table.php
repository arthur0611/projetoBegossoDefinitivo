<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("idade");
            $table->string("email");
            $table->string("cidade");
            $table->string("rua");
            $table->string("cpf");
            $table->string("bairro");
            $table->string("estado");
            $table->string("complemento");
            $table->string("salario");
            $table->string("dataAdmissao");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
