<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobOpening;

class JobOpeningController extends Controller
{
    public function index()
    {
        $jobs = JobOpening::orderBy('created_at', 'desc')->paginate(10);
        
        return view('admin.career.view-job', compact('jobs'));
    }

    public function create()
    {
        return view('admin.career.add-job');
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_name' => 'required|string|max:255',
            'introduction' => 'nullable|string',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'education' => 'nullable|string|max:255',
            'skills' => 'nullable|string',
            'experience' => 'nullable|string|max:255',
            'position_type' => 'nullable|string|max:255',
            'role' => 'nullable|string|max:2000',
            'status' => 'nullable|string|max:255',
        ]);

        JobOpening::create([
            'post_name' => $request->post_name,
            'introduction' => $request->introduction,
            'country' => $request->country,
            'city' => $request->city,
            'department' => $request->department,
            'education' => $request->education,
            'skills' => $request->skills,
            'experience' => $request->experience,
            'position_type' => $request->position_type,
            'role' => $request->role,
            'status' => $request->status,
        ]);

        return redirect()->route('job.create')->with('success', 'Job opening added successfully.');
    }
}
