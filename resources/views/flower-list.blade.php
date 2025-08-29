<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bunga</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

</head>
<body>
  <div class="flower-list-page">
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
  <div class="main">
    <div class="background-shadow">
      <div class="link"></div>
      
    </div>
    <div class="section">
    <img class="bunga-krisan-1" src="img/icon.png" />
    <div class="heading-2-a-summer-to-grow-explore">Koleksi Bunga Krisan</div>
    <div class="desa-tutur-kabupaten-pasuruan2">
      Desa Tutur Kabupaten Pasuruan
    </div>
    <div class="link7">
      <div class="explore-our-flower">Jelajahi Koleksi Bunga Kami</div>
    </div>
  </div>
  
  <div class="flower-card-grid" id="flower-card-container">
    @foreach ($flowers as $flower)
        <div class="card">
            <img class="rectangle-2" src="{{ asset('storage/' . $flower->image) }}" alt="{{ $flower->name }}" />
            <div class="heading-2-a-summer-to-grow-explore">{{ $flower->name }}</div>
            <div class="bunga-krisan-atau-seruni-adalah-simbol-keanggunan-klasik-dengan-ratusan-kelopak-yang-tersusun-rimbun-dan-sempurna-bunga-ini-memancarkan-pesona-yang-tak-lekang-oleh-waktu">
                {{ Str::words($flower->description, 15, '...') }}
            </div>
            <div class="button-lihat-detail">
                {{-- Kita ubah onclick untuk mengirim data langsung --}}
                <div class="heading-2-a-summer-to-grow-explore2" 
                     onclick="showPopup('{{ $flower->name }}', '{{ asset('storage/' . $flower->image) }}', '{{ e($flower->description) }}')">
                    Lihat Detail
                </div>
            </div>
        </div>
    @endforeach
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


    <!-- Pop Up Detail (sembunyikan awalnya) -->
    <div class="pop-up" id="popup-detail" style="display:none;">
      <div class="rectangle-4">
        <div class="heading-2-a-summer-to-grow-explore" id="popup-title">Bunga Krisan</div>
        <img class="x-circle" src="img/ic_close.png" id="close-popup" />
        <div class="popup-content-flex">
          <img class="rectangle-5" src="rectangle-50.png" id="popup-img" />
          <div class="temukan-pesona-abadi-dari-bunga-krisan" id="popup-desc"></div>
        </div>
      </div>
    </div>
     
    </div>

    <script>
    // Pop up logic BARU
    function showPopup(name, imageUrl, description) {
        document.getElementById('popup-title').textContent = name;
        document.getElementById('popup-img').src = imageUrl;
        document.getElementById('popup-desc').innerHTML = description + "<br><br>" +
            `"Temukan pesona abadi dari bunga Krisan, atau yang juga dikenal sebagai Seruni. Setiap tangkainya dimahkotai oleh ratusan kelopak yang tersusun sempurna, menciptakan tampilan yang mewah dan penuh tekstur. Tersedia dalam spektrum warna yang memesona—dari putih murni yang melambangkan kejujuran, kuning ceria sebagai tanda persahabatan, hingga ungu anggun yang memancarkan kemewahan.<br>Bunga Krisan tidak hanya indah dipandang, tetapi juga sarat akan makna positif seperti kebahagiaan dan kehidupan yang panjang. Jadikan bunga ini sebagai pusat perhatian di meja makan Anda, rangkaian bunga ucapan selamat, atau sebagai hadiah yang menunjukkan ketulusan hati Anda kepada orang yang spesial."`;
        document.getElementById('popup-detail').style.display = 'flex';
    }

    document.getElementById('close-popup').onclick = function() {
        document.getElementById('popup-detail').style.display = 'none';
    };
    </script>
</body>
</html>

