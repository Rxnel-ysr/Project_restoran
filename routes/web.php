<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KokiController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesananController;
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
    return view('welcome');
});

Route::get('main', [MainController::class, 'index'])->name('main.index');

Route::prefix('main')->group(function () {

    Route::get('kokis', [KokiController::class, 'index'])->name('main.kokis.index');
    Route::get('kokis/create', [KokiController::class, 'create'])->name('main.kokis.create');
    Route::post('kokis', [KokiController::class, 'store'])->name('main.kokis.store');
    Route::get('kokis/edit/{id}', [KokiController::class, 'edit'])->name('main.kokis.edit');
    Route::put('kokis/{id}', [KokiController::class, 'update'])->name('main.kokis.update');
    Route::delete('kokis/{id}', [KokiController::class, 'destroy'])->name('main.kokis.destroy');


    Route::get('pesanans', [PesananController::class, 'index'])->name('pesanans.index');
    Route::get('pesanans/create', [PesananController::class, 'create'])->name('main.pesanans.create');
    Route::post('pesanans', [PesananController::class, 'store'])->name('main.pesanans.store');
    Route::get('pesanans/edit/{id}', [PesananController::class, 'edit'])->name('main.pesanans.edit');
    Route::put('pesanans/{id}', [PesananController::class, 'update'])->name('main.pesanans.update');
    Route::delete('pesanans/{id}', [PesananController::class, 'destroy'])->name('main.esanans.destroy');


    Route::get('pelayans', [PelayanController::class, 'index'])->name('main.pelayans.index');
    Route::get('pelayans/create', [PelayanController::class, 'create'])->name('main.pelayans.create');
    Route::post('pelayans', [PelayanController::class, 'store'])->name('main.pelayans.store');
    Route::get('pelayans/edit/{id}', [PelayanController::class, 'edit'])->name('main.pelayans.edit');
    Route::put('pelayans/{id}', [PelayanController::class, 'update'])->name('main.pelayans.update');
    Route::delete('pelayans/{id}', [PelayanController::class, 'destroy'])->name('main.pelayans.destroy');

    Route::prefix('menus')->group(function () {
        Route::get('', [MenuController::class, 'index'])->name('main.menus.index');

        Route::get('makanans', [MenuController::class, 'indexOfMakanan'])->name('main.menus.makanan.index');
        Route::get('makanans/create', [MenuController::class, 'createOfMakanan'])->name('main.menus.makanan.create');
        Route::post('makanans', [MenuController::class, 'storeOfMakanan'])->name('main.menus.makanan.store');
        Route::get('makanans/edit/{id}', [MenuController::class, 'editOfMakanan'])->name('main.menus.makanan.edit');
        Route::put('makanans/{id}', [MenuController::class, 'updateOfMakanan'])->name('main.menus.makanan.update');
        Route::delete('makanans/{id}', [MenuController::class, 'destroyOfMakanan'])->name('main.menus.makanan.destroy');

        // Route::get('minumans', [MenuController::class, 'indexOfMinuman'])->name('main.menus.minuman.index');
        // Route::get('minumans/create', [MenuController::class, 'createOfMinuman'])->name('main.menus.minuman.create');
        // Route::post('minumans', [MenuController::class, 'storeOfMinuman'])->name('main.menus.minuman.store');
        // Route::get('minumans/edit/{id}', [MenuController::class, 'editOfMinuman'])->name('main.menus.minuman.edit');
        // Route::put('minumans/{id}', [MenuController::class, 'updateOfMinuman'])->name('main.menus.minuman.update');
        // Route::delete('minumans/{id}', [MenuController::class, 'destroyOfMinuman'])->name('main.menus.minuman.destroy');
        

        // Route::get('snack', [MenuController::class, 'indexOfSnack'])->name('main.menus.snack.index');
        // Route::get('snack/create', [MenuController::class, 'createOfSnack'])->name('main.menus.snack.create');
        // Route::post('minuman', [MenuController::class, 'storeOfMakanan'])->name('main.menus.makanan.store');
        // Route::get('minuman/edit/{id}', [MenuController::class, 'editOfMakanan'])->name('main.menus.makanan.edit');
        // Route::put('minuman/{id}', [MenuController::class, 'updateOfMakanan'])->name('main.menus.makanan.update');
        // Route::delete('minuman/{id}', [MenuController::class, 'destroyOfMakanan'])->name('main.menus.makanan.destroy');
        
    });
});
