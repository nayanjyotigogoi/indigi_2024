@extends('layouts.app-new')
@section('title', 'Services | Indigi')

@section('content')

    <!-- Our Service main div -->
    <div id="our-service-hero">
        <div class="our-service-content">
            <h1>Share Your Experience</h1>
            <p>Your feedback helps us grow and serve you better. Let us know how we did!</p>
            <a href="#reviewForm" class="cta-button">Write a Review</a>
        </div>
    </div>

    <section class="Contactcontainer">
        <div id="formContainer">
            <h1 class="header1">Submit Your Review</h1>

            <form id="reviewForm" method="POST" action="{{ route('submit.review') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your email" required>
                </div>

                <div class="form-group">
                    <label for="designation">Designation</label>
                    <input type="text" name="designation" id="designation" placeholder="Your designation">
                </div>

                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" name="company" id="company" placeholder="Your company">
                </div>

                <div class="form-group">
                    <label for="rating">Rating</label>
                    <div class="star-rating">
                        <input type="radio" id="star5" name="rating" value="5" required><label for="star5"
                            title="5 stars">&#9733;</label>
                        <input type="radio" id="star4" name="rating" value="4"><label for="star4"
                            title="4 stars">&#9733;</label>
                        <input type="radio" id="star3" name="rating" value="3"><label for="star3"
                            title="3 stars">&#9733;</label>
                        <input type="radio" id="star2" name="rating" value="2"><label for="star2"
                            title="2 stars">&#9733;</label>
                        <input type="radio" id="star1" name="rating" value="1"><label for="star1"
                            title="1 star">&#9733;</label>
                    </div>
                </div>


                <div class="form-group">
                    <label for="review">Your Review</label>
                    <textarea name="review" id="review" placeholder="Tell us about your experience..." required></textarea>
                </div>

                <button type="submit" class="Contactsubmit-btn">Submit Review</button>
            </form>


            <div class="success-message" id="successMessage">
                <div class="success-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 13L9 17L19 7" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <h2 class="success-title">Thank you for your review!</h2>
                <p class="success-text">Your feedback has been submitted successfully.</p>
                <button id="newReviewButton">Submit Another Review</button>
            </div>
        </div>
    </section>


@endsection
@push('scripts')
    <script>
        // document.addEventListener('DOMContentLoaded', function () {
        //     const starsContainer = document.getElementById('starsContainer');
        //     const ratingText = document.getElementById('ratingText');
        //     let selectedRating = 0;

        //     for (let i = 1; i <= 5; i++) {
        //         const star = document.createElement('div');
        //         star.classList.add('star');
        //         star.dataset.value = i;
        //         star.innerHTML = `
        //                 <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
        //                     <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" 
        //                         stroke-linecap="round" stroke-linejoin="round"/>
        //                 </svg>
        //             `;

                // Hover effect
                // star.addEventListener('mouseenter', function () {
                //     highlightStars(parseInt(this.dataset.value));
                // });

                // Click to select rating
                // star.addEventListener('click', function () {
                //     selectedRating = parseInt(this.dataset.value);
                //     highlightStars(selectedRating);
                //     ratingText.textContent = `${selectedRating} out of 5`;
                // });

            //         starsContainer.appendChild(star);
            //     }

            //     starsContainer.addEventListener('mouseleave', function () {
            //         highlightStars(selectedRating);
            //     });

            //     function highlightStars(count) {
            //         const stars = starsContainer.querySelectorAll('.star');
            //         stars.forEach((star, index) => {
            //             if (index < count) {
            //                 star.classList.add('active');
            //             } else {
            //                 star.classList.remove('active');
            //             }
            //         });
            //     }
            // });
    </script>
@endpush