<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// index
Route::get('/', [MainController::class, 'home'])->name('home');

// show
Route::get('/saint/show/{id}', [MainController::class, 'show'])->name('saint.show');

// destroy
Route::get('/saint/destroy/{id}', [MainController::class, 'destroy'])->name('saint.destroy');

// create
Route::get('/saint/create', [MainController::class, 'create'])->name('saint.create');

// post
Route::post('/saint/store', [MainController::class, 'store'])->name('saint.store');