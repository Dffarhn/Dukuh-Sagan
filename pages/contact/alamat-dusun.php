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
    <title>Alamat Dusun Dagan - Contact</title>
    <meta name="description" content="Informasi lengkap alamat dan lokasi Dusun Dagan yang mudah dijangkau.">
    
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
                        Alamat Dusun Dagan
                    </h1>
                    <p class="text-xl text-gray-300 mb-8">
                        Informasi lengkap lokasi dan cara menuju Dusun Dagan
                    </p>
                    <div class="flex items-center justify-center space-x-4 text-sm text-gray-400">
                        <span><i class="fas fa-map-marker-alt mr-2"></i>Jawa Tengah</span>
                        <span><i class="fas fa-road mr-2"></i>Jalan Raya</span>
                        <span><i class="fas fa-compass mr-2"></i>Koordinat GPS</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Address Details Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                        Informasi Alamat Lengkap
                    </h2>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                        <!-- Address Information -->
                        <div class="bg-white p-8 rounded-lg shadow-lg">
                            <h3 class="text-2xl font-bold text-gray-800 mb-6">Detail Alamat</h3>
                            
                            <div class="space-y-6">
                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                                        <i class="fas fa-map-marker-alt text-green-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 mb-2">Alamat Lengkap</h4>
                                        <p class="text-gray-600">
                                            Dusun Dagan, Desa Sukamaju<br>
                                            Kecamatan Wonosari<br>
                                            Kabupaten Klaten<br>
                                            Provinsi Jawa Tengah<br>
                                            Kode Pos: 57473
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                        <i class="fas fa-compass text-blue-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 mb-2">Koordinat GPS</h4>
                                        <p class="text-gray-600">
                                            Latitude: -7.1234° S<br>
                                            Longitude: 110.5678° E<br>
                                            <span class="text-sm text-gray-500">(Koordinat untuk navigasi GPS)</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mr-4">
                                        <i class="fas fa-road text-yellow-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 mb-2">Akses Jalan</h4>
                                        <p class="text-gray-600">
                                            Jalan Raya Wonosari - Klaten<br>
                                            Jalan Aspal (Kondisi Baik)<br>
                                            Lebar Jalan: 6 meter<br>
                                            <span class="text-sm text-gray-500">(Jalan utama yang mudah diakses)</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                        <i class="fas fa-clock text-purple-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 mb-2">Waktu Tempuh</h4>
                                        <p class="text-gray-600">
                                            Dari Klaten: 30 menit (motor)<br>
                                            Dari Solo: 45 menit (mobil)<br>
                                            Dari Yogyakarta: 60 menit (mobil)<br>
                                            <span class="text-sm text-gray-500">(Waktu tempuh normal)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Map and Directions -->
                        <div class="bg-white p-8 rounded-lg shadow-lg">
                            <h3 class="text-2xl font-bold text-gray-800 mb-6">Peta & Petunjuk Arah</h3>
                            
                            <!-- Map Placeholder -->
                            <div class="h-64 bg-gradient-to-br from-green-100 to-emerald-100 rounded-lg mb-6 flex items-center justify-center">
                                <div class="text-center">
                                    <i class="fas fa-map text-4xl text-green-600 mb-2"></i>
                                    <p class="text-gray-600">Peta Interaktif</p>
                                    <p class="text-sm text-gray-500">Akan ditampilkan di sini</p>
                                </div>
                            </div>

                            <!-- Quick Directions -->
                            <div class="space-y-4">
                                <h4 class="font-bold text-gray-800">Petunjuk Arah Singkat:</h4>
                                <div class="space-y-2 text-sm text-gray-600">
                                    <div class="flex items-center">
                                        <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs mr-3">1</span>
                                        <span>Ambil Jalan Raya Klaten - Wonosari</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs mr-3">2</span>
                                        <span>Belok kiri di pertigaan Sukamaju</span>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs mr-3">3</span>
                                        <span>Lanjutkan 2 km ke Dusun Dagan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Transportation Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                        Transportasi & Akses
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Private Vehicle -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-lg border border-green-200">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-car"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Kendaraan Pribadi</h3>
                            <p class="text-gray-600 mb-4">
                                Akses mudah dengan mobil atau motor melalui jalan raya yang sudah beraspal.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-clock mr-2"></i>
                                Waktu: 30-45 menit
                            </div>
                        </div>

                        <!-- Public Transport -->
                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 p-6 rounded-lg border border-blue-200">
                            <div class="text-blue-600 text-3xl mb-4">
                                <i class="fas fa-bus"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Transportasi Umum</h3>
                            <p class="text-gray-600 mb-4">
                                Angkutan umum dari Klaten atau Solo dengan rute yang melewati Wonosari.
                            </p>
                            <div class="text-sm text-blue-600">
                                <i class="fas fa-clock mr-2"></i>
                                Waktu: 45-60 menit
                            </div>
                        </div>

                        <!-- Online Transport -->
                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 p-6 rounded-lg border border-purple-200">
                            <div class="text-purple-600 text-3xl mb-4">
                                <i class="fas fa-motorcycle"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Ojek Online</h3>
                            <p class="text-gray-600 mb-4">
                                Layanan ojek online tersedia dari Klaten dan Solo ke Dusun Dagan.
                            </p>
                            <div class="text-sm text-purple-600">
                                <i class="fas fa-clock mr-2"></i>
                                Waktu: 30-40 menit
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Landmarks Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                        Penanda Lokasi
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Balai Dusun -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-building"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Balai Dusun</h3>
                            <p class="text-gray-600 mb-4">
                                Gedung utama dengan warna hijau yang menjadi pusat administrasi dusun.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                Pusat dusun
                            </div>
                        </div>

                        <!-- Masjid -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-mosque"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Masjid Al-Ikhlas</h3>
                            <p class="text-gray-600 mb-4">
                                Masjid dengan kubah hijau yang terlihat jelas dari jalan utama.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                Jalan utama
                            </div>
                        </div>

                        <!-- Warung -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-store"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Warung Makan</h3>
                            <p class="text-gray-600 mb-4">
                                Warung makan dengan papan nama "Warung Makan Sederhana" di pinggir jalan.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                Pinggir jalan
                            </div>
                        </div>

                        <!-- Sawah -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-seedling"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Area Sawah</h3>
                            <p class="text-gray-600 mb-4">
                                Hamparan sawah hijau yang membentang di sebelah selatan dusun.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                Selatan dusun
                            </div>
                        </div>

                        <!-- UMKM Center -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-industry"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Sentra UMKM</h3>
                            <p class="text-gray-600 mb-4">
                                Bangunan dengan papan nama "Sentra UMKM Dusun Dagan" di sebelah barat.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                Barat dusun
                            </div>
                        </div>

                        <!-- Posyandu -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Posyandu</h3>
                            <p class="text-gray-600 mb-4">
                                Gedung Posyandu dengan warna putih dan hijau di RT 01.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                RT 01
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Information Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                        Informasi Kontak
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Contact Details -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-lg border border-green-200">
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Kontak Langsung</h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-phone mr-3 text-green-600"></i>
                                    <span class="text-gray-600">+62 812-3456-7890</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-envelope mr-3 text-green-600"></i>
                                    <span class="text-gray-600">dusundagan@email.com</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-clock mr-3 text-green-600"></i>
                                    <span class="text-gray-600">Senin - Jumat: 08:00 - 17:00</span>
                                </div>
                            </div>
                        </div>

                        <!-- Emergency Contact -->
                        <div class="bg-gradient-to-br from-red-50 to-pink-50 p-6 rounded-lg border border-red-200">
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Kontak Darurat</h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-ambulance mr-3 text-red-600"></i>
                                    <span class="text-gray-600">118 (Ambulans)</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-fire-extinguisher mr-3 text-red-600"></i>
                                    <span class="text-gray-600">113 (Pemadam Kebakaran)</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-shield-alt mr-3 text-red-600"></i>
                                    <span class="text-gray-600">110 (Polisi)</span>
                                </div>
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
                    <a href="telepon.php" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-green-600 transition-colors">
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
