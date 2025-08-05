<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calon engineer</title>

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
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="#about">About</a>
            <a href="{{ url('/flower-list') }}">Flower</a>
            <a href="#marketplace">Marketplace</a>
            <a href="#gallery">Gallery</a>
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
        <img src="img/icon.png" alt="Bunga Krisan" class="flower-icon"> <!-- Gambar bunga -->
        <h2>Kampung Bunga Krisan</h2>
        <p>Desa Tutur Kabupaten Pasuruan</p>
        <button class="explore-btn" onclick="scrollToFlower()">Explore Our Flower</button>
    </section>

    <section class="hero-denah">
        <div class="hero-container">
            <h1>OUR PLACE NATURE</h1>
            <h2>Kampung Bunga Krisan</h2>
            <p>
                Selamat datang di surga bunga tersembunyi di Dusun Kadipaten, Desa Tutur, Pasuruan. Berada di ketinggian dengan udara pegunungan yang sejuk, perkebunan kami adalah rumah bagi hamparan ribuan bunga krisan yang mekar dalam palet warna yang memukau. Kami bukan hanya sebuah perkebunan, melainkan destinasi agrowisata di mana Anda bisa merasakan pengalaman otentik memetik bunga segar langsung dari tangkainya. Setiap sudut kebun kami menawarkan pemandangan indah yang sempurna untuk mengabadikan momen berharga. Datang dan temukan harmoni alam, nikmati ketenangan, dan bawa pulang keindahan krisan dari Tutur.
            </p>
            <button class="learn-btn" onclick="scrollToFlower()">LEARN ABOUT OUR PLACE</button>
        </div>
    </section>

    <section class="hero-bunga">
        <div class="hero-container2">
            <h1>THE NATURE PLACE GREENHOUSE OF KRISAN FLOWER</h1>
            <h2>Kenapa Harus Pilih Bunga Kami?</h2>
            <p>
                Karena setiap tangkai adalah wujud dari kualitas dan kepedulian. Dibudidayakan di dataran tinggi Tutur yang sejuk dan dirawat dengan teknologi presisi di dalam greenhouse modern, setiap bunga kami tumbuh dalam kondisi optimal. Hasilnya adalah mahakarya alam yang sempurna: krisan dengan warna yang jauh lebih hidup, batang yang kokoh, serta kesegaran yang terbukti tahan lebih lama. Kami memetiknya khusus untuk Anda, memastikan kualitas premium dari kebun langsung ke tangan Anda. Dengan memilih kami, Anda tidak hanya mendapatkan bunga terindah untuk setiap momen, tetapi juga turut memberdayakan
            </p>
            <button class="learn-btn2" onclick="scrollToFlower()">EXPLORE OUR FLOWER</button>
            <p class="watch-video">
                WATCH VIDEO <i class="fas fa-arrow-right"></i>
            </p>
        </div>

        <div class="image-grid">
            <img src="img/Figure.png" alt="Bunga 1" class="img-1" />
            <img src="img/Figure (1).png" alt="Bunga 1" class="img-2" />
            <img src="img/Figure → SVG.png" alt="Bunga 1" class="img-3" />
            <img src="img/Figure → SVG (1).png" alt="Bunga 1" class="img-4" />

        </div>

        <div class="img-5-container">
            <img src="img/reviews.png" alt="Bunga 1" class="img-5" />
        </div>

        <div class="centered-content">
            <img src="img/icon.png" alt="Bunga Krisan" class="icon">
            <h1>Meet Our Camp Petani</h1>
            <p class="watch-video">
                FULL MEMBER <i class="fas fa-arrow-right"></i>
            </p>
        </div>

        <!-- petani -->
        <div class="slider-container">
            <div class="card-wrapper">
                <div class="profile-card">
                    <img src="img/biliy.jpg" alt="Petani 1" />
                    <h3>Andi</h3>
                    <p>Petani</p>
                </div>
                <div class="profile-card">
                    <img src="img/biliy.jpg" alt="Petani 2" />
                    <h3>Santi</h3>
                    <p>Petani</p>
                </div>
                <div class="profile-card">
                    <img src="img/biliy.jpg" alt="Petani 3" />
                    <h3>Budi</h3>
                    <p>Petani</p>
                </div>
            </div>

            <!-- Tombol navigasi pindah ke bawah -->
            <div class="nav-buttons">
                <!-- Panah kiri -->
                <button class="nav-btn">&lt;</button>

                <!-- Panah kanan -->
                <button class="nav-btn">&gt;</button>
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







    <section>
        <div class="massage">
            <h1>massage</h1>
        </div>
    </section>



    <!-- Footer -->
    <footer class="footer">
        &copy; 2025 Davi Florist - Semua Hak Dilindungi
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>