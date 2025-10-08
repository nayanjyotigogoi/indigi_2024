@extends('layouts.app-new')

@section('title', $service->title . ' | Indigi')

@section('content')
    <!-- Header -->
    <header class="solution-header">
        <div class="container">
            <div class="header-content">
                <div class="header-text">
                    <h1 id="solution-title">{{ $service->title }}</h1>
                    <p id="solution-tagline">
                        {{ $service->tagline }}
                    </p>
                    <a href={{ route('contact.show') }} class="btn btn-white">
                        Request a Demo <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                @if($service->header_image)
                    <div class="header-image">
                        <!-- <img src="{{ asset('uploads/service/' . $service->header_image) }}" alt="{{ $service->title }}"
                            style="max-width: 80px;"> -->
                    </div>
                @endif
            </div>
        </div>
    </header>

    <main class="learn-more-container">
        <!-- Stats Section -->
        <div class="stats-section">
            <div class="container">
                <div class="stats-grid">
                    {!! $service->stats_section !!}
                </div>
            </div>
        </div>

        <!-- Tabbed Content -->
        <div class="tabs-section">
            <div class="container">
                <div class="tabs-container">
                    <div class="tabs-header">
                        <button class="tab-button active" data-tab="features">Key Features</button>
                        <button class="tab-button" data-tab="duration">Duration</button>
                        <button class="tab-button" data-tab="details">Additional Details</button>
                    </div>

                    <div class="tab-content active" id="features">
                        <div class="features-grid">
                            {!! $service->features_section !!}
                        </div>
                    </div>

                    <div class="tab-content" id="duration">
                        {!! $service->duration_section !!}
                    </div>

                    <div class="tab-content" id="details">
                        {!! $service->details_section !!}
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <section class="cta-section">
            <h2 id="cta-title">Ready to get started?</h2>
            <p>Discover the power of our solutions.</p>
            <div class="cta-buttons">
                <!-- 'Get Started' Button that always links to submit.show -->
                <a href="{{ route('contact.show') }}" class="btn btn-white">
                    Get Started
                </a>
                <!-- 'Schedule a Demo' Button that always links to submit.show -->
                <button class="btn btn-outline" onclick="window.location.href='{{ route('contact.show') }}'">
                    Schedule a Demo
                </button>
            </div>
        </section>


    </main>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');

            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    tabContents.forEach(content => content.classList.remove('active'));

                    button.classList.add('active');
                    const tabId = button.getAttribute('data-tab');
                    document.getElementById(tabId).classList.add('active');
                });
            });

            const featureCards = document.querySelectorAll('.feature-card');
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            function animateOnScroll() {
                featureCards.forEach(card => {
                    if (isInViewport(card)) {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }
                });
            }

            featureCards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            });

            window.addEventListener('scroll', animateOnScroll);
            animateOnScroll();
        });
    </script>
@endpush