<?php

namespace App\Http\Controllers;

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

    
}
