@extends('layouts.app')

@section('content')
@include('components.header') 
<div class="container mx-auto mt-4 w-full">

    <div class="bg-white rounded-lg shadow-lg p-6">
        <h1 class="text-2xl font-bold mb-12">Fibra</h1>

       
        <div class="flex justify-between">
            <h3 class="text-lg font-bold mb-8">Mis órdenes</h3>
        
            
            <a href="{{ route('home.fibra.create') }}" class="flex items-center px-4 h-8 bg-green-500 text-white hover:bg-green-600 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Agregar
            </a>
        </div>
       
    </div>
</div>
@endsection
