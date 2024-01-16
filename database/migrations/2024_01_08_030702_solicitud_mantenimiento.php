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
            Schema::create('solicitud_mantenimiento', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_solicitud')->useCurrent();
            $table->time('hora_solicitud');
            $table->integer('Kilometraje_actual');
            $table->string('observaciones');
            $table->integer('policia_id');
             $table->integer('vehiculo_id');
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
        Schema::dropIfExists('solicitud_mantenimiento');
    }
};
