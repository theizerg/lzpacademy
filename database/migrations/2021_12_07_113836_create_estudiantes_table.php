<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->string('telefono');
            $table->string('fecha_nacimiento');
            $table->string('lugar_nacimiento');
            $table->string('direccion');
            $table->string('tipo_documento');
            $table->string('documento');
            $table->string('edad');
            $table->smallInteger('status')->default(0);
            $table->integer('genero_id')->unsigned()->default(189);
            $table->foreign('genero_id')->references('id')->on('generos');
            $table->integer('estado_civil_id')->unsigned()->default(189);
            $table->foreign('estado_civil_id')->references('id')->on('estado_civils');
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
        Schema::dropIfExists('estudiantes');
    }
}
