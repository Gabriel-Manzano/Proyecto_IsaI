<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVuelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->string('numero_vuelo');  // Número del vuelo
            $table->string('aerolinea');     // Nombre de la aerolínea
            $table->decimal('precio', 8, 2); // Precio del vuelo
            $table->boolean('has_stopovers'); // Si tiene escalas
            $table->timestamp('departure_time'); // Hora de salida
            $table->timestamp('arrival_time');  // Hora de llegada
            $table->integer('duracion_vuelo');  // Duración del vuelo en minutos
            $table->integer('escalas')->default(0); // Número de escalas, predeterminado en 0
            $table->string('origen');  // Origen del vuelo
            $table->string('destino'); // Destino del vuelo
            $table->integer('pasajeros')->default(0); // Pasajeros del vuelo
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
        Schema::dropIfExists('vuelos');
    }
}
