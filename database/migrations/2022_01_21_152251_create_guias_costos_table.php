<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuiasCostosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guias_costos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('guia')->unique();
            $table->double('flete')->nullable();
            $table->double('impuesto')->nullable();
            $table->double('seguro')->nullable();
            $table->double('delivery')->nullable();
            $table->double('agencia')->nullable();
            $table->double('paq_extragrande')->nullable();
            $table->double('sobrepeso')->nullable();
            $table->double('valor_declarado')->nullable();
            $table->double('valor_asegurado')->nullable();
            $table->double('descuento')->nullable();
            $table->double('precio_libra')->nullable();
            $table->string('tipo_pago')->nullable();
            $table->double('total')->nullable();

            $table->unsignedBigInteger('guia_id');
            $table->unsignedBigInteger('embarque_id');
            $table->unsignedBigInteger('tarifa_id');
            $table->foreign('embarque_id')->references('id')->on('tipo_embarques');
            $table->foreign('tarifa_id')->references('id')->on('tarifas');
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
        Schema::dropIfExists('guias_costos');
    }
}
