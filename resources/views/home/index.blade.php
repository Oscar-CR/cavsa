@extends('layouts.app')

@section('content')
@include('components.header') 
<div class="container mx-auto mt-4 w-full">

    <div class="bg-white rounded-lg shadow-lg p-6">
        <h1 class="text-2xl font-bold mb-4">¡Hola {{isset(Auth()->user()->name)? Auth()->user()->name : 'usuario' }}!</h1>
        
        <p class="text-gray-700">Seleccionar una opción</p>

        <div class="grid grid-cols-2 gap-4">
            <!-- Columna 1 -->
            <div class="bg-gray-200 p-4">
                <!-- Contenido de la columna 1 -->
                Columna 1
            </div>

            <!-- Columna 2 -->
            <div class="bg-gray-200 p-4">
                <!-- Contenido de la columna 2 -->
                Columna 2
            </div>
        </div>
        
        
    </div>
</div>
@endsection
