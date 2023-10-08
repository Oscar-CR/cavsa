<?php

use App\Http\Controllers\CobreController;
use App\Http\Controllers\FibraController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
    Route::get('/fibra-edit/{id}', [FibraController::class, 'fibraEdit'])->name('home.fibra.edit');
    Route::post('/fibra-update', [FibraController::class, 'fibraUpdate'])->name('home.fibra.update');
    Route::delete('/fibra-delete', [FibraController::class, 'fibraDelete'])->name('home.fibra.delete');


    Route::get('/cobre', [CobreController::class, 'cobre'])->name('home.cobre');
    Route::get('/cobre-create', [CobreController::class, 'cobreCreate'])->name('home.cobre.create');
    Route::post('/cobre-store', [CobreController::class, 'cobreStore'])->name('home.cobre.store');
    Route::get('/cobre-edit/{id}', [CobreController::class, 'cobreEdit'])->name('home.cobre.edit');
    Route::post('/cobre-update', [CobreController::class, 'cobreUpdate'])->name('home.cobre.update');
    Route::delete('/cobre-delete', [CobreController::class, 'cobreDelete'])->name('home.cobre.delete');

    
    Route::get('/user', [UserController::class, 'user'])->name('admin.user');
    Route::get('/user-create', [UserController::class, 'userCreate'])->name('admin.user.create');
    Route::post('/user-store', [UserController::class, 'userStore'])->name('admin.user.store');
    Route::get('/user-edit/{id}', [UserController::class, 'userEdit'])->name('admin.user.edit');
    Route::post('/user-update', [UserController::class, 'userUpdate'])->name('admin.user.update');
    Route::delete('/user-delete', [UserController::class, 'userDelete'])->name('admin.user.delete');
    
});


