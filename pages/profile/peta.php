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
    <title>Peta Dusun Dagan - Profile</title>
    <meta name="description" content="Jelajahi lokasi dan peta Dusun Dagan dengan detail area dan fasilitas yang tersedia.">
    
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
                        Peta Dusun Dagan
                    </h1>
                    <p class="text-xl text-gray-300 mb-8">
                        Jelajahi lokasi strategis dan fasilitas yang tersedia di Dusun Dagan
                    </p>
                    <div class="flex items-center justify-center space-x-4 text-sm text-gray-400">
                        <span><i class="fas fa-map-marker-alt mr-2"></i>Lokasi: Jawa Tengah</span>
                        <span><i class="fas fa-road mr-2"></i>Akses: Jalan Raya</span>
                        <span><i class="fas fa-compass mr-2"></i>Koordinat: -7.1234, 110.5678</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Interactive Map Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                        Peta Interaktif
                    </h2>
                    
                    <!-- Map Container -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
                        <div class="h-96 bg-gradient-to-br from-green-100 to-emerald-100 relative">
                            <!-- Placeholder Map -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="text-center">
                                    <i class="fas fa-map text-6xl text-green-600 mb-4"></i>
                                    <h3 class="text-xl font-bold text-gray-800 mb-2">Peta Dusun Dagan</h3>
                                    <p class="text-gray-600">Peta interaktif akan ditampilkan di sini</p>
                                </div>
                            </div>
                            
                            <!-- Map Legend -->
                            <div class="absolute top-4 right-4 bg-white p-4 rounded-lg shadow-lg">
                                <h4 class="font-bold text-gray-800 mb-3">Legenda</h4>
                                <div class="space-y-2 text-sm">
                                    <div class="flex items-center">
                                        <div class="w-4 h-4 bg-green-500 rounded-full mr-2"></div>
                                        <span>Pusat Dusun</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-4 h-4 bg-blue-500 rounded-full mr-2"></div>
                                        <span>UMKM</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-4 h-4 bg-yellow-500 rounded-full mr-2"></div>
                                        <span>Pertanian</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-4 h-4 bg-red-500 rounded-full mr-2"></div>
                                        <span>Fasilitas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Location Details Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                        Detail Lokasi
                    </h2>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                        <!-- Location Info -->
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-6">Informasi Lokasi</h3>
                            
                            <div class="space-y-6">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                                        <i class="fas fa-map-marker-alt text-green-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 mb-2">Alamat Lengkap</h4>
                                        <p class="text-gray-600">Dusun Dagan, Desa Sukamaju, Kecamatan Wonosari, Kabupaten Klaten, Jawa Tengah</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                        <i class="fas fa-compass text-blue-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 mb-2">Koordinat GPS</h4>
                                        <p class="text-gray-600">Latitude: -7.1234° S<br>Longitude: 110.5678° E</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mr-4">
                                        <i class="fas fa-road text-yellow-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 mb-2">Akses Transportasi</h4>
                                        <p class="text-gray-600">Jalan Raya Wonosari - Klaten, 15 km dari pusat kota Klaten</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                        <i class="fas fa-clock text-purple-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 mb-2">Waktu Tempuh</h4>
                                        <p class="text-gray-600">Dari Klaten: 30 menit dengan motor<br>Dari Solo: 45 menit dengan mobil</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Area Information -->
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-6">Informasi Area</h3>
                            
                            <div class="space-y-6">
                                <div class="bg-gradient-to-r from-green-50 to-emerald-50 p-6 rounded-lg">
                                    <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-ruler-combined mr-2 text-green-600"></i>
                                        Luas Wilayah
                                    </h4>
                                    <div class="grid grid-cols-2 gap-4 text-sm">
                                        <div>
                                            <span class="font-semibold text-gray-700">Total Area:</span><br>
                                            <span class="text-green-600">25 Hektar</span>
                                        </div>
                                        <div>
                                            <span class="font-semibold text-gray-700">Area Terbangun:</span><br>
                                            <span class="text-green-600">15 Hektar</span>
                                        </div>
                                        <div>
                                            <span class="font-semibold text-gray-700">Sawah:</span><br>
                                            <span class="text-green-600">8 Hektar</span>
                                        </div>
                                        <div>
                                            <span class="font-semibold text-gray-700">Ladang:</span><br>
                                            <span class="text-green-600">2 Hektar</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-gradient-to-r from-blue-50 to-cyan-50 p-6 rounded-lg">
                                    <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                                        <i class="fas fa-users mr-2 text-blue-600"></i>
                                        Demografi
                                    </h4>
                                    <div class="grid grid-cols-2 gap-4 text-sm">
                                        <div>
                                            <span class="font-semibold text-gray-700">Jumlah KK:</span><br>
                                            <span class="text-blue-600">125 KK</span>
                                        </div>
                                        <div>
                                            <span class="font-semibold text-gray-700">Total Penduduk:</span><br>
                                            <span class="text-blue-600">500+ Jiwa</span>
                                        </div>
                                        <div>
                                            <span class="font-semibold text-gray-700">Laki-laki:</span><br>
                                            <span class="text-blue-600">260 Jiwa</span>
                                        </div>
                                        <div>
                                            <span class="font-semibold text-gray-700">Perempuan:</span><br>
                                            <span class="text-blue-600">240 Jiwa</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Facilities Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                        Fasilitas & Tempat Penting
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Balai Dusun -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-building"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Balai Dusun</h3>
                            <p class="text-gray-600 mb-4">
                                Pusat administrasi dan pertemuan warga Dusun Dagan.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                Lokasi: Pusat dusun
                            </div>
                        </div>

                        <!-- Masjid -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-mosque"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Masjid Al-Ikhlas</h3>
                            <p class="text-gray-600 mb-4">
                                Tempat ibadah utama dan pusat kegiatan keagamaan.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                Lokasi: Jalan utama
                            </div>
                        </div>

                        <!-- Posyandu -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Posyandu</h3>
                            <p class="text-gray-600 mb-4">
                                Layanan kesehatan untuk ibu dan anak.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                Lokasi: RT 01
                            </div>
                        </div>

                        <!-- Warung -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-store"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Warung Makan</h3>
                            <p class="text-gray-600 mb-4">
                                Tempat makan dan jajanan tradisional.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                Lokasi: Pinggir jalan
                            </div>
                        </div>

                        <!-- Sawah -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-seedling"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Area Sawah</h3>
                            <p class="text-gray-600 mb-4">
                                Lahan pertanian padi dan palawija.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                Lokasi: Selatan dusun
                            </div>
                        </div>

                        <!-- UMKM Center -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-industry"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Sentra UMKM</h3>
                            <p class="text-gray-600 mb-4">
                                Pusat pengembangan usaha mikro dan kecil.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                Lokasi: Barat dusun
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Directions Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                        Cara Menuju Dusun Dagan
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- From Klaten -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-lg border border-green-200">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-map-marker-alt mr-2 text-green-600"></i>
                                Dari Klaten
                            </h3>
                            <ol class="space-y-3 text-gray-600">
                                <li class="flex items-start">
                                    <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-0.5">1</span>
                                    <span>Ambil Jalan Raya Klaten - Wonosari</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-0.5">2</span>
                                    <span>Belok kiri di pertigaan Sukamaju</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-0.5">3</span>
                                    <span>Lanjutkan 2 km ke Dusun Dagan</span>
                                </li>
                            </ol>
                            <div class="mt-4 text-sm text-green-600">
                                <i class="fas fa-clock mr-2"></i>
                                Waktu tempuh: 30 menit
                            </div>
                        </div>

                        <!-- From Solo -->
                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 p-6 rounded-lg border border-blue-200">
                            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>
                                Dari Solo
                            </h3>
                            <ol class="space-y-3 text-gray-600">
                                <li class="flex items-start">
                                    <span class="bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-0.5">1</span>
                                    <span>Ambil Jalan Raya Solo - Klaten</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-0.5">2</span>
                                    <span>Belok kanan ke Jalan Wonosari</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-0.5">3</span>
                                    <span>Ikuti petunjuk ke Dusun Dagan</span>
                                </li>
                            </ol>
                            <div class="mt-4 text-sm text-blue-600">
                                <i class="fas fa-clock mr-2"></i>
                                Waktu tempuh: 45 menit
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-16 bg-gradient-to-r from-green-600 to-emerald-600 text-white">
            <div class="container mx-auto px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold mb-6">Kunjungi Dusun Dagan</h2>
                <p class="text-xl mb-8 text-green-100">
                    Nikmati keindahan alam dan keramahan masyarakat Dusun Dagan
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="../potensi/umkm.php" class="bg-white text-green-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        <i class="fas fa-store mr-2"></i>
                        Lihat UMKM
                    </a>
                    <a href="../contact/alamat-dusun.php" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-green-600 transition-colors">
                        <i class="fas fa-phone mr-2"></i>
                        Hubungi Kami
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
