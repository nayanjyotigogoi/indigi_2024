<!-- Footer Styles -->
<style>
    .footer-section {
        background-color: #2c3e50;
        color: #ffffff;
        padding: 60px 0 10px 0;
    }

    .footer-columns {
        font-size: 0.6rem;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .footer-column {
        flex: 1;
        max-width: 400px;
        margin: 20px;
    }

    .footer-column h3 {
        font-size: 1.5rem;
        margin-bottom: 20px;
        color: #ffffff;
    }

    .footer-column ul {
        list-style: none;
        padding: 0;
    }

    .footer-column ul li {
        margin-bottom: 10px;
        color: #ffffff;
    }

    .footer-column ul li a {
        color: #ffffff;
        text-decoration: none;
    }

    .footer-column ul li a:hover {
        text-decoration: underline;
    }

    .newsletter-form {
        display: flex;
    }

    .newsletter-form input[type="email"] {
        padding: 10px;
        flex: 1;
        border: none;
        border-radius: 5px;
        margin-right: 10px;
    }

    .newsletter-form button {
        padding: 10px 20px;
        background-color: #4ca1af;
        color: #ffffff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .newsletter-form button:hover {
        background-color: #2980b9;
    }

    .social-icons {
        list-style: none;
        padding: 0;
        display: flex;
        gap: 10px;
    }

    .social-icons li {
        display: inline-block;
    }

    .social-icons li a {
        color: #ffffff;
        font-size: 1.5rem;
        text-decoration: none;
    }

    .social-icons li a:hover {
        color: #2980b9;
    }

    .footer-bottom {
        text-align: center;
        margin-top: 40px;
        font-size: 0.9rem;
        color: #95a5a6;
    }

    @media (max-width: 768px) {
        .footer-columns {
            flex-direction: column;
            align-items: center;
        }

        .footer-column {
            margin: 20px 0;
        }
    }
</style>

<!-- Footer Section -->
<footer class="footer-section">
    <div class="container">
        <div class="footer-columns">
            <!-- Contact Details Column -->
            <div class="footer-column">
                <h3>Contact Us</h3>
                <ul>
                    <li><strong>Phone:</strong> +91-8586 0184 41</li>
                    <li><strong>Email:</strong> admin@indigiconsulting.com</li>
                    <li><strong>Address 1:</strong> HOUSE NO-194, 2ND FLOOR, PANJABARI ROAD, GHY-37, ASSAM</li>
                    <br>
                    <li><strong>Address 2:</strong> M/S Pranay Vandan Office Solutions, 1st Floor, Anuj Chambers, 24 park Street, Kolkata - 700016</li>
                    <br>
                    <li><strong>Address 2:</strong> OFFICE NO. 311, 3-6-365, BASHEER BAGH, HIMAYATNAGAR, HYDERABAD - 500029 </li>
                </ul>
            </div>

            <!-- Quick Links Column -->
            <div class="footer-column">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#portfolio">Blong</a></li>
                    <li><a href="#portfolio">Career</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Services</h3>
                <ul>
                    <li><a href="#about">SAP Consulting</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#portfolio">SAP Support</a></li>
                    <li><a href="#portfolio">SAP Upgradation</a></li>
                    <li><a href="#contact">SAP Rollout</a></li>
                    <li><a href="#contact">Website Security Audit</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Products</h3>
                <ul>
                    <li><a href="#services">SAP S4 Hana</a></li>
                    <li><a href="#portfolio">SAP S4 Hana Cloud</a></li>
                    <li><a href="#portfolio">SAP Business ByDesign</a></li>
                    <li><a href="#portfolio">Rise with SAP</a></li>
                    <li><a href="#contact"> Customized ERP</a></li>
                    <li><a href="#contact"> Android Application</a></li>
                    <li><a href="#contact"> Web Application</a></li>
                </ul>
            </div>


            <!-- Social Media Column -->
            <div class="footer-column">
                <h3>Follow Us</h3>
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright Notice -->
        <div class="footer-bottom">
            <p>&copy; 2024 Indigi Consulting. All rights reserved.</p>
        </div>
    </div>
</footer>


