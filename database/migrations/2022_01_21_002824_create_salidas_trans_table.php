<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalidasTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salidas_trans', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('operador')->nullable();
            $table->unsignedBigInteger('salidas_id');
            $table->unsignedBigInteger('transportadora_id');
            $table->foreign('salidas_id')->references('id')->on('salidas');
            $table->foreign('transportadora_id')->references('id')->on('transportadoras');
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
        Schema::dropIfExists('salidas_trans');
    }
}
