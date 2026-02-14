<footer class="bg-slate-900 text-white mt-12 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <!-- Sobre nosotros -->
            <div>
                <h3 class="text-xl font-bold mb-4">🖥️ ServidoresWeb</h3>
                <p class="text-gray-400">
                    Guía completa sobre los diferentes tipos de servidores web, su administración de memoria y características principales.
                </p>
            </div>

            <!-- Enlaces rápidos -->
            <div>
                <h3 class="text-xl font-bold mb-4">Enlaces Rápidos</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition">Inicio</a></li>
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition">Servidores</a></li>
                    @auth
                        <li><a href="{{ route('dashboard') }}" class="text-gray-400 hover:text-white transition">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="text-gray-400 hover:text-white transition">Iniciar Sesión</a></li>
                    @endauth
                </ul>
            </div>

            <!-- Información de contacto -->
            <div>
                <h3 class="text-xl font-bold mb-4">Información</h3>
                <p class="text-gray-400 mb-2">
                    <strong>Desarrollado por:</strong> CARLOS MARTINEZ
                </p>
                <p class="text-gray-400">
                    <strong>Email:</strong> cmartinezd@miumg.edu.gt
                </p>
            </div>
        </div>

        <hr class="border-slate-700 my-6">

        <div class="flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400 text-sm">
                &copy; 2026 ServidoresWeb. Todos los derechos reservados.
            </p>
            <p class="text-gray-400 text-sm mt-4 md:mt-0">
                <strong>Desarrollado por:CARLOS MARTINEZ</strong> 📚
            </p>
        </div>
    </div>
</footer>
