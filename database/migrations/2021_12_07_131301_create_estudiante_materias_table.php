<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudianteMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante_materias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('calendario_id')->unsigned()->default(189);
            $table->foreign('calendario_id')->references('id')->on('calendarios');
            $table->integer('alumno_id')->unsigned()->default(189);
            $table->foreign('alumno_id')->references('id')->on('estudiantes');
            $table->integer('materia_id')->unsigned()->default(189);
            $table->foreign('materia_id')->references('id')->on('materias');
            $table->string('fecha_matricula', 100)->nullable();
            $table->string('tx_observaciones', 100)->nullable();
            $table->integer('status');
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
        Schema::dropIfExists('estudiante_materias');
    }
}
