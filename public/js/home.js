
// Animated counter function
function animateCounter(element, target) {
    let current = 0;
    const increment = target / 50; // Adjust speed by changing divisor
    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            clearInterval(timer);
            current = target;
        }
        element.textContent = Math.floor(current) + '+';
    }, 40);
}

// Trigger animation only for the countstats section
document.addEventListener('DOMContentLoaded', () => {
    const statsSection = document.querySelector('.countstats-container'); // Target specific section

    if (statsSection) {
        const numbers = statsSection.querySelectorAll('.countnumber'); // Only select counters within the section
        numbers.forEach(number => {
            const target = parseInt(number.getAttribute('data-target'));
            animateCounter(number, target);
        });
    }
});

document.addEventListener("DOMContentLoaded", function() {
    // Get all the filter buttons
    const filterBtns = document.querySelectorAll('.portfoliofilter-btn');
    
    // Get all the portfolio items
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    // Add click event to each filter button
    filterBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            // Remove 'active' class from all filter buttons
            filterBtns.forEach(function(button) {
                button.classList.remove('active');
            });
            
            // Add 'active' class to the clicked filter button
            this.classList.add('active');
            
            // Get the filter type (text) of the clicked button
            const filterValue = this.textContent.trim().toLowerCase();
            
            // Loop through portfolio items and hide/show based on category
            portfolioItems.forEach(function(item) {
                // Get the category of the current portfolio item
                const itemCategories = item.dataset.categories.split(' ');
                
                // Check if the item matches the selected category or if 'All Work' is selected
                if (filterValue === 'all work' || itemCategories.includes(filterValue)) {
                    item.style.display = 'block'; // Show item
                } else {
                    item.style.display = 'none'; // Hide item
                }
            });
        });
    });
});




// javascript for testimonials
document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector(".testimonials");
    const slides = document.querySelectorAll(".testimonial-card");
    const prevBtn = document.querySelector(".Testimonialsprev");
    const nextBtn = document.querySelector(".Testimonialsnext");
    const dots = document.querySelectorAll(".Testimonialsdot");

    let currentIndex = 0;
    let slidesToShow = getSlidesToShow();
    let maxIndex = slides.length - slidesToShow;

    function getSlidesToShow() {
        if (window.innerWidth > 1024) return 3;
        if (window.innerWidth > 768) return 2;
        return 1;
    }

    function updateSlider() {
        const cardWidth = slides[0].offsetWidth + 20; // Adjust with margin
        const offset = -(currentIndex * cardWidth);
        slider.style.transform = `translateX(${offset}px)`;

        // Update active dots
        dots.forEach((dot, index) => {
            dot.classList.toggle("active", Math.floor(index / slidesToShow) === Math.floor(currentIndex / slidesToShow));
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + slidesToShow) % slides.length; // Infinite loop
        updateSlider();
    }

    function prevSlide() {
        currentIndex = (currentIndex - slidesToShow + slides.length) % slides.length; // Infinite loop backward
        updateSlider();
    }

    prevBtn.addEventListener("click", prevSlide);
    nextBtn.addEventListener("click", nextSlide);

    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            currentIndex = index * slidesToShow;
            updateSlider();
        });
    });

    // Adjust slides on window resize
    window.addEventListener("resize", () => {
        slidesToShow = getSlidesToShow();
        maxIndex = slides.length - slidesToShow;
        currentIndex = Math.min(currentIndex, maxIndex);
        updateSlider();
    });

    // Auto-slide every 5 seconds
    // setInterval(nextSlide, 5000);

    // Initial setup
    updateSlider();
});



// javascript for the gallery .

document.addEventListener('DOMContentLoaded', function() {
    // Lightbox Functionality
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightboxImg');
    const closeBtn = document.querySelector('.close');

    document.querySelectorAll('.gallery-section .lightbox-trigger').forEach(item => {
        item.addEventListener('click', function() {
            lightbox.style.display = 'block';
            lightboxImg.src = this.src;
        });
    });

    closeBtn.addEventListener('click', function() {
        lightbox.style.display = 'none';
    });

    // Scatter Effect
    function scatterImages() {
        const galleryItems = document.querySelectorAll('.gallery-section .gallery-item');
        const container = document.querySelector('.gallery-section .gallery-grid');

        const containerRect = container.getBoundingClientRect();
        const centerX = containerRect.width / 2;
        const centerY = containerRect.height / 2;

        galleryItems.forEach((item, index) => {
            item.style.position = 'absolute';
            item.style.left = `${centerX}px`;
            item.style.top = `${centerY}px`;
            item.style.transform = 'translate(-50%, -50%) scale(0)';
            item.style.opacity = '0';

            setTimeout(() => {
                const finalX = Math.random() * (containerRect.width - item.offsetWidth);
                const finalY = Math.random() * (containerRect.height - item.offsetHeight);
                item.style.left = `${finalX}px`;
                item.style.top = `${finalY}px`;
                item.style.transform = 'scale(1)';
                item.style.opacity = '1';
            }, index * 300);
        });
    }

    // Trigger scatter effect only for gallery section
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                scatterImages();
            }
        });
    }, { threshold: 0.3 });

    observer.observe(document.querySelector('.gallery-section'));
});

