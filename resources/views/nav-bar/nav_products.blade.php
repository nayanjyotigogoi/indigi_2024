@extends('layouts')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            overflow-x: hidden; /* Prevent horizontal scroll */
            perspective: 1000px; /* Add perspective for 3D effect */
        }

        /* Frame section styles */
        .frames-container {
            display: flex; /* Arrange rectangles horizontally */
            position: relative; /* Use relative positioning for stacking */
            width: 250%; /* Full width */
            height: 100%; /* Reduced height */
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
            height: 60vh;
            background: linear-gradient(135deg, #C4E1F6, #37AFE1);
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            z-index: 2; /* Ensure it's below frames */
            position: relative;
            padding: 100px 0; /* Padding for spacing */
        }

        /* Boxes section styles */
        .boxes-section {
            display: flex;
            flex-direction: column; /* Stack rows vertically */
            padding: 50px 40px; /* Padding for the section */
            opacity: 1; /* Ensure visibility */
            transition: opacity 0.5s ease-out; /* Transition for opacity */
        }

        .box-row {
            display: flex; /* Allow boxes in the same row */
            justify-content: space-around; /* Space between boxes */
            gap: 120px; /* Add space between boxes */
            margin-bottom: 100px; /* Space between rows */
        }

        .box {
            flex-basis: 30%; /* Allow boxes to take up 30% of row width */
            flex-grow: 1; /* Allow boxes to grow */
            flex-shrink: 1; /* Allow boxes to shrink */
            padding: 20px; /* Add padding inside the box */
            background-color: #37AFE1; /* Color for the box */
            display: flex;
            flex-direction: column; /* Allow text and link to stack */
            align-items: center; /* Center align content */
            justify-content: center;
            color: white; /* Text color */
            font-weight: bold; /* Bold text */
            border-radius: 10px; /* Rounded corners */
            transition: transform 0.3s; /* Smooth transition for scaling */
            transform-origin: center; /* Scale from center */
            box-sizing: border-box; /* Include padding and border in element's total width and height */
        }

        .box.growing {
            transition: transform 0.3s; /* Smooth growing effect */
        }

        .box-description {
            font-size: 0.9em; /* Slightly smaller font for description */
            text-align: center; /* Center align description text */
            margin-top: 10px; /* Space above description */
        }

        .learn-more {
            margin-top: 10px; /* Space above link */
            color: #fff; /* White color for link */
            text-decoration: underline; /* Underline for link */
            cursor: pointer; /* Pointer cursor for link */
        }
        @media (min-width: 1200px) {
    .container, .container-lg, .container-md, .container-sm, .container-xl {
        max-width: 1349px;
    }
}
    </style>

    <!-- Scrollable Section -->
    <div class="container-main">
        <div class="scrollable">
            <h1>Enhance Customer Experiences with SAP Solutions</h1>
            <p>Streamline interactions, gain valuable insights, and elevate customer satisfaction with Us.</p>
        </div>
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
        <div class="box-row">
            <div class="box" id="box1">
                <p>RISE WITH SAP</p>
                <p class="box-description">Transform your business processes with SAP's comprehensive solutions.</p>
                <a class="learn-more" href="{{ route('product.learn-more', ['id' => 1]) }}">Learn More</a>
            </div>
            <div class="box" id="box2">
                <p>SAP S4HANA</p>
                <p class="box-description">Next-gen ERP solution for streamlined operations and real-time insights.</p>
                <a class="learn-more" href="{{ route('product.learn-more', ['id' => 2]) }}">Learn More</a>
            </div>
            <div class="box" id="box3">
                <p>SAP S4HANA CLOUD</p>
                <p class="box-description">Cloud-based ERP for agility and innovation in your business.</p>
                <a class="learn-more" href="{{ route('product.learn-more', ['id' => 3]) }}">Learn More</a>
            </div>
        </div>
        <div class="box-row">
            <div class="box" id="box4">
                <p>SAP Business By Design</p>
                <p class="box-description">Integrated cloud ERP solution tailored for mid-sized businesses.</p>
                <a class="learn-more" href="/learn-more">Learn More</a>
            </div>
            <div class="box" id="box5">
                <p>ACCU 360</p>
                <p class="box-description">Comprehensive solution for customer engagement and analytics.</p>
                <a class="learn-more" href="/learn-more">Learn More</a>
            </div>
            <div class="box" id="box6">
                <p>GIS</p>
                <p class="box-description">Geographic Information Systems for enhanced data visualization.</p>
                <a class="learn-more" href="/learn-more">Learn More</a>
            </div>
        </div>
        <div class="box-row">
            <div class="box" id="box7">
                <p>Customized ERP</p>
                <p class="box-description">Tailored ERP solutions to meet your unique business needs.</p>
                <a class="learn-more" href="/learn-more">Learn More</a>
            </div>
            <div class="box" id="box8">
                <p>ANDROID DEV.</p>
                <p class="box-description">Innovative Android applications to drive business growth.</p>
                <a class="learn-more" href="/learn-more">Learn More</a>
            </div>
            <div class="box" id="box9">
                <p>WEBSITE DEV.</p>
                <p class="box-description">Web solutions designed for user engagement and performance.</p>
                <a class="learn-more" href="/learn-more">Learn More</a>
            </div>
        </div>
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
                    frame.style.transform = 'none'; // Ensure others stay flat
                }
            });

            // Grow boxes on scroll
        const boxes = document.querySelectorAll('.box');
        boxes.forEach((box) => {
            // Calculate the scale based on scroll position
            const scale = 1 + (scrollPosition / 3500); // Adjust scaling factor as needed
            box.style.transform = `scale(${scale})`; // Grow the box size

            // Optionally limit box width to prevent overlap
            box.style.maxWidth = '350px'; // Max width of each box
            box.style.maxHeight = '250px'; // Max height of each box
        });
            
        });

        
    </script>
@endsection
