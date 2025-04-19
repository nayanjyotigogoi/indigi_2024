<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Content;


class ProductController extends Controller
{
    public function index()
    {
        // Define all product details
        $products = [
            [
                'id' => 1,
                'title' => 'Mobile App Development',
                'name' => 'solution_grow',
                'description' => 'Lorem ipsum dolor sit amet',
                'image' => 'images/mobile_dev.jpg',

            ],
            [
                'id' => 2,
                'title' => 'Website Development',
                'description' => 'Lorem ipsum dolor sit amet',
                'image' => 'images/website_dev.jpg',


            ],
            [
                'id' => 3,
                'title' => 'Business ByDesign',
                'description' => 'Cloud-based ERP for agility and innovation in your business.',
                'image' => 'images/SBBD.jpg',
            ],
            [
                'id' => 4,


                'title' => 'GROW WITH SAP',
                'description' => 'Next-gen ERP solution.',
                'image' => 'images/S4HANA.jpg',
            ],
            [
                'id' => 5,

                'title' => 'RISE WITH SAP',
                'description' => 'Transform your business processes with SAP.',
                'image' => 'images/rws.jpg',
            ],
            [
                'id' => 6,
                'title' => 'SAP BTP',
                'description' => 'SAP Business Technology Platform',
                'image' => 'images/BTP.jpg',
            ],
        ];

        return view('products.products', compact('products'));
    }

    // public function show($id)
    // {
    //     $group = 'solutions';
    //     $item = 'solution_' . $id;
    
    //     // Fetch all relevant content for the solution
    //     $contents = Content::where('section_group', $group)
    //         ->where('item', $item)
    //         ->get()
    //         ->keyBy('type');
    
    //     // Decode complex fields
    //     $idealFor = json_decode($contents['ideal_for']->detail ?? '{}', true);
    //     $keyBenefits = json_decode($contents['key_benefits']->detail ?? '[]', true);
    //     $highlights = json_decode($contents['highlights']->detail ?? '[]', true);
    //     $whoCanOpt = json_decode($contents['who_can_opt']->detail ?? '[]', true);
    //     $implementation = json_decode($contents['implementation']->detail ?? '[]', true);
    
    //     // Split testimonial into quote and author
    //     $testimonialParts = explode('—', $contents['testimonials']->detail ?? '');
    //     $testimonialQuote = trim($testimonialParts[0] ?? '');
    //     $testimonialAuthor = trim($testimonialParts[1] ?? '');
    
    //     // Build structured product data
    //     $productDetails = [
    //         'title' => ucwords(str_replace('_', ' ', $id)),
    //         'image' => 'images/solutions/' . $id . '.png',
    //         'tagline' => $contents['tagline']->detail ?? '',
    
    //         'overview' => $contents['overview']->detail ?? '',
    //         'testimonial_quote' => $testimonialQuote,
    //         'testimonial_author' => $testimonialAuthor,
    //         'highlights' => $highlights,
    //         'who_can_opt' => $whoCanOpt,
    
    //         // Ideal For section
    //         'ideal_for_business_size' => $idealFor['business_size'] ?? '',
    //         'ideal_for_geographic_scope' => $idealFor['geographic_scope'] ?? '',
    //         'ideal_for_it_maturity' => $idealFor['it_maturity'] ?? '',
    
    //         // Key Benefits
    //         'key_benefits' => $keyBenefits,
    
    //         // Impact metrics (with defaults)
    //         'impact_efficiency' => $contents['impact_efficiency']->detail ?? '30%',
    //         'impact_reporting' => $contents['impact_reporting']->detail ?? '50%',
    //         'impact_cost' => $contents['impact_cost']->detail ?? '20%',
    
    //         // How it works & Implementation
    //         'how_it_works' => $contents['how_it_works']->detail ?? '',
    //         'implementation_steps' => $implementation,
    
    //         // Call to action
    //         'cta_title' => $contents['cta_title']->detail ?? 'Start with ' . ucwords(str_replace('_', ' ', $id)),
    //         'cta_subtitle' => $contents['cta_subtitle']->detail ?? 'Let’s work together to implement the best solution for your business.',
    //     ];
    
    //     return view('products.learn-more', compact('productDetails'));
    // }
    



}
