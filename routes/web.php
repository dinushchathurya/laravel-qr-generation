<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QRController;

Route::get('/', [QRController::class, 'index'])->name('welcome');
Route::get('/create', [QRController::class, 'create'])->name('create');
