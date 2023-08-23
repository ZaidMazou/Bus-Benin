<?php

use App\Http\Controllers\CompagnieController;
use App\Http\Controllers\ContactContoller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrajetController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trajet',[TrajetController::class,'trajets'])->name('trajet');

Route::get('/compagnie',[CompagnieController::class,'compagnies'])->name('compagnies');

Route::get('/compagnie/{id}',[CompagnieController::class,'compagnie'])->name('compagnie');

Route::get('/contact',[ContactContoller::class,'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile',[ProfileController::class,'complete'])->name('profile.complete');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
