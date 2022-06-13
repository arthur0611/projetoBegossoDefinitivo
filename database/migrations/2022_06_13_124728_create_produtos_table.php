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
            $table->foreignId('idTipojogo');
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
        Schema::table('produtos',function(Blueprint $table){
            $table->foreignId('idTipojogo')
            ->constained()
            ->onDelete('cascade');
        });
    }
}
