<?php

use App\Http\Controllers\Admin\DanhmucController;
use App\Http\Controllers\Admin\SanphamController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Users\LoginController;
use App\Http\Controllers\Users\SignUpController;
use App\Http\Controllers\Users\LogoutController;
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

Route::get('register', [SignUpController::class, 'index'])->name('register');
Route::post('register', [SignUpController::class, 'store']);

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store']);

Route::middleware(['auth'])->group(function() {
    Route::prefix('admin')->group(function() {
        Route::prefix('danhmuc')->group(function() {
            Route::get('add', [DanhmucController::class, 'create'])->name('default');
            Route::post('add', [DanhmucController::class, 'store']);
            Route::get('list', [DanhmucController::class, 'index']);
            Route::get('edit/{id}', [DanhmucController::class, 'show']);
            Route::post('edit/{id}', [DanhmucController::class, 'update']);
            Route::DELETE('destroy', [DanhmucController::class, 'destroy']);
            Route::get('logout', [LogoutController::class, 'logout'])->name('logout');
        });
        
        Route::prefix('sanpham')->group(function() {
            Route::get('add', [SanphamController::class, 'create']);
            Route::post('add', [SanphamController::class, 'store']);
            Route::get('list', [SanphamController::class, 'index']);
            Route::get('edit/{id}', [SanphamController::class, 'show']);
            Route::post('edit/{id}', [SanphamController::class, 'update']);
            Route::DELETE('destroy', [SanphamController::class, 'destroy']);
            Route::get('logout', [LogoutController::class, 'logout'])->name('logout');
        });

        Route::POST('upload/services', [UploadController::class, 'store']);
    });
});