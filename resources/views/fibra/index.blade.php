@extends('layouts.app')

@section('content')
@include('components.header') 
<div class="container mx-auto mt-4 w-full">

    <div class="bg-white rounded-lg shadow-lg p-6">
        <h1 class="text-2xl font-bold mb-12">Fibra</h1>
        
        @if (session('msg'))
            <div class="mb-4 rounded-lg bg-green-100 px-6 py-5 text-base text-green-700" role="alert">
                {{ session('msg') }}
            </div>
        @endif

        <div class="flex justify-between">
            <h3 class="text-lg font-bold mb-8">Mis órdenes</h3>

            <a href="{{ route('home.fibra.create') }}" class="flex items-center px-4 h-8 bg-green-500 text-white hover:bg-green-600 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Agregar
            </a>
        </div>
        <table id="miTabla" class="table-auto w-full">
            <thead>
                <tr> 
                    <th class="text-left">Número de O.S.</th>
                    <th class="text-left">Número de O.S.</th>
                    <th class="text-left">Tipo de O.S.</th>
                    <th class="text-left">Fecha</th>
                    <th class="text-left">Cliente</th>
                    <th class="text-left">Dirección</th>
                    <th class="text-left">Status</th>
                    <th class="text-left">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fibraOrders as $fibraOrder)
                    <tr>
                        <td>{{  $fibraOrder->numero_os }}</td>
                        <td>{{  $fibraOrder->numero_os }}</td>
                        <td>{{ $fibraOrder->tipo_os }}</td>
                        <td>{{ $fibraOrder->fecha }}</td>
                        <td>{{ $fibraOrder->nombre_cliente }}</td>
                        <td>{{ $fibraOrder->direccion }}</td>
                        <td>{{ $fibraOrder->status }}</td>`
                        <td>
                            <div class="flex">
                                
                            <form method="POST" action="{{ route('home.fibra.pdf', ['id' => $fibraOrder->id ]) }}">
                                @csrf
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                    PDF
                                </button>
                            </form>
                            </form>
                                <form method="POST" action="{{ route('home.fibra.xlsx', ['id' => $fibraOrder->id ]) }}">
                                    @csrf
                                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                        XLSX
                                    </button>
                                </form>                                
                                <form method="GET" action="{{ route('home.fibra.edit', ['id' => $fibraOrder->id ]) }}">
                                    @csrf
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        Editar
                                    </button>
                                </form>
                                
                            </div>
                            

                        </td>
                    </tr>
                @endforeach
  
            </tbody>
        </table>

      
       
    </div>
    
   
</div>
@endsection

@section('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

@endsection