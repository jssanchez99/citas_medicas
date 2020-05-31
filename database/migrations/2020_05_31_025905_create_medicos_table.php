<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();
            $table->char('primer_nombre', 20);
            $table->char('segundo_nombre', 20)->nullable();
            $table->char('primer_apelido', 20);
            $table->char('segundo_apelido', 20)->nullable();
            $table->integer('documento')->unsigned();;
            $table->char('correo', 100)->nullable();
            $table->char('telefono', 20)->nullable();
            $table->char('tarjeta_profesional', 100)->nullable();
            $table->char('especialidad', 100)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicos');
    }
}
