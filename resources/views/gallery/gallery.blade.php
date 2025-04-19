@extends('layouts.app-new')

@section('title', 'Gallery | Indigi')
@push('styles')
    <style>
        /* Base styles */
        :root {
            --primary-bg: #ffffff;
            --text-primary: #111827;
            --text-secondary: #4b5563;
            --border-color: #e5e7eb;
            --accent-color: #3b82f6;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --radius: 0.5rem;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        .header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .header p {
            font-size: 1.125rem;
            color: var(--text-secondary);
            max-width: 36rem;
            margin: 0 auto;
        }

        /* Gallery controls */
        .my-gallery .gallery-controls {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 2rem;
        }

        .my-gallery .tabs {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .my-gallery .tab-btn {
            background-color: transparent;
            border: 1px solid var(--border-color);
            border-radius: var(--radius);
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--text-secondary);
            cursor: pointer;
            transition: all 0.2s ease;
            text-transform: capitalize;
        }

        .my-gallery .tab-btn:hover {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .my-gallery .tab-btn.active {
            background-color: var(--accent-color);
            color: white;
            border-color: var(--accent-color);
        }

        .my-gallery .pause-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background-color: transparent;
            border: 1px solid var(--border-color);
            border-radius: var(--radius);
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--text-secondary);
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .my-gallery .pause-btn:hover {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .hidden {
            display: none;
        }

        /* Gallery container */
        .my-gallery .gallery-container {
            width: 100%;
            overflow: hidden;
        }

        .my-gallery .gallery-row {
            position: relative;
            width: 100%;
            margin-bottom: 1rem;
            overflow: hidden;
        }

        .my-gallery .scroll-container {
            display: flex;
            gap: 0.5rem;
            width: max-content;
            animation-duration: 30s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        .my-gallery .scroll-left {
            animation-name: scrollLeft;
        }

        .my-gallery .scroll-right {
            animation-name: scrollRight;
        }

        .my-gallery .paused {
            animation-play-state: paused;
        }

        @keyframes scrollLeft {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        @keyframes scrollRight {
            from {
                transform: translateX(-50%);
            }

            to {
                transform: translateX(0);
            }
        }

        .my-gallery .gallery-item {
            position: relative;
            width: 300px;
            height: 195px;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow-md);
            cursor: pointer;
            flex-shrink: 0;
        }

        .my-gallery .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .my-gallery .gallery-item:hover img {
            transform: scale(1.05);
        }

        .my-gallery .gallery-item-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 1rem;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .my-gallery .gallery-item:hover .gallery-item-overlay {
            opacity: 1;
        }

        .my-gallery .gallery-item-title {
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 0.25rem;
        }

        .my-gallery .gallery-item-category {
            font-size: 0.75rem;
            opacity: 0.8;
            text-transform: capitalize;
        }

        /* Lightbox */
        .my-gallery .lightbox {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        .my-gallery .lightbox.active {
            opacity: 1;
            pointer-events: auto;
        }

        .my-gallery .close-btn {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: transparent;
            border: none;
            color: white;
            cursor: pointer;
            z-index: 1010;
        }

        .my-gallery .nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 1010;
            transition: background 0.2s ease;
        }

        .my-gallery .nav-btn:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .my-gallery .prev-btn {
            left: 1rem;
        }

        .my-gallery .next-btn {
            right: 1rem;
        }

        .my-gallery .lightbox-content {
            position: relative;
            max-width: 90%;
            max-height: 80vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .my-gallery .lightbox-img {
            max-width: 100%;
            max-height: 70vh;
            object-fit: contain;
        }

        .my-gallery .lightbox-info {
            margin-top: 1rem;
            text-align: center;
            color: white;
        }

        .my-gallery .lightbox-title {
            font-size: 1.25rem;
            font-weight: 500;
            margin-bottom: 0.25rem;
        }

        .my-gallery .lightbox-category {
            font-size: 0.875rem;
            opacity: 0.8;
            text-transform: capitalize;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }

            .header p {
                font-size: 1rem;
            }

            .my-gallery .gallery-item {
                width: 250px;
                height: 187.5px;
            }

            .my-gallery .nav-btn {
                width: 36px;
                height: 36px;
            }
        }

        @media (max-width: 480px) {
            .header h1 {
                font-size: 1.75rem;
            }

            .my-gallery .gallery-item {
                width: 200px;
                height: 150px;
            }

            .my-gallery .gallery-item-title {
                font-size: 0.875rem;
            }

            .my-gallery .nav-btn {
                width: 32px;
                height: 32px;
            }
        }
    </style>
@endpush

@section('content')

    <main class="container my-gallery">
        <div class="header">
            <h1>Company Gallery</h1>
            <p>Explore moments and milestones from our company's journey</p>
        </div>
        <div class="gallery-controls">
            <div class="tabs">
                <button class="tab-btn active" data-category="all">All</button>
                <button class="tab-btn" data-category="events">Events</button>
                <button class="tab-btn" data-category="celebrations">Celebrations</button>
                <button class="tab-btn" data-category="meetings">Meetings</button>
                <button class="tab-btn" data-category="launches">Launches</button>
                <button class="tab-btn" data-category="community">Community</button>
                <button class="tab-btn" data-category="culture">Culture</button>
            </div>
            <button class="pause-btn">
                <svg class="pause-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                    <rect x="6" y="4" width="4" height="16"></rect>
                    <rect x="14" y="4" width="4" height="16"></rect>
                </svg>
                <svg class="play-icon hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                    <polygon points="5 3 19 12 5 21 5 3"></polygon>
                </svg>
                <span class="pause-text">Pause</span><span class="play-text hidden">Resume</span>
            </button>
        </div>

        <div class="gallery-container">
            @php
                // Determine how to divide images into 3 rows
                $chunks = array_chunk($galleryImages->toArray(), ceil(count($galleryImages) / 3));
            @endphp

            @foreach($chunks as $chunkIndex => $imageChunk)
                <div class="gallery-row">
                    <div class="scroll-container {{ $chunkIndex % 2 === 0 ? 'scroll-left' : 'scroll-right' }}">
                        @foreach($imageChunk as $image)
                            <div class="gallery-item" data-id="{{ $image['id'] }}">
                                <img src="{{ asset('uploads/gallery/' . $image['filename']) }}" alt="{{ $image['title'] }}">
                                <div class="gallery-item-overlay">
                                    <h3 class="gallery-item-title">{{ $image['title'] }}</h3>
                                    <p class="gallery-item-category">{{ $image['category'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

    </main>

    <!-- Lightbox -->
    <div class="lightbox" id="lightbox">
        <button class="close-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
        <button class="nav-btn prev-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
        </button>
        <button class="nav-btn next-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </button>
        <div class="lightbox-content">
            <img class="lightbox-img" src="" alt="">
            <div class="lightbox-info">
                <div class="lightbox-title"></div>
                <div class="lightbox-category"></div>
            </div>
        </div>
    </div>

    <!--  Contact-us form -->
    <section id="contact-us" class="Contact-us-section">
        <div class="Contactbackground-shapes">
            <div class="Contactshape-1"></div>
            <div class="Contactshape-2"></div>
        </div>
        <div class="Contactcontainer">
            <div class="contact-header">
                <h4>Contact Us</h4>
                <h1>Let's Connect and Collaborate</h1>
                <p>Have questions or need assistance? We're here to help! Reach out to us and let' s work together
                    to achieve your goals.</p>
            </div>
            <div class="contact-content">
                <div class="contact-left">
                    <div class="Contactmap-container"><iframe width="100%" height="250px"
                            style="border-radius: 8px; border: 0;" loading="lazy" allowfullscreen
                            referrerpolicy="no-referrer-when-downgrade"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14316.673843579536!2d91.79659537327568!3d26.126282165576393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a599292a5c5df%3A0xc7e4b99f5a7d6f2d!2sPanjabari%20Rd%2C%20Guwahati%2C%20Assam%20781037!5e0!3m2!1sen!2sin!4v1707903154621!5m2!1sen!2sin"></iframe>
                    </div>
                    <div class="contact-info">
                        <div class="contact-item"><img class="contact-icon" src="svg/contact_us/Call-icon.svg"
                                alt="Call-icon"><span>91- 6001 3961 86</span></div>
                        <div class="contact-item"><img class="contact-icon" src="svg/contact_us/mail-icon.svg"
                                alt="Call-icon"><span>admin@indigiconsulting.com</span></div>
                        <div class="contact-item"><img class="contact-icon" src="svg/contact_us/website-icon.svg"
                                alt="Call-icon"><span>www.indigiconsulting.com</span></div>
                        <div class="contact-item"><img class="contact-icon" src="svg/contact_us/location-icon.svg"
                                alt="Call-icon"><span>House No-194, 2nd Floor, Panjabari Road, Ghy-37, Assam</span>
                        </div>
                    </div>
                </div>
                <div class="contact-right">
                    <form id="contactForm">
                        <div class="Contactform-group"><label for="name">Name</label><input type="text" id="name"
                                placeholder="Enter name here"></div>
                        <div class="Contactform-group"><label for="email">Email</label><input type="email" id="email"
                                placeholder="Enter email here"></div>
                        <div class="Contactform-group"><label for="phone">Phone number</label><input type="tel" id="phone"
                                placeholder="Enter phone number here"></div>
                        <div class="Contactform-group"><label for="message">Message</label><textarea id="message" rows="5"
                                placeholder="Message here"></textarea></div><button type="submit"
                            class="Contactsubmit-btn">Submit → </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection


@push('scripts')
<script>
    const tabButtons = document.querySelectorAll('.tab-btn');
    const pauseButton = document.querySelector('.pause-btn');
    const pauseIcon = document.querySelector('.pause-icon');
    const playIcon = document.querySelector('.play-icon');
    const pauseText = document.querySelector('.pause-text');
    const playText = document.querySelector('.play-text');
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.querySelector('.lightbox-img');
    const lightboxTitle = document.querySelector('.lightbox-title');
    const lightboxCategory = document.querySelector('.lightbox-category');
    const closeBtn = document.querySelector('.close-btn');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    let isPaused = false;
    let currentItem = null;

    // Gallery item structure
    const galleryItems = Array.from(document.querySelectorAll('.gallery-item')).map(item => ({
        id: item.dataset.id,
        element: item,
        src: item.querySelector('img').src,
        alt: item.querySelector('img').alt,
        title: item.querySelector('.gallery-item-title').textContent,
        category: item.querySelector('.gallery-item-category').textContent.trim().toLowerCase()
    }));

    // Function to filter gallery items by category
    function filterGallery(category) {
        galleryItems.forEach(item => {
            const match = category === 'all' || item.category === category;
            item.element.style.display = match ? 'block' : 'none';
        });
    }

    // Event listener for tab button clicks to filter by category
    tabButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            tabButtons.forEach(btn => btn.classList.remove('active')); // Remove active class from all buttons
            e.target.classList.add('active'); // Add active class to the clicked button

            const category = e.target.dataset.category;
            filterGallery(category); // Filter the gallery based on the selected category
        });
    });

    // Pause/Resume scrolling
    pauseButton.addEventListener('click', () => {
        isPaused = !isPaused;

        if (isPaused) {
            pauseIcon.classList.add('hidden');
            playIcon.classList.remove('hidden');
            pauseText.classList.add('hidden');
            playText.classList.remove('hidden');
            document.querySelectorAll('.scroll-container').forEach(container => {
                container.classList.add('paused');
            });
        } else {
            pauseIcon.classList.remove('hidden');
            playIcon.classList.add('hidden');
            pauseText.classList.remove('hidden');
            playText.classList.add('hidden');
            document.querySelectorAll('.scroll-container').forEach(container => {
                container.classList.remove('paused');
            });
        }
    });

    // Lightbox functionality
    galleryItems.forEach(item => {
        item.element.addEventListener('click', () => {
            currentItem = item;
            lightbox.classList.add('active');
            lightboxImg.src = item.src;
            lightboxImg.alt = item.alt;
            lightboxTitle.textContent = item.title;
            lightboxCategory.textContent = item.category;
        });

        // Hover-based pause: When hovering over a gallery item, pause the scrolling
        item.element.addEventListener('mouseover', () => {
            document.querySelectorAll('.scroll-container').forEach(container => {
                container.classList.add('paused');
            });
        });

        item.element.addEventListener('mouseout', () => {
            if (!isPaused) {
                document.querySelectorAll('.scroll-container').forEach(container => {
                    container.classList.remove('paused');
                });
            }
        });
    });

    // Close the lightbox
    closeBtn.addEventListener('click', () => {
        lightbox.classList.remove('active');
    });

    // Navigation buttons for lightbox
    prevBtn.addEventListener('click', () => {
        const currentIndex = galleryItems.indexOf(currentItem);
        const prevItem = galleryItems[(currentIndex - 1 + galleryItems.length) % galleryItems.length];
        currentItem = prevItem;
        lightboxImg.src = currentItem.src;
        lightboxImg.alt = currentItem.alt;
        lightboxTitle.textContent = currentItem.title;
        lightboxCategory.textContent = currentItem.category;
    });

    nextBtn.addEventListener('click', () => {
        const currentIndex = galleryItems.indexOf(currentItem);
        const nextItem = galleryItems[(currentIndex + 1) % galleryItems.length];
        currentItem = nextItem;
        lightboxImg.src = currentItem.src;
        lightboxImg.alt = currentItem.alt;
        lightboxTitle.textContent = currentItem.title;
        lightboxCategory.textContent = currentItem.category;
    });
</script>



@endpush