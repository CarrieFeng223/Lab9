<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;

Route::get('/', function () {
    return view('welcome');
});

// Define resource route for InventoryController
Route::resource('inventory', InventoryController::class);

// Protect the inventory routes with auth middleware
Route::middleware(['auth'])->group(function () {
    Route::resource('inventory', InventoryController::class);
});
