@extends('layout')

@section('title', $servidor['nombre'])

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Navegación -->
    <div class="mb-6">
        <a href="{{ route('home') }}" class="text-blue-600 hover:text-blue-800 font-semibold">← Volver al inicio</a>
    </div>

    <!-- Hero Section con imagen -->
    <div class="bg-white dark:bg-slate-800 rounded-lg shadow-lg overflow-hidden mb-8">
        <div class="relative h-96 bg-gradient-to-br from-blue-500 to-purple-600 overflow-hidden">
            <img src="{{ $servidor['imagen'] }}" alt="{{ $servidor['nombre'] }}" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white text-center">{{ $servidor['nombre'] }}</h1>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Contenido principal -->
        <div class="lg:col-span-2">
            <!-- Descripción -->
            <section class="bg-white dark:bg-slate-800 rounded-lg shadow-md p-6 mb-8">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Descripción General</h2>
                <p class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed">
                    {{ $servidor['descripcion'] }}
                </p>
            </section>

            <!-- Video embebido -->
            <section class="bg-white dark:bg-slate-800 rounded-lg shadow-md p-6 mb-8">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Video Informativo</h2>
                <div style="position: relative; width: 100%; padding-bottom: 56.25%;">
                    <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 0.5rem;"
                            src="{{ $servidor['video'] }}" 
                            title="Video de {{ $servidor['nombre'] }}"
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                    </iframe>
                </div>
            </section>

            <!-- Características -->
            <section class="bg-white dark:bg-slate-800 rounded-lg shadow-md p-6 mb-8">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Características Principales</h2>
                <ul class="space-y-3">
                    @foreach($servidor['caracteristicas'] as $caracteristica)
                        <li class="flex items-start">
                            <span class="text-blue-600 dark:text-blue-400 mr-3 mt-1">✓</span>
                            <span class="text-gray-600 dark:text-gray-300">{{ $caracteristica }}</span>
                        </li>
                    @endforeach
                </ul>
            </section>

            <!-- Ventajas -->
            <section class="bg-white dark:bg-slate-800 rounded-lg shadow-md p-6 mb-8">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Ventajas</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach($servidor['ventajas'] as $ventaja)
                        <div class="bg-green-50 dark:bg-green-900/20 border-l-4 border-green-500 p-4 rounded">
                            <p class="text-gray-700 dark:text-gray-300">{{ $ventaja }}</p>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- Desventajas -->
            <section class="bg-white dark:bg-slate-800 rounded-lg shadow-md p-6 mb-8">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Desventajas</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach($servidor['desventajas'] as $desventaja)
                        <div class="bg-red-50 dark:bg-red-900/20 border-l-4 border-red-500 p-4 rounded">
                            <p class="text-gray-700 dark:text-gray-300">{{ $desventaja }}</p>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- Casos de Uso -->
            <section class="bg-white dark:bg-slate-800 rounded-lg shadow-md p-6 mb-8">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Casos de Uso</h2>
                <div class="bg-blue-50 dark:bg-blue-900/20 border-l-4 border-blue-500 p-4 rounded">
                    <p class="text-gray-700 dark:text-gray-300 text-lg">{{ $servidor['casos_uso'] }}</p>
                </div>
            </section>
        </div>

        <!-- Sidebar -->
        <div class="lg:col-span-1">
            <!-- Administración de Memoria -->
            <section class="bg-white dark:bg-slate-800 rounded-lg shadow-md p-6 mb-8 sticky top-20">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">💾 Administración de Memoria</h2>
                <div class="space-y-3">
                    @foreach($servidor['memoria'] as $memoria)
                        <div class="bg-gray-50 dark:bg-slate-700 p-3 rounded">
                            <p class="text-gray-700 dark:text-gray-300 text-sm">{{ $memoria }}</p>
                        </div>
                    @endforeach
                </div>

                <!-- Barra visual de consumo típico -->
                <div class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-700">
                    <h3 class="font-semibold text-gray-900 dark:text-white mb-3">Consumo Típico</h3>
                    <div class="relative pt-1">
                        <div class="flex mb-2 items-center justify-between">
                            <div>
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200 dark:bg-blue-900 dark:text-blue-100">
                                    Memoria
                                </span>
                            </div>
                            <div class="text-right">
                                <span class="text-xs font-semibold inline-block text-blue-600 dark:text-blue-100">
                                    Medio
                                </span>
                            </div>
                        </div>
                        <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-gray-200 dark:bg-slate-700">
                            <div style="width:45%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-600 dark:bg-blue-500"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Servidores relacionados -->
            @if($otrosServidores->count() > 0)
                <section class="bg-white dark:bg-slate-800 rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Otros Servidores</h2>
                    <div class="space-y-3">
                        @foreach($otrosServidores as $otro)
                            <a href="{{ route('servidor.show', $otro['slug']) }}" 
                               class="block p-3 rounded bg-gray-50 dark:bg-slate-700 hover:bg-gray-100 dark:hover:bg-slate-600 transition">
                                <h3 class="font-semibold text-gray-900 dark:text-white text-sm hover:text-blue-600">
                                    {{ $otro['nombre'] }}
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400 text-xs mt-1 line-clamp-2">
                                    {{ $otro['descripcion'] }}
                                </p>
                            </a>
                        @endforeach
                    </div>
                </section>
            @endif
        </div>
    </div>
</div>
@endsection
