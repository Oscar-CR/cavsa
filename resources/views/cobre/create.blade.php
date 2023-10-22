@extends('layouts.app')

@section('content')
@include('components.header') 
<div class="container mx-auto mt-4 w-full">

    <div class="bg-white rounded-lg shadow-lg p-6">

        <div class="flex justify-between">
            <div class="pt-4">
                <h1 class="text-2xl font-bold mb-12">Nueva orden de servicio (cobre)</h1>
            </div>
            <div class="pt-4">
                <img src="{{ asset('img/infinitum.png')}}" alt="logo" class="w-40">
            </div>
        </div>
        

        <form action="{{ route('home.cobre.store') }}" method="POST">
        @csrf

            <!-- Sección 1 -->
            <fieldset class="bg-[#FCFEFF] p-4 rounded">
                <!-- <legend class="pt-12">Section 1</legend> -->
                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-1">
                        
                        <label for="telefono">Telefono:</label>
                        <input type="text" id="telefono" name="telefono" class="w-full mb-4 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">

                        <label for="tipo_os">Tipo O.S:</label>
                        <input type="text" id="tipo_os" name="tipo_os" class="w-full mb-4 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">

                        <label for="os_number">Nº de O.S.:</label>
                        <input type="text" id="numero_os" name="numero_os" class="w-full mb-4 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                    </div>
                    <div class="col-span-1">
                        <label for="status">Status:</label>
                        <input type="text" id="status" name="status" class="w-full mb-4 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                        
                        <label for="pysa">Pysa:</label>
                        <input type="text" id="pysa" name="pysa" class="w-full mb-4 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                    </div>
                   
                    <div class="col-span-1">
                        <label for="hora_llegada">Hora de llegada:</label>
                        <input type="time" id="hora_llegada" name="hora_llegada" class="w-full mb-4 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">

                        <label for="fecha">Fecha:</label>
                        <input type="date" id="fecha" name="fecha" class="w-full mb-4 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">

                        <label for="folio_tec">Folio TEC:</label>
                        <input type="text" id="folio_tec" name="folio_tec" class="w-full mb-4 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                    </div>

                </div>
            </fieldset>

            <!-- Sección 2 -->
            <fieldset class="bg-[#FCFEFF] p-4 rounded">
                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-1">

                        <label for="nombre_cliente">Nombre del cliente:</label>
                        <input type="text" id="nombre_cliente" name="nombre_cliente" class="w-full mb-4 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">

                        <label for="direccion">Direccion:</label>
                        <input type="text" id="direccion" name="direccion" class="w-full mb-4 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">

                        <label for="entre_calles">Entre calles:</label>
                        <input type="text" id="entre_calles" name="entre_calles" class="w-full mb-4 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">

                    </div>

                    <div class="col-span-1">
                        
                        <label for="colonia">Colonia:</label>
                        <input type="text" id="colonia" name="colonia" class="w-full mb-4 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">

                        <label for="edificio">Edificio:</label>
                        <input type="text" id="edificio" name="edificio" class="w-full mb-4 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">

                        <label for="depto">Depto:</label>
                        <input type="text" id="depto" name="depto" class="w-full mb-4 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">

                    </div>

                    <div class="col-span-1">
   
                        <label for="portalera">Portalera:</label>
                        <input type="text" id="portalera" name="portalera" class="w-full mb-4 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">

                    </div>
                </div>
            </fieldset>

            
            <fieldset class="bg-[#FCFEFF] p-4 rounded">
                <!-- <legend class="pt-12">Section 3</legend> -->
                <div class="grid grid-cols-5 gap-4">
                    <div class="col-span-1">
                        <label for="distrito">Distrito:</label>
                        <input type="text" id="distrito" name="distrito" class="w-full mb-4 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                    </div>
                    <div class="col-span-1">
                        <label for="terminal">Terminal:</label>
                        <input type="text" id="terminal" name="terminal" class="w-full mb-4 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                    </div>
                    <div class="col-span-1">
                        <label for="puerto">Puerto:</label>
                        <input type="text" id="puerto" name="puerto" class="w-full mb-4 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                    </div>
                    <div class="col-span-1">
                        <label for="potencia">Potencia:</label>
                        <input type="text" id="potencia" name="potencia" class="w-full mb-4 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                    </div>
                    <div class="col-span-1">
                        <label for="navegacion">Navegación:</label>
                        <input type="text" id="navegacion" name="navegacion" class="w-full mb-4 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                    </div>
                </div>
            </fieldset>
            

            <fieldset class="bg-[#FCFEFF] p-4 rounded">

                <div class="flex justify-center items-center mb-4">
                    <div class="flex-1 text-center" >MATERIAL INSTALADO</div>
                    <div class="flex-1 text-center">TIPO Y LONGITUD DE INSTALACIÓN</div>
                </div>
                <!-- <legend>Section 4</legend>
 -->
                <div class="grid grid-cols-2 gap-4">
                    
                    <div class="grid grid-cols-3 gap-4">
                        <div class="col-span-1">

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="argolla">Argolla:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="argolla" name="argolla" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="dit_spliter_con_proteccion">Dit/Spliter con Proteccion:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="dit_spliter_con_proteccion" name="dit_spliter_con_proteccion" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cincho_negro">Cincho Negro:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="cincho_negro" name="cincho_negro" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div>
                           
                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="muela">Muela:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="muela" name="muela" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cincho_negro">Cincho negro:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="cincho_negro" name="cincho_negro" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div>
                            
                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="clip_adherible">Clip Adherible:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="clip_adherible" name="clip_adherible" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cadena_distribucion">Cadena Distribuciono:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="cadena_distribucion" name="cadena_distribucion" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="argolla_fleje">Argolla Fleje:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="argolla_fleje" name="argolla_fleje" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div>
                            
                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="taquete">Taquete:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="taquete" name="taquete" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div>


                        </div>

                        <div class="col-span-1">

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="modem">MODEM:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="modem" name="modem" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div>
                            
                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="sujetador_p_cor_int_ext">Sujetador P/Cor Int/ext:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="sujetador_p_cor_int_ext" name="sujetador_p_cor_int_ext" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div>
                            
                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="sujetador_p_cor_acom_de_2_pares">Sujetador P/Cor Acom de 2 Pares:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="sujetador_p_cor_acom_de_2_pares" name="sujetador_p_cor_acom_de_2_pares" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="roseta">Roseta:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="roseta" name="roseta" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="sello_pasamuro">Sello Pasamuro:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="sello_pasamuro" name="sello_pasamuro" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div>
                            
                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cordones_telmex">Cordones Telmex:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="cordones_telmex" name="cordones_telmex" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cable_rj11">Cable RJ11:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="cable_rj11" name="cable_rj11" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div>  
                            
                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cord_cafe_naranja">Cord Café/Naranja:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="cord_cafe_naranja" name="cord_cafe_naranja" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div> 

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cord_naranja_blanco">Cord Naranja/Blanco:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="cord_naranja_blanco" name="cord_naranja_blanco" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div> 

                        </div>

                        <div class="col-span-1">

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cord_rojo_blanco">Cord Rojo/Blanco:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="cord_rojo_blanco" name="cord_rojo_blanco" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div> 

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="gancho_tensor">Gancho Tensor:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="gancho_tensor" name="gancho_tensor" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div> 

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cinta_de_aislar">Cinta de Aislar:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="cinta_de_aislar" name="cinta_de_aislar" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div> 

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="tubo_ranurado">Tubo Ranurado:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="tubo_ranurado" name="tubo_ranurado" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div> 

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="lubricante">Lubricante:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="lubricante" name="lubricante" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div> 

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cord_marfil_metros">Cord Marfil (metros):</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="cord_marfil_metros" name="cord_marfil_metros" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div> 

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="longitud_acometida_metros">Longitud Acometida (mertos):</label>
                                </div>
                                <div class="pt-4">
                                    <input type="number" id="longitud_acometida_metros" name="longitud_acometida_metros" class="w-20 mr-6 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" value="0">
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    <div class="grid grid-cols-3 gap-4">
                        
                        <div class="col-span-1 mr-6">

                            <div class="flex justify-between">
                                <div class="pt-10">
                                    <label for="tipo_negocio">Negocio:</label>
                                </div>
                                <div class="pt-10">
                                    <input class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]" type="checkbox" id="tipo_negocio" name="tipo_negocio">
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="tipo_casa">Casa:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="checkbox" id="tipo_casa" name="tipo_casa" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]"> 
                                </div>
                            </div>
                            
                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="tipo_edificios">Edificios:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="checkbox" id="tipo_edificios" name="tipo_edificios" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                </div>
                            </div>
                            
                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="tipo_plaza">Plaza:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="checkbox" id="tipo_plaza" name="tipo_plaza" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="tipo_residencial">Residencial:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="checkbox" id="tipo_residencial" name="tipo_residencial" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                </div>
                            </div>
                           
                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="tipo_aerea">Aerea:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="checkbox" id="tipo_aerea" name="tipo_aerea" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                </div>
                            </div>
                            
                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="tipo_subterraneo">Subterraneo:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="checkbox" id="tipo_subterraneo" name="tipo_subterraneo" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                </div>
                            </div>
                           
                        </div>
                        <!-- Segunda columna - CORDONES TELMEX -->
                        <div class="col-span-1  mr-6">
                            <legend>CORDONES TELMEX</legend>

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="longitud_acum_tel">Longitud Acum:</label>
                                </div>
                                <div class="pt-4">
                                    <input class="w-20" type="text" id="longitud_acum_tel" name="longitud_acum_tel" class="border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cobre_25m_tel">cobre de 25m:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="checkbox" id="cobre_25m_tel" name="cobre_25m_tel" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                </div>
                            </div>
                            
                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cobre_50m_tel">cobre de 50m:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="checkbox" id="cobre_50m_tel" name="cobre_50m_tel" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                </div>
                            </div>
                            
                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cobre_75m_tel">cobre de 75m:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="checkbox" id="cobre_75m_tel" name="cobre_75m_tel" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                </div>
                            </div>
                            
                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cobre_100m_tel">cobre de 100m:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="checkbox" id="cobre_100m_tel" name="cobre_100m_tel" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                </div>
                            </div>
                            
                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cobre_125m_tel">cobre de 125m:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="checkbox" id="cobre_125m_tel" name="cobre_125m_tel" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="metral_bobina_tel">Metral E/bobina:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="checkbox" id="metral_bobina_tel" name="metral_bobina_tel" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                </div>
                            </div>
                           
                        </div>
                        

                        <div class="col-span-1  mr-6">
                            <legend>CORDONES HUAWEI</legend>
                            
                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="longitud_acum_huawei">Longitud Acum:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="text" id="longitud_acum_huawei" name="longitud_acum_huawei" class="w-20 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cord_prec_25m_huawei">Cord Prec 25m:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="checkbox" id="cord_prec_25m_huawei" name="cord_prec_25m_huawei" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                </div>
                            </div>
                            
                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cord_prec_50m_huawei">Cord Prec 50m:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="checkbox" id="cord_prec_50m_huawei" name="cord_prec_50m_huawei" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                </div>
                            </div>
                            
                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cord_prec_80m_huawei">Cord Prec 80m:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="checkbox" id="cord_prec_80m_huawei" name="cord_prec_80m_huawei" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cord_prec_100m_huawei">Cord Prec 100m:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="checkbox" id="cord_prec_100m_huawei" name="cord_prec_100m_huawei" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                </div>
                            </div>
                            
                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cord_prec_120m_huawei">Cord Prec 120m:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="checkbox" id="cord_prec_120m_huawei" name="cord_prec_120m_huawei" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cord_prec_150m_huawei">Cord Prec 150m:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="checkbox" id="cord_prec_150m_huawei" name="cord_prec_150m_huawei" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                </div>
                            </div>
                            
                            <div class="flex justify-between">
                                <div class="pt-4">
                                    <label for="cord_prec_200m_huawei">Cord Prec 200m:</label>
                                </div>
                                <div class="pt-4">
                                    <input type="checkbox" id="cord_prec_200m_huawei" name="cord_prec_200m_huawei" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset class="bg-[#FCFEFF] p-4 rounded">
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-1 ">
                        
                        <div class="flex justify-between">
                            <div class="pt-4">
                                <label for="numero_serie">Número de Serie:</label>
                            </div>
                            <div class="pt-4 mr-8">
                                <input type="text" id="numero_serie" name="numero_serie" class="w-96 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <div class="pt-4">
                                <label for="alfanumerico">Alfanumérico:</label>
                            </div>
                            <div class="pt-4 mr-8">
                            <input type="text" id="alfanumerico" name="alfanumerico" class="w-96 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                            </div>
                        </div>
                       
                        <div class="flex justify-between">
                            <div class="pt-4">
                                <label for="key">Key:</label>
                            </div>
                            <div class="pt-4 mr-8">
                                <input type="text" id="key" name="key" class="w-96 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <div class="pt-4">
                                <label for="ont_cobre">N ONT de Cobre:</label>
                            </div>
                            <div class="pt-4 mr-8">
                                <input type="text" id="ont_cobre" name="ont_cobre" class="w-96 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <div class="pt-4">
                                <label for="observaciones">Observaciones:</label>
                            </div>
                            <div class="pt-4 mr-8">
                                <input type="text" id="observaciones" name="observaciones" rows="2" class="w-96 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <div class="pt-4">
                                <label for="correo_electronico">Correo Electrónico:</label>
                            </div>
                            <div class="pt-4 mr-8">
                                <input type="text" id="correo_electronico" name="correo_electronico" class="w-96 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <div class="pt-4">
                                <label for="clarovideo">Clarovideo:</label>
                            </div>
                            <div class="pt-4 mr-8">
                                <input type="text" id="clarovideo" name="clarovideo" class="w-96 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                            </div>
                        </div>
                        
                        <div class="flex justify-between">
                            <div class="pt-4">
                                <label for="si_no">Activado:</label>
                            </div>
                            <div class="pt-4 mr-8">
                                <input type="radio" id="si" name="activado" value="Si" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                <label for="si" class="mr-4">Si</label>
                                <input type="radio" id="no" name="activado" value="No" class="border shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                                <label for="no">No</label>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-span-1">
                        
                        <div class="flex justify-between">
                            <div class="p-4">
                                <label for="hora_generacion_portal">Hora de Generación Portal:</label>
                            </div>
                            <div class="p-4 mr-2">
                                <input type="time" id="hora_generacion_portal" name="hora_generacion_portal" class="w-96 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <div class="p-4">
                                <label for="hora_liquidacion">Hora de Liquidación:</label>
                            </div>
                            <div class="p-4 mr-2">
                                <input type="time" id="hora_liquidacion" name="hora_liquidacion" class="w-96 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-[#0172C2]">
                            </div>
                        </div>
                    </div>
                </div>

                
            </fieldset>
            
            <button class="w-full bg-[#0172C2] hover:bg-[#189FFF] text-white h-10 rounded mt-12" type="submit">GUARDAR</button>
        </form>
        
       
    </div>
</div>
@endsection
