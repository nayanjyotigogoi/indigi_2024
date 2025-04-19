<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    public function index()
    {
         // Pass the data to the dashboard view
         return view('Admin.index');
    }

}
