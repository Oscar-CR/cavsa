@extends('layouts.app')

@section('content')
@include('components.header') 
<div class="container mx-auto mt-4 w-full">
    <div class="flex justify-center items-center w-full">
        <div class="bg-white p-4 rounded-lg shadow-md w-full ">
            <h1 class="text-2xl font-semibold mb-4">Editar Usuario</h1>
            <form action="{{ route('admin.user.update', ['id'=> $user->id] ) }}" method="POST">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-600 ">Nombre:</label>
                        <input type="text" name="name" id="name" class="form-input w-full rounded" value="{{$user->name}}" required>
                    </div>
                    <div class="mb-4">
                        <label for="lastname" class="block text-gray-600">Apellido:</label>
                        <input type="text" name="lastname" id="lastname" class="form-input w-full rounded"  value="{{$user->lastname}}" >
                    </div>
                    <div class="mb-4">
                        <label for="cope_labor" class="block text-gray-600">Cope Labor:</label>
                        <input type="text" name="cope_labor" id="cope_labor" class="form-input w-full rounded"  value="{{$user->cope_labor}}" required >
                    </div>
                    <div class="mb-4">
                        <label for="technical_number" class="block text-gray-600">Número Técnico:</label>
                        <input type="text" name="technical_number" id="technical_number" class="form-input w-full rounded" value="{{$user->technical_number}}" required>
                    </div>
                  
                    <div class="mb-4">
                        <label class="block text-gray-600">Roles:</label>
                        <div class="grid grid-cols-2 gap-4">
                          
                                <label class="flex items-center">
                                    <input type="checkbox" name="admin" value="1" class="form-checkbox">
                                    <span class="ml-2">Administrador</span>
                                </label>

                                <label class="flex items-center">
                                    <input type="checkbox" name="employee" value="2" class="form-checkbox">
                                    <span class="ml-2">Empleado</span>
                                </label>
                          
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="bg-[#0172C2] text-white py-2 px-4 rounded hover:bg-[#189FFF] w-full rounded">Actualizar informacion de usuario</button>
                </div>
            </form>
        </div>
    </div>


    <div class="bg-white p-4 rounded-lg shadow-md w-full mt-4">
        <form method="POST" action="{{ route('admin.user.change.password', ['id'=> $user->id] ) }}">
        @csrf
            <h1 class="text-2xl font-semibold mb-4">¿Cambiar contraseña?</h1>

            <div class="flex mb-4">
                <div class="w-3/4 pr-4">
                    <label for="text" class="block text-gray-600 font-semibold mb-2">Nueva contraseña:</label>
                    <input type="text" name="password" id="password" class="w-full px-4 py-2 border rounded-md">
                </div>
                <div class="w-1/4">                    
                    <label for="password" class="block text-gray-600 font-semibold mb-2"></label>

                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded mt-6 w-full">Cambiar Contraseña</button>
                </div>
            </div>
        </form>
    </div>
    
   
</div>
@endsection
