<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indigi Consulting</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .carousel-item {
            height: 100vh; /* Full screen height */
            background-size: cover;
            background-position: center;
        }
        .carousel-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4); /* Semi-transparent overlay */
            z-index: 1;
        }
        .carousel-caption {
            z-index: 2;
        }
        .carousel-caption h1 {
            font-size: 3rem;
            font-weight: bold;
            color: white;
        }
        .carousel-caption p {
            font-size: 1.5rem;
            color: white;
        }
        .carousel-caption .btn {
            background-color: #00b7c2;
            color: white;
            padding: 10px 30px;
            border-radius: 50px;
            border: none;
            margin-top: 20px;
        }
        footer {
            background-color: #f1f1f1;
            padding: 20px;
        }
        footer p {
            margin: 0;
            color: #777;
        }

        /* Facts Section */
        .facts {
            background-color: #f9f9f9;
            padding: 50px 0;
        }
        .facts .fact-box {
            width: 100%;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            color: #fff;
            padding: 30px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }
        .facts .fact-box:hover {
            transform: translateY(-10px);
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
        }
        .facts .fact-icon {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }
        .facts h5 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        .facts h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 0;
        }

        /* Our Products Section */
        .our-products {
        padding: 60px 0;
        background-color: #f9f9f9; /* Light background for contrast */
        }

        .our-products .section-title {
            margin-bottom: 40px;
        }

        .our-products .section-title h5 {
            font-size: 1.5rem;
            color: #333;
            text-transform: uppercase;
        }

        .our-products .section-title h1 {
            font-size: 2.5rem;
            color: #007bff; /* Main theme color */
        }

        /* Card Styles */
        .our-products .card {
            border: none; /* Remove default border */
            border-radius: 8px; /* Rounded corners */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth scaling effect */
            overflow: hidden; /* To ensure rounded corners are applied to the image */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            height: 350px; /* Fixed height for all cards */
            display: flex; /* Use flexbox to align content */
            flex-direction: column; /* Arrange items in a column */
            justify-content: space-between; /* Distribute space between items */
                }
                /* Ensure the content within the card is centered */
        .our-products .card-body {
            display: flex; /* Use flexbox for alignment */
            flex-direction: column; /* Stack content vertically */
            justify-content: center; /* Center content vertically */
            height: 100%; /* Make sure it takes full height of the card */
        }

        .our-products .card img {
            border-radius: 8px 8px 0 0; /* Rounded corners for the image */
            transition: transform 0.3s ease; /* Smooth image scaling */
            height: 250px; /* Fixed height for images */
            object-fit: cover; /* Maintain aspect ratio and cover area */
        }


        /* Hover Effect */
        .our-products .card:hover {
            transform: scale(1.05); /* Enlarge the card */
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.2); /* Darker shadow on hover */
        }

        /* Modal Video Styles */
        .modal-content {
            border-radius: 8px; /* Rounded corners for modal */
        }

        .modal-header {
            border-bottom: none; /* Remove default border */
        }

        .modal-body {
            padding: 0; /* Remove padding for a better fit of the video */
        }

        /* Explore More Button Styles */
        .our-products .btn-primary {
            background-color: #007bff; /* Match the theme color */
            border-color: #007bff; /* Match the theme color */
            padding: 10px 20px; /* Add padding */
            font-size: 1.1rem; /* Slightly larger font */
            transition: background-color 0.3s ease; /* Smooth transition for hover */
        }

        .our-products .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        /* Scroll Animation */
        .wow {
            visibility: hidden;
        }

        .wow.fadeInUp {
            visibility: visible;
            animation-name: fadeInUp;
            animation-duration: 0.5s;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .our-products .card {
                margin-bottom: 30px; /* Space between cards on mobile */
            }

            .our-products .section-title h1 {
                font-size: 2rem; /* Smaller title on mobile */
            }
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/indigi_logo.jpg') }}" alt="Indigi Logo" width="120">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item me-5"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item me-5"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item me-5"><a class="nav-link" href="#">Products</a></li>
                    <li class="nav-item me-5"><a class="nav-link" href="#">Service</a></li>
                    <li class="nav-item me-5"><a class="nav-link" href="#">Portfolio</a></li>
                    <li class="nav-item me-5"><a class="nav-link" href="#">Blog</a></li>
                    <li class="nav-item me-5"><a class="nav-link" href="#">Gallery</a></li>
                    <li class="nav-item me-5"><a class="nav-link" href="#">Career</a></li>
                    <li class="nav-item me-5"><a class="nav-link" href="#">Contact</a></li>
                </ul>
                <!-- Search form -->
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>

    <!-- Carousel Section (Hero Section) -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- First Slide -->
            <div class="carousel-item active" style="background-image: url('{{ asset('images/team6.jpg') }}');">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                    <h1>INNOVATE, INTEGRATE, ELEVATE</h1>
                    <p>Powered by SAP, Delivered by Indigi.</p>
                    <a href="#" class="btn">Get started free</a>
                </div>
            </div>

            <!-- Second Slide -->
            <div class="carousel-item" style="background-image: url('{{ asset('images/S4HANA.jpg') }}');">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                     <h1>EMBRACING DIGITAL TRANSFORMATION</h1>
                    <p>Leading the Future with Cutting-edge Solutions.</p> 
                    <a href="#" class="btn">Explore Solutions</a>
                </div>
            </div>

            <!-- Third Slide -->
            <div class="carousel-item" style="background-image: url('{{ asset('images/rws.jpg') }}');">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                    <h1>DRIVING INNOVATION</h1>
                    <p>Empowering Businesses Worldwide.</p>
                    <a href="#" class="btn">Learn More</a>
                </div>
            </div>

            <!-- Fourth Slide -->
            <div class="carousel-item" style="background-image: url('{{ asset('images/SBBD.jpg') }}');">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                    <h1>BUILDING STRONGER TEAMS</h1>
                    <p>Your Partners in Success.</p>
                    <a href="#" class="btn">Join Us</a>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <!-- Section Title with Animation -->
                    <div class="section-title position-relative pb-3 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">The Best SAP Solutions with 6 Years of Experience</h1>
                    </div>
                    <!-- Paragraph Text with Animation -->
                    <p class="mb-4 wow fadeInUp" data-wow-delay="0.4s">At Indigi Consulting, we specialize in delivering top-notch SAP solutions, support, and custom ERP software tailored to your business needs. Our team of experts is dedicated to ensuring seamless integration and exceptional service.</p>
                    <div class="row g-0 mb-3">
                        <!-- Feature Points with ZoomIn Animation -->
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.5s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Best In The Town</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <!-- Call to Action Button with BounceIn Animation -->
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.7s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+91-8586 0184 41</h4>
                        </div>
                    </div>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow bounceIn" data-wow-delay="0.9s">Request A Quote</a>
                </div>
                <!-- Image with ZoomIn Animation -->
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100 wow zoomIn" data-wow-delay="0.6s">
                        <img class="position-absolute w-100 h-100 rounded" src="images\about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facts Section -->
    <div class="container-fluid facts">
        <div class="container">
            <div class="row gx-4 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="fact-box" style="background-color: #00b7c2;">
                        <div class="fact-icon">
                            <i class="fa fa-users fa-2x"></i>
                        </div>
                        <h5>Happy Clients</h5>
                        <h1 class="counter" data-count="50">0+</h1> <!-- Added + sign -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fact-box" style="background-color: #f57c20;">
                        <div class="fact-icon">
                            <i class="fa fa-check fa-2x"></i>
                        </div>
                        <h5>Completed Projects</h5>
                        <h1 class="counter" data-count="100">0+</h1> <!-- Added + sign -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fact-box" style="background-color: #0d6efd;">
                        <div class="fact-icon">
                            <i class="fa fa-award fa-2x"></i>
                        </div>
                        <h5>Industry Verticals</h5>
                        <h1 class="counter" data-count="15">0+</h1> <!-- Added + sign -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fact-box" style="background-color: #6f42c1;">
                        <div class="fact-icon">
                            <i class="fa fa-clock fa-2x"></i>
                        </div>
                        <h5>Years of Experience</h5>
                        <h1 class="counter" data-count="6">0+</h1> <!-- Added + sign -->
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- Our Products Section -->
<!-- Our Products Section -->
<div class="container our-products">
    <div class="section-title text-center">
        <h5>Our Products</h5>
        <h1>Innovative Solutions for Your Business</h1>
    </div>
    <div class="row g-4">
        <!-- Product Card 1: Rise with SAP -->
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="0.5s">
            <div class="card" data-bs-toggle="modal" data-bs-target="#videoModal1">
                <img src="{{ asset('images/rws.jpg') }}" class="card-img-top" alt="Rise with SAP">
                <div class="card-body">
                    <h5 class="card-title">Rise with SAP</h5>
                    <p class="card-text">Transform your business with Rise with SAP solutions.</p>
                </div>
            </div>
        </div>
        <!-- Product Card 2: S4HANA -->
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s">
            <div class="card" data-bs-toggle="modal" data-bs-target="#videoModal2">
                <img src="{{ asset('images/S4HANA.jpg') }}" class="card-img-top" alt="S4HANA">
                <div class="card-body">
                    <h5 class="card-title">S4HANA</h5>
                    <p class="card-text">Experience the power of S4HANA for your enterprise.</p>
                </div>
            </div>
        </div>
        <!-- Product Card 3: SAP Business ByDesign -->
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s">
            <div class="card" data-bs-toggle="modal" data-bs-target="#videoModal3">
                <img src="{{ asset('images/SBBD.jpg') }}" class="card-img-top" alt="SAP Business ByDesign">
                <div class="card-body">
                    <h5 class="card-title">SAP Business ByDesign</h5>
                    <p class="card-text">A complete ERP solution for fast-growing businesses.</p>
                </div>
            </div>
        </div>
        <!-- Product Card 4: Android Web Development -->
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
            <div class="card" data-bs-toggle="modal" data-bs-target="#videoModal4">
                <img src="{{ asset('images/A&Wd.jpg') }}" class="card-img-top" alt="Android Web Development">
                <div class="card-body">
                    <h5 class="card-title">Android Web Development</h5>
                    <p class="card-text">Get cutting-edge Android web solutions.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Explore More Button -->
    <div class="text-center mt-4">
        <a href="/products" class="btn btn-primary">Explore More</a>
    </div>
</div>

<!-- Modals for Videos -->
<!-- Modal for Rise with SAP -->
<div class="modal fade" id="videoModal1" tabindex="-1" aria-labelledby="videoModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel1">Rise with SAP</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&controls=1&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for S4HANA -->
<div class="modal fade" id="videoModal2" tabindex="-1" aria-labelledby="videoModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel2">S4HANA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="315" src="https://youtu.be/G1SvFduB33Y" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for SAP Business ByDesign -->
<div class="modal fade" id="videoModal3" tabindex="-1" aria-labelledby="videoModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel3">SAP Business ByDesign</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&controls=1&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Android Web Development -->
<div class="modal fade" id="videoModal4" tabindex="-1" aria-labelledby="videoModalLabel4" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel4">Android Web Development</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&controls=1&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

    {{-- end of product--}}
    <!-- Footer -->
    <footer class="text-center p-4">
        <p>&copy; 2024 Indigi Consulting. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and Bootstrap Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.counterup/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-waypoints/2.0.3/jquery.waypoints.min.js"></script>
    <!-- Animate.css and WOW.js for Animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <script>
        new WOW().init();
    </script>
        <!-- Counting Animation Script -->
    <script>
    function animateCounters() {
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-count');
                const count = +counter.innerText.slice(0, -1); // Remove the + for counting
                const increment = Math.ceil(target / 200); // Adjust the increment speed here
                if (count < target) {
                    counter.innerText = count + increment > target ? target + '+' : count + increment + '+'; // Add + after the number
                    setTimeout(updateCount, 1); // Adjust speed of counting
                } else {
                    counter.innerText = target + '+'; // Ensure it ends at target with +
                }
            };
            updateCount();
        });
    }

    window.addEventListener('load', animateCounters); // Start counting when the page loads
    </script>

</body>
</html>
