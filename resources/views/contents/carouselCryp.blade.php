<!-- Bootstrap Carousel -->
<div id="cryptoCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="d-flex justify-content-end mb-3 px-2">
        <a href="{{ route('crypto') }}" class="btn btn-link text-primary btn-lg px-4 shadow-sm"
            style="font-weight: bold; text-decoration: none; display: flex; align-items: center; transition: transform 0.3s ease;"
            onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';">
            Info Selengkapnya
            <i class="bi bi-arrow-right ms-2" style="font-size: 1.25rem;"></i>
        </a>
    </div>
    <div class="carousel-inner px-2">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="row gx-3">
                <div class="col-md-3">
                    <div class="carousel-box p-0">
                        <img src="{{ asset('images/perkembangan-crypto.jpg') }}" class="carousel-img-top" alt="Crypto">
                        <div class="carousel-content px-3 py-2">
                            <h3>Perkembangan Crypto</h3>
                            <p>Pasar cryptocurrency dimulai dengan diperkenalkannya Bitcoin pada tahun 2009 oleh entitas anonim yang dikenal sebagai Satoshi Nakamoto...</p>
                            <a href="#" class="btn btn-outline-light btn-sm mt-2">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-box p-0">
                        <img src="{{ asset('images/karakteristik-crypto.jpg') }}" class="carousel-img-top" alt="Keamanan">
                        <div class="carousel-content px-3 py-2">
                            <h3>Karakteristik Cryptocurrency</h3>
                            <p>Digital, P2P, global, terenkripsi, desentralisasi, dan trustless tanpa perantara.</p>
                            <a href="#" class="btn btn-outline-light btn-sm mt-2">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-box p-0">
                        <img src="{{ asset('images/cara-kerja-crypto.jpg') }}" class="carousel-img-top" alt="Desentralisasi">
                        <div class="carousel-content px-3 py-2">
                            <h3>Cara Kerja Cryptocurrency</h3>
                            <p>Transaksi dikirim, diverifikasi oleh node, dicatat di blockchain, dienkripsi, dan nilainya berfluktuasi sesuai permintaan pasar.</p>
                            <a href="#" class="btn btn-outline-light btn-sm mt-2">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-box p-0">
                        <img src="{{ asset('images/jenis-crypto.jpg') }}" class="carousel-img-top" alt="Investasi">
                        <div class="carousel-content px-3 py-2">
                            <h3>Jenis-jenis Cryptocurrency</h3>
                            <p>Bitcoin (pertama & terpopuler), Altcoin (alternatif Bitcoin), Token (diperoleh lewat ICO), dan Government Crypto (dikeluarkan pemerintah).</p>
                            <a href="#" class="btn btn-outline-light btn-sm mt-2">Baca Selengkapnya</a>
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
        color: white;
        padding: 15px;
        border-radius: 15px;
        text-align: center;
        height: 350px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        margin: 10px;
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
