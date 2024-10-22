@extends('layouts')

@section('content')
    <!-- Hero Section -->
    <section id="hero">
        <div class="hero-content">
            <h1>Our Services</h1>
            <p>We provide exceptional services to help you grow.</p>
        </div>
    </section>

    <!-- Services Overview Section -->
    <section id="services">
        <h2>What We Offer</h2>
        <div class="service-cards">
            @foreach($services as $service)
                <div class="service-card">
                    <div class="icon"><img src="{{ asset($service['icon']) }}" alt="{{ $service['title'] }}"></div>
                    <h3>{{ $service['title'] }}</h3>
                    <p>{{ $service['description'] }}</p>
                    <a href="" class="service-btn">Learn More</a>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-us">
        <h2>Why Choose Us?</h2>
        <div class="reasons">
            <div class="reason">
                <h3>Expert Team</h3>
                <p>We have a team of experts ready to help.</p>
            </div>
            <div class="reason">
                <h3>Innovative Solutions</h3>
                <p>We offer creative solutions for complex challenges.</p>
            </div>
            <div class="reason">
                <h3>Customer Satisfaction</h3>
                <p>Your satisfaction is our priority.</p>
            </div>
        </div>
    </section>

    <!-- Footer Call to Action -->
    <section id="cta-footer">
        <h2>Ready to Get Started?</h2>
        <button class="cta-button">Contact Us</button>
    </section>

@endsection

<style>
    /* Service Page Specific Styles */
    body {
   
        margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
    color: #333;
    background-color: #f9f9f9;
    }

    /* Hero Section */
    #hero {
        min-height: 100vh; /* Covers full screen */
    background: linear-gradient(135deg, #C4E1F6, #37AFE1);
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    padding: 2rem;
    box-sizing: border-box;
    }

    /* Services Section */
    #services {
        padding: 4rem 2rem;
        background-color: white;
        text-align: center;
    }

    .service-cards {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .service-card {
        flex-basis: calc(33.33% - 2rem); /* Responsive sizing */
    padding: 2rem;
    margin: 1rem;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    /* Button in Service Cards */
    .service-btn {
        display: inline-block;
        margin-top: 1rem;
        padding: 0.5rem 1rem;
        background-color: #007BFF;
        color: white;
        border-radius: 4px;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.3s ease;
        /* position: absolute; */
        bottom: 20px;
        left: 50%;
        /* transform: translateX(50%); */
    }

    .service-btn:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }

    /* Why Choose Us Section */
    #why-us {
        margin-bottom: 40px;
        padding: 4rem 2rem;
        background-color: #f1f1f1;
        text-align: center;
    }

    .reasons {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    /* Footer CTA */
    #cta-footer {
        padding: 4rem 2rem;
        background-color: #007BFF;
        color: white;
        text-align: center;
    }
    

    /* Animation for the caption section */
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

    /* Mobile Responsive */
@media (max-width: 768px) {
    .service-card {
        flex-basis: calc(50% - 2rem);
    }
}

@media (max-width: 480px) {
    .service-card {
        flex-basis: calc(100% - 2rem);
    }
}

    
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        // GSAP Hero Section Animation
        gsap.from(".hero-content h1", { opacity: 0, y: -50, duration: 1.5, ease: "power4.out" });
        gsap.from(".hero-content p", { opacity: 0, y: 30, duration: 1.5, ease: "power4.out", delay: 0.3 });
        gsap.from(".cta-button", { opacity: 0, y: 20, duration: 1, delay: 0.6 });

        

        // Why Choose Us Section Animation
        gsap.from("#why-us h2", { scrollTrigger: "#why-us", opacity: 0, y: 50, duration: 1 });
        gsap.from(".reason", {
            scrollTrigger: ".reason",
            opacity: 0,
            y: 50,
            stagger: 0.3,
            duration: 1
        });

        // Footer CTA Animation
        gsap.from("#cta-footer h2", { scrollTrigger: "#cta-footer", opacity: 0, y: 50, duration: 1 });
    });
</script>
