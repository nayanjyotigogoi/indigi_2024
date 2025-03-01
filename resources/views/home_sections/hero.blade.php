<div id="heroSection" class="relative w-full h-screen overflow-hidden">
    <!-- Video Container with 3D Interaction -->
    <div class="relative w-full h-full perspective-1000">
        <video class="video-3d w-full h-full object-cover transform -rotate-y-10 scale-105 shadow-lg" autoplay muted loop>
            <source src="{{ asset('video/3D-bg.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="absolute top-[250px] left-[50px] sm:left-[108px] w-full max-w-[750px] h-[450px] bg-[#0D78C0B2] rounded-[20px] border-2 border-white text-left flex flex-col justify-center items-start transform skew-x-[5deg] transition-all duration-300 hover:skew-x-0 hover:scale-[1] pl-12 origin-bottom-left">
            <!-- Text content inside the box -->
            <p class="text-white text-4xl font-bold uppercase mb-2">EMPOWERING BUSINESS WITH</p>
            <p class="text-white text-4xl font-bold uppercase mb-5">CUTTING EDGE &</p>
            <p class="text-white text-4xl font-bold uppercase mb-2">IT SOLUTIONS</p>
            <a href="#connect" class="bg-yellow-400 text-black py-2 px-10 text-lg rounded-full">Connect</a>
        </div>
    </div>
</div>

<!-- Tailwind CSS for Animation -->
<style>
    @keyframes slantText {
        0% {
            transform: rotate(10deg);
        }
        100% {
            transform: rotate(0deg);
        }
    }
</style>

<!-- JavaScript for Improved 3D Interaction -->
<script>
    document.querySelector('.video-3d').addEventListener('mousemove', function(event) {
        const xRotation = (event.clientY / window.innerHeight - 0.5) * 40; // Increased sensitivity
        const yRotation = (event.clientX / window.innerWidth - 0.5) * 40; // Increased sensitivity

        // Apply a faster 3D rotation effect
        document.querySelector('.video-3d').style.transition = 'transform 0.1s ease'; // Added faster transition
        document.querySelector('.video-3d').style.transform = `rotateX(${xRotation}deg) rotateY(${yRotation}deg) scale(1.05)`;
    });
</script>
