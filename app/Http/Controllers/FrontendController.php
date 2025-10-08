<?php

namespace App\Http\Controllers;

use App\Events\ContactSubmitted;
use App\Models\ContactUs;
use App\Models\Service;
use App\Models\Solution;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {

        // Get all solutions and services from DB
        $products = Solution::all();
        $services = Service::take(6)->get(); // Fetch only 6 services

        return view('index', compact( 'products', 'services'));
    }
    public function contactStore(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $contact = ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone,
            'message' => $request->message,
        ]);
        // dd($contact);

        event(new ContactSubmitted($contact));

       return redirect()->back()->with('success', 'Thanks for reaching out! We’ve received your message and will get back to you shortly.');
    }



    
}
