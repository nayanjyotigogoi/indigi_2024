<style>
    /* Navbar styles */
    nav {
        background-color: #fff; /* Vibrant background color */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
        transition: background-color 0.3s ease; /* Smooth transition for background color */
    }

    nav a {
        padding: 0.75rem 1rem; /* Padding for better touch targets */
        color: white; /* Text color */
        text-transform: uppercase; /* Uppercase text for a bold look */
        font-weight: bold; /* Bold font weight */
        border-bottom: 3px solid transparent; /* Default border for links */
        transition: border-color 0.3s ease, color 0.3s ease; /* Transition effects */
    }

    nav a:hover {
        color: #FFD700; /* Gold color on hover */
        border-bottom: 3px solid #FFD700; /* Underline effect on hover */
    }

    nav a.active {
        border-bottom: 3px solid #FFD700; /* Active page underline */
    }

    /* Responsive styles */
    @media (max-width: 768px) {
        nav {
            background-color: #007BFF; /* Consistent background for mobile */
        }

        nav .navbar-collapse {
            background-color: #007BFF; /* Background for collapsed navbar */
        }
        
        nav a {
            padding: 0.75rem 1rem; /* Adjust padding for mobile */
            border-bottom: none; /* Remove underline for mobile */
        }

        nav .navbar-toggler {
            border: none; /* Remove border on toggler */
            background-color: transparent; /* Transparent background for the toggler */
        }

        nav .navbar-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='white' stroke-width='2' d='M5 7h20M5 15h20M5 23h20'/%3E%3C/svg%3E"); /* Custom white toggle icon */
        }
    }
</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/indigi_logo.jpg') }}" alt="Indigi Logo" width="120">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('products') ? 'active' : '' }}" href="{{ route('products') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('services') ? 'active' : '' }}" href="{{ route('services') }}">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('portfolio') ? 'active' : '' }}" href="{{ route('portfolio') }}">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('career') ? 'active' : '' }}" href="{{ route('career') }}">Career</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact.show') }}">Contact</a>
                </li>
            </ul>

            <!-- Search form -->
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 20px;">
            </form>
        </div>
    </div>
</nav>
