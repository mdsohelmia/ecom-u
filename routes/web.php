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
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users', [UserController::class, 'store'])->name('users.store');

});




