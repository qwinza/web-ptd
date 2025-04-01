<!-- Bootstrap Carousel -->
<div id="blockchainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="row">
                <div class="col-md-3">
                    <div class="carousel-box">
                        <img src="{{ asset('images/bg-block.png') }}" class="carousel-img" alt="Blockchain">
                        <h2>🔗 Apa Itu Blockchain?</h2>
                        <p>Blockchain adalah teknologi yang memungkinkan penyimpanan data secara terdesentralisasi dan
                            aman.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-box">
                        <img src="{{ asset('images/bg-block.png') }}" class="carousel-img" alt="Cara Kerja">
                        <h2>📜 Cara Kerja Blockchain</h2>
                        <p>Setiap transaksi dicatat dalam blok, diverifikasi oleh jaringan, lalu ditambahkan ke rantai
                            blok.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-box">
                        <img src="{{ asset('images/bg-block.png') }}" class="carousel-img" alt="Keamanan">
                        <h2>🔒 Keamanan Blockchain</h2>
                        <p>Data di dalam blockchain tidak bisa diubah, membuatnya lebih aman dibanding database
                            tradisional.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-box">
                        <img src="{{ asset('images/bg-block.png') }}" class="carousel-img" alt="Masa Depan">
                        <h2>🚀 Masa Depan Blockchain</h2>
                        <p>Blockchain berpotensi mengubah berbagai industri, mulai dari keuangan, kesehatan, hingga
                            pemerintahan.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-3">
                    <div class="carousel-box">
                        <img src="{{ asset('images/bg-block.png') }}" class="carousel-img" alt="Smart Contracts">
                        <h2>📜 Smart Contracts</h2>
                        <p>Smart contracts memungkinkan transaksi otomatis tanpa perantara.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-box">
                        <img src="{{ asset('images/bg-block.png') }}" class="carousel-img" alt="Crypto">
                        <h2>💰 Cryptocurrency</h2>
                        <p>Bitcoin, Ethereum, dan berbagai aset digital berjalan di atas teknologi blockchain.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-box">
                        <img src="{{ asset('images/bg-block.png') }}" class="carousel-img" alt="NFT">
                        <h2>🎨 NFT & Blockchain</h2>
                        <p>Teknologi blockchain memungkinkan kepemilikan digital yang unik melalui NFT.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-box">
                        <img src="{{ asset('images/bg-block.png') }}" class="carousel-img" alt="Web3">
                        <h2>🌐 Web3 & Desentralisasi</h2>
                        <p>Blockchain adalah fondasi dari Web3, internet masa depan yang lebih desentralisasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol Navigasi -->
    <button class="carousel-control-prev" type="button" data-bs-target="#blockchainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#blockchainCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
</div>

<!-- CSS -->
<style>
    /* Menghilangkan padding dan margin default */
    body,
    html {
        padding: 0;
        margin: 0;
        background-color: #f0f0f0;
        /* Background abu-abu pada seluruh halaman */
    }

    .carousel {
        width: 100%;
        margin: 0 auto;
        padding: 0;
    }

    .carousel-box {
        background: #808080;
        /* Warna abu-abu */
        color: white;
        padding: 20px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.1);
        height: 400px;
        /* Card height */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }


    .carousel-img {
        width: 100%;
        height: 200px;
        /* Adjust height to maintain aspect ratio */
        object-fit: contain;
        /* Ensures the image fits within the card without distortion */
        border-radius: 10px;
    }

    h2 {
        font-size: 18px;
        font-weight: bold;
        margin-top: 10px;
    }

    p {
        font-size: 14px;
        margin-top: 10px;
    }

    /* Mengatur posisi tombol navigasi */
    .carousel-control-prev,
    .carousel-control-next {
        background-color: transparent;
        border: none;
        padding: 10px;
        border-radius: 50%;
        font-size: 30px;
        /* Ukuran font untuk panah */
        color: white;
    }

    /* Menambahkan tanda panah menggunakan Unicode */
    .carousel-control-prev-icon::before {
        content: '←';
        /* Tanda panah kiri */
        font-size: 30px;
    }

    .carousel-control-next-icon::before {
        font-size: 30px;
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }
</style>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
