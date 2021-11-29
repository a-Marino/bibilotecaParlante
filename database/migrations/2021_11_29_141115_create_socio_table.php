<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socio', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre_socio');
            $table->string('apellido_socio');
            $table->date('fecha_nac_socio');
            $table->integer('edad');
            $table->integer('documento');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socio');
    }
}
