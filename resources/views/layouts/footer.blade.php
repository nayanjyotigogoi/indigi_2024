<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Design</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        .footer {
            background-color: #003399;
            color: white;
            padding: 70px 20px 10px;
            position: relative;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .footer-logo {
            max-width: 200px;
            margin-bottom: 20px;
            border-radius: 10px;
        }

        .footer-description {
            color: #ffffff;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }

        .social-icons a {
            color: white;
            text-decoration: none;
            font-size: 24px;
            transition: transform 0.3s;
        }

        .social-icons a:hover {
            transform: scale(1.2);
        }

        .footer-section h3 {
            margin-bottom: 20px;
            font-size: 26px;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: #FFD700;
        }

        .footer-contact-info {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .footer-contact-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }

        .footer-contact-item i {
            color: #FFD700;
        }

        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #FFD700;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            display: none;
        }

        .scroll-top:hover {
            transform: scale(1.1);
        }

        .copyright {
            text-align: center;
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        @media (max-width: 768px) {
            .footer-content {
                grid-template-columns: 1fr;
            }
            .footer-section {
                margin-bottom: 30px;
            }
            .footer-section h3 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <img src="images/indigi_logo.jpg" alt="Indigi Logo" class="footer-logo">
                <p class="footer-description">Empowering businesses with cutting-edge technology solutions and a commitment to innovation, quality, and customer success.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                </div>

            </div>

            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Services</h3>
                <ul>
                    <li><a href="#">SAP Consulting</a></li>
                    <li><a href="#">SAP Implementation</a></li>
                    <li><a href="#">SAP Support</a></li>
                    <li><a href="#">SAP Business Technology Platform</a></li>
                    <li><a href="#">SAP Upgradation</a></li>
                    <li><a href="#">SAP Rollout</a></li>
                    <li><a href="#">Website Security Audit</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Contact Us</h3>
                <div class="footer-contact-info">
                    <div class="footer-contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+91 6001 3961 86</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>admin@indigiconsulting.com</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-globe"></i>
                        <span>www.indigiconsulting.com</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>House No-194, 2nd Floor, Panjabari Road, Ghy-37, Assam</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-building"></i>
                        <span>OFFICE NO. 311, 3-6-365, BASHEER BAGH, HIMAYATNAGAR, HYDERABAD - 500029</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-building"></i>
                        <span>M/S Pranay Vandan Office Solutions, 1st Floor, Anuj Chambers, 24 Park Street, Kolkata - 700016</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            © 2024 Indigi Consulting and Solutions Pvt Ltd | All Rights Reserved
        </div>

        <div class="scroll-top">
            <i class="fas fa-arrow-up"></i>
        </div>
    </footer>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script>
        // Scroll to top functionality
        document.querySelector('.scroll-top').addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Show/hide scroll to top button
        window.addEventListener('scroll', () => {
            const scrollBtn = document.querySelector('.scroll-top');
            if (window.scrollY > 200) {
                scrollBtn.style.display = 'flex';
            } else {
                scrollBtn.style.display = 'none';
            }
        });
    </script>
</body>
</html>
