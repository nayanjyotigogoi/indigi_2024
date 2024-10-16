<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f0f0f0; /* This background color will remain */
    }

    .three-d-text-section {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        /* background-color: #282c34; */ /* Removed background color */
        color: white;
        position: relative;
        overflow: hidden;
        perspective: 1000px; /* Add perspective for 3D effect */
    }

    .caption {
        position: relative;
        top: 15%;
        font-size: 2rem;
        text-align: center;
        color: #61dafb; /* Light blue color */
        z-index: 1; /* Ensure the caption is on top */
    }

    .three-d-text {
        font-size: 4rem; /* Increased font size for better visibility */
        text-align: center;
        text-shadow: 
            0 1px 0 rgba(255, 0, 0, 0.6), /* Red shadow */
            0 2px 0 rgba(255, 0, 0, 0.6),
            0 3px 0 rgba(255, 0, 0, 0.6),
            0 4px 0 rgba(0, 255, 0, 0.6), /* Green shadow */
            0 5px 0 rgba(0, 255, 0, 0.6),
            0 6px 0 rgba(0, 255, 0, 0.6),
            0 7px 0 rgba(0, 0, 255, 0.6), /* Blue shadow */
            0 8px 0 rgba(0, 0, 255, 0.6),
            0 9px 0 rgba(0, 0, 255, 0.6),
            0 10px 10px rgba(0, 0, 0, 0.8); /* Black shadow for depth */
        animation: text-animation 3s infinite alternate; /* This loops as well */
        z-index: 1; /* Ensure the text is on top */
    }

    .highlight-container {
        position: relative;
        display: inline-block;
        animation: bounce 2s infinite; /* Continuous bounce animation */
        z-index: 2; /* Ensure it's on top */
        margin-left: -140px; /* Adjust this value to overlap correctly */
    }

    @keyframes bounce {
        0%, 100% {
            transform: translateY(-10px); /* Move up slightly */
        }
        50% {
            transform: translateY(0); /* Return to original position */
        }
    }

    .highlight {
        display: inline-block;
        background-color: #fff; /* Background color for the square */
        color: black;
        padding: 10px 20px;
        border-radius: 5px; /* Rounded corners */
        position: relative;
        z-index: 2; /* Ensure the highlight is above the text */
    }
    
    .second-caption {
        text-align: center;
        margin-top: 20px; /* Space below the main text */
        font-size: 1.5rem;
        position: relative;
        z-index: 1; /* Ensure the text is on top */
    }
</style>

<div class="three-d-text-section">
    <!-- <div class="caption">It's Northeast's Only SAP Partner!</div> -->
    <div class="second-caption">
        <span>Almost the </span>
        <div class="highlight-container">
            <span class="highlight">   It is the best, </span>
        </div>
        <span class="caption"> SAP Partner in the Entire Northeast.</span>
    </div>
</div>
