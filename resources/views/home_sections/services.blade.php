<style>
/* General Styling */
        .services-wrapper {
            display: flex;
            overflow-x: auto;
            overflow-y: hidden;  /* Ensure no vertical scrolling occurs */
            scroll-behavior: smooth;
            padding-bottom: 1rem;
            -webkit-overflow-scrolling: touch;
            scroll-snap-type: x mandatory;
            gap: 35px;
            justify-content: flex-start; /* Align cards to the left */
            height: 600px;  /* Adjust wrapper height to fit the full card */
            align-items: center;  /* Vertically center cards in the container */
            padding-left: 20px; /* Add padding to the left */
        }

        .service-card {
            flex: 0 0 300px; /* Set a fixed width for consistent behavior */
            height: 500px;  /* Ensure this fits well within the container height */
            transition: transform 0.5s ease;
            scroll-snap-align: center; /* Change to center to improve visibility */
            position: relative;
            transform-origin: center center;
            border-radius: 10px; /* Rounded corners */
            color: #333; /* Text color */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Active and Neighbor Scaling */
        .service-card.active {
            transform: scale(1.1);
        }

        .service-card.neighbor {
            transform: scale(1.05);
        }

        /* Remove Scrollbar */
        .services-wrapper::-webkit-scrollbar {
            display: none;
        }

        /* Button Styling */
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

        .service-link {
            color: inherit; /* Inherit color from parent */
            text-decoration: none; /* Remove underline */
            transition: color 0.3s ease; /* Add a transition effect */
        }

        .service-link:hover {
            color: #0056b3; /* Change color on hover */
        }
        /* Responsive Design */
        @media (max-width: 768px) {
            .service-card {
                flex: 0 0 90%;
                height: 450px;  /* Adjust height for smaller screens */
            }
            .services-wrapper {
                height: 500px;  /* Adjust wrapper height for smaller screens */
            }
        }

        @media (max-width: 576px) {
            .service-card {
                flex: 0 0 95%;
                height: 400px;  /* Adjust height for the smallest screens */
            }
            .services-wrapper {
                height: 450px;  /* Adjust wrapper height for the smallest screens */
            }
        }
</style>

<!-- Services Section -->
<section id="services" class="services-section py-5">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h5>Our Services</h5>
            <h1>Explore Our Services</h1>
        </div>

        <div class="services-wrapper">
            <!-- Service 1: SAP Consulting -->
            <div class="service-card p-4 " style="background-color: #f8d7da;">
                <div class="icon mb-3">
                    <i class="fas fa-handshake fa-3x"></i>
                </div>
                <h3 class="card-title">
                    <a href="#sap-consulting" class="service-link">SAP Consulting</a>
                </h3>
                <p class="card-text">Whether you're a well-established corporate or a small start-up, get Indigi's expert SAP consulting services.</p>
                <a href="#sap-consulting" class="btn btn-primary">Choose Service</a>
            </div>
            
            <!-- Service 2: SAP Implementation -->
            <div class="service-card p-4 bg-info">
                <div class="icon mb-3">
                    <i class="fas fa-rocket fa-3x"></i>
                </div>
                <h3 class="card-title">
                    <a href="#sap-implementation" class="service-link">SAP Implementation</a>
                </h3>
                <p class="card-text">Accelerate your business growth exponentially with our SAP implementation services.</p>
                <a href="#sap-implementation" class="btn btn-primary">Choose Service</a>
            </div>

            <!-- Service 3: SAP Support -->
            <div class="service-card p-4 " style="background-color: #C0C78C;">
                <div class="icon mb-3">
                    <i class="fas fa-life-ring fa-3x"></i>
                </div>
                <h3 class="card-title">
                    <a href="#sap-support" class="service-link">SAP Support</a>
                </h3>
                <p class="card-text">Indigi's SAP Support can help your business with transformation and continuous process improvement.</p>
                <a href="#sap-support" class="btn btn-primary">Choose Service</a>
            </div>

            <!-- Additional Service 4: CUSTOM ERP SOFTWARE -->
            <div class="service-card p-4 " style="background-color: #C4D7FF;">
                <div class="icon mb-3">
                    <i class="fas fa-code fa-3x"></i>
                </div>
                <h3 class="card-title">
                    <a href="#custom-development" class="service-link">CUSTOM ERP SOFTWARE</a>
                </h3>
                <p class="card-text">Get tailored solutions with our custom ERP development to meet your unique business needs.</p>
                <a href="#custom-development" class="btn btn-primary">Choose Service</a>
            </div>

            <!-- Additional Service 5:SAP UPGRADATION -->
            <div class="service-card p-4 " style="background-color: #d1ecf1;">
                <div class="icon mb-3">
                    <i class="fas fa-arrow-up fa-3x"></i>
                </div>
                <h3 class="card-title">
                    <a href="#cloud-solutions" class="service-link">SAP UPGRADATION</a>
                </h3>
                <p class="card-text">Elevate your enterprise with seamless SAP Upgradation! Stay ahead of the competition and unlock new features, enhanced performance, and improved user experience.</p>
                <a href="#cloud-solutions" class="btn btn-primary">Choose Service</a>
            </div>

            <!-- Additional Service 5:Business Process Automation -->
            <div class="service-card p-4 " style="background-color: #d4edda;">
                <div class="icon mb-3">
                    <i class="fas fa-robot fa-3x"></i>
                </div>
                <h3 class="card-title">
                    <a href="#cloud-solutions" class="service-link">Business Process Automation</a>
                </h3>
                <p class="card-text">Transform efficiency into excellence with Business Process Automation! Streamline your workflows, reduce manual tasks, and empower your team to focus on what matters most. Automate today for a smarter tomorrow!.</p>
                <a href="#cloud-solutions" class="btn btn-primary">Choose Service</a>
            </div>
        </div>

        <!-- Explore More Button -->
        <div class="text-center mt-5">
            <a href="#explore-more" class="btn btn-primary">Explore More</a>
        </div>
    </div>
</section>
<!-- JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const servicesWrapper = document.querySelector('.services-wrapper');
        const serviceCards = document.querySelectorAll('.service-card');

        // Function to check which card is in the center of the viewport
        function handleScroll() {
            serviceCards.forEach(card => card.classList.remove('active', 'neighbor'));

            serviceCards.forEach((card, index) => {
                const cardRect = card.getBoundingClientRect();
                const wrapperRect = servicesWrapper.getBoundingClientRect();

                if (cardRect.left + cardRect.width / 2 >= wrapperRect.left + wrapperRect.width / 2 - 100 &&
                    cardRect.left + cardRect.width / 2 <= wrapperRect.left + wrapperRect.width / 2 + 100) {
                    card.classList.add('active');

                    if (serviceCards[index - 1]) {
                        serviceCards[index - 1].classList.add('neighbor');
                    }
                    if (serviceCards[index + 1]) {
                        serviceCards[index + 1].classList.add('neighbor');
                    }
                }
            });
        }

        servicesWrapper.addEventListener('scroll', handleScroll);
        handleScroll();
    });
</script>
