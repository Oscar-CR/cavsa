@extends('layouts.app')

@section('content')
@include('components.header') 
<div class="container mx-auto mt-4 w-full">
    <div class="flex justify-center items-center w-full">
        <div class="bg-white p-4 rounded-lg shadow-md w-full ">
            <h1 class="text-2xl font-semibold mb-4">Crear Usuario</h1>
            <form action="{{ route('admin.user.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-600 ">Nombre:</label>
                        <input type="text" name="name" id="name" class="form-input w-full rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="lastname" class="block text-gray-600">Apellido:</label>
                        <input type="text" name="lastname" id="lastname" class="form-input w-full rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="cope_labor" class="block text-gray-600">Cope Labor:</label>
                        <input type="text" name="cope_labor" id="cope_labor" class="form-input w-full rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="technical_number" class="block text-gray-600">Número Técnico:</label>
                        <input type="text" name="technical_number" id="technical_number" class="form-input w-full rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-600">Contraseña:</label>
                        <input type="text" name="password" id="password" class="form-input w-full rounded" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-600">Roles:</label>
                        <div class="grid grid-cols-2 gap-4">
                            @foreach ($roles as $role)
                                <label class="flex items-center">
                                    <input type="checkbox" name="roles[]" value="{{ $role->id }}" class="form-checkbox">
                                    <span class="ml-2">{{ $role->display_name }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="bg-[#0172C2] text-white py-2 px-4 rounded hover:bg-[#189FFF] w-full rounded">Crear Usuario</button>
                </div>
            </form>
        </div>
    </div>
    
   
</div>
@endsection
