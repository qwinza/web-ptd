<nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container">
        <a class="navbar-brand fw-bolder fst-italic text-uppercase" href="{{ route('welcome') }}">GroupOften</a>

        <!-- Tombol Burger untuk Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Tambahkan class "collapse navbar-collapse" -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blockchain') }}">Blockchain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('crypto') }}">Crypto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
