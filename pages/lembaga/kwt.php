<?php include '../../includes/layout.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWT - Dusun Dagan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body class="bg-gray-50">
    <?php include '../../includes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section bg-gradient-to-br from-green-900 via-green-800 to-emerald-900 text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <div class="badge-modern inline-block mb-6">
                    <i class="fas fa-seedling mr-2"></i>
                    Pemberdayaan Perempuan
                </div>
                <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-green-400 via-emerald-400 to-teal-400 bg-clip-text text-transparent">
                    KWT Dusun Dagan
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-green-100">
                    Kelompok Wanita Tani yang memberdayakan perempuan melalui kegiatan pertanian dan ekonomi kreatif
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#tentang" class="btn-modern-primary">
                        <i class="fas fa-info-circle mr-2"></i>
                        Tentang Kami
                    </a>
                    <a href="#program" class="btn-modern-secondary">
                        <i class="fas fa-leaf mr-2"></i>
                        Program Kerja
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-2 h-2 bg-green-400 rounded-full animate-float"></div>
        <div class="absolute top-40 right-20 w-3 h-3 bg-emerald-400 rounded-full animate-float-delayed"></div>
        <div class="absolute bottom-20 left-20 w-2 h-2 bg-teal-400 rounded-full animate-float"></div>
        <div class="absolute bottom-40 right-10 w-3 h-3 bg-green-300 rounded-full animate-float-delayed"></div>
    </section>

    <!-- About Section -->
    <section id="tentang" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Tentang KWT</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    KWT (Kelompok Wanita Tani) adalah organisasi yang beranggotakan kaum perempuan yang bergerak di bidang pertanian, peternakan, dan pengolahan hasil pertanian untuk meningkatkan kesejahteraan keluarga dan masyarakat.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Visi & Misi</h3>
                    <div class="space-y-6">
                        <div class="bg-green-50 p-6 rounded-lg border border-green-200">
                            <h4 class="text-xl font-semibold text-green-800 mb-3">
                                <i class="fas fa-eye text-green-600 mr-2"></i>
                                Visi
                            </h4>
                            <p class="text-gray-700">Mewujudkan perempuan Dusun Dagan yang mandiri, produktif, dan berdaya saing dalam bidang pertanian dan ekonomi kreatif.</p>
                        </div>
                        
                        <div class="bg-emerald-50 p-6 rounded-lg border border-emerald-200">
                            <h4 class="text-xl font-semibold text-emerald-800 mb-3">
                                <i class="fas fa-bullseye text-emerald-600 mr-2"></i>
                                Misi
                            </h4>
                            <ul class="text-gray-700 space-y-2">
                                <li>• Meningkatkan keterampilan perempuan di bidang pertanian</li>
                                <li>• Mengembangkan usaha ekonomi produktif</li>
                                <li>• Meningkatkan kesejahteraan keluarga</li>
                                <li>• Mengembangkan produk olahan hasil pertanian</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="text-center p-6 bg-teal-50 rounded-lg border border-teal-200">
                        <div class="text-4xl font-bold text-teal-600 mb-2">35</div>
                        <p class="text-gray-700">Anggota Aktif</p>
                    </div>
                    <div class="text-center p-6 bg-green-50 rounded-lg border border-green-200">
                        <div class="text-4xl font-bold text-green-600 mb-2">6</div>
                        <p class="text-gray-700">Program Rutin</p>
                    </div>
                    <div class="text-center p-6 bg-emerald-50 rounded-lg border border-emerald-200">
                        <div class="text-4xl font-bold text-emerald-600 mb-2">25-55</div>
                        <p class="text-gray-700">Rentang Usia</p>
                    </div>
                    <div class="text-center p-6 bg-teal-50 rounded-lg border border-teal-200">
                        <div class="text-4xl font-bold text-teal-600 mb-2">8</div>
                        <p class="text-gray-700">Produk Unggulan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="program" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Program Kerja</h2>
                <p class="text-lg text-gray-600">Berbagai program unggulan KWT Dusun Dagan</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg border border-green-200">
                    <div class="text-green-600 text-3xl mb-4">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Pertanian Organik</h3>
                    <p class="text-gray-600 mb-4">Budidaya sayuran organik dan tanaman herbal untuk kebutuhan keluarga dan komersial.</p>
                    <div class="text-sm text-green-600">
                        <i class="fas fa-calendar mr-1"></i>
                        Program Mingguan
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg border border-emerald-200">
                    <div class="text-emerald-600 text-3xl mb-4">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Pengolahan Makanan</h3>
                    <p class="text-gray-600 mb-4">Pengolahan hasil pertanian menjadi makanan siap saji dan produk kemasan.</p>
                    <div class="text-sm text-emerald-600">
                        <i class="fas fa-calendar mr-1"></i>
                        Program Bulanan
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg border border-teal-200">
                    <div class="text-teal-600 text-3xl mb-4">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Pelatihan Keterampilan</h3>
                    <p class="text-gray-600 mb-4">Pelatihan budidaya, pengolahan, dan pemasaran produk pertanian.</p>
                    <div class="text-sm text-teal-600">
                        <i class="fas fa-calendar mr-1"></i>
                        Program Triwulan
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg border border-green-200">
                    <div class="text-green-600 text-3xl mb-4">
                        <i class="fas fa-store"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Pemasaran Produk</h3>
                    <p class="text-gray-600 mb-4">Pengembangan jaringan pemasaran dan kerjasama dengan pasar tradisional.</p>
                    <div class="text-sm text-green-600">
                        <i class="fas fa-calendar mr-1"></i>
                        Program Rutin
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg border border-emerald-200">
                    <div class="text-emerald-600 text-3xl mb-4">
                        <i class="fas fa-piggy-bank"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Simpan Pinjam</h3>
                    <p class="text-gray-600 mb-4">Program simpan pinjam untuk modal usaha anggota KWT.</p>
                    <div class="text-sm text-emerald-600">
                        <i class="fas fa-calendar mr-1"></i>
                        Program Bulanan
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg border border-teal-200">
                    <div class="text-teal-600 text-3xl mb-4">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Kerjasama</h3>
                    <p class="text-gray-600 mb-4">Kerjasama dengan berbagai pihak untuk pengembangan usaha.</p>
                    <div class="text-sm text-teal-600">
                        <i class="fas fa-calendar mr-1"></i>
                        Program Tahunan
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Produk Unggulan</h2>
                <p class="text-lg text-gray-600">Berbagai produk hasil olahan KWT Dusun Dagan</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gradient-to-br from-green-500 to-green-600 text-white p-8 rounded-lg text-center">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Sayuran Organik</h3>
                    <p class="text-green-100">Kangkung, Bayam, Kacang Panjang</p>
                    <p class="text-sm text-green-200 mt-2">Fresh Daily</p>
                </div>
                
                <div class="bg-gradient-to-br from-emerald-500 to-emerald-600 text-white p-8 rounded-lg text-center">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-bread-slice"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Roti & Kue</h3>
                    <p class="text-emerald-100">Roti Tawar, Kue Basah</p>
                    <p class="text-sm text-emerald-200 mt-2">Homemade</p>
                </div>
                
                <div class="bg-gradient-to-br from-teal-500 to-teal-600 text-white p-8 rounded-lg text-center">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-prescription-bottle"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Jamu Tradisional</h3>
                    <p class="text-teal-100">Jamu Beras Kencur, Kunyit</p>
                    <p class="text-sm text-teal-200 mt-2">Natural</p>
                </div>
                
                <div class="bg-gradient-to-br from-green-500 to-green-600 text-white p-8 rounded-lg text-center">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-cookie-bite"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Snack Tradisional</h3>
                    <p class="text-green-100">Keripik, Rempeyek</p>
                    <p class="text-sm text-green-200 mt-2">Crispy</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Structure Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Struktur Organisasi</h2>
                <p class="text-lg text-gray-600">Pengurus KWT Dusun Dagan periode 2024-2026</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-green-500 to-green-600 text-white p-8 rounded-lg text-center">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-crown"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Ketua</h3>
                    <p class="text-green-100">Ibu Siti Aminah</p>
                    <p class="text-sm text-green-200 mt-2">Usia 45 tahun</p>
                </div>
                
                <div class="bg-gradient-to-br from-emerald-500 to-emerald-600 text-white p-8 rounded-lg text-center">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Wakil Ketua</h3>
                    <p class="text-emerald-100">Ibu Nurhayati</p>
                    <p class="text-sm text-emerald-200 mt-2">Usia 42 tahun</p>
                </div>
                
                <div class="bg-gradient-to-br from-teal-500 to-teal-600 text-white p-8 rounded-lg text-center">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Sekretaris</h3>
                    <p class="text-teal-100">Ibu Dewi Sartika</p>
                    <p class="text-sm text-teal-200 mt-2">Usia 38 tahun</p>
                </div>
                
                <div class="bg-gradient-to-br from-green-500 to-green-600 text-white p-8 rounded-lg text-center">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Bendahara</h3>
                    <p class="text-green-100">Ibu Sri Wahyuni</p>
                    <p class="text-sm text-green-200 mt-2">Usia 40 tahun</p>
                </div>
                
                <div class="bg-gradient-to-br from-emerald-500 to-emerald-600 text-white p-8 rounded-lg text-center">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Divisi Produksi</h3>
                    <p class="text-emerald-100">Ibu Rina Marlina</p>
                    <p class="text-sm text-emerald-200 mt-2">Usia 35 tahun</p>
                </div>
                
                <div class="bg-gradient-to-br from-teal-500 to-teal-600 text-white p-8 rounded-lg text-center">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Divisi Pemasaran</h3>
                    <p class="text-teal-100">Ibu Yuni Safitri</p>
                    <p class="text-sm text-teal-200 mt-2">Usia 33 tahun</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievements Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Prestasi & Pencapaian</h2>
                <p class="text-lg text-gray-600">Berbagai prestasi yang telah diraih KWT Dusun Dagan</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg border border-green-200">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">
                        <i class="fas fa-trophy text-yellow-500 mr-3"></i>
                        Prestasi 2024
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center p-4 bg-yellow-50 rounded-lg">
                            <div class="text-yellow-600 text-xl mr-4">
                                <i class="fas fa-medal"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Juara 1 Lomba Olahan Pangan</h4>
                                <p class="text-gray-600">Tingkat Kecamatan</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-green-50 rounded-lg">
                            <div class="text-green-600 text-xl mr-4">
                                <i class="fas fa-award"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">KWT Terbaik</h4>
                                <p class="text-gray-600">Tingkat Kabupaten</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-blue-50 rounded-lg">
                            <div class="text-blue-600 text-xl mr-4">
                                <i class="fas fa-star"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Program Inovatif</h4>
                                <p class="text-gray-600">Pertanian Vertikal</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-lg border border-emerald-200">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">
                        <i class="fas fa-chart-line text-green-600 mr-3"></i>
                        Target 2025
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center p-4 bg-purple-50 rounded-lg">
                            <div class="text-purple-600 text-xl mr-4">
                                <i class="fas fa-target"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Peningkatan Produksi</h4>
                                <p class="text-gray-600">Target 50% peningkatan</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-orange-50 rounded-lg">
                            <div class="text-orange-600 text-xl mr-4">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Ekspansi Pasar</h4>
                                <p class="text-gray-600">Masuk ke 3 pasar baru</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-red-50 rounded-lg">
                            <div class="text-red-600 text-xl mr-4">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">E-commerce</h4>
                                <p class="text-gray-600">Penjualan online</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Pencapaian KWT</h2>
                <p class="text-lg text-gray-600">Data kinerja KWT Dusun Dagan tahun 2024</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-green-600 mb-2">Rp 15M</div>
                    <p class="text-gray-600">Omset Tahunan</p>
                </div>
                
                <div class="text-center">
                    <div class="text-4xl font-bold text-emerald-600 mb-2">8</div>
                    <p class="text-gray-600">Produk Unggulan</p>
                </div>
                
                <div class="text-center">
                    <div class="text-4xl font-bold text-teal-600 mb-2">5</div>
                    <p class="text-gray-600">Mitra Pemasaran</p>
                </div>
                
                <div class="text-center">
                    <div class="text-4xl font-bold text-green-600 mb-2">100%</div>
                    <p class="text-gray-600">Anggota Aktif</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Hubungi KWT</h2>
                <p class="text-lg text-gray-600">Untuk informasi produk atau bergabung dengan KWT Dusun Dagan</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="bg-green-50 p-8 rounded-lg border border-green-200">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">
                        <i class="fas fa-info-circle text-green-600 mr-3"></i>
                        Informasi Kontak
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <i class="fas fa-phone text-green-600 mr-3"></i>
                            <span class="text-gray-600">0812-3456-7890</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-envelope text-green-600 mr-3"></i>
                            <span class="text-gray-600">kwt@dusundagan.com</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-map-marker-alt text-green-600 mr-3"></i>
                            <span class="text-gray-600">Balai Dusun Dagan</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-emerald-50 p-8 rounded-lg border border-emerald-200">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">
                        <i class="fas fa-clock text-emerald-600 mr-3"></i>
                        Jam Operasional
                    </h3>
                    <div class="space-y-4">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Senin - Jumat</span>
                            <span class="font-semibold">08:00 - 16:00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Sabtu</span>
                            <span class="font-semibold">08:00 - 12:00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Minggu</span>
                            <span class="font-semibold text-red-600">Tutup</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../../assets/js/main.js"></script>
</body>
</html>

