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
            'role' => 'nullable|string',
            'status' => 'nullable|string|max:255',
            'number_of_opening' => 'nullable|integer',
            'working_hour' => 'nullable|string|max:255',
            'workplace_type' => 'nullable|string|max:255',
            'notice_period' => 'nullable|string|max:255',
            'preferred_skill' => 'nullable|string',
            'candidate_profile' => 'nullable|string',
        ]);

        JobOpening::create($request->only([
            'post_name',
            'introduction',
            'country',
            'city',
            'department',
            'education',
            'skills',
            'experience',
            'position_type',
            'role',
            'status',
            'number_of_opening',
            'working_hour',
            'workplace_type',
            'notice_period',
            'preferred_skill',
            'candidate_profile'
        ]));

        return redirect()->route('job.create')->with('success', 'Job opening added successfully.');
    }

    public function edit($id)
    {
        $job = JobOpening::findOrFail($id);
        return view('admin.career.edit-job', compact('job'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'post_name' => 'required|string|max:255',
            'introduction' => 'nullable|string',
            'country' => 'required|string',
            'city' => 'required|string',
            'department' => 'required|string',
            'education' => 'nullable|string',
            'skills' => 'nullable|string',
            'experience' => 'nullable|string',
            'position_type' => 'required|string',
            'role' => 'nullable|string',
            'number_of_opening' => 'nullable|integer',
            'working_hour' => 'nullable|string',
            'workplace_type' => 'nullable|string',
            'notice_period' => 'nullable|string',
            'preferred_skill' => 'nullable|string',
            'candidate_profile' => 'nullable|string',
            'status' => 'required|in:Open,Closed',
        ]);

        $job = JobOpening::findOrFail($id);

        $job->post_name = $request->post_name;
        $job->introduction = $request->introduction;
        $job->country = $request->country;
        $job->city = $request->city;
        $job->department = $request->department;
        $job->education = $request->education;
        $job->skills = $request->skills;
        $job->experience = $request->experience;
        $job->position_type = $request->position_type;
        $job->role = $request->role;
        $job->number_of_opening = $request->number_of_opening;
        $job->working_hour = $request->working_hour;
        $job->workplace_type = $request->workplace_type;
        $job->notice_period = $request->notice_period;
        $job->preferred_skill = $request->preferred_skill;
        $job->candidate_profile = $request->candidate_profile;
        $job->status = $request->status;

        $job->save();

        return redirect()->route('job.edit', $job->id)->with('success', 'Job updated successfully.');
    }


}
