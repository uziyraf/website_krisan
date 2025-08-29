<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Petani kami</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="farmer-list-page">
    <header class="navbar">
        <a href="{{ url('/') }}" class="navbar-logo">
            <img src="{{ asset('img/logo-kampung-krisan1.png') }}" alt="Logo Kampung Krisan">
        </a>
        <nav>
            <a href="{{ url('/') }}">Beranda</a>
            <a href="{{ url('/about') }}">Tentang</a>
            <a href="{{ url('/flower-list') }}">Bunga</a>
            <a href="{{ url('/farmer-list') }}">Anggota</a>
            <a href="#gallery">Galeri</a>
        </nav>
    </header>
   
    <div class="section">
        <img class="bunga-krisan-1" src="img/icon.png" />
        <div class="heading-2-a-summer-to-grow-explore">Kelompok Petani</div>
        <div class="desa-tutur-kabupaten-pasuruan2">
        Dusun Kadipaten Desa Tutur Kabupaten Pasuruan
        </div>
        <div class="link7">
        <div class="explore-our-flower">Kenali kami</div>
        </div>
    </div>

    @include('_farmer-card-grid', ['farmers' => $farmers])
      
  <footer class="footer">
        <div class="footer-top">
            <div class="footer-column">
            <ul>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Bunga</a></li>
                <li><a href="#">Anggota</a></li>
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
 </div>
</body>
</html>