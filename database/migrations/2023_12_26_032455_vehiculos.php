<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_vehiculo');
            $table->string('placa')->unique();
            $table->string('chasis')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('motor')->nullable();
            $table->integer('kilometraje')->nullable();
            $table->integer('cilindraje');
            $table->integer('capacidad_carga');
            $table->integer('capacidad_pasajeros');
            $table->string('estado')->default('ACTIVO');
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
        Schema::dropIfExists('vehiculos');
        
    }
};
