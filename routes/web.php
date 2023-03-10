<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\VilleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiants.index');
Route::get('/home', [EtudiantController::class, 'home'])->name('etudiants.home');
Route::get('/etudiants/create', [EtudiantController::class, 'create'])->name('etudiants.create');
Route::post('/etudiants', [EtudiantController::class, 'store'])->name('etudiants.store');
Route::get('/etudiants/{id}', [EtudiantController::class, 'show'])->name('etudiants.show');
Route::get('/etudiants/{id}/edit', [EtudiantController::class, 'edit'])->name('etudiants.edit');
Route::put('/etudiants/{id}', [EtudiantController::class, 'update'])->name('etudiants.update');
Route::delete('/etudiants/{id}', [EtudiantController::class, 'destroy'])->name('etudiants.destroy');

Route::get('/villes', [VilleController::class, 'index'])->name('villes.index');
Route::get('/villes/create', [VilleController::class, 'create'])->name('villes.create');
Route::post('/villes', [VilleController::class, 'store'])->name('villes.store');
Route::get('/villes/{id}', [VilleController::class, 'show'])->name('villes.show');
Route::get('/villes/{id}/edit', [VilleController::class, 'edit'])->name('villes.edit');
Route::put('/villes/{id}', [VilleController::class, 'update'])->name('villes.update');
Route::delete('/villes/{id}', [VilleController::class, 'destroy'])->name('villes.destroy');