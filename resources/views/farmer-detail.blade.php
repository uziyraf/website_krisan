<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>farmer detail</title>

     <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
     <header class="navbar">
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="#about">About</a>
            <a href="{{ url('/flower-list') }}">Flower</a>
            <a href="{{ url('/farmer-list') }}">Marketplace</a>
            <a href="#gallery">Gallery</a>
        </nav>
    </header>

    <section id="home" class="hero">
     <div class="profile-image">
        <div class="ellipse-wrapper">
        <div class="ellipse-1"></div>
        <img class="ellipse-2" src="img/biliy.jpg" alt="Foto profil">
        </div>
        <div class="name-farmer">Uzi</div>
        <div class="group-2">
        <img class="location-on" src="location-on0.svg" alt="icon lokasi">
        <div class="link-address">Tutur - Pasuruan</div>
        </div>
    </div>
    </section>

    <section class="story-line">
     <img class="bunga-krisan-1" src="img/icon.png" />
        <div class="heading-2-a-summer-to-grow-explore">Cerita Kami</div>
        <div class="desc-story">
          Sejak tahun 1995, saya, Budi Santoso, telah mendedikasikan hidup untuk merawat
          keindahan bunga di tanah subur Lembang. Bagi saya, bertani bukan hanya
          pekerjaan, tetapi sebuah seni merawat kehidupan. Setiap bunga mawar dan
          anggrek yang tumbuh di kebun ini adalah hasil dari kesabaran, cinta, dan
          metode perawatan organik yang saya warisi dari keluarga.
        </div>
    </section>

     <section class="section-3" id="flower-section-3">
        <h2 class="heading-1-a-summer-to-grow-explore">Bunga Tersedia dikebun kami</h2>
         <div class="carousel-container">
            <div class="carousel-track" id="carousel-track">
            <!-- Cards will be inserted here -->
            <div class="flower-card-grid"></div>
            </div>
        </div>
     </section>

     <section class="section-whatsapp">
        <div class="rectangle-1">
        <div class="heading-2-a-summer-to-grow-explore">
            Pesan Langsung dari Petani
        </div>
        <div
            class="desc-wa">
            Klik tombol di bawah untuk terhubung langsung dengan saya via WhatsApp.
            Tanyakan ketersediaan bunga, minta foto bunga terbaru, atau diskusikan
            kebutuhan Anda. Saya siap membantu!
        </div>
        <div class="rectangle-8">
             <div class="rectangle-8" onclick="window.open('https://wa.me/6281357853271', '_blank')">
             <div class="hubungi-via-whats-app">Hubungi Via WhatsApp</div>
             </div>
        </div>
        </div>
    </section>

      
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

     <script src="{{ asset('js/data-flower.js') }}"></script>

<script>
  const container3 = document.querySelector('#flower-section-3 .flower-card-grid');

  let currentIndex = 0;
  const itemsPerPage = 3;

  function renderFlowersSlider() {
    let cardsSection3 = "";

    const sliced = flowers.slice(currentIndex, currentIndex + itemsPerPage);
    sliced.forEach((flower, idx) => {
      cardsSection3 += `
        <div class="card">
          <img class="rectangle-2" src="${flower.image}" alt="${flower.title}" />
          <div class="heading-2-a-summer-to-grow-explore">${flower.title}</div>
          <div class="bunga-krisan-atau-seruni-adalah-simbol-keanggunan-klasik">
            ${flower.description}
          </div>
          <div class="button-lihat-detail">
            <div class="heading-2-a-summer-to-grow-explore2" onclick="showPopup(${currentIndex + idx})">${flower.detail}</div>
          </div>
        </div>
      `;
    });

    container3.innerHTML = cardsSection3;
  }

  renderFlowersSlider();

  setInterval(() => {
    currentIndex += itemsPerPage;
    if (currentIndex >= flowers.length) {
      currentIndex = 0;
    }
    renderFlowersSlider();
  }, 3000);
</script>


</body>
</html>