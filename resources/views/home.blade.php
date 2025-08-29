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
            <a href="#gallery">Galeri</a>
        </nav>
    </header>


    <!-- Hero -->
    <section id="home" class="hero">
        <h1>
            Kampung<br />
            Bunga Krisan
        </h1>
        <p>Desa Tutur - Kabupaten Pasuruan</p>
        <div class="play-wrapper">
            <span class="play-text">Play Video</span>
            <button class="play-button" onclick="scrollToProduk()">
                <span class="play-icon">&#9658;</span>
            </button>
        </div>
    </section>

    <section class="hero-caption">
        <img src="img/icon.png" alt="Bunga Krisan" class="flower-icon">
        <h2>Kampung Bunga Krisan</h2>
        <p>Desa Tutur Kabupaten Pasuruan</p>
        <button class="explore-btn" onclick="scrollToFlower()">Jelajahi Koleksi Bunga Kami</button>
    </section>

    <section class="hero-denah">
        <div class="hero-container">
            <h1>Kebun Krisan, Permata dari Kadipaten</h1>
            <h2>Kampung Bunga Krisan</h2>
            <p>
                Selamat datang di surga bunga tersembunyi di Dusun Kadipaten, Desa Tutur, Pasuruan. Berada di ketinggian dengan udara pegunungan yang sejuk, perkebunan kami adalah rumah bagi hamparan ribuan bunga krisan yang mekar dalam palet warna yang memukau. Kami bukan hanya sebuah perkebunan, melainkan destinasi agrowisata di mana Anda bisa merasakan pengalaman otentik memetik bunga segar langsung dari tangkainya. Setiap sudut kebun kami menawarkan pemandangan indah yang sempurna untuk mengabadikan momen berharga. Datang dan temukan harmoni alam, nikmati ketenangan, dan bawa pulang keindahan krisan dari Tutur.
            </p>
            <button class="learn-btn" onclick="scrollToFlower()">Tentang Kebun Krisan Kami</button>
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
            <button class="learn-btn2" onclick="scrollToFlower()">Jelajahi Koleksi Bunga Kami</button>
            <p class="watch-video">
                WATCH VIDEO <i class="fas fa-arrow-right"></i>
            </p>
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

    <section>
        <div class="galery">
            <h1>Our<br>Galery</h1>

            <div class="gallery-single">
                <img src="img/Group.png" alt="Foto Galery Kiri" />
            </div>

            <div class="vertical-line"></div>

            <div class="gallery-single right-image">
                <img src="img/Section.png" alt="Foto Galery Kanan" />
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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
    // Sesuaikan selector ini agar cocok dengan HTML di beranda
    const track = document.getElementById('farmer-carousel-track');
    const nextButton = document.querySelector('.farmer-carousel-container .next-btn');
    const prevButton = document.querySelector('.farmer-carousel-container .prev-btn');

    // Cek dulu apakah elemen-elemen carousel ada di halaman
    if (!track || !nextButton || !prevButton || track.children.length === 0) {
        return; // Hentikan jika tidak ada carousel di halaman ini
    }

    const slides = Array.from(track.children);
    const itemsVisible = 3; // Ubah angka ini jika ingin menampilkan jumlah kartu yang berbeda

    // Sembunyikan tombol jika item tidak cukup untuk di-scroll
    if (slides.length <= itemsVisible) {
        nextButton.style.display = 'none';
        prevButton.style.display = 'none';
        return;
    }

    const slideWidth = slides[0].getBoundingClientRect().width + 30; // Lebar Kartu (350px) + margin (15px*2)
    let currentIndex = 0;
    let autoRotateInterval;

    function moveToSlide(index) {
        const maxIndex = slides.length - itemsVisible;
        if (index > maxIndex) {
            index = 0; // Kembali ke awal
        }
        if (index < 0) {
            index = maxIndex; // Lompat ke akhir
        }
        
        track.style.transform = 'translateX(-' + (slideWidth * index) + 'px)';
        currentIndex = index;
    }

    function startAutoRotate() {
        stopAutoRotate(); // Hentikan dulu jika sudah ada
        autoRotateInterval = setInterval(() => {
            moveToSlide(currentIndex + 1);
        }, 3000); // Ganti slide setiap 3 detik
    }

    function stopAutoRotate() {
        clearInterval(autoRotateInterval);
    }

    nextButton.addEventListener('click', () => {
        stopAutoRotate(); // Hentikan putaran otomatis saat user berinteraksi
        moveToSlide(currentIndex + 1);
    });

    prevButton.addEventListener('click', () => {
        stopAutoRotate(); // Hentikan putaran otomatis saat user berinteraksi
        moveToSlide(currentIndex - 1);
    });

    // Mulai putaran otomatis saat halaman dimuat
    startAutoRotate();
});
</script>
</body>

</html>