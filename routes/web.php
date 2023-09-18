<?php

use App\Http\Controllers\Users\LoginController;
use App\Http\Controllers\Users\SignUpController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('register', [SignUpController::class, 'index'])->name('register');
Route::post('register', [SignUpController::class, 'store']);

Route::get('login', [LoginController::class, 'index'])->name('default');
Route::post('login', [LoginController::class, 'store']);
