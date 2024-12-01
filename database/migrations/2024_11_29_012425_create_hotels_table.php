<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->decimal('price', 8, 2);
            $table->unsignedTinyInteger('stars');
            $table->string('type');
            $table->json('amenities');
            $table->timestamps();
            $table->integer('habitaciones');
            $table->integer('huespedes');
            $table->integer('distancia');
        });
    }

    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
