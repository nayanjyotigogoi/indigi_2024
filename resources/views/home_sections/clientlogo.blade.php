<style>
    /* Client Logos Section */
    .client-logos {
        position: relative; /* For positioning the wave effect */
        overflow: hidden; /* Prevent overflow */
        padding: 60px 0; /* Padding for the section */
        background-color: #f9f9f9; /* Light background for contrast */
    }

    /* Wave Effect */
    .wave {
        position: absolute;
        top: -60px; /* Adjust to control vertical position */
        left: 0;
        width: 200%;
        height: 100px; /* Height of the wave */
        background: linear-gradient(135deg, #ff6b6b, #f8e71c, #50e3c2); /* Colorful gradient */
        border-radius: 50%; /* Makes the wave rounded */
        z-index: 1; /* Position behind the logos */
        animation: wave-animation 25s linear infinite; /* Animation for the wave */
    }

    /* Animation for the wave */
    @keyframes wave-animation {
        0% {
            transform: translateX(0);
        }
        50% {
            transform: translateX(-50%); /* Move left */
        }
        100% {
            transform: translateX(0); /* Move back to original position */
        }
    }

    /* Logo Wrapper */
    .logo-wrapper {
        background: white; /* White background for logos */
        border-radius: 15px; /* Curved corners */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Shadow effect */
        overflow: hidden; /* Hide overflow */
        padding: 20px; /* Padding around the logos */
    }

    /* Logo Container */
    .logo-container {
        display: flex; /* Use flexbox for alignment */
        white-space: nowrap; /* Prevent logos from wrapping to the next line */
        animation: slide-animation 20s linear infinite; /* Automatic scroll animation */
    }

    /* Animation for logo scrolling */
    @keyframes slide-animation {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%); /* Scroll left by half the width */
        }
    }

    /* Logo Styles */
    .logo {
        display: inline-block; /* Display inline */
        margin: 0 15px; /* Spacing between logos */
        width: 100px; /* Fixed width for logos */
        height: auto; /* Maintain aspect ratio */
        transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition for hover effect */
    }

    /* Hover Effect for Logo */
    .logo:hover {
        transform: scale(1.2); /* Increase size */
        box-shadow: 0 0 20px rgba(255, 107, 107, 0.8), 0 0 30px rgba(255, 107, 107, 0.6); /* Glow effect */
    }
</style>

<!-- Client's Logo Section -->
<div class="client-logos">
    <div class="wave"></div> <!-- Colorful wave effect -->
    <div class="container logo-wrapper">
        <div class="logo-container">
            <!-- Original logos -->
            <img src="images/logo/acpl.png" class="logo" alt="acpl">
            <img src="images/logo/delivery_at_home.png" class="logo" alt="delivery_at_home.png">
            <img src="images/logo/eb33.jpg" class="logo" alt="eb33.jpg">
            <img src="images/logo/ethnic_prides.png" class="logo" alt="ethnic_prides.png">
            <img src="images/logo/gjb_logo.png" class="logo" alt="gjb_logo.png">
            <img src="images/logo/iggl.png" class="logo" alt="iggl.png">
            <img src="images/logo/life_water.png" class="logo" alt="life_water.png">
            <img src="images/logo/mizoram.png" class="logo" alt="mizoram.png">
            <img src="images/logo/mynews.png" class="logo" alt="mynews.png">
            <img src="images/logo/ptf_1.png" class="logo" alt="ptf_1.png">
            <img src="images/logo/ptf_2.png" class="logo" alt="ptf_2.png">
            
            <img src="images/logo/ptf_8.png" class="logo" alt="ptf_8.png">
            <img src="images/logo/ptf_4.png" class="logo" alt="ptf_4.png">
            <img src="images/logo/ptf_5.png" class="logo" alt="ptf_5.png">
            <img src="images/logo/ptf_9.png" class="logo" alt="ptf_9.png">
            <img src="images/logo/ptf_10.png" class="logo" alt="ptf_10.png">
            <img src="images/logo/ptf_11.png" class="logo" alt="ptf_11.png">
            <img src="images/logo/ptf_12.png" class="logo" alt="ptf_12.png">
            <img src="images/logo/Purabi_Logo_Eng.png" class="logo" alt="Purabi_Logo_Eng.png">
            <img src="images/logo/sanjivbazar.png" class="logo" alt="sanjivbazar.png">
            <img src="images/logo/sarthak.png" class="logo" alt="sarthak.png">
            <img src="images/logo/topcem.png" class="logo" alt="topcem.png">
            <img src="images/logo/vivo.png" class="logo" alt="vivo.png">
           
        </div>
    </div>
</div>
