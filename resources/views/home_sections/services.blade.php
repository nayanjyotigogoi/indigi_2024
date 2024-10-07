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
    background: url('public/video/risewithsap.mp4') no-repeat center center; /* Placeholder for parallax effect */
    background-size: cover;
    position: relative;
}

/* Parallax Effect */
.services-section {
    position: relative;
    overflow: hidden;
}

.parallax {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1; /* Keep it behind content */
    background-image: url('images/parallax_service.jpg'); /* Replace with actual background image */
    background-attachment: fixed; /* Parallax effect */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Service Card Styling */
.service-card {
    flex: 0 0 300px; /* Set a fixed width for consistent behavior */
    height: 500px;  /* Ensure this fits well within the container height */
    transition: transform 0.5s ease, box-shadow 0.5s ease;
    scroll-snap-align: center; /* Center cards within scroll */
    position: relative;
    transform-origin: center center;
    border-radius: 10px; /* Rounded corners */
    color: #333; /* Text color */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

/* Card Hover Effect */
.service-card:hover {
    transform: scale(1.15);  /* Scale up on hover */
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2); /* Add shadow */
}

/* Card Icon Animations */
.service-card .icon i {
    transition: transform 0.5s ease;
}

.service-card:hover .icon i {
    transform: rotate(360deg); /* Rotate the icon on hover */
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

/* Button Glow Effect */
.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    padding: 10px 20px;
    font-size: 1rem;
    border-radius: 30px;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.btn-primary:hover {
    background-color: #0056b3;
    box-shadow: 0 0 10px rgba(0, 123, 255, 0.5); /* Glowing effect */
}

/* Service Link */
.service-link {
    color: inherit; /* Inherit color from parent */
    text-decoration: none; /* Remove underline */
    transition: color 0.3s ease;
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
    <div class="parallax"></div> <!-- Parallax background -->

    <div class="container">
        <div class="section-title text-center mb-5">
            <h5>Our Services</h5>
            <h1>Explore Our Services</h1>
        </div>

        <div class="services-wrapper">
            <!-- Service 1: SAP Consulting -->
            <div class="service-card p-4" style="background-color: #f8d7da;">
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
            <div class="service-card p-4" style="background-color: #C0C78C;">
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
            <div class="service-card p-4" style="background-color: #C4D7FF;">
                <div class="icon mb-3">
                    <i class="fas fa-code fa-3x"></i>
                </div>
                <h3 class="card-title">
                    <a href="#custom-development" class="service-link">CUSTOM ERP SOFTWARE</a>
                </h3>
                <p class="card-text">Get tailored solutions with our custom ERP development to meet your unique business needs.</p>
                <a href="#custom-development" class="btn btn-primary">Choose Service</a>
            </div>

            <!-- Additional Service 5: SAP Upgradation -->
            <div class="service-card p-4" style="background-color: #d1ecf1;">
                <div class="icon mb-3">
                    <i class="fas fa-arrow-up fa-3x"></i>
                </div>
                <h3 class="card-title">
                    <a href="#sap-upgradation" class="service-link">SAP Upgradation</a>
                </h3>
                <p class="card-text">Elevate your enterprise with seamless SAP Upgradation! Stay ahead of the competition and unlock new features, enhanced performance, and improved user experience.</p>
                <a href="#sap-upgradation" class="btn btn-primary">Choose Service</a>
            </div>

            <!-- Additional Service 6: Business Process Automation -->
            <div class="service-card p-4" style="background-color: #d4edda;">
                <div class="icon mb-3">
                    <i class="fas fa-robot fa-3x"></i>
                </div>
                <h3 class="card-title">
                    <a href="#business-automation" class="service-link">Business Process Automation</a>
                </h3>
                <p class="card-text">Transform efficiency into excellence with Business Process Automation! Streamline your workflows, reduce manual tasks, and empower your team to focus on what matters most.</p>
                <a href="#business-automation" class="btn btn-primary">Choose Service</a>
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
            serviceCards.forEach((card, index) => {
                const rect = card.getBoundingClientRect();
                const center = window.innerWidth / 2;

                // Scale the card when it is in the center of the viewport
                if (rect.left < center && rect.right > center) {
                    card.classList.add('active');
                } else if (rect.left < center + 300 && rect.right > center - 300) {
                    card.classList.add('neighbor');
                } else {
                    card.classList.remove('active', 'neighbor');
                }
            });
        }

        // Attach the scroll event
        servicesWrapper.addEventListener('scroll', handleScroll);
    });
</script>
