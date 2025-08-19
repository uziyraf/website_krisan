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
            <a href="{{ url('/farmer-list') }}">Farmer</a>
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
        <img class="location-on" src="img/location.png" alt="icon lokasi">
        <a href="#" class="link-address" target="_blank" rel="noopener noreferrer">Tutur-Pasuruan</a>
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

      <script src="{{ asset('js/data-petani.js') }}"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    console.log("=== FARMER DETAIL PAGE LOADED ===");
    
    // Debug: Cek apakah data farmers tersedia
    console.log("typeof farmers:", typeof farmers);
    
    const params = new URLSearchParams(window.location.search);
    const id = params.get('id');
    console.log("Farmer ID from URL:", id);

    if (!id) {
        document.querySelector('#home').innerHTML = '<p>ID petani tidak ditemukan di URL.</p>';
        return;
    }

    // Cek apakah data farmers tersedia
    if (typeof farmers === 'undefined') {
        console.error("ERROR: Variable 'farmers' is not defined!");
        document.querySelector('#home').innerHTML = '<p style="color: red; text-align: center; padding: 2rem;">Data petani tidak dapat dimuat. Periksa file data-petani.js</p>';
        return;
    }

    const farmer = farmers.find(f => f.id == id);
    console.log("Found farmer:", farmer);

    if (!farmer) {
        document.querySelector('#home').innerHTML = '<p>Data petani tidak ditemukan untuk ID: ' + id + '</p>';
        return;
    }

    // Isi data petani ke dalam halaman
    try {
        // Update nama petani
        const nameElement = document.querySelector('.name-farmer');
        if (nameElement) nameElement.textContent = farmer.name;
        
        // Update alamat
        const addressElement = document.querySelector('.link-address');
        if (addressElement) {
            addressElement.textContent = farmer.address;
            if (farmer.mapLink) addressElement.setAttribute('href', farmer.mapLink);
        }
        
        // Update foto profil
        const imageElement = document.querySelector('.ellipse-2');
        if (imageElement && farmer.image) imageElement.setAttribute('src', farmer.image);
        
        // Update cerita
        const storyElement = document.querySelector('.desc-story');
        if (storyElement) storyElement.textContent = farmer.story;
        
        // Update spesialisasi jika ada
        const specializationElement = document.querySelector('.specialization');
        if (specializationElement && farmer.specialization) {
            specializationElement.textContent = farmer.specialization;
        }

        // Update WhatsApp link
        if (farmer.whatsapp) {
            const whatsappButtons = document.querySelectorAll('.rectangle-8');
            whatsappButtons.forEach(button => {
                button.setAttribute('onclick', `window.open('https://wa.me/${farmer.whatsapp}', '_blank')`);
            });
        }
        
        console.log("✅ Farmer data loaded successfully");
    } catch (error) {
        console.error("❌ Error loading farmer data:", error);
    }

    // BAGIAN BUNGA - Mengambil dari property flowers di farmer
    console.log("=== LOADING FLOWER DATA ===");
    
    // Cek apakah farmer memiliki property flowers
    if (!farmer.flowers) {
        console.error("ERROR: Farmer doesn't have flowers property");
        const container3 = document.querySelector('#flower-section-3 .flower-card-grid');
        if (container3) {
            container3.innerHTML = '<div style="text-align: center; color: orange; padding: 2rem;">Petani ini belum memiliki data bunga tersedia.</div>';
        }
        return;
    }
    
    if (!Array.isArray(farmer.flowers)) {
        console.error("ERROR: farmer.flowers is not an array:", farmer.flowers);
        return;
    }
    
    if (farmer.flowers.length === 0) {
        console.error("ERROR: farmer.flowers array is empty");
        const container3 = document.querySelector('#flower-section-3 .flower-card-grid');
        if (container3) {
            container3.innerHTML = '<div style="text-align: center; padding: 2rem;">Petani ini belum menambahkan bunga ke daftar.</div>';
        }
        return;
    }
    
    // Ambil data bunga dari farmer
    const farmerFlowers = farmer.flowers;
    console.log("✅ Farmer flowers data found:", farmerFlowers.length + " flowers available");
    console.log("Farmer flowers:", farmerFlowers);

    // Cari container untuk bunga
    const container3 = document.querySelector('#flower-section-3 .flower-card-grid');
    if (!container3) {
        console.error("ERROR: Container '.flower-card-grid' not found!");
        return;
    }

    // Variabel untuk carousel
    let currentIndex = 0;
    const itemsPerPage = 3;

    // Function untuk render bunga
    function renderFlowersSlider() {
        console.log("--- Rendering flowers ---");
        console.log("Current index:", currentIndex);
        console.log("Items per page:", itemsPerPage);
        
        let cardsSection3 = "";
        const sliced = farmerFlowers.slice(currentIndex, currentIndex + itemsPerPage);
        console.log("Flowers to display:", sliced.length);

        if (sliced.length === 0) {
            console.warn("No flowers to display at current index");
            container3.innerHTML = '<div style="text-align: center; padding: 2rem;">Tidak ada bunga untuk ditampilkan</div>';
            return;
        }

        sliced.forEach((flower, idx) => {
            const actualIndex = currentIndex + idx;
            
            // Buat deskripsi default jika tidak ada
            const description = flower.description || `${flower.name} adalah salah satu bunga unggulan dari kebun ${farmer.name}. Bunga ini dirawat dengan penuh perhatian untuk menghasilkan kualitas terbaik.`;
            
            cardsSection3 += `
                <div class="card">
                    <img class="rectangle-2" src="${flower.image}" alt="${flower.name}" onerror="this.src='https://via.placeholder.com/300x200?text=${encodeURIComponent(flower.name)}'" />
                    <div class="heading-2-a-summer-to-grow-explore">${flower.name}</div>
                    <div class="bunga-krisan-atau-seruni-adalah-simbol-keanggunan-klasik">
                        ${description}
                    </div>
                    <div class="button-lihat-detail">
                        <div class="heading-2-a-summer-to-grow-explore2" onclick="showPopup(${actualIndex})">Lihat Detail</div>
                    </div>
                </div>
            `;
        });

        container3.innerHTML = cardsSection3;
        console.log("✅ Flowers rendered successfully");
        
        // Verifikasi render
        setTimeout(() => {
            const cardElements = container3.querySelectorAll('.card');
            console.log("Cards in DOM:", cardElements.length);
        }, 100);
    }

    // Global function untuk popup detail bunga
    window.showPopup = function(index) {
        console.log("showPopup called with index:", index);
        
        if (!farmerFlowers || !farmerFlowers[index]) {
            console.error("Flower not found at index:", index);
            alert("Detail bunga tidak ditemukan");
            return;
        }
        
        const flower = farmerFlowers[index];
        const description = flower.description || `${flower.name} adalah salah satu bunga unggulan dari kebun ${farmer.name}.`;
        
        const popupContent = `
=== ${flower.name} ===

${description}

Petani: ${farmer.name}
Lokasi: ${farmer.address}
Spesialisasi: ${farmer.specialization}

Untuk menanyakan harga dan ketersediaan bunga ini, silakan hubungi petani langsung melalui WhatsApp.
        `;
        
        alert(popupContent);
    };

    // Render bunga pertama kali
    console.log("🚀 Starting initial flower render...");
    renderFlowersSlider();

    // Auto-rotate setiap 4 detik (hanya jika ada lebih dari itemsPerPage bunga)
    if (farmerFlowers.length > itemsPerPage) {
        const rotateInterval = setInterval(() => {
            console.log("🔄 Auto-rotating flowers...");
            currentIndex += itemsPerPage;
            if (currentIndex >= farmerFlowers.length) {
                currentIndex = 0;
                console.log("↩️ Reset to beginning");
            }
            renderFlowersSlider();
        }, 4000);
        
        console.log("✅ Auto-rotate interval set (every 4 seconds)");
    } else {
        console.log("ℹ️ Auto-rotate disabled (not enough flowers)");
    }
    
    console.log("=== INITIALIZATION COMPLETE ===");
});

</script>


</body>
</html>