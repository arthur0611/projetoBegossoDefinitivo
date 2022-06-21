<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagamentoFornecedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamento_fornecedors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('compra_fornecedors_id')->constrained('compra_fornecedors')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('pagamento_fornecedors');
    }
}
