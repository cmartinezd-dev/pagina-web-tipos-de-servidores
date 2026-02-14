@extends('layout')

@section('title', 'Iniciar Sesión')

@section('content')
<div class="max-w-md mx-auto mt-12 mb-12">
    <div class="bg-white dark:bg-slate-800 rounded-lg shadow-md p-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Iniciar Sesión</h1>
            <p class="text-gray-600 dark:text-gray-400">Accede a tu cuenta</p>
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

        <form method="POST" action="{{ route('login.post') }}">
            @csrf

            <!-- Email -->
            <div class="mb-6">
                <label for="email" class="block text-gray-700 dark:text-gray-300 text-sm font-semibold mb-2">
                    Correo Electrónico
                </label>
                <input type="email" name="email" id="email" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg dark:bg-slate-700 dark:border-slate-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                       value="{{ old('email') }}" required autofocus>
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

            <!-- Botón de login -->
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded-lg transition mb-4">
                Iniciar Sesión
            </button>

            <!-- Botón de registro -->
            <a href="{{ route('register') }}" class="w-full block text-center bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 rounded-lg transition">
                Registrarse
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
