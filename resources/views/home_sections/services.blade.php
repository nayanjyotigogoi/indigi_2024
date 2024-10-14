<style>
    /* General Styling */
    .services-wrapper {
        display: flex;
        overflow-x: auto;
        overflow-y: hidden;
        scroll-behavior: smooth;
        padding-bottom: 1rem;
        -webkit-overflow-scrolling: touch;
        scroll-snap-type: x mandatory;
        gap: 35px;
        justify-content: flex-start;
        height: 600px;
        align-items: center;
        padding-left: 20px;
        background: url('public/video/risewithsap.mp4') no-repeat center center;
        background-size: cover;
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
        z-index: -1;
        background-image: url('images/white-bg.jpg');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* Service Card Styling */
    .service-card {
        flex: 0 0 270px; /* Reduced width */
        height: 400px; /* Reduced height */
        transition: transform 0.5s ease, box-shadow 0.5s ease;
        scroll-snap-align: center;
        position: relative;
        transform-origin: center center;
        border-radius: 10px;
        color: #333;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background-color: #fff;
        font-size: 1rem; /* Reduced font size */
    }

    /* Card Hover Effect */
    .service-card:hover {
        transform: scale(1.1);
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }

    /* Card Highlight */
    .highlighted {
        border: 2px solid gold;
        box-shadow: 0 0 10px rgba(255, 215, 0, 0.8);
        animation: sparkle-animation 0.5s infinite alternate;
    }

    @keyframes sparkle-animation {
        0% { transform: scale(1); }
        100% { transform: scale(1.1); }
    }

    /* Card Icon Animations */
    .service-card .icon i {
        transition: transform 0.5s ease;
    }

    .service-card:hover .icon i {
        transform: rotate(360deg);
    }

    /* Active and Neighbor Scaling */
    .service-card.active {
        transform: scale(1.05);
    }

    .service-card.neighbor {
        transform: scale(1.02);
    }

    /* Remove Scrollbar */
    .services-wrapper::-webkit-scrollbar {
        display: none;
    }

    /* Button Glow Effect */
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 10px 20px; /* Adjusted padding */
        font-size: 1rem; /* Adjusted font size */
        border-radius: 30px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
    }

    /* Service Link */
    .service-link {
        color: inherit;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .service-link:hover {
        color: #0056b3;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .service-card {
            flex: 0 0 90%;
            height: 250px; /* Adjusted height */
        }
        .services-wrapper {
            height: 500px;
        }
    }

    @media (max-width: 576px) {
        .service-card {
            flex: 0 0 95%;
            height: 200px; /* Adjusted height */
        }
        .services-wrapper {
            height: 450px;
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
            <div class="service-card p-3" style="background-color: #f8d7da;" data-aos="fade-right" data-aos-duration="1000" data-service="consulting">
                <div class="icon mb-3">
                    <i class="fas fa-handshake fa-2x"></i>
                </div>
                <h3 class="card-title">
                    <a href="#sap-consulting" class="service-link">SAP Consulting</a>
                </h3>
                <p class="card-text">Expert SAP consulting services for your business.</p>
                <a href="#sap-consulting" class="btn btn-primary">Choose Service</a>
            </div>
            
            <!-- Service 2: SAP Implementation -->
            <div class="service-card p-3 bg-info" data-aos="fade-up" data-aos-duration="1000" data-service="implementation">
                <div class="icon mb-3">
                    <i class="fas fa-rocket fa-2x"></i>
                </div>
                <h3 class="card-title">
                    <a href="#sap-implementation" class="service-link">SAP Implementation</a>
                </h3>
                <p class="card-text">Accelerate growth with our SAP implementation services.</p>
                <a href="#sap-implementation" class="btn btn-primary">Choose Service</a>
            </div>

            <!-- Service 3: SAP Support -->
            <div class="service-card p-3" style="background-color: #C0C78C;" data-aos="fade-left" data-aos-duration="1000" data-service="support">
                <div class="icon mb-3">
                    <i class="fas fa-life-ring fa-2x"></i>
                </div>
                <h3 class="card-title">
                    <a href="#sap-support" class="service-link">SAP Support</a>
                </h3>
                <p class="card-text">Support for continuous process improvement.</p>
                <a href="#sap-support" class="btn btn-primary">Choose Service</a>
            </div>

            <!-- Service 4: CUSTOM ERP SOFTWARE -->
            <div class="service-card p-3" style="background-color: #C4D7FF;" data-aos="zoom-in" data-aos-duration="1000" data-service="custom">
                <div class="icon mb-3">
                    <i class="fas fa-code fa-2x"></i>
                </div>
                <h3 class="card-title">
                    <a href="#custom-development" class="service-link">CUSTOM ERP SOFTWARE</a>
                </h3>
                <p class="card-text">Tailored solutions for your unique business needs.</p>
                <a href="#custom-development" class="btn btn-primary">Choose Service</a>
            </div>

            <!-- Service 5: SAP Upgradation -->
            <div class="service-card p-3" style="background-color: #d1ecf1;" data-aos="slide-up" data-aos-duration="1000" data-service="upgradation">
                <div class="icon mb-3">
                    <i class="fas fa-arrow-up fa-2x"></i>
                </div>
                <h3 class="card-title">
                    <a href="#sap-upgradation" class="service-link">SAP Upgradation</a>
                </h3>
                <p class="card-text">Elevate your enterprise with seamless SAP Upgradation.</p>
                <a href="#sap-upgradation" class="btn btn-primary">Choose Service</a>
            </div>

            <!-- Service 6: Business Process Automation -->
            <div class="service-card p-3" style="background-color: #d4edda;" data-aos="flip-up" data-aos-duration="1000" data-service="automation">
                <div class="icon mb-3">
                    <i class="fas fa-robot fa-2x"></i>
                </div>
                <h3 class="card-title">
                    <a href="#business-automation" class="service-link">Business Process Automation</a>
                </h3>
                <p class="card-text">Streamline workflows and reduce manual tasks.</p>
                <a href="#business-automation" class="btn btn-primary">Choose Service</a>
            </div>
        </div>

        <!-- Explore More Button -->
        <div class="text-center mt-5">
            <a href="#explore-more" class="btn btn-primary">Explore More</a>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const servicesWrapper = document.querySelector('.services-wrapper');
        const serviceCards = document.querySelectorAll('.service-card');

        // Check if the questionnaire has been completed
        const isQuestionnaireCompleted = sessionStorage.getItem('questionnaireCompleted');

        // Clear previous recommendations
        sessionStorage.removeItem('highlightedService');

        // Initialize AOS (Animate on Scroll)
        AOS.init();

        // Function to highlight a recommended service
        function highlightRecommendedService() {
            const recommendedService = getRandomService();
            sessionStorage.setItem('highlightedService', recommendedService);
            document.querySelector(`.service-card[data-service="${recommendedService}"]`).classList.add('highlighted');
        }

        // Function to get a random service
        function getRandomService() {
            const services = ['consulting', 'implementation', 'support', 'custom', 'upgradation', 'automation'];
            return services[Math.floor(Math.random() * services.length)];
        }

        // Highlight a random service only if the questionnaire is completed
        if (isQuestionnaireCompleted) {
            highlightRecommendedService();
        }

        // Function to check which card is in the center of the viewport
        function handleScroll() {
            serviceCards.forEach((card) => {
                const rect = card.getBoundingClientRect();
                const center = window.innerWidth / 2;

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

    // Function to be called when the questionnaire is completed
    function completeQuestionnaire() {
        sessionStorage.setItem('questionnaireCompleted', true);
        // Optionally, you can trigger a highlight or any other action here
        highlightRecommendedService();
    }
</script>
