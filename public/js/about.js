function animateCard(element) {
    element.style.transform = 'translateY(-5px)';
    element.style.boxShadow = '0 10px 20px rgba(0,0,0,0.1)';
}

function resetCard(element) {
    element.style.transform = 'translateY(0)';
    element.style.boxShadow = 'none';
}

// Add smooth scroll behavior
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});