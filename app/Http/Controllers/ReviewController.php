<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index() {
        return view('reviews');
    }

    public function create() {
        return view('reviews.create');
    }

    public function store(Request $request) {
        Review::create([
            'name' => $request->name,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return redirect('/reviews');
    }

    public function edit() {
        return view('reviews.edit');
    }
}
