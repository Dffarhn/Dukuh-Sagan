<?php include '../../includes/layout.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jakawarga - Dusun Dagan</title>
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
                    <i class="fas fa-shield-alt mr-2"></i>
                    Keamanan & Ketertiban
                </div>
                <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-green-400 via-emerald-400 to-teal-400 bg-clip-text text-transparent">
                    Jakawarga Dusun Dagan
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-green-100">
                    Menjaga keamanan dan ketertiban masyarakat untuk lingkungan yang aman dan nyaman
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#tentang" class="btn-modern-primary">
                        <i class="fas fa-info-circle mr-2"></i>
                        Tentang Kami
                    </a>
                    <a href="#layanan" class="btn-modern-secondary">
                        <i class="fas fa-shield mr-2"></i>
                        Layanan Keamanan
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
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Tentang Jakawarga</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Jakawarga (Jaga Keamanan Warga) adalah organisasi keamanan swakarsa yang dibentuk oleh masyarakat untuk membantu menjaga keamanan dan ketertiban di lingkungan Dusun Dagan.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Tugas & Fungsi</h3>
                    <div class="space-y-6">
                        <div class="bg-green-50 p-6 rounded-lg border border-green-200">
                            <h4 class="text-xl font-semibold text-green-800 mb-3">
                                <i class="fas fa-eye text-green-600 mr-2"></i>
                                Pengawasan
                            </h4>
                            <p class="text-gray-700">Melakukan pengawasan terhadap aktivitas mencurigakan dan potensi gangguan keamanan di lingkungan.</p>
                        </div>
                        
                        <div class="bg-emerald-50 p-6 rounded-lg border border-emerald-200">
                            <h4 class="text-xl font-semibold text-emerald-800 mb-3">
                                <i class="fas fa-phone text-emerald-600 mr-2"></i>
                                Pelaporan
                            </h4>
                            <p class="text-gray-700">Melaporkan kejadian-kejadian yang mengganggu keamanan kepada aparat berwenang.</p>
                        </div>
                        
                        <div class="bg-teal-50 p-6 rounded-lg border border-teal-200">
                            <h4 class="text-xl font-semibold text-teal-800 mb-3">
                                <i class="fas fa-users text-teal-600 mr-2"></i>
                                Sosialisasi
                            </h4>
                            <p class="text-gray-700">Menyosialisasikan pentingnya keamanan lingkungan kepada warga masyarakat.</p>
                        </div>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="text-center p-6 bg-teal-50 rounded-lg border border-teal-200">
                        <div class="text-4xl font-bold text-teal-600 mb-2">12</div>
                        <p class="text-gray-700">Anggota Aktif</p>
                    </div>
                    <div class="text-center p-6 bg-green-50 rounded-lg border border-green-200">
                        <div class="text-4xl font-bold text-green-600 mb-2">24/7</div>
                        <p class="text-gray-700">Pelayanan</p>
                    </div>
                    <div class="text-center p-6 bg-emerald-50 rounded-lg border border-emerald-200">
                        <div class="text-4xl font-bold text-emerald-600 mb-2">4</div>
                        <p class="text-gray-700">Pos Keamanan</p>
                    </div>
                    <div class="text-center p-6 bg-teal-50 rounded-lg border border-teal-200">
                        <div class="text-4xl font-bold text-teal-600 mb-2">0</div>
                        <p class="text-gray-700">Kasus 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="layanan" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Layanan Keamanan</h2>
                <p class="text-lg text-gray-600">Berbagai layanan keamanan yang disediakan Jakawarga Dusun Dagan</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg border border-green-200">
                    <div class="text-green-600 text-3xl mb-4">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Ronda Malam</h3>
                    <p class="text-gray-600 mb-4">Patroli keamanan malam hari untuk memastikan keamanan lingkungan.</p>
                    <div class="text-sm text-green-600">
                        <i class="fas fa-calendar mr-1"></i>
                        Setiap Malam
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg border border-emerald-200">
                    <div class="text-emerald-600 text-3xl mb-4">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Hotline Darurat</h3>
                    <p class="text-gray-600 mb-4">Layanan telepon darurat 24 jam untuk melaporkan kejadian mencurigakan.</p>
                    <div class="text-sm text-emerald-600">
                        <i class="fas fa-clock mr-1"></i>
                        24 Jam
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg border border-teal-200">
                    <div class="text-teal-600 text-3xl mb-4">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Pos Keamanan</h3>
                    <p class="text-gray-600 mb-4">Pos keamanan strategis untuk monitoring dan koordinasi petugas.</p>
                    <div class="text-sm text-teal-600">
                        <i class="fas fa-map mr-1"></i>
                        4 Lokasi
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg border border-green-200">
                    <div class="text-green-600 text-3xl mb-4">
                        <i class="fas fa-car"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Patroli Motor</h3>
                    <p class="text-gray-600 mb-4">Patroli menggunakan motor untuk cakupan area yang lebih luas.</p>
                    <div class="text-sm text-green-600">
                        <i class="fas fa-calendar mr-1"></i>
                        Siang & Malam
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg border border-emerald-200">
                    <div class="text-emerald-600 text-3xl mb-4">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Pelatihan Keamanan</h3>
                    <p class="text-gray-600 mb-4">Pelatihan dasar keamanan dan penanganan situasi darurat.</p>
                    <div class="text-sm text-emerald-600">
                        <i class="fas fa-calendar mr-1"></i>
                        Bulanan
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg border border-teal-200">
                    <div class="text-teal-600 text-3xl mb-4">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Koordinasi Aparat</h3>
                    <p class="text-gray-600 mb-4">Koordinasi dengan kepolisian dan aparat keamanan lainnya.</p>
                    <div class="text-sm text-teal-600">
                        <i class="fas fa-calendar mr-1"></i>
                        Rutin
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
                <p class="text-lg text-gray-600">Pengurus Jakawarga Dusun Dagan periode 2024-2026</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gradient-to-br from-green-500 to-green-600 text-white p-8 rounded-lg text-center">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Ketua</h3>
                    <p class="text-green-100">Pak Slamet</p>
                    <p class="text-sm text-green-200 mt-2">RT 01</p>
                </div>
                
                <div class="bg-gradient-to-br from-emerald-500 to-emerald-600 text-white p-8 rounded-lg text-center">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Wakil Ketua</h3>
                    <p class="text-emerald-100">Pak Joko</p>
                    <p class="text-sm text-emerald-200 mt-2">RT 02</p>
                </div>
                
                <div class="bg-gradient-to-br from-teal-500 to-teal-600 text-white p-8 rounded-lg text-center">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Sekretaris</h3>
                    <p class="text-teal-100">Pak Bambang</p>
                    <p class="text-sm text-teal-200 mt-2">RT 03</p>
                </div>
                
                <div class="bg-gradient-to-br from-green-500 to-green-600 text-white p-8 rounded-lg text-center">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Bendahara</h3>
                    <p class="text-green-100">Pak Suryo</p>
                    <p class="text-sm text-green-200 mt-2">RT 04</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Security Posts Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Pos Keamanan</h2>
                <p class="text-lg text-gray-600">Lokasi-lokasi pos keamanan strategis di Dusun Dagan</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">
                        <i class="fas fa-map-marker-alt text-green-600 mr-3"></i>
                        Pos Keamanan Utara
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center p-4 bg-green-50 rounded-lg">
                            <div class="text-green-600 text-xl mr-4">
                                <i class="fas fa-location-arrow"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Lokasi</h4>
                                <p class="text-gray-600">Pertigaan Jalan Utama</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-emerald-50 rounded-lg">
                            <div class="text-emerald-600 text-xl mr-4">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Jam Operasional</h4>
                                <p class="text-gray-600">18:00 - 06:00 WIB</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-teal-50 rounded-lg">
                            <div class="text-teal-600 text-xl mr-4">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Petugas</h4>
                                <p class="text-gray-600">2 orang per shift</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">
                        <i class="fas fa-map-marker-alt text-emerald-600 mr-3"></i>
                        Pos Keamanan Selatan
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center p-4 bg-green-50 rounded-lg">
                            <div class="text-green-600 text-xl mr-4">
                                <i class="fas fa-location-arrow"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Lokasi</h4>
                                <p class="text-gray-600">Depan Balai Dusun</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-emerald-50 rounded-lg">
                            <div class="text-emerald-600 text-xl mr-4">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Jam Operasional</h4>
                                <p class="text-gray-600">18:00 - 06:00 WIB</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-teal-50 rounded-lg">
                            <div class="text-teal-600 text-xl mr-4">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Petugas</h4>
                                <p class="text-gray-600">2 orang per shift</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Pencapaian Keamanan</h2>
                <p class="text-lg text-gray-600">Data keamanan Dusun Dagan tahun 2024</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-green-600 mb-2">0</div>
                    <p class="text-gray-600">Pencurian</p>
                </div>
                
                <div class="text-center">
                    <div class="text-4xl font-bold text-emerald-600 mb-2">0</div>
                    <p class="text-gray-600">Perampokan</p>
                </div>
                
                <div class="text-center">
                    <div class="text-4xl font-bold text-teal-600 mb-2">365</div>
                    <p class="text-gray-600">Hari Aman</p>
                </div>
                
                <div class="text-center">
                    <div class="text-4xl font-bold text-green-600 mb-2">100%</div>
                    <p class="text-gray-600">Warga Puas</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Hubungi Jakawarga</h2>
                <p class="text-lg text-gray-600">Untuk melaporkan kejadian mencurigakan atau informasi keamanan</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">
                        <i class="fas fa-phone text-green-600 mr-3"></i>
                        Hotline Darurat
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center p-4 bg-red-50 rounded-lg">
                            <div class="text-red-600 text-xl mr-4">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Darurat 24 Jam</h4>
                                <p class="text-gray-600">0812-3456-7890</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-green-50 rounded-lg">
                            <div class="text-green-600 text-xl mr-4">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Ketua Jakawarga</h4>
                                <p class="text-gray-600">0812-3456-7891</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-emerald-50 rounded-lg">
                            <div class="text-emerald-600 text-xl mr-4">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Polsek</h4>
                                <p class="text-gray-600">(0274) 123456</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">
                        <i class="fas fa-info-circle text-emerald-600 mr-3"></i>
                        Informasi Tambahan
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center p-4 bg-blue-50 rounded-lg">
                            <div class="text-blue-600 text-xl mr-4">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Jam Ronda</h4>
                                <p class="text-gray-600">19:00 - 05:00 WIB</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-purple-50 rounded-lg">
                            <div class="text-purple-600 text-xl mr-4">
                                <i class="fas fa-users"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Sistem Ronda</h4>
                                <p class="text-gray-600">Bergilir per RT</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-orange-50 rounded-lg">
                            <div class="text-orange-600 text-xl mr-4">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Laporan Darurat</h4>
                                <p class="text-gray-600">Langsung ke hotline</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../../assets/js/main.js"></script>
</body>
</html>

