<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroPrestadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_prestado', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('fecha_salida');
            $table->date('fecha_devolucion');

            $table->unsignedBigInteger('libro_id');
            $table->unsignedBigInteger('socio_id');

            //claves foraneas
            $table->foreign('libro_id')->references('id')->on('libro');
            $table->foreign('socio_id')->references('id')->on('socio');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libro_prestado');
    }
}
