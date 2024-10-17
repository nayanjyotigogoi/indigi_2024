<!-- Portfolio Section -->
<section id="portfolio" class="portfolio-section" data-aos="fade-up">
    <div class="container">
        <h2 class="section-title" data-aos="zoom-in">Our Portfolio</h2>

        <!-- Filter bar for categories -->
        <div class="filter-bar" data-aos="zoom-in">
            <button data-filter="all" class="filter-btn active">All</button>
            <button data-filter="sap" class="filter-btn">SAP Solutions</button>
            <button data-filter="android" class="filter-btn">Android Apps</button>
            <button data-filter="website" class="filter-btn">Website</button> <!-- New filter button -->
        </div>

        <!-- Single Project Display -->
        <div class="portfolio-single" data-aos="fade-right">
            <!-- Left Side: Project Details -->
            <div class="portfolio-details" id="portfolioDetails">
                <h3 id="projectTitle">Project Title</h3>
                <p id="projectDescription">Project description goes here.</p>
                <p id="clientName">Client: <strong>Client Name</strong></p>
            </div>

            <!-- Right Side: Video Card -->
            <div class="portfolio-media" data-aos="fade-left">
                <div class="media-card">
                    <video class="portfolio-video" muted loop preload="none" id="portfolioVideo">
                        <source id="videoSource" src="video-placeholder.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section Styles -->
<style>
    .portfolio-section {
        background: #f9f9f9;
        padding: 80px 0;
        color: #333;
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

    /* Single project display styling */
    .portfolio-single {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
    }

    .portfolio-details {
        flex: 1;
        padding-right: 20px;
        color: #333;
        position: relative;
        overflow: hidden;
    }

    .portfolio-details h3 {
        font-size: 2.2rem;
        margin-bottom: 15px;
        color: #2c3e50;
        font-weight: bold;
        position: relative;
        background: linear-gradient(90deg, #4ca1af 0%, #2c3e50 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        transition: all 0.4s ease;
    }

    .portfolio-details p {
        font-size: 1.2rem;
        color: #666;
        margin-bottom: 10px;
        position: relative;
        opacity: 0.85;
        transition: opacity 0.3s ease-in-out;
    }

    .portfolio-details p strong {
        color: #333;
        font-weight: bold;
    }

    .portfolio-media {
        flex: 1;
        position: relative;
    }

    .media-card {
        position: relative;
        width: 100%;
        height: auto;
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2);
    }

    .portfolio-video {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .portfolio-single {
            flex-direction: column;
        }

        .portfolio-details {
            padding-right: 0;
            text-align: center;
        }

        .portfolio-details h3 {
            font-size: 1.8rem;
        }

        .portfolio-details p {
            font-size: 1rem;
        }
    }
</style>

<!-- Portfolio Section JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let portfolioItems = @json($projects); // Fetch projects dynamically
        let currentProjectIndex = 0;
        let filteredProjects = portfolioItems; // Array to hold filtered projects

        // Initial display
        displayProject(filteredProjects[currentProjectIndex]);

        // Scroll event listener
        window.addEventListener('wheel', function(event) {
            if (event.deltaY > 0) {
                // Scroll down, show the next project
                if (currentProjectIndex < filteredProjects.length - 1) {
                    currentProjectIndex++;
                    displayProject(filteredProjects[currentProjectIndex]);
                }
            } else {
                // Scroll up, show the previous project
                if (currentProjectIndex > 0) {
                    currentProjectIndex--;
                    displayProject(filteredProjects[currentProjectIndex]);
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
                if (filter === 'all') {
                    filteredProjects = portfolioItems;
                } else {
                    filteredProjects = portfolioItems.filter(p => p.category === filter);
                }

                // Reset index and display the first filtered project
                if (filteredProjects.length > 0) {
                    currentProjectIndex = 0;
                    displayProject(filteredProjects[currentProjectIndex]);
                } else {
                    alert('No projects found for the selected category.');
                }
            });
        });

        // Function to display a project based on the index
        function displayProject(project) {
            document.getElementById('projectTitle').innerText = project.title;
            document.getElementById('projectDescription').innerText = project.description;
            document.getElementById('clientName').innerHTML = `Client: <strong>${project.clientName}</strong>`;
            
            const videoElement = document.getElementById('portfolioVideo');
            const videoSourceElement = document.getElementById('videoSource');

            // Update the video source
            videoSourceElement.src = project.video;
            videoElement.load();

            // Play the video after it has been loaded
            videoElement.play();
        }
    });
</script>
