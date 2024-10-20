@extends('layouts')

@section('content')
    <!-- Include styles for 3D cube, divider, and additional sections -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background-color: #f9f9f9;
        }
        /* why us */
        .why-us {
            background: linear-gradient(135deg, #C4E1F6, #37AFE1);
            color: #ffffff;
            padding: 100px 20px;
            text-align: center;
        }

        .container {
            /* max-width: 100%; */
            margin: 0 auto;
        }

        .main-title {
            font-size: 3rem;
            font-weight: bold;
            animation: fadeIn 1s ease-in-out;
        }

        .sub-title {
            font-size: 1.8rem;
            margin: 10px 0;
            animation: fadeIn 1.5s ease-in-out;
        }

        .description {
            font-size: 1.2rem;
            margin: 20px 0;
            animation: fadeIn 2s ease-in-out;
        }

        .icons {
            display: flex;
            justify-content: space-around;
            margin: 30px 0;
        }

        .icon {
            flex: 1;
            text-align: center;
            transition: transform 0.3s;
        }

        .icon i {
            font-size: 2.5rem;
            color: #FFD700; /* Gold color */
        }

        .icon:hover {
            transform: scale(1.1);
        }

        .cta-button {
            display: inline-block;
            padding: 15px 30px;
            font-size: 1.2rem;
            color: #fff;
            background: #ff4c4c;
            border: none;
            border-radius: 25px;
            text-decoration: none;
            transition: background 0.3s, transform 0.3s;
        }

        .cta-button:hover {
            background: #ff1a1a;
            transform: translateY(-2px);
        }

        /* Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

    /* 3D Cuboid Styles */

    
    .core-values-title {
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 40px;
            color: #333;
        }
        .cuboid-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh; /* Center the cuboid vertically */

            /* padding: 100px 0; */
            background-color: #fff;
        }

        .cuboid {
            width: 300px;
            height: 300px;
            position: relative;
            transform-style: preserve-3d;
            transform: rotateX(0) rotateY(0);
            transition: transform 0.5s;
        }

        .cuboid-face {
            position: absolute;
            width: 750px;
            height: 300px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.1rem;
            color: #fff;
            opacity: 0.9;
            transition: transform 0.5s, opacity 0.5s;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);

        }

        .cuboid-face.face-1 { background: #00b7c2; transform: rotateY(0deg) translateZ(150px); }
        .cuboid-face.face-2 { background: #f57c20; transform: rotateY(90deg) translateZ(150px); }
        .cuboid-face.face-3 { background: #0d6efd; transform: rotateY(180deg) translateZ(150px); }
        .cuboid-face.face-4 { background: #6f42c1; transform: rotateY(-90deg) translateZ(150px); }
        .cuboid-face.face-5 { background: #28a745; transform: rotateX(90deg) translateZ(150px); }
        .cuboid-face.face-6 { background: #dc3545; transform: rotateX(-90deg) translateZ(150px); }

        

        .cuboid-content {
            opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s ease, transform 0.5s ease;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Updated font */
        font-size: 1rem; /* Increased font size */
        line-height: 1.6; /* Improved line height for readability */
        color: white; /* Ensure white text color for clarity */
        text-align: center; /* Center-align text for better focus */
        padding: 20px; /* Add padding for spacing */
        background: rgba(0, 0, 0, 0.5); /* Semi-transparent background to highlight content */
        border-radius: 15px; /* Add border radius for smoother appearance */
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3); /* Soft shadow for depth */
        }
        /* Make visible content more dynamic */
        .cuboid-content.visible {
                opacity: 1;
                transform: translateY(0);
            }

            /* Update specific face content style */
            .cuboid-face.face-1 .cuboid-content {
                background-color: rgba(0, 183, 194, 0.7); /* Custom background for face-1 */
            }

            .cuboid-face.face-2 .cuboid-content {
                background-color: rgba(245, 124, 32, 0.7); /* Custom background for face-2 */
            }

            .cuboid-face.face-3 .cuboid-content {
                background-color: rgba(13, 110, 253, 0.7); /* Custom background for face-3 */
            }

            .cuboid-face.face-4 .cuboid-content {
                background-color: rgba(111, 66, 193, 0.7); /* Custom background for face-4 */
            }
            .cuboid-face.face-2 .cuboid-content {
                background-color: rgba(245, 124, 32, 0.7); /* Custom background for face-2 */
            }
            .cuboid-face.face-3 .cuboid-content {
                background-color: rgba(13, 110, 253, 0.7); /* Custom background for face-3 */
            }


        .cuboid-content.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .cuboid-content h2 {
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        .cuboid-content p {
            font-size: 1rem;
            line-height: 1.6;
        }


        /* Divider styles */
        .divider {
            margin: 50px 0;
            text-align: center;
        }

        .divider-line {
            width: 80%;
            margin: 0 auto;
            border-top: 2px solid #ccc;
        }

        /* Meet the Founders section */
        .founders-section {
            padding: 50px 20px;
            background-color: #fff;
        }

        .founders-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .small-title {
            text-align: center;
            font-weight: bold;
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #555;
        }

        .who-we-are {
            font-size: 1rem;
            color: #666;
            max-width: 800px;
            margin: 0 auto 40px;
        }
        /* .founders-section */

        .founder-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
        }

        .founder {
            position: relative;
            width: 250px;
            text-align: center;
        }

        .founder img {
            width: 100%;
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .founder:hover img {
            transform: scale(1.05);
        }

        .founder-description {
            margin-top: 15px;
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
        }

              /* Our Journey Timeline */
        .timeline-section {
            padding: 50px 20px;
            background-color: #f0f0f0;
            text-align: center;
            position: relative; /* Add position relative for absolute positioning of SVG */
        }

        .rocket-icon {
            position: absolute;
            width: 50px; /* Adjust as needed */
            height: auto;
            /* Initial position to be adjusted in JavaScript */
            left: 0;
            top: 0; /* Position relative to the first event */
            opacity: 0; /* Start hidden */
            transition: opacity 0.5s;
        }

        .timeline-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 40px;
            color: #333;
        }

        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: #00b7c2;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }

        .timeline-event {
        padding: 20px;
        position: relative;
        width: 50%;
        }

        .timeline-event.left {
            left: 0; /* Position left events */
        }

        .timeline-event.right {
            left: 50%; /* Position right events */
        }

        .timeline-event-content {
            margin: 0 30px; /* Adjust margin for both sides */
        }

        /* SVG Path Animation */
        .journey-path {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0; /* Position it behind the timeline */
        }

        .journey-path path {
            fill: none;
            stroke: #00b7c2;
            stroke-width: 3;
            stroke-dasharray: 1000; /* Long enough to accommodate the path length */
            stroke-dashoffset: 1000; /* Start hidden */
            transition: stroke-dashoffset 2s ease; /* Animation for drawing */
        }
        
        /* Testimonials Section */
        .testimonials-section {
            padding: 50px 20px;
            background-color: #f0f0f0;
            text-align: center;
        }

        .testimonials-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 40px;
            color: #333;
        }

        .testimonial-carousel {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }

        .testimonial-item {
            display: none;
            font-size: 1rem;
            color: #555;
        }

        .testimonial-item.active {
            display: block;
        }

        .testimonial-item p {
            font-style: italic;
        }

        .testimonial-item h4 {
            margin-top: 15px;
            font-weight: bold;
            color: #00b7c2;
        }

        /* Carousel controls */
        .carousel-controls {
            margin-top: 20px;
        }

        .carousel-button {
            background-color: #00b7c2;
            color: #fff;
            border: none;
            padding: 10px 15px;
            margin: 0 5px;
            cursor: pointer;
            border-radius: 5px;
        }

        .carousel-button:hover {
            background-color: #0195a6;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .founder-container, .values-container {
                flex-direction: column;
                align-items: center;
            }

            .timeline-event {
                left: 0 !important;
                width: 100%;
                margin-bottom: 20px;
            }

            .timeline-event-content {
                margin: 0 30px;
            }

            .timeline::after {
                left: 0;
            }

            .timeline-event::before {
                left: -13px;
            }
        }
    </style>

<!-- why us-->
    <section class="why-us">
    <div class="container">
        <h1 class="main-title">Unleashing Innovation</h1>
        <p class="sub-title">Your Partner in Digital Transformation</p>
        <p class="description">At INDIGI, we blend creativity with technology to transform ideas into reality. 
        Our passion drives us to explore the unknown and deliver exceptional solutions that stand out.!</p>
        
        <a href="#contact" class="cta-button">Let’s Transform Together!</a>
    </div>
</section>
<!-- Our Journey Timeline Section -->
    <div class="timeline-section">
        <div class="timeline-title">Our Journey</div>

        <!-- SVG Path for Animation -->
        <svg class="journey-path" viewBox="0 0 800 400">
            <path d="M 400 0 L 400 100 L 200 100 L 200 200 L 400 200 L 400 300 L 600 300" />
        </svg>

        <div class="timeline">
            <!-- Event 1 -->
            <div class="timeline-event left">
                <div class="timeline-event-content">
                    <h3>2018</h3>
                    <p>Company founded in Guwahati, becoming the first SAP provider in North East India.</p>
                </div>
            </div>
            <!-- Event 2 -->
            <div class="timeline-event right">
                <div class="timeline-event-content">
                    <h3>2019</h3>
                    <p>Expanded our services to include custom software development and IT consulting.</p>
                </div>
            </div>
            <!-- Event 3 -->
            <div class="timeline-event left">
                <div class="timeline-event-content">
                    <h3>2020</h3>
                    <p>Awarded as the most innovative IT startup in the region.</p>
                </div>
            </div>
            <!-- Event 5 -->
            <div class="timeline-event right">
                <div class="timeline-event-content">
                    <h3>2021</h3>
                    <p>Achieved a milestone of 20+ satisfied clients across various industries.</p>
                </div>
            </div>
            <!-- Event 6 -->
            <div class="timeline-event left">
                <div class="timeline-event-content">
                    <h3>2022</h3>
                    <p>Achieved a milestone of 40+ satisfied clients across various industries.</p>
                </div>
            </div>
            <!-- Event 7 -->
            <div class="timeline-event right">
                <div class="timeline-event-content">
                    <h3>2023</h3>
                    <p>Achieved a milestone of 50+ satisfied clients across various industries.</p>
                </div>
            </div>
            <!-- Event 8 -->
            <div class="timeline-event left">
                <div class="timeline-event-content">
                    <h3>2024</h3>
                    <p>Achieved a milestone of 100+ satisfied clients across various industries.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 3D Cuboid Structure -->
    <div class="core-values-title">Our Core Values</div>
    <div class="cuboid-container">
   
        <div class="cuboid" id="cuboid">
            <!-- Face 1: Professional Services -->
            <div class="cuboid-face face-1">
                <div class="cuboid-content">
                    <h2>Our Core Values</h2>
                    <p>Delivered with precision and excellence, our services are tailored to meet your unique needs.</p>
                </div>
            </div>

            <!-- Face 2:Our Mission -->
            <div class="cuboid-face face-2">
                <div class="cuboid-content">
                    <h2>Excellence</h2>
                    <p>We strive for the highest quality in everything we do.</p>
                </div>
            </div>

            <!-- Face 3: Our Mission -->
            <div class="cuboid-face face-3">
                <div class="cuboid-content">
                    <h2>Collaboration</h2>
                    <p>Teamwork is at the heart of our approach.</p>
                </div>
            </div>

            <!-- Face 4: Our Vision -->
            <div class="cuboid-face face-4">
                <div class="cuboid-content">
                    <h2>Innovation</h2>
                    <p>We embrace creativity to deliver cutting-edge solutions.</p>
                </div>
            </div>

            <!-- Face 4: Our Vision -->
            <div class="cuboid-face face-4">
                <div class="cuboid-content">
                    <h2>Integrity</h2>
                    <p>We conduct our business with honesty and transparency.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Divider Section -->
    <div class="divider">
        <hr class="divider-line">
    </div>

    <!-- Meet the Founders Section -->
    <div class="founders-section">
        <div class="founders-title">Meet the Founders</div>
        <div class="small-title">Who We Are</div>
        <div class="who-we-are">
            We are a team of dedicated professionals with years of experience. Our passion lies in driving success for our clients through innovative solutions.
        </div>

        <div class="founder-container">
            <!-- Founder 1 -->
            <div class="founder">
                <img src="https://via.placeholder.com/250x350" alt="Founder 1">
                <div class="founder-description">John Doe</div>
                <p>CEO & Co-Founder</p>
            </div>
            <!-- Founder 2 -->
            <div class="founder">
                <img src="https://via.placeholder.com/250x350" alt="Founder 2">
                <div class="founder-description">Jane Smith</div>
                <p>CTO & Co-Founder</p>
            </div>
            <!-- Founder 3 -->
            <div class="founder">
                <img src="https://via.placeholder.com/250x350" alt="Founder 3">
                <div class="founder-description">Mike Johnson</div>
                <p>COO</p>
            </div>
        </div>
    </div>
    

    <!-- Customer Testimonials Section -->
    <div class="testimonials-section">
        <div class="testimonials-title">What Our Clients Say</div>
        <div class="testimonial-carousel" id="testimonial-carousel">
            <!-- Testimonial 1 -->
            <div class="testimonial-item active">
                <p>"Indigi Consulting transformed our business processes, significantly improving efficiency."</p>
                <h4>- Client A</h4>
            </div>
            <!-- Testimonial 2 -->
            <div class="testimonial-item">
                <p>"Their team's expertise and dedication are unparalleled."</p>
                <h4>- Client B</h4>
            </div>
            <!-- Testimonial 3 -->
            <div class="testimonial-item">
                <p>"A reliable partner for all our IT needs. Highly recommended."</p>
                <h4>- Client C</h4>
            </div>
        </div>
        <div class="carousel-controls">
            <button class="carousel-button" onclick="prevTestimonial()">Prev</button>
            <button class="carousel-button" onclick="nextTestimonial()">Next</button>
        </div>
    </div>

    <!-- Include Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/ScrollTrigger.min.js"></script>

    <!-- JavaScript for Cuboid Rotation and Testimonial Carousel -->
    <script>
        let currentFace = 0;
        const cuboid = document.getElementById('cuboid');
        const faces = document.querySelectorAll('.cuboid-face');
        const contents = document.querySelectorAll('.cuboid-content');

        function updateCuboid() {
            faces.forEach((face) => {
                face.style.opacity = '0'; // Hide all faces
            });
            contents.forEach(content => {
                content.classList.remove('visible'); // Hide all content
            });

            // Change rotation and show current face
            const rotationY = currentFace * 90;
            cuboid.style.transform = `rotateY(-${rotationY}deg)`;

            // Show content of the current face
            contents[currentFace].classList.add('visible');
            setTimeout(() => {
                faces[currentFace].style.opacity = '1'; // Show current face
            }, 200);
        }

        // Change face on scroll
        window.addEventListener('scroll', () => {
            currentFace = Math.floor((window.scrollY / (window.innerHeight)) * 6) % 6;
            updateCuboid();
        });

        updateCuboid(); // Initialize on load


        // Testimonial Carousel Functionality
        let testimonials = document.querySelectorAll('.testimonial-item');
        let currentTestimonial = 0;

        function showTestimonial(index) {
            testimonials.forEach((item, i) => {
                item.classList.toggle('active', i === index);
            });
        }

        function nextTestimonial() {
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            showTestimonial(currentTestimonial);
        }

        function prevTestimonial() {
            currentTestimonial = (currentTestimonial - 1 + testimonials.length) % testimonials.length;
            showTestimonial(currentTestimonial);
        }
        // GSAP Animation for Timeline Events
        gsap.registerPlugin(ScrollTrigger);
        gsap.utils.toArray('.timeline-event').forEach((event, i) => {
            gsap.from(event, {
                opacity: 0,
                x: i % 2 === 0 ? -100 : 100, // Left-side events move from left, right-side from right
                duration: 1,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: event,
                    start: 'top 80%', // When the top of the event is 80% from the top of the viewport
                    toggleActions: 'play none none reverse', // On entering, play animation, and reverse on leaving
                    once: false // to Only play the animation once make it true.
                }
            });
        });

    </script>
@endsection
