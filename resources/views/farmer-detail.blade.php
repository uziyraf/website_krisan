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
    <link rel="icon" type="image/png" href="{{ asset('img/logo-kampung-krisan1.png') }}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
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

    <section id="home" class="hero">
        <div class="profile-image">
            <div class="ellipse-wrapper">
                <div class="ellipse-1"></div>
                <img class="ellipse-2" src="{{ asset('storage/' . $farmer->image) }}" alt="Foto profil {{ $farmer->name }}">
            </div>
            <div class="name-farmer">{{ $farmer->name }}</div>
            <div class="group-2">
                <img class="location-on" src="{{ asset('img/location.png') }}" alt="icon lokasi">
                <a href="{{ $farmer->mapLink }}" class="link-address" target="_blank" rel="noopener noreferrer">{{ $farmer->address }}</a>
            </div>
        </div>
    </section>

    <section class="story-line">
        <img class="bunga-krisan-1" src="{{ asset('img/icon.png') }}" />
        <div class="heading-2-a-summer-to-grow-explore">Cerita Kami</div>
        <div class="desc-story">
            {{ $farmer->story }}
        </div>
    </section>

        <section class="section-3" id="flower-section-3">
            <h2 class="heading-1-a-summer-to-grow-explore">Bunga Tersedia di kebun kami</h2>

            <div class="carousel-container">
                <button class="carousel-button prev-button">&#10094;</button>
                <div class="carousel-track">
                    
                        @forelse ($farmer->bunga as $flower)
                            {{-- Kode < class="card"> dari Bagian 1 ditaruh di sini --}}
                            <div class="card">
                                <img class="rectangle-2" src="{{ asset('storage/' . $flower->image) }}" alt="{{ $flower->name }}" />
                                <div class="heading-2-a-summer-to-grow-explore">{{ $flower->name }}</div>
                                <div class="bunga-krisan-atau-seruni-adalah-simbol-keanggunan-klasik">
                                    {{ Str::words($flower->description, 15, '...') }}
                                </div>
                                <div class="button-lihat-detail">
                                    <div class="heading-2-a-summer-to-grow-explore2"
                                    data-name="{{ $flower->name }}"
                                    data-image="{{ asset('storage/' . $flower->image) }}"
                                    data-description="{{ $flower->description }}"
                                    onclick="showPopup(this)">
                                    Lihat Detail
                                </div>
                                </div>
                            </div>
                        @empty
                            <p>Petani ini belum memiliki data bunga.</p>
                        @endforelse
                </div>
                <button class="carousel-button next-button">&#10095;</button>
            </div>
        </section>

    <div class="pop-up" id="popup-detail" style="display:none;">
        <div class="rectangle-4">
            <div class="heading-2-a-summer-to-grow-explore" id="popup-title"></div>
            <img class="x-circle" src="{{ asset('img/ic_close.png') }}" id="close-popup" />
            <div class="popup-content-flex">
                <img class="rectangle-5" src="" id="popup-img" />
                <div class="temukan-pesona-abadi-dari-bunga-krisan" id="popup-desc"></div>
            </div>
        </div>
    </div>

    <section class="section-whatsapp">
        <div class="rectangle-1">
            <div class="heading-2-a-summer-to-grow-explore">Pesan Langsung dari Petani</div>
            <div class="desc-wa">
                Klik tombol di bawah untuk terhubung langsung dengan saya via WhatsApp.
                Tanyakan ketersediaan bunga, minta foto bunga terbaru, atau diskusikan
                kebutuhan Anda. Saya siap membantu!
            </div>
            <div class="rectangle-8" onclick="window.open('https://wa.me/{{ $farmer->whatsapp }}', '_blank')">
                <div class="hubungi-via-whats-app">Hubungi Via WhatsApp</div>
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
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 KampungBungaKrisan. Seluruh Hak Cipta Dilindungi.</p>
            <a href="#">Kebijakan Privasi</a>
        </div>
    </footer>

    <script>
        
    function showPopup(element) {
    
    const name = element.dataset.name;
    const imageUrl = element.dataset.image;
    const description = element.dataset.description;

    document.getElementById('popup-title').textContent = name;
    document.getElementById('popup-img').src = imageUrl;
    document.getElementById('popup-desc').innerHTML = description + "<br><br>"; 
    document.getElementById('popup-detail').style.display = 'flex';
    }

        document.getElementById('close-popup').onclick = function() {
            document.getElementById('popup-detail').style.display = 'none';
        };

    document.addEventListener("DOMContentLoaded", function() {
    const track = document.querySelector('.carousel-track');
    const nextButton = document.querySelector('.next-button');
    const prevButton = document.querySelector('.prev-button');

    if (!track || !nextButton || !prevButton) {
        return;
    }

    const slides = Array.from(track.children);

    // Responsive: jumlah item per page
    let itemsPerPage = window.innerWidth <= 600 ? 1 : 3;

    // Sembunyikan tombol jika bunga tidak cukup untuk di-scroll
    if (slides.length <= itemsPerPage) {
        nextButton.style.display = 'none';
        prevButton.style.display = 'none';
        return;
    }

    const slideWidth = slides.length > 0 ? slides[0].getBoundingClientRect().width + 20 : 0;
    let currentIndex = 0;
    let autoRotateInterval;

    function moveToSlide(targetIndex) {
        const maxIndex = slides.length - itemsPerPage;
        if (targetIndex > maxIndex) {
            targetIndex = 0;
        }
        if (targetIndex < 0) {
            targetIndex = maxIndex;
        }
        track.style.transform = 'translateX(-' + slideWidth * targetIndex + 'px)';
        currentIndex = targetIndex;
    }

    function startAutoRotate() {
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

    startAutoRotate();

    // Tambahkan event listener untuk resize agar carousel tetap responsif
    window.addEventListener('resize', function() {
        itemsPerPage = window.innerWidth <= 600 ? 1 : 3;
        moveToSlide(0); // Reset ke awal saat resize
    });
});
    </script>
</body>
</html>