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
    <header class="navbar">
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="#about">About</a>
            <a href="{{ url('/flower-list') }}">Flower</a>
            <a href="{{ url('/farmer-list') }}">Marketplace</a>
            <a href="#gallery">Gallery</a>
        </nav>
    </header>
   
    <div class="section">
        <img class="bunga-krisan-1" src="bunga-krisan-10.png" />
        <div class="heading-2-a-summer-to-grow-explore">Koleksi Bunga</div>
        <div class="desa-tutur-kabupaten-pasuruan2">
        Desa Tutur Kabupaten Pasuruan
        </div>
        <div class="link7">
        <div class="explore-our-flower">Explore OUR Flower</div>
        </div>
    </div>

    <div class="farmer-card-grid" id="farmer-card-container"></div>
  
    
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
    <script>
            const farmers = [
                {
                    name: "Uzi",
                    specialization: "Spesialis Bunga Krisan",
                    description: "Petani berpengalaman, ahli budidaya Krisan sejak 2010.",
                    image: "profil-uzi.png",
                    detail: "Lihat Profil & Bunga"
                },
                {
                    name: "Rina",
                    specialization: "Krisan Ungu & Pink",
                    description: "Mengembangkan varietas Krisan warna-warni.",
                    image: "profil-rina.png",
                    detail: "Lihat Profil & Bunga"
                },
                {
                    name: "Budi",
                    specialization: "Krisan Putih",
                    description: "Fokus pada kualitas dan ketahanan bunga.",
                    image: "profil-budi.png",
                    detail: "Lihat Profil & Bunga"
                },
                {
                    name: "Sari",
                    specialization: "Krisan Kuning",
                    description: "Ahli teknik hidroponik Krisan.",
                    image: "profil-sari.png",
                    detail: "Lihat Profil & Bunga"
                }
                // Tambah data petani lain sesuai kebutuhan
            ];

            let farmerCardsHtml = "";
            farmers.forEach((farmer, idx) => {
                farmerCardsHtml += `
                    <div class="card-profil">
                        <img class="profil-img" src="${farmer.image}" alt="${farmer.name}" />
                        <div class="heading-2-a-summer-to-grow-explore">${farmer.name}</div>
                        <div class="heading-2-a-summer-to-grow-explore">${farmer.specialization}</div>
                        <div class="profil-desc">${farmer.description}</div>
                        <div class="button-lihat-detail2">
                            <div class="heading-2-a-summer-to-grow-explore3">${farmer.detail}</div>
                        </div>
                    </div>
                `;
            });
            document.getElementById('farmer-card-container').innerHTML = farmerCardsHtml;
</script>
</body>
</html>