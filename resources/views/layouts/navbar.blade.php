<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Navbar</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f9f9f9;
    }

    nav {
      background-color: white;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      position: relative;
    }

    .nav-container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 20px;
    }

    .navbar-brand img {
      width: 128px;
    }

    .navbar-toggler {
      display: none;
      flex-direction: column;
      gap: 4px;
      cursor: pointer;
    }

    .navbar-toggler span {
      width: 24px;
      height: 3px;
      background-color: #374151;
      border-radius: 2px;
    }

    .navbar-menu {
      display: flex;
      gap: 20px;
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
      transition: 0.3s;
    }

    .nav-link:hover {
      color: #FFD700;
      border-bottom: 2px solid #FFD700;
    }

    .nav-link.active {
      border-bottom: 2px solid #FFD700;
    }

    /* Mobile Styles */
    @media (max-width: 768px) {
      .navbar-toggler {
        display: flex;
      }

      .navbar-menu {
        display: none;
        flex-direction: column;
        align-items: center; /* Center horizontally */
        text-align: center;   /* Center text */
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background-color: white;
        padding: 15px 20px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        z-index: 10;
      }

      .navbar-menu.active {
        display: flex;
      }
    }
  </style>
</head>

<body>
  <nav>
    <div class="nav-container">
      <a class="navbar-brand" href="/">
        <img src="{{ asset('images/indigi_logo.jpg') }}" alt="Indigi Logo">
      </a>

      <div class="navbar-toggler" id="navbarToggle">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <ul class="navbar-menu" id="navbarMenu">
        <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="/products">Solutions</a></li>
        <li class="nav-item"><a class="nav-link" href="/services">Service</a></li>
        <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="/career">Career</a></li>
        <li class="nav-item"><a class="nav-link" href="/contact-us">Contact</a></li>
      </ul>
    </div>
  </nav>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const toggleBtn = document.getElementById("navbarToggle");
      const menu = document.getElementById("navbarMenu");

      toggleBtn.addEventListener("click", () => {
        menu.classList.toggle("active");
      });

      // Highlight current page
      const currentPath = window.location.pathname;
      document.querySelectorAll(".nav-link").forEach(link => {
        if (link.getAttribute("href") === currentPath) {
          link.classList.add("active");
        } else {
          link.classList.remove("active");
        }
      });

      // Optional: Close menu on link click
      document.querySelectorAll(".navbar-menu .nav-link").forEach(link => {
        link.addEventListener("click", () => {
          menu.classList.remove("active");
        });
      });
    });
  </script>
</body>

</html>
