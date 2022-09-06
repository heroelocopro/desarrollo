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
        Schema::create('filtros', function (Blueprint $table) {
            $table->id();
            $table->integer('edad_inicio');
            $table->integer('edad_final');
            $table->string('comuna');
            $table->string('barrio');
            $table->string('organizacion');
            $table->unsignedBigInteger('grupo_poblacional_id');
            $table->foreign('grupo_poblacional_id')->references('id')->on('grupo_poblacionals');
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
        Schema::dropIfExists('filtros');
    }
};
