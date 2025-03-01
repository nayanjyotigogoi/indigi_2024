@extends('layouts.app')

@section('title', $productDetails['title'] . ' | Indigi')

@section('content')

    <section class="product-detail fade-in">
        <div class="product-header">
            <h1>{{ $productDetails['title'] }}</h1>
            <img src="{{ asset($productDetails['image']) }}" alt="{{ $productDetails['title'] }}">
        </div>

        <div class="product-info">
            <h2>Overview</h2>
            <p>{{ $productDetails['overview'] }}</p>

            <h2>Who Can Opt For It?</h2>
            <p>{{ $productDetails['who_can_opt'] }}</p>

            <h2>Key Benefits</h2>
            <ul>
                @foreach($productDetails['key_benefits'] as $benefit)
                    <li>{{ $benefit }}</li>
                @endforeach
            </ul>

            <h2>How It Works</h2>
            <p>{{ $productDetails['how_it_works'] }}</p>

            <a href="{{ route('products.index') }}" class="back-button"> ← Back to Products</a>
        </div>
    </section>

@endsection
