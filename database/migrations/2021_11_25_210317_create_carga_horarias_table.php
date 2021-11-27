<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargaHorariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carga_horarias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nb_carga_horaria', 80);
            $table->integer('hora_academica_id');
            $table->integer('nu_orden');
            $table->string('hh_inicio');
            $table->string('hh_fin');
            $table->integer('turno_id');
            $table->integer('bo_receso');
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
        Schema::dropIfExists('carga_horarias');
    }
}
