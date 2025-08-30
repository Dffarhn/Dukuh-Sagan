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
    <title>Website - Dusun Dagan</title>
    <meta name="description" content="Informasi website resmi dan media sosial Dusun Dagan untuk akses informasi terkini.">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Website - Dusun Dagan">
    <meta property="og:description" content="Informasi website resmi dan media sosial Dusun Dagan untuk akses informasi terkini.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $base_url; ?>/pages/contact/website.php">
    <meta property="og:image" content="<?php echo $base_url; ?>/assets/images/logo.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Website - Dusun Dagan">
    <meta name="twitter:description" content="Informasi website resmi dan media sosial Dusun Dagan untuk akses informasi terkini.">
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
                    <i class="fas fa-globe mr-2"></i>
                    Website Resmi
                </div>
                
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Website
                    <span class="block text-green-200">Dusun Dagan</span>
                </h1>
                
                <p class="text-xl md:text-2xl text-green-100 mb-8 max-w-3xl mx-auto">
                    Akses informasi terkini dan terhubung dengan kami melalui website resmi dan media sosial
                </p>
                
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#website-info" class="bg-white text-green-700 px-8 py-3 rounded-full font-semibold hover:bg-green-50 transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-info-circle mr-2"></i>
                        Lihat Website
                    </a>
                    <a href="#social-media" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-green-700 transition-all duration-300">
                        <i class="fas fa-share-alt mr-2"></i>
                        Media Sosial
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Website Information Section -->
    <section id="website-info" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Website Resmi Dusun Dagan
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Website resmi yang menyediakan informasi lengkap tentang Dusun Dagan, potensi, dan layanan yang tersedia.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Website Utama -->
                    <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8">
                        <div class="text-center mb-6">
                            <i class="fas fa-globe text-4xl text-green-600 mb-4"></i>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Website Utama</h3>
                            <p class="text-gray-600">Portal informasi resmi</p>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="bg-white rounded-lg p-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Website Resmi</h4>
                                        <p class="text-green-600">www.dusundagan.com</p>
                                    </div>
                                    <a href="https://www.dusundagan.com" target="_blank" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="bg-white rounded-lg p-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Status</h4>
                                        <p class="text-green-600">Online & Aktif</p>
                                    </div>
                                    <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Fitur Website -->
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8">
                        <div class="text-center mb-6">
                            <i class="fas fa-cogs text-4xl text-blue-600 mb-4"></i>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Fitur Website</h3>
                            <p class="text-gray-600">Layanan yang tersedia</p>
                        </div>
                        
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-gray-700">Informasi Profil Dusun</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-gray-700">Potensi Ekonomi</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-gray-700">Galeri Foto</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-gray-700">Kontak & Layanan</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-blue-500 mr-3"></i>
                                <span class="text-gray-700">Berita & Pengumuman</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Section -->
    <section id="social-media" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Media Sosial Resmi
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Ikuti kami di media sosial untuk mendapatkan informasi terkini dan terhubung dengan komunitas Dusun Dagan.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Facebook -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 text-center">
                        <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fab fa-facebook-f text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Facebook</h3>
                        <p class="text-gray-600 mb-4">@DusunDagan</p>
                        <a href="https://facebook.com/DusunDagan" target="_blank" 
                           class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition-colors">
                            Ikuti
                        </a>
                    </div>
                    
                    <!-- Instagram -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 text-center">
                        <div class="bg-gradient-to-r from-purple-500 to-pink-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fab fa-instagram text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Instagram</h3>
                        <p class="text-gray-600 mb-4">@dusundagan</p>
                        <a href="https://instagram.com/dusundagan" target="_blank" 
                           class="bg-gradient-to-r from-purple-500 to-pink-500 text-white px-6 py-2 rounded-full hover:from-purple-600 hover:to-pink-600 transition-colors">
                            Ikuti
                        </a>
                    </div>
                    
                    <!-- YouTube -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 text-center">
                        <div class="bg-red-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fab fa-youtube text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">YouTube</h3>
                        <p class="text-gray-600 mb-4">Dusun Dagan Channel</p>
                        <a href="https://youtube.com/@DusunDagan" target="_blank" 
                           class="bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition-colors">
                            Subscribe
                        </a>
                    </div>
                    
                    <!-- TikTok -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 text-center">
                        <div class="bg-black w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fab fa-tiktok text-2xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">TikTok</h3>
                        <p class="text-gray-600 mb-4">@dusundagan</p>
                        <a href="https://tiktok.com/@dusundagan" target="_blank" 
                           class="bg-black text-white px-6 py-2 rounded-full hover:bg-gray-800 transition-colors">
                            Ikuti
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Website Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Fitur Website
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Berbagai fitur yang tersedia di website resmi Dusun Dagan untuk memudahkan akses informasi.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-info-circle text-2xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Informasi Lengkap</h3>
                        <p class="text-gray-600">Profil, sejarah, dan potensi Dusun Dagan</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-images text-2xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Galeri Foto</h3>
                        <p class="text-gray-600">Koleksi foto kegiatan dan keindahan dusun</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-phone text-2xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Kontak Langsung</h3>
                        <p class="text-gray-600">Informasi kontak dan layanan</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-newspaper text-2xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Berita Terkini</h3>
                        <p class="text-gray-600">Update kegiatan dan pengumuman</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-mobile-alt text-2xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Responsive Design</h3>
                        <p class="text-gray-600">Akses mudah dari berbagai perangkat</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-search text-2xl text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Pencarian Cepat</h3>
                        <p class="text-gray-600">Temukan informasi dengan mudah</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Website Statistics Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Statistik Website
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Data pengunjung dan aktivitas website Dusun Dagan.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-4 gap-8">
                    <div class="bg-white rounded-2xl p-8 shadow-lg text-center">
                        <div class="text-4xl font-bold text-green-600 mb-2">10K+</div>
                        <div class="text-gray-600">Pengunjung Bulanan</div>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-8 shadow-lg text-center">
                        <div class="text-4xl font-bold text-green-600 mb-2">500+</div>
                        <div class="text-gray-600">Halaman Dilihat</div>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-8 shadow-lg text-center">
                        <div class="text-4xl font-bold text-green-600 mb-2">50+</div>
                        <div class="text-gray-600">Artikel</div>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-8 shadow-lg text-center">
                        <div class="text-4xl font-bold text-green-600 mb-2">99.9%</div>
                        <div class="text-gray-600">Uptime</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-green-600 to-green-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Kunjungi Website Kami
            </h2>
            <p class="text-xl text-green-100 mb-8 max-w-2xl mx-auto">
                Dapatkan informasi lengkap dan terbaru tentang Dusun Dagan melalui website resmi kami.
            </p>
            
            <div class="flex flex-wrap justify-center gap-4">
                <a href="https://www.dusundagan.com" target="_blank" class="bg-white text-green-700 px-8 py-3 rounded-full font-semibold hover:bg-green-50 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-globe mr-2"></i>
                    Kunjungi Website
                </a>
                <a href="https://facebook.com/DusunDagan" target="_blank" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-green-700 transition-all duration-300">
                    <i class="fab fa-facebook mr-2"></i>
                    Facebook
                </a>
            </div>
        </div>
    </section>

    <?php include '../../includes/footer.php'; ?>
    
    <!-- Custom JavaScript -->
    <script src="../../assets/js/main.js"></script>
</body>
</html>
