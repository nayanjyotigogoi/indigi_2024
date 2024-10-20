
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
                <li class="nav-item me-5"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item me-5"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item me-5"><a class="nav-link" href="{{ route('products') }}">Products</a></li>
                <li class="nav-item me-5"><a class="nav-link" href="{{ route('service') }}">Service</a></li>
                <li class="nav-item me-5"><a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a></li>
                <li class="nav-item me-5"><a class="nav-link" href="{{ route('gallery') }}">Gallery</a></li>
                <li class="nav-item me-5"><a class="nav-link" href="{{ route('career') }}">Career</a></li>
                <li class="nav-item me-5"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
            </ul>


                <!-- Search form -->
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
