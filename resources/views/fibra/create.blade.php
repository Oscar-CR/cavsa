@extends('layouts.app')

@section('content')
@include('components.header') 
<div class="container mx-auto mt-4 w-full">

    <div class="bg-white rounded-lg shadow-lg p-6">
        <h1 class="text-2xl font-bold mb-12">Nueva orden</h1>

        <form action="{{ route('home.fibra.store') }}" method="POST">
        @csrf

            <!-- Sección 1 -->
            <fieldset class="bg-[#FCFEFF] p-4 rounded">
                <legend class="pt-12">Section 1</legend>
                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-1">
                        <label for="phone">Phone:</label>
                        <input type="text" id="phone" name="phone" class="w-full">
                    </div>
                    <div class="col-span-1">
                        <label for="os_type">OS Type:</label>
                        <input type="text" id="os_type" name="os_type" class="w-full">
                    </div>
                    <div class="col-span-1">
                        <label for="os_number">OS Number:</label>
                        <input type="text" id="os_number" name="os_number" class="w-full">
                    </div>
                    <div class="col-span-1">
                        <label for="status">Status:</label>
                        <input type="text" id="status" name="status" class="w-full">
                    </div>
                    <div class="col-span-1">
                        <label for="pysa">Pysa:</label>
                        <input type="text" id="pysa" name="pysa" class="w-full">
                    </div>
                    <div class="col-span-1">
                        <label for="arrival_time">Arrival Time:</label>
                        <input type="time" id="arrival_time" name="arrival_time" class="w-full">
                    </div>
                    <div class="col-span-1">
                        <label for="date">Date:</label>
                        <input type="date" id="date" name="date" class="w-full">
                    </div>
                    <div class="col-span-1">
                        <label for="tec_folio">Tec Folio:</label>
                        <input type="text" id="tec_folio" name="tec_folio" class="w-full">
                    </div>
                </div>
            </fieldset>

            <!-- Sección 2 -->
            <fieldset class="bg-[#FCFEFF] p-4 rounded">
                <legend class="pt-12">Section 2</legend>
                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-1">
                        <label for="client_name">Client Name:</label>
                        <input type="text" id="client_name" name="client_name" class="w-full">
                    </div>
                    <div class="col-span-1">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" class="w-full">
                    </div>
                    <div class="col-span-1">
                        <label for="between_streets">Between Streets:</label>
                        <input type="text" id="between_streets" name="between_streets" class="w-full">
                    </div>
                    <div class="col-span-1">
                        <label for="neighborhood">Neighborhood:</label>
                        <input type="text" id="neighborhood" name="neighborhood" class="w-full">
                    </div>
                    <div class="col-span-1">
                        <label for="building">Building:</label>
                        <input type="text" id="building" name="building" class="w-full">
                    </div>
                    <div class="col-span-1">
                        <label for="apartment">Apartment:</label>
                        <input type="text" id="apartment" name="apartment" class="w-full">
                    </div>
                    <div class="col-span-1">
                        <label for="gatekeeper">Gatekeeper:</label>
                        <input type="text" id="gatekeeper" name="gatekeeper" class="w-full">
                    </div>
                </div>
            </fieldset>

            <!-- Sección 3 -->
            <fieldset class="bg-[#FCFEFF] p-4 rounded">
                <legend class="pt-12">Section 3</legend>
                <div class="grid grid-cols-5 gap-4">
                    <div class="col-span-1">
                        <label for="distrito">Distrito:</label>
                        <input type="text" id="distrito" name="distrito" class="w-full">
                    </div>
                    <div class="col-span-1">
                        <label for="terminal">Terminal:</label>
                        <input type="text" id="terminal" name="terminal" class="w-full">
                    </div>
                    <div class="col-span-1">
                        <label for="puerto">Puerto:</label>
                        <input type="text" id="puerto" name="puerto" class="w-full">
                    </div>
                    <div class="col-span-1">
                        <label for="potencia">Potencia:</label>
                        <input type="text" id="potencia" name="potencia" class="w-full">
                    </div>
                    <div class="col-span-1">
                        <label for="navegacion">Navegación:</label>
                        <input type="text" id="navegacion" name="navegacion" class="w-full">
                    </div>
                </div>
            </fieldset>
            

            <fieldset>

                <div class="flex">
                    <!-- Elemento 1 -->
                    <div class="flex-1">MATERIAL INSTALADO</div>

                    <!-- Elemento 2 -->
                    <div class="flex-1">TIPO Y LONGITUD DE INSTALACIÓN</div>
                </div>
                <legend>Section 4</legend>

                <!-- Primera columna - MATERIAL INSTALADO -->
                <div class="grid grid-cols-2 gap-4">
                    <!-- Subsección - MATERIAL INSTALADO -->
                    
                    <div class="grid grid-cols-3 gap-4">
                        <div class="col-span-1">

                            <label for="argolla_caja_exedente">Argolla Caja Exedente:</label>
                            <input type="number" id="argolla_caja_exedente" name="argolla_caja_exedente">

                            <label for="cierre_conexion">Cierre Conexión:</label>
                            <input type="number" id="cierre_conexion" name="cierre_conexion">

                            <label for="cincho_negro">Cincho Negro:</label>
                            <input type="number" id="cincho_negro" name="cincho_negro">

                            <label for="clip_adherible">Clip adherible:</label>
                            <input type="number" id="clip_adherible" name="clip_adherible">

                            <label for="cadena_distribucion">Cadena de Distribucion:</label>
                            <input type="number" id="cadena_distribucion" name="cadena_distribucion">

                            <label for="argolla_fleje">Argolla Fleje:</label>
                            <input type="number" id="argolla_fleje" name="argolla_fleje">

                        </div>
                        <div class="col-span-1">

                            <label for="conector_mecanico">Conector Mecanico:</label>
                            <input type="number" id="conector_mecanico" name="conector_mecanico">

                            <label for="ont">ONT:</label>
                            <input type="number" id="ont" name="ont">

                            <label for="roceta_optica">Roceta Optica:</label>
                            <input type="number" id="roceta_optica" name="roceta_optica">

                            <label for="sello_pasa_muro">Sello Pasa Muro:</label>
                            <input type="number" id="sello_pasa_muro" name="sello_pasa_muro">

                            <label for="sujetador_clavo">Sujetador Clavo:</label>
                            <input type="number" id="sujetador_clavo" name="sujetador_clavo">

                            <label for="taquete">Taquete:</label>
                            <input type="number" id="taquete" name="taquete">

                        </div>
                        <div class="col-span-1">

                            <label for="gancho_tensor">Gancho Tensor:</label>
                            <input type="number" id="gancho_tensor" name="gancho_tensor">

                            <label for="cinta_aislar">Cinta de Aislar:</label>
                            <input type="number" id="cinta_aislar" name="cinta_aislar">

                            <label for="cordones_telmex">Cordones Telmex:</label>
                            <input type="number" id="cordones_telmex" name="cordones_telmex">

                            <label for="cordones_telmex">Cordones Huawei:</label>
                            <input type="number" id="cordones_huawei" name="cordones_huawei">

                        </div>
                    </div>
                    
                    
                    
                    <div class="grid grid-cols-3 gap-4">
                        
                        <!-- Primera columna - TIPO DE INSTALACIÓN -->
                        <div class="col-span-1">
                           
                            <label for="tipo_negocio">Negocio:</label>
                            <input type="checkbox" id="tipo_negocio" name="tipo_negocio">
                            <br>
                            <label for="tipo_casa">Casa:</label>
                            <input type="checkbox" id="tipo_casa" name="tipo_casa">
                            <br>
                            <label for="tipo_edificios">Edificios:</label>
                            <input type="checkbox" id="tipo_edificios" name="tipo_edificios">
                            <br>
                            <label for="tipo_plaza">Plaza:</label>
                            <input type="checkbox" id="tipo_plaza" name="tipo_plaza">
                            <br>
                            <label for="tipo_residencial">Residencial:</label>
                            <input type="checkbox" id="tipo_residencial" name="tipo_residencial">
                            <br>
                            <label for="tipo_aerea">Aerea:</label>
                            <input type="checkbox" id="tipo_aerea" name="tipo_aerea">
                            <br>
                            <label for="tipo_subterraneo">Subterraneo:</label>
                            <input type="checkbox" id="tipo_subterraneo" name="tipo_subterraneo">
                           
                        </div>
                        <!-- Segunda columna - CORDONES TELMEX -->
                        <div class="col-span-1">
                            <legend>CORDONES TELMEX</legend>
                            <label for="longitud_acum_tel">Longitud Acum:</label>
                            <input type="checkbox" id="longitud_acum_tel" name="longitud_acum_tel">
                            <br>
                            <label for="fibra_25m_tel">Fibra de 25m:</label>
                            <input type="checkbox" id="fibra_25m_tel" name="fibra_25m_tel">
                            <br>
                            <label for="fibra_50m_tel">Fibra de 50m:</label>
                            <input type="checkbox" id="fibra_50m_tel" name="fibra_50m_tel">
                            <br>
                            <label for="fibra_75m_tel">Fibra de 75m:</label>
                            <input type="checkbox" id="fibra_75m_tel" name="fibra_75m_tel">
                            <br>
                            <label for="fibra_100m_tel">Fibra de 100m:</label>
                            <input type="checkbox" id="fibra_100m_tel" name="fibra_100m_tel">
                            <br>
                            <label for="fibra_125m_tel">Fibra de 125m:</label>
                            <input type="checkbox" id="fibra_125m_tel" name="fibra_125m_tel">
                            <br>
                            <label for="metral_bobina_tel">Metral E/bobina:</label>
                            <input type="checkbox" id="metral_bobina_tel" name="metral_bobina_tel">
                           
                        </div>
                        
                        <!-- Tercera columna - CORDONES HUAWEI -->
                        <div class="col-span-1">
                            <legend>CORDONES HUAWEI</legend>
                            
                            <label for="longitud_acum_huawei">Longitud Acum:</label>
                            <input type="checkbox" id="longitud_acum_huawei" name="longitud_acum_huawei">
                            <br>
                            <label for="cord_prec_25m_huawei">Cord Prec 25m:</label>
                            <input type="checkbox" id="cord_prec_25m_huawei" name="cord_prec_25m_huawei">
                            <br>
                            <label for="cord_prec_50m_huawei">Cord Prec 50m:</label>
                            <input type="checkbox" id="cord_prec_50m_huawei" name="cord_prec_50m_huawei">
                            <br>
                            <label for="cord_prec_80m_huawei">Cord Prec 80m:</label>
                            <input type="checkbox" id="cord_prec_80m_huawei" name="cord_prec_80m_huawei">
                            <br>
                            <label for="cord_prec_100m_huawei">Cord Prec 100m:</label>
                            <input type="checkbox" id="cord_prec_100m_huawei" name="cord_prec_100m_huawei">
                            <br>
                            <label for="cord_prec_120m_huawei">Cord Prec 120m:</label>
                            <input type="checkbox" id="cord_prec_120m_huawei" name="cord_prec_120m_huawei">
                            <br>
                            <label for="cord_prec_150m_huawei">Cord Prec 150m:</label>
                            <input type="checkbox" id="cord_prec_150m_huawei" name="cord_prec_150m_huawei">
                            <br>
                            <label for="cord_prec_200m_huawei">Cord Prec 200m:</label>
                            <input type="checkbox" id="cord_prec_200m_huawei" name="cord_prec_200m_huawei">
                            
                        </div>

                    </div>
                    
                </div>

                
            </fieldset>

            <fieldset>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-1 ">
                    <legend>Parte 1</legend>
                        <label for="numero_serie">Número de Serie:</label>
                        <input type="text" id="numero_serie" name="numero_serie">
                        <br>
                        <label for="alfanumerico">Alfanumérico:</label>
                        <input type="text" id="alfanumerico" name="alfanumerico">
                        <br>
                        <label for="key">Key:</label>
                        <input type="text" id="key" name="key">
                        <br>
                        <label for="ont_cobre">N ONT de Cobre:</label>
                        <input type="text" id="ont_cobre" name="ont_cobre">
                        <br>
                        <label for="observaciones">Observaciones:</label>
                        <textarea id="observaciones" name="observaciones" rows="2"></textarea>
                        <br>
                        <label for="correo_electronico">Correo Electrónico:</label>
                        <input type="text" id="correo_electronico" name="correo_electronico">
                        <br>
                        <label for="clarovideo">Clarovideo:</label>
                        <input type="text" id="clarovideo" name="clarovideo">
                        <br>
                        <label for="si_no">Si/No:</label>
                        <input type="radio" id="si" name="si_no" value="Si">
                        <label for="si">Si</label>
                        <input type="radio" id="no" name="si_no" value="No">
                        <label for="no">No</label>
                    </div>

                    <div class="col-span-1">
                        <legend>Parte 2</legend>
                        <label for="hora_generacion_portal">Hora de Generación Portal:</label>
                        <input type="time" id="hora_generacion_portal" name="hora_generacion_portal">
                        <br>
                        <label for="hora_liquidacion">Hora de Liquidación:</label>
                        <input type="time" id="hora_liquidacion" name="hora_liquidacion">
                        <br>
                        <label for="nombre_tecnico">Nombre y Firma de Técnico:</label>
                        <input type="text" id="nombre_tecnico" name="nombre_tecnico" rows="2"></textarea>
                    </div>
                </div>

                
                
            </fieldset>
            
            <button type="submit">GUARDAR</button>
        </form>
        
       
    </div>
</div>
@endsection
