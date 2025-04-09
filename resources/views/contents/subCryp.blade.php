<div class="crypto-section fade-in">
    <div class="crypto-image floating"></div>
    <div class="crypto-text">
        <h1 class="animated-title">Apa itu <br> Crypto?</h1>
        <p class="animated-text">
            Crypto adalah mata uang virtual yang keamanannya dijamin dengan kriptografi. Kriptografi membuat uang kripto tidak mungkin dipalsukan atau dibelanjakan secara ganda.
            Jadi, meskipun digunakan secara virtual, tidak mungkin ada pemalsuan yang merugikan pemiliknya.
        </p>
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap');

    .crypto-section {
        margin-top: 70px;
        margin-bottom: 70px;
        display: flex;
        flex-direction: row-reverse;
        justify-content: center;
        align-items: center;
        min-height: 80vh;
        text-align: left;
        padding: 20px;
        gap: 40px;
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 1s ease-out, transform 1s ease-out;
        flex-wrap: wrap;
    }

    .crypto-image {
        width: 30%;
        aspect-ratio: 4 / 3;
        background-image: url('{{ asset('images/bg-crypto.png') }}');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        border-radius: 10px;
        animation: floating 3s infinite ease-in-out;
        flex-shrink: 0;
    }

    .crypto-text {
        width: 50%;
        font-family: 'DM Sans', sans-serif;
        color: white;
    }

    .crypto-text h1 {
        font-size: 60px;
        font-weight: 700;
        margin: 0;
    }

    .crypto-text p {
        font-size: 20px;
        font-weight: 400;
    }

    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }

    @keyframes floating {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
        100% { transform: translateY(0px); }
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .crypto-section {
            flex-direction: column;
            text-align: center;
        }

        .crypto-text,
        .crypto-image {
            width: 100%;
        }

        .crypto-text h1 {
            font-size: 40px;
        }

        .crypto-text p {
            font-size: 18px;
        }
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
        }, { threshold: 0.3 });

        document.querySelectorAll(".fade-in").forEach(el => observer.observe(el));
    });
</script>
