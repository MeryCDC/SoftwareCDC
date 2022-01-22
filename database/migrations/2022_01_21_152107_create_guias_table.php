<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guias', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('guia')->unique()->nullable();
            $table->string('tracking')->nullable();
            $table->double('peso', 8, 2);
            $table->double('largo');
            $table->double('ancho');
            $table->double('alto');
            $table->string('comentario')->nullable();
            $table->string('contenido')->nullable();
            $table->boolean('habilitada');
            $table->integer('contador');

            $table->unsignedBigInteger('tipo_id');
            $table->unsignedBigInteger('estatus_id');
            $table->unsignedBigInteger('agencia_id');
            $table->unsignedBigInteger('users_id');

            $table->foreign('tipo_id')->references('id')->on('tipo_paquetes');
            $table->foreign('estatus_id')->references('id')->on('estatuses');
            $table->foreign('agencia_id')->references('id')->on('agencias');
            $table->foreign('users_id')->references('id')->on('users');
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
        Schema::dropIfExists('guias');
    }
}
