<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

    Route::get('home/index', [HomeController::class, 'index'])->name('home.index');
    Route::get('home/index/create', [HomeController::class, 'create'])->name('home.create');
    Route::get('home/index/{index}', [HomeController::class, 'show'])->name('home.show');
    Route::get('home/index/{index}/edit', [HomeController::class, 'edit'])->name('home.edit');
    Route::post('home/index', [HomeController::class, 'store'])->name('home.store');
    Route::match(['put', 'post'], 'home/index/{index}', [HomeController::class, 'update'])->name('home.update');
    Route::delete('home/index/{index}', [HomeController::class, 'destroy'])->name('home.destroy');
