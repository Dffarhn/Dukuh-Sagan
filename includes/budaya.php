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
                            <i class="fas fa-theater-masks text-6xl text-white opacity-50"></i>
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
                    
                    <!-- Action Button -->
                    <div class="mt-4">
                        <button class="text-primary-green hover:text-dark-green font-medium text-sm transition-colors">
                            Pelajari Lebih Lanjut
                            <i class="fas fa-arrow-right ml-1"></i>
                        </button>
                    </div>
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
                        <i class="fas fa-calendar-alt text-3xl text-primary-green mb-3"></i>
                        <h4 class="font-bold text-dark-green mb-2">Acara Rutin</h4>
                        <p class="text-sm text-gray-600">Festival budaya tahunan dan acara adat</p>
                    </div>
                    <div class="text-center">
                        <i class="fas fa-users text-3xl text-primary-green mb-3"></i>
                        <h4 class="font-bold text-dark-green mb-2">Pelatihan</h4>
                        <p class="text-sm text-gray-600">Pelatihan budaya untuk generasi muda</p>
                    </div>
                    <div class="text-center">
                        <i class="fas fa-trophy text-3xl text-primary-green mb-3"></i>
                        <h4 class="font-bold text-dark-green mb-2">Prestasi</h4>
                        <p class="text-sm text-gray-600">Penghargaan dan pengakuan budaya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
