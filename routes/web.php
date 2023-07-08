<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Frontend\LandingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingController::class, 'index'])->name('index');

Route::middleware(['auth:sanctum', 'verified'])
    ->name('dashboard.')
    ->prefix('dashboard')
    ->group(function () {
        // dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('index');

        Route::middleware(['admin'])->group(function () {
            Route::resource('category', CategoryController::class);
            // Route::resource('product.gallery', ProductGalleryController::class)->shallow();
            // Route::resource('transaction', TransactionController::class);
            // Route::resource('transaction', TransactionController::class);
            // Route::resource('user', UserController::class);
        });
    });
