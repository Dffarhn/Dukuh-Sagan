<!-- Hero Section -->
<section class="hero-section relative overflow-hidden min-h-screen">
    <!-- Animated Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-primary-green via-secondary-green to-dark-green"></div>
    
    <!-- Animated Mesh Gradient -->
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-0 left-0 w-64 h-64 md:w-96 md:h-96 bg-accent-green rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
        <div class="absolute top-0 right-0 w-64 h-64 md:w-96 md:h-96 bg-light-green rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-0 left-1/2 w-64 h-64 md:w-96 md:h-96 bg-secondary-green rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 4s;"></div>
    </div>
    
    <!-- Floating Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="floating-element" style="top: 20%; left: 10%; animation-delay: 0s;">
            <i class="fas fa-tree text-2xl md:text-4xl text-white opacity-20">
                <svg class="fallback-icon" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/>
                </svg>
            </i>
        </div>
        <div class="floating-element" style="top: 60%; right: 15%; animation-delay: 1s;">
            <i class="fas fa-leaf text-xl md:text-3xl text-light-green opacity-30">
                <svg class="fallback-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.75 3.37L15.55 8.5c-.25.5-.75.83-1.28.83H8.73c-.53 0-1.03-.33-1.28-.83L5.25 3.37c-.25-.5.25-1.13.78-1.13h11.94c.53 0 1.03.63.78 1.13z"/>
                </svg>
            </i>
        </div>
        <div class="floating-element" style="top: 30%; right: 25%; animation-delay: 2s;">
            <i class="fas fa-seedling text-lg md:text-2xl text-accent-green opacity-25">
                <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                </svg>
            </i>
        </div>
        <div class="floating-element" style="bottom: 30%; left: 20%; animation-delay: 3s;">
            <i class="fas fa-mountain text-xl md:text-3xl text-white opacity-20">
                <svg class="fallback-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M14 6l-3.75 5 2.85 3.8-1.6 1.2C7.81 13.76 6 16.91 6 20.35V22h16v-1.65c0-3.44-1.81-6.59-4.5-8.25l-1.6-1.2 2.85-3.8L14 6z"/>
                </svg>
            </i>
        </div>
    </div>
    
    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 text-center text-white flex items-center justify-center min-h-screen py-8">
        <div class="max-w-4xl mx-auto">
            <!-- Animated Main Title -->
            <div class="mb-6 md:mb-8">
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-8xl font-bold font-poppins mb-3 md:mb-4 hero-title leading-tight">
                    <span class="block text-white">Selamat Datang di</span>
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-light-green via-accent-green to-secondary-green animate-gradient">
                        Dusun Dagan
                    </span>
                </h1>
            </div>
            
            <!-- Typewriter Subtitle -->
            <div class="mb-6 md:mb-8">
                <p class="text-lg sm:text-xl md:text-2xl lg:text-3xl text-light-green font-light typewriter-text">
                    Nikmati budaya lokal, sejarah, dan produk UMKM terbaik kami
                </p>
            </div>
            
            <!-- Description with Glassmorphism -->
            <div class="mb-8 md:mb-12">
                <div class="glass-card inline-block px-4 sm:px-6 md:px-8 py-4 md:py-6 rounded-2xl backdrop-blur-sm">
                    <p class="text-base sm:text-lg md:text-xl text-gray-100 max-w-2xl md:max-w-3xl mx-auto leading-relaxed">
                        Temukan keindahan alam, kekayaan budaya, dan produk-produk berkualitas dari tangan terampil masyarakat Dusun Dagan
                    </p>
                </div>
            </div>
            
            <!-- Enhanced CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 md:gap-6 justify-center items-center mb-12 md:mb-16">
                <a href="#umkm" class="cta-button-primary group w-full sm:w-auto">
                    <span class="cta-button-content">
                        <i class="fas fa-store mr-2 md:mr-3 group-hover:rotate-12 transition-transform">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12L8.1 13h7.45c.75 0 1.41-.41 1.75-1.03L21.7 4H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/>
                            </svg>
                        </i>
                        Jelajahi UMKM
                    </span>
                    <div class="cta-button-bg"></div>
                </a>
                <a href="#budaya" class="cta-button-secondary group w-full sm:w-auto">
                    <span class="cta-button-content">
                        <i class="fas fa-theater-masks mr-2 md:mr-3 group-hover:scale-110 transition-transform">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </i>
                        Kenali Budaya
                    </span>
                    <div class="cta-button-bg"></div>
                </a>
            </div>
            
            <!-- Enhanced Stats with 3D Cards -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-6 mt-12 md:mt-16">
                <div class="stat-card group">
                    <div class="stat-number counter text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-light-green mb-1 md:mb-2" data-target="15">0</div>
                    <div class="stat-label text-xs sm:text-sm md:text-base text-gray-200">UMKM Aktif</div>
                    <div class="stat-icon">
                        <i class="fas fa-store text-lg md:text-2xl text-accent-green opacity-60">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12L8.1 13h7.45c.75 0 1.41-.41 1.75-1.03L21.7 4H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/>
                            </svg>
                        </i>
                    </div>
                </div>
                <div class="stat-card group">
                    <div class="stat-number counter text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-light-green mb-1 md:mb-2" data-target="500">0</div>
                    <div class="stat-label text-xs sm:text-sm md:text-base text-gray-200">Warga</div>
                    <div class="stat-icon">
                        <i class="fas fa-users text-lg md:text-2xl text-accent-green opacity-60">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A1.5 1.5 0 0 0 18.54 8H17c-.8 0-1.54.37-2.01 1l-1.7 2.26c-.17.22-.43.35-.71.35H10c-.55 0-1-.45-1-1V8c0-.55.45-1 1-1h3c.28 0 .54-.13.71-.35L15.31 4.5c.47-.63 1.21-1 2.01-1h1.54c.66 0 1.27.34 1.63.89L22.5 16H20v6h2z"/>
                            </svg>
                        </i>
                    </div>
                </div>
                <div class="stat-card group">
                    <div class="stat-number counter text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-light-green mb-1 md:mb-2" data-target="75">0</div>
                    <div class="stat-label text-xs sm:text-sm md:text-base text-gray-200">Tahun Sejarah</div>
                    <div class="stat-icon">
                        <i class="fas fa-history text-lg md:text-2xl text-accent-green opacity-60">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M13 3c-4.97 0-9 4.03-9 9H1l3.89 3.89.07.14L9 12H6c0-3.87 3.13-7 7-7s7 3.13 7 7-3.13 7-7 7c-1.93 0-3.68-.79-4.94-2.06l-1.42 1.42C8.27 19.99 10.51 21 13 21c4.97 0 9-4.03 9-9s-4.03-9-9-9zm-1 5v5l4.28 2.54.72-1.21-3.5-2.08V8H12z"/>
                            </svg>
                        </i>
                    </div>
                </div>
                <div class="stat-card group">
                    <div class="stat-number counter text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-light-green mb-1 md:mb-2" data-target="10">0</div>
                    <div class="stat-label text-xs sm:text-sm md:text-base text-gray-200">Budaya Lokal</div>
                    <div class="stat-icon">
                        <i class="fas fa-theater-masks text-lg md:text-2xl text-accent-green opacity-60">
                            <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Enhanced Scroll Indicator -->
    <div class="absolute bottom-4 md:bottom-8 left-1/2 transform -translate-x-1/2">
        <a href="#budaya" class="scroll-indicator group">
            <div class="scroll-arrow">
                <i class="fas fa-chevron-down text-xl md:text-2xl text-white group-hover:text-light-green transition-colors">
                    <svg class="fallback-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
                    </svg>
                </i>
            </div>
            <div class="scroll-text text-xs md:text-sm text-gray-300 group-hover:text-light-green transition-colors">
                Scroll untuk jelajahi
            </div>
        </a>
    </div>
</section>
