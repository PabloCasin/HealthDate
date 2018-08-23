<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facultativos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('colegiado');
            $table->string('tratamiento');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('segundoApellido');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->string('direccion');
            $table->string('cp');
            $table->string('localidad');
            $table->string('provincia');
            $table->string('fotografia');
            $table->integer('especialidad_id');
            
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
        Schema::dropIfExists('facultativos');
    }
}
