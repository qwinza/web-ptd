@extends('app')

@section('content')
<style>
    .hero-container {
        position: relative;
        width: 100%;
        max-height: 500px;
        overflow: hidden;
        margin-bottom: 40px;
    }

    .hero-container img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
        filter: brightness(70%);
    }

    .hero-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        text-align: center;
        padding: 0 20px;
    }

    .hero-text h1 {
        font-size: 3rem;
        font-weight: bold;
        margin: 0;
    }

    .hero-text h2 {
        font-size: 1.5rem;
        font-weight: 400;
        margin-top: 10px;
    }

    .scroll-down {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        color: white;
        font-size: 1rem;
        text-align: center;
        animation: bounce 2s infinite;
    }

    @keyframes bounce {
        0%, 100% {
            transform: translateX(-50%) translateY(0);
        }
        50% {
            transform: translateX(-50%) translateY(10px);
        }
    }

    .content-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px;
        color: white;
    }

    .content-container p {
        font-size: 18px;
        line-height: 1.7;
        white-space: pre-line;
        text-align: justify;
    }
</style>

<!-- Hero Section (Gambar + Judul Menimpa) -->
<div class="hero-container">
    <img src="{{ $topic['image'] }}" alt="Hero Image">
    <div class="hero-text">
        <h1>{{ $topic['title'] }}</h1>
        <h2>{{ $topic['subtitle'] }}</h2>
    </div>
    <div class="scroll-down">
        ↓ Scroll Down
    </div>
</div>

<!-- Konten -->
<div class="content-container">
    <p>{{ $topic['content'] }}</p>
</div>
@endsection
