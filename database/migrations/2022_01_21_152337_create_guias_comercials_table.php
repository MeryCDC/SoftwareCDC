<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuiasComercialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guias_comercials', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('guia')->unique();
            $table->string('referencia')->nullable();
            $table->string('tracking')->nullable();
            $table->unsignedBigInteger('guia_id');
            $table->unsignedBigInteger('socio_id');
            $table->foreign('guia_id')->references('id')->on('guias');
            $table->foreign('socio_id')->references('id')->on('socio_comercials');
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
        Schema::dropIfExists('guias_comercials');
    }
}
