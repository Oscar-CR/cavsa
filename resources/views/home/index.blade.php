@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-4">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h1 class="text-2xl font-semibold mb-4">Bienvenido a Mi Sitio</h1>
        
        <p class="text-gray-700">Este es el contenido de la página de inicio. Puedes personalizar esta sección según tus necesidades.</p>
        
        <div class="mt-4">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">
                    Cerrar Sesión
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
