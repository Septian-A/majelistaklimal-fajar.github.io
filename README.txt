# PETUNJUK MENJALANKAN WEBSITE MAJELIS TAKLIM AL FAJAR (PHP)

Website resmi Majelis Taklim Al Fajar — Masjid Jami Al Fajar Munjul, Jakarta Timur ini dibangun menggunakan PHP, Tailwind CSS, dan JavaScript modern.

## 1. Menjalankan Website di Komputer Lokal (Lokal)
Pastikan PHP sudah terinstal di komputer Anda.
1. Buka terminal atau Command Prompt di folder tempat file ini diekstrak.
2. Jalankan perintah server lokal PHP:
   ```bash
   php -S localhost:8000
   ```
3. Buka browser dan akses: `http://localhost:8000`

## 2. Struktur File
- `index.php` : File utama (router & layout utama dengan header, navigasi, dan footer)
- `pages/home.php` : Halaman Beranda
- `pages/profile.php` : Halaman Profil & Visi Misi
- `pages/programs.php` : Halaman Program Kerja (7 program lengkap)
- `pages/schedule.php` : Halaman Jadwal Kajian Oktober 2026 dengan fitur pencarian & filter materi
- `pages/activities.php` : Halaman Kegiatan & Berita
- `pages/gallery.php` : Halaman Galeri Foto dengan filter kategori
- `pages/articles.php` : Halaman Artikel Islami
- `pages/contact.php` : Halaman Kontak & Formulir Pesan
- `README.txt` : Petunjuk instalasi dan penggunaan

## 3. Cara Publikasi ke Internet (Hosting)
1. Siapkan akun hosting web (cPanel, Niagahoster, Hostinger, atau server berbasis PHP).
2. Unggah seluruh file dan folder ke direktori `public_html` pada hosting Anda.
3. Pastikan domain Anda mengarah ke server tersebut. Website siap diakses secara online!
