<div class="py-16 bg-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-emerald-700 font-bold text-sm tracking-widest uppercase">Hubungi Kami</span>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-emerald-950 mt-2 mb-4">Kontak & Sekretariat Majelis Taklim</h1>
            <p class="text-slate-600 text-sm">Silakan hubungi pengurus atau kunjungi sekretariat kami di Masjid Jami Al Fajar, Munjul, Jakarta Timur.</p>
            <div class="w-24 h-1.5 bg-gold-500 mx-auto rounded-full mt-4"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="bg-white p-8 rounded-2xl border border-emerald-100 shadow-sm">
                <h3 class="text-2xl font-bold text-emerald-900 mb-6">Informasi Sekretariat</h3>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-emerald-100 text-emerald-800 rounded-xl flex items-center justify-center text-xl flex-shrink-0">
                            <i class="fas fa-mosque"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-emerald-900 text-lg">Masjid Jami Al Fajar</h4>
                            <p class="text-slate-600 text-sm">Jl. Dalang RT.005/RW.05, Kelurahan Munjul, Kecamatan Cipayung, Kota Administrasi Jakarta Timur, DKI Jakarta.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-emerald-100 text-emerald-800 rounded-xl flex items-center justify-center text-xl flex-shrink-0">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-emerald-900 text-lg">WhatsApp Pengurus</h4>
                            <p class="text-slate-600 text-sm">+62 812-3456-7890 (Ibu Ketua / Pengurus Harian)</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-emerald-100 text-emerald-800 rounded-xl flex items-center justify-center text-xl flex-shrink-0">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-emerald-900 text-lg">Email Resmi</h4>
                            <p class="text-slate-600 text-sm">info@majelistaklim-alfajar.org</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-slate-100">
                    <h4 class="font-bold text-emerald-900 mb-3">Media Sosial & Tautan</h4>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 bg-emerald-800 text-white rounded-xl flex items-center justify-center hover:bg-gold-500 hover:text-emerald-950 transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="w-10 h-10 bg-emerald-800 text-white rounded-xl flex items-center justify-center hover:bg-gold-500 hover:text-emerald-950 transition"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 bg-emerald-800 text-white rounded-xl flex items-center justify-center hover:bg-gold-500 hover:text-emerald-950 transition"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="w-10 h-10 bg-emerald-800 text-white rounded-xl flex items-center justify-center hover:bg-gold-500 hover:text-emerald-950 transition"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white p-8 rounded-2xl border border-emerald-100 shadow-sm">
                <h3 class="text-2xl font-bold text-emerald-900 mb-6">Kirim Pesan / Pertanyaan</h3>
                <?php
                $success = false;
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $success = true;
                }
                ?>
                <?php if ($success): ?>
                    <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 p-4 rounded-xl mb-6 text-sm">
                        <i class="fas fa-check-circle mr-2 text-gold-500"></i> Jazakumullah khairan. Pesan Anda telah berhasil dikirim kepada pengurus Majelis Taklim Al Fajar.
                    </div>
                <?php endif; ?>
                <form action="index.php?page=contact" method="POST" class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1">Nama Lengkap</label>
                        <input type="text" name="nama" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-emerald-600 text-sm" placeholder="Masukkan nama Anda...">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1">Nomor Kontak / WhatsApp</label>
                        <input type="text" name="kontak" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-emerald-600 text-sm" placeholder="Contoh: 08123456789...">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1">Pesan / Keperluan</label>
                        <textarea name="pesan" rows="4" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-emerald-600 text-sm" placeholder="Tuliskan pesan atau pertanyaan Anda..."></textarea>
                    </div>
                    <button type="submit" class="w-full bg-emerald-800 hover:bg-emerald-900 text-white font-bold py-3.5 rounded-xl shadow transition">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</div>
