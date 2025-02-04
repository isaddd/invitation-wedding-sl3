<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\UcapanController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [UcapanController::class, 'index'])->name('ucapan.index');
Route::post('/ucapan', [UcapanController::class, 'store'])->name('ucapan.store');
