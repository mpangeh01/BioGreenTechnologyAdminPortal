<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {


    //FARM MANAGEMENT SUBSYSTEM
    Route::get('/farms', [App\Http\Controllers\FarmController::class, 'index'])->name('farms');
    Route::post('/update-farm/{id}', [App\Http\Controllers\FarmController::class, 'update'])->name('update.farm');
    Route::get('/farm-details/{id}', [App\Http\Controllers\FarmController::class, 'read'])->name('farm.details');

});
