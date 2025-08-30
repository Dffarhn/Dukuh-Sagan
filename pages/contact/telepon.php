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
    <title>Telepon - Dusun Dagan</title>
    <meta name="description" content="Informasi nomor telepon dan kontak untuk Dusun Dagan.">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Telepon - Dusun Dagan">
    <meta property="og:description" content="Informasi nomor telepon dan kontak untuk Dusun Dagan.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $base_url; ?>/pages/contact/telepon.php">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Telepon - Dusun Dagan">
    <meta name="twitter:description" content="Informasi nomor telepon dan kontak untuk Dusun Dagan.">
    
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
    <section class="relative bg-gradient-to-br from-green-600 to-green-800 text-white py-20">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    <span class="bg-gradient-to-r from-yellow-300 to-orange-300 bg-clip-text text-transparent">
                        Telepon
                    </span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-green-100">
                    Informasi Kontak Telepon Dusun Dagan
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-6 py-3">
                        <i class="fas fa-phone text-2xl mb-2"></i>
                        <p class="font-semibold">Telepon</p>
                    </div>
                    <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-6 py-3">
                        <i class="fas fa-mobile-alt text-2xl mb-2"></i>
                        <p class="font-semibold">Handphone</p>
                    </div>
                    <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-6 py-3">
                        <i class="fas fa-clock text-2xl mb-2"></i>
                        <p class="font-semibold">Jam Layanan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Nomor Telepon Penting
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Berbagai nomor telepon penting untuk menghubungi Dusun Dagan, 
                    termasuk kontak darurat dan layanan publik.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Village Head -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="text-center mb-4">
                        <i class="fas fa-user-tie text-4xl text-green-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Kepala Dusun</h3>
                    </div>
                    <div class="text-center">
                        <div class="bg-white rounded-lg p-4 mb-4">
                            <span class="text-2xl font-bold text-green-600">0812-3456-7890</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Pak Dukuh - Kepala Dusun Dagan
                        </p>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Jam Layanan:</span>
                                <span class="font-semibold text-green-700">08:00 - 17:00</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Hari:</span>
                                <span class="font-semibold text-green-700">Senin - Sabtu</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RT Contact -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="text-center mb-4">
                        <i class="fas fa-users text-4xl text-blue-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Ketua RT</h3>
                    </div>
                    <div class="text-center">
                        <div class="bg-white rounded-lg p-4 mb-4">
                            <span class="text-2xl font-bold text-blue-600">0812-3456-7891</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Pak RT - Ketua RT Dusun Dagan
                        </p>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Jam Layanan:</span>
                                <span class="font-semibold text-blue-700">08:00 - 20:00</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Hari:</span>
                                <span class="font-semibold text-blue-700">Setiap Hari</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Emergency Contact -->
                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="text-center mb-4">
                        <i class="fas fa-exclamation-triangle text-4xl text-red-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Darurat</h3>
                    </div>
                    <div class="text-center">
                        <div class="bg-white rounded-lg p-4 mb-4">
                            <span class="text-2xl font-bold text-red-600">0812-3456-7892</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Kontak Darurat Dusun Dagan
                        </p>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Jam Layanan:</span>
                                <span class="font-semibold text-red-700">24 Jam</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Hari:</span>
                                <span class="font-semibold text-red-700">Setiap Hari</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Public Services -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Layanan Publik
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Nomor telepon layanan publik yang dapat dihubungi untuk berbagai keperluan
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-hospital text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Puskesmas</h3>
                    <p class="text-gray-600 text-sm mb-3">Layanan kesehatan</p>
                    <div class="text-blue-600 font-semibold">(0276) 123456</div>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-graduation-cap text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Sekolah</h3>
                    <p class="text-gray-600 text-sm mb-3">SD/MI Dusun Dagan</p>
                    <div class="text-green-600 font-semibold">(0276) 123457</div>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-yellow-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-mosque text-2xl text-yellow-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Masjid</h3>
                    <p class="text-gray-600 text-sm mb-3">Masjid Dusun Dagan</p>
                    <div class="text-yellow-600 font-semibold">(0276) 123458</div>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-store text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Warung</h3>
                    <p class="text-gray-600 text-sm mb-3">Warung Makan</p>
                    <div class="text-purple-600 font-semibold">(0276) 123459</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Services -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Layanan Darurat
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Nomor telepon darurat yang dapat dihubungi dalam keadaan darurat
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-6">
                    <div class="text-center mb-4">
                        <i class="fas fa-ambulance text-4xl text-red-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Ambulans</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Layanan ambulans untuk keadaan darurat medis
                    </p>
                    <div class="text-center">
                        <div class="bg-white rounded-lg p-3 mb-3">
                            <span class="text-xl font-bold text-red-600">118</span>
                        </div>
                        <p class="text-sm text-gray-600">Atau</p>
                        <div class="bg-white rounded-lg p-3">
                            <span class="text-lg font-bold text-red-600">0812-3456-7893</span>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6">
                    <div class="text-center mb-4">
                        <i class="fas fa-fire-extinguisher text-4xl text-blue-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Pemadam Kebakaran</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Layanan pemadam kebakaran untuk keadaan darurat
                    </p>
                    <div class="text-center">
                        <div class="bg-white rounded-lg p-3 mb-3">
                            <span class="text-xl font-bold text-blue-600">113</span>
                        </div>
                        <p class="text-sm text-gray-600">Atau</p>
                        <div class="bg-white rounded-lg p-3">
                            <span class="text-lg font-bold text-blue-600">0812-3456-7894</span>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6">
                    <div class="text-center mb-4">
                        <i class="fas fa-shield-alt text-4xl text-green-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Kepolisian</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Layanan kepolisian untuk keamanan dan ketertiban
                    </p>
                    <div class="text-center">
                        <div class="bg-white rounded-lg p-3 mb-3">
                            <span class="text-xl font-bold text-green-600">110</span>
                        </div>
                        <p class="text-sm text-gray-600">Atau</p>
                        <div class="bg-white rounded-lg p-3">
                            <span class="text-lg font-bold text-green-600">0812-3456-7895</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Hours -->
    <section class="py-16 bg-gradient-to-br from-green-600 to-green-800 text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Jam Layanan Telepon
                </h2>
                <p class="text-xl text-green-100 max-w-3xl mx-auto">
                    Informasi jam layanan telepon untuk berbagai keperluan
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6">
                    <i class="fas fa-clock text-4xl text-yellow-300 mb-4"></i>
                    <h3 class="text-xl font-bold mb-3">Layanan Umum</h3>
                    <p class="text-green-100 mb-4">
                        Jam layanan untuk urusan umum dusun
                    </p>
                    <div class="text-green-100 text-sm space-y-1">
                        <p>• Senin - Jumat: 08:00 - 17:00</p>
                        <p>• Sabtu: 08:00 - 12:00</p>
                        <p>• Minggu: 09:00 - 12:00</p>
                        <p>• Istirahat: 12:00 - 13:00</p>
                    </div>
                </div>

                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6">
                    <i class="fas fa-exclamation-circle text-4xl text-yellow-300 mb-4"></i>
                    <h3 class="text-xl font-bold mb-3">Layanan Darurat</h3>
                    <p class="text-green-100 mb-4">
                        Layanan darurat tersedia 24 jam
                    </p>
                    <div class="text-green-100 text-sm space-y-1">
                        <p>• Setiap hari: 24 jam</p>
                        <p>• Tidak ada jam istirahat</p>
                        <p>• Prioritas tinggi</p>
                        <p>• Respon cepat</p>
                    </div>
                </div>

                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6">
                    <i class="fas fa-info-circle text-4xl text-yellow-300 mb-4"></i>
                    <h3 class="text-xl font-bold mb-3">Informasi</h3>
                    <p class="text-green-100 mb-4">
                        Tips menghubungi layanan telepon
                    </p>
                    <div class="text-green-100 text-sm space-y-1">
                        <p>• Siapkan informasi yang diperlukan</p>
                        <p>• Berbicara dengan sopan</p>
                        <p>• Catat nomor referensi</p>
                        <p>• Simpan bukti komunikasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                Butuh Bantuan Lebih Lanjut?
            </h2>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                Hubungi kami melalui berbagai saluran komunikasi yang tersedia 
                untuk mendapatkan informasi yang Anda butuhkan.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="../../pages/contact/email.php" 
                   class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors">
                    <i class="fas fa-envelope mr-2"></i>
                    Kirim Email
                </a>
                <a href="../../pages/contact/alamat-dusun.php" 
                   class="bg-gray-600 hover:bg-gray-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    Kunjungi Kami
                </a>
            </div>
        </div>
    </section>

    <?php include '../../includes/footer.php'; ?>
</body>
</html>
