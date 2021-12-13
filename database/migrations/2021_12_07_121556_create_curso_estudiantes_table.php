<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_estudiantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('calendario_id')->unsigned()->default(189);
            $table->foreign('calendario_id')->references('id')->on('calendarios');
            $table->integer('periodo_id')->unsigned()->default(189);
            $table->foreign('periodo_id')->references('id')->on('periodos');
            $table->integer('curso_alumno_id')->unsigned()->default(189);
            $table->foreign('curso_alumno_id')->references('id')->on('cursos');
            $table->integer('tipo_condicion_alumno_id')->unsigned()->default(189);
            $table->foreign('tipo_condicion_alumno_id')->references('id')->on('tipo_condicions');
            $table->integer('nivel_alumno_id')->unsigned()->default(189);
            $table->foreign('nivel_alumno_id')->references('id')->on('nivels');
            $table->integer('alumno_id')->unsigned()->default(189);
            $table->foreign('alumno_id')->references('id')->on('estudiantes');
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
        Schema::dropIfExists('curso_estudiantes');
    }
}
