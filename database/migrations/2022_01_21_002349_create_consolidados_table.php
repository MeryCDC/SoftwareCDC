<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsolidadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consolidados', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('comentarios');
            $table->unsignedBigInteger('origen');
            $table->unsignedBigInteger('destino');

            $table->foreign('origen')->references('id')->on('transportadoras');
            $table->foreign('destino')->references('id')->on('transportadoras');
        });
    }

    public function down()
    {
        Schema::dropIfExists('consolidados');
    }
}
