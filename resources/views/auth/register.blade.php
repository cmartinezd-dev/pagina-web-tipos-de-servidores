@extends('layout')

@section('title', 'Registrarse')

@section('content')
<div class="max-w-md mx-auto mt-04 mb-04">
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

            <!-- Nombres -->
            <div class="mb-6">
                <label for="first_name" class="block text-gray-700 dark:text-gray-300 text-sm font-semibold mb-2 flex items-center">
                    Nombres
                    <span class="ml-2 inline-flex items-center justify-center w-5 h-5 bg-blue-500 text-white rounded-full text-xs cursor-help group relative" title="Solo letras y espacios. Obligatorio.">
                        ?
                        <span class="absolute bottom-full mb-2 hidden group-hover:block bg-gray-900 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50">
                            Solo letras y espacios. Obligatorio al menos un nombre.
                        </span>
                    </span>
                </label>
                <input type="text" name="first_name" id="first_name" 
                       pattern="[a-zA-Záéíóúñ\s]+"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg dark:bg-slate-700 dark:border-slate-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                       value="{{ old('first_name') }}" required autofocus
                       title="Solo se permiten letras y espacios">
                @error('first_name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Apellidos -->
            <div class="mb-6">
                <label for="last_name" class="block text-gray-700 dark:text-gray-300 text-sm font-semibold mb-2 flex items-center">
                    Apellidos
                    <span class="ml-2 inline-flex items-center justify-center w-5 h-5 bg-blue-500 text-white rounded-full text-xs cursor-help group relative" title="Solo letras y espacios. Obligatorio.">
                        ?
                        <span class="absolute bottom-full mb-2 hidden group-hover:block bg-gray-900 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50">
                            Solo letras y espacios. Obligatorio al menos un apellido.
                        </span>
                    </span>
                </label>
                <input type="text" name="last_name" id="last_name" 
                       pattern="[a-zA-Záéíóúñ\s]+"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg dark:bg-slate-700 dark:border-slate-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                       value="{{ old('last_name') }}" required
                       title="Solo se permiten letras y espacios">
                @error('last_name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-6">
                <label for="email" class="block text-gray-700 dark:text-gray-300 text-sm font-semibold mb-2 flex items-center">
                    Correo Electrónico
                    <span class="ml-2 inline-flex items-center justify-center w-5 h-5 bg-blue-500 text-white rounded-full text-xs cursor-help group relative" title="Correo válido. Ejemplo: carlos@gmail.com">
                        ?
                        <span class="absolute bottom-full mb-2 hidden group-hover:block bg-gray-900 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50">
                            Correo válido. Ejemplo: juanito@gmail.com
                        </span>
                    </span>
                </label>
                <input type="email" name="email" id="email" 
                       pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg dark:bg-slate-700 dark:border-slate-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                       value="{{ old('email') }}" required
                       title="Formato válido: usuario@dominio.com">
                @error('email')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Contraseña -->
            <div class="mb-6">
                <label for="password" class="block text-gray-700 dark:text-gray-300 text-sm font-semibold mb-2 flex items-center">
                    Contraseña
                    <span class="ml-2 inline-flex items-center justify-center w-5 h-5 bg-blue-500 text-white rounded-full text-xs cursor-help group relative" title="Requisitos de contraseña">
                        ?
                        <span class="absolute bottom-full mb-2 hidden group-hover:block bg-gray-900 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50">
                            Mín. 6 caracteres, 1 mayúscula, 1 número y 1 símbolo (!@#$%^&*)
                        </span>
                    </span>
                </label>
                <div class="relative">
                    <input type="password" name="password" id="password" 
                           pattern="^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{6,}$"
                           class="w-full px-4 py-2 pr-12 border border-gray-300 rounded-lg dark:bg-slate-700 dark:border-slate-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                           title="Mínimo 6 caracteres, una mayúscula, un número y un símbolo (!@#$%^&*)"
                           required>
                    <button type="button" class="absolute right-3 top-2.5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 transition" 
                            onclick="togglePasswordVisibility('password', this)">
                        <svg id="password-eye" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </button>
                </div>
                @error('password')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirmar Contraseña -->
            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700 dark:text-gray-300 text-sm font-semibold mb-2 flex items-center">
                    Confirmar Contraseña
                    <span class="ml-2 inline-flex items-center justify-center w-5 h-5 bg-blue-500 text-white rounded-full text-xs cursor-help group relative" title="Debe coincidir con la contraseña">
                        ?
                        <span class="absolute bottom-full mb-2 hidden group-hover:block bg-gray-900 text-white text-xs rounded py-1 px-2 whitespace-nowrap z-50">
                            Debe ser idéntica a la contraseña anterior. Mín. 6 caracteres, 1 mayúscula, 1 número Y 1 símbolo.
                        </span>
                    </span>
                </label>
                <div class="relative">
                    <input type="password" name="password_confirmation" id="password_confirmation" 
                           pattern="^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{6,}$"
                           class="w-full px-4 py-2 pr-12 border border-gray-300 rounded-lg dark:bg-slate-700 dark:border-slate-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                           title="Debe coincidir con la contraseña anterior y cumplir con los requisitos de seguridad"
                           required>
                    <button type="button" class="absolute right-3 top-2.5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 transition" 
                            onclick="togglePasswordVisibility('password_confirmation', this)">
                        <svg id="password_confirmation-eye" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </button>
                </div>
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

<script>
    function togglePasswordVisibility(fieldId, button) {
        const input = document.getElementById(fieldId);
        const svg = button.querySelector(`#${fieldId}-eye`);
        
        if (input.type === 'password') {
            input.type = 'text';
            // Cambiar icono a ojo tachado
            svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-4.803m5.596-3.856a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 9.172m5.656 5.656l-1.414-1.414m0 5.656l1.414-1.414m-5.656-1.414l-1.414 1.414m5.656 0l1.414 1.414M3 3l18 18"></path>';
        } else {
            input.type = 'password';
            // Cambiar icono a ojo normal
            svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>';
        }
    }
</script>

@endsection
