<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{   
     // Show the form page
     public function index()
     {
         return view('Testimonials.write-review');
     }
 
     // Handle the form submission
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|max:255',
            'designation' => 'nullable|string|max:255',
            'company'     => 'nullable|string|max:255',
            'rating'      => 'required|integer|min:1|max:5',
            'review'      => 'required|string|min:10',
        ]);

        Review::create($validated);

        return response()->json(['message' => 'Review submitted successfully.']);
    }
}

