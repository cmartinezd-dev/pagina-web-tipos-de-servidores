@extends('layout')

@section('title', 'Registrarse')

@section('content')
<div class="max-w-md mx-auto mt-12 mb-12">
    <div class="bg-white dark:bg-slate-800 rounded-lg shadow-md p-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Registrarse</h1>
            <p class="text-gray-600 dark:text-gray-400">Crea una nueva cuenta</p>
        </div>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <strong>¡Error!</strong>
                <ul class="mt-2 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register.post') }}">
            @csrf

            <!-- Nombre -->
            <div class="mb-6">
                <label for="name" class="block text-gray-700 dark:text-gray-300 text-sm font-semibold mb-2">
                    Nombre Completo
                </label>
                <input type="text" name="name" id="name" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg dark:bg-slate-700 dark:border-slate-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                       value="{{ old('name') }}" required autofocus>
                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-6">
                <label for="email" class="block text-gray-700 dark:text-gray-300 text-sm font-semibold mb-2">
                    Correo Electrónico
                </label>
                <input type="email" name="email" id="email" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg dark:bg-slate-700 dark:border-slate-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                       value="{{ old('email') }}" required>
                @error('email')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Contraseña -->
            <div class="mb-6">
                <label for="password" class="block text-gray-700 dark:text-gray-300 text-sm font-semibold mb-2">
                    Contraseña
                </label>
                <input type="password" name="password" id="password" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg dark:bg-slate-700 dark:border-slate-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>
                @error('password')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirmar Contraseña -->
            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700 dark:text-gray-300 text-sm font-semibold mb-2">
                    Confirmar Contraseña
                </label>
                <input type="password" name="password_confirmation" id="password_confirmation" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg dark:bg-slate-700 dark:border-slate-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>
                @error('password_confirmation')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Botón de registro -->
            <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 rounded-lg transition mb-4">
                Crear Cuenta
            </button>

            <!-- Botón de login -->
            <a href="{{ route('login') }}" class="w-full block text-center bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 rounded-lg transition">
                Iniciar Sesión
            </a>
        </form>

        <!-- Enlace a inicio -->
        <div class="text-center mt-6">
            <a href="{{ route('home') }}" class="text-blue-600 hover:text-blue-800 text-sm">
                ← Volver al inicio
            </a>
        </div>
    </div>
</div>
@endsection
