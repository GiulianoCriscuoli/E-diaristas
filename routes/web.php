<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaristController;

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

Route::get('/', [DiaristController::class, 'index'])->name('diarists.index');
Route::get('/diaristas/criar', [DiaristController::class, 'create'])->name('diarists.create');
Route::post('/diaristas/criar', [DiaristController::class, 'store'])->name('diarists.store');
Route::get('/diaristas/{id}/editar', [DiaristController::class, 'edit'])->name('diarists.edit');
Route::put('/diaristas/{id}/editar', [DiaristController::class, 'update'])->name('diarists.update');
Route::get('/diaristas{id}/deletar', [DiaristController::class, 'destroy'])->name('diarists.destroy');
