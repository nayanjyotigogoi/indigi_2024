<!-- Navbar -->
<nav class="bg-white shadow-md transition-colors duration-300 ease-in-out relative">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/indigi_logo.jpg') }}" alt="Indigi Logo" class="w-32">
        </a>
        <button class="navbar-toggler block lg:hidden px-2 py-1 text-gray-600 border border-gray-300 rounded-md" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon block w-5 h-0.5 bg-gray-600 mb-1"></span>
            <span class="navbar-toggler-icon block w-5 h-0.5 bg-gray-600 mb-1"></span>
            <span class="navbar-toggler-icon block w-5 h-0.5 bg-gray-600"></span>
        </button>
        <!-- Navbar Menu -->
        <div class="lg:flex lg:justify-end lg:space-x-6 hidden" id="navbarNav">
            <ul class="navbar-nav flex flex-col lg:flex-row gap-4 lg:gap-6">
                <li class="nav-item">
                    <a class="nav-link text-gray-700 uppercase font-bold py-2 px-4 transition-colors duration-300 hover:text-[#147DC0] hover:border-b-4 border-transparent {{ Request::is('/') ? 'border-b-4 border-yellow-500' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="text-gray-700 uppercase font-bold py-2 px-4 transition-colors duration-300 hover:text-[#147DC0] hover:border-b-4 border-transparent {{ Request::is('about') ? 'border-b-4 border-yellow-500' : '' }}" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="text-gray-700 uppercase font-bold py-2 px-4 transition-colors duration-300 hover:text-[#147DC0] hover:border-b-4 border-transparent {{ Request::is('products') ? 'border-b-4 border-yellow-500' : '' }}" href="{{ route('products') }}">Products</a>
                </li>
                <li class="nav-item relative group">
                    <a class="text-gray-700 uppercase font-bold py-2 px-4 transition-colors duration-300 hover:text-[#147DC0] hover:border-b-4 border-transparent {{ Request::is('services') ? 'border-b-4 border-yellow-500' : '' }}" href="{{ route('services.index') }}">Service</a>
                </li>
                <li class="nav-item">
                    <a class="text-gray-700 uppercase font-bold py-2 px-4 transition-colors duration-300 hover:text-[#147DC0] hover:border-b-4 border-transparent {{ Request::is('portfolio') ? 'border-b-4 border-yellow-500' : '' }}" href="{{ route('portfolio') }}">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="text-gray-700 uppercase font-bold py-2 px-4 transition-colors duration-300 hover:text-[#147DC0] hover:border-b-4 border-transparent {{ Request::is('gallery') ? 'border-b-4 border-yellow-500' : '' }}" href="{{ route('gallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="text-gray-700 uppercase font-bold py-2 px-4 transition-colors duration-300 hover:text-[#147DC0] hover:border-b-4 border-transparent {{ Request::is('career') ? 'border-b-4 border-yellow-500' : '' }}" href="{{ route('career') }}">Career</a>
                </li>
                <li class="nav-item">
                    <a class="text-gray-700 uppercase font-bold py-2 px-4 transition-colors duration-300 hover:text-[#147DC0] hover:border-b-4 border-transparent {{ Request::is('contact') ? 'border-b-4 border-yellow-500' : '' }}" href="{{ route('contact.show') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
