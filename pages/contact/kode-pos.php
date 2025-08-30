<?php 
include '../../config/config.php';
// Include parent layout untuk memastikan scrolling berfungsi
include '../../includes/layout.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kode Pos - Dusun Dagan</title>
    <meta name="description" content="Informasi kode pos dan data pos untuk Dusun Dagan.">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Kode Pos - Dusun Dagan">
    <meta property="og:description" content="Informasi kode pos dan data pos untuk Dusun Dagan.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $base_url; ?>/pages/contact/kode-pos.php">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Kode Pos - Dusun Dagan">
    <meta name="twitter:description" content="Informasi kode pos dan data pos untuk Dusun Dagan.">
    
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
    <section class="relative bg-gradient-to-br from-blue-600 to-blue-800 text-white py-20">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    <span class="bg-gradient-to-r from-yellow-300 to-orange-300 bg-clip-text text-transparent">
                        Kode Pos
                    </span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100">
                    Informasi Kode Pos Dusun Dagan
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-6 py-3">
                        <i class="fas fa-mail-bulk text-2xl mb-2"></i>
                        <p class="font-semibold">Kode Pos</p>
                    </div>
                    <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-6 py-3">
                        <i class="fas fa-map-marker-alt text-2xl mb-2"></i>
                        <p class="font-semibold">Lokasi</p>
                    </div>
                    <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-6 py-3">
                        <i class="fas fa-info-circle text-2xl mb-2"></i>
                        <p class="font-semibold">Informasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Postal Code Information -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Kode Pos Dusun Dagan
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Informasi lengkap mengenai kode pos dan data pos untuk Dusun Dagan, 
                    termasuk wilayah administrasi dan layanan pos yang tersedia.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Main Postal Code -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="text-center mb-4">
                        <i class="fas fa-mail-bulk text-4xl text-blue-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Kode Pos Utama</h3>
                    </div>
                    <div class="text-center">
                        <div class="bg-white rounded-lg p-4 mb-4">
                            <span class="text-3xl font-bold text-blue-600">57312</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Kode pos utama untuk Dusun Dagan dan sekitarnya
                        </p>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Provinsi:</span>
                                <span class="font-semibold text-blue-700">Jawa Tengah</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Kabupaten:</span>
                                <span class="font-semibold text-blue-700">Boyolali</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Kecamatan:</span>
                                <span class="font-semibold text-blue-700">Klego</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Postal Service -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="text-center mb-4">
                        <i class="fas fa-shipping-fast text-4xl text-green-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Layanan Pos</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Berbagai layanan pos yang tersedia untuk masyarakat Dusun Dagan
                    </p>
                    <ul class="text-gray-600 text-sm space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-600 mr-2"></i>
                            Pengiriman Surat
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-600 mr-2"></i>
                            Pengiriman Paket
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-600 mr-2"></i>
                            Transfer Uang
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-600 mr-2"></i>
                            Tabungan Pos
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-600 mr-2"></i>
                            Asuransi
                        </li>
                    </ul>
                </div>

                <!-- Postal Office -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="text-center mb-4">
                        <i class="fas fa-building text-4xl text-orange-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Kantor Pos</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Informasi kantor pos terdekat yang melayani Dusun Dagan
                    </p>
                    <div class="space-y-3">
                        <div class="bg-white rounded-lg p-3">
                            <h4 class="font-semibold text-orange-700">Kantor Pos Klego</h4>
                            <p class="text-sm text-gray-600">Jl. Raya Klego No. 45</p>
                            <p class="text-sm text-gray-600">Kecamatan Klego, Boyolali</p>
                        </div>
                        <div class="bg-white rounded-lg p-3">
                            <h4 class="font-semibold text-orange-700">Jam Operasional</h4>
                            <p class="text-sm text-gray-600">Senin - Jumat: 08:00 - 16:00</p>
                            <p class="text-sm text-gray-600">Sabtu: 08:00 - 12:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Postal Coverage Area -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Wilayah Cakupan Kode Pos
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Area yang menggunakan kode pos 57312 dan layanan pos yang tersedia
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-home text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Dusun Dagan</h3>
                    <p class="text-gray-600 text-sm">Wilayah utama</p>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-tree text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Dusun Sekitar</h3>
                    <p class="text-gray-600 text-sm">Dusun tetangga</p>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-yellow-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-road text-2xl text-yellow-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Jalan Raya</h3>
                    <p class="text-gray-600 text-sm">Akses transportasi</p>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-industry text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Kawasan Industri</h3>
                    <p class="text-gray-600 text-sm">Zona industri</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Postal Services Details -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Layanan Pos Tersedia
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Berbagai layanan pos yang dapat dimanfaatkan oleh masyarakat Dusun Dagan
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6">
                    <div class="text-center mb-4">
                        <i class="fas fa-envelope text-4xl text-blue-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Surat Menyurat</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Layanan pengiriman surat dalam dan luar negeri dengan berbagai pilihan kecepatan
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• Surat Biasa</li>
                        <li>• Surat Kilat Khusus</li>
                        <li>• Surat Express</li>
                        <li>• Surat Internasional</li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6">
                    <div class="text-center mb-4">
                        <i class="fas fa-box text-4xl text-green-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Pengiriman Paket</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Layanan pengiriman paket dengan berbagai ukuran dan berat
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• Paket Pos</li>
                        <li>• Paket Kilat Khusus</li>
                        <li>• Paket Express</li>
                        <li>• Paket Internasional</li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl p-6">
                    <div class="text-center mb-4">
                        <i class="fas fa-coins text-4xl text-orange-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Layanan Keuangan</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Berbagai layanan keuangan yang tersedia di kantor pos
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• Transfer Uang</li>
                        <li>• Tabungan Pos</li>
                        <li>• Asuransi</li>
                        <li>• Pembayaran Tagihan</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-16 bg-gradient-to-br from-blue-600 to-blue-800 text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Informasi Kontak Pos
                </h2>
                <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                    Hubungi kantor pos terdekat untuk informasi lebih lanjut
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6">
                    <i class="fas fa-phone text-4xl text-yellow-300 mb-4"></i>
                    <h3 class="text-xl font-bold mb-3">Telepon</h3>
                    <p class="text-blue-100 mb-4">
                        Hubungi kantor pos untuk informasi layanan
                    </p>
                    <div class="text-blue-100 text-sm space-y-1">
                        <p>• Kantor Pos Klego: (0276) 123456</p>
                        <p>• Customer Service: 1500-123</p>
                        <p>• Hotline: 0800-123-4567</p>
                    </div>
                </div>

                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6">
                    <i class="fas fa-clock text-4xl text-yellow-300 mb-4"></i>
                    <h3 class="text-xl font-bold mb-3">Jam Operasional</h3>
                    <p class="text-blue-100 mb-4">
                        Waktu layanan kantor pos
                    </p>
                    <div class="text-blue-100 text-sm space-y-1">
                        <p>• Senin - Jumat: 08:00 - 16:00</p>
                        <p>• Sabtu: 08:00 - 12:00</p>
                        <p>• Minggu & Hari Libur: Tutup</p>
                        <p>• Istirahat: 12:00 - 13:00</p>
                    </div>
                </div>

                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6">
                    <i class="fas fa-map-marker-alt text-4xl text-yellow-300 mb-4"></i>
                    <h3 class="text-xl font-bold mb-3">Lokasi</h3>
                    <p class="text-blue-100 mb-4">
                        Alamat kantor pos terdekat
                    </p>
                    <div class="text-blue-100 text-sm space-y-1">
                        <p>• Jl. Raya Klego No. 45</p>
                        <p>• Kecamatan Klego</p>
                        <p>• Kabupaten Boyolali</p>
                        <p>• Jawa Tengah 57312</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                Butuh Informasi Lebih Lanjut?
            </h2>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                Hubungi kantor pos terdekat atau kunjungi website resmi Pos Indonesia 
                untuk informasi layanan yang lebih lengkap.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="../../pages/contact/telepon.php" 
                   class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors">
                    <i class="fas fa-phone mr-2"></i>
                    Hubungi Kami
                </a>
                <a href="../../pages/contact/alamat-dusun.php" 
                   class="bg-gray-600 hover:bg-gray-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    Lihat Alamat
                </a>
            </div>
        </div>
    </section>

    <?php include '../../includes/footer.php'; ?>
</body>
</html>
