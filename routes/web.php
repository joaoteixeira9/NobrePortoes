<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortaoController;

Route::get('/', function () {return view('home');});
Route::get('/cadastrar-portao', [PortaoController::class, 'create']);
Route::post('/portoes', [PortaoController::class, 'store']);
Route::get('/dashboard', [PortaoController::class, 'index']);
Route::get('/visualizar-portao/{id}', [PortaoController::class, 'show']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin', function () {
        return view('dashboard');
    })->name('admin');
});