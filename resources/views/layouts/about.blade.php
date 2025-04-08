@extends('app')

@section('content')
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #0e0e0e;
            color: #ffffff;
        }

        .content-section {
            padding: 60px 20px;
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            text-align: center;
        }

        .title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .card {
            background-color: #000;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(255, 255, 255, 0.1);
            padding: 20px;
            color: #ffffff;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            object-position: center;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .card p {
            margin: 0;
            font-weight: 500;
        }

        h2 {
            color: #00ffaa;
            margin-bottom: 15px;
        }

        /* Grid anggota */
        .grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .grid .card {
            flex: 0 1 220px;
        }

        /* Card kesimpulan sejajar */
        .summary-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-bottom: 50px;
        }

        .summary-card {
            flex: 1 1 500px;
            max-width: 580px;
        }

    </style>

    <div class="content-section">
        <div class="container">
            <h1 class="title">Kelompok 10</h1>

            {{-- Kesimpulan Blockchain & Crypto --}}
            <div class="summary-grid">
                <div class="card summary-card">
                    <h2>Kesimpulan Blockchain</h2>
                    <p>
                        Blockchain adalah teknologi desentralisasi yang menyimpan data dalam blok yang saling terhubung.
                        Teknologi ini memberikan keamanan, transparansi, dan efisiensi tanpa memerlukan pihak ketiga
                        sebagai perantara.
                    </p>
                </div>

                <div class="card summary-card">
                    <h2>Kesimpulan Cryptocurrency</h2>
                    <p>
                        Cryptocurrency adalah aset digital yang menggunakan teknologi blockchain sebagai sistem dasarnya.
                        Mata uang kripto bersifat cepat, aman, global, dan bebas dari kontrol satu pihak seperti bank
                        sentral.
                    </p>
                </div>
            </div>

            {{-- Anggota Kelompok --}}
            <div class="grid">
                <div class="card">
                    <img src="{{ asset('images/tiar.png') }}" alt="Tiar">
                    <p>Tiar Sawla Fitriansyah</p>
                    <p>15-2024-018</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/bacil.png') }}" alt="Bacil">
                    <p>Bagas Aditia Ravael</p>
                    <p>15-2024-147</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/sastra.png') }}" alt="Sastra">
                    <p>Ludhira Wira Sastra Sonjaya</p>
                    <p>15-2024-011</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/rifqi.png') }}" alt="Rifqi">
                    <p>Rifky Firmansyah</p>
                    <p>15-2024-036</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/faris.png') }}" alt="Faris">
                    <p>Aa Faris Ahmad Shidiq</p>
                    <p>15-2024-038</p>
                </div>
            </div>
        </div>
    </div>
@endsection
