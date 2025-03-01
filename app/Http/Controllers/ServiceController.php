<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Display the services page
    public function index()
    {
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
        return view('service.services', ['services' => $services]);
     
    }

        public function show($id)
    {
        // Define your static services array (same as in the index function)
        $services = [
            [
                'id' => 1,
                'icon' => 'images/icon1.png',
                'title' => 'SAP CONSULTING',
                'description' => "Our SAP Consulting services provide expert guidance on SAP solutions, optimizing your business with strategic planning and seamless integration.",
                'duration' => '3 months',
                'features' => [
                    'SAP strategy and planning',
                    'System architecture and design',
                    'Business process optimization',
                    'Integration with existing software',
                    'Security and compliance advisory',
                    'Cost and efficiency analysis'
                ]
            ],
            [
                'id' => 2,
                'icon' => 'images/icon2.png',
                'title' => 'SAP IMPLEMENTATION',
                'description' => "Our SAP Implementation services unify your workforce, business processes, and data into a single system for seamless ERP deployment.",
                'duration' => '6 months',
                'features' => [
                    'End-to-end SAP deployment',
                    'Data migration and system setup',
                    'Module-specific implementation (e.g., S/4HANA)',
                    'User training and support',
                    'Custom configuration and development',
                    'Post-implementation monitoring'
                ]
            ],
            [
                'id' => 3,
                'icon' => 'images/services/SAP-Support.png',
                'title' => 'SAP SUPPORT',
                'description' => "We provide 24/7 SAP support services, ensuring your system runs smoothly with minimal downtime and maximum efficiency.",
                'duration' => 'Ongoing',
                'features' => [
                    '24/7 SAP support services',
                    'Issue resolution and troubleshooting',
                    'SAP performance optimization',
                    'System upgrades and patch management',
                    'Functional and technical user guidance',
                    'Dedicated SAP consultants for continuous support'
                ]
            ],
            [
                'id' => 4,
                'icon' => 'images/icon3.png',
                'title' => 'SAP UPGRADATION',
                'description' => "Upgrade your SAP system with the latest technology for improved performance, security, and business efficiency.",
                'duration' => '4 months',
                'features' => [
                    'SAP version upgrade planning',
                    'Seamless data migration',
                    'System testing and validation',
                    'Performance tuning and optimization',
                    'Integration with new SAP modules',
                    'User training and documentation'
                ]
            ],
            [
                'id' => 5,
                'icon' => 'images/icon3.png',
                'title' => 'SAP ROLLOUT',
                'description' => "Expand your SAP system to new locations or business units with a structured and risk-free rollout approach.",
                'duration' => 'Varies based on project',
                'features' => [
                    'SAP rollout strategy development',
                    'Multi-location system deployment',
                    'Data consistency and synchronization',
                    'Standardized business process implementation',
                    'Compliance and regulatory adherence',
                    'End-user training and support'
                ]
            ],
            [
                'id' => 6,
                'icon' => 'images/icon3.png',
                'title' => 'Business Process Automation',
                'description' => "Automate business processes to enhance efficiency and reduce manual workloads with intelligent automation solutions.",
                'duration' => 'Customized per business needs',
                'features' => [
                    'Workflow automation solutions',
                    'AI-driven process optimization',
                    'Seamless ERP system integration',
                    'Reduction of manual errors',
                    'Real-time data analytics',
                    'Custom automation strategies'
                ]
            ],
            [
                'id' => 7,
                'icon' => 'images/icon3.png',
                'title' => 'Manpower Outsourcing',
                'description' => "Get access to skilled SAP professionals and IT experts through our flexible manpower outsourcing services.",
                'duration' => 'Ongoing / Contract-based',
                'features' => [
                    'SAP experts on demand',
                    'Flexible hiring models',
                    'Cost-effective resource management',
                    'Remote and on-site staffing solutions',
                    'Short-term and long-term contracts',
                    'End-to-end HR and payroll management'
                ]
            ],
            [
                'id' => 8,
                'icon' => 'images/icon3.png',
                'title' => 'IoT Solutions',
                'description' => "Leverage IoT technology to automate processes, monitor assets in real-time, and drive data-driven decision-making.",
                'duration' => 'Varies based on implementation',
                'features' => [
                    'Smart device connectivity',
                    'Real-time data collection and analysis',
                    'Predictive maintenance solutions',
                    'Integration with cloud platforms',
                    'Secure IoT network infrastructure',
                    'Industry-specific IoT applications'
                ]
            ],
            [
                'id' => 9,
                'icon' => 'images/icon3.png',
                'title' => 'Tailored ERP Solutions',
                'description' => "Custom ERP solutions designed for small and medium businesses to enhance efficiency and streamline operations.",
                'duration' => '6+ months',
                'features' => [
                    'Fully customizable ERP software',
                    'Scalable and modular architecture',
                    'Seamless third-party integrations',
                    'Cloud-based and on-premise options',
                    'Real-time business intelligence reports',
                    'Industry-specific ERP functionalities'
                ]
            ],
            [
                'id' => 10,
                'icon' => 'images/icon3.png',
                'title' => 'Website Security Audit',
                'description' => "Identify vulnerabilities and protect your online presence with our comprehensive website security audit services.",
                'duration' => '1 month',
                'features' => [
                    'Full website vulnerability scan',
                    'Penetration testing and security checks',
                    'Malware detection and removal',
                    'Security patch implementation',
                    'Data protection and compliance assessment',
                    'Detailed audit reports with recommendations'
                ]
            ]
        ];

        $service = collect($services)->firstWhere('id', $id);

        if (!$service) {
            abort(404, 'Service not found');
        }

        return view('service.know_more', ['service' => $service]);
    }

}
