<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalidasGuiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salidas_guias', function (Blueprint $table) {
            $table->engine="InnoDB"; //Permite el borrado en cascada
            
            $table->id();
            $table->string('guia')->unique();
            $table->double('peso_salida', 8, 2);
            $table->double('peso_diferencia', 8, 2);
            $table->string("guia_transportadora");
           
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
        Schema::dropIfExists('salidas_guias');
    }
}
