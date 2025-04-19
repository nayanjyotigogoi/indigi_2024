<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;

class AboutController extends Controller
{

    //this function is for showing in the about page
    public function show()
    {
        $aboutContents = Content::whereIn('type', ['about', 'mission', 'vision'])->get()->keyBy('type');
        return view('about', compact('aboutContents'));
    }

    // Show the About Page content
    public function view()
    {
        $about = Content::where('type', 'about')->first();
        $mission = Content::where('type', 'mission')->first();
        $vision = Content::where('type', 'vision')->first();

        return view('admin.about.view', compact('about', 'mission', 'vision'));
    }

    // Show the edit form for About Page
    public function edit()
    {
        $about = Content::where('type', 'about')->first();
        $mission = Content::where('type', 'mission')->first();
        $vision = Content::where('type', 'vision')->first();

        return view('admin.about.edit', compact('about', 'mission', 'vision'));
    }

    // Handle form submission and update content
    public function update(Request $request)
    {
        // Validation (optional)
        $request->validate([
            'about_detail' => 'required|string',
            'mission_detail' => 'required|string',
            'vision_detail' => 'required|string',
        ]);

        // Save or update each section
        Content::updateOrCreate(
            ['type' => 'about'],
            ['detail' => $request->about_detail]
        );

        Content::updateOrCreate(
            ['type' => 'mission'],
            ['detail' => $request->mission_detail]
        );

        Content::updateOrCreate(
            ['type' => 'vision'],
            ['detail' => $request->vision_detail]
        );

        return redirect()->route('admin.about.view')->with('success', 'About page content updated successfully.');
    }
}
