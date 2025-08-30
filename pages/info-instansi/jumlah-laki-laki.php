<?php include '../../includes/layout.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumlah Laki-laki - Dusun Dagan</title>
    <meta name="description" content="Informasi lengkap tentang jumlah penduduk laki-laki di Dusun Dagan beserta data demografis.">
    
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
                    <i class="fas fa-male mr-2"></i>
                    Data Penduduk Laki-laki
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Jumlah Laki-laki
                    <span class="block text-blue-300">Dusun Dagan</span>
                </h1>
                <p class="text-xl text-blue-100 max-w-3xl mx-auto mb-8">
                    Data lengkap tentang jumlah penduduk laki-laki di Dusun Dagan beserta informasi demografis
                </p>
                <div class="flex flex-wrap justify-center gap-6">
                    <div class="bg-white bg-opacity-10 rounded-lg p-4 text-center">
                        <div class="text-3xl font-bold">634</div>
                        <div class="text-sm text-blue-200">Total Laki-laki</div>
                    </div>
                    <div class="bg-white bg-opacity-10 rounded-lg p-4 text-center">
                        <div class="text-3xl font-bold">50.9%</div>
                        <div class="text-sm text-blue-200">Dari Total Penduduk</div>
                    </div>
                    <div class="bg-white bg-opacity-10 rounded-lg p-4 text-center">
                        <div class="text-3xl font-bold">103.4</div>
                        <div class="text-sm text-blue-200">Rasio Gender</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Male Population Overview -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Gambaran Umum Penduduk Laki-laki</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Dusun Dagan memiliki 634 penduduk laki-laki dengan distribusi usia yang seimbang
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-xl p-6 text-center">
                    <i class="fas fa-male text-4xl mb-4"></i>
                    <div class="text-3xl font-bold mb-2">634</div>
                    <div class="text-blue-100">Total Laki-laki</div>
                </div>
                <div class="bg-gradient-to-br from-green-500 to-green-600 text-white rounded-xl p-6 text-center">
                    <i class="fas fa-percentage text-4xl mb-4"></i>
                    <div class="text-3xl font-bold mb-2">50.9%</div>
                    <div class="text-green-100">Dari Total</div>
                </div>
                <div class="bg-gradient-to-br from-purple-500 to-purple-600 text-white rounded-xl p-6 text-center">
                    <i class="fas fa-chart-line text-4xl mb-4"></i>
                    <div class="text-3xl font-bold mb-2">2.8%</div>
                    <div class="text-purple-100">Pertumbuhan</div>
                </div>
                <div class="bg-gradient-to-br from-orange-500 to-orange-600 text-white rounded-xl p-6 text-center">
                    <i class="fas fa-users text-4xl mb-4"></i>
                    <div class="text-3xl font-bold mb-2">21</div>
                    <div class="text-orange-100">Lebih dari Perempuan</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Age Distribution -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Distribusi Usia Laki-laki</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Analisis mendalam tentang distribusi usia penduduk laki-laki di Dusun Dagan
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-12">
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Kelompok Usia</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600">0-14 tahun (Anak-anak)</span>
                            <div class="flex items-center">
                                <div class="w-32 bg-gray-200 rounded-full h-3 mr-3">
                                    <div class="bg-blue-500 h-3 rounded-full" style="width: 25%"></div>
                                </div>
                                <span class="font-semibold text-gray-800">25% (159)</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600">15-64 tahun (Produktif)</span>
                            <div class="flex items-center">
                                <div class="w-32 bg-gray-200 rounded-full h-3 mr-3">
                                    <div class="bg-green-500 h-3 rounded-full" style="width: 65%"></div>
                                </div>
                                <span class="font-semibold text-gray-800">65% (412)</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600">65+ tahun (Lansia)</span>
                            <div class="flex items-center">
                                <div class="w-32 bg-gray-200 rounded-full h-3 mr-3">
                                    <div class="bg-orange-500 h-3 rounded-full" style="width: 10%"></div>
                                </div>
                                <span class="font-semibold text-gray-800">10% (63)</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Statistik Usia</h3>
                    <div class="space-y-6">
                        <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg">
                            <div>
                                <div class="font-semibold text-gray-800">Usia Rata-rata</div>
                                <div class="text-sm text-gray-600">Penduduk Laki-laki</div>
                            </div>
                            <div class="text-3xl font-bold text-blue-600">32.5</div>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-green-50 rounded-lg">
                            <div>
                                <div class="font-semibold text-gray-800">Usia Median</div>
                                <div class="text-sm text-gray-600">Penduduk Laki-laki</div>
                            </div>
                            <div class="text-3xl font-bold text-green-600">29</div>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-orange-50 rounded-lg">
                            <div>
                                <div class="font-semibold text-gray-800">Usia Tertua</div>
                                <div class="text-sm text-gray-600">Penduduk Laki-laki</div>
                            </div>
                            <div class="text-3xl font-bold text-orange-600">85</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Distribution by RT -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Distribusi per RT</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Pembagian jumlah penduduk laki-laki berdasarkan Rukun Tetangga (RT)
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-lg text-center border-2 border-blue-200">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-map-marker-alt text-3xl text-blue-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">RT 01</h3>
                    <div class="text-4xl font-bold text-blue-600 mb-2">215</div>
                    <div class="text-gray-600 mb-4">Penduduk Laki-laki</div>
                    <div class="bg-blue-50 rounded-lg p-3">
                        <div class="text-sm text-gray-600">Dari 420 Total</div>
                        <div class="font-semibold text-blue-600">51.2%</div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg text-center border-2 border-green-200">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-map-marker-alt text-3xl text-green-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">RT 02</h3>
                    <div class="text-4xl font-bold text-green-600 mb-2">210</div>
                    <div class="text-gray-600 mb-4">Penduduk Laki-laki</div>
                    <div class="bg-green-50 rounded-lg p-3">
                        <div class="text-sm text-gray-600">Dari 418 Total</div>
                        <div class="font-semibold text-green-600">50.2%</div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg text-center border-2 border-purple-200">
                    <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-map-marker-alt text-3xl text-purple-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">RT 03</h3>
                    <div class="text-4xl font-bold text-purple-600 mb-2">209</div>
                    <div class="text-gray-600 mb-4">Penduduk Laki-laki</div>
                    <div class="bg-purple-50 rounded-lg p-3">
                        <div class="text-sm text-gray-600">Dari 409 Total</div>
                        <div class="font-semibold text-purple-600">51.1%</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Butuh Informasi Lebih Detail?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Hubungi kami untuk mendapatkan data penduduk laki-laki yang lebih lengkap
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

