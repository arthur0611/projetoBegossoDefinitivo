<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Cliente_id')->constrained('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('Funcionario_id')->constrained('funcionarios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('Produto_id')->constrained('produtos')->onDelete('cascade')->onUpdate('cascade');
            $table->string("dataCompra");
            $table->integer('quantidadeCompra');
            $table->float('TotalVenda');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('vendas');
    }
}
