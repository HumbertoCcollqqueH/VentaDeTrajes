<?php

use App\Livewire\ClienteMain;
use App\Livewire\ProveedorMain;
use App\Livewire\TrajeMain;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/clientes',ClienteMain::class)->name('clientes');
    Route::get('/proveedores',ProveedorMain::class)->name('proveedores');
    Route::get('/trajes',TrajeMain::class)->name('trajes');
});
