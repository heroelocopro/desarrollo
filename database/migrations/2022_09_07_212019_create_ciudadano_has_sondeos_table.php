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
        Schema::create('ciudadano_has_sondeos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ciudadano_usuario_idusuario');
            $table->foreign('ciudadano_usuario_idusuario')->references('id')->on('usuarios');
            $table->unsignedBigInteger('ciudadano_sexo_idsexo');
            $table->foreign('ciudadano_sexo_idsexo')->references('id')->on('sexos');
            $table->unsignedBigInteger('ciudadano_tipodoc_idtipo');
            $table->foreign('ciudadano_tipodoc_idtipo')->references('id')->on('tipodocs');
            $table->unsignedBigInteger('ciudadano_nivel_edu_idnivel');
            $table->foreign('ciudadano_nivel_edu_idnivel')->references('id')->on('nivel_edus');
            $table->unsignedBigInteger('ciudadano_condicion_idcondicion');
            $table->foreign('ciudadano_condicion_idcondicion')->references('id')->on('condicions');
            $table->unsignedBigInteger('ciudadano_dispositivos_id');
            $table->foreign('ciudadano_dispositivos_id')->references('id')->on('dispositivo_tecnologicos');
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
        Schema::dropIfExists('ciudadano_has_sondeos');
    }
};
