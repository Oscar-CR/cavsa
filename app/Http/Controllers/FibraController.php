<?php

namespace App\Http\Controllers;

use App\Models\FibraOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FibraController extends Controller
{
    public function fibra() {

        if(auth()->user()->hasRole('admin')){
            $fibraOrders = FibraOrder::all();
        }else{
            $fibraOrders = FibraOrder::where('id', Auth()->user()->id)->get();
        }
        
        return view('fibra.index', compact('fibraOrders'));
    }

    public function fibraCreate(){
        return view('fibra.create');
    }

    public function cobreCreate(){

        return view('cobre.create');
    }

    public function fibraStore(Request $request){

        $createFibraOrder = new FibraOrder();
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
        $createFibraOrder->argolla_caja_exedente = $request->argolla_caja_exedente;
        $createFibraOrder->cierre_conexion = $request->cierre_conexion;
        $createFibraOrder->cincho_negro = $request->cincho_negro;
        $createFibraOrder->clip_adherible = $request->clip_adherible;
        $createFibraOrder->cadena_distribucion = $request->cadena_distribucion;
        $createFibraOrder->argolla_fleje = $request->argolla_fleje;
        $createFibraOrder->conector_mecanico = $request->conector_mecanico;
        $createFibraOrder->ont = $request->ont;
        $createFibraOrder->roceta_optica = $request->roceta_optica;
        $createFibraOrder->sello_pasa_muro = $request->sello_pasa_muro;
        $createFibraOrder->sujetador_clavo = $request->sujetador_clavo;
        $createFibraOrder->taquete = $request->taquete;
        $createFibraOrder->gancho_tensor = $request->gancho_tensor;
        $createFibraOrder->cinta_aislar = $request->cinta_aislar;
        $createFibraOrder->cordones_telmex = $request->cordones_telmex;
        $createFibraOrder->cordones_huawei = $request->cordones_huawei;
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

    public function fibraEdit(){
        return view('fibra.create');
    }

    public function fibraDelete(){
        return view('fibra.create');
    }
}
