<!-- Styles -->
<style>
    .testimonials-section {
        background-color: #e0f7fa; /* Light blue background for the section */
        padding: 60px 20px; /* Padding around the tab section */
        border-radius: 10px; /* Rounded corners for the section */
    }

    .nav-testimonials {
        border-bottom: 2px solid #007bff; /* Blue underline for the tabs */
    }

    .nav-testimonials .nav-item .nav-link {
        border: none; /* Remove border */
        color: #007bff; /* Tab text color */
        font-weight: bold; /* Make tab text bold */
        text-indent: -9999px; /* Move text off-screen */
        overflow: hidden; /* Hide overflow */
        white-space: nowrap; /* Prevent wrapping */
        position: relative; /* Allow for positioning */
        transition: text-indent 0.3s, opacity 0.3s; /* Smooth transition */
    }

    .nav-testimonials .nav-item .nav-link.active {
        color: #fff; /* White text for active tab */
        background-color: #007bff; /* Blue background for active tab */
        border-radius: 5px 5px 0 0; /* Rounded corners for active tab */
        text-indent: 0; /* Show active tab name */
        opacity: 1; /* Ensure the active tab is fully visible */
    }

    .nav-testimonials .nav-item .nav-link.inactive {
        opacity: 0; /* Hide inactive tabs */
    }

    .nav-testimonials .nav-item:hover .nav-link.inactive {
        opacity: 1; /* Show inactive tabs on hover */
        text-indent: 0; /* Show text for hovered inactive tabs */
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
</style>

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials-section py-5">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h5>What Our Clients Say</h5>
            <h1>Testimonials</h1>
        </div>

        <div class="tabs">
            <ul class="nav nav-testimonials">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#testimonial1">Rongsheng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link inactive" data-toggle="tab" href="#testimonial2">IGGL</a>
                </li>
                <!-- Add more clients as needed -->
            </ul>
            <div class="tab-content">
                <div id="testimonial1" class="tab-pane fade show active">
                    <img src="{{ asset('images/testimonials/rongsheng.jpg') }}" class="img-fluid testimonial-img" alt="Client 1">
                    <p class="testimonial-text">"Indigi Consulting transformed our business processes, leading to increased efficiency and satisfaction!"</p>
                    <p>Android Development</p>
                </div>
                <div id="testimonial2" class="tab-pane fade">
                    <img src="{{ asset('images/testimonials/iggl_testimonial.jpg') }}" class="img-fluid testimonial-img" alt="Client 2">
                    <p class="testimonial-text">"The team at Indigi is knowledgeable and dedicated, ensuring that our needs were met at every stage."</p>
                </div>
                <!-- Add more testimonials here -->
            </div>
        </div>
    </div>
</section>

<!-- JavaScript -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        // Activate tabs on click
        $('.nav-link').on('click', function() {
            const target = $(this).attr('href');

            // Remove active class and add inactive class to all links
            $('.nav-link').removeClass('active').addClass('inactive');

            // Set the clicked tab to active and reset its text indent
            $(this).removeClass('inactive').addClass('active').css('text-indent', '0');

            // Show corresponding tab content
            $('.tab-pane').removeClass('show active'); // Hide all tab content
            $(target).addClass('show active'); // Show the selected tab content

            // Show all client names on hover
            $('.nav-testimonials').hover(function() {
                $('.nav-link.inactive').css('opacity', '1').css('text-indent', '0'); // Show inactive client names
            }, function() {
                $('.nav-link.inactive').css('opacity', '0').css('text-indent', '-9999px'); // Hide inactive client names
            });
        });
    });
</script>
