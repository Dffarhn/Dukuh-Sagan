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
                    <a href="<?php echo getContactInfo()['social_media']['facebook']; ?>" target="_blank" class="bg-primary-green hover:bg-secondary-green text-white p-3 rounded-full transition-colors">
                        <i class="fab fa-facebook-f">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </i>
                    </a>
                    <a href="<?php echo getContactInfo()['social_media']['instagram']; ?>" target="_blank" class="bg-primary-green hover:bg-secondary-green text-white p-3 rounded-full transition-colors">
                        <i class="fab fa-instagram">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987 6.62 0 11.987-5.367 11.987-11.987C24.014 5.367 18.637.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.323-1.297C4.198 14.895 3.708 13.744 3.708 12.447s.49-2.448 1.418-3.323c.875-.807 2.026-1.297 3.323-1.297s2.448.49 3.323 1.297c.928.875 1.418 2.026 1.418 3.323s-.49 2.448-1.418 3.244c-.875.807-2.026 1.297-3.323 1.297zm7.83-9.781c-.49 0-.928-.175-1.297-.49-.368-.315-.49-.753-.49-1.243 0-.49.122-.928.49-1.243.369-.315.807-.49 1.297-.49s.928.175 1.297.49c.368.315.49.753.49 1.243 0 .49-.122.928-.49 1.243-.369.315-.807.49-1.297.49z"/>
                            </svg>
                        </i>
                    </a>
                    <a href="<?php echo getContactInfo()['social_media']['youtube']; ?>" target="_blank" class="bg-primary-green hover:bg-secondary-green text-white p-3 rounded-full transition-colors">
                        <i class="fab fa-youtube">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </i>
                    </a>
                    <a href="<?php echo getWhatsAppLink(); ?>" target="_blank" class="bg-primary-green hover:bg-secondary-green text-white p-3 rounded-full transition-colors">
                        <i class="fab fa-whatsapp">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                            </svg>
                        </i>
                    </a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h4 class="text-xl font-bold mb-6">Menu Cepat</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="#budaya" class="text-gray-300 hover:text-light-green transition-colors">
                            <i class="fas fa-chevron-right mr-2">
                                <svg class="fallback-icon" width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                                </svg>
                            </i>
                            Budaya Lokal
                        </a>
                    </li>
                    <li>
                        <a href="#sejarah" class="text-gray-300 hover:text-light-green transition-colors">
                            <i class="fas fa-chevron-right mr-2">
                                <svg class="fallback-icon" width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                                </svg>
                            </i>
                            Sejarah Dusun
                        </a>
                    </li>
                    <li>
                        <a href="#umkm" class="text-gray-300 hover:text-light-green transition-colors">
                            <i class="fas fa-chevron-right mr-2">
                                <svg class="fallback-icon" width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                                </svg>
                            </i>
                            UMKM Lokal
                        </a>
                    </li>
                    <li>
                        <a href="#tokoh" class="text-gray-300 hover:text-light-green transition-colors">
                            <i class="fas fa-chevron-right mr-2">
                                <svg class="fallback-icon" width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                                </svg>
                            </i>
                            Tokoh Masyarakat
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-light-green transition-colors">
                            <i class="fas fa-chevron-right mr-2">
                                <svg class="fallback-icon" width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                                </svg>
                            </i>
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
                        <i class="fas fa-map-marker-alt text-light-green mt-1 mr-3">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                        </i>
                        <div>
                            <p class="text-gray-300"><?php echo getAddress()['street']; ?></p>
                            <p class="text-gray-300"><?php echo getAddress()['district']; ?></p>
                            <p class="text-gray-300"><?php echo getAddress()['province']; ?></p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-phone text-light-green mr-3">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                            </svg>
                        </i>
                        <a href="tel:<?php echo getPhoneNumber(); ?>" class="text-gray-300 hover:text-light-green transition-colors">
                            <?php echo getPhoneNumber(); ?>
                        </a>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-envelope text-light-green mr-3">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                        </i>
                        <a href="mailto:<?php echo getEmail(); ?>" class="text-gray-300 hover:text-light-green transition-colors">
                            <?php echo getEmail(); ?>
                        </a>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-clock text-light-green mr-3">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                                <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                            </svg>
                        </i>
                        <span class="text-gray-300"><?php echo getOperatingHours(); ?></span>
                    </div>
                    <div class="flex items-center">
                        <i class="fab fa-whatsapp text-light-green mr-3">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                            </svg>
                        </i>
                        <a href="<?php echo getWhatsAppLink(); ?>" target="_blank" class="text-gray-300 hover:text-light-green transition-colors">
                            <?php echo getWhatsAppNumber(); ?>
                        </a>
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
                            <i class="fas fa-check-circle text-light-green mr-3">
                                <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                            </i>
                            <span class="text-gray-100">Respon cepat dalam 24 jam</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-light-green mr-3">
                                <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                            </i>
                            <span class="text-gray-100">Konsultasi gratis</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-light-green mr-3">
                                <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                            </i>
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
                        <i class="fas fa-paper-plane mr-2">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                            </svg>
                        </i>
                        Kirim Pesan
                    </button>
                </form>
                
                <!-- Script untuk mengirim nomor WhatsApp ke JavaScript -->
                <script>
                    // Kirim nomor WhatsApp dari PHP ke JavaScript
                    window.whatsappNumber = '<?php echo getContactInfo()['whatsapp']['number']; ?>';
                </script>
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
