<?php include '../../includes/layout.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karang Taruna - Dusun Dagan</title>
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
                    <i class="fas fa-users mr-2"></i>
                    Organisasi Pemuda
                </div>
                <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-green-400 via-emerald-400 to-teal-400 bg-clip-text text-transparent">
                    Karang Taruna Dusun Dagan
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-green-100">
                    Wadah pengembangan generasi muda yang kreatif, inovatif, dan berdaya saing
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#tentang" class="btn-modern-primary">
                        <i class="fas fa-info-circle mr-2"></i>
                        Tentang Kami
                    </a>
                    <a href="#program" class="btn-modern-secondary">
                        <i class="fas fa-tasks mr-2"></i>
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
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Tentang Karang Taruna</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Karang Taruna adalah organisasi kepemudaan yang berfungsi sebagai wadah pengembangan generasi muda di tingkat desa/kelurahan yang tumbuh atas dasar kesadaran dan rasa tanggung jawab sosial dari, oleh, dan untuk masyarakat khususnya generasi muda di wilayah desa/kelurahan.
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
                            <p class="text-gray-700">Mewujudkan generasi muda Dusun Dagan yang mandiri, kreatif, inovatif, dan berdaya saing dalam membangun desa yang maju dan sejahtera.</p>
                        </div>
                        
                        <div class="bg-emerald-50 p-6 rounded-lg border border-emerald-200">
                            <h4 class="text-xl font-semibold text-emerald-800 mb-3">
                                <i class="fas fa-bullseye text-emerald-600 mr-2"></i>
                                Misi
                            </h4>
                            <ul class="text-gray-700 space-y-2">
                                <li>• Mengembangkan potensi dan kreativitas pemuda</li>
                                <li>• Meningkatkan kualitas sumber daya manusia</li>
                                <li>• Membangun jiwa kewirausahaan pemuda</li>
                                <li>• Mengembangkan kegiatan sosial kemasyarakatan</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="text-center p-6 bg-teal-50 rounded-lg border border-teal-200">
                        <div class="text-4xl font-bold text-teal-600 mb-2">45</div>
                        <p class="text-gray-700">Anggota Aktif</p>
                    </div>
                    <div class="text-center p-6 bg-green-50 rounded-lg border border-green-200">
                        <div class="text-4xl font-bold text-green-600 mb-2">8</div>
                        <p class="text-gray-700">Program Rutin</p>
                    </div>
                    <div class="text-center p-6 bg-emerald-50 rounded-lg border border-emerald-200">
                        <div class="text-4xl font-bold text-emerald-600 mb-2">15-25</div>
                        <p class="text-gray-700">Rentang Usia</p>
                    </div>
                    <div class="text-center p-6 bg-teal-50 rounded-lg border border-teal-200">
                        <div class="text-4xl font-bold text-teal-600 mb-2">5</div>
                        <p class="text-gray-700">Divisi Kerja</p>
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
                <p class="text-lg text-gray-600">Berbagai program unggulan Karang Taruna Dusun Dagan</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg border border-green-200">
                    <div class="text-green-600 text-3xl mb-4">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Pendidikan & Pelatihan</h3>
                    <p class="text-gray-600 mb-4">Program pelatihan keterampilan, komputer, bahasa Inggris, dan pengembangan soft skills.</p>
                    <div class="text-sm text-green-600">
                        <i class="fas fa-calendar mr-1"></i>
                        Setiap Sabtu & Minggu
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg border border-emerald-200">
                    <div class="text-emerald-600 text-3xl mb-4">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Pemberdayaan Ekonomi</h3>
                    <p class="text-gray-600 mb-4">Pengembangan UMKM, pelatihan wirausaha, dan program ekonomi kreatif pemuda.</p>
                    <div class="text-sm text-emerald-600">
                        <i class="fas fa-calendar mr-1"></i>
                        Program Bulanan
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg border border-teal-200">
                    <div class="text-teal-600 text-3xl mb-4">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Bakti Sosial</h3>
                    <p class="text-gray-600 mb-4">Kegiatan sosial seperti donor darah, bersih-bersih lingkungan, dan bantuan bencana.</p>
                    <div class="text-sm text-teal-600">
                        <i class="fas fa-calendar mr-1"></i>
                        Setiap 3 Bulan
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg border border-green-200">
                    <div class="text-green-600 text-3xl mb-4">
                        <i class="fas fa-futbol"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Olahraga & Seni</h3>
                    <p class="text-gray-600 mb-4">Turnamen sepak bola, voli, dan kegiatan seni budaya untuk pemuda.</p>
                    <div class="text-sm text-green-600">
                        <i class="fas fa-calendar mr-1"></i>
                        Setiap Minggu
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg border border-emerald-200">
                    <div class="text-emerald-600 text-3xl mb-4">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Teknologi Digital</h3>
                    <p class="text-gray-600 mb-4">Pelatihan digital marketing, desain grafis, dan pengembangan website.</p>
                    <div class="text-sm text-emerald-600">
                        <i class="fas fa-calendar mr-1"></i>
                        Program Mingguan
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg border border-teal-200">
                    <div class="text-teal-600 text-3xl mb-4">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Networking</h3>
                    <p class="text-gray-600 mb-4">Kunjungan ke Karang Taruna lain dan kerjasama dengan berbagai lembaga.</p>
                    <div class="text-sm text-teal-600">
                        <i class="fas fa-calendar mr-1"></i>
                        Program Triwulan
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Structure Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Struktur Organisasi</h2>
                <p class="text-lg text-gray-600">Pengurus Karang Taruna Dusun Dagan periode 2024-2026</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-green-500 to-green-600 text-white p-8 rounded-lg text-center">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-crown"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Ketua</h3>
                    <p class="text-green-100">Ahmad Fauzi</p>
                    <p class="text-sm text-green-200 mt-2">Usia 24 tahun</p>
                </div>
                
                <div class="bg-gradient-to-br from-emerald-500 to-emerald-600 text-white p-8 rounded-lg text-center">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Wakil Ketua</h3>
                    <p class="text-emerald-100">Siti Nurhaliza</p>
                    <p class="text-sm text-emerald-200 mt-2">Usia 22 tahun</p>
                </div>
                
                <div class="bg-gradient-to-br from-teal-500 to-teal-600 text-white p-8 rounded-lg text-center">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Sekretaris</h3>
                    <p class="text-teal-100">Muhammad Rizki</p>
                    <p class="text-sm text-teal-200 mt-2">Usia 23 tahun</p>
                </div>
                
                <div class="bg-gradient-to-br from-green-500 to-green-600 text-white p-8 rounded-lg text-center">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Bendahara</h3>
                    <p class="text-green-100">Dewi Sartika</p>
                    <p class="text-sm text-green-200 mt-2">Usia 21 tahun</p>
                </div>
                
                <div class="bg-gradient-to-br from-emerald-500 to-emerald-600 text-white p-8 rounded-lg text-center">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Divisi Organisasi</h3>
                    <p class="text-emerald-100">Budi Santoso</p>
                    <p class="text-sm text-emerald-200 mt-2">Usia 25 tahun</p>
                </div>
                
                <div class="bg-gradient-to-br from-teal-500 to-teal-600 text-white p-8 rounded-lg text-center">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Divisi Humas</h3>
                    <p class="text-teal-100">Nina Safitri</p>
                    <p class="text-sm text-teal-200 mt-2">Usia 20 tahun</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievements Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Prestasi & Pencapaian</h2>
                <p class="text-lg text-gray-600">Berbagai prestasi yang telah diraih Karang Taruna Dusun Dagan</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg">
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
                                <h4 class="font-semibold text-gray-800">Juara 1 Turnamen Sepak Bola</h4>
                                <p class="text-gray-600">Tingkat Kecamatan</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-green-50 rounded-lg">
                            <div class="text-green-600 text-xl mr-4">
                                <i class="fas fa-award"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Karang Taruna Terbaik</h4>
                                <p class="text-gray-600">Tingkat Kabupaten</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-blue-50 rounded-lg">
                            <div class="text-blue-600 text-xl mr-4">
                                <i class="fas fa-star"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Program Inovatif</h4>
                                <p class="text-gray-600">Digital Marketing Training</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-lg">
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
                                <h4 class="font-semibold text-gray-800">Peningkatan Anggota</h4>
                                <p class="text-gray-600">Target 60 anggota aktif</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-orange-50 rounded-lg">
                            <div class="text-orange-600 text-xl mr-4">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Program Baru</h4>
                                <p class="text-gray-600">Startup Incubator</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-red-50 rounded-lg">
                            <div class="text-red-600 text-xl mr-4">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Kerjasama</h4>
                                <p class="text-gray-600">Dengan 10 lembaga</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Bergabung Bersama Kami</h2>
                <p class="text-lg text-gray-600">Mari bergabung dengan Karang Taruna Dusun Dagan untuk mengembangkan potensi diri</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="bg-green-50 p-8 rounded-lg border border-green-200">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">
                        <i class="fas fa-info-circle text-green-600 mr-3"></i>
                        Informasi Pendaftaran
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <i class="fas fa-user-plus text-green-600 mr-3"></i>
                            <span class="text-gray-600">Usia 15-25 tahun</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-home text-green-600 mr-3"></i>
                            <span class="text-gray-600">Warga Dusun Dagan</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-calendar text-green-600 mr-3"></i>
                            <span class="text-gray-600">Pendaftaran Terbuka</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-emerald-50 p-8 rounded-lg border border-emerald-200">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">
                        <i class="fas fa-phone text-emerald-600 mr-3"></i>
                        Kontak Kami
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <i class="fas fa-phone text-emerald-600 mr-3"></i>
                            <span class="text-gray-600">0812-3456-7890</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-envelope text-emerald-600 mr-3"></i>
                            <span class="text-gray-600">karangtaruna@dusundagan.com</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-map-marker-alt text-emerald-600 mr-3"></i>
                            <span class="text-gray-600">Balai Dusun Dagan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../../assets/js/main.js"></script>
</body>
</html>

