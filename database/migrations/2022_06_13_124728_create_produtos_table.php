<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipojogo_id')->constrained('tipo_jogos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('tipo_plataforma_id')->constrained('tipo_plataformas')->onDelete('cascade')->onUpdate('cascade');
            $table->string("descricaoproduto");
            $table->integer('quantidadeEstoque');
            $table->float('valorCompra');
            $table->float('valorVenda');
            $table->string("dataLancamento");
            $table->string("empresa");
            $table->string("classificacaoEtaria");
            $table->string("classificacaoQuantidade");
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
        Schema::dropIfExists('produtos');
    }
}
