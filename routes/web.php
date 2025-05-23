<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CalendarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\BrandBookController;

// ...existing routes...

// Brand routes




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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    // Main dashboard routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::get('/brands', [BrandController::class, 'index'])->name('brand.index');
    Route::get('/brands/create', [BrandController::class, 'create'])->name('brand.create');
    Route::post('/brands', [BrandController::class, 'store'])->name('brand.store');

    Route::get('/brand-book', [BrandController::class, 'index'])->name('brand-book.index');
    Route::get('/brand-book/create', [BrandController::class, 'create'])->name('brabrand-book.create');
    Route::post('/brand-book', [BrandController::class, 'store'])->name('brand-book.store');

    // Clients route
    Route::get('/clients', function () {
        return view('clients.index');
    })->name('clients');

    Route::get('/profile', function () {
        return view('brand-profile.create');
    })->name('profile');

   Route::middleware(['auth'])->group(function () {
    Route::resource('brand', \App\Http\Controllers\BrandController::class);
    // If you have a BrandBookController:
    Route::resource('brand-book', \App\Http\Controllers\BrandBookController::class);
});

});

require __DIR__ . '/auth.php';

// Designer route
Route::get('/designer', function () {
    return view('designer.index');
})->name('designer.index');

// SMM (Social Media Manager) route
Route::get('/smm', function () {
    return view('smm.index');
})->name('smm.index');

// Sales routes
Route::prefix('sales')->group(function () {
    Route::get('/', function () {
        return view('sales.index');
    })->name('sales.index');

    Route::get('/leads', function () {
        return view('sales.leads');
    })->name('sales.leads');

    Route::get('/prospects', function () {
        return view('sales.prospects');
    })->name('sales.prospects');

    Route::get('/emails', function () {
        return view('sales.emails');
    })->name('sales.emails');
});
