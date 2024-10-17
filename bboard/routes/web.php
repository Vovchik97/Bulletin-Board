<?php

use App\Http\Controllers\BbsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Главная страница
Route::get('/', [BbsController::class, 'index'])->name('index');

// Аутентификация
Auth::routes();

Route::prefix('home')->name('home.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/add', [HomeController::class, 'showAddBbForm'])->name('bb.add');
    Route::post('/', [HomeController::class, 'storeBb'])->name('bb.store');

    Route::middleware('can:update,bb')->group(function () {
        Route::get('/{bb}/edit', [HomeController::class, 'showEditBbForm'])->name('bb.edit');
        Route::patch('/{bb}', [HomeController::class, 'updateBb'])->name('bb.update');
    });

    Route::middleware('can:destroy,bb')->group(function () {
        Route::get('/{bb}/delete', [HomeController::class, 'showDeleteBbForm'])->name('bb.delete');
        Route::delete('/{bb}', [HomeController::class, 'destroyBb'])->name('bb.destroy');
    });
});

// Детальная страница
Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');

