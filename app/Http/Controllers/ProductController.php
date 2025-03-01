<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Define all product details
        $products = [
            [
                'id' => 1,
                'title' => 'RISE WITH SAP',
                'description' => 'Transform your business processes with SAP.',
                'image' => 'images/rws.jpg',
            ],
            [
                'id' => 2,
                'title' => 'SAP S/4 HANA',
                'description' => 'Next-gen ERP solution.',
                'image' => 'images/S4HANA.jpg',
            ],
            [
                'id' => 3,
                'title' => 'Business ByDesign', 
                'description' => 'Cloud-based ERP for agility and innovation in your business.',
                'image' => 'images/SBBD.jpg',
            ],
            [
                'id' => 4,
                'title' => 'SAP BTP',
                'description' => 'SAP Business Technology Platform',
                'image' => 'images/BTP.jpg',
            ],
        ];

        return view('products.products', compact('products'));
    }

    public function show($id)
    {
        // Product details
        $products = [
            1 => [
                'title' => 'RISE WITH SAP',
                'overview' => 'RISE with SAP enables business transformation as a service, helping companies move to the cloud seamlessly.',
                'who_can_opt' => 'Large enterprises and SMEs looking for a digital transformation strategy.',
                'key_benefits' => [
                    'Comprehensive cloud ERP solution',
                    'AI-driven business insights',
                    'Integrated automation and analytics',
                    'Flexible and scalable for any business size',
                ],
                'how_it_works' => 'RISE with SAP provides a combination of ERP, cloud hosting, business intelligence, and migration tools to help companies move to SAP S/4HANA.',
                'image' => 'images/rws.jpg',
            ],
            2 => [
                'title' => 'SAP S/4 HANA',
                'overview' => 'SAP S/4HANA is an intelligent ERP suite designed specifically for in-memory computing, providing real-time data processing.',
                'who_can_opt' => 'Businesses of all sizes looking to streamline operations and gain real-time insights.',
                'key_benefits' => [
                    'In-memory computing for faster performance',
                    'Enhanced data analytics for better decision-making',
                    'Simplified user experience with SAP Fiori',
                    'Seamless integration with SAP and third-party applications',
                ],
                'how_it_works' => 'SAP S/4HANA runs on SAP HANA, a high-performance database that processes transactions and analytics in real time.',
                'image' => 'images/S4HANA.jpg',
            ],
            3 => [
                'title' => 'SAP S/4HANA CLOUD',
                'overview' => 'A cloud-based ERP solution that delivers agility, flexibility, and innovation in business operations.',
                'who_can_opt' => 'Fast-growing companies and organizations looking for a cloud-first approach to ERP.',
                'key_benefits' => [
                    'Cloud-hosted for easy access anywhere',
                    'Automatic updates and security patches',
                    'Lower IT costs with subscription-based pricing',
                    'Integration with other SAP cloud solutions',
                ],
                'how_it_works' => 'SAP S/4HANA Cloud is hosted on SAP’s data centers and allows businesses to run their ERP operations via a web-based interface.',
                'image' => 'images/SBBD.jpg',
            ],
            4 => [
                'title' => 'SAP BTP',
                'overview' => 'SAP Business Technology Platform is a set of integrated services for data management, analytics, and application development.',
                'who_can_opt' => 'Enterprises seeking to build, integrate, and extend business applications using SAP’s technology stack.',
                'key_benefits' => [
                    'Unified platform for data management and analytics',
                    'AI and machine learning integration',
                    'Low-code/no-code development options',
                    'Supports multi-cloud and hybrid environments',
                ],
                'how_it_works' => 'SAP BTP combines database and data management, analytics, application development, and integration capabilities in one platform.',
                'image' => 'images/BTP.jpg',
            ],
        ];

        // Check if product exists, otherwise return 404
        if (!array_key_exists($id, $products)) {
            abort(404);
        }

        // Pass product details to the view
        $productDetails = $products[$id];

        return view('products.learn_more', compact('productDetails'));
    }
}
