<!-- Styles -->
<style>
    .testimonials-section {
        background-color: #e0f7fa; /* Light blue background for the section */
        padding: 60px 20px; /* Padding around the tab section */
        border-radius: 10px; /* Rounded corners for the section */
    }

    .nav-tabs {
        border-bottom: 2px solid #007bff; /* Blue underline for the tabs */
    }

    .nav-tabs .nav-item .nav-link {
        border: none; /* Remove border */
        color: #007bff; /* Tab text color */
        font-weight: bold; /* Make tab text bold */
        visibility: hidden; /* Hide all client names by default */
        opacity: 0; /* Make invisible */
        transition: opacity 0.3s ease; /* Smooth transition for visibility */
    }

    .nav-tabs .nav-item .nav-link.active {
        color: #fff; /* White text for active tab */
        background-color: #007bff; /* Blue background for active tab */
        border-radius: 5px 5px 0 0; /* Rounded corners for active tab */
        visibility: visible; /* Only the active tab's client name is visible */
        opacity: 1; /* Make visible */
    }

    .nav-tabs .nav-item:hover .nav-link {
        visibility: visible; /* Show client name on hover */
        opacity: 1; /* Make visible */
    }

    .testimonial-img {
        max-width: 200px; /* Set this to a larger value */
        width: auto; /* Allow the width to adjust based on the image aspect ratio */
        height: auto; /* Ensure the height adjusts based on aspect ratio */
        margin-top: 20px; /* Adjust margin as needed */
        border-radius: 50%; /* Keep or remove for a round image */
    }

    .testimonial-text {
        font-size: 1.2rem; /* Adjust font size for better readability */
        margin-bottom: 10px; /* Space below text */
    }

    .tab-content {
        padding: 20px; /* Padding inside the tab content */
        border: 1px solid #007bff; /* Border around tab content */
        border-radius: 0 0 10px 10px; /* Rounded corners for content */
    }

    /* Show nav links on hover */
    .testimonials-section:hover .nav-link {
        visibility: visible; /* Show client name on hover */
        opacity: 1; /* Make visible */
    }
</style>

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials-section py-5">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h5>What Our Clients Say</h5>
            <h1>Testimonials</h1>
        </div>

        <div class="tabs">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#testimonial1">Rongsheng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#testimonial2">Iggl</a>
                </li>
                <!-- Add more clients as needed -->
            </ul>
            <div class="tab-content">
                <div id="testimonial1" class="tab-pane fade show active">
                    <img src="{{ asset('images/testimonials/rongsheng.jpg') }}" class="img-fluid testimonial-img" alt="Client 1">
                    <p class="testimonial-text">"Indigi Consulting transformed our business processes, leading to increased efficiency and satisfaction!"</p>
                    <h5>Rongsheng Mobile India Pvt. Ltd.</h5>
                    <p>Android Development</p>
                </div>
                <div id="testimonial2" class="tab-pane fade">
                    <img src="{{ asset('images/testimonials/iggl_testimonial.jpg') }}" class="img-fluid testimonial-img" alt="Client 2">
                    <p class="testimonial-text">"The team at Indigi is knowledgeable and dedicated, ensuring that our needs were met at every stage."</p>
                    <h5>iggl</h5>
                    <p>Iggl</p>
                </div>
                <!-- Add more testimonials here -->
            </div>
        </div>
    </div>
</section>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        let currentIndex = 0;
        const testimonials = $('.tab-pane');
        const navLinks = $('.nav-link');
        const totalTestimonials = testimonials.length;
        let interval;

        function showTestimonial(index) {
            // Hide all testimonials and reset client names
            testimonials.removeClass('show active');
            navLinks.removeClass('active').css('visibility', 'hidden').css('opacity', 0);

            // Show current testimonial and client name
            $(testimonials[index]).addClass('show active');
            navLinks.eq(index).addClass('active').css('visibility', 'visible').css('opacity', 1);
        }

        function nextTestimonial() {
            currentIndex = (currentIndex + 1) % totalTestimonials;
            showTestimonial(currentIndex);
        }

        // Start automatic cycling
        interval = setInterval(nextTestimonial, 5000);

        // Pause cycling on hover of the testimonials section or nav link
        $('.testimonials-section, .nav-link').hover(function() {
            clearInterval(interval); // Stop cycling on hover
        }, function() {
            interval = setInterval(nextTestimonial, 5000); // Restart cycling when hover ends
        });

        // Show active client name on hover, keep non-active names hidden
        navLinks.hover(function() {
            $(this).css('visibility', 'visible').css('opacity', 1); // Show name on hover
        }, function() {
            if (!$(this).hasClass('active')) {
                $(this).css('visibility', 'hidden').css('opacity', 0); // Hide non-active name
            }
        });

        // Initialize with the first testimonial visible
        showTestimonial(currentIndex);
    });
</script>



