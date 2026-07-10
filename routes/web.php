<?php

use App\Http\Controllers\MeridianController;
use Illuminate\Support\Facades\Route;

// Guest Routes (Fortify handles login, register, and forgot-password endpoints automatically)

Route::get('/', [MeridianController::class, 'landing'])->name('landing');

// Authenticated Routes (Protected by auth middleware)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [MeridianController::class, 'index'])->name('dashboard');
    Route::get('/blank', [MeridianController::class, 'blank'])->name('blank');
    Route::get('/customers', [MeridianController::class, 'customers'])->name('customers.index');
    Route::get('/orders', [MeridianController::class, 'orders'])->name('orders.index');
    Route::get('/orders/create', [MeridianController::class, 'orderNew'])->name('orders.create');
    Route::get('/orders/{id}', [MeridianController::class, 'orderDetail'])->name('orders.show');
    Route::get('/products', [MeridianController::class, 'products'])->name('products.index');
    Route::get('/products/create', [MeridianController::class, 'productNew'])->name('products.create');
    Route::get('/profile', [MeridianController::class, 'profile'])->name('profile');
    Route::get('/reports', [MeridianController::class, 'reports'])->name('reports');
    Route::get('/settings', [MeridianController::class, 'settings'])->name('settings');
    Route::get('/users', [MeridianController::class, 'users'])->name('users.index');
});

// Error Page Testing Routes
Route::get('/403', function () {
    return response()->view('errors.403', [], 403);
});
Route::get('/404', function () {
    return response()->view('errors.404', [], 404);
});
Route::get('/500', function () {
    return response()->view('errors.500', [], 500);
});
