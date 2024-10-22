<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        // Define the product details with ID as the key
        $products = [
            1 => [
                'title' => 'RISE WITH SAP',
                'description' => 'Transform your business processes with SAP\'s comprehensive solutions.',
                'details' => 'RISE with SAP enables business transformation as a service, combining everything needed to make your business smarter.',
            ],
            2 => [
                'title' => 'SAP S4HANA',
                'description' => 'Next-gen ERP solution for streamlined operations and real-time insights.',
                'details' => 'SAP S/4HANA is an intelligent ERP suite designed specifically for in-memory computing.',
            ],
            3 => [
                'title' => 'SAP S4HANA CLOUD',
                'description' => 'Cloud-based ERP for agility and innovation in your business.',
                'details' => 'Experience the agility and flexibility of cloud-based ERP with SAP S/4HANA Cloud.',
            ],
            // Add more products with their IDs here
        ];

        // Check if the product with the given ID exists, otherwise return a 404 error
        if (!array_key_exists($id, $products)) {
            abort(404);
        }

        // Pass the product details to the view
        $productDetails = $products[$id];

        return view('nav-bar.products.learn_more', compact('productDetails'));
    }
}
