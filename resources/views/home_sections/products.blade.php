<style>
    /* Our Products Section */
    .our-products {
        max-width: 100%; /* fit with the screen size */
        position: relative; /* Positioning for the pseudo-elements */
        padding: 60px 100px;
        background-color: #f9f9f9;
        overflow: hidden; /* Prevent overflow from animations */
        z-index: 1; /* Ensure this section stays above background elements */
    }

    /* Background Elements */
    .our-products::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.1)), /* Faded gradient */
                    url('images/pattern.jpg') no-repeat center; /* Background pattern */
        background-size: cover;
        z-index: -1; /* Place behind the product cards */
        opacity: 0.5; /* Adjust opacity to blend */
        pointer-events: none; /* Prevent interaction */
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
        border: none;
        border-radius: 8px;
        transition: all 0.4s ease;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        position: relative;
        background: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
        height: 400px; /* Default height without hover */
        animation: move 10s ease infinite; /* Background animation */
    }

    /* Hover Effects: Expand Description */
    .our-products .card:hover {
        height: 500px; /* Expands on hover */
        box-shadow: 0 8px 40px rgba(0, 123, 255, 0.3);
        background: linear-gradient(120deg, #f093fb 0%, #f5576c 100%);
    }

    /* Card Body - Only show name initially */
    .our-products .card-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        transition: all 0.4s ease;
        opacity: 0; /* Hidden by default */
        transform: translateY(20px); /* Moved down a bit */
    }

    /* Show card content on hover */
    .our-products .card:hover .card-body {
        opacity: 1;
        transform: translateY(0); /* Moves up into view */
    }

    .our-products .card img {
        width: 100%;
        height: 350px;
        object-fit: cover;
        transition: all 0.4s ease;
    }

    .our-products .card:hover img {
        height: 180px; /* Shrinks image when hovered */
    }

    /* Hide description text initially */
    .our-products .card .card-text {
        opacity: 0;
        max-height: 0;
        transition: all 0.4s ease;
        overflow: hidden;
    }

    /* Show description when hovered */
    .our-products .card:hover .card-text {
        opacity: 1;
        max-height: 100px; /* Enough to display text */
        transition-delay: 0.2s;
    }

    /* Product Tag */
    .our-products .product-tag {
        position: absolute;
        top: 10px;
        left: 10px;
        background-color: #ff4757;
        color: #fff;
        padding: 5px 10px;
        font-size: 0.8rem;
        border-radius: 4px;
        text-transform: uppercase;
        font-weight: bold;
    }

    /* Button Pulse Effect */
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 10px 20px;
        font-size: 1.1rem;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        animation: pulse 1.5s infinite;
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.4);
        }
        70% {
            box-shadow: 0 0 0 10px rgba(0, 123, 255, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(0, 123, 255, 0);
        }
    }

    /* Background Animation */
    @keyframes move {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }

    /* Modal Video Styles */
    .modal-content {
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    .modal-header {
        border-bottom: none;
    }

    .modal-body {
        padding: 0;
    }

    .modal.show .modal-dialog {
        transform: scale(1.05);
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .our-products .card {
            margin-bottom: 30px;
        }

        .our-products .section-title h1 {
            font-size: 2rem;
        }
    }
</style>

<!-- Our Products Section -->
<div class="container our-products">
    <div class="section-title text-center">
        <h5>Our Products</h5>
        <h1>Innovative Solutions for Your Business</h1>
    </div>
    <div class="row g-4">
        <!-- Product Card 1: Rise with SAP -->
        <div class="col-lg-3 col-md-6">
            <div class="card" data-bs-toggle="modal" data-bs-target="#videoModal1">
                <div class="product-tag">New</div>
                <img src="{{ asset('images/rws.jpg') }}" class="card-img-top" alt="Rise with SAP">
                <div class="card-body">
                    <h5 class="card-title">Rise with SAP</h5>
                    <p class="card-text">Transform your business with Rise with SAP solutions.</p>
                </div>
            </div>
        </div>
        <!-- Product Card 2: S4HANA -->
        <div class="col-lg-3 col-md-6">
            <div class="card" data-bs-toggle="modal" data-bs-target="#videoModal2">
                <div class="product-tag">Featured</div>
                <img src="{{ asset('images/S4HANA.jpg') }}" class="card-img-top" alt="S4HANA">
                <div class="card-body">
                    <h5 class="card-title">S4HANA</h5>
                    <p class="card-text">Experience the power of S4HANA for your enterprise.</p>
                </div>
            </div>
        </div>
        <!-- Product Card 3: SAP Business ByDesign -->
        <div class="col-lg-3 col-md-6">
            <div class="card" data-bs-toggle="modal" data-bs-target="#videoModal3">
                <img src="{{ asset('images/SBBD.jpg') }}" class="card-img-top" alt="SAP Business ByDesign">
                <div class="card-body">
                    <h5 class="card-title">SAP Business ByDesign</h5>
                    <p class="card-text">A complete ERP solution for fast-growing businesses.</p>
                </div>
            </div>
        </div>
        <!-- Product Card 4: Android Web Development -->
        <div class="col-lg-3 col-md-6">
            <div class="card" data-bs-toggle="modal" data-bs-target="#videoModal4">
                <img src="{{ asset('images/A&Wd.jpg') }}" class="card-img-top" alt="Android Web Development">
                <div class="card-body">
                    <h5 class="card-title">Android, Web Development</h5>
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

<!-- Modals for Video -->
<div class="modal fade" id="videoModal1" tabindex="-1" aria-labelledby="videoModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel1">Rise with SAP</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/BHriWZ5xTqM?autoplay=1&controls=1&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="videoModal2" tabindex="-1" aria-labelledby="videoModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel2">S4HANA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/N3AkSS5hXMA?autoplay=1&controls=1&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="videoModal3" tabindex="-1" aria-labelledby="videoModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel3">SAP Business ByDesign</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/a3Z7zEc7AXQ?autoplay=1&controls=1&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="videoModal4" tabindex="-1" aria-labelledby="videoModalLabel4" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel4">Android, Web Development</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/qRmcpe_D10Q?autoplay=1&controls=1&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<script>
    // Optional: Trigger autoplay for modals on show
    $('#videoModal1, #videoModal2, #videoModal3, #videoModal4').on('shown.bs.modal', function (e) {
        $(this).find('iframe').attr('src', function (i, val) {
            return val + "&autoplay=1";
        });
    }).on('hide.bs.modal', function (e) {
        $(this).find('iframe').attr('src', function (i, val) {
            return val.replace("&autoplay=1", "");
        });
    });
</script>
