<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarimasGuiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarimas_guias', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('guia')->unique();
            $table->unsignedBigInteger('guia_id');
            $table->unsignedBigInteger('tarimas_id');
            $table->foreign('guia_id')->references('id')->on('guias');
            $table->foreign('tarimas_id')->references('id')->on('tarimas');
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
        Schema::dropIfExists('tarimas_guias');
    }
}
