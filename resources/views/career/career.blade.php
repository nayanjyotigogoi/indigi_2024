@extends('layouts.app-new')

@section('title', 'Career | Indigi')

@push('styles')
    <style>
        /* h3{
               color: rgba(8, 53, 81, 1);
                font-size: 18px;
            } */
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
            font-weight: 600;
        }

        .cta-button:hover {
            background-color: #FFC107;
        }

        /* Culture Section */
        .culture-section {
            padding: 4rem 0;
            background: #f8fafc;
        }

        .culture-content {
            margin: 0 30px;
            display: flex;
            align-items: center;
            gap: 3rem;

        }

        .culture-logos {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .indiai-logo {
            display: flex;
            flex-direction: column;
        }

        .logo-text {
            font-size: 2rem;
            font-weight: 700;
            color: #2563eb;
        }

        .logo-subtitle {
            font-size: 0.8rem;
            color: #64748b;
            letter-spacing: 1px;
        }

        .sap-badge {
            background: #0066cc;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            text-align: center;
            min-width: 80px;
        }

        .sap-text {
            display: block;
            font-size: 1.2rem;
            font-weight: 700;
        }

        .partner-text {
            display: block;
            font-size: 0.8rem;
        }

        .culture-text h2 {
            font-size: 1.6rem;
            margin-bottom: 1rem;
            color: #1e293b;
        }

        .culture-text p {
            color: #64748b;
            line-height: 1.7;
        }

        /* benefits-section */
        .career-benefits-section {
            padding: 4rem 2rem;
            /* background-color: #f8fafc; */
            background-color: rgba(245, 251, 255, 1)
        }

        .career-section-title {
            text-align: center;
            font-size: 1.5rem;
            margin-bottom: 3rem;
            /* color: #1e293b; */
            color: rgba(8, 53, 81, 1);
            font-weight: 700;
        }

        .career-benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.3rem;
            max-width: 1200px;
            margin: 0 30px;
        }

        .career-benefit-card {
            /* background-color: white; */
            padding: 2rem;
            border-radius: 16px;
            text-align: center;
            /* box-shadow: 0 6px 12px rgba(0, 0, 0, 0.05); */
            /* border: 1px solid #e2e8f0; */
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .career-benefit-icon {
            width: 70px;
            height: 70px;
            background: #eff6ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
        }

        .career-benefit-icon img {
            width: 82px;
            height: 82px;
            object-fit: contain;
        }

        .career-benefit-card h3 {
            font-size: 1.0rem;
            /* color: #1d4ed8; */
            color: rgba(8, 53, 81, 1);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .career-benefit-card p {
            font-size: 0.95rem;
            color: #64748b;
        }

        /* Openings Section */
        .openings-section {
            padding: 4rem 0;
            background: #f8fafc;
        }

        .jobs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin: 3rem;
        }

        .job-card {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
            transition: all 0.3s;
            text-align: center;
            /* Center text inside the card */
        }

        .job-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .job-title {
            text-align: center;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #1e293b;
        }

        .job-details {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .job-detail {
            display: block;
            text-align: center;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            color: #64748b;
        }


        .job-button {
            background: linear-gradient(270.6deg, #074C79 -15.66%, #147DC0 67.38%);

            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 23px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
            width: 50%;
        }

        .job-button:hover {
            background: #1d4ed8;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .culture-content {
                flex-direction: column;
                text-align: center;
                gap: 2rem;
            }

            .career-benefits-grid {
                grid-template-columns: 1fr;
            }

            .jobs-grid {
                grid-template-columns: 1fr;
            }

            .nav {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2rem;
            }

            .career-section-title {
                font-size: 2rem;
            }
            .culture-image{
                max-width: 250px;

            }

            /* .container {
                padding: 0 15px;
            } */
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

    <!-- Culture Section -->
    <!-- <section class="culture-section" id="company-culture">
        <div class="container">
            <div class="culture-content">
                <div class="culture-logos">
                    <img src="{{ asset('images/indigi_logo.jpg') }}" alt="Indigi Logo" class="culture-image">
                </div>
                <div class="culture-text">
                    <h2>Our Culture</h2>
                    <p>At INDIGI, we foster a collaborative and inclusive environment. We believe in </p>
                    <p> empowering our team members
                        to share their ideas and make an impact.</p>
                </div>
            </div>
        </div>
    </section> -->


    <!-- Why Work With Us Section -->
    <section class="career-benefits-section">
        <div class="career-container">
            <h2 class="career-section-title">Why Work With Us?</h2>
            <div class="career-benefits-grid">
                <!-- Repeat for all cards -->
                <div class="career-benefit-card">
                    <div class="career-benefit-icon">
                        <img src="images/career/Competitive Salary.svg" alt="Competitive Salary" />
                    </div>
                    <h3>Competitive Salary</h3>
                    <p>Get paid what you're worth with industry-aligned compensation</p>
                </div>
                <!-- Add 7 more cards similarly -->
                <div class="career-benefit-card">
                    <div class="career-benefit-icon">
                        <img src="images/career/Growth Opportunities.svg" alt="Growth Opportunities" />
                    </div>
                    <h3>Growth Opportunities</h3>
                    <p>Grow your career with clear advancement paths</p>
                </div>

                <div class="career-benefit-card">
                    <div class="career-benefit-icon">
                        <img src="images/career/Work-Life Balance.svg" alt="Work-Life Balance" />
                    </div>
                    <h3>Work-Life Balance</h3>
                    <p>Flexible hours and policies that support your lifestyle</p>
                </div>

                <div class="career-benefit-card">
                    <div class="career-benefit-icon">
                        <img src="images/career/Development Programs.svg" alt="Development Programs" />
                    </div>
                    <h3>Development Programs</h3>
                    <p>Learn and upskill with training and mentorship</p>
                </div>

                <div class="career-benefit-card">
                    <div class="career-benefit-icon">
                        <img src="images/career/Inclusive Workplace.svg" alt="Inclusive Workplace" />
                    </div>
                    <h3>Inclusive Workplace</h3>
                    <p>Diverse, welcoming, and respectful culture.</p>
                </div>

                <div class="career-benefit-card">
                    <div class="career-benefit-icon">
                        <img src="images/career/Employee Recognition.svg" alt="Employee Recognition" />
                    </div>
                    <h3>Employee Recognition</h3>
                    <p>Get rewarded and appreciated for your efforts</p>
                </div>

                <div class="career-benefit-card">
                    <div class="career-benefit-icon">
                        <img src="images/career/Generous Leave Policy.svg" alt="Generous Leave Policy" />
                    </div>
                    <h3>Generous Leave Policy</h3>
                    <p>Enjoy ample paid time off when you need it</p>
                </div>

                <div class="career-benefit-card">
                    <div class="career-benefit-icon">
                        <img src="images/career/Collaborative Culture.svg" alt="Collaborative Culture" />
                    </div>
                    <h3>Collaborative Culture</h3>
                    <p>Work with supportive teams that value your ideas</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Current Openings Section -->
    <section class="openings-section" id="openings">
        <div class="container">
            <h2 class="career-section-title">Current Openings</h2>
            <div class="jobs-grid">
                @foreach ($jobs as $job)
                    <div class="job-card">
                        <h3 class="job-title">{{ $job->post_name }}</h3>
                        <div class="job-details">
                            <div class="job-detail">
                                <span>Experience:</span>
                                <span>{{ $job->experience }}</span>
                            </div>
                            <div class="job-detail">
                                <span>Location:</span>
                                <span>{{ $job->openings }} {{ $job->city }}</span>
                            </div>
                        </div>
                        <a href="{{ route('view-job', $job->id) }}" class="job-button">Know More →</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- GSAP Scroll Animations -->
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