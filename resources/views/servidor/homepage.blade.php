@extends('layout')

@section('title', 'Inicio - Guía de Servidores Web')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Hero Section -->
    <div class="text-center mb-16">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
            Guía Completa de Servidores Web
        </h1>
        <p class="text-xl text-gray-600 dark:text-gray-300 mb-8">
            Descubre todo lo que necesitas saber sobre los diferentes tipos de servidores, su administración de memoria y características.
        </p>
        @guest
            <a href="{{ route('login') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition">
                Inicia Sesión para Acceder a Más Funcionalidades
            </a>
        @endguest
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
        <div class="bg-white dark:bg-slate-800 rounded-lg shadow-md p-6 text-center">
            <div class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2">{{ count($servidores) }}</div>
            <p class="text-gray-600 dark:text-gray-300">Servidores Investigados</p>
        </div>
        <div class="bg-white dark:bg-slate-800 rounded-lg shadow-md p-6 text-center">
            <div class="text-4xl font-bold text-green-600 dark:text-green-400 mb-2">8+</div>
            <p class="text-gray-600 dark:text-gray-300">Páginas Detalladas</p>
        </div>
        <div class="bg-white dark:bg-slate-800 rounded-lg shadow-md p-6 text-center">
            <div class="text-4xl font-bold text-purple-600 dark:text-purple-400 mb-2">100%</div>
            <p class="text-gray-600 dark:text-gray-300">Información Verificada</p>
        </div>
    </div>

    <!-- Servidores Grid -->
    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Explora los Servidores</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($servidores as $servidor)
            <a href="{{ route('servidor.show', $servidor['slug']) }}" class="group">
                <div class="bg-white dark:bg-slate-800 rounded-lg shadow-md overflow-hidden hover:shadow-2xl transition transform hover:scale-105">
                    <!-- Imagen del servidor -->
                    <div class="relative h-40 bg-gradient-to-br from-blue-500 to-purple-600 overflow-hidden">
                        <img src="{{ $servidor['imagen'] }}" alt="{{ $servidor['nombre'] }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition">
                    </div>

                    <!-- Contenido -->
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 group-hover:text-blue-600">
                            {{ $servidor['nombre'] }}
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4 line-clamp-2">
                            {{ $servidor['descripcion'] }}
                        </p>

                        <!-- Características -->
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-100 text-xs px-2 py-1 rounded">
                                Servidor
                            </span>
                            <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-100 text-xs px-2 py-1 rounded">
                                {{ count($servidor['caracteristicas']) }} features
                            </span>
                        </div>

                        <!-- Botón -->
                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded font-semibold transition">
                            Ver Detalles →
                        </button>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    <!-- Call to Action -->
    <div class="mt-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg shadow-lg p-8 text-center text-white">
        <h2 class="text-3xl font-bold mb-4">Aprende sobre Servidores</h2>
        <p class="text-lg mb-6">
            Cada servidor tiene características únicas. Haz clic en cualquiera para ver información detallada, administración de memoria y casos de uso.
        </p>
        @guest
            <a href="{{ route('register') }}" class="inline-block bg-white text-blue-600 font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition">
                Regístrate Ahora
            </a>
        @endguest
    </div>
</div>
@endsection
