@extends('layouts')

@section('content')
    <style>
        /* Main container styling */
        .learn-more-container {
            padding: 4rem 2rem;
            background: linear-gradient(135deg, #f0f8ff, #d9e7ff);
            text-align: center;
            animation: fadeIn 0.8s ease-in-out;
            border-radius: 10px;
        }

        /* Title and content styling */
        .learn-more-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #007BFF;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .learn-more-description {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .product-details {
            background: #fff;
            border: 1px solid #e0e0e0;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 2rem;
            transition: transform 0.3s ease-in-out;
        }

        .product-details:hover {
            transform: translateY(-10px);
        }

        .details-text {
            font-size: 1.2rem;
            color: #666;
        }

        /* Keyframe animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .learn-more-title {
                font-size: 2rem;
            }

            .learn-more-description {
                font-size: 1.1rem;
            }
        }
    </style>

    <div class="learn-more-container">
        <h1 class="learn-more-title">{{ $productDetails['title'] }}</h1>
        <p class="learn-more-description">{{ $productDetails['description'] }}</p>

        <div class="product-details">
            <p class="details-text">{{ $productDetails['details'] }}</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const details = document.querySelector('.product-details');
            details.style.opacity = 1;
        });
    </script>
@endsection
