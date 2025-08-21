<?php
// Include configuration
require_once 'config/config.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dusun Dagan - Nikmati Budaya Lokal & UMKM Terbaik</title>
    <meta name="description" content="Selamat datang di Dusun Dagan. Jelajahi budaya lokal, sejarah, dan produk UMKM terbaik kami. Wisata budaya dan belanja produk lokal dalam satu destinasi.">
    <meta name="keywords" content="Dusun Dagan, UMKM, budaya lokal, wisata, kerajinan, kuliner, batik, kopi">
    <meta name="author" content="Dusun Dagan">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Dusun Dagan - Nikmati Budaya Lokal & UMKM Terbaik">
    <meta property="og:description" content="Selamat datang di Dusun Dagan. Jelajahi budaya lokal, sejarah, dan produk UMKM terbaik kami.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://localhost/dusun-dagan/">
    <meta property="og:image" content="assets/images/hero/dusun-dagan-hero.jpg">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Dusun Dagan - Nikmati Budaya Lokal & UMKM Terbaik">
    <meta name="twitter:description" content="Selamat datang di Dusun Dagan. Jelajahi budaya lokal, sejarah, dan produk UMKM terbaik kami.">
    <meta name="twitter:image" content="assets/images/hero/dusun-dagan-hero.jpg">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/logo.png">
    <link rel="apple-touch-icon" href="assets/images/logo.png">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        'primary-green': '#16a34a',
                        'secondary-green': '#22c55e',
                        'dark-green': '#15803d',
                        'light-green': '#dcfce7',
                    }
                }
            }
        }
    </script>
</head>
<body class="font-inter">
    <!-- Loading Screen -->
    <div id="loading-screen" class="loading-screen">
        <div class="loading-content">
            <div class="loading-logo">
                <img src="assets/images/logo.png" alt="Dusun Dagan Logo" class="h-24 w-auto mb-6 logo-image">
                <h2 class="text-2xl font-bold text-white">Dusun Dagan</h2>
            </div>
            <div class="loading-bar">
                <div class="loading-progress"></div>
            </div>
            <p class="loading-text text-gray-300 mt-4">Memuat keindahan budaya...</p>
        </div>
    </div>
    
    <!-- Header Navigation -->
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

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <?php include 'includes/hero.php'; ?>
        
        <!-- Budaya Section -->
        <?php include 'includes/budaya.php'; ?>
        
        <!-- Sejarah Section -->
        <?php include 'includes/sejarah.php'; ?>
        
        <!-- UMKM Section -->
        <?php include 'includes/umkm.php'; ?>
        
        <!-- Tokoh Section -->
        <?php include 'includes/tokoh.php'; ?>
    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Back to Top Button -->
    <div id="back-to-top" class="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="assets/js/main.js"></script>
</body>
</html>
