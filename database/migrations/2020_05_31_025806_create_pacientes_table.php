<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->char('primer_nombre', 20);
            $table->char('segundo_nombre', 20)->nullable();
            $table->char('primer_apelido', 20);
            $table->char('segundo_apelido', 20)->nullable();
            $table->integer('documento')->unsigned();;
            $table->char('correo', 100)->nullable();
            $table->char('telefono', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
