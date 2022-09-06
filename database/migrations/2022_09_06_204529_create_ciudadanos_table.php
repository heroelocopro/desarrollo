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
        Schema::create('ciudadanos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('num_docs');
            $table->string('nombres');
            $table->string('apellidos');
            $table->bigInteger('tel_cel')->nullable();
            $table->bigInteger('tel_fijo')->nullable();
            $table->string('correo_elec');
            $table->string('municipio');
            $table->string('barrio');
            $table->date('fecha_nac');
            $table->string('etnia');
            $table->string('cond_disca');
            $table->string('conec_inter');
            $table->unsignedBigInteger('usuario_idusuario');
            $table->foreign('usuario_idusuario')->references('id')->on('usuarios');
            $table->unsignedBigInteger('sexo_idsexo');
            $table->foreign('sexo_idsexo')->references('id')->on('sexos');
            $table->unsignedBigInteger('tipodoc_idtipodoc');
            $table->foreign('tipodoc_idtipodoc')->references('id')->on('tipodocs');
            $table->unsignedBigInteger('nivel_edu_idnivel');
            $table->foreign('nivel_edu_idnivel')->references('id')->on('nivel_edus');
            $table->unsignedBigInteger('condicion_idcondicion');
            $table->foreign('condicion_idcondicion')->references('id')->on('condicions');
            $table->unsignedBigInteger('dispositivos_tecnologicos_iddispositivos');
            $table->foreign('dispositivos_tecnologicos_iddispositivos')->references('id')->on('dispositivo_tecnologicos');
            $table->unsignedBigInteger('estrato_idestrato');
            $table->foreign('estrato_idestrato')->references('id')->on('estratos');
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
        Schema::dropIfExists('ciudadanos');
    }
};
