<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\WeaponController;
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

Route::view('/', 'home')->name('home');

// Weapons
Route::get('/weapon', [WeaponController::class, 'weapon'])->name('weapon');
Route::get('/weapon/{weapon}', [WeaponController::class, 'show'])->name('guests.show_weapon');

// Characters
Route::get('/character', [CharacterController::class, 'characters'])->name('characters');
Route::get('/character/{character}', [CharacterController::class, 'show'])->name('guests.show_character');

// Laravel Breeze Auth
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
