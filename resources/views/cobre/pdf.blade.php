<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="charset=utf-8" />
    <title>Cotizacion</title>
    <link rel="stylesheet" href="quotesheet/bh/stylebh.css">
</head>

<body>
   <style>
        *{
            font-family:"DejaVu Sans Mono", monospace; 
        }
   </style>
    <div style="margin-left:30px; margin-right:30px; margin-top:8px;">
        
        
        @php 
            $logo = public_path('img/infinitum_con.png');
            $image64 = base64_encode(file_get_contents($logo));
        @endphp

        <center><img style="width:500px;  object-fit:contain;" src="data:image/png;base64,{{$image64}}" alt=""></center>

    </div>

    <table width="100% " style="padding-left: 25px; padding-right:25px; margin-top:8px; font-size: 10px;">
        <tr>
            <td style="width:20%;"></td>
            <td style="width:60%; text-align:center; font-size: 10px;">TELEFONOS DE MEXICO S.A. DE C.V.</td>
            <td style="width:20%; text-align:right; font-size: 10px;">FIBRA R-{{$cobreOrder->id}}</td>
        </tr>
        <tr>
            <td style="width:20%;"></td>
            <td style="width:60%; text-align:center;"><h4>PLANTA EXTERIOR</h4></td>
            <td style="width:20%; text-align:right;"></td>
        </tr>
    </table>


    <table width="100%"  cellspacing="0"> 
        <tr >
            <td colspan="12"  style=" width: 100%; padding: 5px; background-color:#e0e0e0; font-size: 8px;  border: 1px solid black;"> <b><center> ORDEN DE SERVICIO </center></b>  </td>
        </tr>
        <tr >
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">TELEFONO</td>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->telefono }} </td>
            <td colspan="1" rowspan="3" style="font-size: 8px; border: 1px solid black;"> <br> <br> <br> PYSA:</td>
            <td colspan="2"  style="font-size: 8px; border: 1px solid black;"> ESTATUS</td>
            <td colspan="2" rowspan="3" style="font-size: 8px; border: 1px solid black;"> HORA DE LLEGADA <br> FECHA: <br>FOLIO TEC:</td>
            <td colspan="4" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->hora_llegada }}</td>
        </tr>
        <tr >
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">TIPO O.S.</td>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->tipo_os }} </td>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->status }}</td>
            
            <td colspan="6" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->fecha }}</td>
        </tr>
        <tr >
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Nº DE O.S.</td>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->numero_os }} </td>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->pysa }} </td>
           
            <td colspan="6" style="font-size: 8px; border: 1px solid black;"> {{ $cobreOrder->folio_tec}}</td>
        </tr>

        <tr>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;">NOMBRE DEL CLIENTE:</td>
            <td colspan="10" style="font-size: 8px; border: 1px solid black;"> {{ $cobreOrder->nombre_cliente}}</td>
        </tr>
        <tr>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;">DIRECCION:</td>
            <td colspan="10" style="font-size: 8px; border: 1px solid black;"> {{ $cobreOrder->direccion}}</td>
        </tr>
        <tr>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;">ENTRE CALLES:</td>
            <td colspan="10" style="font-size: 8px; border: 1px solid black;"> {{ $cobreOrder->entre_calles}}</td>
        </tr>
        <tr>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;">COLONIA:</td>
            <td colspan="10" style="font-size: 8px; border: 1px solid black;"> {{ $cobreOrder->colonia }}</td>
        </tr>
        <tr>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;">EDIFICIO:</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"> {{ $cobreOrder->edificio }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">DEPTO:</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"> {{ $cobreOrder->depto }}</td>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;">PORTALERA:</td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;"> {{ $cobreOrder->portalera}}</td>
        </tr>

        <tr>
            <td colspan="1" style="font-size: 8px; border-left: 1px solid black;">DISTRITO</td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px;">TERMINAL</td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px;">PUERTO</td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px;">POTENCIA</td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px;">NAVEGACION</td>
            <td colspan="3" style="font-size: 8px; border-right: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->distrito }}</td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->terminal }}</td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->puerto }}</td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->potencia }}</td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black; ">{{ $cobreOrder->navegacion }}</td>
            <td colspan="3" style="font-size: 8px; border-right: 1px solid black;"></td>
        </tr>

        <tr>
            <td colspan="6" style="font-size: 8px; border-left: 1px solid black; border-top: 1px solid black; text-align: center;"><b>MATERIAL INSTALADO</b> </td>
            <td colspan="6" style="font-size: 8px; border-right: 1px solid black; border-top: 1px solid black; text-align: center;"><b>TIPO Y LONGITUD DE INSTALACION</b></td>
        </tr>

        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Argolla</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->argolla }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">MODEM</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->modem }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Cord Rojo/Blanco</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->cord_rojo_blanco }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">NEGOCIO</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ (isset($cobreOrder->tipo_negocio ) &&$cobreOrder->tipo_negocio ==1 )? '✔': ''}} </td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CORDONES TELMEX</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CORDONES HUAWEI</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Dit/Spliter con Proteccion</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->dit_spliter_con_proteccion }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Sujetador P/Cor Int/ext</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->sujetador_p_cor_int_ext }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Gancho Tensor</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->gancho_tensor }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CASA</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ (isset($cobreOrder->tipo_casa ) &&$cobreOrder->tipo_casa ==1 )? '✔': ''}} </td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">LOGITUD ACUM</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->longitud_acum_tel }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">LOGITUD ACUM</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->longitud_acum_huawei }}</td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Muela</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->muela }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Sujetador P/Cor Acom de 2 Pares</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->sujetador_p_cor_acom_de_2_pares }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Cinta de Aislar</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->cinta_de_aislar }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">EDIFICIOS</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ (isset($cobreOrder->tipo_edificios ) &&$cobreOrder->tipo_edificios ==1 )? '✔': '' }}  </td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">FIBRA DE 25 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->fibra_25m_tel }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CORD. PREC. 25 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->cord_prec_25m_huawei }}</td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Cincho negro</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->cincho_negro }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Roseta</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->roseta }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Tubo Ranurado</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->tubo_ranurado }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">PLAZA</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ (isset($cobreOrder->tipo_plaza ) &&$cobreOrder->tipo_plaza ==1 )? '✔': '' }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">FIBRA DE 50 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->fibra_50m_tel }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CORD. PREC. 50 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->cord_prec_50m_huawei }}  </td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Clip Adherible</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->clip_adherible }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Sello Pasamuro</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->sello_pasamuro }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Lubricante</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->lubricante }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">RESIDENCIAL</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ (isset($cobreOrder->tipo_residencial ) &&$cobreOrder->tipo_residencial ==1 )? '✔': '' }} </td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">FIBRA DE 75 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->fibra_75m_tel }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CORD. PREC. 80 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->cord_prec_80m_huawei }} </td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Cadena Distribucion</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->cadena_distribucion }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Cable RJ11</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->cable_rj11 }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Cord Marfil (metros)</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->cord_marfil_metros }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">AEREA</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ (isset($cobreOrder->tipo_aerea ) &&$cobreOrder->tipo_aerea ==1 )? '✔': '' }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">FIBRA DE 100 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->fibra_100m_tel }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CORD. PREC. 100 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->cord_prec_100m_huawei }}</td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Argolla Fleje</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->argolla_fleje }} </td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Cord Café/Naranja</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->cord_cafe_naranja }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Longitud Acometida (mertos)</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->longitud_acometida_metros }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">SUBTERRANEA</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ (isset($cobreOrder->tipo_subterraneo ) &&$cobreOrder->tipo_subterraneo ==1 )? '✔': '' }} </td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">FIBRA DE 125 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->fibra_125m_tel }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CORD. PREC. 120 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->cord_prec_120m_huawei }}</td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px;">Taquete</td>
            <td colspan="1" style="font-size: 8px;">{{ $cobreOrder->taquete }}</td>
            <td colspan="1" style="font-size: 8px;">Cord Naranja/Blanco</td>
            <td colspan="1" style="font-size: 8px;">{{ $cobreOrder->cord_naranja_blanco }}</td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">SUBTERRANEA</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ (isset($cobreOrder->tipo_subterraneo ) &&$cobreOrder->tipo_subterraneo ==1 )? '✔': '' }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">METRA E/BOBINA</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->metral_bobina_tel }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CORD. PREC. 150 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{  $cobreOrder->cord_prec_150m_huawei }}</td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px;" ></td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CORD. PREC. 200 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->cord_prec_200m_huawei }}</td>
        </tr>

        <tr>
            <td colspan="12" style="font-size: 8px; border: 1px solid black; background-color:#e0e0e0; text-align: center;"><b>DATOS DE LA ONT INSTALADA</b> </td>
        </tr>

        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">NUMERO DE SERIE:</td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->numero_serie }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">HORA DE GENERACION PORTAL:</td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">ALFANUMERICO:</td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->alfanumerico }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">HORA DE LIQUIDACION:</td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">KEY:</td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->key }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">NOMBRE Y FIRMA DEL TECNICO:</td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Nº ONT DE COBRE:</td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->ont_cobre }}</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="1" rowspan="2" style="font-size: 8px; border: 1px solid black;">OBSERVACIONES: <br> <br> <br> <br> </td>
            <td colspan="4" rowspan="2" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->observaciones }} </td>
            <td colspan="7" style="font-size: 8px; border: 1px solid black; background-color:#141414; color:white;"> <p><b style="font-size: 10px;">Estimado cliente!</b>  ¿El técnico le ofreció los siguientes productos Telmex para mejorar la experiencia INFINITUM en su hogar? </p> </td>
        </tr>
        <tr>
          
            <td colspan="5" style="font-size: 8px; border: 1px solid black;">1) Incremento la velocidad de navegación (cambio de paquete)</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">SI</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">NO</td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CLAROVIDEO:</td>
            <td colspan="4" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->clarovideo }}</td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;">2) Extensor de señal Wi-Fi</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">SI</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">NO</td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">{{ $cobreOrder->activado == 1? 'SI /    NO' : 'SI    NO  /' }}</td>
            <td colspan="4" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;">3) Router</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
    </table>
    

</body>

</html>