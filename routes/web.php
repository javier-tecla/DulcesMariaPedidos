<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [PedidoController::class, 'index'])->middleware(['auth', 'verified'])->name('pedidos.index');
Route::get('/pedidos/create', [PedidoController::class, 'create'])->middleware(['auth', 'verified'])->name('pedidos.create');
Route::get('/pedidos/{pedido}/edit', [PedidoController::class, 'edit'])->middleware(['auth', 'verified'])->name('pedidos.edit');
Route::get('/pedidos/{pedido}', [PedidoController::class, 'show'])->name('pedidos.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
