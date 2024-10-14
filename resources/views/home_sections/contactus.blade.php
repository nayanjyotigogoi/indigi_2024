<section id="contact" class="contact-section">
    <div class="container">
        <h2 class="section-title">Contact Us</h2>
        <div class="contact-info">
            <div class="contact-details">
                <h3>Get in Touch</h3>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <p><strong>Office Address:</strong> H no 194C, 2nd Floor, Panjabari Rd, above SBI, Batahguli, Guwahati, Assam 781037</p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <p><strong>Phone:</strong> +91-8586 0184 41</p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <p><strong>Email:</strong> <a href="mailto:admin@indigiconsulting.com">admin@indigiconsulting.com</a></p>
                </div>
            </div>
            <div class="contact-form-calendar">
                <h3>Schedule a Meeting & Get in Touch</h3>
                <form id="contactForm">
                    <div class="form-group">
                        <input type="text" placeholder="Your Name" required class="form-input">
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Your Email" required class="form-input">
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Your Message" required class="form-textarea"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="meetingDate"><strong>Preferred Meeting Date:</strong></label>
                        <input type="date" id="meetingDate" class="calendar-input" required>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
        <div class="map-container">
            <h3>Find Us Here</h3>
            <div id="map"></div>
        </div>
    </div>
</section>

<!-- Contact Section Styles -->
<style>
    .contact-section {
        padding: 60px 0;
        background-color: #f8f9fa;
        color: #333;
    }

    .section-title {
        text-align: center;
        margin-bottom: 40px;
        font-size: 2.5rem;
        color: #333;
    }

    .contact-info {
        display: flex;
        justify-content: space-between;
        margin-bottom: 40px;
    }

    .contact-details {
        flex: 1;
        margin-right: 20px;
    }

    .contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .contact-item i {
        margin-right: 10px;
        color: #4ca1af;
    }

    .contact-form-calendar {
        flex: 1;
        text-align: center;
        border-left: 2px solid #4ca1af;
        padding-left: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-input, .form-textarea, .calendar-input {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-textarea {
        height: 100px;
    }

    .submit-btn {
        margin-top: 10px;
        padding: 10px 20px;
        background-color: #4ca1af;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .submit-btn:hover {
        background-color: #2c3e50;
    }

    .map-container {
        margin-top: 40px;
        text-align: center;
    }

    #map {
        width: 100%;
        height: 400px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
</style>

<!-- FontAwesome CDN for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Contact Section JavaScript -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    const map = L.map('map').setView([26.132983437495234, 91.83012876933256], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(map);

    L.marker([26.132983437495234, 91.83012876933256]).addTo(map)
        .bindPopup('Indigi Consulting')
        .openPopup();
</script>
