<?php

use App\Http\Controllers\Backend\Auth\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function () {
    //auth route
    Route::get('/', [AuthController::class, 'loginForm'])->name('admin.login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::post('/', [AuthController::class, 'loginProcess'])->name('admin.loginprocess');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('products', [DashboardController::class, 'showProduct']);
   //users route
//    Route::group(['prefix' => 'users', 'as' => 'users.'], static function () {
//        Route::get('/', [UserController::class, 'index'])->name('index');
//        Route::get('create', [UserController::class, 'create'])->name('create');
//        Route::post('/', [UserController::class, 'store'])->name('store');
//        Route::get('users/{id}', [UserController::class, 'destroy'])->name('destroy');
//    });

    Route::resource('users',UserController::class);

});




