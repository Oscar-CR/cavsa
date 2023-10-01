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
        Schema::create('cobre_order', function (Blueprint $table) {
            $table->id();
            $table->string('telefono')->nullable();
            $table->string('tipo_os');
            $table->string('numero_os');
            $table->string('status')->nullable();
            $table->string('pysa')->nullable();
            $table->time('hora_llegada')->nullable();
            $table->date('fecha')->nullable();
            $table->string('folio_tec')->nullable();
            $table->string('nombre_cliente')->nullable();
            $table->string('direccion')->nullable();
            $table->string('entre_calles')->nullable();
            $table->string('colonia')->nullable();
            $table->string('edificio')->nullable();
            $table->string('depto')->nullable();
            $table->string('portalera')->nullable();
            $table->string('distrito')->nullable();
            $table->string('terminal')->nullable();
            $table->string('puerto')->nullable();
            $table->string('potencia')->nullable();
            $table->string('navegacion')->nullable();
     
            $table->integer('argolla')->default(0);
            $table->integer('dit_spliter_con_proteccion')->default(0);
            $table->integer('muela')->default(0);
            $table->integer('cincho_negro')->default(0);
            $table->integer('clip_adherible')->default(0);
            $table->integer('cadena_distribucion')->default(0);
            $table->integer('argolla_fleje')->default(0); // Dejamos la columna antigua
            $table->integer('taquete')->default(0);
            $table->integer('modem')->default(0);
            $table->integer('sujetador_p_cor_int_ext')->default(0);
            $table->integer('sujetador_p_cor_acom_de_2_pares')->default(0);
            $table->integer('roseta')->default(0);
            $table->integer('sello_pasamuro')->default(0);
            $table->integer('cable_rj11')->default(0);
            $table->integer('cord_cafe_naranja')->default(0);
            $table->integer('cord_naranja_blanco')->default(0);
            $table->integer('cord_rojo_blanco')->default(0);
            $table->integer('gancho_tensor')->default(0);
            $table->integer('cinta_de_aislar')->default(0);
            $table->integer('tubo_ranurado')->default(0);
            $table->integer('lubricante')->default(0);
            $table->integer('cord_marfil_metros')->default(0);
            $table->integer('longitud_acometida_metros')->default(0);
            
            $table->boolean('tipo_negocio')->default(false);
            $table->boolean('tipo_casa')->default(false);
            $table->boolean('tipo_edificios')->default(false);
            $table->boolean('tipo_plaza')->default(false);
            $table->boolean('tipo_residencial')->default(false);
            $table->boolean('tipo_aerea')->default(false);
            $table->boolean('tipo_subterraneo')->default(false);
            $table->string('longitud_acum_tel')->nullable();
            $table->boolean('cobre_25m_tel')->default(0);
            $table->integer('cobre_50m_tel')->default(0);
            $table->integer('cobre_75m_tel')->default(0);
            $table->integer('cobre_100m_tel')->default(0);
            $table->integer('cobre_125m_tel')->default(0);
            $table->integer('metral_bobina_tel')->default(0);
            $table->string('longitud_acum_huawei')->nullable();
            $table->boolean('cord_prec_25m_huawei')->default(false);
            $table->boolean('cord_prec_50m_huawei')->default(false);
            $table->boolean('cord_prec_80m_huawei')->default(false);
            $table->boolean('cord_prec_100m_huawei')->default(false);
            $table->boolean('cord_prec_120m_huawei')->default(false);
            $table->boolean('cord_prec_150m_huawei')->default(false);
            $table->boolean('cord_prec_200m_huawei')->default(false);
            $table->string('numero_serie')->nullable();
            $table->string('alfanumerico')->nullable();
            $table->string('key')->nullable();
            $table->string('ont_cobre')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('correo_electronico')->nullable();
            $table->string('clarovideo')->nullable();
            $table->boolean('activado')->default(false);
            $table->time('hora_generacion_portal')->nullable();
            $table->time('hora_liquidacion')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('cobre_order');
    }
};
