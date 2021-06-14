<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
      return  view('backend.dashboard.index');
    }

    public function showProduct(){
        return  view('backend.products.index');
    }
}
