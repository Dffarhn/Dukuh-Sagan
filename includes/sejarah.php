<?php
require_once 'config/config.php';
$sejarahData = getSejarah();
?>

<!-- Sejarah Section -->
<section id="sejarah" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl md:text-5xl font-bold text-dark-green mb-4 font-poppins">
                Sejarah Dusun Dagan
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Perjalanan panjang dari masa lalu hingga menjadi dusun yang maju dan berkembang
            </p>
        </div>
        
        <!-- Timeline -->
        <div class="max-w-4xl mx-auto">
            <?php foreach ($sejarahData as $index => $sejarah): ?>
            <div class="timeline-item mb-12 fade-in">
                <div class="bg-light-green rounded-lg p-6 shadow-lg hover-shadow transition-all duration-300">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                        <div class="mb-4 md:mb-0">
                            <span class="inline-block bg-primary-green text-white px-4 py-2 rounded-full text-sm font-bold">
                                <?php echo htmlspecialchars($sejarah['tahun']); ?>
                            </span>
                        </div>
                        <h3 class="text-2xl font-bold text-dark-green">
                            <?php echo htmlspecialchars($sejarah['peristiwa']); ?>
                        </h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        <?php echo htmlspecialchars($sejarah['deskripsi']); ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Additional Historical Info -->
        <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-8 fade-in">
            <!-- Historical Values -->
            <div class="bg-light-green rounded-lg p-8">
                <h3 class="text-2xl font-bold text-dark-green mb-6">
                    <i class="fas fa-heart text-primary-green mr-3">
                        <svg class="fallback-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                        </svg>
                    </i>
                    Nilai-Nilai Luhur
                </h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary-green mt-1 mr-3">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </i>
                        <span class="text-gray-700">Gotong royong dan kebersamaan dalam membangun dusun</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary-green mt-1 mr-3">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </i>
                        <span class="text-gray-700">Kesederhanaan dan kejujuran dalam berkehidupan</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary-green mt-1 mr-3">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </i>
                        <span class="text-gray-700">Kepedulian terhadap lingkungan dan alam sekitar</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary-green mt-1 mr-3">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </i>
                        <span class="text-gray-700">Kemandirian dalam mengembangkan potensi lokal</span>
                    </li>
                </ul>
            </div>
            
            <!-- Future Vision -->
            <div class="bg-gradient-to-br from-primary-green to-secondary-green rounded-lg p-8 text-white">
                <h3 class="text-2xl font-bold mb-6">
                    <i class="fas fa-rocket mr-3">
                        <svg class="fallback-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M13.13 22.19l-1.63-3.83c1.57-.58 3.04-1.36 4.4-2.27l-2.77 6.1zM5.64 12.5l-3.83-1.63 6.1-2.77c-.91 1.36-1.69 2.83-2.27 4.4z"/>
                        </svg>
                    </i>
                    Visi Masa Depan
                </h3>
                <p class="mb-6 text-gray-100">
                    Dusun Dagan berkomitmen untuk terus berkembang menjadi destinasi wisata budaya 
                    dan UMKM yang unggul, sambil tetap mempertahankan nilai-nilai tradisional.
                </p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="text-center">
                        <div class="text-2xl font-bold mb-2">2025</div>
                        <div class="text-sm">Destinasi Wisata Terkemuka</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold mb-2">2030</div>
                        <div class="text-sm">UMKM Digital</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Historical Gallery Placeholder -->
        <div class="mt-16 text-center fade-in">
            <h3 class="text-2xl font-bold text-dark-green mb-8">
                Galeri Sejarah
            </h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <?php for ($i = 1; $i <= 4; $i++): ?>
                <div class="bg-light-green rounded-lg p-4 h-32 flex items-center justify-center">
                    <i class="fas fa-image text-3xl text-primary-green opacity-50">
                        <svg class="fallback-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/>
                        </svg>
                    </i>
                </div>
                <?php endfor; ?>
            </div>
            <p class="text-gray-600 mt-4 text-sm">
                Dokumentasi foto-foto bersejarah Dusun Dagan dari masa ke masa
            </p>
        </div>
    </div>
</section>
