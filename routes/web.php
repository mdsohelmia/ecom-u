<?php

use App\Http\Controllers\Backend\Auth\AuthController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function () {
    //auth route
    Route::get('/', [AuthController::class, 'loginForm'])->name('admin.login');
    Route::post('/', [AuthController::class, 'loginProcess'])->name('admin.loginprocess');

    Route::group(['middleware'=>'auth'], function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('products', [DashboardController::class, 'showProduct']);
        //users route
        Route::resource('users', UserController::class);
        // Categories route
        Route::resource('categories', CategoryController::class);
    });
});

Route::get('down', function () {
    Artisan::call('down');

});

Route::get('up', function () {
    Artisan::call('up');
});
