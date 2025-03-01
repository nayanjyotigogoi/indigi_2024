@extends('layouts.app')

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

    <div class="story-container">
        <div class="story-image-container">
            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-WSj2SZxyibjtSXeVaJuPv5H6GTto1b.png" alt="Our Story Image">
        </div>
        <div class="story-content">
            <h2>Our Story</h2>
            <p>Lorem ipsum dolor sit amet consectetur. Maecenas hendrerit sagittis enim consequat velit ipsum. Lorem pellentesque accumsan ac sagittis. Tincidunt ac nam euismod mattis turpis condimentum eu. Sed at cursus in viverra pellentesque enim. Tincidunt ac nam euismod mattis turpis condimentum eu. Sed at cursus in viverra pellentesque enim. Tincidunt ac nam euismod mattis turpis condimentum eu. Sed at cursus in viverra pellentesque enim.</p>
        </div>
    </div>

    <div class="Vission-mission-container">
        <h1 class="header-vision">Our Mission & Vision</h1>
        <div class="Vission-mission-cards-container">
            <div class="Vission-mission-card" onmouseover="animateCard(this)" onmouseout="resetCard(this)">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-WTCSrvmM9zjXBAfiAHKfJaVAMV9TiD.png" alt="Mission Icon" class="icon">
                <h2>Our Mission</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Maecenas hendrerit sagittis enim consequat velit ipsum. Lorem pellentesque accumsan ac sagittis. Tincidunt ac nam euismod mattis turpis condimentum eu. Sed at cursus in viverra pellentesque enim.Lorem ipsum dolor sit amet consectetur. Maecenas hendrerit sagittis enim consequat velit ipsum. Lorem</p>
            </div>
            <div class="Vission-mission-card" onmouseover="animateCard(this)" onmouseout="resetCard(this)">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-WTCSrvmM9zjXBAfiAHKfJaVAMV9TiD.png" alt="Vision Icon" class="icon">
                <h2>Our Vision</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Maecenas hendrerit sagittis enim consequat velit ipsum. Lorem pellentesque accumsan ac sagittis. Tincidunt ac nam euismod mattis turpis condimentum eu. Sed at cursus in viverra pellentesque enim.Lorem ipsum dolor sit amet consectetur. Maecenas hendrerit sagittis enim consequat velit ipsum. Lorem</p>
            </div>
        </div>
    </div>

    <!-- Meet the Founders Section -->
    <div class="founders-section">
        <div class="founders-title">Meet the Founders</div>
        <div class="small-title">Who We Are</div>
        <div class="who-we-are">
            We are a team of dedicated professionals with years of experience. Our passion lies in driving success for our clients through innovative solutions.
        </div>

        <div class="founder-container">
            <!-- Founder 1 -->
            <div class="founder">
                <img src="images/team6.jpg" alt="Founder 1">
                <div class="founder-description">XYZ</div>
                <p>CEO & Co-Founder</p>
            </div>
            <!-- Founder 2 -->
            <div class="founder">
                <img src="images/gallery/image7.jpg" alt="Founder 2">
                <div class="founder-description">XYZ</div>
                <p>CTO & Co-Founder</p>
            </div>
            <!-- Founder 3 -->
            <div class="founder">
                <img src="images/gallery/image7.jpg" alt="Founder 3">
                <div class="founder-description">XYZ</div>
                <p>COO</p>
            </div>
        </div>
    </div>


    <!-- Our Journey Timeline Section -->
    <div class="timeline-section">
        <div class="timeline-title">Our Journey</div>

        <div class="timeline">
            <div class="timeline-event left">
                <div class="timeline-event-content">
                    <h3>2018</h3>
                    <p>Company founded in Guwahati, becoming the first SAP provider in North East India.</p>
                </div>
            </div>
            <div class="timeline-event right">
                <div class="timeline-event-content">
                    <h3>2019</h3>
                    <p>Expanded our services to include custom software development and IT consulting.</p>
                </div>
            </div>
            <div class="timeline-event left">
                <div class="timeline-event-content">
                    <h3>2020</h3>
                    <p>Awarded as the most innovative IT startup in the region.</p>
                </div>
            </div>
            <div class="timeline-event right">
                <div class="timeline-event-content">
                    <h3>2021</h3>
                    <p>Achieved a milestone of 20+ satisfied clients across various industries.</p>
                </div>
            </div>
            <div class="timeline-event left">
                <div class="timeline-event-content">
                    <h3>2022</h3>
                    <p>Achieved a milestone of 40+ satisfied clients across various industries.</p>
                </div>
            </div>
            <div class="timeline-event right">
                <div class="timeline-event-content">
                    <h3>2023</h3>
                    <p>Achieved a milestone of 50+ satisfied clients across various industries.</p>
                </div>
            </div>
            <div class="timeline-event left">
                <div class="timeline-event-content">
                    <h3>2024</h3>
                    <p>Achieved a milestone of 100+ satisfied clients across various industries.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
