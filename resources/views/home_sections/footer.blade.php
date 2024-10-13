<!-- CSS for Footer -->
<style>
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

    footer {
        animation: fadeIn 0.8s ease forwards; /* Fade-in effect */
    }

    .footer-heading {
        font-size: 18px;
        color: #333;
        margin-bottom: 15px;
        font-weight: bold;
    }

    .social-icons {
        display: flex;
        justify-content: center; /* Center the icons */
        margin-top: 10px;
    }

    .social-icon {
        font-size: 20px; /* Set icon size */
        margin: 0 10px; /* Space between icons */
        transition: transform 0.3s ease; /* Smooth transition */
        color: #333; /* Default icon color */
    }

    .social-icon:hover {
        transform: scale(1.2); /* Scale up slightly on hover */
        color: #007bff; /* Change color on hover */
    }

    p {
        color: #007bff; /* Copyright text color */
        font-weight: bold;
        font-size: 14px;
    }
</style>

<!-- Footer -->
<footer class="text-center p-4" style="background-color: #55caff54; color: #333;">
    <div class="container">
        <!-- Follow Us Section -->
        <div class="row">
            <div class="col-12">
                <h5 class="footer-heading">Follow Us</h5>
                <div class="social-icons">
                    <a href="https://www.facebook.com" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com" target="_blank" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <p class="mt-3">&copy; 2024 Indigi Consulting. All rights reserved.</p>
    </div>
</footer>
