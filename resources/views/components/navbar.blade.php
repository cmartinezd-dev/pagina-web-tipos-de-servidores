<nav class="bg-white dark:bg-slate-800 shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600 dark:text-blue-400">
                    🖥️ ServidoresWeb
                </a>
            </div>

            <!-- Menu para desktop -->
            <div class="hidden md:flex md:items-center md:space-x-4">
                <a href="{{ route('home') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2 rounded-md text-sm font-medium">
                    Inicio
                </a>

                @auth
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-700 dark:text-gray-300 text-sm">
                            Hola, <strong>{{ Auth::user()->name }}</strong>
                        </span>
                        <a href="{{ route('dashboard') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2 rounded-md text-sm font-medium">
                            Dashboard
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                                Cerrar Sesión
                            </button>
                        </form>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 px-3 py-2 rounded-md text-sm font-medium">
                        Iniciar Sesión
                    </a>
                    <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                        Registrarse
                    </a>
                @endauth
            </div>

            <!-- Menu hamburguesa para mobile -->
            <div class="md:hidden">
                <button id="mobile-menu-btn" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu móvil (oculto por defecto) -->
    <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-slate-700 px-2 pt-2 pb-3 space-y-1">
        <a href="{{ route('home') }}" class="block text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-slate-600 px-3 py-2 rounded-md text-base font-medium">
            Inicio
        </a>

        @auth
            <a href="{{ route('dashboard') }}" class="block text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-slate-600 px-3 py-2 rounded-md text-base font-medium">
                Dashboard
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-slate-600 px-3 py-2 rounded-md text-base font-medium">
                    Cerrar Sesión
                </button>
            </form>
        @else
            <a href="{{ route('login') }}" class="block text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-slate-600 px-3 py-2 rounded-md text-base font-medium">
                Iniciar Sesión
            </a>
            <a href="{{ route('register') }}" class="block text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-slate-600 px-3 py-2 rounded-md text-base font-medium">
                Registrarse
            </a>
        @endauth
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
