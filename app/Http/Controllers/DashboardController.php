<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.home');
    }

    public function reserve_get() {
        return view('dashboard.reserve');
    }
}
