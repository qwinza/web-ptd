<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlockchainController extends Controller
{
    public function show($slug)
    {
        $topics = [
            'alasan-blockchain-penting' => [
                'title' => 'Alasan Blockchain Penting',
                'subtitle' => 'Mengapa blockchain menjadi solusi dalam sistem pencatatan digital modern?',
                'image' => asset('images/alasan-blockchain.jpg'),
                'content' => "Dalam pencatatan transaksi keuangan, ada beberapa masalah yang disebabkan oleh teknologi basis data tradisional. Salah satu contohnya adalah penjualan properti. Properti ditransfer ke pembeli setelah pembayaran selesai. Baik penjual maupun pembeli memiliki kemampuan untuk mencatat transaksi moneter secara pribadi, tetapi tidak ada sumber yang dapat diandalkan. Meskipun mereka telah menerima uang, penjual dapat dengan mudah mengklaim bahwa mereka belum menerimanya, dan pembeli juga dapat berargumen bahwa mereka telah membayar uang meskipun mereka belum melakukannya.
            Pihak ketiga yang tepercaya harus mengawasi dan memvalidasi transaksi untuk mencegah masalah hukum. Transaksi menjadi lebih sulit karena otoritas pusat ini. Ada juga titik kelemahan. Kedua belah pihak akan dirugikan jika basis data pusat disusupi.
            Dengan membuat sistem yang terdesentralisasi dan anti-rusak untuk mencatat transaksi, blockchain mengatasi masalah ini. Dalam kasus transaksi properti, blockchain membuat buku besar untuk pembeli dan penjual. Semua transaksi harus disetujui oleh kedua belah pihak dan secara otomatis diperbarui di kedua buku besar secara instan. Seluruh buku besar akan rusak jika suatu peristiwa historis berubah. Berbagai industri telah menggunakan protokol blockchain, seperti pembuatan mata uang digital seperti Bitcoin."
            ],
            'blockchain-dalam-bisnis' => [
                'title' => 'Blockchain dalam Bisnis',
                'subtitle' => 'Temukan bagaimana blockchain mengubah cara kerja dan operasional perusahaan.',
                'image' => asset('images/bisnis-blockchain.jpg'),
                'content' => "Blockchain telah membuka berbagai peluang dalam dunia bisnis modern. Dalam rantai pasokan, misalnya, teknologi ini memungkinkan pelacakan barang secara real-time dari sumber ke konsumen, mengurangi risiko pemalsuan dan meningkatkan efisiensi logistik. Bisnis juga dapat menggunakan smart contract, yaitu kontrak digital yang secara otomatis mengeksekusi perjanjian berdasarkan kondisi yang telah disepakati.\n\nIndustri keuangan juga merasakan dampak besar dari adopsi blockchain. Transaksi lintas negara menjadi lebih cepat dan murah tanpa perlu melalui perantara seperti bank atau lembaga keuangan lainnya. Bahkan, perusahaan dapat mengeluarkan token digital sebagai bentuk kepemilikan atau investasi.\n\nDengan semua manfaat ini, banyak perusahaan mulai mengadopsi teknologi blockchain, baik untuk meningkatkan efisiensi internal maupun untuk memberikan nilai tambah kepada pelanggan. Bisnis yang mampu beradaptasi dengan teknologi ini akan memiliki keunggulan kompetitif yang signifikan."
            ],
            'fitur-teknologi-blockchain' => [
                'title' => 'Fitur Teknologi Blockchain',
                'subtitle' => 'Kenali fitur-fitur kunci yang membuat blockchain unik dan revolusioner.',
                'image' => asset('images/fitur-blockchain.jpg'),
                'content' => "Blockchain memiliki sejumlah fitur unik yang membedakannya dari teknologi lainnya. Pertama adalah desentralisasi, di mana data tidak disimpan di satu lokasi pusat, tetapi tersebar di berbagai node dalam jaringan. Hal ini meningkatkan keandalan sistem dan mengurangi risiko kegagalan tunggal (single point of failure).\n\nFitur kedua adalah transparansi dan imutabilitas. Semua data transaksi terekam dalam bentuk blok yang saling terhubung dan tidak dapat diubah begitu sudah divalidasi. Ini menciptakan catatan sejarah yang permanen dan dapat dipercaya.\n\nSelanjutnya, blockchain mendukung penggunaan smart contract, yang memungkinkan otomatisasi proses bisnis tanpa campur tangan pihak ketiga. Fitur ini sangat cocok untuk perjanjian digital dan aplikasi berbasis kepercayaan.\n\nKombinasi dari semua fitur ini membuat blockchain menjadi teknologi yang sangat kuat dan fleksibel untuk berbagai sektor industri."
            ],
            'komponen-utama' => [
                'title' => 'Komponen Utama Blockchain',
                'subtitle' => 'Pelajari bagian-bagian penting yang menyusun sistem blockchain.',
                'image' => asset('images/komponen-blockchain.jpg'),
                'content' => "Blockchain terdiri dari beberapa komponen utama yang bekerja bersama untuk memastikan integritas, keamanan, dan efisiensi sistem. Komponen pertama adalah blok itu sendiri, yang berisi data transaksi, hash blok sebelumnya, dan timestamp. Rangkaian blok-blok ini menciptakan struktur yang disebut rantai blok (blockchain).\n\nKomponen kedua adalah node, yaitu komputer yang berpartisipasi dalam jaringan blockchain. Node dapat memverifikasi, menyimpan, dan menyebarkan data transaksi. Semakin banyak node, semakin kuat dan terdesentralisasi jaringan tersebut.\n\nKomponen ketiga adalah protokol konsensus, seperti Proof of Work (PoW) atau Proof of Stake (PoS), yang digunakan untuk menyepakati validitas data baru yang masuk ke dalam blockchain. Tanpa protokol ini, tidak mungkin mencapai kesepakatan di antara ribuan node.\n\nSelain itu, terdapat juga komponen kriptografi yang melindungi data dan menjamin keamanan sistem. Semua komponen ini saling melengkapi untuk memastikan bahwa blockchain bekerja sesuai fungsinya."
            ],
            'cara-kerja-blockchain' => [
                'title' => 'Cara Kerja Blockchain',
                'subtitle' => 'Pahami alur dan proses kerja teknologi blockchain secara menyeluruh.',
                'image' => asset('images/cara-kerja-crypto.jpg'),
                'content' => "Blockchain bekerja dengan cara mencatat transaksi dalam bentuk blok data yang saling terhubung secara kronologis. Ketika sebuah transaksi terjadi, data tersebut dikirim ke jaringan dan divalidasi oleh node menggunakan protokol konsensus. Setelah transaksi dianggap sah, data tersebut dimasukkan ke dalam blok baru.\n\nBlok ini kemudian ditambahkan ke rantai blok sebelumnya melalui mekanisme hashing. Setiap blok memiliki hash unik yang juga mencakup hash dari blok sebelumnya, menciptakan hubungan yang erat antar blok. Jika satu blok diubah, maka seluruh hash setelahnya juga akan berubah, sehingga sangat mudah untuk mendeteksi adanya manipulasi.\n\nKarena jaringan blockchain bersifat desentralisasi, tidak ada satu pihak pun yang mengontrol seluruh sistem. Hal ini membuat blockchain tahan terhadap sensor, manipulasi data, dan gangguan eksternal.\n\nDengan sistem kerja seperti ini, blockchain mampu menciptakan catatan digital yang aman, transparan, dan tidak dapat diubah."
            ],
            'tipe-jaringan' => [
                'title' => 'Tipe Jaringan Blockchain',
                'subtitle' => 'Kenali perbedaan antara blockchain publik, privat, dan konsorsium.',
                'image' => asset('images/tipe-blockchain.jpg'),
                'content' => "Secara umum, terdapat tiga tipe utama jaringan blockchain: publik, privat, dan konsorsium. \n\nBlockchain publik seperti Bitcoin dan Ethereum bersifat terbuka dan dapat diakses oleh siapa saja. Siapa pun dapat bergabung sebagai node, melihat transaksi, dan berpartisipasi dalam proses konsensus. Tipe ini ideal untuk sistem yang membutuhkan transparansi penuh dan kepercayaan publik.\n\nSebaliknya, blockchain privat dikontrol oleh satu organisasi. Hanya pihak yang diotorisasi yang dapat mengakses dan memvalidasi transaksi. Ini sangat cocok untuk keperluan internal perusahaan, seperti pelacakan inventaris atau manajemen data pelanggan.\n\nBlockchain konsorsium adalah perpaduan dari keduanya, di mana beberapa organisasi bekerja sama membentuk jaringan yang semi-terbuka. Sistem ini memungkinkan kolaborasi antar perusahaan sambil tetap menjaga kontrol dan keamanan.\n\nPemilihan tipe jaringan tergantung pada tujuan implementasi dan kebutuhan akan keterbukaan atau privasi data."
            ],
        ];

        if (!isset($topics[$slug])) {
            abort(404);
        }

        return view('blockchain.detail', ['topic' => $topics[$slug]]);
    }
}
