<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Indigi Consulting')</title>
    
    <!-- Add your styles here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <!-- Add external libraries like Bootstrap or any custom CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    @yield('head') <!-- Allows for page-specific styles -->
</head>
<body>

    <!-- Navbar included from Blade file -->
    @include('home_sections.navbar')

    <!-- Main content section -->
    <main class="py-4">
        <div class="container">
            @yield('content') <!-- Main content will be injected here -->
        </div>
    </main>

    <!-- Footer included from Blade file -->
    @include('home_sections.footer')

    <!-- Add scripts here -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts') <!-- Allows for page-specific scripts -->
</body>
</html>
