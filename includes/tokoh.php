<?php
require_once 'config/config.php';
$tokohData = getTokoh();
?>

<!-- Tokoh Masyarakat Section -->
<section id="tokoh" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl md:text-5xl font-bold text-dark-green mb-4 font-poppins">
                Tokoh Masyarakat
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Para pemimpin dan tokoh yang menggerakkan kemajuan Dusun Dagan
            </p>
        </div>
        
        <!-- Tokoh Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach ($tokohData as $tokoh): ?>
            <div class="tokoh-card bg-white rounded-lg shadow-lg overflow-hidden fade-in">
                <!-- Image -->
                <div class="h-64 bg-gradient-to-br from-primary-green to-secondary-green relative overflow-hidden">
                    <?php if (file_exists($tokoh['foto'])): ?>
                        <!-- Foto asli jika ada -->
                        <img src="<?php echo htmlspecialchars($tokoh['foto']); ?>" 
                             alt="<?php echo htmlspecialchars($tokoh['nama']); ?>" 
                             class="w-full h-full object-cover">
                    <?php else: ?>
                        <!-- Fallback jika foto tidak ada -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fas fa-user-circle text-8xl text-white opacity-50"></i>
                        </div>
                        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 400 400%22%3E%3Crect fill=%22%2316a34a%22 width=%22400%22 height=%22400%22/%3E%3Ccircle fill=%22%2322c55e%22 cx=%22200%22 cy=%22200%22 r=%2280%22/%3E%3C/svg%3E');"></div>
                    <?php endif; ?>
                </div>
                
                <!-- Content -->
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-dark-green mb-2">
                        <?php echo htmlspecialchars($tokoh['nama']); ?>
                    </h3>
                    <p class="text-primary-green font-medium mb-3">
                        <?php echo htmlspecialchars($tokoh['jabatan']); ?>
                    </p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        <?php echo htmlspecialchars($tokoh['deskripsi']); ?>
                    </p>
                    
                    <!-- Social Links -->
                    <div class="mt-4 flex justify-center space-x-3">
                        <a href="#" class="text-gray-400 hover:text-primary-green transition-colors">
                            <i class="fab fa-whatsapp text-lg"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-primary-green transition-colors">
                            <i class="fab fa-facebook text-lg"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-primary-green transition-colors">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Leadership Structure -->
        <div class="mt-16 bg-light-green rounded-lg p-8 fade-in">
            <h3 class="text-2xl font-bold text-dark-green text-center mb-8">
                Struktur Kepemimpinan Dusun Dagan
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Kepala Dusun -->
                <div class="text-center">
                    <div class="bg-white rounded-full w-24 h-24 mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-crown text-3xl text-primary-green"></i>
                    </div>
                    <h4 class="font-bold text-dark-green mb-2">Kepala Dusun</h4>
                    <p class="text-sm text-gray-600">Memimpin dan mengkoordinasikan seluruh kegiatan dusun</p>
                </div>
                
                <!-- Ketua PKK -->
                <div class="text-center">
                    <div class="bg-white rounded-full w-24 h-24 mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-heart text-3xl text-primary-green"></i>
                    </div>
                    <h4 class="font-bold text-dark-green mb-2">Ketua PKK</h4>
                    <p class="text-sm text-gray-600">Mengembangkan program pemberdayaan keluarga</p>
                </div>
                
                <!-- Karang Taruna -->
                <div class="text-center">
                    <div class="bg-white rounded-full w-24 h-24 mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-users text-3xl text-primary-green"></i>
                    </div>
                    <h4 class="font-bold text-dark-green mb-2">Karang Taruna</h4>
                    <p class="text-sm text-gray-600">Menggerakkan pemuda dalam pembangunan dusun</p>
                </div>
            </div>
        </div>
        
        <!-- Community Values -->
        <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-8 fade-in">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h3 class="text-2xl font-bold text-dark-green mb-6">
                    <i class="fas fa-star text-primary-green mr-3"></i>
                    Nilai Kepemimpinan
                </h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <i class="fas fa-check text-primary-green mt-1 mr-3"></i>
                        <span class="text-gray-700">Kepemimpinan yang melayani dan mengayomi</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-primary-green mt-1 mr-3"></i>
                        <span class="text-gray-700">Transparansi dalam pengelolaan dana dan program</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-primary-green mt-1 mr-3"></i>
                        <span class="text-gray-700">Keterbukaan terhadap saran dan kritik warga</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-primary-green mt-1 mr-3"></i>
                        <span class="text-gray-700">Komitmen untuk kemajuan bersama</span>
                    </li>
                </ul>
            </div>
            
            <div class="bg-gradient-to-br from-primary-green to-secondary-green rounded-lg p-8 text-white">
                <h3 class="text-2xl font-bold mb-6">
                    <i class="fas fa-handshake mr-3"></i>
                    Kolaborasi & Sinergi
                </h3>
                <p class="mb-6 text-gray-100">
                    Para tokoh masyarakat bekerja sama dalam mengembangkan Dusun Dagan 
                    menjadi destinasi wisata dan UMKM yang unggul.
                </p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="text-center">
                        <div class="text-2xl font-bold mb-2">100%</div>
                        <div class="text-sm">Dukungan Warga</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold mb-2">24/7</div>
                        <div class="text-sm">Pelayanan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
