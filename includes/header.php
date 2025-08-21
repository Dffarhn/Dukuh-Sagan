<!-- Header Navigation Component -->
<header class="fixed top-0 left-0 right-0 z-50 bg-transparent transition-all duration-300">
    <nav class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
                            <!-- Logo -->
                <div class="flex items-center">
                    <a href="#" class="flex items-center hover:opacity-80 transition-opacity">
                        <img src="assets/images/logo.png" alt="Dusun Dagan Logo" class="h-12 w-auto mr-3 logo-image">
                        <span class="text-2xl font-bold text-white hidden sm:block">Dusun Dagan</span>
                    </a>
                </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#budaya" class="nav-link text-white hover:text-light-green font-medium transition-colors">Budaya</a>
                <a href="#sejarah" class="nav-link text-white hover:text-light-green font-medium transition-colors">Sejarah</a>
                <a href="#umkm" class="nav-link text-white hover:text-light-green font-medium transition-colors">UMKM</a>
                <a href="#tokoh" class="nav-link text-white hover:text-light-green font-medium transition-colors">Tokoh</a>
                <a href="#kontak" class="btn-secondary">Kontak</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-btn" class="text-white hover:text-light-green transition-colors">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu md:hidden absolute top-full left-0 right-0 bg-white shadow-lg">
            <div class="px-4 py-6 space-y-4">
                <a href="#budaya" class="block text-gray-800 hover:text-primary-green font-medium transition-colors">Budaya</a>
                <a href="#sejarah" class="block text-gray-800 hover:text-primary-green font-medium transition-colors">Sejarah</a>
                <a href="#umkm" class="block text-gray-800 hover:text-primary-green font-medium transition-colors">UMKM</a>
                <a href="#tokoh" class="block text-gray-800 hover:text-primary-green font-medium transition-colors">Tokoh</a>
                <a href="#kontak" class="block text-gray-800 hover:text-primary-green font-medium transition-colors">Kontak</a>
            </div>
        </div>
    </nav>
</header>
