<?php include '../../includes/layout.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumlah KK - Dusun Dagan</title>
    <meta name="description" content="Informasi lengkap tentang jumlah Kepala Keluarga (KK) di Dusun Dagan.">
    
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
    <section class="hero-section bg-gradient-to-br from-blue-600 to-blue-800 text-white py-20">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <div class="inline-flex items-center px-4 py-2 bg-blue-500 bg-opacity-20 rounded-full text-sm font-medium mb-6">
                    <i class="fas fa-home mr-2"></i>
                    Data Kepala Keluarga
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Jumlah KK
                    <span class="block text-blue-300">Dusun Dagan</span>
                </h1>
                <p class="text-xl text-blue-100 max-w-3xl mx-auto mb-8">
                    Data lengkap tentang jumlah Kepala Keluarga (KK) di Dusun Dagan
                </p>
                <div class="flex flex-wrap justify-center gap-6">
                    <div class="bg-white bg-opacity-10 rounded-lg p-4 text-center">
                        <div class="text-3xl font-bold">312</div>
                        <div class="text-sm text-blue-200">Total KK</div>
                    </div>
                    <div class="bg-white bg-opacity-10 rounded-lg p-4 text-center">
                        <div class="text-3xl font-bold">1,247</div>
                        <div class="text-sm text-blue-200">Total Penduduk</div>
                    </div>
                    <div class="bg-white bg-opacity-10 rounded-lg p-4 text-center">
                        <div class="text-3xl font-bold">4.0</div>
                        <div class="text-sm text-blue-200">Rata-rata per KK</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Household Overview -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Gambaran Umum Kepala Keluarga</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Dusun Dagan memiliki 312 Kepala Keluarga dengan distribusi yang merata
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div class="bg-gradient-to-br from-green-500 to-green-600 text-white rounded-xl p-6 text-center">
                    <i class="fas fa-users text-4xl mb-4"></i>
                    <div class="text-3xl font-bold mb-2">312</div>
                    <div class="text-green-100">Total KK</div>
                </div>
                <div class="bg-gradient-to-br from-purple-500 to-purple-600 text-white rounded-xl p-6 text-center">
                    <i class="fas fa-chart-pie text-4xl mb-4"></i>
                    <div class="text-3xl font-bold mb-2">3</div>
                    <div class="text-purple-100">RT</div>
                </div>
                <div class="bg-gradient-to-br from-orange-500 to-orange-600 text-white rounded-xl p-6 text-center">
                    <i class="fas fa-calculator text-4xl mb-4"></i>
                    <div class="text-3xl font-bold mb-2">104</div>
                    <div class="text-orange-100">KK per RT</div>
                </div>
                <div class="bg-gradient-to-br from-red-500 to-red-600 text-white rounded-xl p-6 text-center">
                    <i class="fas fa-chart-line text-4xl mb-4"></i>
                    <div class="text-3xl font-bold mb-2">2.1%</div>
                    <div class="text-red-100">Pertumbuhan KK</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Distribution by RT -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Distribusi KK per RT</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Pembagian jumlah Kepala Keluarga berdasarkan Rukun Tetangga (RT)
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-lg text-center">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-map-marker-alt text-3xl text-blue-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">RT 01</h3>
                    <div class="text-4xl font-bold text-blue-600 mb-2">105</div>
                    <div class="text-gray-600">Kepala Keluarga</div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg text-center">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-map-marker-alt text-3xl text-green-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">RT 02</h3>
                    <div class="text-4xl font-bold text-green-600 mb-2">104</div>
                    <div class="text-gray-600">Kepala Keluarga</div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg text-center">
                    <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-map-marker-alt text-3xl text-purple-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">RT 03</h3>
                    <div class="text-4xl font-bold text-purple-600 mb-2">103</div>
                    <div class="text-gray-600">Kepala Keluarga</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Butuh Informasi Lebih Detail?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Hubungi kami untuk mendapatkan data Kepala Keluarga yang lebih lengkap
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="../contact/telepon.php" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition duration-300">
                    <i class="fas fa-phone mr-2"></i>
                    Hubungi Kami
                </a>
                <a href="../contact/email.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition duration-300">
                    <i class="fas fa-envelope mr-2"></i>
                    Kirim Email
                </a>
            </div>
        </div>
    </section>

    <?php include '../../includes/footer.php'; ?>
</body>
</html>
