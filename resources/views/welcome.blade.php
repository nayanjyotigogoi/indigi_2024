<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Company Gallery</title>
  <style>
/* Base styles */
:root {
  --primary-bg: #ffffff;
  --text-primary: #111827;
  --text-secondary: #4b5563;
  --border-color: #e5e7eb;
  --accent-color: #3b82f6;
  --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
  --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  --radius: 0.5rem;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Inter', sans-serif;
  background-color: var(--primary-bg);
  color: var(--text-primary);
  line-height: 1.5;
}

.container {
  max-width: 1280px;
  margin: 0 auto;
  padding: 2rem 1rem;
}

.header {
  text-align: center;
  margin-bottom: 2rem;
}

.header h1 {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 0.5rem;
}

.header p {
  font-size: 1.125rem;
  color: var(--text-secondary);
  max-width: 36rem;
  margin: 0 auto;
}

/* Gallery controls */
.my-gallery .gallery-controls {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-bottom: 2rem;
}

.my-gallery .tabs {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 0.5rem;
  margin-bottom: 1rem;
}

.my-gallery .tab-btn {
  background-color: transparent;
  border: 1px solid var(--border-color);
  border-radius: var(--radius);
  padding: 0.5rem 1rem;
  font-size: 0.875rem;
  font-weight: 500;
  color: var(--text-secondary);
  cursor: pointer;
  transition: all 0.2s ease;
  text-transform: capitalize;
}

.my-gallery .tab-btn:hover {
  background-color: rgba(0, 0, 0, 0.05);
}

.my-gallery .tab-btn.active {
  background-color: var(--accent-color);
  color: white;
  border-color: var(--accent-color);
}

.my-gallery .pause-btn {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  background-color: transparent;
  border: 1px solid var(--border-color);
  border-radius: var(--radius);
  padding: 0.5rem 1rem;
  font-size: 0.875rem;
  font-weight: 500;
  color: var(--text-secondary);
  cursor: pointer;
  transition: all 0.2s ease;
}

.my-gallery .pause-btn:hover {
  background-color: rgba(0, 0, 0, 0.05);
}

.hidden {
  display: none;
}

/* Gallery container */
.my-gallery .gallery-container {
  width: 100%;
  overflow: hidden;
}

.my-gallery .gallery-row {
  position: relative;
  width: 100%;
  margin-bottom: 1rem;
  overflow: hidden;
}

.my-gallery .scroll-container {
  display: flex;
  gap: 0.5rem;
  width: max-content;
  animation-duration: 30s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
}

.my-gallery .scroll-left {
  animation-name: scrollLeft;
}

.my-gallery .scroll-right {
  animation-name: scrollRight;
}

.my-gallery .paused {
  animation-play-state: paused;
}

@keyframes scrollLeft {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(-50%);
  }
}

@keyframes scrollRight {
  from {
    transform: translateX(-50%);
  }
  to {
    transform: translateX(0);
  }
}

.my-gallery .gallery-item {
  position: relative;
  width: 300px;
  height: 225px;
  border-radius: var(--radius);
  overflow: hidden;
  box-shadow: var(--shadow-md);
  cursor: pointer;
  flex-shrink: 0;
}

.my-gallery .gallery-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.my-gallery .gallery-item:hover img {
  transform: scale(1.05);
}

.my-gallery .gallery-item-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 1rem;
  background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
  color: white;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.my-gallery .gallery-item:hover .gallery-item-overlay {
  opacity: 1;
}

.my-gallery .gallery-item-title {
  font-size: 1rem;
  font-weight: 500;
  margin-bottom: 0.25rem;
}

.my-gallery .gallery-item-category {
  font-size: 0.75rem;
  opacity: 0.8;
  text-transform: capitalize;
}

/* Lightbox */
.my-gallery .lightbox {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.9);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1000;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.3s ease;
}

.my-gallery .lightbox.active {
  opacity: 1;
  pointer-events: auto;
}

.my-gallery .close-btn {
  position: absolute;
  top: 1rem;
  right: 1rem;
  background: transparent;
  border: none;
  color: white;
  cursor: pointer;
  z-index: 1010;
}

