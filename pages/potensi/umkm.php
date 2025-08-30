<?php
// Include configuration
require_once '../../config/config.php';
// Include parent layout untuk memastikan scrolling berfungsi
include '../../includes/layout.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM Dusun Dagan - Potensi</title>
    <meta name="description" content="Jelajahi berbagai usaha mikro, kecil, dan menengah (UMKM) yang berkembang di Dusun Dagan.">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        'primary-green': '#16a34a',
                        'secondary-green': '#22c55e',
                        'dark-green': '#15803d',
                        'light-green': '#dcfce7',
                    }
                }
            }
        }
    </script>
</head>
<body class="font-inter">
    <!-- Navbar -->
    <?php include '../../includes/navbar.php'; ?>

    <!-- Main Content -->
    <main style="margin-top: 80px;">
        <!-- Hero Section -->
        <section class="bg-gradient-to-br from-green-900 via-green-800 to-emerald-900 text-white py-20">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-4xl mx-auto text-center">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                        UMKM Dusun Dagan
                    </h1>
                    <p class="text-xl text-gray-300 mb-8">
                        Jelajahi berbagai usaha mikro, kecil, dan menengah yang berkembang di Dusun Dagan
                    </p>
                    <div class="flex items-center justify-center space-x-4 text-sm text-gray-400">
                        <span><i class="fas fa-store mr-2"></i>15+ UMKM Aktif</span>
                        <span><i class="fas fa-users mr-2"></i>50+ Pengusaha</span>
                        <span><i class="fas fa-chart-line mr-2"></i>Pertumbuhan 20%</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- UMKM Categories Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                        Kategori UMKM
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <!-- Kerajinan -->
                        <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow">
                            <div class="text-green-600 text-4xl mb-4">
                                <i class="fas fa-hands"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Kerajinan</h3>
                            <p class="text-gray-600 mb-4">
                                Produk kerajinan tangan berkualitas tinggi
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-store mr-2"></i>
                                5 UMKM
                            </div>
                        </div>

                        <!-- Kuliner -->
                        <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow">
                            <div class="text-green-600 text-4xl mb-4">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Kuliner</h3>
                            <p class="text-gray-600 mb-4">
                                Makanan dan minuman tradisional
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-store mr-2"></i>
                                6 UMKM
                            </div>
                        </div>

                        <!-- Pertanian -->
                        <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow">
                            <div class="text-green-600 text-4xl mb-4">
                                <i class="fas fa-seedling"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Pertanian</h3>
                            <p class="text-gray-600 mb-4">
                                Produk pertanian organik berkualitas
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-store mr-2"></i>
                                3 UMKM
                            </div>
                        </div>

                        <!-- Jasa -->
                        <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow">
                            <div class="text-green-600 text-4xl mb-4">
                                <i class="fas fa-tools"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Jasa</h3>
                            <p class="text-gray-600 mb-4">
                                Layanan dan jasa profesional
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-store mr-2"></i>
                                1 UMKM
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured UMKM Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                        UMKM Unggulan
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Batik Sari -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                            <div class="h-48 bg-gradient-to-br from-green-100 to-emerald-100 flex items-center justify-center">
                                <i class="fas fa-palette text-6xl text-green-600"></i>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Batik Sari</h3>
                                <p class="text-green-600 mb-3">Kerajinan Batik</p>
                                <p class="text-gray-600 mb-4">
                                    Batik khas Dusun Dagan dengan motif tradisional yang unik dan berkualitas tinggi.
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="text-sm text-gray-500">
                                        <i class="fas fa-map-marker-alt mr-1"></i>
                                        RT 02
                                    </div>
                                    <div class="text-sm text-green-600 font-semibold">
                                        Rp 150.000 - 500.000
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Warung Makan Sederhana -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                            <div class="h-48 bg-gradient-to-br from-yellow-100 to-orange-100 flex items-center justify-center">
                                <i class="fas fa-utensils text-6xl text-yellow-600"></i>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Warung Makan Sederhana</h3>
                                <p class="text-green-600 mb-3">Kuliner Tradisional</p>
                                <p class="text-gray-600 mb-4">
                                    Makanan tradisional Jawa dengan cita rasa autentik dan harga terjangkau.
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="text-sm text-gray-500">
                                        <i class="fas fa-map-marker-alt mr-1"></i>
                                        Jalan Utama
                                    </div>
                                    <div class="text-sm text-green-600 font-semibold">
                                        Rp 5.000 - 25.000
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tani Makmur -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                            <div class="h-48 bg-gradient-to-br from-green-100 to-emerald-100 flex items-center justify-center">
                                <i class="fas fa-seedling text-6xl text-green-600"></i>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Tani Makmur</h3>
                                <p class="text-green-600 mb-3">Produk Pertanian</p>
                                <p class="text-gray-600 mb-4">
                                    Sayuran dan buah-buahan organik segar langsung dari kebun Dusun Dagan.
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="text-sm text-gray-500">
                                        <i class="fas fa-map-marker-alt mr-1"></i>
                                        RT 03
                                    </div>
                                    <div class="text-sm text-green-600 font-semibold">
                                        Rp 10.000 - 50.000
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kerajinan Bambu -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                            <div class="h-48 bg-gradient-to-br from-brown-100 to-amber-100 flex items-center justify-center">
                                <i class="fas fa-bamboo text-6xl text-amber-600"></i>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Kerajinan Bambu</h3>
                                <p class="text-green-600 mb-3">Kerajinan Tangan</p>
                                <p class="text-gray-600 mb-4">
                                    Produk kerajinan bambu berkualitas tinggi untuk kebutuhan rumah tangga.
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="text-sm text-gray-500">
                                        <i class="fas fa-map-marker-alt mr-1"></i>
                                        RT 01
                                    </div>
                                    <div class="text-sm text-green-600 font-semibold">
                                        Rp 25.000 - 200.000
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kopi Tradisional -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                            <div class="h-48 bg-gradient-to-br from-brown-100 to-amber-100 flex items-center justify-center">
                                <i class="fas fa-coffee text-6xl text-amber-600"></i>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Kopi Tradisional</h3>
                                <p class="text-green-600 mb-3">Minuman Tradisional</p>
                                <p class="text-gray-600 mb-4">
                                    Kopi tradisional dengan racikan khas dan biji kopi pilihan berkualitas.
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="text-sm text-gray-500">
                                        <i class="fas fa-map-marker-alt mr-1"></i>
                                        RT 04
                                    </div>
                                    <div class="text-sm text-green-600 font-semibold">
                                        Rp 3.000 - 15.000
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Jasa Service -->
                        <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                            <div class="h-48 bg-gradient-to-br from-blue-100 to-cyan-100 flex items-center justify-center">
                                <i class="fas fa-tools text-6xl text-blue-600"></i>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Bengkel Sederhana</h3>
                                <p class="text-green-600 mb-3">Jasa Service</p>
                                <p class="text-gray-600 mb-4">
                                    Jasa service motor dan elektronik dengan teknisi berpengalaman.
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="text-sm text-gray-500">
                                        <i class="fas fa-map-marker-alt mr-1"></i>
                                        RT 05
                                    </div>
                                    <div class="text-sm text-green-600 font-semibold">
                                        Rp 20.000 - 100.000
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- UMKM Statistics Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                        Statistik UMKM
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                            <div class="text-4xl font-bold text-green-600 mb-2">15</div>
                            <div class="text-gray-600">Total UMKM</div>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                            <div class="text-4xl font-bold text-green-600 mb-2">50+</div>
                            <div class="text-gray-600">Pengusaha</div>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                            <div class="text-4xl font-bold text-green-600 mb-2">20%</div>
                            <div class="text-gray-600">Pertumbuhan Tahunan</div>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                            <div class="text-4xl font-bold text-green-600 mb-2">4</div>
                            <div class="text-gray-600">Kategori Usaha</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Support Programs Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                        Program Dukungan UMKM
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Training -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-lg border border-green-200">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Pelatihan</h3>
                            <p class="text-gray-600 mb-4">
                                Program pelatihan keterampilan dan manajemen bisnis untuk pengusaha UMKM.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-calendar mr-2"></i>
                                Setiap bulan
                            </div>
                        </div>

                        <!-- Marketing -->
                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 p-6 rounded-lg border border-blue-200">
                            <div class="text-blue-600 text-3xl mb-4">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Pemasaran</h3>
                            <p class="text-gray-600 mb-4">
                                Bantuan pemasaran digital dan offline untuk meningkatkan penjualan.
                            </p>
                            <div class="text-sm text-blue-600">
                                <i class="fas fa-globe mr-2"></i>
                                Online & Offline
                            </div>
                        </div>

                        <!-- Funding -->
                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 p-6 rounded-lg border border-purple-200">
                            <div class="text-purple-600 text-3xl mb-4">
                                <i class="fas fa-hand-holding-usd"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Pendanaan</h3>
                            <p class="text-gray-600 mb-4">
                                Akses ke modal usaha dan program kredit mikro untuk pengembangan bisnis.
                            </p>
                            <div class="text-sm text-purple-600">
                                <i class="fas fa-percentage mr-2"></i>
                                Bunga rendah
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Success Stories Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                        Kisah Sukses
                    </h2>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Story 1 -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex items-start mb-4">
                                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-user text-2xl text-green-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800">Ibu Sari</h3>
                                    <p class="text-green-600">Pemilik Batik Sari</p>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-4">
                                "Dari usaha kecil di rumah, sekarang Batik Sari sudah memiliki 5 karyawan dan 
                                produk kami sudah dipasarkan ke berbagai kota di Jawa Tengah."
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-chart-line mr-2"></i>
                                Pertumbuhan 300% dalam 2 tahun
                            </div>
                        </div>

                        <!-- Story 2 -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex items-start mb-4">
                                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-user text-2xl text-green-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800">Pak Slamet</h3>
                                    <p class="text-green-600">Pemilik Tani Makmur</p>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-4">
                                "Dengan bantuan pelatihan dan modal dari program UMKM, saya bisa mengembangkan 
                                lahan pertanian organik yang sekarang memasok ke restoran-restoran di Klaten."
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-chart-line mr-2"></i>
                                Omset meningkat 200%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-16 bg-gradient-to-r from-green-600 to-emerald-600 text-white">
            <div class="container mx-auto px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold mb-6">Dukung UMKM Dusun Dagan</h2>
                <p class="text-xl mb-8 text-green-100">
                    Beli produk lokal berkualitas dan dukung perekonomian masyarakat Dusun Dagan
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="../contact/telepon.php" class="bg-white text-green-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        <i class="fas fa-phone mr-2"></i>
                        Hubungi UMKM
                    </a>
                    <a href="../profile/peta.php" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-green-600 transition-colors">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        Lihat Lokasi
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include '../../includes/footer.php'; ?>

    <!-- Back to Top Button -->
    <div id="back-to-top" class="back-to-top">
        <i class="fas fa-chevron-up">
            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"/>
            </svg>
        </i>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="../../assets/js/main.js"></script>
</body>
</html>
