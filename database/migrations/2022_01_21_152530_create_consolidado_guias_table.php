<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsolidadoGuiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consolidado_guias', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('vuelo')->nullable();
            $table->unsignedBigInteger('consolidado_id');
            $table->unsignedBigInteger('guia_id');
            $table->foreign('consolidado_id')->references('id')->on('consolidados');
            $table->foreign('guia_id')->references('id')->on('guias');
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
        Schema::dropIfExists('consolidado_guias');
    }
}
