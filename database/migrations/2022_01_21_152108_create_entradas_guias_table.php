<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradasGuiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradas_guias', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('guia')->unique();
            $table->double('peso_diferencia');
            $table->double('peso_entrada');
            $table->double('largo');
            $table->double('ancho');
            $table->double('alto');
            $table->double('peso_volumetrico')->storedAs('(alto * ancho * largo) / 129360')->nullable();
            $table->double('volumen')->storedAs('alto * ancho * largo')->nullable();

            $table->unsignedBigInteger('guia_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('entradas_guias');
    }
}
