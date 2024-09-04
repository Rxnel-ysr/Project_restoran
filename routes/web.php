<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KokiController;
use App\Http\Controllers\MainController;

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


Route::get('main/kokis', [KokiController::class, 'index'])->name('main.kokis.index');
Route::get('main/kokis/create', [KokiController::class, 'create'])->name('main.kokis.create');
Route::post('main/kokis', [KokiController::class, 'store'])->name('main.kokis.store');
Route::get('main/kokis/edit/{id}', [KokiController::class, 'edit'])->name('main.kokis.edit');
Route::put('main/kokis/{id}', [KokiController::class, 'update'])->name('main.kokis.update');
Route::delete('main/kokis/{id}', [KokiController::class, 'destroy'])->name('main.kokis.destroy');
