// Smooth scroll ke section produk
function scrollToProduk() {
  document.getElementById('produk').scrollIntoView({ behavior: 'smooth' });
}

// Tambah class active pada navbar sesuai scroll posisi
window.addEventListener('scroll', function () {
  const sections = document.querySelectorAll("section");
  const navLinks = document.querySelectorAll(".navbar nav a");

  let scrollY = window.scrollY + 100; // Tambahkan offset untuk akurasi scroll

  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.offsetHeight;
    const id = section.getAttribute("id");

    if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
      navLinks.forEach((link) => {
        link.classList.remove("active");
        if (link.getAttribute("href") === "#" + id) {
          link.classList.add("active");
        }
      });
    }
  });

  // Tambahkan garis bawah saat scroll
  const navbar = document.querySelector(".navbar");
  if (window.scrollY > 10) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});
