<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // creando propuestas
    // el key es la llave primaria, mientras id es la llave foranea con candidatos propuesta_id
    public function up()
    {
        Schema::create('propuestas', function (Blueprint $table) {
            $table->increments('key');
            $table->integer('id');
            $table->string('descripcionpropuesta');
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
        Schema::dropIfExists('propuestas');
    }
}
