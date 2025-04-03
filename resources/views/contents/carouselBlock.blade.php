<!-- Bootstrap Carousel -->
<div id="blockchainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="d-flex justify-content-end mb-3">
        <a href="#" class="btn btn-link text-primary btn-lg px-4 shadow-sm" style="font-weight: bold; text-decoration: none; display: flex; align-items: center; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';">
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
                        <img src="{{ asset('images/bg-block.png') }}" class="carousel-img" alt="Blockchain">
                        <h3>Alasan Blockchain Penting</h3>
                        <p>Sistem tradisional rentan manipulasi. Blockchain hadir sebagai solusi aman & transparan.</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-box">
                        <img src="{{ asset('images/bg-block.png') }}" class="carousel-img" alt="Cara Kerja">
                        <h3>Blockchain di Sektor Bisnis</h3>
                        <p>Energi: Perdagangan energi P2P.<br>
                           Keuangan: Transaksi cepat & efisien.<br>
                           Media: Hak cipta yang adil.<br>
                           Ritel: Rantai pasok transparan.</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-box">
                        <img src="{{ asset('images/bg-block.png') }}" class="carousel-img" alt="Keamanan">
                        <h3>Fitur Blockchain</h3>
                        <p>Desentralisasi: Tanpa pihak ketiga.<br>
                           Transparansi: Riwayat transaksi terbuka.<br>
                           Kekekalan: Data tak bisa diubah.</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-box">
                        <img src="{{ asset('images/bg-block.png') }}" class="carousel-img" alt="Masa Depan">
                        <h3>Komponen Blockchain</h3>
                        <p>1. Blok<br>
                           2. Rantai<br>
                           3. Node<br>
                           4. Konsensus.</p>
                        <a href="#" class="btn btn-outline-light btn-sm mt-2">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CSS -->
<style>
    .carousel-box {
        background: #808080;
        color: white;
        padding: 15px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.1);
        height: 350px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .carousel-img {
        width: 100%;
        height: 150px;
        object-fit: contain;
        border-radius: 10px;
    }

    .carousel-box h3 {
        font-size: 16px;
        font-weight: bold;
        margin-top: 5px;
    }

    .carousel-box p {
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

    /* Info Selengkapnya Button */
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
