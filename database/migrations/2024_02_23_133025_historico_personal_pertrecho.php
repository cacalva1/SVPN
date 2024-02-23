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
        Schema::create('historico_personal_pertrecho', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_accion')->useCurrent();
            $table->integer('policia_id');
            $table->integer('pertrecho_id');
            $table->integer('accion');
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
        Schema::dropIfExists('historico_personal_pertrecho');
    }
};
