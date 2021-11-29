<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre_curso');
            $table->integer('horario');

            $table->unsignedBigInteger('persona_inscripta_id');

            //clave foreanea
            $table->foreign('persona_inscripta_id')->references('id')->on('persona_inscripta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso');
    }
}
