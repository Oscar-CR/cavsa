<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FibraOrder extends Model
{
    use HasFactory;

    public $table = "fibra_order";

    protected $fillable = [
        'telefono',
        'tipo_os',
        'numero_os',
        'status',
        'pysa',
        'hora_llegada',
        'fecha',
        'folio_tec',
        'nombre_cliente',
        'direccion',
        'entre_calles',
        'colonia',
        'edificio',
        'depto',
        'portalera',
        'distrito',
        'terminal',
        'puerto',
        'potencia',
        'navegacion',
        'argolla_caja_exedente',
        'cierre_conexion',
        'cincho_negro',
        'clip_adherible',
        'cadena_distribucion',
        'argolla_fleje',
        'conector_mecanico',
        'ont',
        'roceta_optica',
        'sello_pasa_muro',
        'sujetador_clavo',
        'taquete',
        'gancho_tensor',
        'cinta_aislar',
        'cordones_telmex',
        'cordones_huawei',
        'tipo_negocio',
        'tipo_casa',
        'tipo_edificios',
        'tipo_plaza',
        'tipo_residencial',
        'tipo_aerea',
        'tipo_subterraneo',
        'longitud_acum_tel',
        'fibra_25m_tel',
        'fibra_50m_tel',
        'fibra_75m_tel',
        'fibra_100m_tel',
        'fibra_125m_tel',
        'metral_bobina_tel',
        'longitud_acum_huawei',
        'cord_prec_25m_huawei',
        'cord_prec_50m_huawei',
        'cord_prec_80m_huawei',
        'cord_prec_100m_huawei',
        'cord_prec_120m_huawei',
        'cord_prec_150m_huawei',
        'cord_prec_200m_huawei',
        'numero_serie',
        'alfanumerico',
        'key',
        'ont_cobre',
        'observaciones',
        'correo_electronico',
        'clarovideo',
        'si',
        'no',
        'hora_generacion_portal',
        'hora_liquidacion',
        'nombre_tecnico',
    ];


}
