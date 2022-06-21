<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagamentoClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamento_clientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Vendas_id')->constrained('vendas')->onDelete('cascade')->onUpdate('cascade');
            $table->string("DataPagamento");
            $table->string("Parcela");
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
        Schema::dropIfExists('pagamento_clientes');
    }
}
