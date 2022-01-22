<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinatariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinatarios', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('nombre');
            $table->string('telefono', 30);
            $table->string('celular', 100);
            $table->string('pais')->nullable();

            $table->string('direccion')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('barrio')->nullable();
            $table->string('zip', 10)->nullable();

            $table->string('oficina')->nullable();

            $table->unsignedBigInteger('trasnportadora_id');
            $table->unsignedBigInteger('tipo_envio');
            $table->foreign('trasnportadora_id')->references('id')->on('transportadoras');
            $table->foreign('tipo_envio')->references('id')->on('tipo_envios');
            $table->boolean('habilitada');
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
        Schema::dropIfExists('destinatarios');
    }
}
