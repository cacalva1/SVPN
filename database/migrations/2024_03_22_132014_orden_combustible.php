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
        Schema::create('ordenCombustible', function (Blueprint $table) {
            $table->id();
            $table->integer('cantGalonesGasolina');
               // Clave foránea para la tabla policia
            $table->unsignedBigInteger('id_policia');
            $table->foreign('id_policia')->references('id')->on('policias')->onDelete('cascade');
            
    // Clave foránea para la tabla vehiculo
            $table->unsignedBigInteger('id_vehiculo');
            $table->foreign('id_vehiculo')->references('id')->on('vehiculos')->onDelete('cascade');
            
            $table->string('kilometraje_actual');
            $table->string('nombre_gasolinera');
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
        Schema::dropIfExists('ordenCombustible');
    }
};
