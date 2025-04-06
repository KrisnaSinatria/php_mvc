<?php

use Framework\Router;
use App\Controllers\HomeController;

    Router::get('home/index', [HomeController::class, 'index'])->name('home.index');
    Router::get('home/index/create', [HomeController::class, 'create'])->name('home.create');
    Router::get('home/index/{index}', [HomeController::class, 'show'])->name('home.show');
    Router::get('home/index/{index}/edit', [HomeController::class, 'edit'])->name('home.edit');
    Router::post('home/index', [HomeController::class, 'store'])->name('home.store');
    Router::match(['put', 'post'], 'home/index/{index}', [HomeController::class, 'update'])->name('home.update');
    Router::delete('home/index/{index}', [HomeController::class, 'destroy'])->name('home.destroy');
