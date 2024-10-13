<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
{
    // Example project data (this could come from a database)
    $projects = [
        [
            'id' => 1,
            'title' => 'Web Development Project',
            'short_description' => 'A modern web app built with Laravel and Vue.js.',
            'description' => 'Detailed description of the project, features, and technology stack.',
            'image' => 'images/logo/iggl.png',
            'category' => 'web',
        ],
        [
            'id' => 2,
            'title' => 'SAP Integration Project',
            'short_description' => 'A complex SAP integration solution.',
            'description' => 'Full case study and details of SAP integration.',
            'image' => 'images/logo/Purabi_Logo_Eng.png',
            'category' => 'sap',
        ],
        [
            'id' => 3,
            'title' => 'Android App Project',
            'short_description' => 'A cutting-edge mobile application for Android devices.',
            'description' => 'An overview of the Android app’s functionality and tech stack.',
            'image' => 'images/testimonials/rongsheng.jpg',
            'category' => 'android',
        ],
        [
            'id' => 2,
            'title' => 'SAP Integration Project',
            'short_description' => 'A complex SAP integration solution.',
            'description' => 'Full case study and details of SAP integration.',
            'image' => 'images/logo/Purabi_Logo_Eng.png',
            'category' => 'sap',
        ],
        [
            'id' => 3,
            'title' => 'Android App Project',
            'short_description' => 'A cutting-edge mobile application for Android devices.',
            'description' => 'An overview of the Android app’s functionality and tech stack.',
            'image' => 'images/testimonials/rongsheng.jpg',
            'category' => 'android',
        ],
        [
            'id' => 2,
            'title' => 'SAP Integration Project',
            'short_description' => 'A complex SAP integration solution.',
            'description' => 'Full case study and details of SAP integration.',
            'image' => 'images/logo/Purabi_Logo_Eng.png',
            'category' => 'sap',
        ],
        [
            'id' => 3,
            'title' => 'Android App Project',
            'short_description' => 'A cutting-edge mobile application for Android devices.',
            'description' => 'An overview of the Android app’s functionality and tech stack.',
            'image' => 'images/testimonials/rongsheng.jpg',
            'category' => 'android',
        ],
    ];

    // Passing $projects to the index view
    return view('index', compact('projects'));
}

}

