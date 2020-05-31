<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_medico')->unsigned();
            $table->integer('id_paciente')->unsigned();
            $table->foreign('id_medico')->references('documento')->on('medicos');
            $table->foreign('id_paciente')->references('documento')->on('pacientes');
            $table->date('fecha');
            $table->time('hora', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
