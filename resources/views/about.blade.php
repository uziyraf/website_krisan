<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link href="https://fonts.googleapis.com/css2?family=Swanky+and+Moo+Moo&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- Navbar -->
     <header class="navbar">
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/flower-list') }}">Flower</a>
            <a href="{{ url('/farmer-list') }}">Farmer</a>
            <a href="#gallery">Gallery</a>
        </nav>
    </header>
    <section id="about" class="about">
        <h1>
            Cerita di Balik Setiap Tangkai
        </h1>
        <p>Desa Tutur - Mengenal lebih dekat kehidupan, warisan, dan harapan dari Kampung Bunga </br>Krisan Kabupaten Pasuruan</p>
        <div class="play-wrapper">
            <span class="play-text">Play Video</span>
            <button class="play-button" onclick="scrollToProduk()">
                <span class="play-icon">&#9658;</span>
            </button>
        </div>
    </section>

    <section class="about-extra">
        <div class="about-extra-container">
            <div class="about-extra-image">
                <img src="img/Rectangle 9.png" alt="Foto Desa">
            </div>
            <div class="about-extra-text">
                <h2>Misi Kami</h2>
                <p>
                    Website ini lahir dari sebuah mimpi sederhana:
                    mendekatkan Anda dengan keindahan bunga segar langsung dari sumbernya. Kami percaya bahwa setiap orang berhak menikmati bunga dalam kondisi terbaiknya, sambil turut serta menyejahterakan para petani lokal yang telah mendedikasikan hidup mereka untuk merawat alam.</br>
                    Dengan memotong jalur distribusi yang panjang, kami memastikan setiap tangkai yang Anda terima adalah yang paling segar, dan setiap rupiah yang Anda belanjakan menjadi dukungan langsung bagi denyut nadi kehidupan di Kampung Bunga Krisan.
                </p>
            </div>
        </div>
    </section>

    <!-- Tambahan teks di bawah, masih di halaman yang sama -->
    <div class="about-extra-bottom-text">
        <h3>Asal Mula Kampung Bunga Krisan</h3>
        <p> Karena setiap tangkai adalah wujud dari kualitas dan kepedulian. Dibudidayakan di dataran tinggi Tutur yang sejuk dan dirawat dengan teknologi presisi di dalam greenhouse modern, setiap bunga kami tumbuh dalam kondisi optimal. Hasilnya adalah mahakarya alam yang sempurna: krisan dengan warna yang jauh lebih hidup, batang yang kokoh, serta kesegaran yang terbukti tahan lebih lama.
            Jauh di dataran tinggi yang sejuk, tersembunyi sebuah desa di mana waktu seakan berjalan lebih lambat. Di sinilah, puluhan tahun lalu, para tetua kami menanam benih krisan pertama. Mereka menemukan bahwa tanah dan iklim di sini adalah anugerah yang sempurna untuk membudidayakan bunga simbol sukacita ini.
        </p>
    </div>
    <div class="about-extra-image-text">
        <img src="img/Rectangle 10.png" alt="Bunga Krisan">
        <p>
            Tradisi itu diwariskan, dari ayah ke anak, dari ibu ke putri. Kebun-kebun kecil di halaman rumah perlahan berubah menjadi hamparan ladang penuh warna.
            </br>
            Semangat gotong royong menjadi pupuk utama yang menyuburkan tidak hanya bunga, tetapi juga ikatan komunitas kami.
        </p>
    </div>
    <div class="line-text-about">
        <div class="line-about"></div>
        <p>"Bagi kami bunga bukan hanya produk. ini</br> adalah napas, harapan, dan warisan yang</br> kami jaga dengan sepenuh hati."</p>
    </div>
    <div class="about-image">
        <img src="img/Section (1).png">
    </div>
    <div class="bunga-about">
        <img src="img/icon.png" class="icon-about">
        <h1>Temui Para Penjaga Keindahan</h1>
        <p>
            DI BALIK SETIAP BUNGA YANG MEKAR SEMPURNA, ADA</br>
            TANGAN-TANGAN TERAMPIL DAN HATI YANG TULUS. MEREKA</br> ADALAH PAHLAWAN KAMI.
        </p>
    </div>

      
  <footer class="footer">
        <div class="footer-top">
            <div class="footer-column">
            <ul>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Bunga</a></li>
                <li><a href="#">Marketplace</a></li>
                <li><a href="#">Galeri</a></li>
                <li><a href="#">Bergabung dengan Kami</a></li>
            </ul>

            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            </div>

            <div class="footer-divider"></div>

            <div class="footer-column">
            <h2>Terima Kasih</h2>
            <p><em>Krisan Tutur: Mekar Lebih Lama, Indah Sepanjang Masa</em></p>
            </div>

            <div class="footer-divider"></div>

            <div class="footer-column right">
            <h4>Kirim Pesan kepada Kami →</h4>
            <p>(845) 356–1234</p>
            <p>Desa Tutur<br>Kabupaten Pasuruan</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 KampungBungaKrisan. Seluruh Hak Cipta Dilindungi.</p>
            <a href="#">Kebijakan Privasi</a>
        </div>
    </footer>
</body>

</html>