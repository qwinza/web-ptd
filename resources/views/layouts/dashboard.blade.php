<div class="content-section" style="background-image: url('{{ asset('images/background.png') }}');">
    <div class="content-text">
        <h1 class="animated-title">BLOCKCHAIN & CRYPTO</h1>
        <p class="animated-text">
            TEKNOLOGI YANG MENGUBAH CARA KITA <br>
            BERTRANSAKSI, BERINVESTASI, DAN BERBISNIS.
        </p>
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap');

    .content-section {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 70vh;
        background-size: 60%;
        background-position: center;
        background-repeat: no-repeat;
        text-align: center;
        position: relative;
    }

    .content-text {
        font-family: 'DM Sans', sans-serif;
        padding: 30px;
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
