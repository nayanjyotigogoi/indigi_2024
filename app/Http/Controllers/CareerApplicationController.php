<?php

namespace App\Http\Controllers;

use App\Models\CareerApplication;
use App\Models\JobOpening;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CareerApplicationController extends Controller
{
    public function viewJob($id)
    {
        $job = JobOpening::findOrFail($id);  // Fetch the job by ID
        return view('career.job', compact('job'));  // Pass the job data to the view
    }

    public function career_page()
    {
        $jobs = JobOpening::where('status', 'Open')
                ->orderBy('created_at', 'desc')
                ->get();
        return view('career.career', compact('jobs')); // career.career is the page with jobs listed
    }
    /**
     * Show the form for creating a new job application.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Return the 'career.apply' view for the job application form
        return view('career.apply');
    }

    /**
     * Store a newly created job application in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */


     public function store(Request $request)
     {
        
         $validated = $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|email',
             'phone' => 'required|string|max:255',
             'education' => 'required|string|max:255',
             'skills' => 'required|string',
             'role' => 'required|string|max:255',
             'experience' => 'required|string|max:255',
             'current_ctc' => 'required|string|max:255',
             'expected_ctc' => 'required|string|max:255',
             'file' => 'required|file|mimes:pdf,doc,docx|max:5120',
         ]);
     
         // Generate application ID (e.g., INDIGI-20250417-XYZ123)
         $applicationId = 'APP-' . now()->format('Ymd') . '-' . strtoupper(Str::random(6));
     
         // Handle file upload
         $fileName = null;
         if ($request->hasFile('file')) {
             $file = $request->file('file');
             $fileName = time() . '_' . $file->getClientOriginalName(); // Create unique file name
             $file->move(public_path('uploads/application'), $fileName); // Store file directly in public/uploads/application
         }
     
         // Create the application
         CareerApplication::create([
             'application_id' => $applicationId,
             'name' => $validated['name'],
             'email' => $validated['email'],
             'phone' => $validated['phone'],
             'education' => $validated['education'],
             'skills' => $validated['skills'],
             'role' => $validated['role'],
             'experience' => $validated['experience'],
             'current_ctc' => $validated['current_ctc'],
             'expected_ctc' => $validated['expected_ctc'],
             'file' => $fileName, // Save the relative path
         ]);
     
         return redirect()->back()->with('success', 'Application submitted successfully! Your Application ID is: ' . $applicationId);
     }     


    /**
     * Display the list of career applications.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Initialize a query for fetching career applications
        $query = CareerApplication::query();

        // Check if a search filter is applied
        if ($request->has('search') && !empty($request->search)) {
            // Filter by name or email based on the search query
            $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%');
        }

        // Paginate the results to display 10 applications per page
        $applications = $query->paginate(10);

        // If the request is an AJAX request, return the table and pagination links as JSON
        if ($request->ajax()) {
            return response()->json([
                'table' => view('admin.career.applications_table', compact('applications'))->render(),
                'pagination' => (string) $applications->links()
            ]);
        }

        // Otherwise, return the view with the applications
        return view('admin.career.view-application', compact('applications'));
    }

    /**
     * Show a list of job openings.
     *
     * @return \Illuminate\View\View
     */
    public function show(JobOpening $job)
    {
        // You will automatically have the $job available due to Route Model Binding
        return view('career.apply_now', compact('job'));
    }

}
