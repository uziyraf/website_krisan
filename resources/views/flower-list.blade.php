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
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/flower-list') }}">Flower</a>
            <a href="{{ url('/farmer-list') }}">Farmer</a>
            <a href="#gallery">Gallery</a>
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
      <div class="explore-our-flower">Explore OUR Flower</div>
    </div>
  </div>
  
  <div class="flower-card-grid" id="flower-card-container"></div>

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

    <div class="footer-column center">
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
    <script src="{{ asset('js/script.js') }}"></script>
     <script src="{{ asset('js/data-flower.js') }}"></script>
    <script>
        let cardsHtml = "";
        flowers.forEach((flower, idx) => {
            cardsHtml += `
                <div class="card">
                    <img class="rectangle-2" src="${flower.image}" alt="${flower.title}" />
                    <div class="heading-2-a-summer-to-grow-explore">${flower.title}</div>
                    <div class="bunga-krisan-atau-seruni-adalah-simbol-keanggunan-klasik-dengan-ratusan-kelopak-yang-tersusun-rimbun-dan-sempurna-bunga-ini-memancarkan-pesona-yang-tak-lekang-oleh-waktu">
                        ${flower.description}
                    </div>
                    <div class="button-lihat-detail">
                        <div class="heading-2-a-summer-to-grow-explore2" onclick="showPopup(${idx})">${flower.detail}</div>
                    </div>
                </div>
            `;
        });

        document.getElementById('flower-card-container').innerHTML = cardsHtml;

        
// Pop up logic
function showPopup(idx) {
    const flower = flowers[idx];
    document.getElementById('popup-title').textContent = flower.title;
    document.getElementById('popup-img').src = flower.image;
    document.getElementById('popup-desc').innerHTML = flower.description + "<br><br>" +
      `"Temukan pesona abadi dari bunga Krisan, atau yang juga dikenal sebagai Seruni. Setiap tangkainya dimahkotai oleh ratusan kelopak yang tersusun sempurna, menciptakan tampilan yang mewah dan penuh tekstur. Tersedia dalam spektrum warna yang memesona—dari putih murni yang melambangkan kejujuran, kuning ceria sebagai tanda persahabatan, hingga ungu anggun yang memancarkan kemewahan.<br>Bunga Krisan tidak hanya indah dipandang, tetapi juga sarat akan makna positif seperti kebahagiaan dan kehidupan yang panjang. Jadikan bunga ini sebagai pusat perhatian di meja makan Anda, rangkaian bunga ucapan selamat, atau sebagai hadiah yang menunjukkan ketulusan hati Anda kepada orang yang spesial."`;
    document.getElementById('popup-detail').style.display = 'flex';
}
    document.getElementById('close-popup').onclick = function() {
    document.getElementById('popup-detail').style.display = 'none';
};

</script>
</body>
</html>

