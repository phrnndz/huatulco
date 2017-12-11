<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleos', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nombreOferta');
            $table->string('nombreEmpresa');
            $table->string('nombreContacto');
            $table->string('telefonoContacto');
            $table->string('correoContacto');
            $table->float('salario',8,2);
            $table->string('tipoContrato');
            $table->datetime('ubicacion');
            $table->string('vigencia');
            $table->string('horario');
            $table->string('descripcion');
            $table->string('idiomas');
            $table->string('nivelEstudios');
            $table->string('competencias');
            $table->integer('numeroPlazas');
            $table->integer('diasLaborales');
            $table->enum('estatus', ['1', '0'])->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleos');
    }
}
