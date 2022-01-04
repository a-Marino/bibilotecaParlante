<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombreLibro');
            $table->integer('anio');
            $table->integer('stock');
            $table->string('imagen_portada');

              $table->unsignedBigInteger('editorial_id');
              $table->unsignedBigInteger('autor_id');
              $table->unsignedBigInteger('genero_id');

            //claves foraneas
           $table->foreign('editorial_id')->references('id')->on('editorial')->onDelete('cascade')->onUpdate('cascade');
           $table->foreign('autor_id')->references('id')->on('autor');
           $table->foreign('genero_id')->references('id')->on('genero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libro');
    }
}
