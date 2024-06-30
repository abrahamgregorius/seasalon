<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index() {
        $reviews = collect(Review::get())->sortByDesc('rating')->all();

        return view('reviews', compact('reviews'));
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
}
