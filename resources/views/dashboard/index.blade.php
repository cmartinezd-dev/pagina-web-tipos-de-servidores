@extends('layout')

@section('title', 'Dashboard')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Título de bienvenida -->
    <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg shadow-lg p-8 mb-8 text-white">
        <h1 class="text-4xl font-bold mb-2">¡Bienvenido, {{ $user->name }}! 👋</h1>
        <p class="text-lg opacity-90">
            Has iniciado sesión correctamente en ServidoresWeb
        </p>
    </div>

    <!-- Información del usuario -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
        <!-- Tarjeta de perfil -->
        <div class="bg-white dark:bg-slate-800 rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Información de tu Cuenta</h2>
            
            <div class="space-y-4">
                <div>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Nombre</p>
                    <p class="text-xl font-semibold text-gray-900 dark:text-white">{{ $user->name }}</p>
                </div>

                <div>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Correo Electrónico</p>
                    <p class="text-xl font-semibold text-gray-900 dark:text-white">{{ $user->email }}</p>
                </div>

                <div>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Miembro Desde</p>
                    <p class="text-xl font-semibold text-gray-900 dark:text-white">
                        {{ $user->created_at->format('d \\d\\e F \\d\\e Y') }}
                    </p>
                </div>

                <div>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Última Actualización</p>
                    <p class="text-xl font-semibold text-gray-900 dark:text-white">
                        {{ $user->updated_at->format('d \\d\\e F \\d\\e Y h:i A') }}
                    </p>
                </div>
            </div>

            <form method="POST" action="{{ route('logout') }}" class="mt-6">
                @csrf
                <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-2 rounded-lg transition">
                    Cerrar Sesión
                </button>
            </form>
        </div>

        <!-- Tarjeta de estadísticas -->
        <div class="bg-white dark:bg-slate-800 rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Estadísticas</h2>
            
            <div class="space-y-4">
                <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded">
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Servidores Explorados</p>
                    <p class="text-3xl font-bold text-blue-600 dark:text-blue-400">8</p>
                </div>

                <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded">
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Tiempo de Acceso</p>
                    <p class="text-3xl font-bold text-green-600 dark:text-green-400">Ilimitado</p>
                </div>

                <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded">
                    <p class="text-gray-600 dark:text-gray-400 text-sm">Tu Estado</p>
                    <p class="text-3xl font-bold text-purple-600 dark:text-purple-400">Activo ✓</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Detalles de actividad -->
    <div class="bg-white dark:bg-slate-800 rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">🎯 Próximos Pasos Recomendados</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="border-l-4 border-blue-500 p-4 bg-blue-50 dark:bg-blue-900/20 rounded">
                <h3 class="font-semibold text-gray-900 dark:text-white mb-2">📚 Explorar Servidores</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">
                    Descubre los 8 servidores principales con información detallada.
                </p>
                <a href="{{ route('home') }}" class="text-blue-600 hover:text-blue-800 text-sm font-semibold">
                    Ir al inicio →
                </a>
            </div>

            <div class="border-l-4 border-green-500 p-4 bg-green-50 dark:bg-green-900/20 rounded">
                <h3 class="font-semibold text-gray-900 dark:text-white mb-2">💾 Aprender sobre Memoria</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">
                    Conoce cómo cada servidor administra la memoria del sistema.
                </p>
                <a href="{{ route('home') }}" class="text-green-600 hover:text-green-800 text-sm font-semibold">
                    Ver detalles →
                </a>
            </div>

            <div class="border-l-4 border-purple-500 p-4 bg-purple-50 dark:bg-purple-900/20 rounded">
                <h3 class="font-semibold text-gray-900 dark:text-white mb-2">🚀 Casos de Uso</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">
                    Descubre cuándo usar cada tipo de servidor.
                </p>
                <a href="{{ route('home') }}" class="text-purple-600 hover:text-purple-800 text-sm font-semibold">
                    Explorar →
                </a>
            </div>
        </div>
    </div>

    <!-- Información adicional -->
    <div class="bg-gradient-to-r from-green-50 to-blue-50 dark:from-slate-700 dark:to-slate-600 rounded-lg p-6 border border-green-200 dark:border-slate-600">
        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">✨ ¿Qué puedes hacer ahora?</h3>
        <ul class="list-disc list-inside space-y-2 text-gray-600 dark:text-gray-300">
            <li>Navegar a través de los 8 servidores investigados</li>
            <li>Ver detalles sobre administración de memoria</li>
            <li>Explorar características, ventajas y desventajas</li>
            <li>Conocer los casos de uso para cada servidor</li>
            <li>Ver videos informativos de cada servidor</li>
        </ul>
    </div>
</div>
@endsection
