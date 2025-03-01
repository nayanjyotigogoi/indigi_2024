@extends('layouts.app')

@section('title', $service['title'] . ' | Indigi')

@section('content')
<style>
    /* Service Detail Section */
    .service-detail-container {
    max-width: 800px;
    margin: 40px auto;
    padding: 20px;
    background: #ffffff;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    text-align: center;
}

.service-detail-container h1 {
    font-size: 28px;
    color: #333;
    margin-bottom: 10px;
}

.service-detail-container img {
    max-width: 150px;
    margin: 20px 0;
    border-radius: 8px;
}

.service-description {
    font-size: 16px;
    color: #555;
    line-height: 1.6;
    margin-bottom: 15px;
    text-align: justify;
}

.service-detail-container p {
    font-size: 16px;
    color: #444;
    margin-bottom: 8px;
}

.service-detail-container strong {
    font-weight: bold;
    color: #222;
}
.service-features {
    margin-top: 20px;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 10px;
    text-align: left;
}

.service-features h2 {
    font-size: 22px;
    color: #333;
    margin-bottom: 10px;
}

.service-features ul {
    list-style: none;
    padding: 0;
}

.service-features li {
    font-size: 16px;
    color: #444;
    margin-bottom: 5px;
    padding-left: 25px;
    position: relative;
}

.service-features li::before {
    content: "✔";
    color: green;
    position: absolute;
    left: 0;
    font-weight: bold;
}


.back-button {
    display: inline-block;
        margin-top: 20px;
        padding: 12px 24px;
        font-size: 18px;
        color: #fff;
        background: #0073e6;
        border-radius: 8px;
        text-decoration: none;
        transition: background 0.3s ease, transform 0.3s ease;
        opacity: 0;
        animation: fadeInUp 0.8s ease-out forwards;
        animation-delay: 0.7s;
}

.back-button:hover {
    background: #0056b3;
}

    </style>
    
    <section class="service-detail-container">

        <h1>{{ $service['title'] }}</h1>
        <img src="{{ asset($service['icon']) }}" alt="{{ $service['title'] }}">
        
        <div class="service-description">
            <p>{{ $service['description'] }}</p>
        </div>

        <p><strong>Expected Duration:</strong> {{ $service['duration'] }}</p>

        <!-- Features Section -->
        <div class="service-features">
            <h2>Key Features</h2>
            <ul>
                @foreach ($service['features'] as $feature)
                    <li> {{ $feature }}</li>
                @endforeach
            </ul>
        </div>

        <a href="{{ route('services.index') }}" class="back-button">← Back to Services</a>
    </section>
@endsection

