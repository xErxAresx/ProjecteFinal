<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tema_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('respuesta');
            $table->string('fecha');
            $table->timestamps();
        });

        Schema::table('respuestas', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('tema_id')->references('id')->on('temas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
