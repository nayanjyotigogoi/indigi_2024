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
<div class="container-fluid facts">
    <div class="container">
        <div class="row gx-4 gy-4">
            <div class="col-lg-3 col-md-6">
                <div class="fact-box" style="background-color: #00b7c2;">
                    <div class="fact-icon">
                        <i class="fa fa-users fa-2x"></i>
                    </div>
                    <h5>Happy Clients</h5>
                    <h1 class="counter" data-count="50">0+</h1> <!-- Added + sign -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="fact-box" style="background-color: #f57c20;">
                    <div class="fact-icon">
                        <i class="fa fa-check fa-2x"></i>
                    </div>
                    <h5>Completed Projects</h5>
                    <h1 class="counter" data-count="100">0+</h1> <!-- Added + sign -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="fact-box" style="background-color: #0d6efd;">
                    <div class="fact-icon">
                        <i class="fa fa-award fa-2x"></i>
                    </div>
                    <h5>Industry Verticals</h5>
                    <h1 class="counter" data-count="15">0+</h1> <!-- Added + sign -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="fact-box" style="background-color: #6f42c1;">
                    <div class="fact-icon">
                        <i class="fa fa-clock fa-2x"></i>
                    </div>
                    <h5>Years of Experience</h5>
                    <h1 class="counter" data-count="6">0+</h1> <!-- Added + sign -->
                </div>
            </div>
        </div>
    </div>
</div>
    
    <script>
    function animateCounters() {
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-count');
                const count = +counter.innerText.slice(0, -1); // Remove the + for counting
                const increment = Math.ceil(target / 200); // Adjust the increment speed here
                if (count < target) {
                    counter.innerText = count + increment > target ? target + '+' : count + increment + '+'; // Add + after the number
                    setTimeout(updateCount, 1); // Adjust speed of counting
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
            animateCounters();
            window.removeEventListener('scroll', checkCountersInView); // Stop event once counters are triggered
        }
    }

    // Listen for scroll events to trigger counter animation when facts section comes into view
    window.addEventListener('scroll', checkCountersInView);
</script>
