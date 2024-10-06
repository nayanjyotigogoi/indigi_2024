<style>
/* Parallax background */
.about {
    padding: 100px 0;
    position: relative;
    background: url('images/parallax-bg.jpeg') no-repeat center center/cover;
    background-attachment: fixed;
    color: #fff; /* Ensuring text is legible against the background */
    z-index: 1;
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

/* Section Title Styling */
.about h1 {
    font-size: 3rem;
    font-weight: 700;
    text-transform: uppercase;
    color: #fff;
    text-align: center;
    margin-bottom: 50px;
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

/* Animation (same as before) */
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

.value-box {
    animation: fadeInUp 1s forwards;
    opacity: 0;
}

.value-box:nth-child(1) {
    animation-delay: 0.3s;
}

.value-box:nth-child(2) {
    animation-delay: 0.5s;
}

.value-box:nth-child(3) {
    animation-delay: 0.7s;
}

.value-box:nth-child(4) {
    animation-delay: 0.9s;
}

/* Glowing and Floating Animation for Icons */
@keyframes glow {
    0% {
        text-shadow: 0 0 5px #00d4ff, 0 0 10px #00d4ff, 0 0 20px #00d4ff, 0 0 30px #00d4ff, 0 0 40px #00d4ff;
    }
    50% {
        text-shadow: 0 0 10px #00d4ff, 0 0 20px #00d4ff, 0 0 30px #00d4ff, 0 0 40px #00d4ff, 0 0 50px #00d4ff;
    }
    100% {
        text-shadow: 0 0 5px #00d4ff, 0 0 10px #00d4ff, 0 0 20px #00d4ff, 0 0 30px #00d4ff, 0 0 40px #00d4ff;
    }
}

@keyframes float {
    0% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-10px);
    }
    100% {
        transform: translateY(0px);
    }
}

/* Apply glowing and floating animation to icons */
.value-box i {
    font-size: 3rem;
    color: #00d4ff;
    margin-bottom: 20px;
    animation: glow 2s ease-in-out infinite, float 3s ease-in-out infinite;
}

</style>

<!-- About Section Start -->
<div class="about">
    <!-- Section Title -->
    <h1>About Us</h1>
    <!-- Paragraph -->
    <p>At Indigi Consulting, we pride ourselves on delivering top-tier SAP solutions, ensuring that our clients stay ahead in a fast-evolving digital landscape. Discover what sets us apart.</p>
    
    <!-- Core Values Section -->
    <div class="values-container">
        <!-- Value 1 -->
        <div class="value-box">
            <i class="fa fa-lightbulb"></i>
            <h3>Innovation</h3>
            <p>We lead with cutting-edge ideas and forward-thinking strategies.</p>
        </div>
        
        <!-- Value 2 -->
        <div class="value-box">
            <i class="fa fa-users"></i>
            <h3>Collaboration</h3>
            <p>Our approach is built on strong partnerships and teamwork.</p>
        </div>
        
        <!-- Value 3 -->
        <div class="value-box">
            <i class="fa fa-cogs"></i>
            <h3>Efficiency</h3>
            <p>We optimize your processes for smoother operations and maximum results.</p>
        </div>
        
        <!-- Value 4 -->
        <div class="value-box">
            <i class="fa fa-chart-line"></i>
            <h3>Growth</h3>
            <p>We help businesses scale by delivering tailored and scalable solutions.</p>
        </div>
    </div>

    <!-- Call to Action -->
    <a href="quote.html" class="call-to-action">Request A Quote</a>
</div>
<!-- About Section End -->
