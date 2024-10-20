@extends('layouts') 

@section('content')
<section id="portfolio" class="portfolio-section" data-aos="fade-up">

<!-- Caption Section - Positioned below the video and project details -->
<div class="portfolio-caption" id="portfolioCaption">
        <h1 class="section-title" data-aos="zoom-in">Our Portfolio</h1>
        <h2 class="main-title">Innovation in Every Solution.</h2>
      
        <p class="description">Each project showcases our commitment to innovation, precision, and client satisfaction, ensuring that we stay ahead in a fast-evolving technological landscape.</p>
        
    </div>

    
    <div class="container">
    
        <div class="filter-bar" data-aos="zoom-in">
            <button data-filter="all" class="filter-btn active">All</button>
            <button data-filter="sap" class="filter-btn">SAP Solutions</button>
            <button data-filter="android" class="filter-btn">Android Apps</button>
            <button data-filter="website" class="filter-btn">Website</button>
        </div>

        <div class="portfolio-grid">
            @foreach($projects as $project)
                <div class="portfolio-card" data-category="{{ $project['category'] }}">
                    <h3 class="project-title">{{ $project['title'] }}</h3>
                    <video class="portfolio-video" muted loop preload="none">
                        <source src="{{ asset($project['video']) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <p class="project-description">{{ $project['description'] }}</p>
                    <p class="client-name">Client: <strong>{{ $project['clientName'] }}</strong></p>
                </div>
            @endforeach
        </div>
    </div>
</section>
        {{-- Mini-map for project cards
        <div class="mini-map">
            @foreach($projects as $project)
                <div class="mini-card" data-index="{{ $loop->index }}" onclick="displayProject({{ $loop->index }})">
                    <h4 class="mini-title">{{ $project['title'] }}</h4>
                </div>
            @endforeach
        </div> --}}
@endsection

<style>

/* Caption section - 10% height */


.caption-text {
    font-size: 1.2rem;
    color: #2c3e50;
    font-weight: 500;
    letter-spacing: 0.5px;
    margin: 0;
    padding: 0;
    line-height: 1.5;
    font-family: 'Poppins', sans-serif; /* Modern font style */
}
.main-title {
            font-size: 3rem;
            font-weight: bold;
            animation: fadeIn 1s ease-in-out;
        }

        .sub-title {
            font-size: 1.8rem;
            margin: 10px 0;
            animation: fadeIn 1.5s ease-in-out;
        }

        .description {
            font-size: 1.2rem;
            margin: 20px 0;
            animation: fadeIn 2s ease-in-out;
        }

    .section-title {
        text-align: center;
        margin-bottom: 50px;
        font-size: 2.8rem;
        font-weight: bold;
        color: #2c3e50;
    }

    .filter-bar {
        text-align: center;
        margin-bottom: 40px;
    }

    .filter-btn {
        background-color: #4ca1af;
        border: none;
        color: #fff;
        padding: 10px 20px;
        margin: 5px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .filter-btn.active,
    .filter-btn:hover {
        background-color: #2c3e50;
    }

    .portfolio-caption {
            color: #ffffff;
            padding: 100px 20px;
         
    background: linear-gradient(135deg, #C4E1F6, #37AFE1);
    border-top: 1px solid #ddd;
    border-radius: 0 0 12px 12px; /* Only round the bottom corners */
    text-align: center;
    font-size: 1.2rem;
   
    justify-content: center;
    align-items: center;
    }
    .portfolio-grid {
        display: flex;             /* Enables Flexbox */
        justify-content: center;   /* Horizontally centers the card */
        align-items: center;       /* Vertically centers the card */
        height: 100%;              /* Ensure it takes the full height of the section */
        width: 100%;               /* Ensure it takes the full width of the section */
        margin: 20px;
    }
    /* Card Layout Styling */
    .portfolio-card {
       
        background: white;
        border-radius: 12px;
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2);
        text-align: center;
        overflow: hidden;
        transform: scale(0);
        transition: transform 0.3s ease;
    }

    .portfolio-card.active {
        transform: scale(1);
    }

    .portfolio-video {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-bottom: 1px solid #ccc;
    }

    .project-title {
        font-size: 1.8rem;
        color: #2c3e50;
        margin: 10px 0;
    }

    .project-description {
        font-size: 1rem;
        color: #666;
        padding: 10px;
    }

    .client-name {
        font-size: 0.9rem;
        color: #333;
        padding: 10px 0;
    }

    .portfolio-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 30px; /* Gap between the main display and mini-map */
}
/* mini map style */
.mini-map {
    flex-basis: 20%; /* 20% width */
    max-height: 80vh; /* Max height to allow vertical scrolling if necessary */
    display: flex;
    flex-direction: column; /* Stack mini-cards vertically */
    overflow-y: auto; /* Allow vertical scrolling */
    background-color: #f4f4f4; /* Background color for better visibility */
    padding: 20px;
    border-left: 1px solid #ddd; /* Divider between the main content and mini-map */
}

