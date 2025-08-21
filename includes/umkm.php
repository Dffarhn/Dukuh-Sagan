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
                    <i class="fas fa-th-large"></i>
                </span>
                <span class="filter-text">Semua</span>
            </button>
            <button class="modern-filter-btn" data-category="Kerajinan">
                <span class="filter-icon">
                    <i class="fas fa-hammer"></i>
                </span>
                <span class="filter-text">Kerajinan</span>
            </button>
            <button class="modern-filter-btn" data-category="Kuliner">
                <span class="filter-icon">
                    <i class="fas fa-utensils"></i>
                </span>
                <span class="filter-text">Kuliner</span>
            </button>
            <button class="modern-filter-btn" data-category="Fashion">
                <span class="filter-icon">
                    <i class="fas fa-tshirt"></i>
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
                                switch($umkm['kategori']) {
                                    case 'Kerajinan':
                                        $icon = 'fa-hammer';
                                        break;
                                    case 'Kuliner':
                                        $icon = 'fa-utensils';
                                        break;
                                    case 'Fashion':
                                        $icon = 'fa-tshirt';
                                        break;
                                }
                                ?>
                                <i class="fas <?php echo $icon; ?> text-6xl text-white opacity-50"></i>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Category Badge -->
                        <div class="category-badge">
                            <span class="badge-text"><?php echo htmlspecialchars($umkm['kategori']); ?></span>
                        </div>
                        
                        <!-- Hover Overlay -->
                        <div class="card-overlay">
                            <div class="overlay-content">
                                <i class="fas fa-eye text-3xl text-white mb-2"></i>
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
                                <i class="fas fa-phone text-primary-green"></i>
                                <span class="contact-text"><?php echo htmlspecialchars($umkm['kontak']); ?></span>
                            </div>
                            <button class="contact-button">
                                <i class="fas fa-phone-alt mr-2"></i>
                                Hubungi
                            </button>
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
