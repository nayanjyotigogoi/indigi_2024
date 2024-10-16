<!-- Carousel Section (Hero Section with 3D Video and Text) -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        <!-- First Slide with 3D Video and Text -->
        <div class="carousel-item active">
            <div class="video-container">
                <video class="video-3d" autoplay muted loop>
                    <source src="{{ asset('video\3D-bg.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                 <div class="carousel-caption d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                    {{-- <h1 class="text-3d">INNOVATE, INTEGRATE, ELEVATE</h1>
                    <p>Powered & Delivered by Indigi.</p> --}}
                    <a href="#" class="btn">Learn More</a>
                </div> 
            </div>
        </div>
{{-- 
        <!-- Second Slide -->
        <div class="carousel-item" style="background-image: url('{{ asset('images/S4HANA.jpg') }}');">
            <div class="carousel-overlay"></div>
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                <h1 class="text-3d">EMBRACING DIGITAL TRANSFORMATION</h1>
                <p>Leading the Future with Cutting-edge Solutions.</p>
                <a href="#" class="btn">Explore Solutions</a>
            </div>
        </div>

        <!-- Third Slide -->
        <div class="carousel-item" style="background-image: url('{{ asset('images/rws.jpg') }}');">
            <div class="carousel-overlay"></div>
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                <h1 class="text-3d">DRIVING INNOVATION</h1>
                <p>Empowering Businesses Worldwide.</p>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>

        <!-- Fourth Slide -->
        <div class="carousel-item" style="background-image: url('{{ asset('images/SBBD.jpg') }}');">
            <div class="carousel-overlay"></div>
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                <h1 class="text-3d">BUILDING STRONGER TEAMS</h1>
                <p>Your Partners in Success.</p>
                <a href="#" class="btn">Join Us</a>
            </div>
        </div>
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button> --}}
</div> 

<!-- Styles for 3D Video and Text -->
<style>
    .video-container {
        position: relative;
        width: 100%;
        height: 100vh;
        perspective: 1000px;
        overflow: hidden;
    }

    .video-3d {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transform: rotateY(-10deg) scale(1.05);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    }

    .text-3d {
        font-size: 4rem;
        font-weight: bold;
        color: #fff;
        text-align: center;
        text-transform: uppercase;
        transform: perspective(500px) rotateX(15deg) rotateY(15deg);
        text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
    }

    .carousel-caption {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .carousel-caption p {
        font-size: 1.5rem;
        color: #fff;
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
    }

    .btn {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        font-size: 1.2rem;
        border-radius: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
</style>

<!-- Optional JavaScript for Advanced 3D Interactivity -->
<script>
    document.querySelector('.video-container').addEventListener('mousemove', function(event) {
        const xRotation = (event.clientY / window.innerHeight - 0.5) * 30;
        const yRotation = (event.clientX / window.innerWidth - 0.5) * 30;

        document.querySelector('.video-3d').style.transform = `rotateX(${xRotation}deg) rotateY(${yRotation}deg) scale(1.05)`;
    });
</script>