.mini-card {
    background-color: #4ca1af;
    border-radius: 8px;
    padding: 10px;
    margin: 10px 0;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
    color: #fff;
    text-align: center;
}

.mini-card:hover {
    background-color: #2c3e50;
    transform: scale(1.05);
}

.mini-title {
    font-size: 0.9rem;
    font-weight: bold;
    white-space: nowrap; /* Prevent text wrapping */
}

.mini-map::-webkit-scrollbar {
    width: 8px;
}

.mini-map::-webkit-scrollbar-thumb {
    background-color: #888;
    border-radius: 10px;
}

.mini-map::-webkit-scrollbar-track {
    background-color: #f1f1f1;
}

/* Main portfolio section adjustments */
.portfolio-section {
    padding-right: 20px; /* Adjust padding around the section */
}
/* Animation for the caption section */
@keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

@media (max-width: 768px) {
    .portfolio-container {
        flex-direction: column; /* Stack the elements vertically on smaller screens */
    }

    .mini-map {
        width: 100%; /* Make mini-map full width on small screens */
        height: auto;
        max-height: none;
    }
}
</style>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/ScrollTrigger.min.js"></script>
<!-- Portfolio Section JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let portfolioItems = @json($projects); // Fetch projects dynamically
        let currentProjectIndex = 0;
        let filteredProjects = portfolioItems; // Array to hold filtered projects

        // Display all project cards initially
        const projectCards = document.querySelectorAll('.portfolio-card');
        projectCards.forEach(card => {
            card.style.display = 'block'; // Show all cards initially
        });

        // Scroll event listener
        window.addEventListener('wheel', function(event) {
            event.preventDefault(); // Prevent default scrolling behavior
            if (event.deltaY > 0) {
                // Scroll down, show the next project
                if (currentProjectIndex < filteredProjects.length - 1) {
                    currentProjectIndex++;
                    changeProject();
                }
            } else {
                // Scroll up, show the previous project
                if (currentProjectIndex > 0) {
                    currentProjectIndex--;
                    changeProject();
                }
            }
        });

        // Filter functionality
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');

                // Mark the current filter button as active
                document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                // Filter the projects based on the selected category
                filteredProjects = filter === 'all' ? portfolioItems : portfolioItems.filter(p => p.category === filter);

                // Reset index and display the first filtered project
                currentProjectIndex = 0;
                projectCards.forEach(card => {
                    card.style.display = 'none'; // Hide all cards
                    if (filteredProjects.length > 0) {
                        const isMatch = filteredProjects.some(p => p.title === card.querySelector('.project-title').innerText);
                        if (isMatch) {
                            card.style.display = 'block'; // Show matching cards
                        }
                    }
                });

                if (filteredProjects.length > 0) {
                    changeProject();
                } else {
                    alert('No projects found for the selected category.');
                }
            });
        });

        // Function to change the displayed project
        function changeProject() {
            projectCards.forEach((card, index) => {
                card.classList.remove('active'); // Remove active class from all cards
                if (index === currentProjectIndex) {
                    card.classList.add('active'); // Add active class to the current project card
                    const video = card.querySelector('.portfolio-video');
                    video.currentTime = 0; // Reset video to start
                    video.play(); // Play the video
                } else {
                    const video = card.querySelector('.portfolio-video');
                    video.pause(); // Pause other videos
                }
            });
        }
    });
</script>
