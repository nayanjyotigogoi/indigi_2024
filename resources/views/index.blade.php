<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indigi Consulting</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
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

    <!-- Footer -->
    <footer class="text-center p-4">
        <p>&copy; 2024 Indigi Consulting. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and Bootstrap Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.js"></script>
</body>
</html>
