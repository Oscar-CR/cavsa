<?php

namespace App\Http\Controllers;

use App\Models\CobreOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CobreController extends Controller
{
    public function cobre() {

        
        if(auth()->user()->hasRole('admin')){
            $cobreOrders = CobreOrder::simplePaginate(15);
        }else{
            $cobreOrders = CobreOrder::where('id', Auth()->user()->id)->get()->simplePaginate(15);
        }
        
        return view('cobre.index', compact('cobreOrders'));
    }

    public function cobreCreate(){
        return view('cobre.create');
    }

    public function cobreStore(Request $request){
        $createFibraOrder = new CobreOrder();
        $createFibraOrder->telefono = $request->telefono;
        $createFibraOrder->tipo_os = $request->tipo_os;
        $createFibraOrder->numero_os = $request->numero_os;
        $createFibraOrder->status = $request->status;
        $createFibraOrder->pysa = $request->pysa;
        $createFibraOrder->hora_llegada = $request->hora_llegada;
        $createFibraOrder->fecha = $request->fecha;
        $createFibraOrder->folio_tec = $request->folio_tec;
        $createFibraOrder->nombre_cliente = $request->nombre_cliente;
        $createFibraOrder->direccion = $request->direccion;
        $createFibraOrder->entre_calles = $request->entre_calles;
        $createFibraOrder->colonia = $request->colonia;
        $createFibraOrder->edificio = $request->edificio;
        $createFibraOrder->depto = $request->depto;
        $createFibraOrder->portalera = $request->portalera;
        $createFibraOrder->distrito = $request->distrito;
        $createFibraOrder->terminal = $request->terminal;
        $createFibraOrder->puerto = $request->puerto;
        $createFibraOrder->potencia = $request->potencia;
        $createFibraOrder->navegacion = $request->navegacion;


        $createFibraOrder->argolla = $request->argolla;
        $createFibraOrder->dit_spliter_con_proteccion = $request->dit_spliter_con_proteccion;
        $createFibraOrder->muela = $request->muela;
        $createFibraOrder->cincho_negro = $request->cincho_negro;
        $createFibraOrder->clip_adherible = $request->clip_adherible;
        $createFibraOrder->cadena_distribucion = $request->cadena_distribucion;
        $createFibraOrder->argolla_fleje = $request->argolla_fleje;
        $createFibraOrder->taquete = $request->taquete;
        $createFibraOrder->modem = $request->modem;
        $createFibraOrder->sujetador_p_cor_int_ext = $request->sujetador_p_cor_int_ext;
        $createFibraOrder->sujetador_p_cor_acom_de_2_pares = $request->sujetador_p_cor_acom_de_2_pares;
        $createFibraOrder->roseta = $request->roseta;
        $createFibraOrder->sello_pasamuro = $request->sello_pasamuro;
        $createFibraOrder->cable_rj11 = $request->cable_rj11;
        $createFibraOrder->cord_cafe_naranja = $request->cord_cafe_naranja;
        $createFibraOrder->cord_naranja_blanco = $request->cord_naranja_blanco;
        $createFibraOrder->cord_rojo_blanco = $request->cord_rojo_blanco;
        $createFibraOrder->gancho_tensor = $request->gancho_tensor;
        $createFibraOrder->cinta_de_aislar = $request->cinta_de_aislar;
        $createFibraOrder->tubo_ranurado = $request->tubo_ranurado;
        $createFibraOrder->lubricante = $request->lubricante;
        $createFibraOrder->cord_marfil_metros = $request->cord_marfil_metros;
        $createFibraOrder->longitud_acometida_metros = $request->longitud_acometida_metros;


        $createFibraOrder->tipo_negocio = isset($request->tipo_negocio)? true: false;
        $createFibraOrder->tipo_casa = isset($request->tipo_casa)? true: false;
        $createFibraOrder->tipo_edificios = isset($request->tipo_edificios)? true: false;
        $createFibraOrder->tipo_plaza = isset($request->tipo_plaza)? true: false;
        $createFibraOrder->tipo_residencial = isset($request->tipo_residencial)? true: false;
        $createFibraOrder->tipo_aerea = isset($request->tipo_aerea)? true: false;
        $createFibraOrder->tipo_subterraneo = isset($request->tipo_subterraneo)? true: false;
        $createFibraOrder->longitud_acum_tel = $request->longitud_acum_tel;
        $createFibraOrder->fibra_25m_tel = isset($request->fibra_25m_tel)? true: false;
        $createFibraOrder->fibra_50m_tel = isset($request->fibra_50m_tel)? true: false;
        $createFibraOrder->fibra_75m_tel = isset($request->fibra_75m_tel)? true: false;
        $createFibraOrder->fibra_100m_tel = isset($request->fibra_100m_tel)? true: false;
        $createFibraOrder->fibra_125m_tel = isset($request->fibra_125m_tel)? true: false;
        $createFibraOrder->metral_bobina_tel = $request->metral_bobina_tel? true: false;
        $createFibraOrder->longitud_acum_huawei = $request->longitud_acum_huawei;
        $createFibraOrder->cord_prec_25m_huawei = isset($request->cord_prec_25m_huawei)? true: false;
        $createFibraOrder->cord_prec_50m_huawei = isset($request->cord_prec_50m_huawei)? true: false;
        $createFibraOrder->cord_prec_80m_huawei = isset($request->cord_prec_80m_huawei)? true: false;
        $createFibraOrder->cord_prec_100m_huawei = isset($request->cord_prec_100m_huawei)? true: false;
        $createFibraOrder->cord_prec_120m_huawei = isset($request->cord_prec_120m_huawei)? true: false;
        $createFibraOrder->cord_prec_150m_huawei = isset($request->cord_prec_150m_huawei)? true: false;
        $createFibraOrder->cord_prec_200m_huawei = isset($request->cord_prec_200m_huawei)? true: false;
        $createFibraOrder->numero_serie = $request->numero_serie;
        $createFibraOrder->alfanumerico = $request->alfanumerico;
        $createFibraOrder->key = $request->key;
        $createFibraOrder->ont_cobre = $request->ont_cobre;
        $createFibraOrder->observaciones = $request->observaciones;
        $createFibraOrder->correo_electronico = $request->correo_electronico;
        $createFibraOrder->clarovideo = $request->clarovideo;
        $createFibraOrder->activado = (isset($request->activado) && $request->activado == 'Si')? true: false;
        $createFibraOrder->hora_generacion_portal = $request->hora_generacion_portal;
        $createFibraOrder->hora_liquidacion = $request->hora_liquidacion;
        $createFibraOrder->user_id = Auth::user()->id; 
        $createFibraOrder->save();

        return redirect()->action([FibraController::class, 'fibra'])->with('msg', 'Solicitud agregada con exito');
    }

    public function cobreEdit(){
        return view('fibra.create');
    }

    public function cobreUpdate(Request $request){
        
        DB::table('cobre_order')->where('id', $request->id)->update([
            'telefono' => $request->telefono,
            'tipo_os' => $request->tipo_os,
            'numero_os' => $request->numero_os,
            'status' => $request->status,
            'pysa' => $request->pysa,
            'hora_llegada' => $request->hora_llegada,
            'fecha' => $request->fecha,
            'folio_tec' => $request->folio_tec,
            'nombre_cliente' => $request->nombre_cliente,
            'direccion' => $request->direccion,
            'entre_calles' => $request->entre_calles,
            'colonia' => $request->colonia,
            'edificio' => $request->edificio,
            'depto' => $request->depto,
            'portalera' => $request->portalera,
            'distrito' => $request->distrito,
            'terminal' => $request->terminal,
            'puerto' => $request->puerto,
            'potencia' => $request->potencia,
            'navegacion' => $request->navegacion,
            'argolla' => $request->argolla,
            'dit_spliter_con_proteccion' => $request->dit_spliter_con_proteccion,
            'muela' => $request->muela,
            'cincho_negro' => $request->cincho_negro,
            'clip_adherible' => $request->clip_adherible,
            'cadena_distribucion' => $request->cadena_distribucion,
            'argolla_fleje' => $request->argolla_fleje,
            'taquete' => $request->taquete,
            'modem' => $request->modem,
            'sujetador_p_cor_int_ext' => $request->sujetador_p_cor_int_ext,
            'sujetador_p_cor_acom_de_2_pares' => $request->sujetador_p_cor_acom_de_2_pares,
            'roseta' => $request->roseta,
            'sello_pasamuro' => $request->sello_pasamuro,
            'cable_rj11' => $request->cable_rj11,
            'cord_cafe_naranja' => $request->cord_cafe_naranja,
            'cord_naranja_blanco' => $request->cord_naranja_blanco,
            'cord_rojo_blanco' => $request->cord_rojo_blanco,
            'gancho_tensor' => $request->gancho_tensor,
            'cinta_de_aislar' => $request->cinta_de_aislar,
            'tubo_ranurado' => $request->tubo_ranurado,
            'lubricante' => $request->lubricante,
            'cord_marfil_metros' => $request->cord_marfil_metros,
            'longitud_acometida_metros' => $request->longitud_acometida_metros,

            'tipo_negocio' => isset($request->tipo_negocio)? true: false,
            'tipo_casa' => isset($request->tipo_casa)? true: false,
            'tipo_edificios' => isset($request->tipo_edificios)? true: false,
            'tipo_plaza' => isset($request->tipo_plaza)? true: false,
            'tipo_residencial' => isset($request->tipo_residencial)? true: false,
            'tipo_aerea' => isset($request->tipo_aerea)? true: false,
            'tipo_subterraneo' => isset($request->tipo_subterraneo)? true: false,
            'longitud_acum_tel' => $request->longitud_acum_tel,

            'fibra_25m_tel' => isset($request->fibra_25m_tel)? true: false,
            'fibra_50m_tel' => isset($request->fibra_50m_tel)? true: false,
            'fibra_75m_tel' => isset($request->fibra_75m_tel)? true: false,
            'fibra_100m_tel' => isset($request->fibra_100m_tel)? true: false,
            'fibra_125m_tel' => isset($request->fibra_125m_tel)? true: false,
            'metral_bobina_tel' => $request->metral_bobina_tel? true: false,
            'longitud_acum_huawei' => $request->longitud_acum_huawei,

            'cord_prec_25m_huawei' => isset($request->cord_prec_25m_huawei)? true: false,
            'cord_prec_50m_huawei' => isset($request->cord_prec_50m_huawei)? true: false,
            'cord_prec_80m_huawei' => isset($request->cord_prec_80m_huawei)? true: false,
            'cord_prec_100m_huawei' => isset($request->cord_prec_100m_huawei)? true: false,
            'cord_prec_120m_huawei' => isset($request->cord_prec_120m_huawei)? true: false,
            'cord_prec_150m_huawei' => isset($request->cord_prec_150m_huawei)? true: false,
            'cord_prec_200m_huawei' => isset($request->cord_prec_200m_huawei)? true: false,

            'numero_serie' => $request->numero_serie,
            'alfanumerico' => $request->alfanumerico,
            'key' => $request->key,
            'ont_cobre' => $request->ont_cobre,
            'observaciones' => $request->observaciones,
            'correo_electronico' => $request->correo_electronico,
            'clarovideo' => $request->clarovideo,
            'activado' => (isset($request->activado) && $request->activado == 'Si')? true: false,
            'hora_generacion_portal' => $request->hora_generacion_portal,
            'hora_liquidacion' => $request->hora_liquidacion,
        ]);
        return redirect()->action([CobreController::class, 'cobre'])->with('msg', 'Solicitud actualizada con exito');
    }

    public function cobreDelete(){
        return view('fibra.create');
    }

}