.my-gallery .nav-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(255, 255, 255, 0.1);
  border: none;
  color: white;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  z-index: 1010;
  transition: background 0.2s ease;
}

.my-gallery .nav-btn:hover {
  background: rgba(255, 255, 255, 0.2);
}

.my-gallery .prev-btn {
  left: 1rem;
}

.my-gallery .next-btn {
  right: 1rem;
}

.my-gallery .lightbox-content {
  position: relative;
  max-width: 90%;
  max-height: 80vh;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.my-gallery .lightbox-img {
  max-width: 100%;
  max-height: 70vh;
  object-fit: contain;
}

.my-gallery .lightbox-info {
  margin-top: 1rem;
  text-align: center;
  color: white;
}

.my-gallery .lightbox-title {
  font-size: 1.25rem;
  font-weight: 500;
  margin-bottom: 0.25rem;
}

.my-gallery .lightbox-category {
  font-size: 0.875rem;
  opacity: 0.8;
  text-transform: capitalize;
}

/* Responsive */
@media (max-width: 768px) {
  .header h1 {
    font-size: 2rem;
  }

  .header p {
    font-size: 1rem;
  }

  .my-gallery .gallery-item {
    width: 250px;
    height: 187.5px;
  }

  .my-gallery .nav-btn {
    width: 36px;
    height: 36px;
  }
}

@media (max-width: 480px) {
  .header h1 {
    font-size: 1.75rem;
  }

  .my-gallery .gallery-item {
    width: 200px;
    height: 150px;
  }

  .my-gallery .gallery-item-title {
    font-size: 0.875rem;
  }

  .my-gallery .nav-btn {
    width: 32px;
    height: 32px;
  }
}
</style>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<main class="container my-gallery">
  <div class="header">
    <h1>Company Gallery</h1>
    <p>Explore moments and milestones from our company's journey</p>
  </div>

  <div class="gallery-controls">
    <div class="tabs">
      <button class="tab-btn active" data-category="all">All</button>
      <button class="tab-btn" data-category="events">Events</button>
      <button class="tab-btn" data-category="celebrations">Celebrations</button>
      <button class="tab-btn" data-category="meetings">Meetings</button>
      <button class="tab-btn" data-category="launches">Launches</button>
      <button class="tab-btn" data-category="community">Community</button>
      <button class="tab-btn" data-category="culture">Culture</button>
    </div>
    <button class="pause-btn">
      <svg class="pause-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><rect x="6" y="4" width="4" height="16"></rect><rect x="14" y="4" width="4" height="16"></rect></svg>
      <svg class="play-icon hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
      <span class="pause-text">Pause</span>
      <span class="play-text hidden">Resume</span>
    </button>
  </div>

  <div class="gallery-container">
    <!-- Gallery rows dynamically inserted here -->
  </div>
</main>

<!-- Lightbox -->
<div class="lightbox" id="lightbox">
  <button class="close-btn">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
  </button>
  <button class="nav-btn prev-btn">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><polyline points="15 18 9 12 15 6"></polyline></svg>
  </button>
  <button class="nav-btn next-btn">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><polyline points="9 18 15 12 9 6"></polyline></svg>
  </button>
  <div class="lightbox-content">
    <img class="lightbox-img" src="" alt="">
    <div class="lightbox-info">
      <div class="lightbox-title"></div>
      <div class="lightbox-category"></div>
    </div>
  </div>
</div>

  <script>
    // Gallery data - replace with your actual company images
const galleryItems = [
  {
    id: 1,
    src: "https://placehold.co/800x600/3b82f6/ffffff?text=Team+Retreat",
    alt: "Team building activity",
    category: "events",
    title: "Annual Team Retreat"
  },
  {
    id: 2,
    src: "https://placehold.co/800x600/3b82f6/ffffff?text=Anniversary",
    alt: "Office celebration",
    category: "celebrations",
    title: "Company Anniversary"
  },
  {
    id: 3,
    src: "https://placehold.co/800x600/3b82f6/ffffff?text=Product+Launch",
    alt: "Product launch",
    category: "launches",
    title: "New Product Launch"
  },
  {
    id: 4,
    src: "https://placehold.co/800x600/3b82f6/ffffff?text=Planning",
    alt: "Team meeting",
    category: "meetings",
    title: "Quarterly Planning"
  },
  {
    id: 5,
    src: "https://placehold.co/800x600/3b82f6/ffffff?text=Recognition",
    alt: "Award ceremony",
    category: "celebrations",
    title: "Employee Recognition"
  },
  {
    id: 6,
    src: "https://placehold.co/800x600/3b82f6/ffffff?text=Workshop",
    alt: "Workshop session",
    category: "events",
    title: "Innovation Workshop"
  },
  {
    id: 7,
    src: "https://placehold.co/800x600/3b82f6/ffffff?text=Conference",
    alt: "Conference presentation",
    category: "events",
    title: "Industry Conference"
  },
  {
    id: 8,
    src: "https://placehold.co/800x600/3b82f6/ffffff?text=Charity",
    alt: "Charity event",
    category: "community",
    title: "Charity Fundraiser"
  },
  {
    id: 9,
    src: "https://placehold.co/800x600/3b82f6/ffffff?text=Office+Life",
    alt: "Office culture",
    category: "culture",
    title: "Office Life"
  },
  {
    id: 10,
    src: "https://placehold.co/800x600/3b82f6/ffffff?text=Picnic",
    alt: "Company outing",
    category: "events",
    title: "Summer Picnic"
  },
  {
    id: 11,
    src: "https://placehold.co/800x600/3b82f6/ffffff?text=Training",
    alt: "Training session",
    category: "meetings",
    title: "Skills Workshop"
  },
  {
    id: 12,
    src: "https://placehold.co/800x600/3b82f6/ffffff?text=Holiday",
    alt: "Holiday party",
    category: "celebrations",
    title: "Holiday Celebration"
  }
];

// DOM elements
const galleryContainer = document.querySelector('.gallery-container');
const tabButtons = document.querySelectorAll('.tab-btn');
const pauseButton = document.querySelector('.pause-btn');
const pauseIcon = document.querySelector('.pause-icon');
const playIcon = document.querySelector('.play-icon');
const pauseText = document.querySelector('.pause-text');
const playText = document.querySelector('.play-text');
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.querySelector('.lightbox-img');
const lightboxTitle = document.querySelector('.lightbox-title');
const lightboxCategory = document.querySelector('.lightbox-category');
const closeBtn = document.querySelector('.close-btn');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

// State
let activeCategory = 'all';
let isPaused = false;
let currentImageId = null;

// Helper function to chunk array into rows
function chunkArray(array, size) {
  const chunkedArr = [];
  for (let i = 0; i < array.length; i += size) {
    chunkedArr.push(array.slice(i, i + size));
  }
  return chunkedArr;
}

// Filter gallery items by category
function filterGallery() {
  const filteredItems = activeCategory === 'all' 
    ? galleryItems 
    : galleryItems.filter(item => item.category === activeCategory);
  
  renderGallery(filteredItems);
}

// Render gallery
function renderGallery(items) {
  galleryContainer.innerHTML = '';
  
  // Organize images into rows
  const rows = chunkArray(items, 4);
  
  rows.forEach((row, rowIndex) => {
    // Create row container
    const galleryRow = document.createElement('div');
    galleryRow.className = 'gallery-row';
    
    // Create scroll container
    const scrollContainer = document.createElement('div');
    scrollContainer.className = `scroll-container ${rowIndex % 2 === 0 ? 'scroll-left' : 'scroll-right'}`;
    if (isPaused) {
      scrollContainer.classList.add('paused');
    }
    
    // Add hover pause
    galleryRow.addEventListener('mouseenter', () => {
      scrollContainer.classList.add('paused');
    });
    
    galleryRow.addEventListener('mouseleave', () => {
      if (!isPaused) {
        scrollContainer.classList.remove('paused');
      }
    });
    
    // Duplicate items for seamless scrolling
    const duplicatedItems = [...row, ...row];
    
    // Create gallery items
    duplicatedItems.forEach(item => {
      const galleryItem = document.createElement('div');
      galleryItem.className = 'gallery-item';
      galleryItem.dataset.id = item.id;
      
      const img = document.createElement('img');
      img.src = item.src;
      img.alt = item.alt;
      
      const overlay = document.createElement('div');
      overlay.className = 'gallery-item-overlay';
      
      const title = document.createElement('h3');
      title.className = 'gallery-item-title';
      title.textContent = item.title;
      
      const category = document.createElement('p');
      category.className = 'gallery-item-category';
      category.textContent = item.category;
      
      overlay.appendChild(title);
      overlay.appendChild(category);
      
      galleryItem.appendChild(img);
      galleryItem.appendChild(overlay);
      
      // Add click event for lightbox
      galleryItem.addEventListener('click', () => {
        openLightbox(item.id);
      });
      
      scrollContainer.appendChild(galleryItem);
    });
    
    galleryRow.appendChild(scrollContainer);
    galleryContainer.appendChild(galleryRow);
  });
}

// Toggle pause/play
function togglePause() {
  isPaused = !isPaused;
  
  const scrollContainers = document.querySelectorAll('.scroll-container');
  
  if (isPaused) {
    scrollContainers.forEach(container => {
      container.classList.add('paused');
    });
    pauseIcon.classList.add('hidden');
    playIcon.classList.remove('hidden');
    pauseText.classList.add('hidden');
    playText.classList.remove('hidden');
  } else {
    scrollContainers.forEach(container => {
      container.classList.remove('paused');
    });
    pauseIcon.classList.remove('hidden');
    playIcon.classList.add('hidden');
    pauseText.classList.remove('hidden');
    playText.classList.add('hidden');
  }
}

// Lightbox functions
function openLightbox(id) {
  currentImageId = id;
  const item = galleryItems.find(item => item.id === id);
  
  if (item) {
    lightboxImg.src = item.src;
    lightboxImg.alt = item.alt;
    lightboxTitle.textContent = item.title;
    lightboxCategory.textContent = item.category;
    
    lightbox.classList.add('active');
    document.body.style.overflow = 'hidden';
  }
}

function closeLightbox() {
  lightbox.classList.remove('active');
  document.body.style.overflow = 'auto';
  currentImageId = null;
}

function navigateImage(direction) {
  if (!currentImageId) return;
  
  const filteredItems = activeCategory === 'all' 
    ? galleryItems 
    : galleryItems.filter(item => item.category === activeCategory);
  
  const currentIndex = filteredItems.findIndex(item => item.id === currentImageId);
  
  if (currentIndex === -1) return;
  
  let newIndex;
  if (direction === 'next') {
    newIndex = (currentIndex + 1) % filteredItems.length;
  } else {
    newIndex = (currentIndex - 1 + filteredItems.length) % filteredItems.length;
  }
  
  openLightbox(filteredItems[newIndex].id);
}

// Event listeners
tabButtons.forEach(button => {
  button.addEventListener('click', () => {
    // Update active tab
    tabButtons.forEach(btn => btn.classList.remove('active'));
    button.classList.add('active');
    
    // Update active category and filter gallery
    activeCategory = button.dataset.category;
    filterGallery();
  });
});

pauseButton.addEventListener('click', togglePause);
closeBtn.addEventListener('click', closeLightbox);
prevBtn.addEventListener('click', () => navigateImage('prev'));
nextBtn.addEventListener('click', () => navigateImage('next'));

// Close lightbox when clicking outside the content
lightbox.addEventListener('click', (e) => {
  if (e.target === lightbox) {
    closeLightbox();
  }
});

// Keyboard navigation
document.addEventListener('keydown', (e) => {
  if (!lightbox.classList.contains('active')) return;
  
  if (e.key === 'Escape') {
    closeLightbox();
  } else if (e.key === 'ArrowLeft') {
    navigateImage('prev');
  } else if (e.key === 'ArrowRight') {
    navigateImage('next');
  }
});

// Initialize gallery
filterGallery();
  </script>
</body>
</html>