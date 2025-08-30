<?php include '../../includes/layout.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pak RT - Dusun Dagan</title>
    <meta name="description" content="Informasi lengkap tentang Pak RT di Dusun Dagan beserta profil dan tanggung jawabnya.">
    
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
    <section class="hero-section bg-gradient-to-br from-teal-600 to-teal-800 text-white py-20">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <div class="inline-flex items-center px-4 py-2 bg-teal-500 bg-opacity-20 rounded-full text-sm font-medium mb-6">
                    <i class="fas fa-users mr-2"></i>
                    Kepemimpinan RT
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Pak RT
                    <span class="block text-teal-300">Dusun Dagan</span>
                </h1>
                <p class="text-xl text-teal-100 max-w-3xl mx-auto mb-8">
                    Para pemimpin Rukun Tetangga yang berdedikasi melayani masyarakat di tingkat RT
                </p>
                <div class="flex flex-wrap justify-center gap-6">
                    <div class="bg-white bg-opacity-10 rounded-lg p-4 text-center">
                        <div class="text-3xl font-bold">3</div>
                        <div class="text-sm text-teal-200">Total RT</div>
                    </div>
                    <div class="bg-white bg-opacity-10 rounded-lg p-4 text-center">
                        <div class="text-3xl font-bold">312</div>
                        <div class="text-sm text-teal-200">KK Terlayani</div>
                    </div>
                    <div class="bg-white bg-opacity-10 rounded-lg p-4 text-center">
                        <div class="text-3xl font-bold">1,247</div>
                        <div class="text-sm text-teal-200">Penduduk</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RT Overview -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Gambaran Umum RT</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Dusun Dagan terdiri dari 3 Rukun Tetangga (RT) yang masing-masing dipimpin oleh Ketua RT yang berdedikasi
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-xl p-8 text-center">
                    <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-map-marker-alt text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">RT 01</h3>
                    <div class="space-y-3">
                        <div>
                            <div class="text-3xl font-bold">105</div>
                            <div class="text-blue-100">Kepala Keluarga</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold">420</div>
                            <div class="text-blue-100">Penduduk</div>
                        </div>
                        <div class="pt-3">
                            <div class="text-lg font-semibold">Pak Ahmad</div>
                            <div class="text-blue-100">Ketua RT</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-br from-green-500 to-green-600 text-white rounded-xl p-8 text-center">
                    <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-map-marker-alt text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">RT 02</h3>
                    <div class="space-y-3">
                        <div>
                            <div class="text-3xl font-bold">104</div>
                            <div class="text-green-100">Kepala Keluarga</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold">418</div>
                            <div class="text-green-100">Penduduk</div>
                        </div>
                        <div class="pt-3">
                            <div class="text-lg font-semibold">Pak Bambang</div>
                            <div class="text-green-100">Ketua RT</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-br from-purple-500 to-purple-600 text-white rounded-xl p-8 text-center">
                    <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-map-marker-alt text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">RT 03</h3>
                    <div class="space-y-3">
                        <div>
                            <div class="text-3xl font-bold">103</div>
                            <div class="text-purple-100">Kepala Keluarga</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold">409</div>
                            <div class="text-purple-100">Penduduk</div>
                        </div>
                        <div class="pt-3">
                            <div class="text-lg font-semibold">Pak Candra</div>
                            <div class="text-purple-100">Ketua RT</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RT Profiles -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Profil Ketua RT</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Kenali lebih dekat para Ketua RT yang mengabdi untuk masyarakat Dusun Dagan
                </p>
            </div>
            
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- RT 01 -->
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="text-center mb-6">
                        <div class="w-24 h-24 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-user text-4xl text-blue-600"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Pak Ahmad</h3>
                        <p class="text-blue-600 font-medium">Ketua RT 01</p>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-calendar text-gray-400"></i>
                            <span class="text-gray-600">Mulai: 2020</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone text-gray-400"></i>
                            <span class="text-gray-600">0812-3456-7891</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-home text-gray-400"></i>
                            <span class="text-gray-600">RT 01, Dusun Dagan</span>
                        </div>
                        <div class="pt-4">
                            <h4 class="font-semibold text-gray-800 mb-2">Keahlian:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">Pertanian</span>
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">UMKM</span>
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">Sosial</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- RT 02 -->
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="text-center mb-6">
                        <div class="w-24 h-24 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-user text-4xl text-green-600"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Pak Bambang</h3>
                        <p class="text-green-600 font-medium">Ketua RT 02</p>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-calendar text-gray-400"></i>
                            <span class="text-gray-600">Mulai: 2019</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone text-gray-400"></i>
                            <span class="text-gray-600">0812-3456-7892</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-home text-gray-400"></i>
                            <span class="text-gray-600">RT 02, Dusun Dagan</span>
                        </div>
                        <div class="pt-4">
                            <h4 class="font-semibold text-gray-800 mb-2">Keahlian:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm">Peternakan</span>
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm">Pembangunan</span>
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm">Keamanan</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- RT 03 -->
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="text-center mb-6">
                        <div class="w-24 h-24 bg-purple-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-user text-4xl text-purple-600"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Pak Candra</h3>
                        <p class="text-purple-600 font-medium">Ketua RT 03</p>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-calendar text-gray-400"></i>
                            <span class="text-gray-600">Mulai: 2021</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone text-gray-400"></i>
                            <span class="text-gray-600">0812-3456-7893</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-home text-gray-400"></i>
                            <span class="text-gray-600">RT 03, Dusun Dagan</span>
                        </div>
                        <div class="pt-4">
                            <h4 class="font-semibold text-gray-800 mb-2">Keahlian:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-sm">Perkebunan</span>
                                <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-sm">Teknologi</span>
                                <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-sm">Pendidikan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Responsibilities -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Tugas dan Tanggung Jawab</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Para Ketua RT memiliki berbagai tugas dan tanggung jawab untuk melayani masyarakat di tingkat RT
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-blue-500">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-file-alt text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Administrasi</h3>
                    <p class="text-gray-600">Mengelola dokumen kependudukan dan administrasi RT</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-green-500">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-users text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Pembinaan</h3>
                    <p class="text-gray-600">Membina dan mengarahkan warga RT dalam berbagai kegiatan</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-purple-500">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-handshake text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Mediasi</h3>
                    <p class="text-gray-600">Menyelesaikan konflik dan masalah antar warga RT</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-orange-500">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-bullhorn text-2xl text-orange-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Sosialisasi</h3>
                    <p class="text-gray-600">Menyosialisasikan program dan kebijakan kepada warga RT</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-teal-600 to-teal-800 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Butuh Bantuan dari Ketua RT?</h2>
            <p class="text-xl text-teal-100 mb-8 max-w-2xl mx-auto">
                Hubungi Ketua RT setempat untuk berbagai keperluan administrasi atau konsultasi
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="../contact/telepon.php" class="bg-white text-teal-600 px-8 py-3 rounded-lg font-semibold hover:bg-teal-50 transition duration-300">
                    <i class="fas fa-phone mr-2"></i>
                    Hubungi Langsung
                </a>
                <a href="../contact/email.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-teal-600 transition duration-300">
                    <i class="fas fa-envelope mr-2"></i>
                    Kirim Email
                </a>
            </div>
        </div>
    </section>

    <?php include '../../includes/footer.php'; ?>
</body>
</html>

