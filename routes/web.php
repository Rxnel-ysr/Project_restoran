<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KokiController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelayanController;

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
    return redirect()->route('main.index');
});


Route::get('main', [MainController::class, 'index'])->name('main.index');

Route::prefix('main')->group(function () {

    Route::get('kokis', [KokiController::class, 'index'])->name('main.kokis.index');
    Route::get('kokis/create', [KokiController::class, 'create'])->name('main.kokis.create');
    Route::post('kokis', [KokiController::class, 'store'])->name('main.kokis.store');
    Route::get('kokis/edit/{id}', [KokiController::class, 'edit'])->name('main.kokis.edit');
    Route::put('kokis/{id}', [KokiController::class, 'update'])->name('main.kokis.update');
    Route::delete('kokis/{id}', [KokiController::class, 'destroy'])->name('main.kokis.destroy');

    Route::get('pelayans', [PelayanController::class, 'index'])->name('main.pelayans.index');
    Route::get('pelayans/create', [PelayanController::class, 'create'])->name('main.pelayans.create');
    Route::post('pelayans', [PelayanController::class, 'store'])->name('main.pelayans.store');
    Route::get('pelayans/edit/{id}', [PelayanController::class, 'edit'])->name('main.pelayans.edit');
    Route::put('pelayans/{id}', [PelayanController::class, 'update'])->name('main.pelayans.update');
    Route::delete('pelayans/{id}', [PelayanController::class, 'destroy'])->name('main.pelayans.destroy');

    Route::prefix('menus')->group(function () {
        Route::get('', [MenuController::class, 'index'])->name('main.menu.index');

        Route::get('makanan', [MenuController::class, 'indexOfMakanan'])->name('main.menus.makanan.index');
        Route::get('makanan/create', [MenuController::class, 'createOfMakanan'])->name('main.menus.makanan.create');
        Route::post('makanan', [MenuController::class, 'storeOfMakanan'])->name('main.menus.makanan.store');
        Route::get('makanan/edit/{id}', [MenuController::class, 'editOfMakanan'])->name('main.menus.makanan.edit');
        Route::put('makanan/{id}', [MenuController::class, 'updateOfMakanan'])->name('main.menus.makanan.update');
        Route::delete('makanan/{id}', [MenuController::class, 'destroyOfMakanan'])->name('main.menus.makanan.destroy');

        Route::get('minuman', [MenuController::class, 'indexOfMinuman'])->name('main.menus.minuman.index');
        Route::get('minuman/create', [MenuController::class, 'createOfMinuman'])->name('main.menus.minuman.create');
        Route::post('minuman', [MenuController::class, 'storeOfMinuman'])->name('main.menus.minuman.store');
        Route::get('minuman/edit/{id}', [MenuController::class, 'editOfMinuman'])->name('main.menus.minuman.edit');
        Route::put('minuman/{id}', [MenuController::class, 'updateOfMinuman'])->name('main.menus.minuman.update');
        Route::delete('minuman/{id}', [MenuController::class, 'destroyOfMinuman'])->name('main.menus.minuman.destroy');
        

        Route::get('snack', [MenuController::class, 'indexOfSnack'])->name('main.menus.snack.index');
        Route::get('snack/create', [MenuController::class, 'createOfSnack'])->name('main.menus.snack.create');
        Route::post('snack', [MenuController::class, 'storeOfSnack'])->name('main.menus.snack.store');
        Route::get('snack/edit/{id}', [MenuController::class, 'editOfSnack'])->name('main.menus.snack.edit');
        Route::put('snack/{id}', [MenuController::class, 'updateOfSnack'])->name('main.menus.snack.update');
        Route::delete('snack/{id}', [MenuController::class, 'destroyOfSnack'])->name('main.menus.snack.destroy');
        
    });
});
