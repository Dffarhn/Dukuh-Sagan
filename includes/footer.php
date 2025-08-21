<!-- Footer -->
<footer id="kontak" class="bg-dark-green text-white">
    <div class="container mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- About Section -->
            <div class="lg:col-span-2">
                <div class="flex items-center mb-6">
                    <img src="assets/images/logo.png" alt="Dusun Dagan Logo" class="h-12 w-auto mr-3 logo-image">
                    <h3 class="text-2xl font-bold">Dusun Dagan</h3>
                </div>
                <p class="text-gray-300 mb-6 leading-relaxed">
                    Dusun Dagan adalah destinasi wisata budaya dan UMKM yang menawarkan pengalaman 
                    autentik dengan produk-produk berkualitas dari tangan terampil masyarakat lokal. 
                    Kami berkomitmen untuk melestarikan budaya dan mengembangkan ekonomi lokal.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="bg-primary-green hover:bg-secondary-green text-white p-3 rounded-full transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="bg-primary-green hover:bg-secondary-green text-white p-3 rounded-full transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="bg-primary-green hover:bg-secondary-green text-white p-3 rounded-full transition-colors">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="bg-primary-green hover:bg-secondary-green text-white p-3 rounded-full transition-colors">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h4 class="text-xl font-bold mb-6">Menu Cepat</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="#budaya" class="text-gray-300 hover:text-light-green transition-colors">
                            <i class="fas fa-chevron-right mr-2"></i>
                            Budaya Lokal
                        </a>
                    </li>
                    <li>
                        <a href="#sejarah" class="text-gray-300 hover:text-light-green transition-colors">
                            <i class="fas fa-chevron-right mr-2"></i>
                            Sejarah Dusun
                        </a>
                    </li>
                    <li>
                        <a href="#umkm" class="text-gray-300 hover:text-light-green transition-colors">
                            <i class="fas fa-chevron-right mr-2"></i>
                            UMKM Lokal
                        </a>
                    </li>
                    <li>
                        <a href="#tokoh" class="text-gray-300 hover:text-light-green transition-colors">
                            <i class="fas fa-chevron-right mr-2"></i>
                            Tokoh Masyarakat
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-light-green transition-colors">
                            <i class="fas fa-chevron-right mr-2"></i>
                            Galeri Foto
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div>
                <h4 class="text-xl font-bold mb-6">Kontak Kami</h4>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <i class="fas fa-map-marker-alt text-light-green mt-1 mr-3"></i>
                        <div>
                            <p class="text-gray-300">Jl. Dusun Dagan No. 123</p>
                            <p class="text-gray-300">Kecamatan, Kabupaten</p>
                            <p class="text-gray-300">Jawa Tengah, Indonesia</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-phone text-light-green mr-3"></i>
                        <span class="text-gray-300">+62 812-3456-7890</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-envelope text-light-green mr-3"></i>
                        <span class="text-gray-300">info@dusundagan.com</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-clock text-light-green mr-3"></i>
                        <span class="text-gray-300">Senin - Minggu: 08:00 - 20:00</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contact Form -->
        <div class="mt-16 bg-primary-green rounded-lg p-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">Kirim Pesan</h3>
                    <p class="text-gray-100 mb-6">
                        Tertarik dengan produk kami? Ingin berkunjung? Atau ada pertanyaan? 
                        Jangan ragu untuk menghubungi kami!
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-light-green mr-3"></i>
                            <span class="text-gray-100">Respon cepat dalam 24 jam</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-light-green mr-3"></i>
                            <span class="text-gray-100">Konsultasi gratis</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-light-green mr-3"></i>
                            <span class="text-gray-100">Pengiriman ke seluruh Indonesia</span>
                        </div>
                    </div>
                </div>
                
                <form id="contact-form" class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" name="name" placeholder="Nama Lengkap" 
                               class="w-full px-4 py-3 rounded-lg border-0 focus:ring-2 focus:ring-light-green focus:outline-none" required>
                        <input type="email" name="email" placeholder="Email" 
                               class="w-full px-4 py-3 rounded-lg border-0 focus:ring-2 focus:ring-light-green focus:outline-none" required>
                    </div>
                    <input type="text" name="subject" placeholder="Subjek" 
                           class="w-full px-4 py-3 rounded-lg border-0 focus:ring-2 focus:ring-light-green focus:outline-none" required>
                    <textarea name="message" rows="4" placeholder="Pesan Anda" 
                              class="w-full px-4 py-3 rounded-lg border-0 focus:ring-2 focus:ring-light-green focus:outline-none resize-none" required></textarea>
                    <button type="submit" class="w-full bg-light-green text-dark-green px-6 py-3 rounded-lg font-bold hover:bg-white transition-colors">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Bottom Footer -->
        <div class="mt-16 pt-8 border-t border-gray-600">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-gray-300 text-sm">
                    <p>&copy; 2024 Dusun Dagan. Semua hak dilindungi.</p>
                </div>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-300 hover:text-light-green text-sm transition-colors">Kebijakan Privasi</a>
                    <a href="#" class="text-gray-300 hover:text-light-green text-sm transition-colors">Syarat & Ketentuan</a>
                    <a href="#" class="text-gray-300 hover:text-light-green text-sm transition-colors">Peta Situs</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Footer Component End -->
