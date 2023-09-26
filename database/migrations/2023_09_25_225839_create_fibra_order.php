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
        Schema::create('fibra_order', function (Blueprint $table) {
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
            $table->integer('argolla_caja_exedente')->default(0);
            $table->integer('cierre_conexion')->default(0);
            $table->integer('cincho_negro')->default(0);
            $table->integer('clip_adherible')->default(0);
            $table->integer('cadena_distribucion')->default(0);
            $table->integer('argolla_fleje')->default(0);
            $table->integer('conector_mecanico')->default(0);
            $table->integer('ont')->default(0);
            $table->integer('roceta_optica')->default(0);
            $table->integer('sello_pasa_muro')->default(0);
            $table->integer('sujetador_clavo')->default(0);
            $table->integer('taquete')->default(0);
            $table->integer('gancho_tensor')->default(0);
            $table->integer('cinta_aislar')->default(0);
            $table->integer('cordones_telmex')->default(0);
            $table->integer('cordones_huawei')->default(0);
            $table->boolean('tipo_negocio')->default(false);
            $table->boolean('tipo_casa')->default(false);
            $table->boolean('tipo_edificios')->default(false);
            $table->boolean('tipo_plaza')->default(false);
            $table->boolean('tipo_residencial')->default(false);
            $table->boolean('tipo_aerea')->default(false);
            $table->boolean('tipo_subterraneo')->default(false);
            $table->string('longitud_acum_tel')->nullable();
            $table->boolean('fibra_25m_tel')->default(0);
            $table->integer('fibra_50m_tel')->default(0);
            $table->integer('fibra_75m_tel')->default(0);
            $table->integer('fibra_100m_tel')->default(0);
            $table->integer('fibra_125m_tel')->default(0);
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
        Schema::dropIfExists('fibra_order');
    }
};
