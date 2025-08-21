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
            <i class="fas fa-tree text-2xl md:text-4xl text-white opacity-20"></i>
        </div>
        <div class="floating-element" style="top: 60%; right: 15%; animation-delay: 1s;">
            <i class="fas fa-leaf text-xl md:text-3xl text-light-green opacity-30"></i>
        </div>
        <div class="floating-element" style="top: 30%; right: 25%; animation-delay: 2s;">
            <i class="fas fa-seedling text-lg md:text-2xl text-accent-green opacity-25"></i>
        </div>
        <div class="floating-element" style="bottom: 30%; left: 20%; animation-delay: 3s;">
            <i class="fas fa-mountain text-xl md:text-3xl text-white opacity-20"></i>
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
                        <i class="fas fa-store mr-2 md:mr-3 group-hover:rotate-12 transition-transform"></i>
                        Jelajahi UMKM
                    </span>
                    <div class="cta-button-bg"></div>
                </a>
                <a href="#budaya" class="cta-button-secondary group w-full sm:w-auto">
                    <span class="cta-button-content">
                        <i class="fas fa-theater-masks mr-2 md:mr-3 group-hover:scale-110 transition-transform"></i>
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
                        <i class="fas fa-store text-lg md:text-2xl text-accent-green opacity-60"></i>
                    </div>
                </div>
                <div class="stat-card group">
                    <div class="stat-number counter text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-light-green mb-1 md:mb-2" data-target="500">0</div>
                    <div class="stat-label text-xs sm:text-sm md:text-base text-gray-200">Warga</div>
                    <div class="stat-icon">
                        <i class="fas fa-users text-lg md:text-2xl text-accent-green opacity-60"></i>
                    </div>
                </div>
                <div class="stat-card group">
                    <div class="stat-number counter text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-light-green mb-1 md:mb-2" data-target="75">0</div>
                    <div class="stat-label text-xs sm:text-sm md:text-base text-gray-200">Tahun Sejarah</div>
                    <div class="stat-icon">
                        <i class="fas fa-history text-lg md:text-2xl text-accent-green opacity-60"></i>
                    </div>
                </div>
                <div class="stat-card group">
                    <div class="stat-number counter text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-light-green mb-1 md:mb-2" data-target="10">0</div>
                    <div class="stat-label text-xs sm:text-sm md:text-base text-gray-200">Budaya Lokal</div>
                    <div class="stat-icon">
                        <i class="fas fa-theater-masks text-lg md:text-2xl text-accent-green opacity-60"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Enhanced Scroll Indicator -->
    <div class="absolute bottom-4 md:bottom-8 left-1/2 transform -translate-x-1/2">
        <a href="#budaya" class="scroll-indicator group">
            <div class="scroll-arrow">
                <i class="fas fa-chevron-down text-xl md:text-2xl text-white group-hover:text-light-green transition-colors"></i>
            </div>
            <div class="scroll-text text-xs md:text-sm text-gray-300 group-hover:text-light-green transition-colors">
                Scroll untuk jelajahi
            </div>
        </a>
    </div>
</section>
