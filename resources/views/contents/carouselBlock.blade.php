<!-- Bootstrap Carousel -->
<div id="blockchainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('blockchain') }}" class="btn btn-link btn-lg px-4"
            style="
        font-weight: bold;
        text-decoration: none;
        display: flex;
        align-items: center;
        color: #d1d5db;
        background-color: #2b2e33;
        border-radius: 20px;
        box-shadow: 0 4px 15px rgba(36, 30, 30, 0.6);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    "
            onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 6px 20px rgba(209, 213, 219, 0.4)';"
            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 15px rgba(0, 0, 0, 0.6)';">
            Selengkapnya
            <i class="bi bi-arrow-right ms-2" style="font-size: 1.25rem;"></i>
        </a>


    </div>
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="row">
                <div class="col-md-3">
                    <div class="carousel-box p-0">
                        <img src="{{ asset('images/alasan-blockchain.jpg') }}" class="carousel-img-top"
                            alt="Blockchain">
                        <div class="carousel-content px-3 py-2">
                            <h3>Alasan Blockchain Penting</h3>
                            <p>Sistem tradisional rentan manipulasi. Blockchain hadir sebagai solusi aman & transparan.
                            </p>
                            @auth
                                <!-- Jika user sudah login -->
                                <a href="{{ url('/blockchain/alasan-blockchain-penting') }}"
                                    class="btn btn-outline-light btn-sm mt-2">
                                    Baca Selengkapnya
                                </a>
                            @else
                                <!-- Jika user belum login -->
                                <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm mt-2"
                                    onclick="return confirm('Silakan login terlebih dahulu untuk membaca selengkapnya.')">
                                    Baca Selengkapnya
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-box p-0">
                        <img src="{{ asset('images/bisnis-blockchain.jpg') }}" class="carousel-img-top"
                            alt="Cara Kerja">
                        <div class="carousel-content px-3 py-2">
                            <h3>Blockchain di Sektor Bisnis</h3>
                            <p>Energi: Perdagangan energi P2P.<br>
                                Keuangan: Transaksi cepat & efisien.<br>
                                Media: Hak cipta yang adil.<br>
                                Ritel: Rantai pasok transparan.</p>
                            @auth
                                <!-- Jika user sudah login -->
                                <a href="{{ url('/blockchain/blockchain-dalam-bisnis') }}"
                                    class="btn btn-outline-light btn-sm mt-2">
                                    Baca Selengkapnya
                                </a>
                            @else
                                <!-- Jika user belum login -->
                                <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm mt-2"
                                    onclick="return confirm('Silakan login terlebih dahulu untuk membaca selengkapnya.')">
                                    Baca Selengkapnya
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-box p-0">
                        <img src="{{ asset('images/fitur-blockchain.jpg') }}" class="carousel-img-top" alt="Keamanan">
                        <div class="carousel-content px-3 py-2">
                            <h3>Fitur Blockchain</h3>
                            <p>Desentralisasi: Tanpa pihak ketiga.<br>
                                Transparansi: Riwayat transaksi terbuka.<br>
                                Kekekalan: Data tak bisa diubah.</p>
                            @auth
                                <!-- Jika user sudah login -->
                                <a href="{{ url('/blockchain/fitur-teknologi-blockchain') }}"
                                    class="btn btn-outline-light btn-sm mt-2">
                                    Baca Selengkapnya
                                </a>
                            @else
                                <!-- Jika user belum login -->
                                <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm mt-2"
                                    onclick="return confirm('Silakan login terlebih dahulu untuk membaca selengkapnya.')">
                                    Baca Selengkapnya
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-box p-0">
                        <img src="{{ asset('images/komponen-blockchain.jpg') }}" class="carousel-img-top"
                            alt="Masa Depan">
                        <div class="carousel-content px-3 py-2">
                            <h3>Komponen Blockchain</h3>
                            <p>1. Blok<br>
                                2. Rantai<br>
                                3. Node<br>
                                4. Konsensus.</p>
                                @auth
                                <!-- Jika user sudah login -->
                                <a href="{{ url('/blockchain/komponen-utama') }}" class="btn btn-outline-light btn-sm mt-2">
                                    Baca Selengkapnya
                                </a>
                            @else
                                <!-- Jika user belum login -->
                                <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm mt-2"
                                   onclick="return confirm('Silakan login terlebih dahulu untuk membaca selengkapnya.')">
                                    Baca Selengkapnya
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CSS -->
<style>
    .carousel-box {
        background: #1e1e1e;
        /* Warna gelap supaya shadow putih kelihatan */
        color: white;
        padding: 15px;
        border-radius: 15px;
        text-align: center;
        height: 350px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        margin: 10px;

        /* SHADOW PUTIH */
        box-shadow: 0 0 15px rgba(255, 255, 255, 0.5);
        transition: transform 0.2s ease, box-shadow 0.3s ease;
    }

    .carousel-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 25px rgba(255, 255, 255, 0.8);
    }

    .carousel-img-top {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .carousel-content {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .carousel-content h3 {
        font-size: 16px;
        font-weight: bold;
        margin-top: 5px;
    }

    .carousel-content p {
        font-size: 12px;
        margin-top: 5px;
        flex-grow: 1;
    }

    .btn-light {
        background-color: white;
        color: black;
        text-decoration: none;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 12px;
    }

    .btn-link {
        text-decoration: none;
        display: flex;
        align-items: center;
        transition: transform 0.3s ease;
    }

    .btn-link:hover {
        transform: scale(1.1);
    }

    .bi-arrow-right {
        margin-left: 8px;
        font-size: 1.25rem;
    }
</style>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
