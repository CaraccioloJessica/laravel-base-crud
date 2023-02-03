<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])->name('home');

Route::get('/saint/{id}', [MainController::class, 'show']);

Route::get('/saint/{id}/destroy', [MainController::class, 'destroy'])->name('saint.destroy');