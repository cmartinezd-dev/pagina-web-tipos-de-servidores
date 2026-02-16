<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ], [
            'email.required' => 'El correo es obligatorio',
            'email.email' => 'ingrese un correo válido',
            'password.required' => 'La contraseña es obligatoria',
            'password.min' => 'La contraseña debe tener al menos 6 caracteres'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('success', '¡Bienvenido!');
        }

        return back()
            ->withInput($request->only('email'))
            ->with('error', 'Las credenciales no coinciden con nuestros registros');
    }

    public function showRegister()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|regex:/^[a-záéíóúñ\s]+$/i|max:100',
            'last_name' => 'required|string|regex:/^[a-záéíóúñ\s]+$/i|max:100',
            'email' => 'required|email|regex:/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/|unique:users',
            'password' => 'required|min:6|regex:/^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{6,}$/|confirmed'
        ], [
            'first_name.required' => 'El nombre es obligatorio',
            'first_name.regex' => 'El nombre solo puede contener letras y espacios',
            'first_name.max' => 'El nombre no puede exceder 100 caracteres',
            'last_name.required' => 'El apellido es obligatorio',
            'last_name.regex' => 'El apellido solo puede contener letras y espacios',
            'last_name.max' => 'El apellido no puede exceder 100 caracteres',
            'email.required' => 'El correo es obligatorio',
            'email.email' => 'Ingrese un correo válido',
            'email.regex' => 'El formato del correo no es válido. Ejemplo: carlos@gmail.com',
            'email.unique' => 'Este correo ya está registrado',
            'password.required' => 'La contraseña es obligatoria',
            'password.min' => 'La contraseña debe tener al menos 6 caracteres',
            'password.regex' => 'La contraseña debe contener al menos una mayúscula, un número y un símbolo (!@#$%^&*)',
            'password.confirmed' => 'Las contraseñas no coinciden'
        ]);

        $user = User::create([
            'name' => trim($validated['first_name'] . ' ' . $validated['last_name']),
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        Auth::login($user);

        return redirect()->route('dashboard')->with('success', '¡Registro exitoso! Bienvenido a ' . config('app.name'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home')->with('success', 'Ha cerrado sesión correctamente');
    }
}
