<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function view()
    {
        
        $projects = [
            [
                'id' => 1,
                'title' => 'SAP Implementation & FIORI',
                'short_description' => 'A modern web app built with Laravel and Vue.js.',
                'description' => 'Detailed description of the project, features, and technology stack.',
                'video' => 'video/video2-bg.mp4', //  path for the video
                'clientName' => 'iggl',
                'category' => 'sap',
            ],
            [
                'id' => 2,
                'title' => 'Web Development',
                'short_description' => 'DULAL TEA',
                'description' => 'Full case study and details.',
                'video' => 'video/DT-VIDEO.mp4', 
                'clientName' => 'DULAL TEA',
                'category' => 'website',
            ],
            [
                'id' => 3,
                'title' => 'SAP Integration Project',
                'short_description' => 'A complex SAP integration solution.',
                'description' => 'Full case study and details of SAP integration.',
                'video' => 'video/video2-bg.mp4', 
                'clientName' => 'Purabi',
                'category' => 'sap',
            ],

            [
                'id' => 4,
                'title' => 'Web Development',
                'short_description' => 'DULAL TEA',
                'description' => 'Full case study and details.',
                'video' => 'video/DT-VIDEO.mp4', 
                'clientName' => 'DULAL TEA',
                'category' => 'website',
            ],
            // Add more projects as needed
        ];

        // Passing $projects to the index view
        return view('portfolio.portfolio', compact('projects'));
    }

    

    
}



 