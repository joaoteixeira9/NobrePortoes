<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortaoController;


Route::get('/', [PortaoController::class, 'home']);
Route::get('/visualizar-portao/{id}', [PortaoController::class, 'show']);
Route::get('/procurar-portoes', [PortaoController::class, 'search']);
Route::middleware(['auth'])->group(function () {
    Route::get('/cadastrar-portao', [PortaoController::class, 'create']);
    Route::post('/portoes', [PortaoController::class, 'store']);
    Route::get('/dashboard', [PortaoController::class, 'index']);
    Route::delete('/deletar-portao/{id}', [PortaoController::class, 'delete']);
    Route::get('/modificar-portao/{id}', [PortaoController::class, 'edit']);
    Route::delete('/deletar-fotos', [PortaoController::class, 'deleteImg']);
    Route::post('/adicionar-fotos', [PortaoController::class, 'addFotos']);
    Route::put('/portoes/{id}', [PortaoController::class, 'update']);
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin', function () {
        return view('dashboard');
    })->name('admin');
});