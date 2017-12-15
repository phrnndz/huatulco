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
            $table->string('ubicacion');
            $table->date('vigencia')->default('1900-01-01');
            $table->string('horario')->default('99');;
            $table->string('descripcion');
            $table->string('idiomas');
            $table->string('nivelEstudios');
            $table->integer('numeroPlazas');
            $table->string('diasLaborales');
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
        Schema::dropIfExists('empleos');
    }
}
