<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect()->route('inventories.index');
});

Route::resource('inventories', InventoryController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');