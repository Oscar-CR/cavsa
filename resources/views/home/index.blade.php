@extends('layouts.app')

@section('content')
@include('components.header') 
<div class="container mx-auto mt-4 w-full">

    <div class="bg-white rounded-lg shadow-lg p-6">
        <h1 class="text-2xl font-bold mb-12">¡Hola {{isset(Auth()->user()->name)? Auth()->user()->name : 'usuario' }}!</h1>
        
        <p class="text-gray-700 font-bold text-lg mb-4">Seleccionar una opción</p>

        <div class="grid grid-cols-2 gap-4">
            <div class="relative">
                <a href="{{ route('home.fibra')}}">
                    <img src="{{ asset('img/fibra.png') }}" alt="Descripción de la imagen" class="w-full h-full object-cover rounded">
                    <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 text-white p-4 rounded" >
                        <p class="text-2xl font-bold mt-80 md:mt-45 sm:mt-25 text-center">Fibra</p>
                    </div>
                </a>
            </div>

            <div class="relative">
                <a href="{{ route('home.cobre')}}">
                    <img src="{{ asset('img/cobre.png') }}" alt="Descripción de la imagen" class="w-full h-full object-cover rounded">
                    <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 text-white p-4 rounded">
                        <p class="text-2xl font-bold mt-80 md:mt-45 sm:mt-25 text-center ">Cobre</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
