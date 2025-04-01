<div class="blockchain-section fade-in">
    <div class="blockchain-image floating"></div>
    <div class="blockchain-text">
        <h1 class="animated-title">Apa itu <br> Blockchain?</h1>
        <p class="animated-text">
            Sederhananya, Blockchain itu seperti rantai yang terdiri dari blok-blok data, di mana setiap blok saling terhubung satu sama lain.
            Teknologi ini bikin sistem database jadi terdistribusi dan terdesentralisasi, 
            sehingga transaksi atau informasi bisa dicatat dan diverifikasi dengan lebih aman, transparan, dan terpercaya.
        </p>
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap');

    .blockchain-section {
        margin-top: 70px;
        margin-bottom: 70px;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 80vh;
        text-align: left;
        padding: 20px;
        gap: 40px;
        opacity: 0;  /* Awalnya disembunyikan */
        transform: translateY(50px);
        transition: opacity 1s ease-out, transform 1s ease-out;
    }

    .blockchain-image {
        width: 30%;
        aspect-ratio: 4 / 3;
        background-image: url('{{ asset('images/bg-block.png') }}');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        border-radius: 10px;
        animation: floating 3s infinite ease-in-out;
    }

    .blockchain-text {
        width: 50%;
        font-family: 'DM Sans', sans-serif;
        color: white;
    }

    .blockchain-text h1 {
        font-size: 60px;
        font-weight: 700;
        margin: 0;
    }

    .blockchain-text p {
        font-size: 20px;
        font-weight: 400;
    }

    /* Ketika elemen masuk viewport, efek fade-in akan terjadi */
    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Animasi naik-turun */
    @keyframes floating {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
        100% { transform: translateY(0px); }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let observer = new IntersectionObserver(function (entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                }
            });
        }, { threshold: 0.3 }); // Ketika 30% elemen terlihat

        document.querySelectorAll(".fade-in").forEach(el => observer.observe(el));
    });
</script>
