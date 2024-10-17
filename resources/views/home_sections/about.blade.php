<style>
/* Parallax background */
.about {
    padding: 100px 0;
    position: relative;
    background: url('images/parallax-bg.jpeg') no-repeat center center/cover;
    background-attachment: fixed;
    color: #fff;
    z-index: 1;
    overflow: hidden; /* Ensuring the content stays inside the section */
}

/* Overlay for better contrast */
.about::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6); /* Dark overlay */
    z-index: -1;
}

/* Section Title Styling with Animated Letter Spacing */
.about h1 {
    font-size: 3rem;
    font-weight: 700;
    text-transform: uppercase;
    color: #fff;
    text-align: center;
    margin-bottom: 50px;
    letter-spacing: 2px; /* Initial letter spacing */
    transition: letter-spacing 0.5s ease-in-out; /* Transition for the letter spacing */
}

/* Hover effect to animate letter spacing */
.about h1:hover {
    letter-spacing: 10px; /* Increased spacing on hover */
}

.about p {
    font-size: 1.25rem;
    line-height: 1.7;
    text-align: center;
    color: #eee;
    margin-bottom: 40px;
    max-width: 800px;
    margin: 0 auto 50px;
}

/* Core Values Section */
.values-container {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    gap: 20px;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: 0 auto;
}

.value-box {
    background-color: rgba(255, 255, 255, 0.1); /* Transparent background */
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    flex: 1;
    min-width: 250px;
    margin: 10px;
    color: #fff;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease;
}

.value-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 25px rgba(255, 255, 255, 0.2);
}

.value-box i {
    font-size: 3rem;
    color: #00d4ff;
    margin-bottom: 20px;
}

.value-box h3 {
    font-size: 1.75rem;
    font-weight: 600;
    color: #fff;
    margin-bottom: 10px;
}

.value-box p {
    font-size: 1rem;
    color: #ddd;
}

/* Call to Action Button */
.call-to-action {
    display: block;
    width: fit-content;
    margin: 50px auto;
    padding: 15px 30px;
    font-size: 1.25rem;
    color: #fff;
    background-color: #00d4ff;
    border-radius: 50px;
    text-align: center;
    text-transform: uppercase;
    transition: background-color 0.3s ease;
}

.call-to-action:hover {
    background-color: #007bbf;
}
</style>

<!-- About Section Start -->
<div class="about" data-aos="zoom-in-up">
    <!-- Section Title with AOS -->
    <h1 data-aos="fade-down">About Us</h1>
    <!-- Paragraph with AOS -->
    <p data-aos="fade-up" data-aos-delay="200">At Indigi Consulting, we pride ourselves on delivering top-tier SAP solutions, ensuring that our clients stay ahead in a fast-evolving digital landscape. Discover what sets us apart.</p>
    
    <!-- Core Values Section -->
    <div class="values-container">
        <!-- Value 1 -->
        <div class="value-box" data-aos="fade-right" data-aos-delay="300">
            <i class="fa fa-lightbulb"></i>
            <h3>Innovation</h3>
            <p>We lead with cutting-edge ideas and forward-thinking strategies.</p>
        </div>
        
        <!-- Value 2 -->
        <div class="value-box" data-aos="fade-right" data-aos-delay="400">
            <i class="fa fa-users"></i>
            <h3>Collaboration</h3>
            <p>Our approach is built on strong partnerships and teamwork.</p>
        </div>
        
        <!-- Value 3 -->
        <div class="value-box" data-aos="fade-right" data-aos-delay="500">
            <i class="fa fa-cogs"></i>
            <h3>Efficiency</h3>
            <p>We optimize your processes for smoother operations and maximum results.</p>
        </div>
        
        <!-- Value 4 -->
        <div class="value-box" data-aos="fade-right" data-aos-delay="600">
            <i class="fa fa-chart-line"></i>
            <h3>Growth</h3>
            <p>We help businesses scale by delivering tailored and scalable solutions.</p>
        </div>
    </div>

    <!-- Call to Action with AOS -->
    <a href="quote.html" class="call-to-action" data-aos="fade-up" data-aos-delay="700">Request A Quote</a>
</div>
<!-- About Section End -->

<!-- Include AOS script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
<script>
    AOS.init();
</script>
