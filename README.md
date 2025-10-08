# Kampung Bunga Krisan - Website Agrowisata

Selamat datang di repositori proyek Website Kampung Bunga Krisan. Proyek ini adalah sebuah platform digital untuk menampilkan keindahan dan potensi agrowisata bunga krisan di Desa Tutur, Pasuruan, serta menghubungkan para petani dengan calon pembeli.



## ✨ Fitur Utama

- **Profil Petani Dinamis**: Menampilkan daftar petani anggota dengan profil, cerita, dan spesialisasi yang dapat dikelola melalui halaman admin.
- **Galeri Bunga**: Katalog bunga krisan yang tersedia, lengkap dengan deskripsi dan foto, yang diambil langsung dari database.
- **Halaman Detail Interaktif**: Setiap petani memiliki halaman detail sendiri yang menampilkan cerita mereka dan carousel bunga yang mereka tanam.
- **Panel Admin Sederhana**: Halaman admin yang diproteksi dengan autentikasi untuk melakukan operasi CRUD (Create, Read, Update, Delete) pada data petani dan bunga.
-**Halaman 


### 🚀 Fitur Mendatang (Under Development)

#### Sistem Booking Kunjungan Langsung ke Petani
Saat ini kami sedang aktif mengembangkan fitur sistem booking yang akan menjembatani pengguna dengan para petani secara langsung. Pengguna nantinya dapat membuat janji temu atau memesan jadwal kunjungan untuk berbagai keperluan, seperti:
- **Wisata Agrikultur**: Mengunjungi kebun dan menikmati keindahan bunga krisan.
- **Edukasi**: Belajar langsung dari para ahli mengenai budidaya krisan.
- **Bisnis**: Menjalin kemitraan atau melakukan transaksi bisnis dengan petani.

Fitur ini bertujuan untuk menciptakan pengalaman yang lebih personal dan mendukung interaksi langsung antara komunitas dan petani lokal.

---
## 📄 Dibuat Oleh Tim PPK Ormawa

> Proyek ini dirancang dan dikembangkan dengan bangga oleh **Tim PPK Ormawa [Nama Organisasi Mahasiswa Anda]** sebagai bagian dari program pengabdian kepada masyarakat. Tujuan kami adalah untuk memberdayakan petani lokal di Desa Tutur dengan menyediakan platform digital yang modern dan mudah diakses.

---
## 🚀 Teknologi yang Digunakan

* **Backend**: Laravel 11
* **Frontend**: Blade Templates, CSS3, JavaScript (ES6)
* **Database**: MySQL
* **Deployment Testing**: `ngrok`

---
## 🛠️ Cara Setup & Instalasi Proyek Lokal

Untuk menjalankan proyek ini di lingkungan lokal Anda, ikuti langkah-langkah berikut:

1.  **Clone Repositori**
    ```bash
    git clone [https://github.com/NAMA_ANDA/NAMA_REPOSITORI_ANDA.git](https://github.com/NAMA_ANDA/NAMA_REPOSITORI_ANDA.git)
    cd NAMA_REPOSITORI_ANDA
    ```

2.  **Install Dependensi**
    Pastikan Anda memiliki [Composer](https://getcomposer.org/) terinstal.
    ```bash
    composer install
    ```

3.  **Setup Environment File**
    Salin file `.env.example` menjadi `.env`.
    ```bash
    cp .env.example .env
    ```
    Buat kunci aplikasi baru.
    ```bash
    php artisan key:generate
    ```

4.  **Konfigurasi Database**
    Buat sebuah database baru (misalnya `db_kampung_krisan`) dan perbarui informasi berikut di dalam file `.env` Anda:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=db_kampung_krisan
    DB_USERNAME=root
    DB_PASSWORD=
    ```
    Jangan lupa tambahkan username dan password admin di `.env`:
    ```env
    ADMIN_USERNAME=*****
    ADMIN_PASSWORD=********
    ```

5.  **Jalankan Migrasi & Seeder**
    Perintah ini akan membuat semua tabel dan mengisinya dengan data contoh.
    ```bash
    php artisan migrate:fresh --seed
    ```

6.  **Buat Storage Link**
    Perintah ini penting agar gambar yang di-upload bisa tampil.
    ```bash
    php artisan storage:link
    ```

7.  **Jalankan Server Development**
    ```bash
    php artisan serve
    ```
    Aplikasi Anda sekarang berjalan di `http://127.0.0.1:8000`. Halaman admin bisa diakses di `/admin/farmers`.

---
Dibuat dengan ❤️ oleh **Tim PPK Ormawa Humanika Universitas Yudharta Pasuruan 2025 ** untuk para petani Krisan Tutur.