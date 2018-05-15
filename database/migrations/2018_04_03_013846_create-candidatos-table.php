<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // creacion de tabla candidatos con propuesta id por que al inicio no puede tener propuestas
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('candidato');
            $table->string('partido');
            $table->text('perfil');
            $table->string('nombreprograma');
            $table->string('imagen')->nullable();
            $table->integer('propuesta_id')->nullable();
            // $table->foreign('propuesta_id')->references('id')->on('propuestas');
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
        Schema::dropIfExists('candidatos');
    }
}
