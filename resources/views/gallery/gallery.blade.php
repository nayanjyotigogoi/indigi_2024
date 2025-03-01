@extends('layouts.app')

@section('title', 'Gallery | Indigi')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .gallery-section {
        border-radius: 10px;
        padding: 60px 0;
        text-align: center;
        background-color: #f9f9f9;
    }

    .section-title {
        margin-bottom: 40px;
        font-size: 3rem;
        color: #2c3e50;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        position: relative;
        display: inline-block;
    }

    .section-title:after {
        content: "";
        display: block;
        width: 60px;
        height: 4px;
        background: #007bff;
        margin: 10px auto;
    }

    .gallery-grid {
        width: 100%;
        height: 500px;
        position: relative;
    }

    .gallery-item {
        position: absolute;
        width: 150px;
        height: 150px;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        border: 2px solid #eaeaea;
        transition: transform 0.5s ease, opacity 0.5s ease;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .gallery-item:hover .overlay {
        opacity: 1;
    }

    .lightbox {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
    }

    .lightbox-img {
        margin: auto;
        display: block;
        max-width: 80%;
        max-height: 80%;
    }

    .close {
        position: absolute;
        top: 20px;
        right: 30px;
        color: #fff;
        font-size: 40px;
        cursor: pointer;
    }
</style>

<section id="gallery" class="gallery-section">
    <div class="container">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS
        AOS.init();

        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightboxImg');
        const closeBtn = document.querySelector('.close');

        // Open lightbox on image click
        document.querySelectorAll('.lightbox-trigger').forEach(item => {
            item.addEventListener('click', function() {
                lightbox.style.display = 'block';
                lightboxImg.src = this.src; // Set the clicked image source
            });
        });

        // Close lightbox
        closeBtn.addEventListener('click', function() {
            lightbox.style.display = 'none';
        });

        // Scatter effect function
        function scatterImages() {
            const galleryItems = document.querySelectorAll('.gallery-item');
            const container = document.querySelector('.gallery-grid');

            // Get container center
            const containerRect = container.getBoundingClientRect();
            const centerX = containerRect.left + containerRect.width / 2;
            const centerY = containerRect.top + containerRect.height / 2;

            galleryItems.forEach((item, index) => {
                // Set the initial position to center of container
                item.style.position = 'absolute';
                item.style.left = `${centerX}px`;
                item.style.top = `${centerY}px`;
                item.style.transform = 'translate(-50%, -50%) scale(0)'; // Start scaled down
                item.style.opacity = '0'; // Start hidden

                // Scatter images to random positions in the container
                setTimeout(() => {
                    const finalX = Math.random() * (containerRect.width - item.offsetWidth);
                    const finalY = Math.random() * (containerRect.height - item.offsetHeight);
                    item.style.left = `${finalX}px`;
                    item.style.top = `${finalY}px`;
                    item.style.transform = 'scale(1)'; // Scale to full size
                    item.style.opacity = '1'; // Fade in
                }, index * 300); // Staggered effect with delay
            });
        }

        // Use IntersectionObserver to trigger scatter effect on scroll
        const gallerySection = document.querySelector('.gallery-section');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    scatterImages();
                }
            });
        }, { threshold: 0.3 });

        // Observe the gallery section
        observer.observe(gallerySection);
    });
</script>
@endsection


