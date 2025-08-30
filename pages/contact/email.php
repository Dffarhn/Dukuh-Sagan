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
    <title>Email - Dusun Dagan</title>
    <meta name="description" content="Informasi kontak email resmi Dusun Dagan untuk berbagai keperluan komunikasi dan informasi.">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Email - Dusun Dagan">
    <meta property="og:description" content="Informasi kontak email resmi Dusun Dagan untuk berbagai keperluan komunikasi dan informasi.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $base_url; ?>/pages/contact/email.php">
    <meta property="og:image" content="<?php echo $base_url; ?>/assets/images/logo.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Email - Dusun Dagan">
    <meta name="twitter:description" content="Informasi kontak email resmi Dusun Dagan untuk berbagai keperluan komunikasi dan informasi.">
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
                    <i class="fas fa-envelope mr-2"></i>
                    Kontak Email
                </div>
                
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Email
                    <span class="block text-green-200">Dusun Dagan</span>
                </h1>
                
                <p class="text-xl md:text-2xl text-green-100 mb-8 max-w-3xl mx-auto">
                    Hubungi kami melalui email untuk informasi, pertanyaan, atau kerjasama
                </p>
                
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#email-info" class="bg-white text-green-700 px-8 py-3 rounded-full font-semibold hover:bg-green-50 transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-info-circle mr-2"></i>
                        Lihat Email
                    </a>
                    <a href="#contact-form" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-green-700 transition-all duration-300">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Kirim Pesan
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Email Information Section -->
    <section id="email-info" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Alamat Email Resmi
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Berikut adalah alamat email resmi Dusun Dagan untuk berbagai keperluan komunikasi.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Email Utama -->
                    <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8">
                        <div class="text-center mb-6">
                            <i class="fas fa-envelope text-4xl text-green-600 mb-4"></i>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Email Utama</h3>
                            <p class="text-gray-600">Kontak umum dan informasi</p>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="bg-white rounded-lg p-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Email Resmi</h4>
                                        <p class="text-green-600">dusundagan@gmail.com</p>
                                    </div>
                                    <a href="mailto:dusundagan@gmail.com" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                                        <i class="fas fa-paper-plane"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="bg-white rounded-lg p-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="font-semibold text-gray-800">WhatsApp</h4>
                                        <p class="text-green-600">+62 812-3456-7890</p>
                                    </div>
                                    <a href="https://wa.me/6281234567890" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Email Khusus -->
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8">
                        <div class="text-center mb-6">
                            <i class="fas fa-users text-4xl text-blue-600 mb-4"></i>
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Email Khusus</h3>
                            <p class="text-gray-600">Untuk keperluan tertentu</p>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="bg-white rounded-lg p-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="font-semibold text-gray-800">UMKM</h4>
                                        <p class="text-blue-600">umkm.dusundagan@gmail.com</p>
                                    </div>
                                    <a href="mailto:umkm.dusundagan@gmail.com" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                        <i class="fas fa-paper-plane"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="bg-white rounded-lg p-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Pertanian</h4>
                                        <p class="text-blue-600">pertanian.dusundagan@gmail.com</p>
                                    </div>
                                    <a href="mailto:pertanian.dusundagan@gmail.com" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                        <i class="fas fa-paper-plane"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="bg-white rounded-lg p-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Peternakan</h4>
                                        <p class="text-blue-600">peternakan.dusundagan@gmail.com</p>
                                    </div>
                                    <a href="mailto:peternakan.dusundagan@gmail.com" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                        <i class="fas fa-paper-plane"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Hours Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Jam Operasional Email
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Waktu terbaik untuk mengirim email dan mendapatkan respons cepat.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-2xl p-8 shadow-lg text-center">
                        <i class="fas fa-clock text-4xl text-green-600 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Senin - Jumat</h3>
                        <p class="text-gray-600">08:00 - 17:00 WIB</p>
                        <p class="text-sm text-gray-500 mt-2">Respons dalam 2-4 jam</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-8 shadow-lg text-center">
                        <i class="fas fa-calendar text-4xl text-green-600 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Sabtu</h3>
                        <p class="text-gray-600">08:00 - 12:00 WIB</p>
                        <p class="text-sm text-gray-500 mt-2">Respons dalam 4-8 jam</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-8 shadow-lg text-center">
                        <i class="fas fa-home text-4xl text-green-600 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Minggu</h3>
                        <p class="text-gray-600">Libur</p>
                        <p class="text-sm text-gray-500 mt-2">Respons Senin pagi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact-form" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Kirim Pesan Email
                    </h2>
                    <p class="text-lg text-gray-600">
                        Gunakan form di bawah ini untuk mengirim pesan langsung ke email kami.
                    </p>
                </div>
                
                <div class="bg-gray-50 rounded-2xl p-8">
                    <form action="mailto:dusundagan@gmail.com" method="post" enctype="text/plain" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                                <input type="text" id="name" name="name" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Anda</label>
                                <input type="email" id="email" name="email" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            </div>
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subjek</label>
                            <select id="subject" name="subject" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <option value="">Pilih subjek</option>
                                <option value="Informasi Umum">Informasi Umum</option>
                                <option value="UMKM">UMKM</option>
                                <option value="Pertanian">Pertanian</option>
                                <option value="Peternakan">Peternakan</option>
                                <option value="Kerjasama">Kerjasama</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                            <textarea id="message" name="message" rows="6" required 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                                      placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" 
                                    class="bg-green-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-green-700 transition-all duration-300 transform hover:scale-105">
                                <i class="fas fa-paper-plane mr-2"></i>
                                Kirim Email
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Tips Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Tips Mengirim Email yang Efektif
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Beberapa tips untuk memastikan email Anda mendapat respons yang cepat dan tepat.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Struktur Email yang Baik</h3>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Gunakan subjek yang jelas dan spesifik</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Sebutkan nama dan identitas Anda</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Tulis pesan yang singkat dan jelas</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Sertakan informasi kontak Anda</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Yang Perlu Dihindari</h3>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <i class="fas fa-times-circle text-red-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Mengirim email tanpa subjek</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-times-circle text-red-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Pesan yang terlalu panjang</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-times-circle text-red-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Menggunakan bahasa yang tidak sopan</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-times-circle text-red-500 mr-3 mt-1"></i>
                                <span class="text-gray-700">Mengirim attachment tanpa penjelasan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-green-600 to-green-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Butuh Bantuan Cepat?
            </h2>
            <p class="text-xl text-green-100 mb-8 max-w-2xl mx-auto">
                Untuk pertanyaan mendesak, gunakan WhatsApp atau telepon kami untuk respons yang lebih cepat.
            </p>
            
            <div class="flex flex-wrap justify-center gap-4">
                <a href="telepon.php" class="bg-white text-green-700 px-8 py-3 rounded-full font-semibold hover:bg-green-50 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-phone mr-2"></i>
                    Telepon Kami
                </a>
                <a href="https://wa.me/6281234567890" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-green-700 transition-all duration-300">
                    <i class="fab fa-whatsapp mr-2"></i>
                    WhatsApp
                </a>
            </div>
        </div>
    </section>

    <?php include '../../includes/footer.php'; ?>
    
    <!-- Custom JavaScript -->
    <script src="../../assets/js/main.js"></script>
</body>
</html>
