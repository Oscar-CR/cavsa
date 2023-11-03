<?php

namespace App\Http\Controllers;

use App\Models\CobreOrder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class CobreController extends Controller
{
    public function cobre() {

        
        if(auth()->user()->hasRole('admin')){
            $cobreOrders = CobreOrder::all();
        }else{
            $cobreOrders = CobreOrder::where('user_id', Auth()->user()->id)->get();
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

    public function cobreXLSX(Request $request){
        $cobreOrder = CobreOrder::where('id',$request->id)->get()->first();
        $user = User::where('id', $cobreOrder->user_id)->get()->first();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        //Estilo
        $styleRows = [
            'borders' => [
                'outline' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                    'color' => ['argb' => 'FF000000'],
                ],
            ],
        ];

        $titleStyleRows = [
            'borders' => [
                'outline' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                    'color' => ['argb' => 'FF000000'],
                ],
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => array('argb' => 'FFe0e0e0')
            ],
        ];

        //Tamano
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(22);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(8);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(15);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(10);
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(22);
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(8);
        $spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(26);
        $spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(12);
        $spreadsheet->getActiveSheet()->getColumnDimension('J')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('K')->setWidth(8);
        $spreadsheet->getActiveSheet()->getColumnDimension('L')->setWidth(20);
        $spreadsheet->getActiveSheet()->getColumnDimension('M')->setWidth(6);

        //Estilo aplicado a celda

        $sheet->getStyle('B14:M14')->applyFromArray($titleStyleRows);
        $sheet->getStyle('B35:M35')->applyFromArray($titleStyleRows);
        $sheet->getStyle('B15:B17')->applyFromArray($styleRows);

        $sheet->getStyle('C15:D15')->applyFromArray($styleRows);
        $sheet->getStyle('C16:D16')->applyFromArray($styleRows);
        $sheet->getStyle('C17:D17')->applyFromArray($styleRows);

        $sheet->getStyle('E15:E17')->applyFromArray($styleRows);

        $sheet->getStyle('F15:G15')->applyFromArray($styleRows);
        $sheet->getStyle('F16:G16')->applyFromArray($styleRows);
        $sheet->getStyle('F17:G17')->applyFromArray($styleRows);

        $sheet->getStyle('H15:I17')->applyFromArray($styleRows);

        $sheet->getStyle('J15:M15')->applyFromArray($styleRows);
        $sheet->getStyle('J16:M16')->applyFromArray($styleRows);
        $sheet->getStyle('J17:M17')->applyFromArray($styleRows);


        $sheet->getStyle('B18:C18')->applyFromArray($styleRows);
        $sheet->getStyle('B19:C19')->applyFromArray($styleRows);
        $sheet->getStyle('B20:C20')->applyFromArray($styleRows);
        $sheet->getStyle('B21:C21')->applyFromArray($styleRows);
        $sheet->getStyle('B22:C22')->applyFromArray($styleRows);


        $sheet->getStyle('D18:M18')->applyFromArray($styleRows);
        $sheet->getStyle('D19:M19')->applyFromArray($styleRows);
        $sheet->getStyle('D20:M20')->applyFromArray($styleRows);  
        $sheet->getStyle('D21:M21')->applyFromArray($styleRows);
        

        $sheet->getStyle('D22')->applyFromArray($styleRows);
        $sheet->getStyle('E22')->applyFromArray($styleRows);
        $sheet->getStyle('F22')->applyFromArray($styleRows);
        $sheet->getStyle('G22:H22')->applyFromArray($styleRows);
        $sheet->getStyle('I22:M22')->applyFromArray($styleRows);
        
        $sheet->getStyle('B23:M24')->applyFromArray($styleRows);

        $sheet->getStyle('B24')->applyFromArray($styleRows);
        $sheet->getStyle('D24')->applyFromArray($styleRows);
        $sheet->getStyle('F24')->applyFromArray($styleRows);
        $sheet->getStyle('H24')->applyFromArray($styleRows);
        $sheet->getStyle('J24')->applyFromArray($styleRows);


        $sheet->getStyle('B25:M25')->applyFromArray($styleRows);

        $sheet->getStyle('B26')->applyFromArray($styleRows);
        $sheet->getStyle('B27')->applyFromArray($styleRows);
        $sheet->getStyle('B28')->applyFromArray($styleRows);
        $sheet->getStyle('B29')->applyFromArray($styleRows);
        $sheet->getStyle('B30')->applyFromArray($styleRows);
        $sheet->getStyle('B31')->applyFromArray($styleRows);
        $sheet->getStyle('B32')->applyFromArray($styleRows);
        $sheet->getStyle('B33')->applyFromArray($styleRows);
        $sheet->getStyle('B32')->applyFromArray($styleRows);
        $sheet->getStyle('B36')->applyFromArray($styleRows);
        $sheet->getStyle('B37')->applyFromArray($styleRows);
        $sheet->getStyle('B38')->applyFromArray($styleRows);
        $sheet->getStyle('B39')->applyFromArray($styleRows);
        $sheet->getStyle('B40:E41')->applyFromArray($styleRows);
        $sheet->getStyle('B42:E42')->applyFromArray($styleRows);
        $sheet->getStyle('B43:E43')->applyFromArray($styleRows);
        $sheet->getStyle('B44:E44')->applyFromArray($styleRows);

        $sheet->getStyle('C26')->applyFromArray($styleRows);
        $sheet->getStyle('C27')->applyFromArray($styleRows);
        $sheet->getStyle('C28')->applyFromArray($styleRows);
        $sheet->getStyle('C29')->applyFromArray($styleRows);
        $sheet->getStyle('C30')->applyFromArray($styleRows);
        $sheet->getStyle('C31')->applyFromArray($styleRows);
        $sheet->getStyle('C32')->applyFromArray($styleRows);
        $sheet->getStyle('C33')->applyFromArray($styleRows);
        $sheet->getStyle('C36:F36')->applyFromArray($styleRows);
        $sheet->getStyle('C37:F37')->applyFromArray($styleRows);
        $sheet->getStyle('C38:F38')->applyFromArray($styleRows);
        $sheet->getStyle('C39:F39')->applyFromArray($styleRows);


        $sheet->getStyle('D26')->applyFromArray($styleRows);
        $sheet->getStyle('D27')->applyFromArray($styleRows);
        $sheet->getStyle('D28')->applyFromArray($styleRows);
        $sheet->getStyle('D29')->applyFromArray($styleRows);
        $sheet->getStyle('D30')->applyFromArray($styleRows);
        $sheet->getStyle('D31')->applyFromArray($styleRows);
        $sheet->getStyle('D32')->applyFromArray($styleRows);
        $sheet->getStyle('D33')->applyFromArray($styleRows);

        $sheet->getStyle('E26')->applyFromArray($styleRows);
        $sheet->getStyle('E27')->applyFromArray($styleRows);
        $sheet->getStyle('E28')->applyFromArray($styleRows);
        $sheet->getStyle('E29')->applyFromArray($styleRows);
        $sheet->getStyle('E30')->applyFromArray($styleRows);
        $sheet->getStyle('E31')->applyFromArray($styleRows);
        $sheet->getStyle('E32')->applyFromArray($styleRows);
        $sheet->getStyle('E33')->applyFromArray($styleRows);


        $sheet->getStyle('F26')->applyFromArray($styleRows);
        $sheet->getStyle('F27')->applyFromArray($styleRows);
        $sheet->getStyle('F28')->applyFromArray($styleRows);
        $sheet->getStyle('F29')->applyFromArray($styleRows);
        $sheet->getStyle('F30')->applyFromArray($styleRows);
        $sheet->getStyle('F31')->applyFromArray($styleRows);
        $sheet->getStyle('F32')->applyFromArray($styleRows);
        $sheet->getStyle('F33')->applyFromArray($styleRows);

        $sheet->getStyle('F40:M40')->applyFromArray($styleRows);
        $sheet->getStyle('F41:M41')->applyFromArray($styleRows);
        $sheet->getStyle('F42:M42')->applyFromArray($styleRows);
        $sheet->getStyle('F43:M43')->applyFromArray($styleRows);
        $sheet->getStyle('F44:M44')->applyFromArray($styleRows);


        $sheet->getStyle('G26')->applyFromArray($styleRows);
        $sheet->getStyle('G27')->applyFromArray($styleRows);
        $sheet->getStyle('G28')->applyFromArray($styleRows);
        $sheet->getStyle('G29')->applyFromArray($styleRows);
        $sheet->getStyle('G30')->applyFromArray($styleRows);
        $sheet->getStyle('G31')->applyFromArray($styleRows);
        $sheet->getStyle('G32')->applyFromArray($styleRows);
        $sheet->getStyle('G33')->applyFromArray($styleRows);
        $sheet->getStyle('G36:M36')->applyFromArray($styleRows);
        $sheet->getStyle('G37:M37')->applyFromArray($styleRows);
        $sheet->getStyle('G38:M39')->applyFromArray($styleRows);
       


        $sheet->getStyle('H26')->applyFromArray($styleRows);
        $sheet->getStyle('H27')->applyFromArray($styleRows);
        $sheet->getStyle('H28')->applyFromArray($styleRows);
        $sheet->getStyle('H29')->applyFromArray($styleRows);
        $sheet->getStyle('H30')->applyFromArray($styleRows);
        $sheet->getStyle('H31')->applyFromArray($styleRows);
        $sheet->getStyle('H32')->applyFromArray($styleRows);
        $sheet->getStyle('H33')->applyFromArray($styleRows);


        $sheet->getStyle('I26')->applyFromArray($styleRows);
        $sheet->getStyle('I27')->applyFromArray($styleRows);
        $sheet->getStyle('I28')->applyFromArray($styleRows);
        $sheet->getStyle('I29')->applyFromArray($styleRows);
        $sheet->getStyle('I30')->applyFromArray($styleRows);
        $sheet->getStyle('I31')->applyFromArray($styleRows);
        $sheet->getStyle('I32')->applyFromArray($styleRows);
        $sheet->getStyle('I33')->applyFromArray($styleRows);

        $sheet->getStyle('J26:K26')->applyFromArray($styleRows);
        $sheet->getStyle('J27')->applyFromArray($styleRows);
        $sheet->getStyle('J28')->applyFromArray($styleRows);
        $sheet->getStyle('J29')->applyFromArray($styleRows);
        $sheet->getStyle('J30')->applyFromArray($styleRows);
        $sheet->getStyle('J31')->applyFromArray($styleRows);
        $sheet->getStyle('J32')->applyFromArray($styleRows);
        $sheet->getStyle('J33')->applyFromArray($styleRows);
        $sheet->getStyle('J34:K34')->applyFromArray($styleRows);


        $sheet->getStyle('K27')->applyFromArray($styleRows);
        $sheet->getStyle('K28')->applyFromArray($styleRows);
        $sheet->getStyle('K29')->applyFromArray($styleRows);
        $sheet->getStyle('K30')->applyFromArray($styleRows);
        $sheet->getStyle('K31')->applyFromArray($styleRows);
        $sheet->getStyle('K32')->applyFromArray($styleRows);
        $sheet->getStyle('K33')->applyFromArray($styleRows);


        $sheet->getStyle('L26:M26')->applyFromArray($styleRows);
        $sheet->getStyle('L27')->applyFromArray($styleRows);
        $sheet->getStyle('L28')->applyFromArray($styleRows);
        $sheet->getStyle('L29')->applyFromArray($styleRows);
        $sheet->getStyle('L30')->applyFromArray($styleRows);
        $sheet->getStyle('L31')->applyFromArray($styleRows);
        $sheet->getStyle('L32')->applyFromArray($styleRows);
        $sheet->getStyle('L33')->applyFromArray($styleRows);
        $sheet->getStyle('L34')->applyFromArray($styleRows);
        
        $sheet->getStyle('M27')->applyFromArray($styleRows);
        $sheet->getStyle('M28')->applyFromArray($styleRows);
        $sheet->getStyle('M29')->applyFromArray($styleRows);
        $sheet->getStyle('M30')->applyFromArray($styleRows);
        $sheet->getStyle('M31')->applyFromArray($styleRows);
        $sheet->getStyle('M32')->applyFromArray($styleRows);
        $sheet->getStyle('M33')->applyFromArray($styleRows);
        $sheet->getStyle('M34')->applyFromArray($styleRows);


        $imagePath = public_path('img/infinitum_con.png');

        // Crear un objeto Drawing (imagen)
        $drawing = new Drawing();
        $drawing->setName('Image');
        $drawing->setDescription('Image');
        $drawing->setPath($imagePath);
        $drawing->setCoordinates('D1'); 
        $drawing->setOffsetX(1); 
        $drawing->setOffsetY(1); 
        $drawing->setWorksheet($sheet);

    
        $newWidth = 400; 
        $newHeight = 200; 
        
        $drawing->setWidth($newWidth);
        $drawing->setHeight($newHeight);
        
        $sheet->setCellValue('F12', 'TELÉFONOS DE MÉXICO S.A.  DE C.V.');
        $sheet->setCellValue('G13', 'PLANTA EXTERIOR');
        $sheet->setCellValue('K12', 'FIBRA R-'. $cobreOrder->id);

        $sheet->setCellValue('G14', 'ORDEN DE SERVICIO:');
        $sheet->setCellValue('B15', 'TELEFONO:');
        $sheet->setCellValue('B16', 'TIPO O.S.:');
        $sheet->setCellValue('B17', 'Nº DE O.S.:');

        $sheet->setCellValue('D15', $cobreOrder->telefono);
        $sheet->setCellValue('D16', $cobreOrder->tipo_os);
        $sheet->setCellValue('D17', $cobreOrder->numero_os);

        $sheet->setCellValue('E17', 'PISA:');

        $sheet->setCellValue('F15', 'ESTATUS:');
        $sheet->setCellValue('F16', $cobreOrder->status);
        $sheet->setCellValue('F17', $cobreOrder->pysa);

        $sheet->setCellValue('H15', 'HORA DE LLEGADA:');      
        $sheet->setCellValue('H16', 'FECHA:');
        $sheet->setCellValue('H17', 'FOLIO TEC:');

        $sheet->setCellValue('J15', $cobreOrder->hora_llegada);      
        $sheet->setCellValue('J16', $cobreOrder->fecha);
        $sheet->setCellValue('J17', $cobreOrder->folio_tec);
      
        $sheet->setCellValue('B18', 'NOMBRE DEL CLIENTE:');
        $sheet->setCellValue('B19', 'DIRECCION:');
        $sheet->setCellValue('B20', 'ENTRE CALLES:');



        $sheet->setCellValue('B21', 'COLONIA:');

        $sheet->setCellValue('D18', $cobreOrder->nombre_cliente);
        $sheet->setCellValue('D19', $cobreOrder->direccion);
        $sheet->setCellValue('D20', $cobreOrder->entre_calles);
        $sheet->setCellValue('D21', $cobreOrder->colonia);

        $sheet->setCellValue('B22', 'EDIFICIO:');
        $sheet->setCellValue('E22', 'DEPTO:');
        $sheet->setCellValue('H22', 'PORTALERA:');


        $sheet->setCellValue('D22', $cobreOrder->edificio);
        $sheet->setCellValue('F22', $cobreOrder->depto);
        $sheet->setCellValue('I22', $cobreOrder->portalera);


        $sheet->setCellValue('B23', 'DISTRITO');
        $sheet->setCellValue('D23', 'TERMINAL');
        $sheet->setCellValue('F23', 'PUERTO');
        $sheet->setCellValue('H23', 'POTENCIA');
        $sheet->setCellValue('J23', 'NAVEGACION');

        $sheet->setCellValue('B24', $cobreOrder->distrito);
        $sheet->setCellValue('D24', $cobreOrder->terminal);
        $sheet->setCellValue('F24', $cobreOrder->puerto);
        $sheet->setCellValue('H24', $cobreOrder->potencia);
        $sheet->setCellValue('J24', $cobreOrder->navegacion);


        $sheet->setCellValue('D25', 'MATERIAL INSTALADO');
        $sheet->setCellValue('J25', 'TIPO Y LOGITUD DE INSTALACIÓN');


        //Materiales 

        $sheet->setCellValue('B26', 'Argolla');
        $sheet->setCellValue('B27', 'Dit/Spliter con Proteccion');
        $sheet->setCellValue('B28', 'Muela');
        $sheet->setCellValue('B29', 'Cincho negro');
        $sheet->setCellValue('B30', 'Clip Adherible');
        $sheet->setCellValue('B31', 'Cadena Distribucion');
        $sheet->setCellValue('B32', 'Argolla Fleje');
        $sheet->setCellValue('B33', 'Taquete');
        
        $sheet->setCellValue('C26', $cobreOrder->argolla);
        $sheet->setCellValue('C27', $cobreOrder->dit_spliter_con_proteccion);
        $sheet->setCellValue('C28', $cobreOrder->muela);
        $sheet->setCellValue('C29', $cobreOrder->cincho_negro);
        $sheet->setCellValue('C30', $cobreOrder->clip_adherible);
        $sheet->setCellValue('C31', $cobreOrder->cadena_distribucion);
        $sheet->setCellValue('C32', $cobreOrder->argolla_fleje);
        $sheet->setCellValue('C33', $cobreOrder->taquete);


        $sheet->setCellValue('D26', 'MODEM');
        $sheet->setCellValue('D27', 'Sujetador P/Cor Int/ext');
        $sheet->setCellValue('D28', 'Sujetador P/Cor Acom de 2 Pares');
        $sheet->setCellValue('D29', 'Roseta');
        $sheet->setCellValue('D30', 'Sello Pasamuro');
        $sheet->setCellValue('D31', 'Cable RJ11');
        $sheet->setCellValue('D32', 'Cord Café/Naranja');
        $sheet->setCellValue('D33', 'Cord Naranja/Blanco');

    
        $sheet->setCellValue('E26', $cobreOrder->modem);
        $sheet->setCellValue('E27', $cobreOrder->sujetador_p_cor_int_ext);
        $sheet->setCellValue('E28', $cobreOrder->sujetador_p_cor_acom_de_2_pares);
        $sheet->setCellValue('E29', $cobreOrder->roseta);
        $sheet->setCellValue('E30', $cobreOrder->sello_pasamuro);
        $sheet->setCellValue('E31', $cobreOrder->cable_rj11);
        $sheet->setCellValue('E32', $cobreOrder->cord_cafe_naranja);
        $sheet->setCellValue('E33', $cobreOrder->cord_naranja_blanco);

        $sheet->setCellValue('F26', 'Cord Rojo/Blanco');
        $sheet->setCellValue('F27', 'Gancho Tensor');
        $sheet->setCellValue('F28', 'Cinta de Aislar');
        $sheet->setCellValue('F29', 'Tubo Ranurado');
        $sheet->setCellValue('F30', 'Lubricante');
        $sheet->setCellValue('F31', 'Cord Marfil (metros)');
        $sheet->setCellValue('F32', 'Longitud Acometida (mertos)');

        $sheet->setCellValue('G26', strval($cobreOrder->cord_rojo_blanco) );
        $sheet->setCellValue('G27', strval($cobreOrder->gancho_tensor) );
        $sheet->setCellValue('G28', strval($cobreOrder->cinta_de_aislar) );
        $sheet->setCellValue('G29', strval($cobreOrder->tubo_ranurado) );
        $sheet->setCellValue('G30', strval($cobreOrder->lubricante) );
        $sheet->setCellValue('G31', strval($cobreOrder->cord_marfil_metros) );
        $sheet->setCellValue('G32', strval($cobreOrder->longitud_acometida_metros) );


        $sheet->setCellValue('G36', 'HORA DE GENERACION PORTAL:   '. $cobreOrder->hora_generacion_portal);
        $sheet->setCellValue('G37', 'HORA DE LIQUIDACION:   '. $cobreOrder->hora_liquidacion);
        $sheet->setCellValue('G38', 'NOMBRE Y FIRMA DEL TECNICO:   '. $user->name . ' '. $user->lastname);

        $sheet->setCellValue('H26', 'NEGOCIO');
        $sheet->setCellValue('H27', 'CASA');
        $sheet->setCellValue('H28', 'EDIFICIOS');
        $sheet->setCellValue('H29', 'PLAZA');
        $sheet->setCellValue('H30', 'RESIDENCIAL');
        $sheet->setCellValue('H31', 'AEREA');
        $sheet->setCellValue('H32', 'SUBTERRANEA');
       
        $sheet->setCellValue('I26', (isset($cobreOrder->tipo_negocio ) &&$cobreOrder->tipo_negocio ==1 )? '✓': '');
        $sheet->setCellValue('I27', (isset($cobreOrder->tipo_casa ) &&$cobreOrder->tipo_casa ==1 )? '✓': '' );
        $sheet->setCellValue('I28', (isset($cobreOrder->tipo_edificios ) &&$cobreOrder->tipo_edificios ==1 )? '✓': '' );
        $sheet->setCellValue('I29', (isset($cobreOrder->tipo_plaza ) &&$cobreOrder->tipo_plaza ==1 )? '✓': '' );
        $sheet->setCellValue('I30', (isset($cobreOrder->tipo_residencial ) &&$cobreOrder->tipo_residencial ==1 )? '✓': '' );
        $sheet->setCellValue('I31', (isset($cobreOrder->tipo_aerea ) &&$cobreOrder->tipo_aerea ==1 )? '✓': '' );
        $sheet->setCellValue('I32', (isset($cobreOrder->tipo_subterraneo ) &&$cobreOrder->tipo_subterraneo ==1 )? '✓': '' );
       

        $sheet->setCellValue('J26', 'CORDONES TELMEX');
        $sheet->setCellValue('J27', 'LOGITUD ACUM');
        $sheet->setCellValue('J28', 'FIBRA DE 25 M');
        $sheet->setCellValue('J29', 'FIBRA DE 50 M');
        $sheet->setCellValue('J30', 'FIBRA DE 75 M');
        $sheet->setCellValue('J31', 'FIBRA DE 100 M');
        $sheet->setCellValue('J32', 'FIBRA DE 125 M');
        $sheet->setCellValue('J33', 'METRA E/BOBINA');

        $sheet->setCellValue('K27', $cobreOrder->longitud_acum_tel);
        $sheet->setCellValue('K28', $cobreOrder->fibra_25m_tel);
        $sheet->setCellValue('K29', $cobreOrder->fibra_50m_tel);
        $sheet->setCellValue('K30', $cobreOrder->fibra_75m_tel);
        $sheet->setCellValue('K31', $cobreOrder->fibra_100m_tel);
        $sheet->setCellValue('K32', $cobreOrder->fibra_125m_tel);
        $sheet->setCellValue('K33', $cobreOrder->metral_bobina_tel);
       
        $sheet->setCellValue('L26', 'CORDONES HUAWEI');
        $sheet->setCellValue('L27', 'LOGITUD ACUM');
        $sheet->setCellValue('L28', 'CORD. PREC. 25 M');
        $sheet->setCellValue('L29', 'CORD. PREC. 50 M');
        $sheet->setCellValue('L30', 'CORD. PREC. 80 M');
        $sheet->setCellValue('L31', 'CORD. PREC. 100 M');
        $sheet->setCellValue('L32', 'CORD. PREC. 120 M');
        $sheet->setCellValue('L33', 'CORD. PREC. 150 M');
        $sheet->setCellValue('L34', 'CORD. PREC. 200 M');

        $sheet->setCellValue('M27', $cobreOrder->longitud_acum_huawei);
        $sheet->setCellValue('M28', $cobreOrder->cord_prec_25m_huawei);
        $sheet->setCellValue('M29', $cobreOrder->cord_prec_50m_huawei);
        $sheet->setCellValue('M30', $cobreOrder->cord_prec_80m_huawei);
        $sheet->setCellValue('M31', $cobreOrder->cord_prec_100m_huawei);
        $sheet->setCellValue('M32', $cobreOrder->cord_prec_120m_huawei);
        $sheet->setCellValue('M33', $cobreOrder->cord_prec_150m_huawei);
        $sheet->setCellValue('M34', $cobreOrder->cord_prec_200m_huawei);

        $sheet->setCellValue('G35', 'DATOS DE LA ONT INSTALADA');
        $sheet->setCellValue('F40', 'Estimado cliente!');
        $sheet->setCellValue('H40', '¿El técnico le ofrecio los siguientes productos Telmex para mejorar la experiencia INFINITUM de su hogar?');
        $sheet->setCellValue('F41', '1) Incremento la velocidad de navegación (cambio de paquete)');
        $sheet->setCellValue('F42', '2) Extensor de señan WI-FI');
        $sheet->setCellValue('F43', '3) Router');

        $sheet->setCellValue('K41', 'Si');
        $sheet->setCellValue('K42', 'Si');
        $sheet->setCellValue('K43', 'Si');

        $sheet->setCellValue('L41', 'NO');
        $sheet->setCellValue('L42', 'NO');
        $sheet->setCellValue('L43', 'NO');

        $sheet->setCellValue('B36', 'NUMERO DE SERIE:');
        $sheet->setCellValue('B37', 'ALFANUMERICO:');
        $sheet->setCellValue('B38', 'KEY:');
        $sheet->setCellValue('B39', 'Nº ONT DE COBRE:');
        $sheet->setCellValue('B40', 'OBSERVACIONES:');
        $sheet->setCellValue('B42', 'CORREO ELECTRONICO:');
        $sheet->setCellValue('B43', 'CLAROVIDEO:');
        $sheet->setCellValue('B44', $cobreOrder->activado == 1? 'SI ✓    NO' : 'SI    NO  ✓');
        $sheet->setCellValue('C36', $cobreOrder->numero_serie);
        $sheet->setCellValue('C37', $cobreOrder->alfanumerico);
        $sheet->setCellValue('C38', $cobreOrder->key);
        $sheet->setCellValue('C39', $cobreOrder->ont_cobre);
        $sheet->setCellValue('C40', $cobreOrder->observaciones);
        $sheet->setCellValue('C42', $cobreOrder->correo_electronico);
        $sheet->setCellValue('C43', $cobreOrder->clarovideo);


        header('Content-Disposition: attachment;filename="' . 'ORDEN FIBRA ' . strtoupper($cobreOrder->id) . '.xls');
        header('Cache-Control: max-age=0');
          
        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xls');
        $writer->save('php://output');
    }
    

    public function cobrePDF(Request $request) {
        
        $cobreOrder = CobreOrder::where('id',$request->id)->get()->first();
        $user = User::where('id', $cobreOrder->user_id)->get()->first();

      
        $pdf = \PDF::loadView('cobre.pdf', ['cobreOrder' => $cobreOrder, 'user' => $user]);
        $pdf->setPaper('Letter', 'portrait');
        $filename = $cobreOrder->id. ".pdf";
        $pdf->save(public_path($filename));
   
        return response()->download(public_path($filename))->deleteFileAfterSend(true);
    }
}
