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
                            <i class="fas fa-user-circle text-8xl text-white opacity-50">
                                <svg class="fallback-icon" width="64" height="64" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                </svg>
                            </i>
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
                        <a href="<?php echo getWhatsAppLink('Halo! Saya ingin bertanya tentang ' . htmlspecialchars($tokoh['nama']) . '.'); ?>" target="_blank" class="text-gray-400 hover:text-primary-green transition-colors">
                            <i class="fab fa-whatsapp text-lg">
                                <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                </svg>
                            </i>
                        </a>
                        <a href="<?php echo getContactInfo()['social_media']['facebook']; ?>" target="_blank" class="text-gray-400 hover:text-primary-green transition-colors">
                            <i class="fab fa-facebook text-lg">
                                <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </i>
                        </a>
                        <a href="<?php echo getContactInfo()['social_media']['instagram']; ?>" target="_blank" class="text-gray-400 hover:text-primary-green transition-colors">
                            <i class="fab fa-instagram text-lg">
                                <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987 6.62 0 11.987-5.367 11.987-11.987C24.014 5.367 18.637.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.323-1.297C4.198 14.895 3.708 13.744 3.708 12.447s.49-2.448 1.418-3.323c.875-.807 2.026-1.297 3.323-1.297s2.448.49 3.323 1.297c.928.875 1.418 2.026 1.418 3.323s-.49 2.448-1.418 3.244c-.875.807-2.026 1.297-3.323 1.297zm7.83-9.781c-.49 0-.928-.175-1.297-.49-.368-.315-.49-.753-.49-1.243 0-.49.122-.928.49-1.243.369-.315.807-.49 1.297-.49s.928.175 1.297.49c.368.315.49.753.49 1.243 0 .49-.122.928-.49 1.243-.369.315-.807.49-1.297.49z"/>
                                </svg>
                            </i>
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
                        <i class="fas fa-crown text-3xl text-primary-green">
                            <svg class="fallback-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 8l3 5.2 3-1.7-1 3.5h-4v2h-2v-2H7l-1-3.5 3 1.7L12 8z"/>
                            </svg>
                        </i>
                    </div>
                    <h4 class="font-bold text-dark-green mb-2">Kepala Dusun</h4>
                    <p class="text-sm text-gray-600">Memimpin dan mengkoordinasikan seluruh kegiatan dusun</p>
                </div>
                
                <!-- Ketua PKK -->
                <div class="text-center">
                    <div class="bg-white rounded-full w-24 h-24 mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-heart text-3xl text-primary-green">
                            <svg class="fallback-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                            </svg>
                        </i>
                    </div>
                    <h4 class="font-bold text-dark-green mb-2">Ketua PKK</h4>
                    <p class="text-sm text-gray-600">Mengembangkan program pemberdayaan keluarga</p>
                </div>
                
                <!-- Karang Taruna -->
                <div class="text-center">
                    <div class="bg-white rounded-full w-24 h-24 mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-users text-3xl text-primary-green">
                            <svg class="fallback-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A1.5 1.5 0 0 0 18.54 8H17c-.8 0-1.54.37-2.01 1l-1.7 2.26c-.17.22-.43.35-.71.35H10c-.55 0-1-.45-1-1V8c0-.55.45-1 1-1h3c.28 0 .54-.13.71-.35L15.31 4.5c.47-.63 1.21-1 2.01-1h1.54c.66 0 1.27.34 1.63.89L22.5 16H20v6h2z"/>
                            </svg>
                        </i>
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
                    <i class="fas fa-star text-primary-green mr-3">
                        <svg class="fallback-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                        </svg>
                    </i>
                    Nilai Kepemimpinan
                </h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <i class="fas fa-check text-primary-green mt-1 mr-3">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                        </i>
                        <span class="text-gray-700">Kepemimpinan yang melayani dan mengayomi</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-primary-green mt-1 mr-3">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                        </i>
                        <span class="text-gray-700">Transparansi dalam pengelolaan dana dan program</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-primary-green mt-1 mr-3">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                        </i>
                        <span class="text-gray-700">Keterbukaan terhadap saran dan kritik warga</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-primary-green mt-1 mr-3">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                        </i>
                        <span class="text-gray-700">Komitmen untuk kemajuan bersama</span>
                    </li>
                </ul>
            </div>
            
            <div class="bg-gradient-to-br from-primary-green to-secondary-green rounded-lg p-8 text-white">
                <h3 class="text-2xl font-bold mb-6">
                    <i class="fas fa-handshake mr-3">
                        <svg class="fallback-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </i>
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
