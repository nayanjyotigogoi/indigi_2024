@extends('layouts.app-new')

@section('title', 'Career | Indigi')
@push('styles')
    <style>
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
            background-color: #FFD700;
            color: black;
            border-radius: 25px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            display: inline-block;
            margin-top: 1rem;
        }

        .cta-button:hover {
            background-color: #FFC107;
        }

        #company-culture,
        #benefits,
        #job-listings {
            margin: 20px auto;
            border-radius: 10px;
            padding: 4rem 2rem;
            max-width: 1200px;
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        #company-culture {
            background-color: white;
            text-align: center;
        }

        #benefits {
            background-color: #f1f1f1;
            text-align: center;
        }

        .benefit-list {
            list-style-type: none;
            padding: 0;
        }

        #job-listings {
            background-color: white;
            text-align: center;
        }
        .job-listing-h2{
            font-size: 24px;
            margin-bottom: 43px;
        }

        .job-cards-wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            justify-content: center;
        }

        .job-card {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 250px;
            align-items: center;
            /* Centering content horizontally */
            text-align: center;
            /* Ensures text is centered */
        }

        .job-card h3 {
            margin-bottom: 0.5rem;
        }

        .job-card p {
            margin: 0.25rem 0;
        }

        .job-card ul {
            text-align: center;
            margin-top: 0.5rem;
            margin-bottom: 1rem;
            padding-left: 1.2rem;
        }

        .apply-button {
            padding: 0.5rem 1rem;
            background-color: #007BFF;
            color: white;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            margin-top: auto;
            display: inline-block;
            /* Ensure the button is treated as an inline block element */
        }

        .apply-button:hover {
            background-color: #0056b3;
        }

        #cta-footer {
            border-radius: 20px;
            padding: 3rem 2rem;
            background-color: #007BFF;
            color: white;
            text-align: center;
            max-width: 800px;
            margin: 2rem auto;
        }

        #cta-footer p {
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .job-cards-wrapper {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endpush
@section('content')


    <!-- Hero -->
    <section id="career-hero">
        <div class="hero-content">
            <h1>Join Our Team</h1>
            <p>Your dream job awaits!</p>
            <a href="#job-listings" class="cta-button">View Job Openings</a>
        </div>
    </section>

    <!-- Culture -->
    <section id="company-culture">
        <h2>Our Culture</h2>
        <p>At INDIGI, we foster a collaborative and inclusive environment. We believe in empowering our team members to
            share their ideas and make an impact. Join us to work in a vibrant and supportive atmosphere where innovation
            thrives.</p>
        <img src="{{ asset('images/indigi_logo.jpg') }}" alt="Company Culture" class="culture-image"
            style="max-width: 60%; border-radius: 8px; margin-top: 2rem;">
    </section>

    <!-- Benefits -->
    <section id="benefits">
        <h2>Why Work With Us?</h2>
        <ul class="benefit-list">
            <li>💼 Competitive Salary</li>
            <li>📈 Growth Opportunities</li>
            <li>🧘‍♀️ Work-Life Balance</li>
            <li>👩‍🎓 Development Programs</li>
            <li>🌍 Inclusive Workplace</li>
        </ul>
    </section>

    <!-- Job Listings -->
    <section id="job-listings">
        <h2 class="job-listing-h2">Current Openings</h2>
        <div class="job-cards-wrapper">
            @foreach ($jobs as $job)
                <div class="job-card">
                    <h3>{{ $job->post_name }}</h3>
                    <p><strong>Department:</strong> {{ $job->Department }}</p>
                    <p><strong>Location:</strong> {{ $job->city }}</p>

                    <p><strong>position:</strong>{{ $job->position_type }}</p>

                    <a href="{{ route('view-job', $job->id) }}" class="apply-button">View Job</a>
                </div>
            @endforeach

        </div>
    </section>

    <!-- CTA -->
    <section id="cta-footer">
        <h2>Ready to Take the Next Step?</h2>
        <p>If you're passionate and driven, we want to hear from you!</p>
        <a href="{{ route('contact.show') }}" class="cta-button">Join Our Team</a>
    </section>
@endsection


@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            gsap.registerPlugin(ScrollTrigger);
            gsap.from(".hero-content h1", { opacity: 0, y: -50, duration: 1 });
            gsap.from(".hero-content p", { opacity: 0, y: 30, duration: 1, delay: 0.3 });
            gsap.from(".cta-button", { opacity: 0, y: 20, duration: 1, delay: 0.6 });

            ['#company-culture', '#benefits', '#job-listings'].forEach(id => {
                gsap.to(id, {
                    scrollTrigger: { trigger: id, start: "top 80%", toggleActions: "play none none reset" },
                    opacity: 1, y: 0, duration: 1
                });
            });

            document.querySelectorAll(".job-card").forEach((card, i) => {
                gsap.to(card, {
                    scrollTrigger: { trigger: card, start: "top 80%", toggleActions: "play none none reset" },
                    opacity: 1, y: 0, duration: 0.5, delay: i * 0.1
                });
            });

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
@endpush