<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    // Show the gallery page with images
    public function index()
    {
        $galleryImages = GalleryImage::all();
        return view('gallery.gallery', compact('galleryImages'));
    }

    // Show the form to upload a new image
    public function create()
    {
        return view('Admin.Gallery.add_image'); // The Blade view for adding an image
    }

    public function show()
    {
        $images = GalleryImage::paginate(12);
        return view('admin.gallery.view_image', compact('images'));
    }

    // Store a new gallery image
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/gallery'), $filename);

            // Store the data in the database
            GalleryImage::create([
                'filename' => $filename,
                'title' => $request->input('title'),
                'category' => $request->input('category'),
            ]);

            return redirect()->route('gallery.view')->with('success', 'Image uploaded successfully');
        }

        return back()->with('error', 'Failed to upload image');
    }

    public function edit($id)
    {
        $gallery = GalleryImage::findOrFail($id);
        return view('admin.gallery.edit_image', compact('gallery'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gallery = GalleryImage::findOrFail($id);

        // Update fields
        $gallery->title = $request->title;
        $gallery->category = $request->category;

        // Handle new image upload if provided
        if ($request->hasFile('image')) {
            // Delete old image
            $oldPath = public_path('uploads/gallery/' . $gallery->filename);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/gallery'), $filename);

            $gallery->filename = $filename;
        }

        $gallery->save();

        return redirect()->route('gallery.view')->with('success', 'Image updated successfully!');
    }

    public function destroy($id)
    {
        $gallery = GalleryImage::findOrFail($id);

        // Delete the image file
        $filePath = public_path('uploads/gallery/' . $gallery->filename);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        $gallery->delete();

        return redirect()->route('gallery.view')->with('success', 'Image deleted successfully!');
    }

}
