<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Display the services page
    public function index()
    {
        // You can fetch services from the database or use static data
        // Example: Fetching services from a Service model (if you have a Service model)
        // $services = Service::all();

        // Or passing static data (for now)
        $services = [
            [
                'id' => 1,
                'icon' => '',
                'title' => 'SAP CONSULTING',
                'description' => "Either you're a well established corporate, or a small start-up, get Indigi's expert SAP consulting.",
            ],
            [
                'id' => 2,
                'icon' => 'images/icon2.png',
                'title' => 'SAP IMPLEMENTATION',
                'description' => 'Implementation of ERP helps integrate your workforce, business processes and data into a single system.',
            ],
            [
                'id' => 3,
                'icon' => 'images/services/SAP-Support.png',
                'title' => 'SAP SUPPORT',
                'description' => 'Our support projects can enable users to resolve issues related to transactions and functionals, direct users in using SAP transactions, resolve tickets and system issues.',
            ],
            [
                'id' => 4,
                'icon' => 'images/icon3.png',
                'title' => 'SAP UPGRADATION',
                'description' => 'If you believe so, SAP Upgradation is just the tool for you. We ensure success for your upgrades by understanding your current business scenarios.',
            ],
            [
                'id' => 5,
                'icon' => 'images/icon3.png',
                'title' => 'SAP ROLLOUT',
                'description' => 'A rollout project is extending of the current SAP system to a new location or a business type.',
            ],
            [
                'id' => 6,
                'icon' => 'images/icon3.png',
                'title' => 'Business Process Automation',
                'description' => 'A business interaction is a movement, or a bunch of exercises, used to achieve a particular hierarchical objective, for example, creating an item, absorbing new workers or welcoming on new clients.',
            ],
            [
                'id' => 7,
                'icon' => 'images/icon3.png',
                'title' => 'Manpower Outsourcing',
                'description' => 'Outsourcing is a training where an organization recruits or goes into a concurrence with an outside association or specialist co-op to play out specific tasks or works.',
            ],
            [
                'id' => 8,
                'icon' => 'images/icon3.png',
                'title' => 'IoT',
                'description' => 'IoT is an arrangement of interrelated figuring gadgets, mechanical and advanced machines, items, creatures or individuals that are furnished with exceptional identifiers (UIDs) and the capacity to move information over an organization without expecting human-to-human or human-to-PC communication',
            ],
            [
                'id' => 9,
                'icon' => 'images/icon3.png',
                'title' => 'Tailored ERP',
                'description' => 'Tailored ERP plays an important role for small and medium sized businesses. It helps to determine the performance of all the business processes of any small and medium sized organization.',
            ],
            [
                'id' => 10,
                'icon' => 'images/icon3.png',
                'title' => ' website security audit',
                'description' => 'Web security reviews recognize weaknesses in web resources. This shifts from static sites to the corporate foundations of all structures and sizes, intranet, online business, APIs.',
            ],
        ];

        // Return the view with the services data
        return view('nav-bar.nav_service', ['services' => $services]);
     
    }

        public function show($id)
    {
        // Define your static services array (same as in the index function)
        $services = [
            [
                'id' => 1,
                'icon' => 'images/icon1.png',
                'title' => 'SAP CONSULTING',
                'description' => "Either you're a well-established corporate, or a small start-up, get Indigi's expert SAP consulting.",
                'price' => '$1000',
                'duration' => '3 months',
                'includes' => 'Consulting, Strategy, Roadmap',
            ],
            [
                'id' => 2,
                'icon' => 'images/icon2.png',
                'title' => 'SAP IMPLEMENTATION',
                'description' => 'Implementation of ERP helps integrate your workforce, business processes and data into a single system.',
                'price' => '$5000',
                'duration' => '6 months',
                'includes' => 'Implementation, Support, Training',
            ],
            [
                'id' => 3,
                'icon' => 'images/icon3.png',
                'title' => 'SAP SUPPORT',
                'description' => 'Our support projects can enable users to resolve issues related to transactions and functionals.',
                'price' => '$1500',
                'duration' => 'Ongoing',
                'includes' => 'Support, Ticket Resolution, User Guidance',
            ],
            [
                'id' => 4,
                'icon' => 'images/icon3.png',
                'title' => 'SAP SUPPORT',
                'description' => 'Our support projects can enable users to resolve issues related to transactions and functionals.',
                'price' => '$1500',
                'duration' => 'Ongoing',
                'includes' => 'Support, Ticket Resolution, User Guidance',
            ],
            [
                'id' => 5,
                'icon' => 'images/icon3.png',
                'title' => 'SAP SUPPORT',
                'description' => 'Our support projects can enable users to resolve issues related to transactions and functionals.',
                'price' => '$1500',
                'duration' => 'Ongoing',
                'includes' => 'Support, Ticket Resolution, User Guidance',
            ],
            [
                'id' => 6,
                'icon' => 'images/icon3.png',
                'title' => 'SAP SUPPORT',
                'description' => 'Our support projects can enable users to resolve issues related to transactions and functionals.',
                'price' => '$1500',
                'duration' => 'Ongoing',
                'includes' => 'Support, Ticket Resolution, User Guidance',
            ],
            [
                'id' => 7,
                'icon' => 'images/icon3.png',
                'title' => 'SAP SUPPORT',
                'description' => 'Our support projects can enable users to resolve issues related to transactions and functionals.',
                'price' => '$1500',
                'duration' => 'Ongoing',
                'includes' => 'Support, Ticket Resolution, User Guidance',
            ],
            [
                'id' => 8,
                'icon' => 'images/icon3.png',
                'title' => 'SAP SUPPORT',
                'description' => 'Our support projects can enable users to resolve issues related to transactions and functionals.',
                'price' => '$1500',
                'duration' => 'Ongoing',
                'includes' => 'Support, Ticket Resolution, User Guidance',
            ],
            [
                'id' => 9,
                'icon' => 'images/icon3.png',
                'title' => 'SAP SUPPORT',
                'description' => 'Our support projects can enable users to resolve issues related to transactions and functionals.',
                'price' => '$1500',
                'duration' => 'Ongoing',
                'includes' => 'Support, Ticket Resolution, User Guidance',
            ],
            [
                'id' => 10,
                'icon' => 'images/icon3.png',
                'title' => 'SAP SUPPORT',
                'description' => 'Our support projects can enable users to resolve issues related to transactions and functionals.',
                'price' => '$1500',
                'duration' => 'Ongoing',
                'includes' => 'Support, Ticket Resolution, User Guidance',
            ],
            // Add more services with unique IDs and additional fields...
        ];

        // Find the service by its ID using firstWhere
        $service = collect($services)->firstWhere('id', $id);

        // If service is not found, return a 404 error
        if (!$service) {
            abort(404, 'Service not found');
        }

        // Return the view with the specific service details
        return view('nav-bar.services.choose_service', ['service' => (object) $service]);
    }

}
