<section id="portfolio" class="portfolio-section">
    <div class="container">
        <h2 class="section-title">Our Portfolio</h2>
        <!-- Filter bar for categories -->
        <div class="filter-bar">
            <button data-filter="all" class="filter-btn active">All</button>
            <button data-filter="web" class="filter-btn">Web Development</button>
            <button data-filter="sap" class="filter-btn">SAP Solutions</button>
            <button data-filter="android" class="filter-btn">Android Apps</button>
        </div>

        <!-- Portfolio grid layout -->
        <div class="portfolio-grid" id="portfolioGrid">
            <!-- Portfolio items will be loaded here -->
        </div>

        <!-- Load more button -->
        <div id="loadMore" class="load-more">Load More</div>
    </div>
</section>

<!-- Portfolio Section Styles -->
<style>
    .portfolio-section {
        background: white; /* Background color */
        padding: 60px 0;
        color: #333;
        overflow: hidden;
    }

    .section-title {
        text-align: center;
        margin-bottom: 40px;
        font-size: 2.5rem;
    }

    .filter-bar {
        text-align: center;
        margin-bottom: 30px;
    }

    .filter-bar .filter-btn {
        background-color: #4ca1af;
        border: none;
        color: #fff;
        padding: 10px 20px;
        margin: 5px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .filter-bar .filter-btn.active,
    .filter-bar .filter-btn:hover {
        background-color: #2c3e50;
    }

    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
    }

    .portfolio-item {
        position: relative;
        overflow: hidden;
        transition: transform 0.3s;
        opacity: 0; /* Initially hidden */
        transform: translateY(20px); /* Start below */
        animation: fadeIn 0.5s forwards; /* Fade in animation */
    }

    .portfolio-card {
        background: #333;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s;
    }

    .portfolio-card img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.5s;
    }

    .portfolio-card:hover {
        transform: scale(1.05);
    }

    .portfolio-hover {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.8);
        opacity: 0;
        transition: opacity 0.3s;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #fff;
        border-radius: 10px;
    }

    .portfolio-card:hover .portfolio-hover {
        opacity: 1;
    }

    .load-more {
        text-align: center;
        margin-top: 30px;
        padding: 10px 20px;
        background-color: #4ca1af;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .load-more:hover {
        background-color: #2c3e50;
    }

    /* Fade-in Animation */
    @keyframes fadeIn {
        to {
            opacity: 1;
            transform: translateY(0); /* Move to original position */
        }
    }

    /* Modal Styles */
    .modal-content {
        border-radius: 10px;
    }

    .modal-body img {
        max-width: 100%;
        margin-bottom: 15px;
    }
</style>

<!-- Include AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- Portfolio Section JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const loadMoreBtn = document.getElementById('loadMore');
        const portfolioGrid = document.getElementById('portfolioGrid');
        const allProjects = @json($projects); // All projects from the server
        let displayedProjects = 0;
        const projectsPerLoad = 8; // Number of projects to load at a time

        // Function to load more projects
        function loadProjects() {
            const totalProjects = allProjects.length;
            const projectsToLoad = Math.min(projectsPerLoad, totalProjects - displayedProjects);

            for (let i = 0; i < projectsToLoad; i++) {
                const project = allProjects[displayedProjects + i];
                const portfolioItem = document.createElement('div');
                portfolioItem.className = 'portfolio-item';
                portfolioItem.setAttribute('data-category', project.category);
                portfolioItem.setAttribute('data-aos', 'fade-up'); // Add AOS effect
                portfolioItem.setAttribute('data-aos-delay', `${i * 100}`); // Stagger animation
                portfolioItem.innerHTML = `
                    <div class="portfolio-card">
                        <img src="${project.image}" alt="${project.title}" class="lazy" loading="lazy">
                        <div class="portfolio-hover">
                            <h3>${project.title}</h3>
                            <p>${project.short_description}</p>
                            <button class="view-details-btn" data-title="${project.title}" data-description="${project.description}" data-image="${project.image}" data-toggle="modal" data-target="#portfolioModal">View Details</button>
                        </div>
                    </div>
                `;
                portfolioGrid.appendChild(portfolioItem);
            }

            displayedProjects += projectsToLoad;

            // Refresh AOS to apply animations to new elements
            AOS.refresh();

            if (displayedProjects >= totalProjects) {
                loadMoreBtn.style.display = 'none'; // Hide the button when no more projects
            }

            // Attach event listeners for "View Details" buttons
            document.querySelectorAll('.view-details-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const title = this.getAttribute('data-title');
                    const description = this.getAttribute('data-description');
                    const image = this.getAttribute('data-image');

                    document.getElementById('portfolioModalLabel').innerText = title;
                    document.getElementById('modalDescription').innerText = description;
                    document.getElementById('modalImage').setAttribute('src', image);
                });
            });
        }

        // Load the initial set of projects
        loadProjects();

        // Add event listener for the load more button
        loadMoreBtn.addEventListener('click', loadProjects);

        // Filter functionality
        let filterButtons = document.querySelectorAll('.filter-btn');
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');

                let filterValue = this.getAttribute('data-filter');
                let portfolioItems = document.querySelectorAll('.portfolio-item');

                portfolioItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });

    // Initialize AOS
    AOS.init({
        duration: 1000,  // Duration of the animation in milliseconds
        easing: 'ease-in-out',  // Easing function for animations
        once: true  // Whether animation should happen only once or every time you scroll
    });
</script>

<!-- Include AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>

<!-- Include Bootstrap JS for Modal functionality -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
