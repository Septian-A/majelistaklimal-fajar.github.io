<div class="py-16 bg-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-emerald-700 font-bold text-sm tracking-widest uppercase">Dokumentasi Visual</span>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-emerald-950 mt-2 mb-4">Galeri Foto Kegiatan</h1>
            <p class="text-slate-600 text-sm">Dokumentasi kegiatan pengajian.</p>
            <div class="w-24 h-1.5 bg-gold-500 mx-auto rounded-full mt-4"></div>
        </div>

        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-center gap-2 mb-12">
            <button class="gallery-filter-btn active bg-emerald-800 text-white px-5 py-2 rounded-full text-sm font-semibold transition" data-filter="all">Semua</button>
            <button class="gallery-filter-btn bg-white text-slate-700 border border-slate-200 px-5 py-2 rounded-full text-sm font-semibold hover:bg-emerald-50 transition" data-filter="kajian">Pengajian</button>
            <button class="gallery-filter-btn bg-white text-slate-700 border border-slate-200 px-5 py-2 rounded-full text-sm font-semibold hover:bg-emerald-50 transition" data-filter="pelatihan">Pelatihan</button>
            <button class="gallery-filter-btn bg-white text-slate-700 border border-slate-200 px-5 py-2 rounded-full text-sm font-semibold hover:bg-emerald-50 transition" data-filter="sosial">Sosial & Kesehatan</button>
             <button class="gallery-filter-btn bg-white text-slate-700 border border-slate-200 px-5 py-2 rounded-full text-sm font-semibold hover:bg-emerald-50 transition" data-filter="Santunan">Santunan</button>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="gallery-item bg-white rounded-2xl overflow-hidden border border-emerald-100 shadow-sm group" data-category="kajian">
                <div class="h-64 overflow-hidden relative bg-emerald-900">
                    <img src="assets/kegiatan-1.jpeg" alt="Kajian Tafsir Al-Qur'an dan Fikih Mingguan" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <span class="absolute bottom-3 left-3 bg-emerald-950/80 text-emerald-100 text-xs px-3 py-1 rounded-full">Kajian Rutin</span>
                </div>
                <div class="p-5">   
                    <h3 class="font-bold text-emerald-900 mb-1">Kajian Tafsir Al-Qur'an & Fikih</h3>
                    <p class="text-slate-500 text-xs">Suasana khidmat jamaah mengikuti kajian mingguan.</p>
                </div>
            </div>

            <div class="gallery-item bg-white rounded-2xl overflow-hidden border border-emerald-100 shadow-sm group" data-category="pelatihan">
                <div class="h-64 overflow-hidden relative bg-emerald-900">
                    <img src="assets/kegiatan-2.jpg" alt="Pelatihan Pemulasaran Jenazah" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <span class="absolute bottom-3 left-3 bg-emerald-950/80 text-emerald-100 text-xs px-3 py-1 rounded-full">Pelatihan Fardhu Kifayah</span>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-emerald-900 mb-1">Pelatihan Pemulasaran Jenazah</h3>
                    <p class="text-slate-500 text-xs">Edukasi tata cara pengurusan jenazah sesuai syariat.</p>
                </div>
            </div>

            <div class="gallery-item bg-white rounded-2xl overflow-hidden border border-emerald-100 shadow-sm group" data-category="sosial">
                <div class="h-64 overflow-hidden relative bg-emerald-900">
                    <img src="assets/kegiatan-3.jpg" alt="Pelatihan Pemulasaran Jenazah" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <span class="absolute bottom-3 left-3 bg-emerald-950/80 text-emerald-100 text-xs px-3 py-1 rounded-full">Cek Kesehatan</span>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-emerald-900 mb-1">Pemeriksaan Kesehatan Bersama Puskesmas</h3>
                    <p class="text-slate-500 text-xs">Pemeriksaan kesehatan gratis dan edukasi pola hidup sehat hasil kerja sama Majelis Taklim Al Fajar dengan Puskesmas Kelurahan dan Kecamatan.</p>
                </div>
            </div>

            <div class="gallery-item bg-white rounded-2xl overflow-hidden border border-emerald-100 shadow-sm group" data-category="Santunan">
                <div class="h-64 overflow-hidden relative bg-emerald-900">
                    <img src="assets/kegiatan-4.jpeg" alt="Santunan Anak Yatim" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <span class="absolute bottom-3 left-3 bg-emerald-950/80 text-emerald-100 text-xs px-3 py-1 rounded-full">Santunan</span>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-emerald-900 mb-1">Santunan</h3>
                    <p class="text-slate-500 text-xs">Penyaluran Santunan Anak Yatim & Dhuafa
Program kepedulian sosial Majelis Taklim Al Fajar menyalurkan paket sembako dan santunan tunai kepada warga yang membutuhkan.</p>

            </div> 
            </div>
                                           </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const filterBtns = document.querySelectorAll('.gallery-filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => {
                b.classList.remove('bg-emerald-800', 'text-white');
                b.classList.add('bg-white', 'text-slate-700', 'border', 'border-slate-200');
            });
            btn.classList.add('bg-emerald-800', 'text-white');
            btn.classList.remove('bg-white', 'text-slate-700', 'border', 'border-slate-200');

            const filter = btn.getAttribute('data-filter');
            galleryItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
</script>
