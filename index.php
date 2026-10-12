<?php
// Majelis Taklim Al Fajar - Official Website
$active_page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majelis Taklim Al Fajar — Masjid Jami Al Fajar</title>
    <meta name="description" content="Website resmi Majelis Taklim Kaum Ibu Masjid Jami Al Fajar. Menuntut Ilmu, Menguatkan Iman, Menebar Manfaat.">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        emerald: { 50: '#ecfdf5', 100: '#d1fae5', 600: '#059669', 700: '#047857', 800: '#065f46', 900: '#064e3b' },
                        sage: { 100: '#e2e8f0', 200: '#cbd5e1', 600: '#64748b', 700: '#475569' },
                        cream: '#fdfbf7',
                        gold: { 500: '#d97706', 600: '#b45309' }
                    }
                }
            }
        }
    </script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;450;500;600;700&family=Amiri:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #fdfbf7; color: #1e293b; }
        .arabic-font { font-family: 'Amiri', serif; }
        .islamic-pattern { background-color: #064e3b; background-image: radial-gradient(#059669 0.75px, transparent 0.75px), radial-gradient(#059669 0.75px, #064e3b 0.75px); background-size: 30px 30px; background-position: 0 0, 15px 15px; }
    </style>
</head>
<body class="bg-cream text-slate-800 antialiased flex flex-col min-h-screen">

    <!-- Top Header Bar -->
    <div class="bg-emerald-900 text-emerald-100 text-xs sm:text-sm py-2 px-4">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-4">
                <span><i class="fas fa-mosque mr-2 text-gold-500"></i> Masjid Jami Al Fajar - Munjul, Jakarta Timur</span>
            </div>
            <div class="flex items-center gap-4">
                <span><i class="fas fa-phone-alt mr-2 text-gold-500"></i> Hubungi Pengurus</span>
                <span><i class="fas fa-envelope mr-2 text-gold-500"></i> info@majelistaklim-alfajar.org</span>
            </div>
        </div>
    </div>

    <!-- Navigation Bar -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md shadow-sm border-b border-emerald-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <!-- Logo & Title -->
                <a href="index.php?page=home" class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-emerald-800 flex items-center justify-center text-white text-xl shadow-md border-2 border-gold-500">
                        <i class="fas fa-moon"></i>
                    </div>
                    <div>
                        <span class="block font-bold text-lg sm:text-xl text-emerald-900 tracking-tight">MT. Al Fajar</span>
                        <span class="block text-xs text-slate-500 font-medium">Kaum Ibu Masjid Jami Al Fajar</span>
                    </div>
                </a>

                <!-- Desktop Nav Links -->
                <nav class="hidden lg:flex items-center gap-1 xl:gap-2">
                    <a href="index.php?page=home" class="px-3 py-2 rounded-lg text-sm font-medium transition <?php echo ($active_page=='home') ? 'bg-emerald-800 text-white' : 'text-slate-700 hover:bg-emerald-50 hover:text-emerald-800'; ?>">Beranda</a>
                    <a href="index.php?page=profile" class="px-3 py-2 rounded-lg text-sm font-medium transition <?php echo ($active_page=='profile') ? 'bg-emerald-800 text-white' : 'text-slate-700 hover:bg-emerald-50 hover:text-emerald-800'; ?>">Profil & Visi</a>
                    <a href="index.php?page=programs" class="px-3 py-2 rounded-lg text-sm font-medium transition <?php echo ($active_page=='programs') ? 'bg-emerald-800 text-white' : 'text-slate-700 hover:bg-emerald-50 hover:text-emerald-800'; ?>">Program Kerja</a>
                    <a href="index.php?page=schedule" class="px-3 py-2 rounded-lg text-sm font-medium transition <?php echo ($active_page=='schedule') ? 'bg-emerald-800 text-white' : 'text-slate-700 hover:bg-emerald-50 hover:text-emerald-800'; ?>">Jadwal Kajian</a>
                    <a href="index.php?page=activities" class="px-3 py-2 rounded-lg text-sm font-medium transition <?php echo ($active_page=='activities') ? 'bg-emerald-800 text-white' : 'text-slate-700 hover:bg-emerald-50 hover:text-emerald-800'; ?>">Kegiatan & Berita</a>
                    <a href="index.php?page=gallery" class="px-3 py-2 rounded-lg text-sm font-medium transition <?php echo ($active_page=='gallery') ? 'bg-emerald-800 text-white' : 'text-slate-700 hover:bg-emerald-50 hover:text-emerald-800'; ?>">Galeri</a>
                    <a href="index.php?page=articles" class="px-3 py-2 rounded-lg text-sm font-medium transition <?php echo ($active_page=='articles') ? 'bg-emerald-800 text-white' : 'text-slate-700 hover:bg-emerald-50 hover:text-emerald-800'; ?>">Artikel</a>
                    <a href="index.php?page=contact" class="px-3 py-2 rounded-lg text-sm font-medium transition <?php echo ($active_page=='contact') ? 'bg-emerald-800 text-white' : 'text-slate-700 hover:bg-emerald-50 hover:text-emerald-800'; ?>">Kontak</a>
                </nav>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button id="mobile-menu-btn" class="p-2 rounded-lg text-slate-700 hover:bg-emerald-50 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Nav Menu -->
        <div id="mobile-menu" class="hidden lg:hidden bg-white border-b border-emerald-100 px-4 pt-2 pb-4 space-y-1">
            <a href="index.php?page=home" class="block px-3 py-2 rounded-lg text-base font-medium <?php echo ($active_page=='home') ? 'bg-emerald-800 text-white' : 'text-slate-700 hover:bg-emerald-50'; ?>">Beranda</a>
            <a href="index.php?page=profile" class="block px-3 py-2 rounded-lg text-base font-medium <?php echo ($active_page=='profile') ? 'bg-emerald-800 text-white' : 'text-slate-700 hover:bg-emerald-50'; ?>">Profil & Visi</a>
            <a href="index.php?page=programs" class="block px-3 py-2 rounded-lg text-base font-medium <?php echo ($active_page=='programs') ? 'bg-emerald-800 text-white' : 'text-slate-700 hover:bg-emerald-50'; ?>">Program Kerja</a>
            <a href="index.php?page=schedule" class="block px-3 py-2 rounded-lg text-base font-medium <?php echo ($active_page=='schedule') ? 'bg-emerald-800 text-white' : 'text-slate-700 hover:bg-emerald-50'; ?>">Jadwal Kajian</a>
            <a href="index.php?page=activities" class="block px-3 py-2 rounded-lg text-base font-medium <?php echo ($active_page=='activities') ? 'bg-emerald-800 text-white' : 'text-slate-700 hover:bg-emerald-50'; ?>">Kegiatan & Berita</a>
            <a href="index.php?page=gallery" class="block px-3 py-2 rounded-lg text-base font-medium <?php echo ($active_page=='gallery') ? 'bg-emerald-800 text-white' : 'text-slate-700 hover:bg-emerald-50'; ?>">Galeri</a>
            <a href="index.php?page=articles" class="block px-3 py-2 rounded-lg text-base font-medium <?php echo ($active_page=='articles') ? 'bg-emerald-800 text-white' : 'text-slate-700 hover:bg-emerald-50'; ?>">Artikel</a>
            <a href="index.php?page=contact" class="block px-3 py-2 rounded-lg text-base font-medium <?php echo ($active_page=='contact') ? 'bg-emerald-800 text-white' : 'text-slate-700 hover:bg-emerald-50'; ?>">Kontak</a>
        </div>
    </header>

    <!-- Main Content Router -->
    <main class="flex-grow">
        <?php
        switch($active_page) {
            case 'profile':
                include('pages/profile.php');
                break;
            case 'programs':
                include('pages/programs.php');
                break;
            case 'schedule':
                include('pages/schedule.php');
                break;
            case 'activities':
                include('pages/activities.php');
                break;
            case 'gallery':
                include('pages/gallery.php');
                break;
            case 'articles':
                include('pages/articles.php');
                break;
            case 'contact':
                include('pages/contact.php');
                break;
            case 'home':
            default:
                include('pages/home.php');
                break;
        }
        ?>
    </main>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/6281234567890?text=Assalamu'alaikum%20pengurus%20Majelis%20Taklim%20Al%20Fajar,%20saya%20ingin%20bertanya..." target="_blank" class="fixed bottom-6 right-6 z-50 bg-emerald-600 hover:bg-emerald-700 text-white p-4 rounded-full shadow-2xl flex items-center justify-center transition transform hover:scale-110">
        <i class="fab fa-whatsapp text-2xl"></i>
    </a>

    <!-- Footer -->
    <footer class="bg-emerald-900 text-emerald-100 pt-16 pb-12 border-t-4 border-gold-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-full bg-gold-500 flex items-center justify-center text-emerald-900 font-bold text-lg">
                            <i class="fas fa-moon"></i>
                        </div>
                        <span class="font-bold text-xl text-white">MT. Al Fajar</span>
                    </div>
                    <p class="text-emerald-200 text-sm leading-relaxed mb-4">
                        Majelis Taklim Kaum Ibu Masjid Jami Al Fajar wadah pembinaan umat, mempererat ukhuwah Islamiyah, serta mencetak muslimah berilmu dan berakhlakul karimah.
                    </p>
                    <div class="flex space-x-3">
                        <a href="#" class="w-9 h-9 rounded-full bg-emerald-800 flex items-center justify-center hover:bg-gold-500 hover:text-emerald-900 transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="w-9 h-9 rounded-full bg-emerald-800 flex items-center justify-center hover:bg-gold-500 hover:text-emerald-900 transition"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="w-9 h-9 rounded-full bg-emerald-800 flex items-center justify-center hover:bg-gold-500 hover:text-emerald-900 transition"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="w-9 h-9 rounded-full bg-emerald-800 flex items-center justify-center hover:bg-gold-500 hover:text-emerald-900 transition"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

                <div>
                    <h3 class="text-white font-semibold text-lg mb-4 border-b border-emerald-800 pb-2">Menu Cepat</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="index.php?page=home" class="hover:text-gold-500 transition"><i class="fas fa-chevron-right mr-2 text-xs text-gold-500"></i>Beranda</a></li>
                        <li><a href="index.php?page=profile" class="hover:text-gold-500 transition"><i class="fas fa-chevron-right mr-2 text-xs text-gold-500"></i>Profil & Visi Misi</a></li>
                        <li><a href="index.php?page=programs" class="hover:text-gold-500 transition"><i class="fas fa-chevron-right mr-2 text-xs text-gold-500"></i>Program Kerja</a></li>
                        <li><a href="index.php?page=schedule" class="hover:text-gold-500 transition"><i class="fas fa-chevron-right mr-2 text-xs text-gold-500"></i>Jadwal Kajian Oktober 2026</a></li>
                        <li><a href="index.php?page=activities" class="hover:text-gold-500 transition"><i class="fas fa-chevron-right mr-2 text-xs text-gold-500"></i>Kegiatan & Berita</a></li>
                        <li><a href="index.php?page=gallery" class="hover:text-gold-500 transition"><i class="fas fa-chevron-right mr-2 text-xs text-gold-500"></i>Galeri Foto</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-white font-semibold text-lg mb-4 border-b border-emerald-800 pb-2">Sekretariat & Lokasi</h3>
                    <p class="text-emerald-200 text-sm mb-3">
                        <i class="fas fa-map-marker-alt text-gold-500 mr-2"></i> Masjid Jami Al Fajar, Jl. Dalang RT.005/RW.05, Kelurahan Munjul, Kecamatan Cipayung, Jakarta Timur, DKI Jakarta.
                    </p>
                    <p class="text-emerald-200 text-sm mb-3">
                        <i class="fas fa-envelope text-gold-500 mr-2"></i> info@majelistaklim-alfajar.org
                    </p>
                    <p class="text-emerald-200 text-sm">
                        <i class="fas fa-clock text-gold-500 mr-2"></i> Waktu Kegiatan: Sesuai Jadwal Kajian Rutin Mingguan & Bulanan
                    </p>
                </div>
            </div>

            <div class="border-t border-emerald-800 pt-8 text-center text-xs text-emerald-300">
                <p>&copy; <?php echo date('Y'); ?> Majelis Taklim Al Fajar — Masjid Jami Al Fajar Munjul. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
