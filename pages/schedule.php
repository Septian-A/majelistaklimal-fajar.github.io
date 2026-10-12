<div class="py-16 bg-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-emerald-700 font-bold text-sm tracking-widest uppercase">Agenda Kegiatan</span>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-emerald-950 mt-2 mb-4">Jadwal Kajian Oktober 2026</h1>
            <p class="text-slate-600 text-sm">Gunakan fitur pencarian atau filter di bawah ini untuk menemukan jadwal kajian berdasarkan materi atau pengajar.</p>
            <div class="w-24 h-1.5 bg-gold-500 mx-auto rounded-full mt-4"></div>
        </div>

        <!-- Search and Filter Controls -->
        <div class="bg-white p-6 rounded-2xl border border-emerald-100 shadow-sm mb-8 flex flex-col md:flex-row gap-4 items-center justify-between">
            <div class="w-full md:w-1/2 relative">
                <i class="fas fa-search absolute left-4 top-3.5 text-slate-400"></i>
                <input type="text" id="search-schedule" placeholder="Cari materi, pengajar, atau hari..." class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-emerald-600 text-sm">
            </div>
            <div class="w-full md:w-auto flex items-center gap-3">
                <select id="filter-materi" class="px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-emerald-600 text-sm bg-white">
                    <option value="">Semua Materi</option>
                    <option value="Iqro dan Tahsin">Iqro dan Tahsin</option>
                    <option value="Tafsir Al-Qur’an">Tafsir Al-Qur'an</option>
                    <option value="Fikih">Fikih</option>
                    <option value="Hadroh">Hadroh</option>
                    <option value="Akidah">Akidah</option>
                </select>
            </div>
        </div>

        <!-- Schedule Table -->
        <div class="bg-white rounded-2xl border border-emerald-100 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table id="schedule-table" class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-emerald-900 text-white text-xs sm:text-sm uppercase tracking-wider">
                            <th class="p-4 sm:p-5">Hari / Tanggal</th>
                            <th class="p-4 sm:p-5">Pengajar</th>
                            <th class="p-4 sm:p-5">Tempat</th>
                            <th class="p-4 sm:p-5">Materi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-sm text-slate-700">
                        <tr class="hover:bg-emerald-50/50 transition">
                            <td class="p-4 sm:p-5 font-semibold text-emerald-900">Jumat, 2 Oktober 2026</td>
                            <td class="p-4 sm:p-5">Ustadzah Hj. dr. Hesty</td>
                            <td class="p-4 sm:p-5"><span class="bg-emerald-100 text-emerald-800 text-xs px-3 py-1 rounded-full font-medium">Aula Al Fajar</span></td>
                            <td class="p-4 sm:p-5 font-medium text-emerald-900">Tafsir Al-Qur’an</td>
                        </tr>
                        <tr class="hover:bg-emerald-50/50 transition">
                            <td class="p-4 sm:p-5 font-semibold text-emerald-900">Selasa, 6 Oktober 2026</td>
                            <td class="p-4 sm:p-5">Ustadzah Hj. Nurmailis</td>
                            <td class="p-4 sm:p-5"><span class="bg-emerald-100 text-emerald-800 text-xs px-3 py-1 rounded-full font-medium">Aula Al Fajar</span></td>
                            <td class="p-4 sm:p-5 font-medium text-emerald-900">Iqro dan Tahsin</td>
                        </tr>
                        <tr class="hover:bg-emerald-50/50 transition">
                            <td class="p-4 sm:p-5 font-semibold text-emerald-900">Rabu, 7 Oktober 2026</td>
                            <td class="p-4 sm:p-5">Ustadzah Hj. Nurmailis</td>
                            <td class="p-4 sm:p-5"><span class="bg-emerald-100 text-emerald-800 text-xs px-3 py-1 rounded-full font-medium">Aula Al Fajar</span></td>
                            <td class="p-4 sm:p-5 font-medium text-emerald-900">Iqro dan Tahsin</td>
                        </tr>
                        <tr class="hover:bg-emerald-50/50 transition">
                            <td class="p-4 sm:p-5 font-semibold text-emerald-900">Kamis, 8 Oktober 2026</td>
                            <td class="p-4 sm:p-5">Ustadz Choir</td>
                            <td class="p-4 sm:p-5"><span class="bg-emerald-100 text-emerald-800 text-xs px-3 py-1 rounded-full font-medium">Aula Al Fajar</span></td>
                            <td class="p-4 sm:p-5 font-medium text-emerald-900">Hadroh</td>
                        </tr>
                        <tr class="hover:bg-emerald-50/50 transition">
                            <td class="p-4 sm:p-5 font-semibold text-emerald-900">Jumat, 9 Oktober 2026</td>
                            <td class="p-4 sm:p-5">Ustadz Karim Fadlan</td>
                            <td class="p-4 sm:p-5"><span class="bg-emerald-100 text-emerald-800 text-xs px-3 py-1 rounded-full font-medium">Aula Al Fajar</span></td>
                            <td class="p-4 sm:p-5 font-medium text-emerald-900">Fikih</td>
                        </tr>
                        <tr class="hover:bg-emerald-50/50 transition">
                            <td class="p-4 sm:p-5 font-semibold text-emerald-900">Selasa, 13 Oktober 2026</td>
                            <td class="p-4 sm:p-5">Ustadzah Hj. Nurmailis</td>
                            <td class="p-4 sm:p-5"><span class="bg-emerald-100 text-emerald-800 text-xs px-3 py-1 rounded-full font-medium">Aula Al Fajar</span></td>
                            <td class="p-4 sm:p-5 font-medium text-emerald-900">Iqro dan Tahsin</td>
                        </tr>
                        <tr class="hover:bg-emerald-50/50 transition">
                            <td class="p-4 sm:p-5 font-semibold text-emerald-900">Rabu, 14 Oktober 2026</td>
                            <td class="p-4 sm:p-5">Ustadzah Hj. Nurmailis</td>
                            <td class="p-4 sm:p-5"><span class="bg-emerald-100 text-emerald-800 text-xs px-3 py-1 rounded-full font-medium">Aula Al Fajar</span></td>
                            <td class="p-4 sm:p-5 font-medium text-emerald-900">Iqro dan Tahsin</td>
                        </tr>
                        <tr class="hover:bg-emerald-50/50 transition">
                            <td class="p-4 sm:p-5 font-semibold text-emerald-900">Jumat, 16 Oktober 2026</td>
                            <td class="p-4 sm:p-5">Ustadzah Hj. dr. Hesty</td>
                            <td class="p-4 sm:p-5"><span class="bg-emerald-100 text-emerald-800 text-xs px-3 py-1 rounded-full font-medium">Aula Al Fajar</span></td>
                            <td class="p-4 sm:p-5 font-medium text-emerald-900">Tafsir Al-Qur’an</td>
                        </tr>
                        <tr class="hover:bg-emerald-50/50 transition">
                            <td class="p-4 sm:p-5 font-semibold text-emerald-900">Kamis, 22 Oktober 2026</td>
                            <td class="p-4 sm:p-5">Ustadz Choir</td>
                            <td class="p-4 sm:p-5"><span class="bg-emerald-100 text-emerald-800 text-xs px-3 py-1 rounded-full font-medium">Aula Al Fajar</span></td>
                            <td class="p-4 sm:p-5 font-medium text-emerald-900">Hadroh</td>
                        </tr>
                        <tr class="hover:bg-emerald-50/50 transition">
                            <td class="p-4 sm:p-5 font-semibold text-emerald-900">Selasa, 27 Oktober 2026</td>
                            <td class="p-4 sm:p-5">Ustadzah Hj. Nurmailis</td>
                            <td class="p-4 sm:p-5"><span class="bg-emerald-100 text-emerald-800 text-xs px-3 py-1 rounded-full font-medium">Aula Al Fajar</span></td>
                            <td class="p-4 sm:p-5 font-medium text-emerald-900">Iqro dan Tahsin</td>
                        </tr>
                        <tr class="hover:bg-emerald-50/50 transition">
                            <td class="p-4 sm:p-5 font-semibold text-emerald-900">Rabu, 28 Oktober 2026</td>
                            <td class="p-4 sm:p-5">Ustadzah Hj. Nurmailis</td>
                            <td class="p-4 sm:p-5"><span class="bg-emerald-100 text-emerald-800 text-xs px-3 py-1 rounded-full font-medium">Aula Al Fajar</span></td>
                            <td class="p-4 sm:p-5 font-medium text-emerald-900">Iqro dan Tahsin</td>
                        </tr>
                        <tr class="hover:bg-emerald-50/50 transition">
                            <td class="p-4 sm:p-5 font-semibold text-emerald-900">Jumat, 30 Oktober 2026</td>
                            <td class="p-4 sm:p-5">Ustadz Karim Fadlan</td>
                            <td class="p-4 sm:p-5"><span class="bg-emerald-800 text-white text-xs px-3 py-1 rounded-full font-medium">Masjid Al Fajar</span></td>
                            <td class="p-4 sm:p-5 font-medium text-emerald-900">Akidah Kifayatul Awam</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    // Schedule Search & Filter Script
    const searchInput = document.getElementById('search-schedule');
    const filterSelect = document.getElementById('filter-materi');
    const tableRows = document.querySelectorAll('#schedule-table tbody tr');

    function filterTable() {
        const query = searchInput.value.toLowerCase();
        const filterVal = filterSelect.value.toLowerCase();

        tableRows.forEach(row => {
            const text = row.innerText.toLowerCase();
            const materi = row.children[3].innerText.toLowerCase();
            
            const matchesQuery = text.includes(query);
            const matchesFilter = filterVal === "" || materi.includes(filterVal);

            if (matchesQuery && matchesFilter) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    }

    searchInput.addEventListener('input', filterTable);
    filterSelect.addEventListener('change', filterTable);
</script>
