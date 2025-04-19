<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solution;


class SolutionController extends Controller
{

    public function index()
    {
        $products = Solution::all(); // You can add filters later
        return view('products.products', compact('products'));
    }

    public function show($slug)
    {
        $productDetails = Solution::where('slug', $slug)->firstOrFail();
        return view('products.learn-more', compact('productDetails'));
    }
    // Show list of all solutions in admin panel
    public function show_solutions()
    {
        $solutions = Solution::all();
        return view('admin.solutions.view', compact('solutions'));
    }

    // Show the add form (only for title & slug)
    public function create()
    {
        return view('admin.solutions.add');
    }

    // Save a new solution (only title & slug)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:191|unique:solutions,slug',
        ]);

        Solution::create([
            'title' => $request->title,
            'slug' => $request->slug,
        ]);

        return redirect()->route('solutions.view')->with('success', 'Solution added successfully!');
    }

    // Edit full solution content
    public function edit($id)
    {
        $solution = Solution::findOrFail($id);
        return view('admin.solutions.edit', compact('solution'));
    }

    // Update full solution content
    public function update(Request $request, $id)
    {
        $solution = Solution::findOrFail($id);

        $request->validate([
            'tagline' => 'nullable|string',
            'overview' => 'nullable|string',
            'testimonial_quote' => 'nullable|string',
            'testimonial_author' => 'nullable|string',
            'highlights' => 'nullable|string',
            'who_can_opt' => 'nullable|string',
            'ideal_for' => 'nullable|string',
            'ideal_for_business_size' => 'nullable|string',
            'ideal_for_geographic_scope' => 'nullable|string',
            'ideal_for_it_maturity' => 'nullable|string',
            'key_benefits' => 'nullable|string',
            'business_impact' => 'nullable|string',
            'how_it_works' => 'nullable|string',
            'implementation' => 'nullable|string',

            'cta_title' => 'nullable|string',
            'cta_subtitle' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $filename);
        } else {
            $filename = $solution->image; // Retain old image if not changed
        }

        $solution->update([
            'tagline' => $request->tagline,
            'overview' => $request->overview,
            'highlights' => $request->highlights,
            'who_can_opt' => $request->who_can_opt,
            'ideal_for' => $request->ideal_for,

            'key_benefits' => $request->key_benefits,

            'business_impact' => $request->business_impact,


            'how_it_works' => $request->how_it_works,
            'implementation' => $request->implementation,
            'impact_efficiency' => $request->impact_efficiency ?? 0,
            'impact_reporting' => $request->impact_reporting ?? 0,
            'impact_cost' => $request->impact_cost ?? 0,
            'cta_title' => $request->cta_title,
            'cta_subtitle' => $request->cta_subtitle,

            'image' => $filename, // Save or retain the image path
        ]);


        return redirect()->back()->with('success', 'Solution updated successfully!');
    }

    public function upload(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'upload' => 'required | mimes:jpeg,png,jpg,pdf'
        // ]);
        // if ($validator->fails()) {
        //     $message = 'File type not allowed';
        //     $result = "<script>window.parent.CKEDITOR.tools.callFunction('$message')</script>";
        // }
        if ($request->hasFile('upload')) {
            // dd($file);
            $finfo = new \finfo(FILEINFO_MIME_TYPE);
            $mime_type = $finfo->file($request->file('upload'));
            $extension = $request->file('upload')->getClientOriginalExtension();
            if ($mime_type != "image/png" && $mime_type != "image/jpeg" && $mime_type != "application/pdf") {
                $message = 'File type not allowed';
                // $result = "<script>window.parent.CKEDITOR.tools.callFunction('$message')</script>";
                $result = "<script>alert('$message')</script>";
            } elseif ($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "pdf") {
                $message = 'File type not allowed';
                // $result = "<script>window.parent.CKEDITOR.tools.callFunction('$message')</script>";
                $result = "<script>alert('$message')</script>";
            } else {
                $filenamewithextension = $request->file('upload')->getClientOriginalName();

                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                //get file extension
                $extension = $request->file('upload')->getClientOriginalExtension();

                //filename to store
                $filenametostore = $filename . '_' . time() . '.' . $extension;

                //Upload File
                $request->file('upload')->move('public/uploads', $filenametostore);

                $CKEditorFuncNum = $request->input('CKEditorFuncNum');
                $url = asset('public/uploads/' . $filenametostore);
                $message = 'File uploaded successfully';
                $result = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$message')</script>";
            }

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $result;
        }
    }
}
