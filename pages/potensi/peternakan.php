<?php
require_once '../../config/config.php';
// Include parent layout untuk memastikan scrolling berfungsi
include '../../includes/layout.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peternakan - Dusun Dagan</title>
    <meta name="description" content="Informasi lengkap tentang sektor peternakan di Dusun Dagan, termasuk jenis ternak, manajemen, dan program dukungan.">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Peternakan - Dusun Dagan">
    <meta property="og:description" content="Informasi lengkap tentang sektor peternakan di Dusun Dagan, termasuk jenis ternak, manajemen, dan program dukungan.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $base_url; ?>/pages/potensi/peternakan.php">
    <meta property="og:image" content="<?php echo $base_url; ?>/assets/images/logo.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Peternakan - Dusun Dagan">
    <meta name="twitter:description" content="Informasi lengkap tentang sektor peternakan di Dusun Dagan, termasuk jenis ternak, manajemen, dan program dukungan.">
    <meta name="twitter:image" content="<?php echo $base_url; ?>/assets/images/logo.png">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body class="bg-gray-50">
    <?php include '../../includes/navbar.php'; ?>
    
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-green-600 via-green-700 to-green-800 text-white py-20 overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="absolute inset-0">
            <div class="absolute top-10 left-10 w-20 h-20 bg-white opacity-10 rounded-full animate-pulse"></div>
            <div class="absolute top-20 right-20 w-16 h-16 bg-white opacity-10 rounded-full animate-pulse delay-1000"></div>
            <div class="absolute bottom-10 left-1/4 w-12 h-12 bg-white opacity-10 rounded-full animate-pulse delay-2000"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center px-4 py-2 bg-white bg-opacity-20 rounded-full text-sm font-medium mb-6">
                    <i class="fas fa-cow mr-2"></i>
                    Sektor Peternakan
                </div>
                
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Peternakan
                    <span class="block text-green-200">Dusun Dagan</span>
                </h1>
                
                <p class="text-xl md:text-2xl text-green-100 mb-8 max-w-3xl mx-auto">
                    Mengembangkan sektor peternakan yang berkelanjutan dan menguntungkan untuk kesejahteraan masyarakat
                </p>
                
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#overview" class="bg-white text-green-700 px-8 py-3 rounded-full font-semibold hover:bg-green-50 transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-info-circle mr-2"></i>
                        Pelajari Lebih Lanjut
                    </a>
                    <a href="#contact" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-green-700 transition-all duration-300">
                        <i class="fas fa-phone mr-2"></i>
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section id="overview" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Gambaran Umum Peternakan
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Sektor peternakan di Dusun Dagan merupakan salah satu sumber penghasilan utama masyarakat yang dikelola secara tradisional dan modern.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">
                            Potensi Peternakan
                        </h3>
                        <p class="text-gray-600 mb-6">
                            Dusun Dagan memiliki lahan yang cukup luas untuk pengembangan peternakan dengan kondisi alam yang mendukung. Masyarakat telah mengembangkan berbagai jenis ternak yang sesuai dengan kondisi lokal.
                        </p>
                        
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3 text-xl"></i>
                                <span class="text-gray-700">Lahan yang subur dan luas</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3 text-xl"></i>
                                <span class="text-gray-700">Sumber air yang melimpah</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3 text-xl"></i>
                                <span class="text-gray-700">Iklim yang mendukung</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3 text-xl"></i>
                                <span class="text-gray-700">SDM yang berpengalaman</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-2xl">
                        <h4 class="text-xl font-bold text-gray-800 mb-4">Statistik Peternakan</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-green-600">150+</div>
                                <div class="text-sm text-gray-600">Kepala Sapi</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-green-600">300+</div>
                                <div class="text-sm text-gray-600">Kambing</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-green-600">500+</div>
                                <div class="text-sm text-gray-600">Ayam</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-green-600">50+</div>
                                <div class="text-sm text-gray-600">Peternak</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Types of Livestock -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Jenis Ternak yang Dikembangkan
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Berbagai jenis ternak yang dikembangkan sesuai dengan potensi dan kebutuhan pasar lokal.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Sapi -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-center mb-6">
                        <i class="fas fa-cow text-6xl text-green-600 mb-4"></i>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Sapi</h3>
                        <p class="text-gray-600">Ternak utama untuk daging dan susu</p>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Jumlah:</span>
                            <span class="font-semibold">150+ ekor</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Jenis:</span>
                            <span class="font-semibold">Sapi Bali, Limosin</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Produksi:</span>
                            <span class="font-semibold">Daging & Susu</span>
                        </div>
                    </div>
                </div>
                
                <!-- Kambing -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-center mb-6">
                        <i class="fas fa-sheep text-6xl text-green-600 mb-4"></i>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Kambing</h3>
                        <p class="text-gray-600">Ternak untuk daging dan susu</p>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Jumlah:</span>
                            <span class="font-semibold">300+ ekor</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Jenis:</span>
                            <span class="font-semibold">Kambing Kacang, Etawa</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Produksi:</span>
                            <span class="font-semibold">Daging & Susu</span>
                        </div>
                    </div>
                </div>
                
                <!-- Ayam -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-center mb-6">
                        <i class="fas fa-kiwi-bird text-6xl text-green-600 mb-4"></i>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Ayam</h3>
                        <p class="text-gray-600">Unggas untuk telur dan daging</p>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Jumlah:</span>
                            <span class="font-semibold">500+ ekor</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Jenis:</span>
                            <span class="font-semibold">Ayam Kampung, Broiler</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Produksi:</span>
                            <span class="font-semibold">Telur & Daging</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Management Practices -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Praktik Manajemen Peternakan
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Menggunakan kombinasi metode tradisional dan modern untuk hasil yang optimal.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-seedling text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Pakan Berkualitas</h3>
                    <p class="text-gray-600">Menggunakan pakan alami dan suplemen untuk kesehatan ternak</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-tint text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Sanitasi</h3>
                    <p class="text-gray-600">Menjaga kebersihan kandang dan lingkungan ternak</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heartbeat text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Kesehatan</h3>
                    <p class="text-gray-600">Vaksinasi dan pemeriksaan kesehatan rutin</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-chart-line text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Monitoring</h3>
                    <p class="text-gray-600">Pemantauan pertumbuhan dan produktivitas ternak</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Calendar Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Kalender Peternakan
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Jadwal kegiatan peternakan sepanjang tahun untuk hasil yang optimal.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Musim Kemarau (April - Oktober)</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="bg-green-100 p-2 rounded-full mr-4">
                                    <i class="fas fa-calendar text-green-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Persiapan Pakan</h4>
                                    <p class="text-gray-600 text-sm">Menyiapkan pakan kering dan suplemen</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-green-100 p-2 rounded-full mr-4">
                                    <i class="fas fa-calendar text-green-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Pengelolaan Air</h4>
                                    <p class="text-gray-600 text-sm">Memastikan ketersediaan air untuk ternak</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-green-100 p-2 rounded-full mr-4">
                                    <i class="fas fa-calendar text-green-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Vaksinasi</h4>
                                    <p class="text-gray-600 text-sm">Program vaksinasi rutin</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Musim Hujan (November - Maret)</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="bg-green-100 p-2 rounded-full mr-4">
                                    <i class="fas fa-calendar text-green-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Pakan Hijauan</h4>
                                    <p class="text-gray-600 text-sm">Ketersediaan pakan hijauan melimpah</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-green-100 p-2 rounded-full mr-4">
                                    <i class="fas fa-calendar text-green-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Pemijahan</h4>
                                    <p class="text-gray-600 text-sm">Masa pemijahan optimal</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-green-100 p-2 rounded-full mr-4">
                                    <i class="fas fa-calendar text-green-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Panen</h4>
                                    <p class="text-gray-600 text-sm">Panen hasil peternakan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Programs -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Program Dukungan Peternakan
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Berbagai program untuk mendukung pengembangan sektor peternakan di Dusun Dagan.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8">
                    <div class="text-center mb-6">
                        <i class="fas fa-graduation-cap text-4xl text-green-600 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Pelatihan Peternak</h3>
                    </div>
                    <p class="text-gray-600 text-center">
                        Program pelatihan teknik peternakan modern, manajemen kesehatan ternak, dan pengolahan hasil peternakan.
                    </p>
                </div>
                
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8">
                    <div class="text-center mb-6">
                        <i class="fas fa-hand-holding-usd text-4xl text-green-600 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Bantuan Modal</h3>
                    </div>
                    <p class="text-gray-600 text-center">
                        Bantuan modal usaha untuk pengembangan peternakan, termasuk pembelian ternak dan peralatan.
                    </p>
                </div>
                
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8">
                    <div class="text-center mb-6">
                        <i class="fas fa-truck text-4xl text-green-600 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Pemasaran</h3>
                    </div>
                    <p class="text-gray-600 text-center">
                        Fasilitas pemasaran hasil peternakan ke pasar lokal dan regional dengan harga yang menguntungkan.
                    </p>
                </div>
                
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8">
                    <div class="text-center mb-6">
                        <i class="fas fa-user-md text-4xl text-green-600 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Layanan Veteriner</h3>
                    </div>
                    <p class="text-gray-600 text-center">
                        Layanan kesehatan ternak rutin, vaksinasi, dan pengobatan penyakit ternak.
                    </p>
                </div>
                
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8">
                    <div class="text-center mb-6">
                        <i class="fas fa-database text-4xl text-green-600 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Sistem Informasi</h3>
                    </div>
                    <p class="text-gray-600 text-center">
                        Sistem informasi peternakan untuk monitoring, evaluasi, dan pengambilan keputusan.
                    </p>
                </div>
                
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8">
                    <div class="text-center mb-6">
                        <i class="fas fa-users text-4xl text-green-600 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Kelompok Tani</h3>
                    </div>
                    <p class="text-gray-600 text-center">
                        Pembentukan dan penguatan kelompok tani ternak untuk peningkatan kapasitas dan bargaining power.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-r from-green-600 to-green-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Tertarik dengan Peternakan Dusun Dagan?
            </h2>
            <p class="text-xl text-green-100 mb-8 max-w-2xl mx-auto">
                Bergabunglah dengan kami dalam mengembangkan sektor peternakan yang berkelanjutan dan menguntungkan.
            </p>
            
            <div class="flex flex-wrap justify-center gap-4">
                <a href="../../pages/contact/telepon.php" class="bg-white text-green-700 px-8 py-3 rounded-full font-semibold hover:bg-green-50 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-phone mr-2"></i>
                    Hubungi Kami
                </a>
                <a href="../../pages/contact/alamat-dusun.php" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-green-700 transition-all duration-300">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    Kunjungi Kami
                </a>
            </div>
        </div>
    </section>

    <?php include '../../includes/footer.php'; ?>
    
    <!-- Custom JavaScript -->
    <script src="../../assets/js/main.js"></script>
</body>
</html>

</html>
