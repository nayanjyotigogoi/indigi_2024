<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

@extends('layouts')

@section('content')
    <section id="contact">
        <div class="container">
            <h2 class="fade-in">Get in Touch</h2>
            <p class="fade-in delay-1">We're here to help! Reach out to us with any questions or feedback.</p>

            <!-- Contact Information Section -->
            <div class="contact-info fade-in delay-2">
                <h3>Contact Information</h3>
                <div class="info-container">
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>HOUSE NO-194, 2ND FLOOR, PANJABARI ROAD, GHY-37, ASSAM. LANDMARK- ABOVE SBI OFFICE</p>
                        
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <p>Email: <a href="admin@indigiconsulting.com">admin@indigiconsulting.com</a></p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <p>Phone: <a href="tel:+91- 6001 3961 86">+91 6001 3961 86</a></p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <form id="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf
                <div class="form-group fade-in delay-3">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group fade-in delay-4">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group fade-in delay-5">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="cta-button fade-in delay-6">Send Message</button>
            </form>
        </div>
    </section>

    <style>
        /* Contact Us Page Styles */
        #contact {
            padding: 4rem 2rem;
            background: linear-gradient(135deg, #6A82FB, #FC5C7D);
            color: #fff;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.8s ease forwards;
        }

        h2 {
            margin-bottom: 1.5rem;
            font-size: 2.8rem;
            text-transform: uppercase;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        /* Contact Information Section */
        .contact-info {
            margin: 2rem 0;
            padding: 2rem;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .contact-info:hover {
            transform: scale(1.02);
        }

        .contact-info h3 {
            margin-bottom: 1.5rem;
            font-size: 2.2rem;
            text-transform: uppercase;
            border-bottom: 2px solid #fff;
            padding-bottom: 0.5rem;
        }

        .info-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.5s forwards;
            transition: color 0.3s ease;
        }

        .info-item i {
            font-size: 1.8rem;
            margin-right: 0.5rem;
            color: #ffeb3b; /* Yellow color for icons */
        }

        .info-item a {
            color: #ffeb3b; /* Yellow color for links */
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .info-item a:hover {
            text-decoration: underline;
            color: #fff;
        }

        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.5s forwards;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            transition: box-shadow 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        input:focus, textarea:focus {
            box-shadow: 0 0 5px rgba(255, 235, 59, 0.7); /* Yellow glow effect */
            outline: none;
        }

        .cta-button {
            margin-top: 20px;
            background-color: #ffeb3b;
            color: #333;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1.1rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .cta-button:hover {
            background-color: #ffc107; /* Darker yellow on hover */
            transform: translateY(-2px);
        }

        /* Animation for the elements */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 0.5s ease forwards;
        }

        /* Delayed animations */
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }
        .delay-5 { animation-delay: 0.5s; }
        .delay-6 { animation-delay: 0.6s; }

        /* Responsive Styles */
        @media (max-width: 768px) {
            #contact {
                padding: 2rem 1rem;
            }

            h2 {
                font-size: 2rem;
            }

            .info-container {
                align-items: flex-start; /* Align items to the start on smaller screens */
            }
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const formGroups = document.querySelectorAll('.form-group');
            formGroups.forEach((group, index) => {
                group.style.animationDelay = `${index * 0.1}s`;
                group.style.opacity = 1;
            });

            const infoItems = document.querySelectorAll('.info-item');
            infoItems.forEach((item, index) => {
                item.style.animationDelay = `${index * 0.1}s`;
                item.style.opacity = 1;
            });
        });
    </script>
@endsection
