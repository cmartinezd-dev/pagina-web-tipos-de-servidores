@extends('layout')

@section('title', 'Carátula - Tarea Académica')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100 dark:from-slate-900 dark:to-slate-800 py-12 px-4 sm:px-6 lg:px-8">
    <!-- Contenedor de la carátula -->
    <div class="max-w-3xl mx-auto">
        <div class="bg-white dark:bg-slate-800 shadow-2xl rounded-lg overflow-hidden">
            
            <!-- Encabezado con línea decorativa -->
            <div class="border-b-4 border-blue-600 px-12 py-16 text-center bg-gradient-to-b from-slate-50 to-white dark:from-slate-700 dark:to-slate-800">
                
                <!-- Logo/Escudo simulado -->
                <div class="mb-6 flex justify-center">
                    <div class="w-20 h-20 bg-blue-600 rounded-full flex items-center justify-center text-white text-3xl font-bold shadow-lg">
                        🎓
                    </div>
                </div>

                <!-- Nombre de la universidad -->
                <h1 class="text-2xl font-bold text-blue-900 dark:text-blue-300 mb-1">
                    UNIVERSIDAD MARIANO GALVEZ DE GUATEMALA
                </h1>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-8 font-semibold tracking-wider">
                    Excelencia Académica
                </p>

                <!-- Línea decorativa -->
                <div class="flex justify-center gap-2 mb-8">
                    <div class="h-1 w-12 bg-blue-600 rounded-full"></div>
                    <div class="h-1 w-12 bg-blue-400 rounded-full"></div>
                    <div class="h-1 w-12 bg-blue-600 rounded-full"></div>
                </div>
            </div>

            <!-- Contenido principal de la carátula -->
            <div class="px-12 py-16 space-y-12">
                
                <!-- Información académica -->
                <div class="space-y-8">
                    
                    <!-- Curso -->
                    <div class="text-center pb-6 border-b border-gray-200 dark:border-gray-700">
                        <p class="text-sm text-gray-600 dark:text-gray-400 font-semibold uppercase tracking-wider mb-2">
                            Curso:
                        </p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white">
                            SISTEMAS OPERATIVOS II
                        </p>
                    </div>

                    <!-- Catedrático -->
                    <div class="text-center pb-6 border-b border-gray-200 dark:border-gray-700">
                        <p class="text-sm text-gray-600 dark:text-gray-400 font-semibold uppercase tracking-wider mb-2">
                            Catedrático:
                        </p>
                        <p class="text-xl font-semibold text-gray-900 dark:text-white">
                            Erick Alvarez
                        </p>
                    </div>

                    <!-- Tarea -->
                    <div class="text-center pb-6 border-b border-gray-200 dark:border-gray-700">
                        <p class="text-sm text-gray-600 dark:text-gray-400 font-semibold uppercase tracking-wider mb-2">
                            Tarea:
                        </p>
                        <p class="text-2xl font-bold text-blue-600 dark:text-blue-400">
                            CLASES DE SERVIDORES
                        </p>
                    </div>

                </div>

                <!-- Espacio separador -->
                <div class="h-8"></div>

                <!-- Información del estudiante -->
                <div class="bg-blue-50 dark:bg-blue-900/20 rounded-lg p-8 space-y-6 border-l-4 border-blue-600">
                    
                    <!-- Alumno -->
                    <div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 font-semibold uppercase tracking-wider mb-2">
                            Alumno:
                        </p>
                        <p class="text-lg font-bold text-gray-900 dark:text-white">
                            CARLOS HUMBERTO MARTINEZ DE LEON
                        </p>
                    </div>

                    <!-- Carnet -->
                    <div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 font-semibold uppercase tracking-wider mb-2">
                            Carnet:
                        </p>
                        <p class="text-lg font-mono font-bold text-blue-600 dark:text-blue-400">
                            0909-14-11100
                        </p>
                    </div>

                    <!-- Fecha -->
                    <div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 font-semibold uppercase tracking-wider mb-2">
                            Fecha de Entrega:
                        </p>
                        <p class="text-lg font-semibold text-gray-900 dark:text-white">
                            {{ now()->format('d \\d\\e F \\d\\e Y') }}
                        </p>
                    </div>

                </div>

            </div>

            <!-- Pie de página con enlace -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 dark:from-blue-900 dark:to-blue-800 px-12 py-6 text-center">
                <p class="text-white text-sm font-semibold mb-3">
                    Información sobre Servidores Web
                </p>
                <div class="flex gap-4 justify-center">
                    <a href="{{ route('home') }}" class="bg-white text-blue-600 hover:bg-gray-100 px-6 py-2 rounded-lg font-semibold transition duration-200">
                        📚 Ver Contenido
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-lg font-semibold transition duration-200">
                            Cerrar Sesión
                        </button>
                    </form>
                </div>
            </div>

        </div>

        <!-- Nota informativa -->
        <div class="mt-8 text-center text-gray-600 dark:text-gray-400 text-sm">
            <p>Este proyecto académico contiene información detallada sobre clasificación,</p>
            <p>características y aplicaciones de diferentes tipos de servidores.</p>
        </div>

    </div>
</div>
@endsection
