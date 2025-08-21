<?php
require_once 'config/config.php';
$umkmData = getUMKM();
?>

<!-- UMKM Section -->
<section id="umkm" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl md:text-5xl font-bold text-dark-green mb-4 font-poppins">
                UMKM Lokal
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Produk-produk berkualitas dari tangan terampil masyarakat Dusun Dagan
            </p>
        </div>
        
        <!-- Enhanced Filter Buttons -->
        <div class="flex flex-wrap justify-center gap-6 mb-16 fade-in">
            <button class="modern-filter-btn active" data-category="all">
                <span class="filter-icon">
                    <i class="fas fa-th-large">
                        <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M3 3h7v7H3V3zm0 11h7v7H3v-7zm11-11h7v7h-7V3zm0 11h7v7h-7v-7z"/>
                        </svg>
                    </i>
                </span>
                <span class="filter-text">Semua</span>
            </button>
            <button class="modern-filter-btn" data-category="Kerajinan">
                <span class="filter-icon">
                    <i class="fas fa-hammer">
                        <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/>
                        </svg>
                    </i>
                </span>
                <span class="filter-text">Kerajinan</span>
            </button>
            <button class="modern-filter-btn" data-category="Kuliner">
                <span class="filter-icon">
                    <i class="fas fa-utensils">
                        <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8.1 13.34l2.83-2.83L3.91 3.5c-1.56 1.56-1.56 4.09 0 5.66l4.19 4.18zm6.78-1.81c1.53.71 3.68.21 5.27-1.38 1.91-1.91 2.28-4.65.81-6.12-1.46-1.46-4.2-1.1-6.12.81-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88 1.41-1.41L13.41 13l1.47-1.47z"/>
                        </svg>
                    </i>
                </span>
                <span class="filter-text">Kuliner</span>
            </button>
            <button class="modern-filter-btn" data-category="Fashion">
                <span class="filter-icon">
                    <i class="fas fa-tshirt">
                        <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M16 21H8A1 1 0 0 1 7 20V12.07L5.7 13.12C5.31 13.5 4.68 13.5 4.29 13.12L1.46 10.29C1.07 9.9 1.07 9.27 1.46 8.88L7.34 3H9C9 4.1 10.34 5 12 5S15 4.1 15 3H16.66L22.54 8.88C22.93 9.27 22.93 9.9 22.54 10.29L19.71 13.12C19.32 13.5 18.69 13.5 18.3 13.12L17 12.07V20A1 1 0 0 1 16 21M20.42 9.58L16.11 5.28C15.8 5.63 15.43 5.94 15 6.2C14.16 6.7 13.13 7 12 7C10.87 7 9.84 6.7 9 6.2C8.57 5.94 8.2 5.63 7.89 5.28L3.58 9.58L5 11L8 8V19H16V8L19 11L20.42 9.58Z"/>
                        </svg>
                    </i>
                </span>
                <span class="filter-text">Fashion</span>
            </button>
        </div>
        
        <!-- UMKM Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <?php foreach ($umkmData as $umkm): ?>
            <div class="modern-umkm-card group" data-category="<?php echo htmlspecialchars($umkm['kategori']); ?>">
                <div class="card-inner">
                    <!-- Image Container -->
                    <div class="card-image-container">
                        <?php if (file_exists($umkm['foto'])): ?>
                            <!-- Foto asli jika ada -->
                            <img src="<?php echo htmlspecialchars($umkm['foto']); ?>" 
                                 alt="<?php echo htmlspecialchars($umkm['nama']); ?>" 
                                 class="card-image">
                        <?php else: ?>
                            <!-- Fallback jika foto tidak ada -->
                            <div class="card-image-placeholder">
                                <?php
                                $icon = 'fa-store';
                                $svgPath = 'M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12L8.1 13h7.45c.75 0 1.41-.41 1.75-1.03L21.7 4H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z';
                                switch($umkm['kategori']) {
                                    case 'Kerajinan':
                                        $icon = 'fa-hammer';
                                        $svgPath = 'M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z';
                                        break;
                                    case 'Kuliner':
                                        $icon = 'fa-utensils';
                                        $svgPath = 'M8.1 13.34l2.83-2.83L3.91 3.5c-1.56 1.56-1.56 4.09 0 5.66l4.19 4.18zm6.78-1.81c1.53.71 3.68.21 5.27-1.38 1.91-1.91 2.28-4.65.81-6.12-1.46-1.46-4.2-1.1-6.12.81-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88 1.41-1.41L13.41 13l1.47-1.47z';
                                        break;
                                    case 'Fashion':
                                        $icon = 'fa-tshirt';
                                        $svgPath = 'M16 21H8A1 1 0 0 1 7 20V12.07L5.7 13.12C5.31 13.5 4.68 13.5 4.29 13.12L1.46 10.29C1.07 9.9 1.07 9.27 1.46 8.88L7.34 3H9C9 4.1 10.34 5 12 5S15 4.1 15 3H16.66L22.54 8.88C22.93 9.27 22.93 9.9 22.54 10.29L19.71 13.12C19.32 13.5 18.69 13.5 18.3 13.12L17 12.07V20A1 1 0 0 1 16 21M20.42 9.58L16.11 5.28C15.8 5.63 15.43 5.94 15 6.2C14.16 6.7 13.13 7 12 7C10.87 7 9.84 6.7 9 6.2C8.57 5.94 8.2 5.63 7.89 5.28L3.58 9.58L5 11L8 8V19H16V8L19 11L20.42 9.58Z';
                                        break;
                                }
                                ?>
                                <i class="fas <?php echo $icon; ?> text-6xl text-white opacity-50">
                                    <svg class="fallback-icon" width="48" height="48" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="<?php echo $svgPath; ?>"/>
                                    </svg>
                                </i>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Category Badge -->
                        <div class="category-badge">
                            <span class="badge-text"><?php echo htmlspecialchars($umkm['kategori']); ?></span>
                        </div>
                        
                        <!-- Hover Overlay -->
                        <div class="card-overlay">
                            <div class="overlay-content">
                                <i class="fas fa-eye text-3xl text-white mb-2">
                                    <svg class="fallback-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                    </svg>
                                </i>
                                <span class="text-white font-medium">Lihat Detail</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="card-content">
                        <h3 class="card-title">
                            <?php echo htmlspecialchars($umkm['nama']); ?>
                        </h3>
                        <p class="card-description">
                            <?php echo htmlspecialchars($umkm['deskripsi']); ?>
                        </p>
                        
                        <!-- Contact Info -->
                        <div class="card-contact">
                            <div class="contact-info">
                                <i class="fas fa-phone text-primary-green">
                                    <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                    </svg>
                                </i>
                                <span class="contact-text"><?php echo htmlspecialchars($umkm['kontak']); ?></span>
                            </div>
                            <a href="<?php echo getWhatsAppLink('Halo! Saya tertarik dengan produk ' . htmlspecialchars($umkm['nama']) . '. Bisa info lebih lanjut?'); ?>" target="_blank" class="contact-button">
                                <i class="fas fa-phone-alt mr-2">
                                    <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                    </svg>
                                </i>
                                Hubungi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <!-- UMKM Stats -->
        <div class="mt-16 bg-white rounded-lg shadow-lg p-8 fade-in">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-3xl font-bold text-primary-green mb-2 counter" data-target="15">0</div>
                    <div class="text-gray-600">UMKM Aktif</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-primary-green mb-2 counter" data-target="4">0</div>
                    <div class="text-gray-600">Kategori Produk</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-primary-green mb-2 counter" data-target="100">0</div>
                    <div class="text-gray-600">Produk Unggulan</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-primary-green mb-2 counter" data-target="500">0</div>
                    <div class="text-gray-600">Pelanggan Puas</div>
                </div>
            </div>
        </div>
        
        <!-- Call to Action -->
        <div class="mt-16 text-center fade-in">
            <div class="bg-gradient-to-r from-primary-green to-secondary-green rounded-lg p-8 text-white">
                <h3 class="text-2xl font-bold mb-4">
                    Tertarik dengan Produk Kami?
                </h3>
                <p class="mb-6 text-gray-100">
                    Hubungi langsung UMKM favorit Anda atau kunjungi lokasi kami untuk melihat produk secara langsung
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#kontak" class="bg-white text-primary-green px-6 py-3 rounded-lg font-medium hover:bg-gray-100 transition-colors">
                        <i class="fas fa-phone mr-2"></i>
                        Hubungi Kami
                    </a>
                    <a href="#" class="border-2 border-white text-white px-6 py-3 rounded-lg font-medium hover:bg-white hover:text-primary-green transition-colors">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        Lihat Lokasi
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
