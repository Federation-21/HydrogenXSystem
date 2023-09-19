<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HawkController;


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
    return redirect()->route('login');
});

Route::middleware(['auth', 'verified'])->prefix('hawk')->group(function () {
    Route::get('home', [HawkController::class, 'index'])->name('hawk.home');
});
