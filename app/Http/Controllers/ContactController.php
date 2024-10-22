<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
       // Function to display the contact form page
       public function show()
       {
           return view('nav-bar.nav_contact'); // Make sure 'contact' matches your blade view filename
       }
   
       // Function to handle the form submission
       public function submitContactForm(Request $request)
       {
           // Validate the request
           $request->validate([
               'name' => 'required|string|max:255',
               'email' => 'required|email|max:255',
               'message' => 'required|string',
           ]);
   
           // Prepare data for Google Drive
           $data = [
               'name' => $request->name,
               'email' => $request->email,
               'message' => $request->message,
           ];
   
           // Here, you can implement the Google Drive API to save the $data to your Google Drive.
   
           // Redirect back with a success message
           return redirect()->back()->with('success', 'Your message has been sent successfully!');
       }
}
