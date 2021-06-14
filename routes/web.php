<?php

use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/admin/dashboard',[DashboardController::class,'index']);
Route::get('/admin/products',[DashboardController::class,'showProduct']);



