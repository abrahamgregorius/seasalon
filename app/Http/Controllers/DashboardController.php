<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class DashboardController extends Controller
{
    public function index() {
        $active = Reservation::where('status', 'active')->get()->count();
        $past = Reservation::where('status', 'inactive')->get()->count();
        $members = User::get()->count();
        $reservations = Reservation::where('user_id', auth()->user()->id)->where('status', 'active')->get();
        
        return view('dashboard.home', compact('active', 'past', 'members', 'reservations'));
    }

    public function reserve_get() {
        $branches = Branch::get();
        $services = Service::get();
        $date_now = Date::now()->toDateString();

        return view('dashboard.reserve', compact('branches', 'services', 'date_now'));
    }
}
