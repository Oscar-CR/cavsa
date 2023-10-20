<?php

namespace App\Http\Controllers;

use App\Models\FibraOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
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
       
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        //Estilo
        $styleRows = [
            'borders' => [
                'outline' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => 'FF000000'],
                ],
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
        $sheet->getStyle('B4:B6')->applyFromArray($styleRows);

        $sheet->getStyle('C4:D4')->applyFromArray($styleRows);
        $sheet->getStyle('C5:D5')->applyFromArray($styleRows);
        $sheet->getStyle('C6:D6')->applyFromArray($styleRows);

        $sheet->getStyle('E4:E6')->applyFromArray($styleRows);

        $sheet->getStyle('F4:G4')->applyFromArray($styleRows);
        $sheet->getStyle('F5:G5')->applyFromArray($styleRows);
        $sheet->getStyle('F6:G6')->applyFromArray($styleRows);

        $sheet->getStyle('H4:I6')->applyFromArray($styleRows);

        $sheet->getStyle('J4:M4')->applyFromArray($styleRows);
        $sheet->getStyle('J5:M5')->applyFromArray($styleRows);
        $sheet->getStyle('J6:M6')->applyFromArray($styleRows);


        $sheet->getStyle('B7:C7')->applyFromArray($styleRows);
        $sheet->getStyle('B8:C8')->applyFromArray($styleRows);
        $sheet->getStyle('B9:C9')->applyFromArray($styleRows);
        $sheet->getStyle('B10:C10')->applyFromArray($styleRows);
        $sheet->getStyle('B11:C11')->applyFromArray($styleRows);


        $sheet->getStyle('D7:M7')->applyFromArray($styleRows);
        $sheet->getStyle('D8:M8')->applyFromArray($styleRows);
        $sheet->getStyle('D9:M9')->applyFromArray($styleRows);  
        $sheet->getStyle('D10:M10')->applyFromArray($styleRows);
        

        $sheet->getStyle('D11')->applyFromArray($styleRows);
        $sheet->getStyle('E11')->applyFromArray($styleRows);
        $sheet->getStyle('F11')->applyFromArray($styleRows);
        $sheet->getStyle('G11:H11')->applyFromArray($styleRows);
        $sheet->getStyle('I11')->applyFromArray($styleRows);
        $sheet->getStyle('I11:M11')->applyFromArray($styleRows);
        
        $sheet->getStyle('B12:M13')->applyFromArray($styleRows);

        $sheet->getStyle('B13')->applyFromArray($styleRows);
        $sheet->getStyle('D13')->applyFromArray($styleRows);
        $sheet->getStyle('F13')->applyFromArray($styleRows);
        $sheet->getStyle('H13')->applyFromArray($styleRows);
        $sheet->getStyle('J13')->applyFromArray($styleRows);


        $sheet->getStyle('B14:M14')->applyFromArray($styleRows);

        $sheet->getStyle('B15')->applyFromArray($styleRows);
        $sheet->getStyle('B16')->applyFromArray($styleRows);
        $sheet->getStyle('B17')->applyFromArray($styleRows);
        $sheet->getStyle('B18')->applyFromArray($styleRows);
        $sheet->getStyle('B19')->applyFromArray($styleRows);
        $sheet->getStyle('B20')->applyFromArray($styleRows);
        $sheet->getStyle('B21')->applyFromArray($styleRows);

        $sheet->getStyle('C15')->applyFromArray($styleRows);
        $sheet->getStyle('C16')->applyFromArray($styleRows);
        $sheet->getStyle('C17')->applyFromArray($styleRows);
        $sheet->getStyle('C18')->applyFromArray($styleRows);
        $sheet->getStyle('C19')->applyFromArray($styleRows);
        $sheet->getStyle('C20')->applyFromArray($styleRows);
        $sheet->getStyle('C21')->applyFromArray($styleRows);

        $sheet->getStyle('D15')->applyFromArray($styleRows);
        $sheet->getStyle('D16')->applyFromArray($styleRows);
        $sheet->getStyle('D17')->applyFromArray($styleRows);
        $sheet->getStyle('D18')->applyFromArray($styleRows);
        $sheet->getStyle('D19')->applyFromArray($styleRows);
        $sheet->getStyle('D20')->applyFromArray($styleRows);
        $sheet->getStyle('D21')->applyFromArray($styleRows);


        $sheet->getStyle('E15')->applyFromArray($styleRows);
        $sheet->getStyle('E16')->applyFromArray($styleRows);
        $sheet->getStyle('E17')->applyFromArray($styleRows);
        $sheet->getStyle('E18')->applyFromArray($styleRows);
        $sheet->getStyle('E19')->applyFromArray($styleRows);
        $sheet->getStyle('E20')->applyFromArray($styleRows);
        $sheet->getStyle('E21')->applyFromArray($styleRows);

        $sheet->getStyle('F15')->applyFromArray($styleRows);
        $sheet->getStyle('F16')->applyFromArray($styleRows);
        $sheet->getStyle('F17')->applyFromArray($styleRows);
        $sheet->getStyle('F18')->applyFromArray($styleRows);
        $sheet->getStyle('F19')->applyFromArray($styleRows);
        $sheet->getStyle('F20')->applyFromArray($styleRows);
        $sheet->getStyle('F21')->applyFromArray($styleRows);

        $sheet->getStyle('G15')->applyFromArray($styleRows);
        $sheet->getStyle('G16')->applyFromArray($styleRows);
        $sheet->getStyle('G17')->applyFromArray($styleRows);
        $sheet->getStyle('G18')->applyFromArray($styleRows);
        $sheet->getStyle('G19')->applyFromArray($styleRows);
        $sheet->getStyle('G20')->applyFromArray($styleRows);
        $sheet->getStyle('G21')->applyFromArray($styleRows);

        $sheet->getStyle('H15')->applyFromArray($styleRows);
        $sheet->getStyle('H16')->applyFromArray($styleRows);
        $sheet->getStyle('H17')->applyFromArray($styleRows);
        $sheet->getStyle('H18')->applyFromArray($styleRows);
        $sheet->getStyle('H19')->applyFromArray($styleRows);
        $sheet->getStyle('H20')->applyFromArray($styleRows);
        $sheet->getStyle('H21')->applyFromArray($styleRows);

        $sheet->getStyle('I15')->applyFromArray($styleRows);
        $sheet->getStyle('I16')->applyFromArray($styleRows);
        $sheet->getStyle('I17')->applyFromArray($styleRows);
        $sheet->getStyle('I18')->applyFromArray($styleRows);
        $sheet->getStyle('I19')->applyFromArray($styleRows);
        $sheet->getStyle('I20')->applyFromArray($styleRows);
        $sheet->getStyle('I21')->applyFromArray($styleRows);

        $sheet->getStyle('J15:K15')->applyFromArray($styleRows);
        $sheet->getStyle('J16')->applyFromArray($styleRows);
        $sheet->getStyle('J17')->applyFromArray($styleRows);
        $sheet->getStyle('J18')->applyFromArray($styleRows);
        $sheet->getStyle('J19')->applyFromArray($styleRows);
        $sheet->getStyle('J20')->applyFromArray($styleRows);
        $sheet->getStyle('J21')->applyFromArray($styleRows);

        $sheet->getStyle('K16')->applyFromArray($styleRows);
        $sheet->getStyle('K17')->applyFromArray($styleRows);
        $sheet->getStyle('K18')->applyFromArray($styleRows);
        $sheet->getStyle('K19')->applyFromArray($styleRows);
        $sheet->getStyle('K20')->applyFromArray($styleRows);
        $sheet->getStyle('K21')->applyFromArray($styleRows);

        $sheet->getStyle('L15:M15')->applyFromArray($styleRows);
        $sheet->getStyle('L16')->applyFromArray($styleRows);
        $sheet->getStyle('L17')->applyFromArray($styleRows);
        $sheet->getStyle('L18')->applyFromArray($styleRows);
        $sheet->getStyle('L19')->applyFromArray($styleRows);
        $sheet->getStyle('L20')->applyFromArray($styleRows);
        $sheet->getStyle('L21')->applyFromArray($styleRows);

        $sheet->getStyle('M16')->applyFromArray($styleRows);
        $sheet->getStyle('M17')->applyFromArray($styleRows);
        $sheet->getStyle('M18')->applyFromArray($styleRows);
        $sheet->getStyle('M19')->applyFromArray($styleRows);
        $sheet->getStyle('M20')->applyFromArray($styleRows);
        $sheet->getStyle('M21')->applyFromArray($styleRows);


        //Datos en celdas

        $imagePath = asset('/img/infinitum_con.png');

        // Crear un objeto Drawing (imagen) y configurar sus propiedades
        $drawing = new MemoryDrawing();
        $drawing->setName('Imagen');
        $drawing->setDescription('Descripción de la imagen');
        $drawing->setImageResource(imagecreatefrompng($imagePath));
        $drawing->setRenderingFunction(MemoryDrawing::RENDERING_PNG);
        $drawing->setMimeType(MemoryDrawing::MIMETYPE_PNG);
        $drawing->setCoordinates('D1'); // Coordenadas donde se ubicará la imagen en la celda D1.

        // Agregar la imagen a la hoja de cálculo.
        $drawing->setWorksheet($sheet);

    

        $sheet->setCellValue('B3', 'ORDEN DE SERVICIO:');
        $sheet->setCellValue('B4', 'TELEFONO:');
        $sheet->setCellValue('B5', 'TIPO O.S.:');
        $sheet->setCellValue('B6', 'Nº DE O.S.:');

        $sheet->setCellValue('D4', $fibraOrder->telefono);
        $sheet->setCellValue('D5', $fibraOrder->tipo_os);
        $sheet->setCellValue('D6', $fibraOrder->numero_os);

        $sheet->setCellValue('E6', 'PISA:');

        $sheet->setCellValue('F4', 'ESTATUS:');
        $sheet->setCellValue('F5', $fibraOrder->status);
        $sheet->setCellValue('F6', $fibraOrder->pysa);

        $sheet->setCellValue('H4', 'HORA DE LLEGADA:');      
        $sheet->setCellValue('H5', 'FECHA:');
        $sheet->setCellValue('H6', 'FOLIO TEC:');

        $sheet->setCellValue('J4', $fibraOrder->hora_llegada);      
        $sheet->setCellValue('J5', $fibraOrder->fecha);
        $sheet->setCellValue('J6', $fibraOrder->folio_tec);
      
        $sheet->setCellValue('B7', 'NOMBRE DEL CLIENTE:');
        $sheet->setCellValue('B8', 'DIRECCION:');
        $sheet->setCellValue('B9', 'ENTRE CALLES:');



        $sheet->setCellValue('B10', 'COLONIA:');

        $sheet->setCellValue('D7', $fibraOrder->nombre_cliente);
        $sheet->setCellValue('D8', $fibraOrder->direccion);
        $sheet->setCellValue('D9', $fibraOrder->entre_calles);
        $sheet->setCellValue('D10', $fibraOrder->colonia);

        $sheet->setCellValue('B11', 'EDIFICIO:');
        $sheet->setCellValue('E11', 'DEPTO:');
        $sheet->setCellValue('H11', 'PORTALERA:');


        $sheet->setCellValue('D11', $fibraOrder->edificio);
        $sheet->setCellValue('F11', $fibraOrder->depto);
        $sheet->setCellValue('I11', $fibraOrder->portalera);


        $sheet->setCellValue('B12', 'DISTRITO');
        $sheet->setCellValue('D12', 'TERMINAL');
        $sheet->setCellValue('F12', 'PUERTO');
        $sheet->setCellValue('H12', 'POTENCIA');
        $sheet->setCellValue('J12', 'NAVEGACION');

        $sheet->setCellValue('B13', $fibraOrder->distrito);
        $sheet->setCellValue('D13', $fibraOrder->terminal);
        $sheet->setCellValue('F13', $fibraOrder->puerto);
        $sheet->setCellValue('H13', $fibraOrder->potencia);
        $sheet->setCellValue('J13', $fibraOrder->navegacion);


        $sheet->setCellValue('D14', 'MATERIAL INSTALADO');
        $sheet->setCellValue('J14', 'TIPO Y LOGITUD DE INSTALACIÓN');



        $sheet->setCellValue('B15', 'Argolla Caja Exedente');
        $sheet->setCellValue('B16', 'Cierre Conexión');
        $sheet->setCellValue('B17', 'Cincho Negro');
        $sheet->setCellValue('B18', 'Clip adherible');
        $sheet->setCellValue('B19', 'Cadena de Distribucion');
        $sheet->setCellValue('B20', 'Argolla Fleje');
        
        $sheet->setCellValue('C15', $fibraOrder->argolla_caja_exedente);
        $sheet->setCellValue('C16', $fibraOrder->cierre_conexion);
        $sheet->setCellValue('C17', $fibraOrder->cincho_negro);
        $sheet->setCellValue('C18', $fibraOrder->clip_adherible);
        $sheet->setCellValue('C19', $fibraOrder->cadena_distribucion);
        $sheet->setCellValue('C20', $fibraOrder->argolla_fleje);


        $sheet->setCellValue('D15', 'Conector Mecanico');
        $sheet->setCellValue('D16', 'ONT');
        $sheet->setCellValue('D17', 'Roceta Optica');
        $sheet->setCellValue('D18', 'Sello Pasa Muro');
        $sheet->setCellValue('D19', 'Sujetador Clavo');
        $sheet->setCellValue('D20', 'Taquete');
        $sheet->setCellValue('D21', 'Cierre Conexión');

        $sheet->setCellValue('E15', $fibraOrder->conector_mecanico);
        $sheet->setCellValue('E16', $fibraOrder->ont);
        $sheet->setCellValue('E17', $fibraOrder->roceta_optica);
        $sheet->setCellValue('E18', $fibraOrder->sello_pasa_muro);
        $sheet->setCellValue('E19', $fibraOrder->sujetador_clavo);
        $sheet->setCellValue('E20', $fibraOrder->taquete);
        $sheet->setCellValue('E20', $fibraOrder->gancho_tensor);

        $sheet->setCellValue('F15', 'Gancho Tensor');
        $sheet->setCellValue('F16', 'Cinta de Aislar');
        $sheet->setCellValue('F17', 'Cordones Telmex');
        $sheet->setCellValue('F18', 'Cordones Huawei');

        $sheet->setCellValue('H15', $fibraOrder->gancho_tensor);
        $sheet->setCellValue('H16', $fibraOrder->cinta_aislar);
        $sheet->setCellValue('H17', $fibraOrder->cordones_telmex);
        $sheet->setCellValue('H18', $fibraOrder->cordones_huawei);

        $sheet->setCellValue('H15', 'NEGOCIO');
        $sheet->setCellValue('H16', 'CASA');
        $sheet->setCellValue('H17', 'EDIFICIOS');
        $sheet->setCellValue('H18', 'PLAZA');
        $sheet->setCellValue('H19', 'RESIDENCIAL');
        $sheet->setCellValue('H20', 'AEREA');
        $sheet->setCellValue('H21', 'SUBTERRANEA');
       
        $sheet->setCellValue('I15', (isset($fibraOrder->tipo_negocio ) &&$fibraOrder->tipo_negocio ==1 )? '✓': '');
        $sheet->setCellValue('I16', (isset($fibraOrder->tipo_casa ) &&$fibraOrder->tipo_casa ==1 )? '✓': '' );
        $sheet->setCellValue('I17', (isset($fibraOrder->tipo_edificios ) &&$fibraOrder->tipo_edificios ==1 )? '✓': '' );
        $sheet->setCellValue('I18', (isset($fibraOrder->tipo_plaza ) &&$fibraOrder->tipo_plaza ==1 )? '✓': '' );
        $sheet->setCellValue('I19', (isset($fibraOrder->tipo_residencial ) &&$fibraOrder->tipo_residencial ==1 )? '✓': '' );
        $sheet->setCellValue('I20', (isset($fibraOrder->tipo_aerea ) &&$fibraOrder->tipo_aerea ==1 )? '✓': '' );
        $sheet->setCellValue('I21', (isset($fibraOrder->tipo_subterraneo ) &&$fibraOrder->tipo_subterraneo ==1 )? '✓': '' );
        $sheet->setCellValue('I22', $fibraOrder->longitud_acum_tel );

        $sheet->setCellValue('J15', 'LOGITUD ACUM');
        $sheet->setCellValue('J16', 'FIBRA DE 25 M');
        $sheet->setCellValue('J17', 'FIBRA DE 50 M');
        $sheet->setCellValue('J18', 'FIBRA DE 75 M');
        $sheet->setCellValue('J19', 'FIBRA DE 100 M');
        $sheet->setCellValue('J20', 'FIBRA DE 125 M');
        $sheet->setCellValue('J21', 'METRA E/BOBINA');

        $sheet->setCellValue('K15', $fibraOrder->longitud_acum_tel);
        $sheet->setCellValue('K16', $fibraOrder->fibra_25m_tel);
        $sheet->setCellValue('K17', $fibraOrder->fibra_50m_tel);
        $sheet->setCellValue('K18', $fibraOrder->fibra_75m_tel);
        $sheet->setCellValue('K19', $fibraOrder->fibra_100m_tel);
        $sheet->setCellValue('K20', $fibraOrder->fibra_125m_tel);
        $sheet->setCellValue('K21', $fibraOrder->metral_bobina_tel);
       

        $sheet->setCellValue('L15', 'LOGITUD ACUM');
        $sheet->setCellValue('L16', 'CORD. PREC. 25 M');
        $sheet->setCellValue('L17', 'CORD. PREC. 50 M');
        $sheet->setCellValue('L18', 'CORD. PREC. 80 M');
        $sheet->setCellValue('L19', 'CORD. PREC. 100 M');
        $sheet->setCellValue('L20', 'CORD. PREC. 120 M');
        $sheet->setCellValue('L21', 'CORD. PREC. 150 M');
        $sheet->setCellValue('L22', 'CORD. PREC. 200 M');

        $sheet->setCellValue('M15', $fibraOrder->longitud_acum_huawei);
        $sheet->setCellValue('M16', $fibraOrder->cord_prec_25m_huawei);
        $sheet->setCellValue('M17', $fibraOrder->cord_prec_50m_huawei);
        $sheet->setCellValue('M18', $fibraOrder->cord_prec_80m_huawei);
        $sheet->setCellValue('M19', $fibraOrder->cord_prec_100m_huawei);
        $sheet->setCellValue('M20', $fibraOrder->cord_prec_120m_huawei);
        $sheet->setCellValue('M21', $fibraOrder->cord_prec_150m_huawei);
        $sheet->setCellValue('M22', $fibraOrder->cord_prec_200m_huawei);

        $sheet->setCellValue('G24', 'DATOS DE LA ONT INSTALADA');

        $sheet->setCellValue('B25', 'NUMERO DE SERIE:');
        $sheet->setCellValue('B26', 'ALFANUMERICO:');
        $sheet->setCellValue('B27', 'KEY:');
        $sheet->setCellValue('B28', 'Nº ONT DE COBRE:');
        $sheet->setCellValue('B29', 'OBSERVACIONES:');
        $sheet->setCellValue('B31', 'CORREO ELECTRONICO:');


        header('Content-Disposition: attachment;filename="' . 'ORDEN FIBRA ' . strtoupper($fibraOrder->id) . '.xls');
        header('Cache-Control: max-age=0');
          
        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xls');
        $writer->save('php://output');
    }
}
