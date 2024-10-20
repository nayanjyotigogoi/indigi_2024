<!-- AOS Animation Library -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<style>
    /* Facts Section */
    .facts {
        background-color: #f9f9f9;
        padding: 50px 0;
    }
    .facts .fact-box {
        width: 100%;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        color: #fff;
        padding: 30px;
        text-align: center;
        transition: transform 0.3s ease-in-out;
        /* Removed manual opacity */
    }
    .facts .fact-box:hover {
        transform: translateY(-10px);
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
    }
    .facts .fact-icon {
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }
    .facts h5 {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }
    .facts h1 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 0;
    }
    </style>

    <!-- Facts Section -->
    <div class="container-fluid facts" data-aos="fade-up">
        <div class="container">
            <div class="row gx-4 gy-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="fact-box" style="background-color: #00b7c2;">
                        <div class="fact-icon">
                            <i class="fa fa-users fa-2x"></i>
                        </div>
                        <h5>Happy Clients</h5>
                        <h1 class="counter" data-count="50">0+</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="fact-box" style="background-color: #f57c20;">
                        <div class="fact-icon">
                            <i class="fa fa-check fa-2x"></i>
                        </div>
                        <h5>Completed Projects</h5>
                        <h1 class="counter" data-count="50">0+</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="fact-box" style="background-color: #0d6efd;">
                        <div class="fact-icon">
                            <i class="fa fa-award fa-2x"></i>
                        </div>
                        <h5>Industry Verticals</h5>
                        <h1 class="counter" data-count="15">0+</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="fact-box" style="background-color: #6f42c1;">
                        <div class="fact-icon">
                            <i class="fa fa-clock fa-2x"></i>
                        </div>
                        <h5>Years of Experience</h5>
                        <h1 class="counter" data-count="6">0+</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script Section -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
    function animateCounters() {
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            counter.innerText = '0+'; // Reset the counter to 0+ on scroll
            const updateCount = () => {
                const target = +counter.getAttribute('data-count');
                const count = +counter.innerText.slice(0, -1); // Remove the + for counting
                const increment = Math.ceil(target / 300); // Slower counting speed
                if (count < target) {
                    counter.innerText = count + increment > target ? target + '+' : count + increment + '+';
                    setTimeout(updateCount, 300); // Slower speed
                } else {
                    counter.innerText = target + '+'; // Ensure it ends at target with +
                }
            };
            updateCount();
        });
    }

    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function checkCountersInView() {
        const factsSection = document.querySelector('.facts');
        if (isElementInViewport(factsSection)) {
            animateCounters(); // Trigger counting animation
        }
    }

    // Listen for scroll events to trigger counter animation when facts section comes into view
    window.addEventListener('scroll', checkCountersInView);

    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: false, // Animation will occur every time section is scrolled into view
    });
    </script>
