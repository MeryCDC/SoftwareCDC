<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutasGuiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas_guias', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('guia')->unique();
            $table->string('estatus')->nullable();
            $table->unsignedBigInteger('guia_id');
            $table->unsignedBigInteger('reporte_id');
            $table->foreign('guia_id')->references('id')->on('guias');
            $table->foreign('reporte_id')->references('id')->on('reporte_rutas');
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
        Schema::dropIfExists('rutas_guias');
    }
}
