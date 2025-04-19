@extends('layouts.app-new')

@section('title', 'Home | INDIGI')
<!-- Add AOS CSS -->
@push('styles')
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
@endpush
@section('content')

    <!-- hero section -->
    <section id="heroSection" class="heroSection">
        <!-- Video Container -->
        <div class="hero-video-container">
            <video class="hero-video-3d" autoplay muted loop>
                <source src="video/3D-bg.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <div class="hero-content-box">
                <!-- Text content inside the box -->
                <p>EMPOWERING BUSINESS WITH</p>
                <p>CUTTING EDGE &</p>
                <p>IT SOLUTIONS</p>
                <a href="{{ route('contact.show') }}">Connect</a>
            </div>
        </div>

    </section>

    <!-- About Us Section -->
    <section id="aboutUsSection" class="aboutUs-section" data-aos="fade-up">
        <div class="aboutUscontainer">
            <div class="aboutUsleft-section" data-aos="fade-right">
                <div class="aboutUs">About Us</div>
                <h1 class="aboutUstitle">Powering Digital Transformation with Innovation!</h1>
                <p class="aboutUsdescription">Indigi Consulting & Solutions, established in 2018 and based in Guwahati, is
                    the only SAP service provider in Northeast India. </p>
                <p class="aboutUsdescription">We deliver tailored digital solutions across industries, focused on boosting
                    efficiency, reducing manual effort, and enhancing productivity, with customer satisfaction at the core
                    of everything we do.
                    <!-- <strong>Your growth, our commitment!</strong> -->
                </p>

                <a href="{{ route('about') }}" class="aboutUslearn-more">Learn More →</a>
            </div>
            <div class="aboutUsright-section" data-aos="fade-up">
                <div class="aboutUscard">
                    <img class="aboutUsicon" src="svg/about_us/Innovation.svg" alt="Innovation">
                    <h3 class="aboutUscard-title">Innovation</h3>
                    <div class="aboutUsquote">"Think Different"</div>
                </div>
                <div class="aboutUscard">
                    <img class="aboutUsicon" src="svg/about_us/growth.svg" alt="Innovation">
                    <h3 class="aboutUscard-title">Growth</h3>
                    <div class="aboutUsquote">"Beyond Limits"</div>
                </div>
                <div class="aboutUscard">
                    <img class="aboutUsicon" src="svg/about_us/collaboration.svg" alt="Innovation">
                    <h3 class="aboutUscard-title">Collaboration</h3>
                    <div class="aboutUsquote">"Stronger Together"</div>
                </div>
                <div class="aboutUscard">
                    <img class="aboutUsicon" src="svg/about_us/efficiency.svg" alt="Innovation">
                    <h3 class="aboutUscard-title">Efficiency</h3>
                    <div class="aboutUsquote">"Work Smarter"</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Count section -->
    <section id="countSection" class="count-section">
        <div class="countstats-container">
            <div class="countstats-wrapper">
                <div class="countstat-item">
                    <img class="counticon" src="/svg/count/happy_clients.svg" alt="Happy Clients">
                    <div class="countnumber" data-target="50">0</div>
                    <div class="countlabel">Happy Clients</div>
                </div>


                <div class="countstat-item">
                    <img class="counticon" src="/svg/count/Completed_projects.svg" alt="Completed Projects">
                    <div class="countnumber" data-target="50">0</div>
                    <div class="countlabel">Completed Projects</div>
                </div>

                <div class="countstat-item">
                    <img class="counticon" src="/svg/count/industry_Verticals.svg" alt="Industry Verticals">
                    <div class="countnumber" data-target="15">0</div>
                    <div class="countlabel">Industry Verticals</div>
                </div>

                <div class="countstat-item">
                    <img class="counticon" src="/svg/count/experience.svg" alt="Experience">
                    <div class="countnumber" data-target="7">0</div>
                    <div class="countlabel">Experience</div>
                </div>
            </div>
        </div>
    </section>

    <!-- services section -->
    <section class="services-section-home" data-aos="fade-up">
        <img class="services-background-home" src="{{ asset('svg/services/background-our-services.png') }}"
            alt="Our Services Background">
        <h3 class="servicessection-title-home">Our Services</h3>
        <h2 class="servicessection-heading-home">We Offer A Wide Variety Of IT Services</h2>

        <div class="services-grid-home" data-aos="fade-right">

            @foreach($services as $service)
                <div class="service-card-home">
                    <div class="service-icon-home">


                        <img class="service-icon-home" src="{{ asset('uploads/service/' . $service->header_image) }}"
                            alt="{{ $service->title }}">
                    </div>

                    <h3 class="service-title">{{ $service->title }}</h3>
                    <!-- Truncate tagline to 100 characters with ellipsis if it's too long -->
                    <p class="service-description_page">{{ \Illuminate\Support\Str::limit($service->tagline, 100, '...') }}</p>
                    <a href="{{ route('services.viewservices', ['slug' => $service->slug]) }}" class="know-more">Know More</a>
                </div>
            @endforeach

        </div>

        <a href="/services" class="servicesexplore-btn">Explore More →</a>
    </section>

    <!-- product section -->
    <section class="portfolio-section" data-aos="fade-up">
        <div class="portfoliocontainer">

            <header class="portfolioheader">
                <h1>Our Product</h1>
                <h2>Explore Our Innovative Solutions</h2>
            </header>
            <!-- <div class="portfoliofilternav">
                                                        <button class="portfoliofilter-btn active">All Work</button>
                                                        <button class="portfoliofilter-btn">SAP Solution</button>
                                                        <button class="portfoliofilter-btn">Mobile Apps</button>
                                                        <button class="portfoliofilter-btn">Websites</button>
                                                        <button class="portfoliofilter-btn">Web Portals</button>
                                                    </div> -->

            <div class="portfolio-grid" data-aos="fade-right">
                @foreach($products as $product)
                    <div class="portfolio-item">
                        <img src="{{ asset('uploads/' . $product->image) }}" alt="{{ $product->title }}">

                        <div class="portfoliooverlay">
                            <h3>{{ $product['title'] }}</h3>
                            <p>{{ $product['tagline'] }}</p>
                            <a href="{{ route('solutions.show', $product['slug']) }}" class="productcard-button">Learn more</a>

                        </div>
                        <div class="portfolioplay-icon"></div>
                    </div>
                @endforeach

            </div>

        </div>


    </section>

    <!-- partners section -->
    <section class="partners-section" data-aos="fade-right">
        <div class="mainpartner-container">
            <div class="partners-content" data-aos="fade-up">
                <h2 class="partnersubtitle">Our Partners</h2>
                <h1 class="partnertitle">Strengthening Business Through Strategic Partnerships</h1>
                <p class="partnerdescription">
                    We collaborate with leading global brands to deliver exceptional solutions and create lasting value.
                    Our partnerships are built on trust and innovation, ensuring we meet the evolving needs of businesses
                    worldwide. Together, we drive success and shape the future.
                </p>
            </div>

            <!-- Right partner container -->
            <div class="partners-logos" id="partners-logos" data-aos="fade-down">
                <div class="rightcontainer">
                    <div class="rightcenterBox">
                        <img class="rightcenter-img" decoding="async" src="images/partners/center-img.png"
                            alt="center image">
                    </div>
                    <div class="rightbox">
                        <div class="rightimg">
                            <div class="rightimgBx" style="--i:1;">
                                <img decoding="async" src="{{ asset('images/partners/SAP-partner-logo.png') }}" alt="img 1">
                            </div>
                            <div class="rightimgBx" style="--i:2;">
                                <img decoding="async" src="{{ asset('images/partners/ctrl-S.png')}}" alt="Ctrl S">
                            </div>
                            <div class="rightimgBx" style="--i:3;">
                                <img decoding="async" src="{{ asset('images/partners/logitax.png')}}" alt="logitax">
                            </div>
                            <div class="rightimgBx" style="--i:4;">
                                <img decoding="async" src="images/partners/aws.png" alt="Aws">
                            </div>
                            <div class="rightimgBx" style="--i:5;">
                                <img decoding="async" src="images/partners/emudhra.png" alt="eMudra">
                            </div>
                            <div class="rightimgBx" style="--i:6;">
                                <img decoding="async" src="images/partners/Microsoft.png" alt="img 6">
                            </div>
                            <div class="rightimgBx" style="--i:7;">
                                <img decoding="async" src="images/partners/zoho.png" alt="img 7">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- certfication section -->
    <section class="certifications">
        <h3 class="certifications_subtitle">Our Certifications</h3>
        <h2 class="certifications_title">ISO and CMMI : Industry Standards of Trust and Quality</h2>
        <p class="certifications_description">Our ISO and CMMI certifications demonstrate our unwavering commitment to
            maintaining the highest standards in quality management, process optimization, and continuous improvement.</p>

        <div class="certifications_grid">
            <div class="certification-item" data-aos="fade-up">
                <img src="images/cmmi-3.png" alt="CMI Level 5" class="certification-item_image">
                <p class="certification-item_text">CMMI Level 5</p>
            </div>
            <div class="certification-item" data-aos="fade-right">
                <img src="images/ISO_2018.png" alt="ISO 20000-1:2018 Certified" class="certification-item_image">
                <p class="certification-item_text">ISO 20000-1:2018 Certified</p>
            </div>
            <div class="certification-item" data-aos="fade-down">
                <img src="images/ISO_2013.png" alt="ISO 27001:2013 Certified" class="certification-item_image">
                <p class="certification-item_text">ISO 27001:2013 Certified</p>
            </div>
            <div class="certification-item" data-aos="fade-right">
                <img src="images/ISO_9000_2018.png" alt="ISO 9001:2018 Certified" class="certification-item_image">
                <p class="certification-item_text">ISO 9001:2018 Certified</p>
            </div>
        </div>
    </section>

    <!-- testimonial section -->
    <!-- <section class="testimonial-section">
                <div class="Testimonialscontainer">
                    <p class="Testimonialssubtitle">Testimonial's</p>
                    <h1>What Our Clients Say About Us</h1>
                    <p class="Testimonialsdescription">Our clients' success stories reflect our dedication to delivering excellence.
                        Here's what they have to say about their experience working with us:</p>

                    <div class="testimonial-slider">
                        <button class="Testimonialsslider-nav Testimonialsprev">←</button>
                        <div class="testimonials-wrapper">
                            <div class="testimonials">
                                <div class="testimonial-card">
                                    <div class="Testimonialsstars">★★★★★ <span class="Testimonialsrating">5/5</span></div>
                                    <p class="testimonial-text">Lorem ipsum dolor sit amet consectetur. At sed imperdiet amet
                                        ultrices dapibus aliquet. Facilisis nascetur rhoncus pulvinar ultrices nec in lorem aliquam.
                                    </p>
                                    <div class="Testimonialsprofile">
                                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/testimonials.jpg-a9oCrwwSj5UPgaQongRbQQIVyUFHyp.jpeg"
                                            alt="Profile">
                                        <div class="Testimonialsprofile-info">
                                            <h4>Maxin Will</h4>
                                            <p>Product Manager</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-card">
                                    <div class="Testimonialsstars">★★★★☆ <span class="Testimonialsrating">4/5</span></div>
                                    <p class="testimonial-text">Lorem ipsum dolor sit amet consectetur. At sed imperdiet amet
                                        ultrices dapibus aliquet. Facilisis nascetur rhoncus pulvinar ultrices nec in lorem aliquam.
                                    </p>
                                    <div class="Testimonialsprofile">
                                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/testimonials.jpg-a9oCrwwSj5UPgaQongRbQQIVyUFHyp.jpeg"
                                            alt="Profile">
                                        <div class="Testimonialsprofile-info">
                                            <h4>Maxin Will</h4>
                                            <p>Product Manager</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-card">
                                    <div class="Testimonialsstars">★★★★☆ <span class="Testimonialsrating">4/5</span></div>
                                    <p class="testimonial-text">Lorem ipsum dolor sit amet consectetur. At sed imperdiet amet
                                        ultrices dapibus aliquet. Facilisis nascetur rhoncus pulvinar ultrices nec in lorem aliquam.
                                    </p>
                                    <div class="Testimonialsprofile">
                                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/testimonials.jpg-a9oCrwwSj5UPgaQongRbQQIVyUFHyp.jpeg"
                                            alt="Profile">
                                        <div class="Testimonialsprofile-info">
                                            <h4>Maxin Will</h4>
                                            <p>Product Manager</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-card">
                                    <div class="Testimonialsstars">★★★★☆ <span class="Testimonialsrating">4/5</span></div>
                                    <p class="testimonial-text">Lorem ipsum dolor sit amet consectetur. At sed imperdiet amet
                                        ultrices dapibus aliquet. Facilisis nascetur rhoncus pulvinar ultrices nec in lorem aliquam.
                                    </p>
                                    <div class="Testimonialsprofile">
                                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/testimonials.jpg-a9oCrwwSj5UPgaQongRbQQIVyUFHyp.jpeg"
                                            alt="Profile">
                                        <div class="Testimonialsprofile-info">
                                            <h4>Maxin Will</h4>
                                            <p>Product Manager</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-card">
                                    <div class="Testimonialsstars">★★★★☆ <span class="rating">4/5</span></div>
                                    <p class="testimonial-text">Lorem ipsum dolor sit amet consectetur. At sed imperdiet amet
                                        ultrices dapibus aliquet. Facilisis nascetur rhoncus pulvinar ultrices nec in lorem aliquam.
                                    </p>
                                    <div class="Testimonialsprofile">
                                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/testimonials.jpg-a9oCrwwSj5UPgaQongRbQQIVyUFHyp.jpeg"
                                            alt="Profile">
                                        <div class="Testimonialsprofile-info">
                                            <h4>Maxin Will</h4>
                                            <p>Product Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="Testimonialsslider-nav Testimonialsnext">→</button>
                    </div>

                    <div class="Testimonialsdots">
                        <span class="Testimonialsdot active"></span>
                        <span class="Testimonialsdot"></span>
                        <span class="Testimonialsdot"></span>
                        <span class="Testimonialsdot"></span>
                        <span class="Testimonialsdot"></span>
                    </div>
                </div>

                <div class="write-review-container">
                                                <a class="write-review-button" href='/submit-review'>
                                                   Post Your Review
                                                </a>
                                            </div>   
                <div class="write-review-container">
                    <a href="/write-review" class="servicesexplore-btn">Post Your Review →</a>
                </div>

            </section> -->

    <!-- Gallery section -->
    <section id="gallery" class="gallery-section">
        <div class="gallery-container">
            <h1 class="gallery_subtitle">Our Gallery</h1>
            <h2 class="section-title">Life At Indigi</h2>
            <div class="gallery-grid">
                <div class="gallery-item" data-aos="fade-up" data-aos-duration="500">
                    <img src="images/gallery/image1.jpeg" alt="Image 1" class="lightbox-trigger">
                    <div class="overlay">Image 1 Description</div>
                </div>
                <div class="gallery-item" data-aos="fade-down" data-aos-duration="500">
                    <img src="images/gallery/image2.jpeg" alt="Image 2" class="lightbox-trigger">
                    <div class="overlay">Image 2 Description</div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-duration="500">
                    <img src="images/gallery/image3.jpg" alt="Image 3" class="lightbox-trigger">
                    <div class="overlay">Image 3 Description</div>
                </div>
                <div class="gallery-item" data-aos="fade-left" data-aos-duration="500">
                    <img src="images/gallery/image4.jpeg" alt="Image 4" class="lightbox-trigger">
                    <div class="overlay">Image 4 Description</div>
                </div>
                <div class="gallery-item" data-aos="fade-right" data-aos-duration="500">
                    <img src="images/gallery/image5.jpeg" alt="Image 5" class="lightbox-trigger">
                    <div class="overlay">Image 5 Description</div>
                </div>
                <div class="gallery-item" data-aos="slide-up" data-aos-duration="500">
                    <img src="images/gallery/image6.jpeg" alt="Image 6" class="lightbox-trigger">
                    <div class="overlay">Image 6 Description</div>
                </div>
                <div class="gallery-item" data-aos="flip-left" data-aos-duration="500">
                    <img src="images/gallery/image7.jpg" alt="Image 7" class="lightbox-trigger">
                    <div class="overlay">Image 7 Description</div>
                </div>
                <div class="gallery-item" data-aos="flip-right" data-aos-duration="500">
                    <img src="images/gallery/image8.jpg" alt="Image 8" class="lightbox-trigger">
                    <div class="overlay">Image 8 Description</div>
                </div>
                <div class="gallery-item" data-aos="zoom-out" data-aos-duration="500">
                    <img src="images/gallery/image9.jpeg" alt="Image 9" class="lightbox-trigger">
                    <div class="overlay">Image 9 Description</div>
                </div>
                <div class="gallery-item" data-aos="fade-in" data-aos-duration="500">
                    <img src="images/gallery/image10.jpeg" alt="Image 10" class="lightbox-trigger">
                    <div class="overlay">Image 10 Description</div>
                </div>
                <div class="gallery-item" data-aos="slide-down" data-aos-duration="500">
                    <img src="images/gallery/image11.jpeg" alt="Image 11" class="lightbox-trigger">
                    <div class="overlay">Image 11 Description</div>
                </div>
                <div class="gallery-item" data-aos="slide-right" data-aos-duration="500">
                    <img src="images/gallery/image12.jpeg" alt="Image 12" class="lightbox-trigger">
                    <div class="overlay">Image 12 Description</div>
                </div>
                <div class="gallery-item" data-aos="fade-up-right" data-aos-duration="500">
                    <img src="images/gallery/image13.jpeg" alt="Image 13" class="lightbox-trigger">
                    <div class="overlay">Image 13 Description</div>
                </div>
                <div class="gallery-item" data-aos="fade-up-right" data-aos-duration="500">
                    <img src="{{ asset('images/gallery/image14.jpg') }}" alt="Image 14" class="lightbox-trigger">
                    <div class="overlay">Image 14 Description</div>
                </div>
                <div class="gallery-item" data-aos="fade-up-right" data-aos-duration="500">
                    <img src="images/gallery/image15.jpeg" alt="Image 15" class="lightbox-trigger">
                    <div class="overlay">Image 15 Description</div>
                </div>
                <div class="gallery-item" data-aos="fade-up-right" data-aos-duration="500">
                    <img src="{{ asset('images/gallery/image16.jpg') }}" alt="Image 16" class="lightbox-trigger">
                    <div class="overlay">Image 146Description</div>
                </div>
                <div class="gallery-item" data-aos="fade-up-right" data-aos-duration="500">
                    <img src="{{ asset('images/gallery/image17.jpg') }}" alt="Image 17" class="lightbox-trigger">
                    <div class="overlay">Image 17 Description</div>
                </div>
                <div class="gallery-item" data-aos="fade-up-right" data-aos-duration="500">
                    <img src="{{ asset('images/gallery/image18.jpg') }}" alt="Image 18" class="lightbox-trigger">
                    <div class="overlay">Image 18 Description</div>
                </div>
                <div class="gallery-item" data-aos="fade-up-right" data-aos-duration="500">
                    <img src="{{ asset('images/gallery/image19.jpg') }}" alt="Image 19" class="lightbox-trigger">
                    <div class="overlay">Image 19 Description</div>
                </div>
                <div class="gallery-item" data-aos="fade-up-right" data-aos-duration="500">
                    <img src="{{ asset('images/gallery/image20.jpg') }}" alt="Image 20" class="lightbox-trigger">
                    <div class="overlay">Image 20 Description</div>
                </div>
                <div class="gallery-item" data-aos="fade-up-right" data-aos-duration="500">
                    <img src="{{ asset('images/gallery/image21.jpg') }}" alt="Image 21" class="lightbox-trigger">
                    <div class="overlay">Image 21 Description</div>
                </div>
                <div class="gallery-item" data-aos="fade-up-right" data-aos-duration="500">
                    <img src="{{ asset('images/gallery/image22.jpg') }}" alt="Image 22" class="lightbox-trigger">
                    <div class="overlay">Image 22 Description</div>
                </div>
                <div class="gallery-item" data-aos="fade-up-right" data-aos-duration="500">
                    <img src="{{ asset('images/gallery/image23.jpg') }}" alt="Image 23" class="lightbox-trigger">
                    <div class="overlay">Image 23 Description</div>
                </div>
                <div class="gallery-item" data-aos="fade-up-right" data-aos-duration="500">
                    <img src="{{ asset('images/gallery/image24.jpg') }}" alt="Image 24" class="lightbox-trigger">
                    <div class="overlay">Image 24 Description</div>
                </div>
                <div class="gallery-item" data-aos="fade-up-right" data-aos-duration="500">
                    <img src="{{ asset('images/gallery/image25.jpg') }}" alt="Image 25" class="lightbox-trigger">
                    <div class="overlay">Image 25 Description</div>
                </div>
                
            </div>
        </div>

        <!-- Lightbox Modal -->
        <div id="lightbox" class="lightbox">
            <span class="close">&times;</span>
            <img class="lightbox-img" id="lightboxImg" src="" alt="">
            <div class="lightbox-caption">
                <button class="zoom-btn">Zoom</button>
            </div>
        </div>
    </section>

    <!-- client section -->
    <section class="client-map-section">
        <div class="client-container">
            <div class="client-global-presence">
                <!-- Content Section -->
                <div class="client-content">
                    <h2 class="client-subtitle">Our Global Presence</h2>
                    <h1 class="client-title">Trusted by Clients Around the World</h1>
                    <p class="client-description">Serving clients worldwide, we deliver tailored solutions and build strong
                        connections wherever they are.</p>
                </div>

                <!-- Map Section -->
                <!-- Map Section -->
                <div class="client-map-container">
                <img src="images/map.png" alt="Client Location"
                style="width: 100%; height: auto; border-radius: 12px;">
                    
                </div>

                <!-- <div class="client-map-container">
                        <div id="client-map" data-aos="fade-up" data-aos-duration="1000">

                        </div>
                    </div> -->
            </div>
        </div>
    </section>

    <!-- client logo section -->
    <section class="client-logos-section-logo_client">
    <div class="container-logo_client">
      <div class="section-header-logo_client">
        <h2 class="client-subtitle">Trusted by Industry Leaders</h2>
        <p class="client-description">We're proud to work with some of the most innovative companies across the globe.</p>
      </div>

      <div class="logos-scroll-wrapper">
        <div class="logos-grid-logo_client" id="logos-grid-logo_client">
          <!-- Logos will be inserted here by JavaScript -->
        </div>
      </div>
    </div>
  </section>


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
                <p>Have questions or need assistance? We're here to help! Reach out to us and let's work together to achieve
                    your goals.</p>
            </div>

            <div class="contact-content">
                <div class="contact-left">
                    <div class="Contactmap-container">
                        <iframe width="100%" height="250px" style="border-radius: 8px; border: 0;" loading="lazy"
                            allowfullscreen referrerpolicy="no-referrer-when-downgrade"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14316.673843579536!2d91.79659537327568!3d26.126282165576393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a599292a5c5df%3A0xc7e4b99f5a7d6f2d!2sPanjabari%20Rd%2C%20Guwahati%2C%20Assam%20781037!5e0!3m2!1sen!2sin!4v1707903154621!5m2!1sen!2sin">
                        </iframe>
                    </div>

                    <div class="contact-info">
                        <div class="contact-item">
                            <img class="contact-icon" src="svg/contact_us/Call-icon.svg" alt="Call-icon">
                            <span>91- 6001 3961 86</span>
                        </div>
                        <div class="contact-item">
                            <img class="contact-icon" src="svg/contact_us/mail-icon.svg" alt="Call-icon">
                            <span>admin@indigiconsulting.com</span>
                        </div>
                        <div class="contact-item">
                            <img class="contact-icon" src="svg/contact_us/website-icon.svg" alt="Call-icon">
                            <span>www.indigiconsulting.com</span>
                        </div>
                        <div class="contact-item">
                            <img class="contact-icon" src="svg/contact_us/location-icon.svg" alt="Call-icon">
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
<!-- Add AOS JS -->
@push('scripts')
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1500,
            once: true,
        });
    </script>
@endpush