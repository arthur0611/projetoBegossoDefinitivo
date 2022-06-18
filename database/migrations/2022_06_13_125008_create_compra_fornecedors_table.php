<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraFornecedorsTable extends Migration
{
    public function up()
    {
        Schema::create('compra_fornecedors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Fornecedor_id')->constrained('fornecedors')->onDelete('cascade')->onUpdate('cascade');
            $table->string("dataCompra");
            $table->integer('totalComprado');
            $table->float('valorTotalCFornecedores');
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
        Schema::dropIfExists('compra_fornecedors');
    }
}
