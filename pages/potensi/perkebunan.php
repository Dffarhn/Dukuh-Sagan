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
    <title>Perkebunan - Dusun Dagan</title>
    <meta name="description" content="Potensi perkebunan di Dusun Dagan yang meliputi berbagai jenis tanaman perkebunan dan buah-buahan.">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Perkebunan - Dusun Dagan">
    <meta property="og:description" content="Potensi perkebunan di Dusun Dagan yang meliputi berbagai jenis tanaman perkebunan dan buah-buahan.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $base_url; ?>/pages/potensi/perkebunan.php">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Perkebunan - Dusun Dagan">
    <meta name="twitter:description" content="Potensi perkebunan di Dusun Dagan yang meliputi berbagai jenis tanaman perkebunan dan buah-buahan.">
    
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
    <section class="relative bg-gradient-to-br from-orange-600 to-orange-800 text-white py-20">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    <span class="bg-gradient-to-r from-yellow-300 to-orange-300 bg-clip-text text-transparent">
                        Perkebunan
                    </span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-orange-100">
                    Potensi Perkebunan Unggulan Dusun Dagan
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-6 py-3">
                        <i class="fas fa-tree text-2xl mb-2"></i>
                        <p class="font-semibold">Tanaman Keras</p>
                    </div>
                    <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-6 py-3">
                        <i class="fas fa-apple-alt text-2xl mb-2"></i>
                        <p class="font-semibold">Buah-buahan</p>
                    </div>
                    <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-6 py-3">
                        <i class="fas fa-seedling text-2xl mb-2"></i>
                        <p class="font-semibold">Tanaman Rempah</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Plantation Overview -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Potensi Perkebunan Dusun Dagan
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Dusun Dagan memiliki lahan perkebunan yang luas dengan berbagai jenis tanaman 
                    perkebunan dan buah-buahan yang berkualitas tinggi.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Coconut Plantation -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="text-center mb-4">
                        <i class="fas fa-tree text-4xl text-green-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Kelapa</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Perkebunan kelapa seluas 25 hektar dengan varietas unggul yang 
                        menghasilkan kelapa berkualitas tinggi untuk berbagai keperluan.
                    </p>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600">Luas Lahan:</span>
                            <span class="font-semibold text-green-700">25 Ha</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600">Jumlah Pohon:</span>
                            <span class="font-semibold text-green-700">2,500 pohon</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600">Produksi:</span>
                            <span class="font-semibold text-green-700">75 ton/tahun</span>
                        </div>
                    </div>
                </div>

                <!-- Coffee Plantation -->
                <div class="bg-gradient-to-br from-brown-50 to-brown-100 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="text-center mb-4">
                        <i class="fas fa-coffee text-4xl text-brown-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Kopi</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Perkebunan kopi robusta dan arabika dengan pengolahan tradisional 
                        yang menghasilkan kopi berkualitas premium.
                    </p>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600">Luas Lahan:</span>
                            <span class="font-semibold text-brown-700">12 Ha</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600">Jenis:</span>
                            <span class="font-semibold text-brown-700">Robusta & Arabika</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600">Produksi:</span>
                            <span class="font-semibold text-brown-700">18 ton/tahun</span>
                        </div>
                    </div>
                </div>

                <!-- Fruit Trees -->
                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="text-center mb-4">
                        <i class="fas fa-apple-alt text-4xl text-red-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Buah-buahan</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Berbagai jenis buah-buahan seperti mangga, jeruk, pisang, dan pepaya 
                        yang dibudidayakan secara organik.
                    </p>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600">Luas Lahan:</span>
                            <span class="font-semibold text-red-700">8 Ha</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600">Jenis Buah:</span>
                            <span class="font-semibold text-red-700">15 Varietas</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600">Sistem:</span>
                            <span class="font-semibold text-red-700">Organik</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Plantation Products -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Produk Perkebunan Unggulan
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Berbagai produk perkebunan berkualitas tinggi yang dihasilkan 
                    dari perkebunan Dusun Dagan.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-orange-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-oil-can text-2xl text-orange-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Minyak Kelapa</h3>
                    <p class="text-gray-600 text-sm mb-3">Virgin Coconut Oil berkualitas premium</p>
                    <div class="text-orange-600 font-semibold">Rp 45.000/liter</div>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-brown-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-coffee text-2xl text-brown-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Kopi Bubuk</h3>
                    <p class="text-gray-600 text-sm mb-3">Kopi robusta dan arabika premium</p>
                    <div class="text-brown-600 font-semibold">Rp 35.000/kg</div>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-apple-alt text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Buah Segar</h3>
                    <p class="text-gray-600 text-sm mb-3">Buah-buahan organik segar</p>
                    <div class="text-green-600 font-semibold">Rp 15.000/kg</div>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-yellow-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-leaf text-2xl text-yellow-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Daun Kelapa</h3>
                    <p class="text-gray-600 text-sm mb-3">Daun kelapa untuk anyaman</p>
                    <div class="text-yellow-600 font-semibold">Rp 5.000/ikat</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Plantation Management -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Manajemen Perkebunan
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Sistem manajemen perkebunan yang terintegrasi untuk memastikan 
                    produktivitas dan keberlanjutan perkebunan.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6">
                    <div class="text-center mb-4">
                        <i class="fas fa-users text-4xl text-blue-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Kelompok Tani</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Organisasi petani perkebunan yang mengelola lahan secara 
                        kolektif dan berkelanjutan.
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• Kelompok Tani Kelapa (35 anggota)</li>
                        <li>• Kelompok Tani Kopi (28 anggota)</li>
                        <li>• Kelompok Tani Buah (22 anggota)</li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6">
                    <div class="text-center mb-4">
                        <i class="fas fa-recycle text-4xl text-green-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Sistem Organik</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Penerapan sistem pertanian organik untuk menghasilkan 
                        produk berkualitas tinggi dan ramah lingkungan.
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• Pupuk Organik</li>
                        <li>• Pestisida Alami</li>
                        <li>• Rotasi Tanaman</li>
                        <li>• Konservasi Tanah</li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6">
                    <div class="text-center mb-4">
                        <i class="fas fa-chart-line text-4xl text-purple-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Pemasaran</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Sistem pemasaran yang terintegrasi untuk memastikan 
                        produk perkebunan terjual dengan harga yang menguntungkan.
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• Pasar Tradisional</li>
                        <li>• Pasar Modern</li>
                        <li>• E-commerce</li>
                        <li>• Ekspor</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Plantation Calendar -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Kalender Perkebunan
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Jadwal perawatan dan panen tanaman perkebunan yang teratur 
                    untuk memastikan produktivitas optimal.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 text-center">
                    <h3 class="text-xl font-bold text-green-800 mb-4">Kelapa</h3>
                    <div class="space-y-3">
                        <div class="bg-white rounded-lg p-3">
                            <p class="font-semibold text-green-700">Pemupukan</p>
                            <p class="text-sm text-gray-600">Jan, Apr, Jul, Okt</p>
                        </div>
                        <div class="bg-white rounded-lg p-3">
                            <p class="font-semibold text-green-700">Panen</p>
                            <p class="text-sm text-gray-600">Sepanjang Tahun</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-brown-50 to-brown-100 rounded-xl p-6 text-center">
                    <h3 class="text-xl font-bold text-brown-800 mb-4">Kopi</h3>
                    <div class="space-y-3">
                        <div class="bg-white rounded-lg p-3">
                            <p class="font-semibold text-brown-700">Pemangkasan</p>
                            <p class="text-sm text-gray-600">Mei - Jun</p>
                        </div>
                        <div class="bg-white rounded-lg p-3">
                            <p class="font-semibold text-brown-700">Panen</p>
                            <p class="text-sm text-gray-600">Apr - Sep</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-6 text-center">
                    <h3 class="text-xl font-bold text-red-800 mb-4">Buah-buahan</h3>
                    <div class="space-y-3">
                        <div class="bg-white rounded-lg p-3">
                            <p class="font-semibold text-red-700">Pemupukan</p>
                            <p class="text-sm text-gray-600">Feb, Mei, Agu, Nov</p>
                        </div>
                        <div class="bg-white rounded-lg p-3">
                            <p class="font-semibold text-red-700">Panen</p>
                            <p class="text-sm text-gray-600">Bervariasi</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-xl p-6 text-center">
                    <h3 class="text-xl font-bold text-yellow-800 mb-4">Perawatan</h3>
                    <div class="space-y-3">
                        <div class="bg-white rounded-lg p-3">
                            <p class="font-semibold text-yellow-700">Penyiangan</p>
                            <p class="text-sm text-gray-600">Bulanan</p>
                        </div>
                        <div class="bg-white rounded-lg p-3">
                            <p class="font-semibold text-yellow-700">Pengendalian Hama</p>
                            <p class="text-sm text-gray-600">Berdasarkan Kondisi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Plantation Support -->
    <section class="py-16 bg-gradient-to-br from-orange-600 to-orange-800 text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Dukungan Perkebunan
                </h2>
                <p class="text-xl text-orange-100 max-w-3xl mx-auto">
                    Berbagai program dan dukungan untuk meningkatkan kesejahteraan 
                    petani perkebunan dan produktivitas perkebunan di Dusun Dagan.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6">
                    <i class="fas fa-graduation-cap text-4xl text-yellow-300 mb-4"></i>
                    <h3 class="text-xl font-bold mb-3">Pelatihan</h3>
                    <p class="text-orange-100 mb-4">
                        Program pelatihan teknis perkebunan untuk meningkatkan 
                        pengetahuan dan keterampilan petani.
                    </p>
                    <ul class="text-orange-100 text-sm space-y-1">
                        <li>• Budidaya Tanaman</li>
                        <li>• Pengolahan Pasca Panen</li>
                        <li>• Pemasaran Produk</li>
                        <li>• Manajemen Keuangan</li>
                    </ul>
                </div>

                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6">
                    <i class="fas fa-coins text-4xl text-yellow-300 mb-4"></i>
                    <h3 class="text-xl font-bold mb-3">Modal Usaha</h3>
                    <p class="text-orange-100 mb-4">
                        Akses ke modal usaha perkebunan melalui berbagai 
                        program pembiayaan yang terjangkau.
                    </p>
                    <ul class="text-orange-100 text-sm space-y-1">
                        <li>• KUR Perkebunan</li>
                        <li>• Dana Bergulir</li>
                        <li>• Pinjaman Kelompok</li>
                        <li>• Subsidi Benih</li>
                    </ul>
                </div>

                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6">
                    <i class="fas fa-truck text-4xl text-yellow-300 mb-4"></i>
                    <h3 class="text-xl font-bold mb-3">Infrastruktur</h3>
                    <p class="text-orange-100 mb-4">
                        Pengembangan infrastruktur perkebunan untuk mendukung 
                        aktivitas produksi dan distribusi produk.
                    </p>
                    <ul class="text-orange-100 text-sm space-y-1">
                        <li>• Jalan Perkebunan</li>
                        <li>• Gudang Penyimpanan</li>
                        <li>• Unit Pengolahan</li>
                        <li>• Pasar Tani</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                Tertarik dengan Perkebunan Dusun Dagan?
            </h2>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                Mari bergabung dengan komunitas petani perkebunan kami atau kunjungi 
                perkebunan untuk melihat langsung potensi yang ada.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="../../pages/contact/alamat-dusun.php" 
                   class="bg-orange-600 hover:bg-orange-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    Kunjungi Kami
                </a>
                <a href="../../pages/potensi/umkm.php" 
                   class="bg-gray-600 hover:bg-gray-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors">
                    <i class="fas fa-store mr-2"></i>
                    Lihat UMKM
                </a>
            </div>
        </div>
    </section>

    <?php include '../../includes/footer.php'; ?>
</body>
</html>
