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
        Schema::create('dependencias', function (Blueprint $table) {
            $table->id();
            $table->string('cod_circuito');
            $table->string('cod_distrito');
            $table->string('cod_subcircuito');
            $table->string('estado');
            $table->string('nombre_circuito');
            $table->string('nombre_distrito');
            $table->string('nombre_subcircuito');
            $table->integer('num_circuitos');
            $table->integer('num_distritos');
            $table->integer('num_subcircuitos');            
            $table->string('parroquia');
            $table->string('provincia');
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
        Schema::dropIfExists('dependencias');
    }
};
