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
        $createCobreOrder = new CobreOrder();
        $createCobreOrder->telefono = $request->telefono;
        $createCobreOrder->tipo_os = $request->tipo_os;
        $createCobreOrder->numero_os = $request->numero_os;
        $createCobreOrder->status = $request->status;
        $createCobreOrder->pysa = $request->pysa;
        $createCobreOrder->hora_llegada = $request->hora_llegada;
        $createCobreOrder->fecha = $request->fecha;
        $createCobreOrder->folio_tec = $request->folio_tec;
        $createCobreOrder->nombre_cliente = $request->nombre_cliente;
        $createCobreOrder->direccion = $request->direccion;
        $createCobreOrder->entre_calles = $request->entre_calles;
        $createCobreOrder->colonia = $request->colonia;
        $createCobreOrder->edificio = $request->edificio;
        $createCobreOrder->depto = $request->depto;
        $createCobreOrder->portalera = $request->portalera;
        $createCobreOrder->distrito = $request->distrito;
        $createCobreOrder->terminal = $request->terminal;
        $createCobreOrder->puerto = $request->puerto;
        $createCobreOrder->potencia = $request->potencia;
        $createCobreOrder->navegacion = $request->navegacion;


        $createCobreOrder->argolla = $request->argolla;
        $createCobreOrder->dit_spliter_con_proteccion = $request->dit_spliter_con_proteccion;
        $createCobreOrder->muela = $request->muela;
        $createCobreOrder->cincho_negro = $request->cincho_negro;
        $createCobreOrder->clip_adherible = $request->clip_adherible;
        $createCobreOrder->cadena_distribucion = $request->cadena_distribucion;
        $createCobreOrder->argolla_fleje = $request->argolla_fleje;
        $createCobreOrder->taquete = $request->taquete;
        $createCobreOrder->modem = $request->modem;
        $createCobreOrder->sujetador_p_cor_int_ext = $request->sujetador_p_cor_int_ext;
        $createCobreOrder->sujetador_p_cor_acom_de_2_pares = $request->sujetador_p_cor_acom_de_2_pares;
        $createCobreOrder->roseta = $request->roseta;
        $createCobreOrder->sello_pasamuro = $request->sello_pasamuro;
        $createCobreOrder->cable_rj11 = $request->cable_rj11;
        $createCobreOrder->cord_cafe_naranja = $request->cord_cafe_naranja;
        $createCobreOrder->cord_naranja_blanco = $request->cord_naranja_blanco;
        $createCobreOrder->cord_rojo_blanco = $request->cord_rojo_blanco;
        $createCobreOrder->gancho_tensor = $request->gancho_tensor;
        $createCobreOrder->cinta_de_aislar = $request->cinta_de_aislar;
        $createCobreOrder->tubo_ranurado = $request->tubo_ranurado;
        $createCobreOrder->lubricante = $request->lubricante;
        $createCobreOrder->cord_marfil_metros = $request->cord_marfil_metros;
        $createCobreOrder->longitud_acometida_metros = $request->longitud_acometida_metros;


        $createCobreOrder->tipo_negocio = isset($request->tipo_negocio)? true: false;
        $createCobreOrder->tipo_casa = isset($request->tipo_casa)? true: false;
        $createCobreOrder->tipo_edificios = isset($request->tipo_edificios)? true: false;
        $createCobreOrder->tipo_plaza = isset($request->tipo_plaza)? true: false;
        $createCobreOrder->tipo_residencial = isset($request->tipo_residencial)? true: false;
        $createCobreOrder->tipo_aerea = isset($request->tipo_aerea)? true: false;
        $createCobreOrder->tipo_subterraneo = isset($request->tipo_subterraneo)? true: false;
        $createCobreOrder->longitud_acum_tel = $request->longitud_acum_tel;
        $createCobreOrder->cobre_25m_tel = isset($request->cobre_25m_tel)? true: false;
        $createCobreOrder->cobre_50m_tel = isset($request->cobre_50m_tel)? true: false;
        $createCobreOrder->cobre_75m_tel = isset($request->cobre_75m_tel)? true: false;
        $createCobreOrder->cobre_100m_tel = isset($request->cobre_100m_tel)? true: false;
        $createCobreOrder->cobre_125m_tel = isset($request->cobre_125m_tel)? true: false;
        $createCobreOrder->metral_bobina_tel = $request->metral_bobina_tel? true: false;
        $createCobreOrder->longitud_acum_huawei = $request->longitud_acum_huawei;
        $createCobreOrder->cord_prec_25m_huawei = isset($request->cord_prec_25m_huawei)? true: false;
        $createCobreOrder->cord_prec_50m_huawei = isset($request->cord_prec_50m_huawei)? true: false;
        $createCobreOrder->cord_prec_80m_huawei = isset($request->cord_prec_80m_huawei)? true: false;
        $createCobreOrder->cord_prec_100m_huawei = isset($request->cord_prec_100m_huawei)? true: false;
        $createCobreOrder->cord_prec_120m_huawei = isset($request->cord_prec_120m_huawei)? true: false;
        $createCobreOrder->cord_prec_150m_huawei = isset($request->cord_prec_150m_huawei)? true: false;
        $createCobreOrder->cord_prec_200m_huawei = isset($request->cord_prec_200m_huawei)? true: false;
        $createCobreOrder->numero_serie = $request->numero_serie;
        $createCobreOrder->alfanumerico = $request->alfanumerico;
        $createCobreOrder->key = $request->key;
        $createCobreOrder->ont_cobre = $request->ont_cobre;
        $createCobreOrder->observaciones = $request->observaciones;
        $createCobreOrder->correo_electronico = $request->correo_electronico;
        $createCobreOrder->clarovideo = $request->clarovideo;
        $createCobreOrder->activado = (isset($request->activado) && $request->activado == 'Si')? true: false;
        $createCobreOrder->hora_generacion_portal = $request->hora_generacion_portal;
        $createCobreOrder->hora_liquidacion = $request->hora_liquidacion;
        $createCobreOrder->user_id = Auth::user()->id; 
        $createCobreOrder->save();

        return redirect()->action([CobreController::class, 'cobre'])->with('msg', 'Solicitud agregada con exito');
    }

    public function cobreEdit($id){

        $cobreOrder = CobreOrder::where('id',$id)->get()->last();
        return view('cobre.edit', compact('cobreOrder'));
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

            'cobre_25m_tel' => isset($request->cobre_25m_tel)? true: false,
            'cobre_50m_tel' => isset($request->cobre_50m_tel)? true: false,
            'cobre_75m_tel' => isset($request->cobre_75m_tel)? true: false,
            'cobre_100m_tel' => isset($request->cobre_100m_tel)? true: false,
            'cobre_125m_tel' => isset($request->cobre_125m_tel)? true: false,
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
        return view('cobre.create');
    }

}
