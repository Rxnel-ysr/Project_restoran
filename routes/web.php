<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KokiController;

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


Route::get('Kokis', [KokiController::class, 'index'])->name('Kokis.index');
Route::get('Kokis/create', [KokiController::class, 'create'])->name('Kokis.create');
Route::post('Kokis', [KokiController::class, 'store'])->name('Kokis.store');
Route::get('Kokis/edit/{id}', [KokiController::class, 'edit'])->name('Kokis.edit');
 Route::put('Kokis/{id}', [KokiController::class, 'update'])->name('Kokis.update');
 Route::delete('Kokis/{id}', [KokiController::class, 'destroy'])->name('Kokis.destroy');