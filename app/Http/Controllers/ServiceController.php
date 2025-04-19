<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{

    public function view($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        return view('service.know_more', compact('service'));
    }


    public function index()
    {
        $services = Service::all();
        return view('service.services', compact('services'));
    }

    public function show()
    {
        $services = Service::all();
        return view('admin.services.view', compact('services'));
    }

    public function create()
    {
        return view('admin.services.add');

    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug',
        ]);

        Service::create([
            'title' => $request->title,
            'slug' => $request->slug,
        ]);

        return redirect()->route('services.view')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }





    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug,' . $service->id,
            'tagline' => 'nullable|string',
            'stats_section' => 'nullable|string',
            'features_section' => 'nullable|string',
            'duration_section' => 'nullable|string',
            'details_section' => 'nullable|string',
            'cta_title' => 'nullable|string',
            'cta_text' => 'nullable|string',
            'cta_button_text' => 'nullable|string',
            'cta_button_link' => 'nullable|string|url',
            'header_image' => 'nullable|image|mimes:jpeg,svg,png,jpg,webp|max:2048',
        ]);

        // Handle header image upload
        if ($request->hasFile('header_image')) {
            // Create directory if not exists
            $uploadPath = public_path('uploads/service');
            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            // Delete old image
            if ($service->header_image && file_exists(public_path('uploads/service/' . $service->header_image))) {
                unlink(public_path('uploads/service/' . $service->header_image));
            }

            // Save new image
            $image = $request->file('header_image');
            $filename = now()->format('Y-m-d') . '_' . time() . '.' . $image->getClientOriginalExtension();

            $image->move($uploadPath, $filename);
        } else {
            $filename = $service->header_image;
        }

        $service->update([
            'title' => $request->title,
            'slug' => Str::slug($request->slug),
            'tagline' => $request->tagline,
            'stats_section' => $request->stats_section,
            'features_section' => $request->features_section,
            'duration_section' => $request->duration_section,
            'details_section' => $request->details_section,
            'cta_title' => $request->cta_title,
            'cta_text' => $request->cta_text,
            'cta_button_text' => $request->cta_button_text,
            'cta_button_link' => $request->cta_button_link,
            'header_image' => $filename,
        ]);

        return redirect()->back()->with('success', 'Service updated successfully!');
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
