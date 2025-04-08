<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CryptoController extends Controller
{
    public function show($slug)
    {
        // Mapping slug ke data topik
        $topics = [
            'perkembangan-cryptocurrency-dari-masa-ke-masa' => [
                'title' => 'Perkembangan Cryptocurrency dari Masa ke Masa',
                'subtitle' => 'Jejak evolusi mata uang digital dari awal hingga sekarang',
                'image' => asset('images/perkembangan-crypto.jpg'),
                'content' => 'Cryptocurrency pertama kali diperkenalkan ke dunia melalui Bitcoin pada tahun 2009 oleh individu atau kelompok dengan nama samaran Satoshi Nakamoto. Bitcoin memperkenalkan konsep baru: uang digital yang tidak dikendalikan oleh pemerintah atau lembaga keuangan mana pun. Pada awalnya, banyak yang meragukan kelayakan dan masa depan dari Bitcoin, tetapi seiring waktu teknologi blockchain yang mendasarinya mulai mendapat pengakuan.

                Pada dekade berikutnya, muncul banyak mata uang kripto baru seperti Ethereum, Litecoin, dan Ripple. Ethereum memperkenalkan smart contract yang membuka potensi baru di luar sekadar transaksi mata uang. Tahun-tahun berikutnya ditandai dengan adopsi yang meningkat, baik dari investor individu maupun institusi besar. Tahun 2021 menjadi puncak ledakan harga Bitcoin dan banyak altcoin, didorong oleh minat publik, inovasi teknologi, dan penerimaan dari beberapa perusahaan besar.

                Saat ini, cryptocurrency telah menjadi bagian dari diskusi utama tentang masa depan keuangan global, dengan berbagai negara mulai menyusun regulasi untuk mengatur penggunaannya.'
            ],
            'karakteristik-crypto' => [
                'title' => 'Karakteristik Crypto',
                'subtitle' => 'Mengenal sifat-sifat unik yang membedakan cryptocurrency dari uang konvensional',
                'image' => asset('images/karakteristik-crypto.jpg'),
                'content' => 'Cryptocurrency memiliki sejumlah karakteristik unik yang membedakannya dari mata uang tradisional. Pertama, sifat desentralisasi, yang berarti tidak ada otoritas pusat yang mengendalikan jaringan. Setiap transaksi dicatat dalam buku besar digital terdistribusi (blockchain) yang transparan dan tidak dapat diubah.

                Kedua, cryptocurrency bersifat pseudonim—identitas pengguna tidak langsung terkait dengan akun mereka, melainkan hanya ditandai oleh alamat dompet digital. Ketiga, keamanan menjadi pilar utama: transaksi dilindungi oleh kriptografi canggih dan validasi oleh jaringan.

                Karakteristik lain termasuk kecepatan transaksi lintas negara, biaya rendah, keterbatasan pasokan (seperti halnya Bitcoin yang hanya memiliki maksimal 21 juta koin), dan dapat diprogram seperti pada Ethereum dengan smart contract. Semua ini menjadikan crypto sebagai bentuk aset digital yang sangat berbeda dari uang fiat.'
            ],
            'jenis-jenis-crypto' => [
                'title' => 'Jenis Crypto',
                'subtitle' => 'Ragam cryptocurrency yang beredar dan perbedaan di antara mereka',
                'image' => asset('images/jenis-crypto.jpg'),
                'content' => 'Cryptocurrency terbagi dalam berbagai jenis berdasarkan fungsinya. Yang pertama adalah *cryptocurrency utama* seperti Bitcoin, yang berfungsi sebagai alat tukar dan penyimpan nilai. Selanjutnya ada *platform coin* seperti Ethereum, yang memungkinkan pengembangan aplikasi terdesentralisasi (dApps) dan smart contract.

                Ada pula *stablecoin*, seperti USDT dan USDC, yang nilainya dipatok terhadap mata uang fiat seperti dolar AS. Stablecoin dirancang untuk mengurangi volatilitas harga yang sering terlihat pada crypto lainnya. *Token utilitas* digunakan dalam ekosistem proyek tertentu untuk mengakses layanan—contohnya BNB (Binance Coin) atau UNI (Uniswap).

                Selain itu, ada *token keamanan* yang mewakili kepemilikan aset riil seperti saham atau properti, dan *meme coin* seperti Dogecoin dan Shiba Inu yang dimulai dari lelucon tapi memiliki komunitas besar. Tiap jenis memiliki peran unik dalam ekosistem kripto secara keseluruhan.'
            ],
            'cara-kerja-crypto' => [
                'title' => 'Cara Kerja Crypto',
                'subtitle' => 'Penjelasan teknis di balik transaksi dan validasi dalam dunia crypto',
                'image' => asset('images/cara-kerja-crypto.jpg'),
                'content' => 'Cryptocurrency bekerja melalui jaringan terdesentralisasi yang disebut blockchain, yaitu buku besar digital yang mencatat semua transaksi secara permanen. Saat seseorang mengirim crypto ke orang lain, transaksi itu akan diverifikasi oleh jaringan komputer (node) menggunakan algoritma konsensus seperti Proof of Work (PoW) atau Proof of Stake (PoS).

                Dalam PoW, komputer bersaing memecahkan teka-teki matematika kompleks untuk memvalidasi transaksi. Proses ini disebut mining, dan pemenangnya mendapat imbalan berupa crypto baru. Dalam PoS, validasi dilakukan oleh pengguna yang "mengunci" sejumlah koin mereka sebagai jaminan.

                Setelah transaksi tervalidasi, informasi tersebut dimasukkan ke dalam blok baru yang ditambahkan ke rantai blok sebelumnya, menciptakan sistem yang aman, transparan, dan tidak dapat diubah. Teknologi ini memungkinkan crypto beroperasi tanpa perantara seperti bank.'
            ],
            'kelebihan-dan-kekurangan-crypto' => [
                'title' => 'Kelebihan dan Kekurangan Crypto',
                'subtitle' => 'Membandingkan sisi positif dan tantangan dari penggunaan cryptocurrency',
                'image' => asset('images/plusmin-crypto.jpg'),
                'content' => 'Cryptocurrency memiliki sejumlah kelebihan. Pertama, transaksi cepat dan global—tidak ada batas geografis atau jam operasional. Kedua, biaya transaksi bisa sangat rendah dibanding sistem keuangan tradisional. Ketiga, desentralisasi membuat sistem lebih tahan sensor dan tidak bergantung pada lembaga tunggal.

                Namun, crypto juga memiliki kekurangan. Volatilitas harga yang ekstrem bisa menjadi penghalang adopsi luas. Regulasi yang belum jelas di banyak negara menimbulkan ketidakpastian hukum. Selain itu, risiko keamanan seperti peretasan dompet digital dan penipuan masih tinggi.

                Isu lain termasuk konsumsi energi tinggi pada sistem berbasis PoW, serta kurangnya pemahaman masyarakat umum tentang cara kerja teknologi ini. Oleh karena itu, penting bagi pengguna dan investor untuk melakukan riset menyeluruh sebelum terlibat di dalamnya.'
            ],
        ];


        if (!isset($topics[$slug])) {
            abort(404);
        }

        return view('crypto.detail', ['topic' => $topics[$slug]]);
    }
}
