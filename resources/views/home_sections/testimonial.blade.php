<!-- resources/views/testimonials.blade.php -->

<div class="testimonial-section">
    <!-- Three.js container -->
    <div id="threejs-container"></div>
    
    <!-- Client details displayed on the page -->
    <div class="client-details-container">
        <div class="client-details">
            <img src="{{ asset('images/testimonials/gjb_logo.png') }}" alt="Client Image">
            <p>Jal Board</p>
        </div>
        <div class="client-details">
            <img src="{{ asset('images/testimonials/iggl_testimonial.jpg') }}" alt="Client Image">
            <p>Iggl</p>
        </div>
    </div>
</div>

<!-- Styling for the testimonial section -->
<style>
    .testimonial-section {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px;
        height: 100vh;
        overflow: hidden;
    }

    #threejs-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
    }

    .client-details-container {
        position: absolute;
        bottom: 20px;
        width: 100%;
        text-align: center;
        z-index: 1;
    }

    .client-details {
        display: inline-block;
        background: rgba(255, 255, 255, 0.9);
        padding: 10px 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        margin: 10px;
    }

    .client-details img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 10px;
        vertical-align: middle;
    }

    .client-details p {
        display: inline-block;
        margin: 0;
        font-size: 16px;
        font-family: 'Arial', sans-serif;
    }
</style>

<!-- Three.js interaction for testimonial bubbles and dynamic background -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

<script>
    // Initialize Three.js scene, camera, and renderer
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ antialias: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    document.getElementById('threejs-container').appendChild(renderer.domElement);

    // Add light to the scene
    const light = new THREE.DirectionalLight(0xffffff, 1);
    light.position.set(1, 1, 1).normalize();
    scene.add(light);

    // Function to create animated background
    function createBackground() {
        const geometry = new THREE.PlaneGeometry(2, 2, 1, 1);
        const material = new THREE.MeshBasicMaterial({ 
            color: 0x000000, 
            side: THREE.DoubleSide, 
            transparent: true, 
            opacity: 0.5 
        });

        const plane = new THREE.Mesh(geometry, material);
        plane.position.z = -5; // Position it behind other elements
        scene.add(plane);

        // Animate the background
        function animateBackground() {
            requestAnimationFrame(animateBackground);
            plane.rotation.z += 0.01; // Add rotation for movement effect
            renderer.render(scene, camera);
        }
        animateBackground();
    }

    // Function to create speech bubbles with random web images inside
    function createBubble(imageUrl) {
        const bubbleGeometry = new THREE.SphereGeometry(2, 32, 32);
        
        // Load the image texture
        const texture = new THREE.TextureLoader().load(imageUrl, (texture) => {
            texture.wrapS = THREE.RepeatWrapping;
            texture.wrapT = THREE.RepeatWrapping;
            texture.repeat.set(1, 1);
        });
        
        const bubbleMaterial = new THREE.MeshBasicMaterial({ map: texture });
        const bubble = new THREE.Mesh(bubbleGeometry, bubbleMaterial);
        
        return bubble;
    }

    // Camera setup
    camera.position.z = 10;

    // Sample random image URLs from the web
    const bubbles = [];
    const imageUrls = [
        'https://picsum.photos/200/200?random=1', 
        'https://picsum.photos/200/200?random=2', 
        'https://picsum.photos/200/200?random=3',
        'https://picsum.photos/200/200?random=4'
    ];

    // Create bubbles with random images
    imageUrls.forEach((imageUrl, i) => {
        const bubble = createBubble(imageUrl);
        bubble.position.x = (i - 1.5) * 6; // Position the bubbles in a line
        bubble.position.y = Math.random() * 4 - 2; // Random vertical position
        scene.add(bubble);
        bubbles.push(bubble);
    });

    // Animation loop to rotate and move speech bubbles
    function animate() {
        requestAnimationFrame(animate);
        bubbles.forEach(bubble => {
            bubble.rotation.y += 0.01; // Rotate the bubble
            bubble.position.y += 0.01 * Math.sin(bubble.position.x + bubble.position.y); // Add some vertical motion
        });
        renderer.render(scene, camera);
    }

    // Initialize background
    createBackground();
    
    animate();

    // Handle resizing of the canvas for responsiveness
    window.addEventListener('resize', () => {
        const width = window.innerWidth;
        const height = window.innerHeight;
        renderer.setSize(width, height);
        camera.aspect = width / height;
        camera.updateProjectionMatrix();
    });
</script>
