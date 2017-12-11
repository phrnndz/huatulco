<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nombre');
            $table->char('clasificacion', 10);
            $table->string('duracion', 50);
            $table->string('trailerURL');
            $table->string('imagenURL');
            $table->string('idioma');
            $table->string('horario');
            $table->string('sinopsis');
            $table->enum('estatus', ['1', '0'])->default('0');
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
        Schema::dropIfExists('peliculas');
    }
}
