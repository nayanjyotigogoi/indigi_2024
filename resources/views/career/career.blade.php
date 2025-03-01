@extends('layouts.app')

@section('title', 'Career | Indigi')

@section('content')
<style>
    /* Hero Section */
    #career-hero {
        border-radius: 10px;
        min-height: 60vh;
        background: linear-gradient(135deg, #C4E1F6, #37AFE1);
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        position: relative;
    }

    .hero-content {
        position: relative;
        z-index: 1;
    }

    .cta-button {
        padding: 0.75rem 1.5rem;
        background-color: #FFD700; /* Gold color for CTA */
        color: black;
        border-radius: 25px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .cta-button:hover {
        background-color: #FFC107; /* Darker gold on hover */
    }

    /* Company Culture Section */
    #company-culture {
        margin: 20px;
        border-radius: 10px;
        padding: 4rem 2rem;
        text-align: center;
        background-color: white;
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    .culture-image {
        max-width: 80%;
        height: auto;
        border-radius: 8px;
        margin-top: 2rem;
    }

    /* Benefits Section */
    #benefits {
        padding: 4rem 2rem;
        background-color: #f1f1f1;
        text-align: center;
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    .benefit-list {
        list-style-type: none;
        padding: 0;
    }

    /* Job Listings Section */
    #job-listings {
        margin: 20px;
        border-radius: 20px;
        padding: 4rem 2rem;
        background-color: white;
        text-align: center;
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    .job-card {
        background: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 2rem;
        margin: 1rem 0;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        opacity: 0;
        transform: translateY(20px);
    }

    .job-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .apply-button {
        display: inline-block;
        margin-top: 1rem;
        padding: 0.5rem 1rem;
        background-color: #007BFF;
        color: white;
        border-radius: 4px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .apply-button:hover {
        background-color: #0056b3;
    }

    /* Footer Call to Action */
    #cta-footer {
        border-radius: 20px;
        padding: 4rem 2rem;
        background-color: #007BFF;
        color: white;
        text-align: center;
    }
</style>

    <!-- Hero Section -->
    <section id="career-hero">
        <div class="hero-content">
            <h1>Join Our Team</h1>
            <p>Your dream job awaits!</p>
            <a href="#job-listings" class="cta-button">View Job Openings</a>
        </div>
    </section>

    <!-- Company Culture Section -->
    <section id="company-culture">
        <h2>Our Culture</h2>
        <p>At INDIGI, we foster a collaborative and inclusive environment. We believe in empowering our team members to share their ideas and make an impact. Join us to work in a vibrant and supportive atmosphere where innovation thrives.</p>
        <img src="{{ asset('images/indigi_logo.jpg') }}" alt="Company Culture" class="culture-image">
    </section>

    <!-- Benefits Section -->
    <section id="benefits">
        <h2>Why Work With Us?</h2>
        <ul class="benefit-list">
            <li>💼 Competitive Salary and Benefits</li>
            <li>📈 Opportunities for Growth and Advancement</li>
            <li>🧘‍♀️ Work-Life Balance</li>
            <li>👩‍🎓 Continuous Learning and Development Programs</li>
            <li>🌍 Diverse and Inclusive Workplace</li>
        </ul>
    </section>

    <!-- Job Listings Section -->
    <section id="job-listings">
        <h2>Current Openings</h2>
        <div class="job-card">
            <h3>ABAP CONSULTANT</h3>
            <p><strong>Location:</strong>GUWAHATI</p>
            <p><strong>Responsibilities:</strong></p>
            <ul>
                <li>Develop and maintain web applications.</li>
                <li>Collaborate with cross-functional teams.</li>
                <li>Participate in code reviews and testing.</li>
            </ul>
            <a href="/apply-now" class="apply-button">Apply Now</a>
        </div>
        <div class="job-card">
            <h3>Marketing Specialist</h3>
            <p><strong>Location:</strong> PANJABARI, GUWAHATI</p>
            <p><strong>Responsibilities:</strong></p>
            <ul>
                <li>Create and implement marketing strategies.</li>
                <li>Analyze market trends and customer behavior.</li>
                <li>Manage social media channels and campaigns.</li>
            </ul>
            <a href="/apply-now" class="apply-button">Apply Now</a>
        </div>
        <div class="job-card">
            <h3>Inside Sales Executive</h3>
            <p><strong>Department:</strong> SALES</p>
            <p><strong>Type:</strong> Full time / Regular</p>
            <p><strong>Responsibilities:</strong></p>
            <ul>
                <li>Engage with potential clients to generate leads.</li>
                <li>Assist clients in choosing the right products/services.</li>
                <li>Maintain relationships with existing clients.</li>
            </ul>
            <a href="/apply-now" class="apply-button">Apply Now</a>
        </div>
        <div class="job-card">
            <h3>Web Developer</h3>
            <p><strong>Department:</strong> WEB</p>
            <p><strong>Type:</strong> Full time / Permanent</p>
            <p><strong>Responsibilities:</strong></p>
            <ul>
                <li>Design and develop user-friendly web applications.</li>
                <li>Collaborate with UI/UX designers to implement designs.</li>
                <li>Optimize applications for speed and scalability.</li>
            </ul>
            <a href="/apply-now" class="apply-button">Apply Now</a>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section id="cta-footer">
        <h2>Ready to Take the Next Step?</h2>
        <p>If you're passionate and driven, we want to hear from you!</p>
        <a href="#job-listings" class="cta-button">Join Our Team</a>
    </section>




<!-- Contact-us form -->
<section id="contact-us" class="Contact-us-section">
        <div class="Contactbackground-shapes">
            <div class="Contactshape-1"></div>
            <div class="Contactshape-2"></div>
        </div>

        <div class="Contactcontainer">
            <div class="contact-header">
                <h4>Contact Us</h4>
                <h1>Let's Connect and Collaborate</h1>
                <p>Have questions or need assistance? We're here to help! Reach out to us and let's work together to achieve your goals.</p>
            </div>

            <div class="contact-content">
                <div class="contact-left">
                <div class="Contactmap-container">
                    <iframe 
                        width="100%" 
                        height="250px" 
                        style="border-radius: 8px; border: 0;" 
                        loading="lazy" 
                        allowfullscreen 
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14316.673843579536!2d91.79659537327568!3d26.126282165576393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a599292a5c5df%3A0xc7e4b99f5a7d6f2d!2sPanjabari%20Rd%2C%20Guwahati%2C%20Assam%20781037!5e0!3m2!1sen!2sin!4v1707903154621!5m2!1sen!2sin">
                    </iframe>
                </div>

                    <div class="contact-info">
                        <div class="contact-item">
                            <span>📞</span>
                            <span>91- 6001 3961 86</span>
                        </div>
                        <div class="contact-item">
                            <span>✉️</span>
                            <span>admin@indigiconsulting.com</span>
                        </div>
                        <div class="contact-item">
                            <span>🌐</span>
                            <span>www.indigiconsulting.com</span>
                        </div>
                        <div class="contact-item">
                            <span>📍</span>
                            <span>House No-194, 2nd Floor, Panjabari Road, Ghy-37, Assam</span>
                        </div>
                    </div>
                </div>

                <div class="contact-right">
                    <form id="contactForm">
                        <div class="Contactform-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" placeholder="Enter name here">
                        </div>
                        <div class="Contactform-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" placeholder="Enter email here">
                        </div>
                        <div class="Contactform-group">
                            <label for="phone">Phone number</label>
                            <input type="tel" id="phone" placeholder="Enter phone number here">
                        </div>
                        <div class="Contactform-group">
                            <label for="message">Message</label>
                            <textarea id="message" rows="5" placeholder="Message here"></textarea>
                        </div>
                        <button type="submit" class="Contactsubmit-btn">
                            Submit →
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // GSAP Animations
        gsap.registerPlugin(ScrollTrigger);

        // Hero Section Animation
        gsap.from(".hero-content h1", { opacity: 0, y: -50, duration: 1 });
        gsap.from(".hero-content p", { opacity: 0, y: 30, duration: 1, delay: 0.3 });
        gsap.from(".cta-button", { opacity: 0, y: 20, duration: 1, delay: 0.6 });

        // Company Culture Animation
        gsap.to("#company-culture", {
            scrollTrigger: {
                trigger: "#company-culture",
                start: "top 80%",
                toggleActions: "play none none reset"
            },
            opacity: 1,
            y: 0,
            duration: 1
        });

        // Benefits Animation
        gsap.to("#benefits", {
            scrollTrigger: {
                trigger: "#benefits",
                start: "top 80%",
                toggleActions: "play none none reset"
            },
            opacity: 1,
            y: 0,
            duration: 1
        });

        // Job Listings Animation
        gsap.to("#job-listings", {
            scrollTrigger: {
                trigger: "#job-listings",
                start: "top 80%",
                toggleActions: "play none none reset"
            },
            opacity: 1,
            y: 0,
            duration: 1
        });

        // Job Cards Animation
        const jobCards = document.querySelectorAll(".job-card");
        jobCards.forEach((card, index) => {
            gsap.to(card, {
                scrollTrigger: {
                    trigger: card,
                    start: "top 80%",
                    toggleActions: "play none none reset"
                },
                opacity: 1,
                y: 0,
                duration: 0.5,
                delay: index * 0.1
            });
        });

        // Call to Action Animation
        gsap.to("#cta-footer", {
            scrollTrigger: {
                trigger: "#cta-footer",
                start: "top 80%",
                toggleActions: "play none none reset"
            },
            opacity: 1,
            duration: 1
        });
    });
</script>