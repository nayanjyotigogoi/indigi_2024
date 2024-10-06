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
    </style>
</head>
<body>

    
    @include('home_sections.navbar')

    <main>
    
    @include('home_sections.hero')
    @include('home_sections.clientlogo')
    @include('home_sections.about')
    @include('home_sections.facts')
    @include('home_sections.products')
    @include('home_sections.services')
    @include('home_sections.testimonials')
    
    
    </main>
        
    @include('home_sections.footer')
   
    <!-- Bootstrap JS and Bootstrap Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.counterup/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-waypoints/2.0.3/jquery.waypoints.min.js"></script>

    <!-- Animate.css and WOW.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <script>
        new WOW().init();
    </script>
   
</body>
</html>
