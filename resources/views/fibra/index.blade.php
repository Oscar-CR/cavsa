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


        <table  id="miTabla" class="table-auto w-full">
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
                                
                                <svg xmlns="http://www.w3.org/2000/svg" 
                                    width="30px" height="30px" viewBox="0 0 56 64" enable-background="new 0 0 56 64" xml:space="preserve" class="mr-2">
                                    <g>
                                        <path fill="#8C181A" d="M5.1,0C2.3,0,0,2.3,0,5.1v53.8C0,61.7,2.3,64,5.1,64h45.8c2.8,0,5.1-2.3,5.1-5.1V20.3L37.1,0H5.1z"/>
                                        <path fill="#6B0D12" d="M56,20.4v1H43.2c0,0-6.3-1.3-6.1-6.7c0,0,0.2,5.7,6,5.7H56z"/>
                                        <path opacity="0.5" fill="#FFFFFF" enable-background="new    " d="M37.1,0v14.6c0,1.7,1.1,5.8,6.1,5.8H56L37.1,0z"/>
                                    </g>
                                    <path fill="#FFFFFF" d="M14.9,49h-3.3v4.1c0,0.4-0.3,0.7-0.8,0.7c-0.4,0-0.7-0.3-0.7-0.7V42.9c0-0.6,0.5-1.1,1.1-1.1h3.7
                                        c2.4,0,3.8,1.7,3.8,3.6C18.7,47.4,17.3,49,14.9,49z M14.8,43.1h-3.2v4.6h3.2c1.4,0,2.4-0.9,2.4-2.3C17.2,44,16.2,43.1,14.8,43.1z
                                        M25.2,53.8h-3c-0.6,0-1.1-0.5-1.1-1.1v-9.8c0-0.6,0.5-1.1,1.1-1.1h3c3.7,0,6.2,2.6,6.2,6C31.4,51.2,29,53.8,25.2,53.8z M25.2,43.1
                                        h-2.6v9.3h2.6c2.9,0,4.6-2.1,4.6-4.7C29.9,45.2,28.2,43.1,25.2,43.1z M41.5,43.1h-5.8V47h5.7c0.4,0,0.6,0.3,0.6,0.7
                                        s-0.3,0.6-0.6,0.6h-5.7v4.8c0,0.4-0.3,0.7-0.8,0.7c-0.4,0-0.7-0.3-0.7-0.7V42.9c0-0.6,0.5-1.1,1.1-1.1h6.2c0.4,0,0.6,0.3,0.6,0.7
                                        C42.2,42.8,41.9,43.1,41.5,43.1z"/>
                                </svg>
                                <svg class="mr-2" width="30px" height="30px" viewBox="-4 0 64 64" xmlns="http://www.w3.org/2000/svg"><path d="M5.112.006c-2.802 0-5.073 2.273-5.073 5.074v53.841c0 2.803 2.271 5.074 5.073 5.074h45.774c2.801 0 5.074-2.271 5.074-5.074v-38.605l-18.902-20.31h-31.946z" fill-rule="evenodd" clip-rule="evenodd" fill="#45B058"/><path d="M19.429 53.938c-.216 0-.415-.09-.54-.27l-3.728-4.97-3.745 4.97c-.126.18-.324.27-.54.27-.396 0-.72-.306-.72-.72 0-.144.035-.306.144-.432l3.89-5.131-3.619-4.826c-.09-.126-.145-.27-.145-.414 0-.342.288-.72.721-.72.216 0 .432.108.576.288l3.438 4.628 3.438-4.646c.127-.18.324-.27.541-.27.378 0 .738.306.738.72 0 .144-.036.288-.127.414l-3.619 4.808 3.891 5.149c.09.126.125.27.125.414 0 .396-.324.738-.719.738zm9.989-.126h-5.455c-.595 0-1.081-.486-1.081-1.08v-10.317c0-.396.324-.72.774-.72.396 0 .721.324.721.72v10.065h5.041c.359 0 .648.288.648.648 0 .396-.289.684-.648.684zm6.982.216c-1.782 0-3.188-.594-4.213-1.495-.162-.144-.234-.342-.234-.54 0-.36.27-.756.702-.756.144 0 .306.036.433.144.828.738 1.98 1.314 3.367 1.314 2.143 0 2.826-1.152 2.826-2.071 0-3.097-7.111-1.386-7.111-5.672 0-1.98 1.764-3.331 4.123-3.331 1.548 0 2.881.468 3.853 1.278.162.144.253.342.253.54 0 .36-.307.72-.703.72-.145 0-.307-.054-.432-.162-.883-.72-1.98-1.044-3.079-1.044-1.44 0-2.467.774-2.467 1.909 0 2.701 7.112 1.152 7.112 5.636 0 1.748-1.188 3.53-4.43 3.53z" fill="#ffffff"/><path d="M55.953 20.352v1h-12.801s-6.312-1.26-6.127-6.707c0 0 .207 5.707 6.002 5.707h12.926z" fill-rule="evenodd" clip-rule="evenodd" fill="#349C42"/><path d="M37.049 0v14.561c0 1.656 1.104 5.791 6.104 5.791h12.801l-18.905-20.352z" opacity=".5" fill-rule="evenodd" clip-rule="evenodd" fill="#ffffff"/></svg>
                                
                                <a href="{{ route('home.fibra.edit',  ['id' => $fibraOrder->id ]) }}">
                                    <svg class="mr-2" width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                
                            </div>
                            

                        </td>
                    </tr>
                @endforeach
  
            </tbody>
        </table>

      
       
    </div>
    
    @section('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

    @endsection
</div>
@endsection
