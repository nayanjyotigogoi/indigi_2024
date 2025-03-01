@extends('layouts.app')

@section('title', 'Contact | Indigi')

@section('content')
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