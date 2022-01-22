<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuiasTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guias_trans', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('guia')->unique();
            $table->unsignedBigInteger('guia_id');
            $table->unsignedBigInteger('transportadoras_id');
            $table->foreign('guia_id')->references('id')->on('guias');
            $table->foreign('transportadoras_id')->references('id')->on('transportadoras');
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
        Schema::dropIfExists('guias_trans');
    }
}
