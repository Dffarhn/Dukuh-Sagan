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
    <title>Pertanian - Dusun Dagan</title>
    <meta name="description" content="Potensi pertanian di Dusun Dagan yang meliputi berbagai jenis tanaman pangan dan sayuran.">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Pertanian - Dusun Dagan">
    <meta property="og:description" content="Potensi pertanian di Dusun Dagan yang meliputi berbagai jenis tanaman pangan dan sayuran.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $base_url; ?>/pages/potensi/pertanian.php">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pertanian - Dusun Dagan">
    <meta name="twitter:description" content="Potensi pertanian di Dusun Dagan yang meliputi berbagai jenis tanaman pangan dan sayuran.">
    
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
                        Pertanian
                    </span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-green-100">
                    Potensi Pertanian Unggulan Dusun Dagan
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-6 py-3">
                        <i class="fas fa-seedling text-2xl mb-2"></i>
                        <p class="font-semibold">Tanaman Pangan</p>
                    </div>
                    <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-6 py-3">
                        <i class="fas fa-leaf text-2xl mb-2"></i>
                        <p class="font-semibold">Sayuran</p>
                    </div>
                    <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-6 py-3">
                        <i class="fas fa-tint text-2xl mb-2"></i>
                        <p class="font-semibold">Irigasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Agricultural Overview -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Potensi Pertanian Dusun Dagan
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Dusun Dagan memiliki lahan pertanian yang subur dengan sistem irigasi yang baik, 
                    mendukung berbagai jenis tanaman pangan dan sayuran berkualitas tinggi.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Rice Farming -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="text-center mb-4">
                        <i class="fas fa-rice text-4xl text-green-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Padi Sawah</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Lahan sawah seluas 45 hektar dengan sistem irigasi teknis yang mendukung 
                        pertanaman padi 2-3 kali setahun.
                    </p>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600">Luas Lahan:</span>
                            <span class="font-semibold text-green-700">45 Ha</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600">Produktivitas:</span>
                            <span class="font-semibold text-green-700">6-8 ton/Ha</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600">Musim Tanam:</span>
                            <span class="font-semibold text-green-700">2-3x/tahun</span>
                        </div>
                    </div>
                </div>

                <!-- Corn Farming -->
                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="text-center mb-4">
                        <i class="fas fa-corn text-4xl text-yellow-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Jagung</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Tanaman jagung sebagai alternatif pangan dan pakan ternak dengan 
                        varietas unggul yang tahan kekeringan.
                    </p>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600">Luas Lahan:</span>
                            <span class="font-semibold text-yellow-700">15 Ha</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600">Produktivitas:</span>
                            <span class="font-semibold text-yellow-700">8-10 ton/Ha</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600">Musim Tanam:</span>
                            <span class="font-semibold text-yellow-700">2x/tahun</span>
                        </div>
                    </div>
                </div>

                <!-- Vegetables -->
                <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="text-center mb-4">
                        <i class="fas fa-carrot text-4xl text-red-600 mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Sayuran</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Berbagai jenis sayuran organik seperti cabai, tomat, terong, 
                        dan sayuran daun yang dibudidayakan secara intensif.
                    </p>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600">Luas Lahan:</span>
                            <span class="font-semibold text-red-700">8 Ha</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600">Jenis Sayuran:</span>
                            <span class="font-semibold text-red-700">12 Varietas</span>
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

    <!-- Agricultural Technology -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Teknologi Pertanian Modern
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Penerapan teknologi pertanian modern untuk meningkatkan produktivitas 
                    dan efisiensi pertanian di Dusun Dagan.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="bg-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <i class="fas fa-tint text-3xl text-blue-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Sistem Irigasi</h3>
                    <p class="text-gray-600 text-sm">Irigasi teknis dengan pompa air modern</p>
                </div>

                <div class="text-center">
                    <div class="bg-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <i class="fas fa-seedling text-3xl text-green-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Benih Unggul</h3>
                    <p class="text-gray-600 text-sm">Penggunaan varietas benih berkualitas tinggi</p>
                </div>

                <div class="text-center">
                    <div class="bg-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <i class="fas fa-leaf text-3xl text-emerald-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Pupuk Organik</h3>
                    <p class="text-gray-600 text-sm">Pupuk kompos dan pupuk kandang alami</p>
                </div>

                <div class="text-center">
                    <div class="bg-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <i class="fas fa-bug text-3xl text-orange-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">PHT</h3>
                    <p class="text-gray-600 text-sm">Pengendalian hama terpadu ramah lingkungan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Agricultural Calendar -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Kalender Pertanian
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Jadwal tanam dan panen yang teratur untuk memastikan produktivitas 
                    pertanian yang optimal sepanjang tahun.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 text-center">
                    <h3 class="text-xl font-bold text-blue-800 mb-4">Musim Hujan</h3>
                    <div class="space-y-3">
                        <div class="bg-white rounded-lg p-3">
                            <p class="font-semibold text-blue-700">Padi Sawah</p>
                            <p class="text-sm text-gray-600">Okt - Mar</p>
                        </div>
                        <div class="bg-white rounded-lg p-3">
                            <p class="font-semibold text-blue-700">Sayuran</p>
                            <p class="text-sm text-gray-600">Sep - Apr</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-xl p-6 text-center">
                    <h3 class="text-xl font-bold text-yellow-800 mb-4">Musim Kemarau</h3>
                    <div class="space-y-3">
                        <div class="bg-white rounded-lg p-3">
                            <p class="font-semibold text-yellow-700">Jagung</p>
                            <p class="text-sm text-gray-600">Apr - Sep</p>
                        </div>
                        <div class="bg-white rounded-lg p-3">
                            <p class="font-semibold text-yellow-700">Kedelai</p>
                            <p class="text-sm text-gray-600">Mei - Agu</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 text-center">
                    <h3 class="text-xl font-bold text-green-800 mb-4">Musim Semi</h3>
                    <div class="space-y-3">
                        <div class="bg-white rounded-lg p-3">
                            <p class="font-semibold text-green-700">Padi Gogo</p>
                            <p class="text-sm text-gray-600">Sep - Jan</p>
                        </div>
                        <div class="bg-white rounded-lg p-3">
                            <p class="font-semibold text-green-700">Kacang</p>
                            <p class="text-sm text-gray-600">Okt - Feb</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 text-center">
                    <h3 class="text-xl font-bold text-purple-800 mb-4">Musim Panen</h3>
                    <div class="space-y-3">
                        <div class="bg-white rounded-lg p-3">
                            <p class="font-semibold text-purple-700">Padi</p>
                            <p class="text-sm text-gray-600">Jan, Mei, Sep</p>
                        </div>
                        <div class="bg-white rounded-lg p-3">
                            <p class="font-semibold text-purple-700">Jagung</p>
                            <p class="text-sm text-gray-600">Jul, Nov</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Agricultural Support -->
    <section class="py-16 bg-gradient-to-br from-green-600 to-green-800 text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Dukungan Pertanian
                </h2>
                <p class="text-xl text-green-100 max-w-3xl mx-auto">
                    Berbagai program dan dukungan untuk meningkatkan kesejahteraan 
                    petani dan produktivitas pertanian di Dusun Dagan.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6">
                    <i class="fas fa-handshake text-4xl text-yellow-300 mb-4"></i>
                    <h3 class="text-xl font-bold mb-3">Kelompok Tani</h3>
                    <p class="text-green-100 mb-4">
                        Organisasi petani yang aktif dalam peningkatan kapasitas 
                        dan akses ke sumber daya pertanian.
                    </p>
                    <ul class="text-green-100 text-sm space-y-1">
                        <li>• Tani Makmur (45 anggota)</li>
                        <li>• Tani Sejahtera (32 anggota)</li>
                        <li>• Tani Maju (28 anggota)</li>
                    </ul>
                </div>

                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6">
                    <i class="fas fa-graduation-cap text-4xl text-yellow-300 mb-4"></i>
                    <h3 class="text-xl font-bold mb-3">Penyuluhan</h3>
                    <p class="text-green-100 mb-4">
                        Program penyuluhan pertanian rutin untuk meningkatkan 
                        pengetahuan dan keterampilan petani.
                    </p>
                    <ul class="text-green-100 text-sm space-y-1">
                        <li>• Teknologi Budidaya</li>
                        <li>• Pengendalian Hama</li>
                        <li>• Pasca Panen</li>
                        <li>• Pemasaran</li>
                    </ul>
                </div>

                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6">
                    <i class="fas fa-coins text-4xl text-yellow-300 mb-4"></i>
                    <h3 class="text-xl font-bold mb-3">Kredit Pertanian</h3>
                    <p class="text-green-100 mb-4">
                        Akses ke modal usaha pertanian melalui program kredit 
                        pertanian dengan bunga ringan.
                    </p>
                    <ul class="text-green-100 text-sm space-y-1">
                        <li>• KUR Pertanian</li>
                        <li>• Kredit Usaha Rakyat</li>
                        <li>• Pinjaman Kelompok</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                Tertarik dengan Pertanian Dusun Dagan?
            </h2>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                Mari bergabung dengan komunitas petani kami atau kunjungi lahan pertanian 
                untuk melihat langsung potensi pertanian yang ada.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="../../pages/contact/alamat-dusun.php" 
                   class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors">
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
