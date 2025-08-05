{{-- filepath: d:\websitekrisan\website_krisan\resources\views\flower-list.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Koleksi Bunga Krisan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div class="flower-list-page">
     <header class="navbar">
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="#about">About</a>
            <a href="{{ url('/flower-list') }}">Flower</a>
            <a href="#marketplace">Marketplace</a>
            <a href="#gallery">Gallery</a>
        </nav>
    </header>
  <div class="main">
    <div class="background-shadow">
      <div class="link"></div>
      
    </div>
    <div class="section">
    <img class="bunga-krisan-1" src="bunga-krisan-10.png" />
    <div class="heading-2-a-summer-to-grow-explore3">Koleksi Bunga</div>
    <div class="desa-tutur-kabupaten-pasuruan2">
      Desa Tutur Kabupaten Pasuruan
    </div>
    <div class="link7">
      <div class="explore-our-flower">Explore OUR Flower</div>
    </div>
  </div>
  
  <div class="flower-card-grid" id="flower-card-container"></div>
    
  <div class="footer">
      <div class="figure-svg">
        <img class="group" src="group0.svg" />
      </div>
      <div class="background">
        <div class="heading-4-get-updates">Thank You</div>
        <div class="krisan-tutur-mekar-lebih-lama-indah-sepanjang-masa">
          Krisan Tutur: Mekar Lebih Lama, Indah Sepanjang Masa
        </div>
        <div class="vertical-divider"></div>
        <div class="vertical-divider2"></div>
        <div class="container">
          <div class="nav-list">
            <div class="item-link">
              <div class="about-us">About Us</div>
            </div>
            <div class="item-link2">
              <div class="bunga">Bunga</div>
            </div>
            <div class="item-link3">
              <div class="marketplace2">Marketplace</div>
            </div>
            <div class="item-link4">
              <div class="gallery2">Gallery</div>
            </div>
            <div class="item-link5">
              <div class="join-our-team">Join Our Team</div>
            </div>
            <div class="item-link6"></div>
          </div>
          <div class="list">
            <div class="item-link7">
              <div class="svg">
                <img class="group2" src="group1.svg" />
              </div>
            </div>
            <div class="item-link8">
              <div class="svg">
                <img class="group3" src="group2.svg" />
              </div>
            </div>
          </div>
        </div>
        <div class="list2">
          <div class="item-link9">
            <div class="send-us-a-message">Send Us A Message</div>
            <div class="svg2">
              <img class="group4" src="group3.svg" />
            </div>
            <div class="horizontal-divider"></div>
          </div>
          <div class="item-link10">
            <div class="_845-356-1234">(845) 356-1234</div>
          </div>
          <div class="item-link11">
            <div class="desa-tutur-kabupaten-pasuruan">
              Desa Tutur Kabupaten Pasuruan
            </div>
          </div>
          <div class="item-link12"></div>
        </div>
      </div>
      <div class="background2">
        <div class="_2025-kampung-bunga-krisan-all-rights-reserved">
          © 2025 KampungBungaKrisan. All Rights Reserved.
        </div>
        <div class="nav-list-item-link">
          <div class="privacy-policy">Privacy Policy</div>
        </div>
      </div>
    <!-- Pop Up Detail (sembunyikan awalnya) -->
    <div class="pop-up" id="popup-detail" style="display:none;">
      <div class="rectangle-4">
        <div class="heading-2-a-summer-to-grow-explore" id="popup-title">Bunga Krisan</div>
        <img class="x-circle" src="x-circle0.svg" id="close-popup" />
        <div class="popup-content-flex">
          <img class="rectangle-5" src="rectangle-50.png" id="popup-img" />
          <div class="temukan-pesona-abadi-dari-bunga-krisan" id="popup-desc"></div>
        </div>
      </div>
    </div>
     
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        const flowers = [
            {
                title: "Krisan Putih",
                description: "Krisan putih melambangkan kemurnian dan ketulusan.",
                image: "rectangle-20.png",
                detail: "Lihat detail"
            },
            {
                title: "Krisan Kuning",
                description: "Krisan kuning ceria dan segar, membawa kebahagiaan.",
                image: "rectangle-21.png",
                detail: "Lihat detail"
            },
            {
                title: "Krisan Merah",
                description: "Krisan merah penuh semangat, cocok untuk hadiah.",
                image: "rectangle-22.png",
                detail: "Lihat detail"
            },
            {
                title: "Krisan Ungu",
                description: "Krisan ungu tampil elegan dan misterius.",
                image: "rectangle-23.png",
                detail: "Lihat detail"
            },
            {
                title: "Krisan Pink",
                description: "Krisan pink lembut, simbol cinta dan kasih sayang.",
                image: "rectangle-24.png",
                detail: "Lihat detail"
            },
            {
                title: "Krisan Oranye",
                description: "Krisan oranye ceria, cocok untuk dekorasi pesta.",
                image: "rectangle-25.png",
                detail: "Lihat detail"
            }
        ];

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

