<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServidorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Rutas públicas
Route::get('/', [ServidorController::class, 'homepage'])->name('home');
Route::get('/servidor/{slug}', [ServidorController::class, 'show'])->name('servidor.show');

// Rutas de autenticación
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Rutas protegidas (requieren autenticación)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
