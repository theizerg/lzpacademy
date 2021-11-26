<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoraAcademicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hora_academicas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nb_hora_academica', 80);
            $table->integer('nivel_id')->unsigned()->default(189);
            $table->foreign('nivel_id')->references('id')->on('nivels');
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
        Schema::dropIfExists('hora_academicas');
    }
}