//client logo section
document.addEventListener('DOMContentLoaded', function() {
    const clientLogos = [
      { id: 1, name: 'Yamato Transport', location: 'Singapore', src: 'images/client/YAMATO.png' },
      { id: 2, name: 'KREPL', location: 'Delhi', src: 'images/client/KREPL.png' },
      { id: 3, name: 'OIL India', location: 'Assam', src: 'images/client/OIL.png' },
      { id: 4, name: 'Green Hospital Pvt LTD', location: 'Japan', src: 'images/client/JAPAN.png' },
      { id: 5, name: 'Max-infra(I) Limited', location: 'Hyderabad', src: 'images/client/max-infra.png' },
      { id: 6, name: 'NRL', location: 'Assam', src: 'images/client/nrl.jpg' },
      { id: 7, name: 'WANFENG', location: 'Japan', src: 'images/client/WANFENG.png' },
      { id: 8, name: 'PBGL', location: 'Assam', src: 'images/client/PBGL.png' },
      { id: 9, name: 'Purabi', location: 'Assam', src: 'images/client/purabi.png' },
      { id: 10, name: 'Jal Board', location: 'Assam', src: 'images/client/jal-board.png' },
      { id: 11, name: 'Incois', location: 'Hyderabad', src: 'images/client/incois.png' },
      { id: 12, name: 'IGGL', location: 'Assam', src: 'images/client/IGGL.png' }
    ];

    const logosGrid = document.getElementById('logos-grid-logo_client');

    // Duplicate logos to allow seamless scroll loop
    const scrollingLogos = [...clientLogos, ...clientLogos];

    scrollingLogos.forEach((logo, index) => {
      const logoItem = document.createElement('div');
      logoItem.className = 'logo-item-logo_client';
      logoItem.setAttribute('data-delay', index * 100);

      const logoImage = document.createElement('img');
      logoImage.src = logo.src;
      logoImage.alt = logo.name;

      const overlay = document.createElement('div');
      overlay.className = 'overlay-logo_client';
      overlay.innerHTML = `<h3>${logo.name}</h3><p>${logo.location}</p>`;

      logoItem.appendChild(logoImage);
      logoItem.appendChild(overlay);
      logosGrid.appendChild(logoItem);
    });

    const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1
    };

    const headerObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          headerObserver.unobserve(entry.target);
        }
      });
    }, observerOptions);

    const logoObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const delay = parseInt(entry.target.getAttribute('data-delay'));
          setTimeout(() => {
            entry.target.classList.add('visible');
          }, delay);
          logoObserver.unobserve(entry.target);
        }
      });
    }, observerOptions);

    const sectionHeader = document.querySelector('.section-header-logo_client');
    headerObserver.observe(sectionHeader);

    const logoItems = document.querySelectorAll('.logo-item-logo_client');
    logoItems.forEach(item => {
      logoObserver.observe(item);
    });
  });

  
// Javascript for the client-map section

// document.addEventListener("DOMContentLoaded", function () {
//     const clientMapContainer = document.querySelector("#client-map");

//     // Ensure this script only runs if the client map exists
//     if (clientMapContainer) {
//         AOS.init();
//         loadClientMap();
//     }
// });

// function loadClientMap() {
//     const mapContainer = document.getElementById('client-map');
//     if (!mapContainer) return; // Prevents errors if the map doesn't exist

//     var clientMap = new google.maps.Map(mapContainer, {
//         zoom: 2,
//         center: { lat: 26.133127918480962, lng: 91.8301502270023 }
//     });

//     addClientMarkers(clientMap);
// }

// function addClientMarkers(map) {
//     const clients = [
//         {
//             name: "Guwahati Jal Board",
//             lat: 26.198242391007767, 
//             lng: 91.76953709632484,
//             testimonial: "This is a great company!",
//             img: "images/testimonials/gjb_logo.png"
//         },
//         {
//             name: "Rongsheng",
//             lat: 26.155858629965707,
//             lng: 91.78036553865408,
//             testimonial: "Excellent services provided!",
//             img: "images/testimonials/rongsheng.jpg"
//         },
//         {
//             name: "IGGL",
//             lat: 26.154650313252183, 
//             lng: 91.78049102331455,
//             testimonial: "A wonderful experience!",
//             img: "images/testimonials/iggl_testimonial.jpg"
//         }
//     ];

//     clients.forEach(client => {
//         const marker = new google.maps.Marker({
//             position: { lat: client.lat, lng: client.lng },
//             map: map,
//             title: client.name
//         });

//         const infowindow = new google.maps.InfoWindow({
//             content: `
//                 <div style="text-align: center;">
//                     <img src="${client.img}" alt="${client.name}" style="width: 100px; height: auto; border-radius: 50%;">
//                     <h5>${client.name}</h5>
//                     <p>${client.testimonial}</p>
//                 </div>
//             `
//         });

//         marker.addListener('click', function() {
//             infowindow.open(map, marker);
//         });
//     });
// }