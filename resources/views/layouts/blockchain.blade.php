@extends('app')

@section('content')
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: #000;
        }

        .landing-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 80px 10%;
            background-color: #000;
            color: #fff;
            flex-wrap: wrap;
            box-shadow: 0 10px 20px rgba(255, 255, 255, 0.1);
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .landing-image {
            flex: 1;
            max-width: 500px;
            padding-right: 40px;
        }

        .landing-image img {
            width: 80%;
            display: block;
            margin: 0 auto;
            border-radius: 20px;
            animation: float 4s ease-in-out infinite, fadeIn 1.5s ease-out;
        }

        .landing-text {
            flex: 1;
            max-width: 600px;
        }

        .landing-text h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .landing-text p {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #ddd;
        }

        .wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px;
            position: relative;
        }

        .vertical-line {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 3px;
            background-color: white;
            left: 50%;
            transform: translateX(-50%);
            z-index: 0;
        }

        .topic-row {
            display: flex;
            align-items: center;
            margin: 60px 0;
            position: relative;
            justify-content: space-between;
        }

        .circle-number {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 40px;
            height: 40px;
            background-color: black;
            border: 3px solid white;
            border-radius: 50%;
            color: white;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
        }

        .card-title,
        .card-content {
            width: 48%;
            height: auto;
            border-radius: 15px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.3);
            transition: transform 0.3s ease;
        }

        .card-title:hover,
        .card-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 25px rgba(255, 255, 255, 0.6);
        }

        .card-title {
            background: #1e1e1e;
            color: white;
            display: flex;
            justify-content: flex-end;
            align-items: flex-end;
            height: 240px;
        }

        .card-title img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        .card-title h2 {
            position: relative;
            z-index: 1;
            padding: 20px;
            background: rgba(0, 0, 0, 0.5);
            width: 100%;
            margin: 0;
            text-align: center;
            font-size: 1.1rem;
        }

        .card-content {
            background: #1e1e1e;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: left;
            min-height: 240px;
            position: relative;
        }


        .card-content p {
            margin: 0 0 50px;
            white-space: pre-line;
            line-height: 1.6;
            font-size: 1rem;

        }

        .card-content button {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background-color: transparent;
            color: #fff;
            border: 2px solid #fff;
            padding: 8px 14px;
            font-size: 0.9rem;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }


        .card-content button:hover {
            background-color: #fff;
            color: #000;
        }

        .hidden-on-load {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .reveal {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .landing-section {
                flex-direction: column;
                text-align: center;
                padding: 40px 20px;
            }

            .landing-image,
            .landing-text {
                max-width: 100%;
                padding: 0;
            }

            .wrapper {
                padding: 30px 10px;
            }

            .vertical-line,
            .circle-number {
                display: none;
            }

            .topic-row {
                flex-direction: column;
                align-items: stretch;
            }

            .card-title,
            .card-content {
                width: 100%;
                height: auto;
                margin: 10px 0;
            }

            .card-title {
                height: 200px;
            }
        }
    </style>

    {{-- Landing Section --}}
    <div class="landing-section">
        <div class="landing-image">
            <img src="{{ asset('images/bg-block.png') }}" alt="Landing Image">
        </div>
        <div class="landing-text">
            <h1>Selamat Datang di Dunia Blockchain</h1>
            <p>Teknologi blockchain membuka era baru dalam keamanan dan transparansi digital. Dari keuangan hingga media,
                blockchain merevolusi cara kita bertransaksi dan berbagi informasi. Mari jelajahi bersama potensi luar biasa
                yang ditawarkan oleh teknologi ini.</p>
        </div>
    </div>

    {{-- Timeline Section --}}
    <div class="wrapper">
        <div class="vertical-line"></div>

        @php
            $topics = [
                [
                    'img' => 'alasan-blockchain.jpg',
                    'title' => 'Alasan Blockchain Penting',
                    'content' => <<<TEXT
                    Dalam pencatatan transaksi keuangan, ada beberapa masalah yang disebabkan oleh teknologi basis data tradisional. Salah satu contohnya adalah penjualan properti. Properti ditransfer ke pembeli setelah pembayaran selesai. Penjual maupun pembeli bisa mencatat transaksi secara pribadi, namun tidak ada sumber yang benar-benar dapat diandalkan.
                    TEXT
                ,
                ],
                [
                    'img' => 'bisnis-blockchain.jpg',
                    'title' => 'Blockchain dalam Bisnis',
                    'content' => <<<TEXT
                    1. Energi: Perusahaan membuat platform perdagangan energi peer-to-peer. Panel surya dapat menjual energi ke tetangga secara otomatis melalui pengukur pintar. Blockchain juga digunakan dalam proyek crowdfunding energi.
                    2. Keuangan: Singapore Exchange Limited menggunakan blockchain untuk mengatur pembayaran dan perdagangan pasar, mengurangi pemrosesan manual.
                    TEXT
                ,
                ],
                [
                    'img' => 'fitur-blockchain.jpg',
                    'title' => 'Fitur Teknologi Blockchain',
                    'content' => <<<TEXT
                    1. Desentralisasi: Tidak ada entitas pusat. Pengguna dapat bertransaksi langsung tanpa pihak ketiga.
                    2. Transparansi: Transaksi bisa dilacak melalui alamat publik yang anonim. Data terbuka dan tidak bisa diakses tanpa izin pengguna.
                    3. Kekekalan: Data di blockchain tidak bisa diubah atau dihapus setelah tercatat.
                    TEXT
                ,
                ],
                [
                    'img' => 'komponen-blockchain.jpg',
                    'title' => 'Komponen Utama',
                    'content' => <<<TEXT
                    1. Blok: Berisi hash, data transaksi, dan hash blok sebelumnya.
                    2. Node: Komputer yang memverifikasi transaksi dalam jaringan.
                    3. Rantai: Menghubungkan blok secara kronologis.
                    4. Protokol Konsensus: Menentukan validitas transaksi.
                    TEXT
                ,
                ],
                [
                    'img' => 'cara-kerja-crypto.jpg',
                    'title' => 'Cara Kerja Blockchain',
                    'content' => <<<TEXT
                    Transaksi dikirim ke jaringan, diverifikasi oleh node dengan algoritma konsensus, lalu disimpan dalam blok baru. Blok ini ditambahkan ke rantai sebelumnya. Proses ini menjaga keamanan dan keabadian data.
                    TEXT
                ,
                ],
                [
                    'img' => 'tipe-blockchain.jpg',
                    'title' => 'Tipe Jaringan',
                    'content' => <<<TEXT
                    - Publik: Terbuka untuk siapa saja.
                    - Privat: Dikelola oleh entitas tertentu, akses terbatas.
                    - Konsorsium: Gabungan publik dan privat oleh beberapa organisasi.
                    - Hybrid: Kombinasi elemen publik dan privat.
                    TEXT
                ,
                ],
            ];
        @endphp

        @foreach ($topics as $index => $topic)
            <div class="topic-row hidden-on-load">
                <div class="card-title">
                    <img src="{{ asset('images/' . $topic['img']) }}" alt="Image {{ $index + 1 }}">
                    <h2>{{ $topic['title'] }}</h2>
                </div>
                <div class="circle-number">{{ $index + 1 }}</div>
                <div class="card-content">
                    <p>{{ $topic['content'] }}</p>
                    <a href="{{ route('blockchain.detail', ['slug' => Str::slug($topic['title'])]) }}">
    <button>Baca Selengkapnya</button>
</a>

                </div>
            </div> @endforeach
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const hiddenElements = document.querySelectorAll(".hidden-on-load");

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("reveal");
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            hiddenElements.forEach(el => observer.observe(el));
        });
    </script>
@endsection
