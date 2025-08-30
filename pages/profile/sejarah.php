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
    <title>Sejarah Dusun Dagan - Profile</title>
    <meta name="description" content="Jelajahi sejarah panjang dan perjalanan Dusun Dagan dari masa lalu hingga sekarang.">
    
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
                        Sejarah Dusun Dagan
                    </h1>
                    <p class="text-xl text-gray-300 mb-8">
                        Mengenal perjalanan panjang dan warisan budaya yang membentuk identitas Dusun Dagan
                    </p>
                    <div class="flex items-center justify-center space-x-4 text-sm text-gray-400">
                        <span><i class="fas fa-calendar-alt mr-2"></i>Didirikan: 1948</span>
                        <span><i class="fas fa-map-marker-alt mr-2"></i>Lokasi: Jawa Tengah</span>
                        <span><i class="fas fa-users mr-2"></i>Penduduk: 500+</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Timeline Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                        Perjalanan Sejarah
                    </h2>
                    
                    <div class="relative">
                        <!-- Timeline Line -->
                        <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-green-200"></div>
                        
                        <!-- Timeline Items -->
                        <div class="space-y-12">
                            <!-- 1948 -->
                            <div class="relative flex items-start">
                                <div class="absolute left-6 w-4 h-4 bg-green-500 rounded-full border-4 border-white shadow-lg"></div>
                                <div class="ml-16">
                                    <div class="bg-white p-6 rounded-lg shadow-lg">
                                        <h3 class="text-xl font-bold text-green-700 mb-2">1948 - Awal Mula</h3>
                                        <p class="text-gray-600 mb-4">
                                            Dusun Dagan didirikan oleh sekelompok keluarga yang mencari tempat tinggal baru. 
                                            Nama "Dagan" diambil dari kata "Dagang" yang mencerminkan semangat kewirausahaan masyarakat.
                                        </p>
                                        <div class="flex items-center text-sm text-gray-500">
                                            <i class="fas fa-map-marker-alt mr-2"></i>
                                            <span>Lokasi awal: Pinggiran sungai</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 1960 -->
                            <div class="relative flex items-start">
                                <div class="absolute left-6 w-4 h-4 bg-green-500 rounded-full border-4 border-white shadow-lg"></div>
                                <div class="ml-16">
                                    <div class="bg-white p-6 rounded-lg shadow-lg">
                                        <h3 class="text-xl font-bold text-green-700 mb-2">1960 - Perkembangan Pertanian</h3>
                                        <p class="text-gray-600 mb-4">
                                            Masyarakat mulai mengembangkan sistem pertanian tradisional dengan sawah dan ladang. 
                                            Teknik irigasi sederhana mulai diterapkan untuk meningkatkan hasil panen.
                                        </p>
                                        <div class="flex items-center text-sm text-gray-500">
                                            <i class="fas fa-seedling mr-2"></i>
                                            <span>Pertanian padi dan palawija</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 1980 -->
                            <div class="relative flex items-start">
                                <div class="absolute left-6 w-4 h-4 bg-green-500 rounded-full border-4 border-white shadow-lg"></div>
                                <div class="ml-16">
                                    <div class="bg-white p-6 rounded-lg shadow-lg">
                                        <h3 class="text-xl font-bold text-green-700 mb-2">1980 - Era Modernisasi</h3>
                                        <p class="text-gray-600 mb-4">
                                            Dusun Dagan mengalami modernisasi dengan masuknya teknologi pertanian, 
                                            pembangunan infrastruktur jalan, dan sistem pendidikan yang lebih baik.
                                        </p>
                                        <div class="flex items-center text-sm text-gray-500">
                                            <i class="fas fa-road mr-2"></i>
                                            <span>Pembangunan infrastruktur</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2000 -->
                            <div class="relative flex items-start">
                                <div class="absolute left-6 w-4 h-4 bg-green-500 rounded-full border-4 border-white shadow-lg"></div>
                                <div class="ml-16">
                                    <div class="bg-white p-6 rounded-lg shadow-lg">
                                        <h3 class="text-xl font-bold text-green-700 mb-2">2000 - Kebangkitan UMKM</h3>
                                        <p class="text-gray-600 mb-4">
                                            Masyarakat mulai mengembangkan usaha mikro, kecil, dan menengah (UMKM). 
                                            Kerajinan tangan, kuliner tradisional, dan produk pertanian mulai dipasarkan.
                                        </p>
                                        <div class="flex items-center text-sm text-gray-500">
                                            <i class="fas fa-store mr-2"></i>
                                            <span>Pertumbuhan UMKM lokal</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 2020 -->
                            <div class="relative flex items-start">
                                <div class="absolute left-6 w-4 h-4 bg-green-500 rounded-full border-4 border-white shadow-lg"></div>
                                <div class="ml-16">
                                    <div class="bg-white p-6 rounded-lg shadow-lg">
                                        <h3 class="text-xl font-bold text-green-700 mb-2">2020 - Era Digital</h3>
                                        <p class="text-gray-600 mb-4">
                                            Dusun Dagan memasuki era digital dengan pengembangan website, 
                                            pemasaran online, dan pelestarian budaya melalui teknologi modern.
                                        </p>
                                        <div class="flex items-center text-sm text-gray-500">
                                            <i class="fas fa-globe mr-2"></i>
                                            <span>Transformasi digital</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cultural Heritage Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                        Warisan Budaya
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Tari Kuda Lumping -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-lg border border-green-200">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-horse"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Tari Kuda Lumping</h3>
                            <p class="text-gray-600 mb-4">
                                Tarian tradisional yang menggambarkan semangat kepahlawanan dan keberanian masyarakat Dusun Dagan.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-calendar mr-2"></i>
                                Dipertunjukkan setiap bulan
                            </div>
                        </div>

                        <!-- Gamelan -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-lg border border-green-200">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-music"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Gamelan Tradisional</h3>
                            <p class="text-gray-600 mb-4">
                                Musik gamelan yang telah diwariskan turun-temurun dan masih dimainkan dalam acara-acara adat.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-users mr-2"></i>
                                Kelompok gamelan aktif
                            </div>
                        </div>

                        <!-- Batik -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-lg border border-green-200">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-palette"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Batik Lokal</h3>
                            <p class="text-gray-600 mb-4">
                                Motif batik khas Dusun Dagan yang menggambarkan kehidupan masyarakat dan alam sekitar.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-hand-holding-heart mr-2"></i>
                                Warisan turun-temurun
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Historical Figures Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                        Tokoh-Tokoh Penting
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Founder -->
                        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                            <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-user-tie text-3xl text-green-600"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Mbah Sastro</h3>
                            <p class="text-green-600 mb-3">Pendiri Dusun Dagan (1948)</p>
                            <p class="text-gray-600 text-sm">
                                Tokoh yang memimpin perpindahan keluarga pertama ke Dusun Dagan dan membangun fondasi masyarakat.
                            </p>
                        </div>

                        <!-- Cultural Leader -->
                        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                            <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-theater-masks text-3xl text-green-600"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Mbah Sari</h3>
                            <p class="text-green-600 mb-3">Pelestari Budaya (1960-1990)</p>
                            <p class="text-gray-600 text-sm">
                                Tokoh yang berperan penting dalam melestarikan dan mengembangkan kesenian tradisional.
                            </p>
                        </div>

                        <!-- Modern Leader -->
                        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                            <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-chart-line text-3xl text-green-600"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Pak Dukuh</h3>
                            <p class="text-green-600 mb-3">Pemimpin Modern (2000-Sekarang)</p>
                            <p class="text-gray-600 text-sm">
                                Pemimpin yang membawa Dusun Dagan ke era modern dengan pengembangan UMKM dan teknologi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-16 bg-gradient-to-r from-green-600 to-emerald-600 text-white">
            <div class="container mx-auto px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold mb-6">Jelajahi Lebih Lanjut</h2>
                <p class="text-xl mb-8 text-green-100">
                    Temukan lebih banyak tentang budaya dan potensi Dusun Dagan
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="../potensi/umkm.php" class="bg-white text-green-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        <i class="fas fa-store mr-2"></i>
                        Lihat UMKM
                    </a>
                    <a href="../profile/budaya.php" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-green-600 transition-colors">
                        <i class="fas fa-theater-masks mr-2"></i>
                        Budaya Lokal
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
