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
            Schema::create('sugerencia', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_solicitud')->useCurrent();
            $table->string('cod_circuito');
            $table->string('cod_subcircuito');
            $table->string('tipo');
             $table->string('detalle');
             $table->string('contacto');
             $table->string('apellidos');
             $table->string('nombres');
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
        Schema::dropIfExists('sugerencia');
    }
};
