<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller

{
    public function show(){
        return view ("nav-bar.apply_now");
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'position' => 'required|string',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'cover_letter' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Process the application (e.g., save it to the database, send an email, etc.)

        // Assuming you want to redirect with a success message
        return redirect()->route('apply-now')->with('success', 'Application submitted successfully!');
    }
}
