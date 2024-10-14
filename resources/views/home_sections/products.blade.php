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
        opacity: 0; /* Hidden by default */
        transform: translateY(-30px); /* Moved up a bit */
        transition: opacity 0.6s ease, transform 0.6s ease; /* Transition for appearance */
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
        opacity: 0; /* Hidden by default */
        transform: translateY(20px); /* Moved down a bit */
        transition: opacity 0.6s ease, transform 0.6s ease; /* Transition for appearance */
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
    opacity: 1; /* Make the card body content visible by default */
    transform: translateY(0); /* Reset translate so the content is in place */
}
.our-products .card-body h5.card-title {
    font-size: 1.25rem;
    font-weight: bold;
    margin-bottom: 15px;
    color: #333; /* Add color for better contrast */
}

.our-products .card-body p.card-text {
    opacity: 0; /* Hide the description text initially */
    max-height: 0;
    transition: all 0.4s ease;
    overflow: hidden;
}

/* Show description on hover */
.our-products .card:hover .card-text {
    opacity: 1;
    max-height: 100px; /* Display the description text on hover */
    transition-delay: 0.2s;
}

/* Modal video styling */
.modal-body video {
    width: 100%;
    height: auto;
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

<!-- Include AOS CSS and JS in your head -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>

<!-- Our Products Section -->
<div class="our-products py-5" id="products">
    <div class="container">
        <h2 class="section-title text-center mb-4" data-aos="fade-up">Our Products</h2>
        <div class="row">
            <!-- Product Card 1 -->
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <img src="images/rws.jpg" class="card-img-top" alt="Rise with SAP">
                    <div class="card-body">
                        <!-- Product name visible by default -->
                        <h5 class="card-title">Rise with SAP</h5>
                        <!-- Description appears on hover -->
                        <p class="card-text">Transform your business processes with SAP.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal1">
                            Watch Video
                        </button>
                    </div>
                </div>
            </div>
            <!-- Product Card 2 -->
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                    <img src="images/S4HANA.jpg" class="card-img-top" alt="S4HANA">
                    <div class="card-body">
                        <h5 class="card-title">S4HANA</h5>
                        <p class="card-text">Innovate with real-time data insights.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal2">
                            Watch Video
                        </button>
                    </div>
                </div>
            </div>
            <!-- Product Card 3 -->
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card">
                    <img src="images/SBBD.jpg" class="card-img-top" alt="SAP Business ByDesign">
                    <div class="card-body">
                        <h5 class="card-title">SAP Business ByDesign</h5>
                        <p class="card-text">Cloud ERP for growing businesses.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal3">
                            Watch Video
                        </button>
                    </div>
                </div>
            </div>
            <!-- Product Card 4 -->
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card">
                    <img src="images/A&Wd.jpg" class="card-img-top" alt="Android & Web Development">
                    <div class="card-body">
                        <h5 class="card-title">Android & Web Development</h5>
                        <p class="card-text">Develop robust applications for web and mobile platforms.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal4">
                            Watch Video
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modals for each product video -->
<!-- Modal 1 -->
<div class="modal fade" id="videoModal1" tabindex="-1" aria-labelledby="videoModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel1">Rise with SAP Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <video controls>
                    <source src="public/video/risewithsap.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="videoModal2" tabindex="-1" aria-labelledby="videoModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel2">S4HANA Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <video controls>
                    <source src="public/video/s4hana.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="videoModal3" tabindex="-1" aria-labelledby="videoModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel3">SAP Business ByDesign Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <video controls>
                    <source src="public/video/sapbydesign.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>

<!-- Modal 4 -->
<div class="modal fade" id="videoModal4" tabindex="-1" aria-labelledby="videoModalLabel4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel4">Android & Web Development Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <video controls>
                    <source src="public/video/androidwebdev.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>

<script>
    // Initialize AOS
    AOS.init();

    // JavaScript to handle scroll animations for the products section
    window.addEventListener('scroll', function() {
        const sectionTitle = document.querySelector('.our-products .section-title');
        const cards = document.querySelectorAll('.our-products .card');

        // Check if the section is in view
        const sectionPosition = sectionTitle.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.2; // Adjust this value as needed

        if (sectionPosition < screenPosition) {
            sectionTitle.style.opacity = 1;
            sectionTitle.style.transform = 'translateY(0)';
            cards.forEach(card => {
                card.style.opacity = 1;
                card.style.transform = 'translateY(0)';
            });
        }
    });
</script>
