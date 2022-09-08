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
        Schema::create('sondeos', function (Blueprint $table) {
            $table->id();
            $table->string('tema');
            $table->date('fecha_inicio');
            $table->time('hora_inicio');
            $table->string('tipo');
            $table->date('fecha_cierre');
            $table->string('icono');
            $table->time('hora_cierre');
            $table->date('fecha_pub');
            $table->time('hora_pub');
            $table->unsignedBigInteger('administrador_idadministrador');
            $table->foreign('administrador_idadministrador')->references('id')->on('administradors');
            $table->unsignedBigInteger('administrador_usuario_idusuario');
            $table->foreign('administrador_usuario_idusuario')->references('usuario_idusuario')->on('administradors');
            $table->unsignedBigInteger('preguntas_idpreguntas');
            $table->foreign('preguntas_idpreguntas')->references('id')->on('preguntas');
            $table->unsignedBigInteger('confirmacion_voto_idconfirmacion');
            $table->foreign('confirmacion_voto_idconfirmacion')->references('id')->on('confirmacion_votos');
            $table->unsignedBigInteger('filtro_idfiltro');
            $table->foreign('filtro_idfiltro')->references('id')->on('filtros');
            $table->unsignedBigInteger('filtro_grupo_poblacional_idgrupo');
            $table->foreign('filtro_grupo_poblacional_idgrupo')->references('grupo_poblacional_id')->on('filtros');
            $table->unsignedBigInteger('condicion_idcondicion');
            $table->foreign('condicion_idcondicion')->references('id')->on('condicions');
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
        Schema::dropIfExists('sondeos');
    }
};
