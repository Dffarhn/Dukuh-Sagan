<?php
require_once 'config/config.php';
$budayaData = getBudaya();
?>

<!-- Budaya Section -->
<section id="budaya" class="py-20 bg-light-green">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl md:text-5xl font-bold text-dark-green mb-4 font-poppins">
                Budaya Lokal
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Melestarikan warisan budaya yang telah turun-temurun dari nenek moyang kami
            </p>
        </div>
        
        <!-- Budaya Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach ($budayaData as $budaya): ?>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-shadow fade-in">
                <!-- Image -->
                <div class="h-48 bg-gradient-to-br from-primary-green to-secondary-green relative overflow-hidden">
                    <?php if (file_exists($budaya['foto'])): ?>
                        <!-- Foto asli jika ada -->
                        <img src="<?php echo htmlspecialchars($budaya['foto']); ?>" 
                             alt="<?php echo htmlspecialchars($budaya['nama']); ?>" 
                             class="w-full h-full object-cover">
                    <?php else: ?>
                        <!-- Fallback jika foto tidak ada -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fas fa-theater-masks text-6xl text-white opacity-50">
                                <svg class="fallback-icon" width="48" height="48" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                            </i>
                        </div>
                        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 400 300%22%3E%3Crect fill=%22%2316a34a%22 width=%22400%22 height=%22300%22/%3E%3Ccircle fill=%22%2322c55e%22 cx=%22200%22 cy=%22150%22 r=%2250%22/%3E%3C/svg%3E');"></div>
                    <?php endif; ?>
                </div>
                
                <!-- Content -->
                <div class="p-6">
                    <h3 class="text-xl font-bold text-dark-green mb-3">
                        <?php echo htmlspecialchars($budaya['nama']); ?>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        <?php echo htmlspecialchars($budaya['deskripsi']); ?>
                    </p>
                
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Additional Info -->
        <div class="mt-16 text-center fade-in">
            <div class="bg-white rounded-lg shadow-lg p-8 max-w-4xl mx-auto">
                <h3 class="text-2xl font-bold text-dark-green mb-4">
                    Melestarikan Budaya untuk Generasi Mendatang
                </h3>
                <p class="text-gray-600 mb-6">
                    Dusun Dagan berkomitmen untuk melestarikan dan mengembangkan budaya lokal. 
                    Setiap tahun, kami mengadakan berbagai acara budaya yang melibatkan seluruh warga 
                    dan menarik minat wisatawan dari berbagai daerah.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center">
                        <i class="fas fa-calendar-alt text-3xl text-primary-green mb-3">
                            <svg class="fallback-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                            </svg>
                        </i>
                        <h4 class="font-bold text-dark-green mb-2">Acara Rutin</h4>
                        <p class="text-sm text-gray-600">Festival budaya tahunan dan acara adat</p>
                    </div>
                    <div class="text-center">
                        <i class="fas fa-users text-3xl text-primary-green mb-3">
                            <svg class="fallback-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A1.5 1.5 0 0 0 18.54 8H17c-.8 0-1.54.37-2.01 1l-1.7 2.26c-.17.22-.43.35-.71.35H10c-.55 0-1-.45-1-1V8c0-.55.45-1 1-1h3c.28 0 .54-.13.71-.35L15.31 4.5c.47-.63 1.21-1 2.01-1h1.54c.66 0 1.27.34 1.63.89L22.5 16H20v6h2z"/>
                            </svg>
                        </i>
                        <h4 class="font-bold text-dark-green mb-2">Pelatihan</h4>
                        <p class="text-sm text-gray-600">Pelatihan budaya untuk generasi muda</p>
                    </div>
                    <div class="text-center">
                        <i class="fas fa-trophy text-3xl text-primary-green mb-3">
                            <svg class="fallback-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M7 4V2C7 1.45 7.45 1 8 1H16C16.55 1 17 1.45 17 2V4H20C20.55 4 21 4.45 21 5V7C21 8.1 20.1 9 19 9H18V10C18 12.21 16.21 14 14 14H10C7.79 14 6 12.21 6 10V9H5C3.9 9 3 8.1 3 7V5C3 4.45 3.45 4 4 4H7ZM9 3V4H15V3H9ZM7 7V9H9V10C9 11.1 9.9 12 11 12H13C14.1 12 15 11.1 15 10V9H17V7H7Z"/>
                            </svg>
                        </i>
                        <h4 class="font-bold text-dark-green mb-2">Prestasi</h4>
                        <p class="text-sm text-gray-600">Penghargaan dan pengakuan budaya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
