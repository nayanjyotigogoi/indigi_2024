<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        /* General styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        /* Navbar container */
        nav {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
            transition: background-color 0.3s ease-in-out;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        /* Logo styling */
        .navbar-brand img {
            width: 128px;
            display: block;
        }

        /* Toggle button for mobile */
        .navbar-toggler {
            display: none;
            padding: 8px 12px;
            background-color: #e5e7eb;
            border: 1px solid #d1d5db;
            border-radius: 5px;
            cursor: pointer;
        }

        .navbar-toggler span {
            display: block;
            width: 20px;
            height: 2px;
            background-color: #4b5563;
            margin: 3px 0;
        }

        /* Navbar menu */
        .navbar-menu {
            display: flex;
            gap: 15px;
        }

        .nav-item {
            list-style: none;
        }

        .nav-link {
            text-decoration: none;
            color: #374151;
            font-weight: 500;
            text-transform: uppercase;
            padding: 8px 12px;
            transition: color 0.3s ease-in-out, border-bottom 0.3s ease-in-out;
        }

        .nav-link:hover {
            color: #FFD700;
            border-bottom: 2px solid #FFD700;
        }

        .nav-link.active {
            border-bottom: 2px solid #FFD700;
        }

        /* Responsive styles */
        @media screen and (max-width: 768px) {
            .navbar-toggler {
                display: block;
            }

            .navbar-menu {
                display: none;
                flex-direction: column;
                gap: 10px;
                background-color: white;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                padding: 10px 20px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .navbar-menu.active {
                display: flex;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="nav-container">
            <!-- Logo -->
            <a class="navbar-brand" href="/">
                <img src="images/indigi_logo.jpg" alt="Indigi Logo">
            </a>

            <!-- Toggle button for mobile -->
            <button class="navbar-toggler" onclick="toggleNavbar()">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- Navbar Menu -->
            <ul class="navbar-menu" id="navbarMenu">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/services">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/career">Career</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact-us">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <script>
            document.addEventListener("DOMContentLoaded", function () {
        // Get the current URL path
        const currentPath = window.location.pathname;
        
        // Get all nav links
        const navLinks = document.querySelectorAll(".nav-link");

        navLinks.forEach(link => {
            if (link.getAttribute("href") === currentPath) {
                link.classList.add("active");
            } else {
                link.classList.remove("active");
            }
        });
    });
    </script>
</body>
</html>
