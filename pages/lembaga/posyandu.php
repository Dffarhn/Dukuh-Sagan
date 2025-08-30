<?php include '../../includes/layout.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posyandu - Dusun Dagan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body class="bg-gray-50">
    <?php include '../../includes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section bg-gradient-to-br from-green-900 via-green-800 to-emerald-900 text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <div class="badge-modern inline-block mb-6">
                    <i class="fas fa-heartbeat mr-2"></i>
                    Layanan Kesehatan
                </div>
                <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-green-400 via-emerald-400 to-teal-400 bg-clip-text text-transparent">
                    Posyandu Dusun Dagan
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-green-100">
                    Melayani kesehatan ibu dan anak untuk masa depan yang lebih baik
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#layanan" class="btn-modern-primary">
                        <i class="fas fa-info-circle mr-2"></i>
                        Lihat Layanan
                    </a>
                    <a href="#jadwal" class="btn-modern-secondary">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        Jadwal Posyandu
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-2 h-2 bg-green-400 rounded-full animate-float"></div>
        <div class="absolute top-40 right-20 w-3 h-3 bg-emerald-400 rounded-full animate-float-delayed"></div>
        <div class="absolute bottom-20 left-20 w-2 h-2 bg-teal-400 rounded-full animate-float"></div>
        <div class="absolute bottom-40 right-10 w-3 h-3 bg-green-300 rounded-full animate-float-delayed"></div>
    </section>

    <!-- About Posyandu -->
    <section id="layanan" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Tentang Posyandu</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Posyandu (Pos Pelayanan Terpadu) adalah wadah pemberdayaan masyarakat yang dibentuk dari, oleh, dan untuk masyarakat dalam penyelenggaraan pembangunan kesehatan.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-green-50 p-6 rounded-lg border border-green-200">
                    <div class="text-green-600 text-3xl mb-4">
                        <i class="fas fa-baby"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Pelayanan Balita</h3>
                    <p class="text-gray-600">Pemantauan tumbuh kembang, imunisasi, dan pemberian vitamin A untuk balita.</p>
                </div>
                
                <div class="bg-emerald-50 p-6 rounded-lg border border-emerald-200">
                    <div class="text-emerald-600 text-3xl mb-4">
                        <i class="fas fa-female"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Pelayanan Ibu Hamil</h3>
                    <p class="text-gray-600">Pemeriksaan kehamilan, pemberian tablet Fe, dan konseling gizi untuk ibu hamil.</p>
                </div>
                
                <div class="bg-teal-50 p-6 rounded-lg border border-teal-200">
                    <div class="text-teal-600 text-3xl mb-4">
                        <i class="fas fa-pills"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Pemberian Obat</h3>
                    <p class="text-gray-600">Pemberian obat cacing, vitamin, dan suplemen gizi sesuai kebutuhan.</p>
                </div>
                
                <div class="bg-green-50 p-6 rounded-lg border border-green-200">
                    <div class="text-green-600 text-3xl mb-4">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Pemantauan Gizi</h3>
                    <p class="text-gray-600">Penimbangan rutin dan pemantauan status gizi balita dan ibu hamil.</p>
                </div>
                
                <div class="bg-emerald-50 p-6 rounded-lg border border-emerald-200">
                    <div class="text-emerald-600 text-3xl mb-4">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Penyuluhan</h3>
                    <p class="text-gray-600">Penyuluhan kesehatan, gizi, dan pola hidup sehat untuk keluarga.</p>
                </div>
                
                <div class="bg-teal-50 p-6 rounded-lg border border-teal-200">
                    <div class="text-teal-600 text-3xl mb-4">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Pelayanan KB</h3>
                    <p class="text-gray-600">Konseling dan pelayanan Keluarga Berencana untuk pasangan usia subur.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Schedule Section -->
    <section id="jadwal" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Jadwal Posyandu</h2>
                <p class="text-lg text-gray-600">Pelayanan Posyandu dilaksanakan secara rutin setiap bulan</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">
                        <i class="fas fa-calendar-day text-green-600 mr-3"></i>
                        Jadwal Rutin
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center p-4 bg-green-50 rounded-lg">
                            <div class="text-green-600 text-xl mr-4">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Hari Pelayanan</h4>
                                <p class="text-gray-600">Setiap hari Sabtu minggu ke-2</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-emerald-50 rounded-lg">
                            <div class="text-emerald-600 text-xl mr-4">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Waktu Pelayanan</h4>
                                <p class="text-gray-600">08:00 - 12:00 WIB</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-teal-50 rounded-lg">
                            <div class="text-teal-600 text-xl mr-4">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Tempat Pelayanan</h4>
                                <p class="text-gray-600">Balai Dusun Dagan</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">
                        <i class="fas fa-user-nurse text-emerald-600 mr-3"></i>
                        Petugas Posyandu
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center p-4 bg-green-50 rounded-lg">
                            <div class="text-green-600 text-xl mr-4">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Bidan Desa</h4>
                                <p class="text-gray-600">Ibu Siti Aminah, S.Keb</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-emerald-50 rounded-lg">
                            <div class="text-emerald-600 text-xl mr-4">
                                <i class="fas fa-user-nurse"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Kader Posyandu</h4>
                                <p class="text-gray-600">5 orang kader terlatih</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-teal-50 rounded-lg">
                            <div class="text-teal-600 text-xl mr-4">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Kontak Darurat</h4>
                                <p class="text-gray-600">0812-3456-7890</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Pencapaian Posyandu</h2>
                <p class="text-lg text-gray-600">Data pelayanan Posyandu Dusun Dagan tahun 2024</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-green-600 mb-2">95%</div>
                    <p class="text-gray-600">Cakupan Imunisasi</p>
                </div>
                
                <div class="text-center">
                    <div class="text-4xl font-bold text-emerald-600 mb-2">150+</div>
                    <p class="text-gray-600">Balita Terlayani</p>
                </div>
                
                <div class="text-center">
                    <div class="text-4xl font-bold text-teal-600 mb-2">25</div>
                    <p class="text-gray-600">Ibu Hamil Aktif</p>
                </div>
                
                <div class="text-center">
                    <div class="text-4xl font-bold text-green-600 mb-2">12</div>
                    <p class="text-gray-600">Kali Pelayanan/Tahun</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Hubungi Posyandu</h2>
                <p class="text-lg text-gray-600">Untuk informasi lebih lanjut tentang pelayanan Posyandu</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">
                        <i class="fas fa-info-circle text-green-600 mr-3"></i>
                        Informasi Kontak
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <i class="fas fa-phone text-green-600 mr-3"></i>
                            <span class="text-gray-600">0812-3456-7890</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-envelope text-green-600 mr-3"></i>
                            <span class="text-gray-600">posyandu@dusundagan.com</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-map-marker-alt text-green-600 mr-3"></i>
                            <span class="text-gray-600">Balai Dusun Dagan</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">
                        <i class="fas fa-clock text-emerald-600 mr-3"></i>
                        Jam Pelayanan
                    </h3>
                    <div class="space-y-4">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Senin - Jumat</span>
                            <span class="font-semibold">08:00 - 16:00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Sabtu</span>
                            <span class="font-semibold">08:00 - 12:00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Minggu</span>
                            <span class="font-semibold text-red-600">Tutup</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../../assets/js/main.js"></script>
</body>
</html>

