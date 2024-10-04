<style>
    /* Section Title */
    .section-title h5 {
        color: #6c757d;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 1px;
    }

    .section-title h1 {
        font-weight: 700;
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
        color: #333;
    }

    /* Service Card Styling */
    .card {
        border: none;
        border-radius: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #fff;
        position: relative;
        z-index: 1;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    /* Icons Styling */
    .icon {
        color: #007bff;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: #007bff;
    }

    .card-text {
        font-size: 1rem;
        color: #6c757d;
        margin-bottom: 20px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 10px 20px;
        font-size: 1rem;
        border-radius: 30px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    /* Explore More Button */
    .text-center .btn-primary {
        padding: 12px 36px;
        font-size: 1.2rem;
        font-weight: 600;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .card-title {
            font-size: 1.3rem;
        }

        .card-text {
            font-size: 0.9rem;
        }

        .btn-primary {
            padding: 8px 16px;
            font-size: 0.9rem;
        }

        .icon {
            font-size: 2.5rem;
        }
    }
</style>
<section id="services" class="services-section py-5">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h5>Our Services</h5>
            <h1>Explore Our Expertise</h1>
        </div>
        <div class="row text-center">
            <!-- Service 1: SAP Consulting -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card p-4 h-100">
                    <div class="icon mb-3">
                        <i class="fas fa-handshake fa-3x"></i> <!-- Icon for SAP Consulting -->
                    </div>
                    <h3 class="card-title">SAP Consulting</h3>
                    <p class="card-text">Either you're a well established corporate, or a small start-up, get Indigi's expert SAP consulting.</p>
                    <a href="#sap-consulting" class="btn btn-primary">Choose Service</a>
                </div>
            </div>
            <!-- Service 2: SAP Implementation -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card p-4 h-100">
                    <div class="icon mb-3">
                        <i class="fas fa-rocket fa-3x"></i> <!-- Icon for SAP Implementation -->
                    </div>
                    <h3 class="card-title">SAP Implementation</h3>
                    <p class="card-text">Accelerate your business growth exponentially by choosing our SAP implementation services.</p>
                    <a href="#sap-implementation" class="btn btn-primary">Choose Service</a>
                </div>
            </div>
            <!-- Service 3: SAP Support -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card p-4 h-100">
                    <div class="icon mb-3">
                        <i class="fas fa-life-ring fa-3x"></i> <!-- Icon for SAP Support -->
                    </div>
                    <h3 class="card-title">SAP Support</h3>
                    <p class="card-text">Your company can benefit from Indigi's SAP Support for business transformation, continuous process improvement.</p>
                    <a href="#sap-support" class="btn btn-primary">Choose Service</a>
                </div>
            </div>
            <!-- Add more services similarly -->
        </div>
        <!-- Explore More Button -->
        <div class="text-center mt-5">
            <a href="#explore-more" class="btn btn-primary">Explore More</a>
        </div>
    </div>
</section>
