<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarritosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('carritos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('correo');
            $table->string('telefono');
            $table->string('documento');
            $table->date('fecha_llegada');
            $table->date('fecha_salida');
            $table->integer('num_personas');
            $table->integer('num_adultos');
            $table->integer('num_ninos')->default(0);
            $table->string('tipo_habitacion');
            $table->string('preferencia_cama');
            $table->string('necesidades_especiales')->nullable();
            $table->string('servicios_especiales')->nullable();
            $table->string('preferencia_ubicacion')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('carritos');
    }
}
