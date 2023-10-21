<?php

namespace App\Http\Controllers;

use App\Models\FibraOrder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing;

class FibraController extends Controller
{
    public function fibra() {

        if(auth()->user()->hasRole('admin')){

         
            $fibraOrders = FibraOrder::all();
        }else{
            
            $fibraOrders = FibraOrder::where('user_id', Auth()->user()->id)->get();

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

    public function fibraEdit($id){

        $fibraOrder = FibraOrder::where('id',$id)->get()->first();
        return view('fibra.edit', compact('fibraOrder'));
    }

    public function fibraUpdate(Request $request){
        DB::table('fibra_order')->where('id', $request->id)->update([
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
            'argolla_caja_exedente' => $request->argolla_caja_exedente,
            'cierre_conexion' => $request->cierre_conexion,
            'cincho_negro' => $request->cincho_negro,
            'clip_adherible' => $request->clip_adherible,
            'cadena_distribucion' => $request->cadena_distribucion,
            'argolla_fleje' => $request->argolla_fleje,
            'conector_mecanico' => $request->conector_mecanico,
            'ont' => $request->ont,
            'roceta_optica' => $request->roceta_optica,
            'sello_pasa_muro' => $request->sello_pasa_muro,
            'sujetador_clavo' => $request->sujetador_clavo,
            'taquete' => $request->taquete,
            'gancho_tensor' => $request->gancho_tensor,
            'cinta_aislar' => $request->cinta_aislar,
            'cordones_telmex' => $request->cordones_telmex,
            'cordones_huawei' => $request->cordones_huawei,
            'tipo_negocio' => isset($request->tipo_negocio)? true: false,
            'tipo_casa' => isset($request->tipo_casa)? true: false,
            'tipo_edificios' => isset($request->tipo_edificios)? true: false,
            'tipo_plaza' =>  isset($request->tipo_plaza)? true: false,
            'tipo_residencial' => isset($request->tipo_residencial)? true: false,
            'tipo_aerea' => isset($request->tipo_aerea)? true: false,
            'tipo_subterraneo' => isset($request->tipo_subterraneo)? true: false,
            'longitud_acum_tel' => $request->longitud_acum_tel,
            'fibra_25m_tel' => isset($request->fibra_25m_tel)? true: false,
            'fibra_50m_tel' => isset($request->fibra_50m_tel)? true: false,
            'fibra_75m_tel' =>  isset($request->fibra_75m_tel)? true: false,
            'fibra_100m_tel' => isset($request->fibra_100m_tel)? true: false,
            'fibra_125m_tel' =>  isset($request->fibra_125m_tel)? true: false,
            'metral_bobina_tel' => $request->metral_bobina_tel? true: false,
            'longitud_acum_huawei' => $request->longitud_acum_huawei,
            'cord_prec_25m_huawei' => isset($request->cord_prec_25m_huawei)? true: false,
            'cord_prec_50m_huawei' =>  isset($request->cord_prec_50m_huawei)? true: false,
            'cord_prec_80m_huawei' =>  isset($request->cord_prec_80m_huawei)? true: false,
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
       /*  $fibraOrder = FibraOrder::where('id',$id)->get()->first(); */
        return redirect()->action([FibraController::class, 'fibra'])->with('msg', 'Solicitud actualizada con exito');
    }


    public function fibraDelete(){
        return view('fibra.create');
    }


    function fibraXLSX(Request $request){

    
        $fibraOrder = FibraOrder::where('id',$request->id)->get()->first();
        $user = User::where('id', $fibraOrder->user_id)->get()->first();
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


        $sheet->getStyle('E26')->applyFromArray($styleRows);
        $sheet->getStyle('E27')->applyFromArray($styleRows);
        $sheet->getStyle('E28')->applyFromArray($styleRows);
        $sheet->getStyle('E29')->applyFromArray($styleRows);
        $sheet->getStyle('E30')->applyFromArray($styleRows);
        $sheet->getStyle('E31')->applyFromArray($styleRows);
        $sheet->getStyle('E32')->applyFromArray($styleRows);

        $sheet->getStyle('F26')->applyFromArray($styleRows);
        $sheet->getStyle('F27')->applyFromArray($styleRows);
        $sheet->getStyle('F28')->applyFromArray($styleRows);
        $sheet->getStyle('F29')->applyFromArray($styleRows);
        $sheet->getStyle('F30')->applyFromArray($styleRows);
        $sheet->getStyle('F31')->applyFromArray($styleRows);
        $sheet->getStyle('F32')->applyFromArray($styleRows);
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
        $sheet->setCellValue('K12', 'FIBRA R-'. $fibraOrder->id);

        $sheet->setCellValue('G14', 'ORDEN DE SERVICIO:');
        $sheet->setCellValue('B15', 'TELEFONO:');
        $sheet->setCellValue('B16', 'TIPO O.S.:');
        $sheet->setCellValue('B17', 'Nº DE O.S.:');

        $sheet->setCellValue('D15', $fibraOrder->telefono);
        $sheet->setCellValue('D16', $fibraOrder->tipo_os);
        $sheet->setCellValue('D17', $fibraOrder->numero_os);

        $sheet->setCellValue('E17', 'PISA:');

        $sheet->setCellValue('F15', 'ESTATUS:');
        $sheet->setCellValue('F16', $fibraOrder->status);
        $sheet->setCellValue('F17', $fibraOrder->pysa);

        $sheet->setCellValue('H15', 'HORA DE LLEGADA:');      
        $sheet->setCellValue('H16', 'FECHA:');
        $sheet->setCellValue('H17', 'FOLIO TEC:');

        $sheet->setCellValue('J15', $fibraOrder->hora_llegada);      
        $sheet->setCellValue('J16', $fibraOrder->fecha);
        $sheet->setCellValue('J17', $fibraOrder->folio_tec);
      
        $sheet->setCellValue('B18', 'NOMBRE DEL CLIENTE:');
        $sheet->setCellValue('B19', 'DIRECCION:');
        $sheet->setCellValue('B20', 'ENTRE CALLES:');



        $sheet->setCellValue('B21', 'COLONIA:');

        $sheet->setCellValue('D18', $fibraOrder->nombre_cliente);
        $sheet->setCellValue('D19', $fibraOrder->direccion);
        $sheet->setCellValue('D20', $fibraOrder->entre_calles);
        $sheet->setCellValue('D21', $fibraOrder->colonia);

        $sheet->setCellValue('B22', 'EDIFICIO:');
        $sheet->setCellValue('E22', 'DEPTO:');
        $sheet->setCellValue('H22', 'PORTALERA:');


        $sheet->setCellValue('D22', $fibraOrder->edificio);
        $sheet->setCellValue('F22', $fibraOrder->depto);
        $sheet->setCellValue('I22', $fibraOrder->portalera);


        $sheet->setCellValue('B23', 'DISTRITO');
        $sheet->setCellValue('D23', 'TERMINAL');
        $sheet->setCellValue('F23', 'PUERTO');
        $sheet->setCellValue('H23', 'POTENCIA');
        $sheet->setCellValue('J23', 'NAVEGACION');

        $sheet->setCellValue('B24', $fibraOrder->distrito);
        $sheet->setCellValue('D24', $fibraOrder->terminal);
        $sheet->setCellValue('F24', $fibraOrder->puerto);
        $sheet->setCellValue('H24', $fibraOrder->potencia);
        $sheet->setCellValue('J24', $fibraOrder->navegacion);


        $sheet->setCellValue('D25', 'MATERIAL INSTALADO');
        $sheet->setCellValue('J25', 'TIPO Y LOGITUD DE INSTALACIÓN');



        $sheet->setCellValue('B26', 'Argolla Caja Exedente');
        $sheet->setCellValue('B27', 'Cierre Conexión');
        $sheet->setCellValue('B28', 'Cincho Negro');
        $sheet->setCellValue('B29', 'Clip adherible');
        $sheet->setCellValue('B30', 'Cadena de Distribucion');
        $sheet->setCellValue('B31', 'Argolla Fleje');
        
        $sheet->setCellValue('C26', $fibraOrder->argolla_caja_exedente);
        $sheet->setCellValue('C27', $fibraOrder->cierre_conexion);
        $sheet->setCellValue('C28', $fibraOrder->cincho_negro);
        $sheet->setCellValue('C29', $fibraOrder->clip_adherible);
        $sheet->setCellValue('C30', $fibraOrder->cadena_distribucion);
        $sheet->setCellValue('C31', $fibraOrder->argolla_fleje);


        $sheet->setCellValue('D26', 'Conector Mecanico');
        $sheet->setCellValue('D27', 'ONT');
        $sheet->setCellValue('D28', 'Roceta Optica');
        $sheet->setCellValue('D29', 'Sello Pasa Muro');
        $sheet->setCellValue('D30', 'Sujetador Clavo');
        $sheet->setCellValue('D31', 'Taquete');
        $sheet->setCellValue('D32', 'Cierre Conexión');

        $sheet->setCellValue('E26', $fibraOrder->conector_mecanico);
        $sheet->setCellValue('E27', $fibraOrder->ont);
        $sheet->setCellValue('E28', $fibraOrder->roceta_optica);
        $sheet->setCellValue('E29', $fibraOrder->sello_pasa_muro);
        $sheet->setCellValue('E30', $fibraOrder->sujetador_clavo);
        $sheet->setCellValue('E31', $fibraOrder->taquete);
        $sheet->setCellValue('E32', $fibraOrder->gancho_tensor);

        $sheet->setCellValue('F26', 'Gancho Tensor');
        $sheet->setCellValue('F27', 'Cinta de Aislar');
        $sheet->setCellValue('F28', 'Cordones Telmex');
        $sheet->setCellValue('F29', 'Cordones Huawei');


        $sheet->setCellValue('G36', 'HORA DE GENERACION PORTAL:   '. $fibraOrder->hora_generacion_portal);
        $sheet->setCellValue('G37', 'HORA DE LIQUIDACION:   '. $fibraOrder->hora_liquidacion);
        $sheet->setCellValue('G38', 'NOMBRE Y FIRMA DEL TECNICO:   '. $user->name . ' '. $user->lastname);

        $sheet->setCellValue('G26', $fibraOrder->gancho_tensor);
        $sheet->setCellValue('G27', $fibraOrder->cinta_aislar);
        $sheet->setCellValue('G28', $fibraOrder->cordones_telmex);
        $sheet->setCellValue('G29', $fibraOrder->cordones_huawei);

        $sheet->setCellValue('H26', 'NEGOCIO');
        $sheet->setCellValue('H27', 'CASA');
        $sheet->setCellValue('H28', 'EDIFICIOS');
        $sheet->setCellValue('H29', 'PLAZA');
        $sheet->setCellValue('H30', 'RESIDENCIAL');
        $sheet->setCellValue('H31', 'AEREA');
        $sheet->setCellValue('H32', 'SUBTERRANEA');
       
        $sheet->setCellValue('I26', (isset($fibraOrder->tipo_negocio ) &&$fibraOrder->tipo_negocio ==1 )? '✓': '');
        $sheet->setCellValue('I27', (isset($fibraOrder->tipo_casa ) &&$fibraOrder->tipo_casa ==1 )? '✓': '' );
        $sheet->setCellValue('I28', (isset($fibraOrder->tipo_edificios ) &&$fibraOrder->tipo_edificios ==1 )? '✓': '' );
        $sheet->setCellValue('I29', (isset($fibraOrder->tipo_plaza ) &&$fibraOrder->tipo_plaza ==1 )? '✓': '' );
        $sheet->setCellValue('I30', (isset($fibraOrder->tipo_residencial ) &&$fibraOrder->tipo_residencial ==1 )? '✓': '' );
        $sheet->setCellValue('I31', (isset($fibraOrder->tipo_aerea ) &&$fibraOrder->tipo_aerea ==1 )? '✓': '' );
        $sheet->setCellValue('I32', (isset($fibraOrder->tipo_subterraneo ) &&$fibraOrder->tipo_subterraneo ==1 )? '✓': '' );
       

        $sheet->setCellValue('J26', 'CORDONES TELMEX');
        $sheet->setCellValue('J27', 'LOGITUD ACUM');
        $sheet->setCellValue('J28', 'FIBRA DE 25 M');
        $sheet->setCellValue('J29', 'FIBRA DE 50 M');
        $sheet->setCellValue('J30', 'FIBRA DE 75 M');
        $sheet->setCellValue('J31', 'FIBRA DE 100 M');
        $sheet->setCellValue('J32', 'FIBRA DE 125 M');
        $sheet->setCellValue('J33', 'METRA E/BOBINA');

        $sheet->setCellValue('K27', $fibraOrder->longitud_acum_tel);
        $sheet->setCellValue('K28', $fibraOrder->fibra_25m_tel);
        $sheet->setCellValue('K29', $fibraOrder->fibra_50m_tel);
        $sheet->setCellValue('K30', $fibraOrder->fibra_75m_tel);
        $sheet->setCellValue('K31', $fibraOrder->fibra_100m_tel);
        $sheet->setCellValue('K32', $fibraOrder->fibra_125m_tel);
        $sheet->setCellValue('K33', $fibraOrder->metral_bobina_tel);
       
        $sheet->setCellValue('L26', 'CORDONES HUAWEI');
        $sheet->setCellValue('L27', 'LOGITUD ACUM');
        $sheet->setCellValue('L28', 'CORD. PREC. 25 M');
        $sheet->setCellValue('L29', 'CORD. PREC. 50 M');
        $sheet->setCellValue('L30', 'CORD. PREC. 80 M');
        $sheet->setCellValue('L31', 'CORD. PREC. 100 M');
        $sheet->setCellValue('L32', 'CORD. PREC. 120 M');
        $sheet->setCellValue('L33', 'CORD. PREC. 150 M');
        $sheet->setCellValue('L34', 'CORD. PREC. 200 M');

        $sheet->setCellValue('M27', $fibraOrder->longitud_acum_huawei);
        $sheet->setCellValue('M28', $fibraOrder->cord_prec_25m_huawei);
        $sheet->setCellValue('M29', $fibraOrder->cord_prec_50m_huawei);
        $sheet->setCellValue('M30', $fibraOrder->cord_prec_80m_huawei);
        $sheet->setCellValue('M31', $fibraOrder->cord_prec_100m_huawei);
        $sheet->setCellValue('M32', $fibraOrder->cord_prec_120m_huawei);
        $sheet->setCellValue('M33', $fibraOrder->cord_prec_150m_huawei);
        $sheet->setCellValue('M34', $fibraOrder->cord_prec_200m_huawei);

        $sheet->setCellValue('G35', 'DATOS DE LA ONT INSTALADA');

        $sheet->setCellValue('B36', 'NUMERO DE SERIE:');
        $sheet->setCellValue('B37', 'ALFANUMERICO:');
        $sheet->setCellValue('B38', 'KEY:');
        $sheet->setCellValue('B39', 'Nº ONT DE COBRE:');
        $sheet->setCellValue('B40', 'OBSERVACIONES:');
        $sheet->setCellValue('B42', 'CORREO ELECTRONICO:');
        $sheet->setCellValue('B43', 'CLAROVIDEO:');
        $sheet->setCellValue('B44', $fibraOrder->activado == 1? 'SI ✓    NO' : 'SI    NO  ✓');
        $sheet->setCellValue('C36', $fibraOrder->numero_serie);
        $sheet->setCellValue('C37', $fibraOrder->alfanumerico);
        $sheet->setCellValue('C38', $fibraOrder->key);
        $sheet->setCellValue('C39', $fibraOrder->ont_cobre);
        $sheet->setCellValue('C40', $fibraOrder->observaciones);
        $sheet->setCellValue('C42', $fibraOrder->correo_electronico);
        $sheet->setCellValue('C43', $fibraOrder->clarovideo);


        header('Content-Disposition: attachment;filename="' . 'ORDEN FIBRA ' . strtoupper($fibraOrder->id) . '.xls');
        header('Cache-Control: max-age=0');
          
        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xls');
        $writer->save('php://output');
    }
}
