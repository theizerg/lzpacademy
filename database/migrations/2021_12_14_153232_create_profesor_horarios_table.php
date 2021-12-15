<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesorHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesor_horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carga_horaria_id')->unsigned()->default(189);
            $table->foreign('carga_horaria_id')->references('id')->on('carga_horarias');
            $table->integer('calendario_id')->unsigned()->default(189);
            $table->foreign('calendario_id')->references('id')->on('calendarios');
            $table->integer('periodo_id')->unsigned()->default(189);
            $table->foreign('periodo_id')->references('id')->on('periodos');
            $table->integer('profesor_id')->unsigned()->default(189);
            $table->foreign('profesor_id')->references('id')->on('profesores');
            $table->integer('curso_id')->unsigned()->default(189);
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->integer('nivel_id')->unsigned()->default(189);
            $table->foreign('nivel_id')->references('id')->on('nivels');
            $table->integer('turno_id')->unsigned()->default(189);
            $table->foreign('turno_id')->references('id')->on('turnos');
            $table->integer('dia_semana_id')->unsigned()->default(189);
            $table->foreign('dia_semana_id')->references('id')->on('dia_semanas');
            $table->string('fecha_ingreso');
            $table->string('tx_observaciones');
            $table->smallInteger('status');            
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
        Schema::dropIfExists('profesor_horarios');
    }
}
