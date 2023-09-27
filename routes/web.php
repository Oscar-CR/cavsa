<?php

use App\Http\Controllers\CobreController;
use App\Http\Controllers\FibraController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProfileController;
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

/* Route::get('/', function () {
    return view('auth/login');
}); */

Route::get('/', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/home', [HomeController::class, 'index'])->name('home.index');

    Route::get('/fibra', [FibraController::class, 'fibra'])->name('home.fibra');
    Route::get('/fibra-create', [FibraController::class, 'fibraCreate'])->name('home.fibra.create');
    Route::post('/fibra-store', [FibraController::class, 'fibraStore'])->name('home.fibra.store');
    Route::post('/fibra-edit', [FibraController::class, 'fibraEdit'])->name('home.fibra.edit');
    Route::delete('/fibra-delete', [FibraController::class, 'fibraDelete'])->name('home.fibra.delete');


    Route::get('/cobre', [CobreController::class, 'cobre'])->name('home.cobre');
    Route::get('/cobre-create', [CobreController::class, 'cobreCreate'])->name('home.cobre.create');
    Route::post('/cobre-store', [CobreController::class, 'cobreStore'])->name('home.cobre.store');
    Route::post('/cobre-edit', [CobreController::class, 'cobreEdit'])->name('home.cobre.edit');
    Route::delete('/cobre-delete', [CobreController::class, 'cobreDelete'])->name('home.cobre.delete');


    

});

require __DIR__.'/auth.php';
