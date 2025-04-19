@extends('layouts.app-new')

@section('title', $productDetails['title'] . ' | Indigi')

@section('content')

    <!-- Header -->
    <header class="solution-header">
        <div class="container">
            <div class="header-content">
                <div class="header-text">
                    <h1 id="solution-title">{{ $productDetails['title'] ?? 'Solution Title' }}</h1>
                    <p id="solution-tagline">{{ $productDetails['tagline'] ?? 'Your tagline goes here.' }}</p>
                    <a href="{{ route('contact.show') }}" class="btn btn-white">Request a Demo <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="header-image">
                    @if (!empty($productDetails['image']))
                        <img src="{{ asset('uploads/' . $productDetails['image']) }}" alt="{{ $productDetails['title'] }}">
                    @endif
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="learn-more-container">

        <!-- Overview Section -->
        <section class="content-section">
            <div class="section-header">
                <i class="fas fa-book-open"></i>
                <h2>Overview</h2>
            </div>
            <div class="section-divider"></div>

            <div class="grid-layout">
                <div class="main-content">
                    <p id="solution-overview" class="overview-text">
                        {!! $productDetails['overview'] ?? '' !!}
                    </p>


                </div>

                <div class="side-content">
                    <div class="card">
                        <div class="card-header">
                            <h3>Key Highlights</h3>
                        </div>
                        <div class="card-content">
                            {!! $productDetails['highlights'] ?? '' !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Who Can Opt Section -->
        <section class="content-section">
            <div class="section-header">
                <i class="fas fa-users"></i>
                <h2>Who Can Opt for It?</h2>
            </div>
            <div class="section-divider"></div>

            <div class="grid-layout">
                <div class="opt-list" id="who-can-opt">
                    {!! $productDetails['who_can_opt'] ?? '' !!}
                </div>

                <div class="ideal-for">
                    <div class="card">
                        <div class="card-header">
                            <h3>Ideal For</h3>
                        </div>
                        <div class="card-content">

                            {!! $productDetails['ideal_for'] ?? '' !!}

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Key Benefits Section -->
        <section class="content-section">
            <div class="section-header">
                <i class="fas fa-bolt"></i>
                <h2>Key Benefits</h2>
            </div>
            <div class="section-divider"></div>

            <div class="benefits-grid" id="key-benefits">
                {!! $productDetails['key_benefits'] ?? '' !!}
            </div>


            <div class="business-impact">
                <h3>Business Impact</h3>
                <div class="impact-metrics">
                    {!! $productDetails['business_impact'] ?? '' !!}
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section class="content-section">
            <div class="section-header">
                <i class="fas fa-cog"></i>
                <h2>How It Works</h2>
            </div>
            <div class="section-divider"></div>

            <div class="grid-layout">
                <div class="how-it-works-section">
                    <div class="card full-width">
                        <div class="card-content">
                            <div class="how-it-works-content" id="how-it-works">
                                {!! $productDetails['how_it_works'] ?? '' !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="implementation-process-section">
                    <div class="card">
                        <div class="card-header">
                            <h3>Implementation Process</h3>
                        </div>
                        <div class="card-content">
                            {!! $productDetails['implementation'] ?? '' !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <h2 id="cta-title">Ready to get started?</h2>
            <p>Discover the power of our solutions.</p>
            <div class="cta-buttons">
                <!-- 'Get Started Today' Button that links to submit.show -->
                <button class="btn btn-white" onclick="window.location.href='{{ route('contact.show') }}'">
                    Get Started Today
                </button>

                <!-- 'Schedule a Demo' Button that also links to contact.show -->
                <button class="btn btn-outline" onclick="window.location.href='{{ route('contact.show') }}'">
                    Schedule a Demo
                </button>
            </div>
        </section>


    </main>

@endsection