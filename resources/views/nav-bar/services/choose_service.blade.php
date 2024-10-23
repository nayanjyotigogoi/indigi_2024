@extends('layouts')

@section('content')
<div class="service-details-container">
    <h1>{{ $service->title }}</h1>
    <p>{{ $service->description }}</p>
    
    <div class="additional-details">
        <h3>Additional Information</h3>
        <ul>
            <li>Price: {{ $service->price }}</li>
            <li>Duration: {{ $service->duration }}</li>
            <li>Includes: {{ $service->includes }}</li>
            <!-- You can add other relevant fields here -->
        </ul>
    </div>

    <a href="{{ route('services.index') }}" class="back-button">Go Back to Services</a>
</div>

<!-- Custom styles for the service details page -->
<style>
    .service-details-container {
        max-width: 800px;
        margin: 50px auto;
        padding: 20px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        animation: fadeIn 1s ease-in-out;
    }

    h1 {
        color: #007BFF;
        margin-bottom: 20px;
    }

    p {
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .additional-details {
        background: #f9f9f9;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .additional-details h3 {
        margin-bottom: 10px;
        color: #333;
    }

    .additional-details ul {
        list-style: none;
        padding: 0;
    }

    .additional-details li {
        margin-bottom: 5px;
        font-size: 1rem;
    }

    .back-button {
        display: inline-block;
        padding: 10px 20px;
        background: #007BFF;
        color: white;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .back-button:hover {
        background-color: #0056b3;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<!-- GSAP animation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        gsap.from(".service-details-container", {   
        });
    });
</script>
@endsection
