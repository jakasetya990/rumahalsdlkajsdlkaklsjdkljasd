<?php

use App\Http\Controllers\ApkController;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\DashController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthUserController::class, 'showLogin'])->name('auth.login.show');
    Route::post('/login', [AuthUserController::class, 'doLogin'])->name('auth.login.do');
    Route::any('/logout', [AuthUserController::class, 'logout'])->name('auth.destroy');
});


Route::middleware([AdminMiddleware::class])->group(function () {
    Route::prefix('/dash')->group(function () {
        route::get('/', [DashController::class, 'index'])->name('dash.index');

        Route::prefix('apk')->group(function () {
            Route::get('add', [ApkController::class, 'add'])->name('apk.add');
            Route::get('edit/{id}', [ApkController::class, 'edit'])->name('apk.edit');
            Route::post('edit/{id}', [ApkController::class, 'doEdit'])->name('apk.edit.do');
            Route::post('add', [ApkController::class, 'doAdd'])->name('apk.add.do');
        });
    });
});
