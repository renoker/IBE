<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\TurnkeyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros.index');
Route::get('/turnkey', [TurnkeyController::class, 'index'])->name('turnkey.index');
