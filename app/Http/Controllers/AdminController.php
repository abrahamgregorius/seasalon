<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $active = Reservation::where('status', 'active')->get()->count();
        $past = Reservation::where('status', 'inactive')->get()->count();
        $members = User::get()->count();
        $reservations = Reservation::where('status', 'active')->get();
        $reservations_old = Reservation::where('status', 'inactive')->get();

        return view('admin.home', compact('active', 'past', 'members', 'reservations', 'reservations_old'));
    }

    public function branch_get() {        
        $branches = Branch::get();
        return view('admin.branches', compact('branches'));
    }

    public function branch_post() {
        return redirect('/admin/branches');
    }

    public function service_get() {
        $services = Service::get();
        return view('admin.services', compact('services'));
    }

    public function service_post() {
        return redirect('/admin/services');
    }

    public function service_create() {
        return redirect('/admin/services');
    }




    public function service_edit($id) {
        $services = Service::get();
        return view('admin.services', compact('services'));

    }



    public function service_accept($id) {
        $reservation = Reservation::find($id);
        $reservation->update([
            'status' => 'inactive'
        ]);
        return redirect('/admin/reservation')->with('status', "Reservation Confirmed");
    }

    public function service_cancel($id) {
        $reservation = Reservation::find($id);
        $reservation->update([
            'status' => 'inactive'
        ]);
        return redirect('/admin/reservation')->with('status', "Reservation Canceled");
    }

}
