<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodegasUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bodegas_users', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('guias')->unique();

            $table->unsignedBigInteger('bodegas_id');
            $table->unsignedBigInteger('users_id');
            $table->foreign('bodegas_id')->references('id')->on('bodegas');
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
        Schema::dropIfExists('bodegas_users');
    }
}
