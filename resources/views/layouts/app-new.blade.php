<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'INDIGI')</title>

    <!-- Include Global CSS -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">

    <!-- Add Additional Styles -->
    @stack('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('css/services.css') }}" rel="stylesheet">
    <link href="{{ asset('css/learn_more.css') }}" rel="stylesheet">
    <link href="{{ asset('css/review.css') }}" rel="stylesheet">
    <link href="{{ asset('css/view_solutions.css') }}" rel="stylesheet">
    <link href="{{ asset('css/view_services.css') }}" rel="stylesheet">
    <!-- Add Favicon (Optional) -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>
<body>
    <!-- Navbar Section -->
    @include('layouts.navbar') 

    <!-- Main Content Section -->
    <main class="container">
        @yield('content')
    </main>

    <!-- Footer Section -->
    @include('layouts.footer') 

    <!-- Include Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Add Additional Scripts -->
    @stack('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- script for the index page -->
    <script src="{{ asset('js/home.js') }}"></script> 

    <!-- script for the map  -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCQw6Ml9RSra-m29ycAfi8WPMeN8NkcXg&callback=initMap">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
