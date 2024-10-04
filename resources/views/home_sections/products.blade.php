<style>
    /* Our Products Section */
    .our-products {
        padding: 60px 0;
        background-color: #f9f9f9; /* Light background for contrast */
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
            border: none; /* Remove default border */
            border-radius: 8px; /* Rounded corners */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth scaling effect */
            overflow: hidden; /* To ensure rounded corners are applied to the image */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            height: 350px; /* Fixed height for all cards */
            display: flex; /* Use flexbox to align content */
            flex-direction: column; /* Arrange items in a column */
            justify-content: space-between; /* Distribute space between items */
                }
                /* Ensure the content within the card is centered */
        .our-products .card-body {
            display: flex; /* Use flexbox for alignment */
            flex-direction: column; /* Stack content vertically */
            justify-content: center; /* Center content vertically */
            height: 100%; /* Make sure it takes full height of the card */
        }

        .our-products .card img {
            border-radius: 8px 8px 0 0; /* Rounded corners for the image */
            transition: transform 0.3s ease; /* Smooth image scaling */
            height: 250px; /* Fixed height for images */
            object-fit: cover; /* Maintain aspect ratio and cover area */
        }


        /* Hover Effect */
        .our-products .card:hover {
            transform: scale(1.05); /* Enlarge the card */
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.2); /* Darker shadow on hover */
        }

        /* Modal Video Styles */
        .modal-content {
            border-radius: 8px; /* Rounded corners for modal */
        }

        .modal-header {
            border-bottom: none; /* Remove default border */
        }

        .modal-body {
            padding: 0; /* Remove padding for a better fit of the video */
        }

        /* Explore More Button Styles */
        .our-products .btn-primary {
            background-color: #007bff; /* Match the theme color */
            border-color: #007bff; /* Match the theme color */
            padding: 10px 20px; /* Add padding */
            font-size: 1.1rem; /* Slightly larger font */
            transition: background-color 0.3s ease; /* Smooth transition for hover */
        }

        .our-products .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        /* Scroll Animation */
        .wow {
            visibility: hidden;
        }

        .wow.fadeInUp {
            visibility: visible;
            animation-name: fadeInUp;
            animation-duration: 0.5s;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .our-products .card {
                margin-bottom: 30px; /* Space between cards on mobile */
            }

            .our-products .section-title h1 {
                font-size: 2rem; /* Smaller title on mobile */
            }
        }

        /* General Section Styling 
       .services-section {
    position: relative;
    background-color: #f0f8ff; 
    overflow: hidden;
}

 Asymmetrical Background Design 
.services-section::before {
    content: "";
    position: absolute;
    top: -30%;
    left: -20%;
    width: 120%;
    height: 120%;
    background: linear-gradient(135deg, #d6ecff 25%, transparent 25%, transparent 50%, #d6ecff 50%, #d6ecff 75%, transparent 75%, transparent);
    z-index: -1;
    transform: rotate(-5deg);
} */

</style>

<!-- Our Products Section -->
<div class="container our-products">
    <div class="section-title text-center">
        <h5>Our Products</h5>
        <h1>Innovative Solutions for Your Business</h1>
    </div>
    <div class="row g-4">
        <!-- Product Card 1: Rise with SAP -->
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="0.5s">
            <div class="card" data-bs-toggle="modal" data-bs-target="#videoModal1">
                <img src="{{ asset('images/rws.jpg') }}" class="card-img-top" alt="Rise with SAP">
                <div class="card-body">
                    <h5 class="card-title">Rise with SAP</h5>
                    <p class="card-text">Transform your business with Rise with SAP solutions.</p>
                </div>
            </div>
        </div>
        <!-- Product Card 2: S4HANA -->
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s">
            <div class="card" data-bs-toggle="modal" data-bs-target="#videoModal2">
                <img src="{{ asset('images/S4HANA.jpg') }}" class="card-img-top" alt="S4HANA">
                <div class="card-body">
                    <h5 class="card-title">S4HANA</h5>
                    <p class="card-text">Experience the power of S4HANA for your enterprise.</p>
                </div>
            </div>
        </div>
        <!-- Product Card 3: SAP Business ByDesign -->
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s">
            <div class="card" data-bs-toggle="modal" data-bs-target="#videoModal3">
                <img src="{{ asset('images/SBBD.jpg') }}" class="card-img-top" alt="SAP Business ByDesign">
                <div class="card-body">
                    <h5 class="card-title">SAP Business ByDesign</h5>
                    <p class="card-text">A complete ERP solution for fast-growing businesses.</p>
                </div>
            </div>
        </div>
        <!-- Product Card 4: Android Web Development -->
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
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

<!-- Modals for Videos -->
<!-- Modal for Rise with SAP -->
<div class="modal fade" id="videoModal1" tabindex="-1" aria-labelledby="videoModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel1">Rise with SAP</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&controls=1&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for S4HANA -->
<div class="modal fade" id="videoModal2" tabindex="-1" aria-labelledby="videoModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel2">S4HANA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="315" src="https://youtu.be/G1SvFduB33Y" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for SAP Business ByDesign -->
<div class="modal fade" id="videoModal3" tabindex="-1" aria-labelledby="videoModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel3">SAP Business ByDesign</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&controls=1&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Android Web Development -->
<div class="modal fade" id="videoModal4" tabindex="-1" aria-labelledby="videoModalLabel4" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel4">Android, Web Development</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&controls=1&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
   {{-- end of product--}}