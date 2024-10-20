@extends('layouts')

@section('content')
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden; /* Prevent horizontal scroll */
            perspective: 1000px; /* Add perspective for 3D effect */
        }

        /* Frame section styles */
        .frames-container {
            display: flex; /* Arrange rectangles horizontally */
            position: relative; /* Use relative positioning for stacking */
            width: 250%; /* Full width */
            height: 100px; /* Reduced height */
            white-space: nowrap; /* Prevent wrapping of frames */
            z-index: 1; /* Keep it above the scrollable content */
            margin-bottom: 20px; /* Space between frames and boxes */
            transform: translateY(0); /* Reset position */
            transition: transform 0.7s;
        }

        .frame {
            width: 60%;
            height: 200px; /* Reduced height of each frame */
            border: 5px solid rgba(0, 0, 0, 0.3); /* Thicker border */
            background-color: transparent; /* Fully transparent body */
            margin: 0 5px; /* Margin between frames */
            transform-style: preserve-3d; /* Enable 3D space */
            transition: transform 1s;
        }

        /* Alternate frame border color */
        .frame:nth-child(2n) {
            border-color: rgba(173, 216, 230, 0.8); /* Light blue border */
        }

        .scrollable {
            z-index: 2; /* Ensure it's below frames */
            text-align: center;
            position: relative;
            padding: 100px 0; /* Padding for spacing */
        }

        /* Boxes section styles */
        .boxes-section {
            display: flex;
            flex-wrap: wrap; /* Allow boxes to wrap */
            justify-content: center; /* Center align boxes */
            align-items: center;
            padding: 50px 0; /* Padding for the section */
            background-color: #e0e0e0; /* Light background for contrast */
            opacity: 1; /* Ensure visibility */
            transform: translateY(0); /* Reset position */
            transition: opacity 0.5s ease-out, transform 0.5s ease-out; /* Transition for opacity and position */
            gap: 150px; /* Space between boxes */
        }

        .box {
            flex: 1 1 100px; /* Allow boxes to grow but maintain a minimum width */
            max-width: 150px; /* Maximum width to prevent overlap */
            height: 100px; /* Height of the square box */
            background-color: rgba(0, 150, 136, 0.8); /* Color for the box */
            display: flex;
            align-items: center;
            justify-content: center;
            color: white; /* Text color */
            font-weight: bold; /* Bold text */
            border-radius: 10px; /* Rounded corners */
            transition: transform 0.3s; /* Smooth transition for scaling */
            transform-origin: center; /* Scale from center */
        }

        .box.growing {
            transition: transform 0.3s; /* Smooth growing effect */
        }
    </style>

    <!-- Scrollable Section -->
    <div class="scrollable">
        <h1>Enhance Customer Experiences with SAP Solutions</h1>
        <p>Streamline interactions, gain valuable insights, and elevate customer satisfaction with Us.</p>
    </div>

    <!-- Frames Container Just Above the Boxes Section -->
    <div class="frames-container" id="framesContainer">
        <div class="frame"></div>
        <div class="frame"></div>
        <div class="frame"></div>
        <div class="frame"></div>
        <div class="frame"></div>
        <div class="frame"></div>
        <div class="frame"></div>
        <div class="frame"></div>
        <div class="frame"></div>
        <div class="frame"></div>
        <div class="frame"></div>
        
    </div>

    <!-- Boxes Section -->
    <div class="boxes-section" id="boxesSection">
        <div class="box" id="box1">Box 1</div>
        <div class="box" id="box2">Box 2</div>
        <div class="box" id="box3">Box 3</div>
        <div class="box" id="box4">Box 4</div>
    </div>

    <script>
        const framesContainer = document.getElementById('framesContainer');

        // Add rectangles based on the viewport width
        const frameCount = Math.ceil(window.innerWidth / 100) + 12; // Increase the count for screen coverage
        for (let i = 0; i < frameCount; i++) {
            const frame = document.createElement('div');
            frame.classList.add('frame');

            // Add highlight class to every third frame
            if ((i + 1) % 3 === 0) {
                frame.classList.add('highlight');
            }

            framesContainer.appendChild(frame);
        }

        window.addEventListener('scroll', () => {
            const scrollPosition = window.scrollY;

            // Scroll frames horizontally
            framesContainer.style.transform = `translateX(${scrollPosition}px)`; // Move right based on scroll position

            // Apply 3D rotation effect to the highlighted rectangle (every third rectangle)
            const frames = document.querySelectorAll('.frame');
            frames.forEach((frame, index) => {
                if (index % 3 === 2) { // Only for the highlighted rectangle
                    frame.style.transform = `rotateY(${scrollPosition * 0.2}deg)`; // 3D rotation on Y-axis
                } else {
                    frame.style.transform = 'none'; // Ensure others are not rotated
                }
            });

            // Show boxes section when scrolling
            const boxesSection = document.getElementById('boxesSection');
            if (scrollPosition > window.innerHeight) {
                boxesSection.style.opacity = 1; // Fade in
                boxesSection.style.transform = 'translateY(0)'; // Move to original position
            }

            // Grow boxes on scroll
            const boxes = document.querySelectorAll('.box');
            boxes.forEach((box) => {
                box.classList.add('growing');
                const scale = 1 + (scrollPosition / 1000); // Adjust scaling factor as needed
                box.style.transform = `scale(${scale})`; // Grow box size
            });

            // Prevent overlapping
            boxes.forEach((box) => {
                box.style.width = `${Math.min(150, box.clientWidth * scale)}px`; // Limit box size to max width
            });
        });
    </script>
@endsection
