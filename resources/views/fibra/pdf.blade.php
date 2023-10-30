<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cotizacion</title>
    <link rel="stylesheet" href="quotesheet/bh/stylebh.css">
</head>

<body>
   
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
            <td style="width:20%; text-align:right; font-size: 10px;">FIBRA R-{{$fibraOrder->id}}</td>
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
            <td colspan="2" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" rowspan="3" style="font-size: 8px; border: 1px solid black;"> <br> <br> <br> PYSA:</td>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;">ESTATUS</td>
            <td colspan="2" rowspan="3" style="font-size: 8px; border: 1px solid black;">HORA DE LLEGADA</td>
            <td colspan="4" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr >
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">TIPO O.S.</td>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="2" style="font-size: 8px;"></td>
            <td colspan="4" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr >
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Nº DE O.S.</td>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="2" style="font-size: 8px; "></td>
            <td colspan="4" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>

        <tr>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;">NOMBRE DEL CLIENTE:</td>
            <td colspan="10" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;">DIRECCION:</td>
            <td colspan="10" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;">ENTRE CALLES:</td>
            <td colspan="10" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;">COLONIA:</td>
            <td colspan="10" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;">EDIFICIO:</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">DEPTO:</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="2" style="font-size: 8px; border: 1px solid black;">PORTALERA:</td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>

        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">DISTRITO</td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">TERMINAL</td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">PUERTO</td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">POTENCIA</td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">NAVEGACION</td>
            <td colspan="3" style="font-size: 8px;"></td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="3" style="font-size: 8px;"></td>
        </tr>

        <tr>
            <td colspan="6" style="font-size: 8px; border: 1px solid black;">MATERIAL INSTALADO</td>
            <td colspan="6" style="font-size: 8px; border: 1px solid black;">TIPO Y LONGITUD DE INSTALACION</td>
        </tr>

        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Argolla Caja Exedente</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Conector Mecanico</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Gancho Tensor</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">NEGOCIO</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CORDONES TELMEX</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CORDONES HUAWEI</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Cierre Conexión</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">ONT</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Cinta de Aislar</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CASA</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">LOGITUD ACUM</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">LOGITUD ACUM</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Cincho Negro</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Roceta Optica</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Cordones Telmex</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">EDIFICIOS</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">FIBRA DE 25 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CORD. PREC. 25 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Clip adherible</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Sello Pasa Muro</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Cordones Huawei</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">PLAZA</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">FIBRA DE 50 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CORD. PREC. 50 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Cadena de Distribucion</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Sello Pasa Muro</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Cordones Huawei</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">RESIDENCIAL</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">FIBRA DE 75 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CORD. PREC. 80 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Argolla Fleje</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Taquete</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">AEREA</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">FIBRA DE 100 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CORD. PREC. 100 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Cierre Conexión</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">SUBTERRANEA</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">FIBRA DE 125 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CORD. PREC. 120 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">SUBTERRANEA</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">METRA E/BOBINA</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CORD. PREC. 150 M</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
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
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>

        <tr>
            <td colspan="12" style="font-size: 8px; border: 1px solid black;">DATOS DE LA ONT INSTALADA</td>
        </tr>

        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">NUMERO DE SERIE:</td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">HORA DE GENERACION PORTAL:</td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">ALFANUMERICO:</td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">HORA DE LIQUIDACION:</td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">KEY:</td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">NOMBRE Y FIRMA DEL TECNICO:</td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">Nº ONT DE COBRE:</td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">OBSERVACIONES:</td>
            <td colspan="4" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="7" style="font-size: 8px; border: 1px solid black;">Estimado cliente!</td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="4" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;">1) Incremento la velocidad de navegación (cambio de paquete)</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">SI</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">NO</td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">CLAROVIDEO:</td>
            <td colspan="4" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;">3) Router</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">SI</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">NO</td>
        </tr>
        <tr>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;">SI  NO</td>
            <td colspan="4" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="5" style="font-size: 8px; border: 1px solid black;">3) Router</td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
            <td colspan="1" style="font-size: 8px; border: 1px solid black;"></td>
        </tr>
    </table>
    

</body>

</html>