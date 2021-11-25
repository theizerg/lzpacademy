<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('periodos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nb_periodo', 30);
            $table->integer('nu_periodo');
            $table->integer('calendario_id')->unsigned()->default(189);
            $table->foreign('calendario_id')->references('id')->on('calendarios');
            $table->string('fe_inicio');
            $table->string('fe_fin');
            $table->smallInteger('status')->default(0);
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
        Schema::dropIfExists('periodos');
    }
}
