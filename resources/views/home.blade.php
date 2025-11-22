<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('img/logo-kampung-krisan1.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- Navbar -->
     <header class="navbar">
        <a href="{{ url('/') }}" class="navbar-logo">
            <img src="{{ asset('img/logo-kampung-krisan1.png') }}" alt="Logo Kampung Krisan">
        </a>
        <nav>
            <a href="{{ url('/') }}">Beranda</a>
            <a href="{{ url('/about') }}">Tentang</a>
            <a href="{{ url('/flower-list') }}">Bunga</a>
            <a href="{{ url('/farmer-list') }}">Anggota</a>
        </nav>
    </header>


    <!-- Hero -->
    <section id="home" class="hero">
        <div class="hero-content-left">
        <p class="sub-heading">Kampung</p>
        <p class="sub-heading"> Bunga Krisan</p>
        <p class="tagline">Desa Tutur - Kabupaten Pasuruan</p>
    </div>
        <video playsinline autoplay muted loop class="hero-video">
        <source src="{{ asset('videos/BG VIDEO WEB.mp4') }}" type="video/mp4">
        Browser Anda tidak mendukung tag video.
        </video>
    </section>

    <section class="hero-caption">
        <img src="img/icon.png" alt="Bunga Krisan" class="flower-icon">
        <h2>Kampung Bunga Krisan</h2>
        <p>Desa Tutur Kabupaten Pasuruan</p>
        <button class="explore-btn" onclick="scrollToFlower()">
            <a href="{{ url('/flower-list') }}" style="text-decoration: none; color: white;" >Jelajahi Koleksi Bunga Kami</a>
        </button>
    </section>

    <section class="hero-denah">
        <div class="hero-container">
            <h1>Kebun Krisan, Permata dari Kadipaten</h1>
            <h2>Kampung Bunga Krisan</h2>
            <p>
                Selamat datang di surga bunga tersembunyi di Dusun Kadipaten, Desa Tutur, Pasuruan. Berada di ketinggian dengan udara pegunungan yang sejuk, perkebunan kami adalah rumah bagi hamparan ribuan bunga krisan yang mekar dalam palet warna yang memukau. Kami bukan hanya sebuah perkebunan, melainkan destinasi agrowisata di mana Anda bisa merasakan pengalaman otentik memetik bunga segar langsung dari tangkainya. Setiap sudut kebun kami menawarkan pemandangan indah yang sempurna untuk mengabadikan momen berharga. Datang dan temukan harmoni alam, nikmati ketenangan, dan bawa pulang keindahan krisan dari Tutur.
            </p>
            <button class="learn-btn" onclick="scrollToFlower()">
                 <a href="{{ url('/about') }}" style="text-decoration: none; color: white;">Tentang Kebun Krisan Kami</a>
        </button>
            </button>
        </div>
    </section>

    <section class="hero-bunga">
        <div class="image-grid">
            <img src="img/Group 3.png" alt="Bunga 1" class="img-1" />
        </div>
        <div class="hero-container2">
            <h2>Kenapa Harus Pilih Bunga Kami?</h2>
            <p>
                Karena setiap tangkai adalah wujud dari kualitas dan kepedulian. Dibudidayakan di dataran tinggi Tutur yang sejuk dan dirawat dengan teknologi presisi di dalam greenhouse modern, setiap bunga kami tumbuh dalam kondisi optimal. Hasilnya adalah mahakarya alam yang sempurna: krisan dengan warna yang jauh lebih hidup, batang yang kokoh, serta kesegaran yang terbukti tahan lebih lama. Kami memetiknya khusus untuk Anda, memastikan kualitas premium dari kebun langsung ke tangan Anda. Dengan memilih kami, Anda tidak hanya mendapatkan bunga terindah untuk setiap momen, tetapi juga turut memberdayakan
            </p>
            <button class="learn-btn2" onclick="scrollToFlower()">
                <a href="{{ url('/flower-list') }}" style="text-decoration: none; color: white;" >Jelajahi Koleksi Bunga Kami</a>
            </button>
        </div>

    </section>

    <section class="hero-petani">
    <div class="centered-content">
        <img src="img/icon.png" alt="Bunga Krisan" class="icon">
        <h1>Ayo bertemu Kami</h1>
        <p class="watch-video">
            <a href="{{ route('farmer.list') }}" style="text-decoration: none; color: black;">
                Anggota <i class="fas fa-arrow-right"></i>
            </a>
        </p>
    </div>

        <div class="farmer-carousel-container">
            <div class="card-wrapper" id="farmer-carousel-track">
                @foreach ($farmers as $farmer)
                    <div class="farmer-card">
                        <img class="profil-img" src="{{ asset('storage/' . $farmer->image) }}" alt="Foto {{ $farmer->name }}" />
                        <div class="farmer-name">{{ $farmer->name }}</div>
                        <p class="farmer-specialization">{{ $farmer->specialization }}</p>
                        <a href="{{ route('farmer.detail', $farmer->id) }}" class="detail-button">Lihat Detail</a>
                    </div>
                @endforeach
            </div>
             <div class="nav-buttons">
                <button class="nav-btn prev-btn">&lt;</button>
                <button class="nav-btn next-btn">&gt;</button>
             </div>
        </div>
    </section>
      
  <footer class="footer">
        <div class="footer-top">
            <div class="footer-column">
            <ul>
                <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
                <li><a href="{{ url('/flower-list') }}">Bunga</a></li>
                <li><a href="{{ url('/farmer-list') }}">Petani</a></li>
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
            <p>081235891160</p>
            <p>083854999558</p>
            <p>Desa Tutur<br>Kabupaten Pasuruan</p>
            </div>
            <div class="footer-bottom" style="flex-direction: column; gap: 5px;">
    <p>&copy; 2025 KampungBungaKrisan. Seluruh Hak Cipta Dilindungi.</p>
    <a href="#">Kebijakan Privasi</a>
    
    <p style="font-size: 12px; color: #ccc; margin-top: 10px;">
        <i class="fas fa-users"></i> Total Pengunjung: <strong>{{ number_format($totalVisitors ?? 0) }}</strong>
    </p>
</div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 KampungBungaKrisan. Seluruh Hak Cipta Dilindungi.</p>
            <a href="#">Kebijakan Privasi</a>
        </div>
    </footer>

    <script>
       document.addEventListener("DOMContentLoaded", function () {
    const track = document.getElementById('farmer-carousel-track');
    const nextButton = document.querySelector('.farmer-carousel-container .next-btn');
    const prevButton = document.querySelector('.farmer-carousel-container .prev-btn');

    if (!track || !nextButton || !prevButton || track.children.length === 0) {
        return;
    }

    const slides = Array.from(track.children);

    function getItemsPerPage() {
        return window.innerWidth <= 600 ? 1 : 3;
    }

    let itemsPerPage = getItemsPerPage();
    let slideWidth = slides[0].getBoundingClientRect().width + 30;
    let currentIndex = 0;
    let autoRotateInterval;

    function updateCarousel() {
        itemsPerPage = getItemsPerPage();
        slideWidth = slides[0].getBoundingClientRect().width + 30;
        moveToSlide(0);
    }

    function moveToSlide(index) {
        const maxIndex = slides.length - itemsPerPage;
        if (index > maxIndex) index = 0;
        if (index < 0) index = maxIndex;
        track.style.transform = 'translateX(-' + (slideWidth * index) + 'px)';
        currentIndex = index;
    }

    function startAutoRotate() {
        stopAutoRotate();
        autoRotateInterval = setInterval(() => {
            moveToSlide(currentIndex + 1);
        }, 3000);
    }

    function stopAutoRotate() {
        clearInterval(autoRotateInterval);
    }

    nextButton.addEventListener('click', () => {
        stopAutoRotate();
        moveToSlide(currentIndex + 1);
    });

    prevButton.addEventListener('click', () => {
        stopAutoRotate();
        moveToSlide(currentIndex - 1);
    });

    window.addEventListener('resize', updateCarousel);

    // Jangan sembunyikan tombol nav, biarkan tetap muncul
    nextButton.style.display = '';
    prevButton.style.display = '';

    startAutoRotate();
    updateCarousel();
});
</script>
</body>

</html>