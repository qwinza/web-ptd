@extends('app')

@section('content')
    <div class="content-section" style="background-image: url('{{ asset('images/background.png') }}');">
        <div class="content-text">
            <h1 class="animated-title">BLOCKCHAIN & CRYPTO</h1>
            <p class="animated-text">
                TEKNOLOGI YANG MENGUBAH CARA KITA <br>
                BERTRANSAKSI, BERINVESTASI, DAN BERBISNIS.
            </p>
        </div>
    </div>

    @include('contents.subBlock')

    <!-- Carousel Block dengan margin -->
    <div class="carousel-section">
        @include('contents.carouselBlock')
    </div>

    @include('contents.subCryp')

    <!-- Carousel Cryp dengan margin -->
    <div class="carousel-section">
        @include('contents.carouselCryp')
    </div>
@endsection

<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap');

    /* Padding untuk content section */
    .content-section {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 70vh;
        background-size: 50%;
        background-position: center;
        background-repeat: no-repeat;
        text-align: center;
        position: relative;
        padding: 40px; /* Menambahkan padding untuk seluruh section */
    }

    /* Padding untuk teks konten */
    .content-text {
        font-family: 'DM Sans', sans-serif;
        padding: 40px; /* Menambahkan padding di sekitar teks */
        border-radius: 10px;
        color: black;
        position: absolute;
        z-index: 1;
    }

    .content-text h1 {
        font-size: 90px;
        color: white;
        font-weight: 700;
        margin: 0;
        opacity: 0;
        transform: translateY(-30px);
        animation: fadeInSlide 1.5s ease-out forwards;
    }

    .content-text p {
        font-size: 28px;
        font-weight: 400;
        color: rgba(255, 255, 255, 0.9);
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInSlide 1.5s ease-out 0.5s forwards;
    }

    /* Margin untuk carousel section */
    .carousel-section {
        margin: 30px 0; /* Menambahkan margin atas dan bawah */
        padding: 20px; /* Memberikan sedikit ruang di dalam carousel */
    }

    @keyframes fadeInSlide {
        0% {
            opacity: 0;
            transform: translateY(-30px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
