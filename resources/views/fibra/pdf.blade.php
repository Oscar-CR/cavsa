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

    <table width="100%" style="padding-left: 25px; padding-right:25px;">
        <tr>
            <td style="width:20%;"></td>
            <td style="width:60%; text-align:center;"><h4>TELEFONOS DE MEXICO S.A. DE C.V.</h4></td>
            <td style="width:20%; text-align:right;"><h4>FIBRA R-{{$fibraOrder->id}}</h4></td>
        </tr>
        <tr>
            <td style="width:20%;"></td>
            <td style="width:60%; text-align:center;"><h4>PLANTA EXTERIOR</h4></td>
            <td style="width:20%; text-align:right;"></td>
        </tr>
    </table>


    <table width="100%" > 
        <tr style="border: 2px solid black; ">
            <td colspan="12"  style=" width: 100%; padding: 5px; background-color:#e0e0e0; "> <center> ORDEN DE SERVICIO </center> </td>
        </tr>
        <tr >
            <td colspan="1">TELEFONO</td>
            <td colspan="2"></td>
            <td colspan="1"></td>
            <td colspan="2">ESTATUS</td>
            <td colspan="2">HORA DE LLEGADA</td>
            <td colspan="4"></td>
        </tr>
        <tr >
            <td colspan="1">TIPO O.S.</td>
            <td colspan="2"></td>
            <td colspan="1"></td>
            <td colspan="2"></td>
            <td colspan="2">FECHA</td>
            <td colspan="4"></td>
        </tr>
        <tr >
            <td colspan="1">Nº DE O.S.</td>
            <td colspan="2"></td>
            <td colspan="1"></td>
            <td colspan="2"></td>
            <td colspan="2">FOLIO TEC:</td>
            <td colspan="4"></td>
        </tr>

        <tr>
            <td colspan="2">NOMBRE DEL CLIENTE:</td>
            <td colspan="10"></td>
        </tr>
        <tr>
            <td colspan="2">DIRECCION:</td>
            <td colspan="10"></td>
        </tr>
        <tr>
            <td colspan="2">ENTRE CALLES:</td>
            <td colspan="10"></td>
        </tr>
        <tr>
            <td colspan="2">COLONIA:</td>
            <td colspan="10"></td>
        </tr>
        <tr>
            <td colspan="2">EDIFICIO:</td>
            <td colspan="1"></td>
            <td colspan="1">DEPTO:</td>
            <td colspan="1"></td>
            <td colspan="2">PORTALERA:</td>
            <td colspan="5"></td>
        </tr>

        <tr>
            <td colspan="1">DISTRITO</td>
            <td colspan="1"></td>
            <td colspan="1">TERMINAL</td>
            <td colspan="1"></td>
            <td colspan="1">PUERTO</td>
            <td colspan="1"></td>
            <td colspan="1">POTENCIA</td>
            <td colspan="1"></td>
            <td colspan="1">NAVEGACION</td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="1">VALOR</td>
            <td colspan="1"></td>
            <td colspan="1">VALOR</td>
            <td colspan="1"></td>
            <td colspan="1">VALOR</td>
            <td colspan="1"></td>
            <td colspan="1">VALOR</td>
            <td colspan="1"></td>
            <td colspan="1">VALOR</td>
            <td colspan="3"></td>
        </tr>

        <tr>
            <td colspan="6">MATERIAL INSTALADO</td>
            <td colspan="6">TIPO Y LONGITUD DE INSTALACION</td>
        </tr>
        
        

    </table>
    

</body>

</html>