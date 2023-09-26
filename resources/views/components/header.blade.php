<header class="bg-white shadow-md">
    <div class="container mx-auto flex justify-between items-center py-3 px-8">
        
        <a href="{{ route('home.index') }}" class="text-blue-500 text-2xl font-semibold">
            <img src="{{ asset('img/cavsa.png') }}" alt="Logo" class="h-16">
        </a>
        

        <div class="flex items-center space-x-6">
        
            @if(auth()->user()->hasRole('admin'))
                <span class="text-gray-700">Administrador</span>
            @endif
            <span class="text-gray-700">Mi Cuenta</span>
            <a href="{{ route('logout') }}" class="text-red-500 hover:text-red-600" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Cerrar Sesión
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </div>
    </div>
</header>