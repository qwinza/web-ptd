<!-- Bootstrap Carousel -->
<div id="cryptoCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="d-flex justify-content-end mb-3">
        <a href="#" class="btn btn-link text-primary btn-lg px-4 shadow-sm"
            style="font-weight: bold; text-decoration: none; display: flex; align-items: center; transition: transform 0.3s ease;"
            onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';">
            Info Selengkapnya
            <i class="bi bi-arrow-right ms-2" style="font-size: 1.25rem;"></i>
        </a>
    </div>
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="row">
                <div class="col-md-3">
                    <div class="carousel-box">
                        <img src="{{ asset('images/bg-crypto.png') }}" class="carousel-img" alt="Crypto">
                        <h3>Perkembangan Crypto</h3>
                        <p>Pasar cryptocurrency dimulai dengan diperkenalkannya Bitcoin pada tahun 2009 oleh entitas
                            anonim yang dikenal sebagai Satoshi Nakamoto...</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-box">
                        <img src="{{ asset('images/bg-crypto.png') }}" class="carousel-img" alt="Keamanan">
                        <h3>Karakteristik Cryptocurrency</h3>
                        <p>Digital, P2P, global, terenkripsi, desentralisasi, dan trustless tanpa perantara.</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-box">
                        <img src="{{ asset('images/bg-crypto.png') }}" class="carousel-img" alt="Desentralisasi">
                        <h3>Cara Kerja Cryptocurrency</h3>
                        <p>Transaksi dikirim, diverifikasi oleh node, dicatat di blockchain, dienkripsi, dan nilainya
                            berfluktuasi sesuai permintaan pasar.</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-box">
                        <img src="{{ asset('images/bg-crypto.png') }}" class="carousel-img" alt="Investasi">
                        <h3>Jenis-jenis Cryptocurrency</h3>
                        <p>Bitcoin (pertama & terpopuler), Altcoin (alternatif Bitcoin), Token (diperoleh lewat ICO),
                            dan Government Crypto (dikeluarkan pemerintah).</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
