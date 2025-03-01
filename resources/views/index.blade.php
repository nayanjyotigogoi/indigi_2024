@extends('layouts.app')

@section('title', 'Home | INDIGI')

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
                    <a href="#connect">Connect</a>
                </div>
            </div>

    </section>

    <!-- About Us Section -->
    <section id="aboutUsSection" class="aboutUs-section">
        <div class="aboutUscontainer">
            <div class="aboutUsleft-section">
                <div class="aboutUs">About Us</div>
                <h1 class="aboutUstitle">Powering Digital Transformation with Innovation!</h1>
                <p class="aboutUsdescription">Established in 2018, Indigi Consulting & Solutions is Northeast India's ONLY SAP provider! Based in Guwahati.</p>
                <p class="aboutUsdescription">We deliver cutting-edge digital solutions to transform businesses. Customer satisfaction drives us, and our mission is to innovate, optimize, and empower businesses for success. <strong>Your growth, our commitment!</strong></p>

                <a href="#" class="aboutUslearn-more">Learn More →</a>
            </div>
            <div class="aboutUsright-section">
                <div class="aboutUscard">
                    <svg class="aboutUsicon" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/>
                    </svg>
                    <h3 class="aboutUscard-title">Innovation</h3>
                    <div class="aboutUsquote">"Think Different"</div>
                </div>
                <div class="aboutUscard">
                    <svg class="aboutUsicon" viewBox="0 0 24 24">
                        <path d="M3.5 18.5l6-6 4 4L22 6.92l-1.41-1.41-7.09 7.97-4-4L2 16.99z"/>
                    </svg>
                    <h3 class="aboutUscard-title">Growth</h3>
                    <div class="aboutUsquote">"Beyond Limits"</div>
                </div>
                <div class="aboutUscard">
                    <svg class="aboutUsicon" viewBox="0 0 24 24">
                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                    </svg>
                    <h3 class="aboutUscard-title">Collaboration</h3>
                    <div class="aboutUsquote">"Stronger Together"</div>
                </div>
                <div class="aboutUscard">
                    <svg class="aboutUsicon" viewBox="0 0 24 24">
                        <path d="M12 6v3l4-4-4-4v3c-4.42 0-8 3.58-8 8 0 1.57.46 3.03 1.24 4.26L6.7 14.8c-.45-.83-.7-1.79-.7-2.8 0-3.31 2.69-6 6-6zm6.76 1.74L17.3 9.2c.44.84.7 1.79.7 2.8 0 3.31-2.69 6-6 6v-3l-4 4 4 4v-3c4.42 0 8-3.58 8-8 0-1.57-.46-3.03-1.24-4.26z"/>
                    </svg>
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
                    <svg class="counticon" viewBox="0 0 24 24">
                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                    </svg>
                    <div class="countnumber" data-target="50">0</div>
                    <div class="countlabel">Happy Clients</div>
                </div>
                
                <div class="countstat-item">
                    <svg class="counticon" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/>
                    </svg>
                    <div class="countnumber" data-target="50">0</div>
                    <div class="countlabel">Completed Projects</div>
                </div>
                
                <div class="countstat-item">
                    <svg class="counticon" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    </svg>
                    <div class="countnumber" data-target="15">0</div>
                    <div class="countlabel">Industry Verticals</div>
                </div>
                
                <div class="countstat-item">
                    <svg class="counticon" viewBox="0 0 24 24">
                        <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                    </svg>
                    <div class="countnumber" data-target="6">0</div>
                    <div class="countlabel">Industry Verticals</div>
                </div>
            </div>
        </div>
    </section>

    <!-- services section -->
    <section class="services-section">
        <h3 class="servicessection-title">Our Services</h3>
        <h2 class="servicessection-heading">We Offer A Wide Variety Of IT Services</h2>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">📊</div>
                <h3 class="service-title">SAP Consulting</h3>
                <p class="service-description">Empower your business with expert <strong>SAP Consulting!</strong>  We analyze, strategize, and optimize your SAP ecosystem for seamless efficiency and growth.</p>
                <a href="#" class="card-arrow"><i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="service-card">
                <div class="service-icon">💡</div>
                <h3 class="service-title">SAP Implementation</h3>
                <p class="service-description">Accelerate success with our SAP Implementation! From planning to execution, we ensure a smooth, hassle-free transition to SAP solutions.</p>
                <a href="#" class="card-arrow"><i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="service-card">
                <div class="service-icon">🎯</div>
                <h3 class="service-title">SAP Support</h3>
                <p class="service-description">Reliable SAP Support at every step! Our experts provide continuous assistance, ensuring optimal performance and minimal downtime.</p>
                <a href="#" class="card-arrow"><i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="service-card">
                <div class="service-icon">⚙️</div>
                <h3 class="service-title">SAP Business Technology Platform</h3>
                <p class="service-description">Unlock innovation with SAP Business Technology Platform! Integrate, analyze, and automate processes for smarter business decisions and efficiency.</p>
                <a href="#" class="card-arrow"><i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="service-card">
                <div class="service-icon">🤖</div>
                <h3 class="service-title">Business Process Automation</h3>
                <p class="service-description">Revolutionize workflows with Business Process Automation! Eliminate manual tasks, boost efficiency, and drive productivity with cutting-edge automation.</p>
                <a href="#" class="card-arrow"><i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="service-card">
                <div class="service-icon">📱</div>
                <h3 class="service-title">Mobile App & Website Development</h3>
                <p class="service-description">Transform ideas into reality with Mobile App & Website Development! Stunning, responsive, and high-performing digital experiences for your brand.</p>
                <a href="#" class="card-arrow"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>

        <a href="/services" class="servicesexplore-btn">Explore More →</a>
    </section>

    <!-- product section -->
    <section class="product-section">
        <!-- <div class="products-section"> -->
            <div class="productbackground-shapes">
                <div class="productshape"></div>
                <div class="productshape"></div>
            </div>

            <h2 class="productsubtitle">Our Products</h2>
            <h1 class="producttitle">Lorem ipsum dolor sit amet consectetur.</h1>

            <div class="productcards-grid">
                <div class="productcard">
                    <img src="images/S4HANA.jpg" alt="SAP S/4 HANA">
                    <div class="productblack-overlay">
                        <div class="productplay-button"></div>
                    </div>
                    <div class="productblue-overlay">
                        <h3 class="productcard-title">SAP S/4 HANA</h3>
                        <p class="productcard-description">Next-generation ERP solution</p>
                        <a href="#" class="productcard-button">Request demo</a>
                    </div>
                </div>

                <div class="productcard">
                    <img src="images/SBBD.jpg" alt="SAP Business ByDesign">
                    <div class="productblack-overlay">
                        <div class="productplay-button"></div>
                    </div>
                    <div class="productblue-overlay">
                        <h3 class="productcard-title">SAP S/4 HANA</h3>
                        <p class="productcard-title">Cloud ERP for growing businesses.</>
                        <a href="#" class="productcard-button">Request demo</a>
                    </div>
                </div>

                <div class="productcard">
                    <img src="images/rws.jpg" alt="RISE WITH SAP">
                    <div class="productblack-overlay">
                        <div class="productplay-button"></div>
                    </div>
                    <div class="productblue-overlay">
                        <h3 class="productcard-title">Business Transformation as a Service</h3>
                        <a href="#" class="productcard-button">Request demo</a>
                    </div>
                </div>

                <div class="productcard">
                    <img src="images/BTP.jpg" alt="SAP BTP">
                    <div class="productblack-overlay">
                        <div class="productplay-button"></div>
                    </div>
                    <div class="productblue-overlay">
                        <h3 class="productcard-title">SAP Business Technology Platform</h3>
                        <a href="#" class="productcard-button">Request demo</a>
                    </div>
                </div>
            </div>
        
        <a href="/products" class="productexplore-btn">Explore More →</a>
        
    </section>

    <!-- portfolio section -->
    <section class="portfolio-section">
        <div class="portfoliocontainer">
            <header class="portfolioheader">
                <h1>Portfolio</h1>
                <h2>Lorem ipsum dolor sit amet</h2>
            </header>

            <div class="portfoliofilternav">
                <button class="portfoliofilter-btn active">All Work</button>
                <button class="portfoliofilter-btn">SAP Solution</button>
                <button class="portfoliofilter-btn">Mobile Apps</button>
                <button class="portfoliofilter-btn">Websites</button>
                <button class="portfoliofilter-btn">Web Portals</button>
            </div>

            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <img src="images/mobile_dev.jpg" alt="Portfolio Item 1">
                    <div class="portfoliooverlay">
                        <h3>Mobile App Development</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="portfolioplay-icon"></div>
                </div>
                <div class="portfolio-item">
                    <img src="images/website_dev.jpg" alt="Portfolio Item 2">
                    <div class="portfoliooverlay">
                        <h3>Website Development</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="portfolioplay-icon"></div>
                </div>
                <div class="portfolio-item">
                    <img src="images/SAP-Fiori.jpg" alt="Portfolio Item 3">
                    <div class="portfoliooverlay">
                        <h3>SAP SOLUTIONS</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="portfolioplay-icon"></div>
                </div>
                <div class="portfolio-item">
                    <img src="images/web_portal.jpg" alt="Portfolio Item 4">
                    <div class="portfoliooverlay">
                        <h3>Web Portal</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="portfolioplay-icon"></div>
                </div>
                <div class="portfolio-item">
                    
                    <img src="images/rws.jpg" alt="Portfolio Item 4">
                    <div class="portfoliooverlay">
                        <h3>SAP SOLUTIONS</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="portfolioplay-icon"></div>
                </div>
                <div class="portfolio-item">
                    <img src="images/BTP.jpg" alt="Portfolio Item 4">
                    <div class="portfoliooverlay">
                        <h3>SAP SOLUTIONS</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="portfolioplay-icon"></div>
                </div>
            </div>
        </div>
      
    </section>

    <!-- partners section -->
    <section class="partners-section">
        <div class="mainpartner-container">
            <div class="partners-content">
                <h2 class="partnersubtitle">Our Partners</h2>
                <h1 class="partnertitle">Strengthening Business Through Strategic Partnerships</h1>
                <p class="partnerdescription">
                    We collaborate with leading global brands to deliver exceptional solutions and create lasting value. 
                    Our partnerships are built on trust and innovation, ensuring we meet the evolving needs of businesses worldwide. 
                    Together, we drive success and shape the future.
                </p>
            </div>

            <!-- Right partner container -->
            <div class="partners-logos" id="partners-logos">
                <div class="rightcontainer">
                    <div class="rightcenterBox">
                        <img class="rightcenter-img" decoding="async" src="images/partners/center-img.png" alt="center image">
                    </div>
                    <div class="rightbox">
                        <div class="rightimg">
                            <div class="rightimgBx" style="--i:1;">
                                <img decoding="async" src="images/partners/SAP-partner-logo.png" alt="img 1">
                            </div>
                            <div class="rightimgBx" style="--i:2;">
                                <img decoding="async" src="images/partners/ctrl-S.png" alt="Ctrl S">
                            </div>
                            <div class="rightimgBx" style="--i:3;">
                                <img decoding="async" src="images/partners/logitax.png" alt="logitax">
                            </div>
                            <div class="rightimgBx" style="--i:4;">
                                <img decoding="async" src="images/partners/hostbooks.png" alt="hostbooks">
                            </div>
                            <div class="rightimgBx" style="--i:5;">
                                <img decoding="async" src="images/partners/images_esds.png" alt="img 5">
                            </div>
                            <div class="rightimgBx" style="--i:6;">
                                <img decoding="async" src="images/partners/Software_Hire.png" alt="img 6">
                            </div>
                            <div class="rightimgBx" style="--i:7;">
                                <img decoding="async" src="images/partners/SAP_BYD.png" alt="img 7">
                            </div>
                            <!-- <div class="rightimgBx" style="--i:8;">
                                <img decoding="async" src="images/ISO_2013.png" alt="img 8">
                            </div> -->
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
        <p class="certifications_description">Our ISO and CMMI certifications demonstrate our unwavering commitment to maintaining the highest standards in quality management, process optimization, and continuous improvement.</p>
        
        <div class="certifications_grid">
            <div class="certification-item">
                <img src="images/cmmi-3.png" alt="CMI Level 5" class="certification-item_image">
                <p class="certification-item_text">CMMI Level 5</p>
            </div>
            <div class="certification-item">
                <img src="images/ISO_2018.png" alt="ISO 20000-1:2018 Certified" class="certification-item_image">
                <p class="certification-item_text">ISO 20000-1:2018 Certified</p>
            </div>
            <div class="certification-item">
                <img src="images/ISO_2013.png" alt="ISO 27001:2013 Certified" class="certification-item_image">
                <p class="certification-item_text">ISO 27001:2013 Certified</p>
            </div>
            <div class="certification-item">
                <img src="images/ISO_9000_2018.png" alt="ISO 9001:2018 Certified" class="certification-item_image">
                <p class="certification-item_text">ISO 9001:2018 Certified</p>
            </div>
        </div>
    </section>

    <!-- testimonial section -->
    <section class="testimonial-section">
        <div class="Testimonialscontainer">
            <p class="Testimonialssubtitle">Testimonial's</p>
            <h1>What Our Clients Say About Us</h1>
            <p class="Testimonialsdescription">Our clients' success stories reflect our dedication to delivering excellence. Here's what they have to say about their experience working with us:</p>

            <div class="testimonial-slider">
                <button class="Testimonialsslider-nav Testimonialsprev">←</button>
                <div class="testimonials-wrapper">
                    <div class="testimonials">
                        <div class="testimonial-card">
                            <div class="Testimonialsstars">★★★★★ <span class="Testimonialsrating">5/5</span></div>
                            <p class="testimonial-text">Lorem ipsum dolor sit amet consectetur. At sed imperdiet amet ultrices dapibus aliquet. Facilisis nascetur rhoncus pulvinar ultrices nec in lorem aliquam.</p>
                            <div class="Testimonialsprofile">
                                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/testimonials.jpg-a9oCrwwSj5UPgaQongRbQQIVyUFHyp.jpeg" alt="Profile">
                                <div class="Testimonialsprofile-info">
                                    <h4>Maxin Will</h4>
                                    <p>Product Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="Testimonialsstars">★★★★☆ <span class="Testimonialsrating">4/5</span></div>
                            <p class="testimonial-text">Lorem ipsum dolor sit amet consectetur. At sed imperdiet amet ultrices dapibus aliquet. Facilisis nascetur rhoncus pulvinar ultrices nec in lorem aliquam.</p>
                            <div class="Testimonialsprofile">
                                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/testimonials.jpg-a9oCrwwSj5UPgaQongRbQQIVyUFHyp.jpeg" alt="Profile">
                                <div class="Testimonialsprofile-info">
                                    <h4>Maxin Will</h4>
                                    <p>Product Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="Testimonialsstars">★★★★☆ <span class="Testimonialsrating">4/5</span></div>
                            <p class="testimonial-text">Lorem ipsum dolor sit amet consectetur. At sed imperdiet amet ultrices dapibus aliquet. Facilisis nascetur rhoncus pulvinar ultrices nec in lorem aliquam.</p>
                            <div class="Testimonialsprofile">
                                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/testimonials.jpg-a9oCrwwSj5UPgaQongRbQQIVyUFHyp.jpeg" alt="Profile">
                                <div class="Testimonialsprofile-info">
                                    <h4>Maxin Will</h4>
                                    <p>Product Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="Testimonialsstars">★★★★☆ <span class="Testimonialsrating">4/5</span></div>
                            <p class="testimonial-text">Lorem ipsum dolor sit amet consectetur. At sed imperdiet amet ultrices dapibus aliquet. Facilisis nascetur rhoncus pulvinar ultrices nec in lorem aliquam.</p>
                            <div class="Testimonialsprofile">
                                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/testimonials.jpg-a9oCrwwSj5UPgaQongRbQQIVyUFHyp.jpeg" alt="Profile">
                                <div class="Testimonialsprofile-info">
                                    <h4>Maxin Will</h4>
                                    <p>Product Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="Testimonialsstars">★★★★☆ <span class="rating">4/5</span></div>
                            <p class="testimonial-text">Lorem ipsum dolor sit amet consectetur. At sed imperdiet amet ultrices dapibus aliquet. Facilisis nascetur rhoncus pulvinar ultrices nec in lorem aliquam.</p>
                            <div class="Testimonialsprofile">
                                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/testimonials.jpg-a9oCrwwSj5UPgaQongRbQQIVyUFHyp.jpeg" alt="Profile">
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
    </section>

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
                    <p class="client-description">Serving clients worldwide, we deliver tailored solutions and build strong connections wherever they are.</p>
                </div>

                <!-- Map Section -->
                <div class="client-map-container">
                    <div id="client-map"  data-aos="fade-up" data-aos-duration="1000"></div>
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
                <p>Have questions or need assistance? We're here to help! Reach out to us and let's work together to achieve your goals.</p>
            </div>

            <div class="contact-content">
                <div class="contact-left">
                <div class="Contactmap-container">
                    <iframe 
                        width="100%" 
                        height="250px" 
                        style="border-radius: 8px; border: 0;" 
                        loading="lazy" 
                        allowfullscreen 
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14316.673843579536!2d91.79659537327568!3d26.126282165576393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a599292a5c5df%3A0xc7e4b99f5a7d6f2d!2sPanjabari%20Rd%2C%20Guwahati%2C%20Assam%20781037!5e0!3m2!1sen!2sin!4v1707903154621!5m2!1sen!2sin">
                    </iframe>
                </div>

                    <div class="contact-info">
                        <div class="contact-item">
                            <span>📞</span>
                            <span>91- 6001 3961 86</span>
                        </div>
                        <div class="contact-item">
                            <span>✉️</span>
                            <span>admin@indigiconsulting.com</span>
                        </div>
                        <div class="contact-item">
                            <span>🌐</span>
                            <span>www.indigiconsulting.com</span>
                        </div>
                        <div class="contact-item">
                            <span>📍</span>
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