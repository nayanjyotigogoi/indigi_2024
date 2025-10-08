@extends('layouts.app-new')

@section('title', 'About | Indigi')

@section('content')

    <!-- Career Hero Section -->
    <div id="career-hero">
        <div class="hero-content">
            <h1>Your Partner in Digital Transformation</h1>
            <p>At INDIGI, we blend creativity with technology to transform ideas into reality!</p>
            <a href="/contact-us" class="cta-button">Let's Transform Together!</a>
        </div>
    </div>

    <div class="main-section">

        <!-- Our Story Section -->
        <div class="story-container">
            <div class="story-image-container">
                <img src="{{ asset('images/gallery/image25.jpg') }}" alt="Our Story Image">
            </div>
            <div class="story-content">
                <h2>Our Story</h2>
                <p>{!! $aboutContents['about']->detail ?? 'Content coming soon.' !!}</p>
            </div>
        </div>

        <!-- Vision & Mission Section -->
        <div class="Vission-mission-container">
            <h1 class="header-vision">Our Mission & Vision</h1>
            <div class="Vission-mission-cards-container">
                <div class="Vission-mission-card" onmouseover="animateCard(this)" onmouseout="resetCard(this)">
                    <img src="images/mission.png" alt="Mission Icon" class="icon">
                    <h2>Our Mission</h2>
                    <p>{!! $aboutContents['mission']->detail ?? 'Content coming soon.' !!}</p>
                </div>
                <div class="Vission-mission-card" onmouseover="animateCard(this)" onmouseout="resetCard(this)">
                    <img src="images/vision.png" alt="Vision Icon" class="icon">
                    <h2>Our Vision</h2>
                    <p>{!! $aboutContents['vision']->detail ?? 'Content coming soon.' !!}</p>
                </div>
            </div>
        </div>


        <!-- Why Choose Us Section -->
        <div class="why-choose-us-container">
            <h1 class="header-vision">Why Choose Us</h1>
            <div class="why-choose-us-cards-container">
                <div class="why-choose-us-card">
                    <img src="{{ asset('svg/about_us/efficiency.svg') }}" alt="Experience Icon" class="why-choose-us-icon">
                    <h2 class="header2-choose-us">Expertise & Experience</h2>
                    <p class="para-choose">We have years of experience delivering innovative solutions across diverse
                        industries.</p>
                </div>
                <div class="why-choose-us-card">
                    <img src="{{ asset('svg/about_us/Innovation.svg') }}" alt="Innovation Icon" class="why-choose-us-icon">
                    <h2 class="header2-choose-us">Innovation-Driven</h2>
                    <p class="para-choose">We use cutting-edge technologies to drive innovation and meet your business
                        needs.</p>
                </div>
                <div class="why-choose-us-card">
                    <img src="{{asset('svg/about_us/collaboration.svg')}}" alt="Support Icon" class="why-choose-us-icon">
                    <h2 class="header2-choose-us">24/7 Support</h2>
                    <p class="para-choose">We provide round-the-clock support to ensure the smooth running of your
                        operations.</p>
                </div>
            </div>
        </div>

    </div>

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
                <p>Have questions or need assistance? We're here to help! Reach out to us and let's work together to achieve
                    your goals.</p>
            </div>

            <div class="contact-content">
                <div class="contact-left">
                    <div class="Contactmap-container">
                        <iframe width="100%" height="250px" style="border-radius: 8px; border: 0;" loading="lazy"
                            allowfullscreen referrerpolicy="no-referrer-when-downgrade"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14316.673843579536!2d91.79659537327568!3d26.126282165576393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a599292a5c5df%3A0xc7e4b99f5a7d6f2d!2sPanjabari%20Rd%2C%20Guwahati%2C%20Assam%20781037!5e0!3m2!1sen!2sin!4v1707903154621!5m2!1sen!2sin">
                        </iframe>
                    </div>

                    <div class="contact-info">
                        <div class="contact-item">
                            <img class="contact-icon" src="svg/contact_us/Call-icon.svg" alt="Call-icon">
                            <span>91- 6001 3961 86</span>
                        </div>
                        <div class="contact-item">
                            <img class="contact-icon" src="svg/contact_us/mail-icon.svg" alt="Call-icon">
                            <span>admin@indigiconsulting.com</span>
                        </div>
                        <div class="contact-item">
                            <img class="contact-icon" src="svg/contact_us/website-icon.svg" alt="Call-icon">
                            <span>www.indigiconsulting.com</span>
                        </div>
                        <div class="contact-item">
                            <img class="contact-icon" src="svg/contact_us/location-icon.svg" alt="Call-icon">
                            <span>House No-194, 2nd Floor, Panjabari Road, Ghy-37, Assam</span>
                        </div>
                    </div>
                </div>

                <div class="contact-right">
                    <form id="contactForm" action="{{ route('contact-us') }}" method="POST">
                        @csrf()
                        <div class="Contactform-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter name here">
                        </div>
                        <div class="Contactform-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter email here">
                        </div>
                        <div class="Contactform-group">
                            <label for="phone">Phone number</label>
                            <input type="tel" id="phone" name="phone" placeholder="Enter phone number here">
                        </div>
                        <div class="Contactform-group">
                            <label for="message">Message</label>
                            <textarea id="message" rows="5" name="message" placeholder="Message here"></textarea>
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
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}",
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
@endpush