<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\WeaponController;
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

Route::get('/weapon', [WeaponController::class, 'index'])->name('home');
Route::get('/character',[CharacterController::class, 'index'])->name('characters');