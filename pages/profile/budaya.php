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
    <title>Budaya Dusun Dagan - Profile</title>
    <meta name="description" content="Jelajahi kekayaan budaya dan kesenian tradisional Dusun Dagan yang telah diwariskan turun-temurun.">
    
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
                        Budaya Dusun Dagan
                    </h1>
                    <p class="text-xl text-gray-300 mb-8">
                        Mengenal kekayaan budaya dan kesenian tradisional yang telah diwariskan turun-temurun
                    </p>
                    <div class="flex items-center justify-center space-x-4 text-sm text-gray-400">
                        <span><i class="fas fa-theater-masks mr-2"></i>Kesenian Tradisional</span>
                        <span><i class="fas fa-music mr-2"></i>Gamelan</span>
                        <span><i class="fas fa-palette mr-2"></i>Batik</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Traditional Dance Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                        Kesenian Tradisional
                    </h2>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <!-- Tari Kuda Lumping -->
                        <div>
                            <div class="bg-white p-8 rounded-lg shadow-lg">
                                <div class="text-green-600 text-4xl mb-6">
                                    <i class="fas fa-horse"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-4">Tari Kuda Lumping</h3>
                                <p class="text-gray-600 mb-6">
                                    Tarian tradisional yang menggambarkan semangat kepahlawanan dan keberanian masyarakat Dusun Dagan. 
                                    Tarian ini menampilkan gerakan yang dinamis dengan properti kuda lumping yang terbuat dari anyaman bambu.
                                </p>
                                <div class="space-y-3 text-sm text-gray-600">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar mr-3 text-green-600"></i>
                                        <span>Dipertunjukkan setiap bulan purnama</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-users mr-3 text-green-600"></i>
                                        <span>Dilakukan oleh 8-12 penari</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-clock mr-3 text-green-600"></i>
                                        <span>Durasi: 30-45 menit</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-map-marker-alt mr-3 text-green-600"></i>
                                        <span>Lokasi: Balai Dusun</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gamelan -->
                        <div>
                            <div class="bg-white p-8 rounded-lg shadow-lg">
                                <div class="text-green-600 text-4xl mb-6">
                                    <i class="fas fa-music"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-4">Gamelan Tradisional</h3>
                                <p class="text-gray-600 mb-6">
                                    Musik gamelan yang telah diwariskan turun-temurun dan masih dimainkan dalam acara-acara adat. 
                                    Set gamelan lengkap terdiri dari gong, kenong, saron, dan instrumen lainnya.
                                </p>
                                <div class="space-y-3 text-sm text-gray-600">
                                    <div class="flex items-center">
                                        <i class="fas fa-users mr-3 text-green-600"></i>
                                        <span>Kelompok gamelan "Sri Budaya"</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar mr-3 text-green-600"></i>
                                        <span>Latihan setiap malam Jumat</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-music mr-3 text-green-600"></i>
                                        <span>Lagu: Gending Jawa klasik</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-map-marker-alt mr-3 text-green-600"></i>
                                        <span>Lokasi: Pendopo Gamelan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Batik Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                        Batik Khas Dusun Dagan
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Motif Sawah -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-lg border border-green-200">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-seedling"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Motif Sawah</h3>
                            <p class="text-gray-600 mb-4">
                                Motif yang menggambarkan keindahan sawah dan kehidupan petani Dusun Dagan.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-palette mr-2"></i>
                                Warna: Hijau, Coklat, Putih
                            </div>
                        </div>

                        <!-- Motif Kuda Lumping -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-lg border border-green-200">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-horse"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Motif Kuda Lumping</h3>
                            <p class="text-gray-600 mb-4">
                                Motif yang terinspirasi dari tarian kuda lumping dengan detail yang rumit.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-palette mr-2"></i>
                                Warna: Hitam, Merah, Emas
                            </div>
                        </div>

                        <!-- Motif Gamelan -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-lg border border-green-200">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-music"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Motif Gamelan</h3>
                            <p class="text-gray-600 mb-4">
                                Motif yang menggambarkan instrumen gamelan dengan pola geometris.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-palette mr-2"></i>
                                Warna: Coklat, Kuning, Putih
                            </div>
                        </div>
                    </div>

                    <!-- Batik Process -->
                    <div class="mt-12 bg-gradient-to-r from-green-50 to-emerald-50 p-8 rounded-lg">
                        <h3 class="text-2xl font-bold text-center mb-8 text-gray-800">
                            Proses Pembuatan Batik
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span class="text-white font-bold text-xl">1</span>
                                </div>
                                <h4 class="font-bold text-gray-800 mb-2">Mencanting</h4>
                                <p class="text-sm text-gray-600">Menggambar pola dengan canting dan malam</p>
                            </div>
                            <div class="text-center">
                                <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span class="text-white font-bold text-xl">2</span>
                                </div>
                                <h4 class="font-bold text-gray-800 mb-2">Mewarnai</h4>
                                <p class="text-sm text-gray-600">Memberikan warna dengan pewarna alami</p>
                            </div>
                            <div class="text-center">
                                <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span class="text-white font-bold text-xl">3</span>
                                </div>
                                <h4 class="font-bold text-gray-800 mb-2">Mengeringkan</h4>
                                <p class="text-sm text-gray-600">Mengeringkan kain di bawah sinar matahari</p>
                            </div>
                            <div class="text-center">
                                <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span class="text-white font-bold text-xl">4</span>
                                </div>
                                <h4 class="font-bold text-gray-800 mb-2">Finishing</h4>
                                <p class="text-sm text-gray-600">Menghilangkan malam dan finishing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cultural Events Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                        Acara Budaya
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Selamatan -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-pray"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Selamatan Dusun</h3>
                            <p class="text-gray-600 mb-4">
                                Acara tradisional untuk memohon keselamatan dan kemakmuran dusun.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-calendar mr-2"></i>
                                Setiap tahun sekali
                            </div>
                        </div>

                        <!-- Festival Budaya -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-star"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Festival Budaya</h3>
                            <p class="text-gray-600 mb-4">
                                Pameran kesenian dan budaya Dusun Dagan untuk masyarakat luas.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-calendar mr-2"></i>
                                Setiap 2 tahun sekali
                            </div>
                        </div>

                        <!-- Pelatihan Budaya -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Pelatihan Budaya</h3>
                            <p class="text-gray-600 mb-4">
                                Program pelatihan untuk generasi muda dalam melestarikan budaya.
                            </p>
                            <div class="text-sm text-green-600">
                                <i class="fas fa-calendar mr-2"></i>
                                Setiap bulan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cultural Figures Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
                        Pelestari Budaya
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Dance Master -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-lg border border-green-200 text-center">
                            <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-horse text-3xl text-green-600"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Mbah Sari</h3>
                            <p class="text-green-600 mb-3">Maestro Tari Kuda Lumping</p>
                            <p class="text-gray-600 text-sm">
                                Pelatih tari kuda lumpung yang telah melatih lebih dari 100 penari selama 30 tahun.
                            </p>
                        </div>

                        <!-- Gamelan Master -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-lg border border-green-200 text-center">
                            <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-music text-3xl text-green-600"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Pak Slamet</h3>
                            <p class="text-green-600 mb-3">Pemimpin Gamelan</p>
                            <p class="text-gray-600 text-sm">
                                Pemimpin kelompok gamelan yang ahli dalam berbagai gending Jawa klasik.
                            </p>
                        </div>

                        <!-- Batik Master -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-lg border border-green-200 text-center">
                            <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-palette text-3xl text-green-600"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Ibu Siti</h3>
                            <p class="text-green-600 mb-3">Maestro Batik</p>
                            <p class="text-gray-600 text-sm">
                                Pengrajin batik yang menciptakan motif-motif khas Dusun Dagan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cultural Preservation Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl font-bold mb-8 text-gray-800">
                        Pelestarian Budaya
                    </h2>
                    <p class="text-xl text-gray-600 mb-8">
                        Dusun Dagan berkomitmen untuk melestarikan dan mengembangkan budaya tradisional 
                        melalui berbagai program dan kegiatan yang melibatkan seluruh masyarakat.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Pendidikan</h3>
                            <p class="text-gray-600">
                                Program pelatihan budaya untuk generasi muda dan anak-anak.
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Pertunjukan</h3>
                            <p class="text-gray-600">
                                Acara rutin untuk menampilkan kesenian tradisional.
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="text-green-600 text-3xl mb-4">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Kolaborasi</h3>
                            <p class="text-gray-600">
                                Kerjasama dengan pihak lain untuk pengembangan budaya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-16 bg-gradient-to-r from-green-600 to-emerald-600 text-white">
            <div class="container mx-auto px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold mb-6">Jelajahi Budaya Dusun Dagan</h2>
                <p class="text-xl mb-8 text-green-100">
                    Nikmati pertunjukan kesenian dan beli produk budaya khas Dusun Dagan
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="../potensi/umkm.php" class="bg-white text-green-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        <i class="fas fa-store mr-2"></i>
                        Beli Produk Budaya
                    </a>
                    <a href="../contact/telepon.php" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-green-600 transition-colors">
                        <i class="fas fa-phone mr-2"></i>
                        Pesan Pertunjukan
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
