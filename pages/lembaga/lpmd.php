<?php include '../../includes/layout.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LPMD - Dusun Dagan</title>
    <meta name="description" content="Informasi lengkap tentang LPMD (Lembaga Pemberdayaan Masyarakat Desa) Dusun Dagan beserta program dan kegiatannya.">
    
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
    <section class="hero-section bg-gradient-to-br from-emerald-600 to-emerald-800 text-white py-20">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <div class="inline-flex items-center px-4 py-2 bg-emerald-500 bg-opacity-20 rounded-full text-sm font-medium mb-6">
                    <i class="fas fa-hands-helping mr-2"></i>
                    Pemberdayaan Masyarakat
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    LPMD
                    <span class="block text-emerald-300">Dusun Dagan</span>
                </h1>
                <p class="text-xl text-emerald-100 max-w-3xl mx-auto mb-8">
                    Lembaga Pemberdayaan Masyarakat Desa yang berkomitmen untuk meningkatkan kesejahteraan masyarakat Dusun Dagan
                </p>
                <div class="flex flex-wrap justify-center gap-6">
                    <div class="bg-white bg-opacity-10 rounded-lg p-4 text-center">
                        <div class="text-3xl font-bold">15</div>
                        <div class="text-sm text-emerald-200">Program Aktif</div>
                    </div>
                    <div class="bg-white bg-opacity-10 rounded-lg p-4 text-center">
                        <div class="text-3xl font-bold">312</div>
                        <div class="text-sm text-emerald-200">KK Terlayani</div>
                    </div>
                    <div class="bg-white bg-opacity-10 rounded-lg p-4 text-center">
                        <div class="text-3xl font-bold">85%</div>
                        <div class="text-sm text-emerald-200">Tingkat Keberhasilan</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About LPMD -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Tentang LPMD</h2>
                    <p class="text-gray-600 mb-6">
                        LPMD (Lembaga Pemberdayaan Masyarakat Desa) Dusun Dagan adalah organisasi yang bertujuan untuk memberdayakan masyarakat melalui berbagai program pembangunan dan peningkatan kualitas hidup.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-bullseye text-emerald-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Visi</h3>
                                <p class="text-gray-600">Mewujudkan masyarakat Dusun Dagan yang mandiri, sejahtera, dan berdaya saing</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-tasks text-emerald-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Misi</h3>
                                <p class="text-gray-600">Meningkatkan kapasitas masyarakat melalui program pemberdayaan yang berkelanjutan</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-calendar text-emerald-600"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Berdiri Sejak</h3>
                                <p class="text-gray-600">2018 dengan pengalaman 6 tahun dalam pemberdayaan masyarakat</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-br from-emerald-50 to-green-50 rounded-xl p-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Struktur Organisasi</h3>
                    <div class="space-y-4">
                        <div class="bg-white rounded-lg p-4 shadow-sm">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="font-semibold text-gray-800">Ketua</div>
                                    <div class="text-sm text-gray-600">Pak Suharto</div>
                                </div>
                                <div class="bg-emerald-100 text-emerald-800 px-3 py-1 rounded-full text-sm font-medium">
                                    Ketua
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg p-4 shadow-sm">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="font-semibold text-gray-800">Wakil Ketua</div>
                                    <div class="text-sm text-gray-600">Pak Ahmad</div>
                                </div>
                                <div class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                                    Wakil
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg p-4 shadow-sm">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="font-semibold text-gray-800">Sekretaris</div>
                                    <div class="text-sm text-gray-600">Pak Bambang</div>
                                </div>
                                <div class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">
                                    Sekretaris
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg p-4 shadow-sm">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="font-semibold text-gray-800">Bendahara</div>
                                    <div class="text-sm text-gray-600">Pak Candra</div>
                                </div>
                                <div class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm font-medium">
                                    Bendahara
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Program Unggulan</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Berbagai program pemberdayaan yang telah dan sedang dilaksanakan oleh LPMD Dusun Dagan
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-seedling text-2xl text-emerald-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Pemberdayaan Pertanian</h3>
                    <p class="text-gray-600 mb-4">Program pelatihan dan modernisasi pertanian untuk meningkatkan produktivitas</p>
                    <div class="flex items-center text-sm text-emerald-600">
                        <i class="fas fa-users mr-2"></i>
                        <span>150 KK Terlibat</span>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-store text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Pengembangan UMKM</h3>
                    <p class="text-gray-600 mb-4">Pendampingan dan pelatihan untuk pengembangan usaha mikro kecil menengah</p>
                    <div class="flex items-center text-sm text-blue-600">
                        <i class="fas fa-users mr-2"></i>
                        <span>45 UMKM Terbantu</span>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-graduation-cap text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Pendidikan Non-Formal</h3>
                    <p class="text-gray-600 mb-4">Program pendidikan keterampilan dan pelatihan untuk masyarakat</p>
                    <div class="flex items-center text-sm text-purple-600">
                        <i class="fas fa-users mr-2"></i>
                        <span>200 Peserta</span>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-heart text-2xl text-orange-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Kesehatan Masyarakat</h3>
                    <p class="text-gray-600 mb-4">Program peningkatan kesehatan dan sanitasi lingkungan</p>
                    <div class="flex items-center text-sm text-orange-600">
                        <i class="fas fa-users mr-2"></i>
                        <span>312 KK Terlayani</span>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-recycle text-2xl text-red-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Lingkungan Hidup</h3>
                    <p class="text-gray-600 mb-4">Program pelestarian lingkungan dan pengelolaan sampah</p>
                    <div class="flex items-center text-sm text-red-600">
                        <i class="fas fa-users mr-2"></i>
                        <span>100% RT Terlibat</span>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-network-wired text-2xl text-teal-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Teknologi Informasi</h3>
                    <p class="text-gray-600 mb-4">Pelatihan penggunaan teknologi untuk peningkatan produktivitas</p>
                    <div class="flex items-center text-sm text-teal-600">
                        <i class="fas fa-users mr-2"></i>
                        <span>75 Peserta</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievements -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Prestasi dan Pencapaian</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Berbagai prestasi dan pencapaian yang telah diraih LPMD Dusun Dagan
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-12">
                <div class="space-y-6">
                    <div class="bg-gradient-to-r from-emerald-50 to-green-50 rounded-xl p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-trophy text-emerald-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">LPMD Terbaik 2023</h3>
                                <p class="text-emerald-600">Tingkat Kecamatan</p>
                            </div>
                        </div>
                        <p class="text-gray-600">Mendapatkan penghargaan sebagai LPMD terbaik dalam kategori pemberdayaan masyarakat</p>
                    </div>
                    
                    <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-xl p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-chart-line text-blue-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">Peningkatan Ekonomi</h3>
                                <p class="text-blue-600">30% Peningkatan</p>
                            </div>
                        </div>
                        <p class="text-gray-600">Berhasil meningkatkan pendapatan masyarakat sebesar 30% melalui program pemberdayaan</p>
                    </div>
                </div>
                
                <div class="space-y-6">
                    <div class="bg-gradient-to-r from-purple-50 to-indigo-50 rounded-xl p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-award text-purple-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">Program Inovatif</h3>
                                <p class="text-purple-600">Pengakuan Nasional</p>
                            </div>
                        </div>
                        <p class="text-gray-600">Program "Dusun Digital" mendapat pengakuan sebagai program inovatif tingkat nasional</p>
                    </div>
                    
                    <div class="bg-gradient-to-r from-orange-50 to-amber-50 rounded-xl p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-users text-orange-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">Partisipasi Masyarakat</h3>
                                <p class="text-orange-600">95% Kehadiran</p>
                            </div>
                        </div>
                        <p class="text-gray-600">Tingkat partisipasi masyarakat dalam program LPMD mencapai 95%</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-emerald-600 to-emerald-800 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Ingin Bergabung dengan LPMD?</h2>
            <p class="text-xl text-emerald-100 mb-8 max-w-2xl mx-auto">
                Hubungi LPMD untuk informasi lebih lanjut tentang program pemberdayaan atau bergabung sebagai anggota
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="../contact/telepon.php" class="bg-white text-emerald-600 px-8 py-3 rounded-lg font-semibold hover:bg-emerald-50 transition duration-300">
                    <i class="fas fa-phone mr-2"></i>
                    Hubungi LPMD
                </a>
                <a href="../contact/email.php" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-emerald-600 transition duration-300">
                    <i class="fas fa-envelope mr-2"></i>
                    Kirim Email
                </a>
            </div>
        </div>
    </section>

    <?php include '../../includes/footer.php'; ?>
</body>
</html>

