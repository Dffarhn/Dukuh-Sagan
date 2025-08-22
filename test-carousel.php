<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Carousel Budaya - Dusun Dagan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <!-- Test Header -->
    <header class="bg-white shadow-md py-4">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-bold text-gray-800">Test Carousel Budaya</h1>
        </div>
    </header>
    
    <!-- Test Carousel Section -->
    <section class="py-20 bg-light-green">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-dark-green mb-4">
                    Budaya Lokal
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Melestarikan warisan budaya yang telah turun-temurun dari nenek moyang kami
                </p>
            </div>
            
            <!-- Budaya Carousel Container -->
            <div class="relative overflow-hidden">
                <!-- Carousel Track -->
                <div class="budaya-carousel-track flex">
                    <!-- Item 1 -->
                    <div class="budaya-carousel-item flex-shrink-0 w-80 mx-4">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                            <div class="h-48 bg-gradient-to-br from-primary-green to-secondary-green relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-theater-masks text-6xl text-white opacity-50"></i>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-dark-green mb-3">Tari Kuda Lumping</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Tarian tradisional yang menggambarkan keberanian dan semangat juang masyarakat Dusun Dagan.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 2 -->
                    <div class="budaya-carousel-item flex-shrink-0 w-80 mx-4">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                            <div class="h-48 bg-gradient-to-br from-primary-green to-secondary-green relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-music text-6xl text-white opacity-50"></i>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-dark-green mb-3">Gamelan Tradisional</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Musik gamelan yang dimainkan dalam berbagai acara adat dan perayaan tradisional.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 3 -->
                    <div class="budaya-carousel-item flex-shrink-0 w-80 mx-4">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                            <div class="h-48 bg-gradient-to-br from-primary-green to-secondary-green relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-palette text-6xl text-white opacity-50"></i>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-dark-green mb-3">Batik Lokal</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Seni batik dengan motif khas Dusun Dagan yang menggambarkan kehidupan masyarakat.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 4 -->
                    <div class="budaya-carousel-item flex-shrink-0 w-80 mx-4">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                            <div class="h-48 bg-gradient-to-br from-primary-green to-secondary-green relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-utensils text-6xl text-white opacity-50"></i>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-dark-green mb-3">Kuliner Tradisional</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Masakan tradisional yang diwariskan turun-temurun dengan cita rasa khas.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 5 -->
                    <div class="budaya-carousel-item flex-shrink-0 w-80 mx-4">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                            <div class="h-48 bg-gradient-to-br from-primary-green to-secondary-green relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-hands text-6xl text-white opacity-50"></i>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-dark-green mb-3">Kerajinan Tangan</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Berbagai kerajinan tangan yang dibuat dengan teknik tradisional.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Duplicate items for seamless loop -->
                    <!-- Item 1 Duplicate -->
                    <div class="budaya-carousel-item flex-shrink-0 w-80 mx-4">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                            <div class="h-48 bg-gradient-to-br from-primary-green to-secondary-green relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-theater-masks text-6xl text-white opacity-50"></i>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-dark-green mb-3">Tari Kuda Lumping</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Tarian tradisional yang menggambarkan keberanian dan semangat juang masyarakat Dusun Dagan.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 2 Duplicate -->
                    <div class="budaya-carousel-item flex-shrink-0 w-80 mx-4">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                            <div class="h-48 bg-gradient-to-br from-primary-green to-secondary-green relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-music text-6xl text-white opacity-50"></i>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-dark-green mb-3">Gamelan Tradisional</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Musik gamelan yang dimainkan dalam berbagai acara adat dan perayaan tradisional.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 3 Duplicate -->
                    <div class="budaya-carousel-item flex-shrink-0 w-80 mx-4">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                            <div class="h-48 bg-gradient-to-br from-primary-green to-secondary-green relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-palette text-6xl text-white opacity-50"></i>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-dark-green mb-3">Batik Lokal</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Seni batik dengan motif khas Dusun Dagan yang menggambarkan kehidupan masyarakat.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 4 Duplicate -->
                    <div class="budaya-carousel-item flex-shrink-0 w-80 mx-4">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                            <div class="h-48 bg-gradient-to-br from-primary-green to-secondary-green relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-utensils text-6xl text-white opacity-50"></i>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-dark-green mb-3">Kuliner Tradisional</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Masakan tradisional yang diwariskan turun-temurun dengan cita rasa khas.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 5 Duplicate -->
                    <div class="budaya-carousel-item flex-shrink-0 w-80 mx-4">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                            <div class="h-48 bg-gradient-to-br from-primary-green to-secondary-green relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-hands text-6xl text-white opacity-50"></i>
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-dark-green mb-3">Kerajinan Tangan</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Berbagai kerajinan tangan yang dibuat dengan teknik tradisional.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Navigation Dots -->
                <div class="flex justify-center mt-8 space-x-2">
                    <button class="carousel-dot w-3 h-3 rounded-full bg-gray-300 transition-all duration-300 bg-primary-green" data-index="0"></button>
                    <button class="carousel-dot w-3 h-3 rounded-full bg-gray-300 transition-all duration-300" data-index="1"></button>
                    <button class="carousel-dot w-3 h-3 rounded-full bg-gray-300 transition-all duration-300" data-index="2"></button>
                    <button class="carousel-dot w-3 h-3 rounded-full bg-gray-300 transition-all duration-300" data-index="3"></button>
                    <button class="carousel-dot w-3 h-3 rounded-full bg-gray-300 transition-all duration-300" data-index="4"></button>
                </div>
            </div>
        </div>
    </section>
    
         <script>
     // Budaya Carousel JavaScript - Auto Scroll
     document.addEventListener('DOMContentLoaded', function() {
         const carouselTrack = document.querySelector('.budaya-carousel-track');
         const dots = document.querySelectorAll('.carousel-dot');
         const items = document.querySelectorAll('.budaya-carousel-item');
         
         if (!carouselTrack || items.length === 0) return;
         
         let currentIndex = 0;
         let isAutoPlaying = true;
         let autoPlayInterval;
         let scrollPosition = 0;
         const itemWidth = 320; // w-80 = 320px
         const gap = 16; // mx-4 = 16px
         const totalItems = items.length / 2; // Karena kita duplicate items
         const scrollSpeed = 0.5; // pixels per frame - lebih lambat dan smooth
         
         // Initialize carousel
         function initCarousel() {
             // Set initial position
             updateCarousel();
             
             // Start continuous auto-scroll
             startContinuousScroll();
             
             // Add pause on hover
             carouselTrack.addEventListener('mouseenter', pauseAutoPlay);
             carouselTrack.addEventListener('mouseleave', startAutoPlay);
             
             // Add dot navigation
             dots.forEach((dot, index) => {
                 dot.addEventListener('click', () => {
                     currentIndex = index;
                     scrollPosition = currentIndex * (itemWidth + gap);
                     updateCarousel();
                     resetAutoPlay();
                 });
             });
         }
         
         function updateCarousel() {
             carouselTrack.style.transform = `translateX(-${scrollPosition}px)`;
             
             // Update current index based on scroll position
             currentIndex = Math.round(scrollPosition / (itemWidth + gap));
             if (currentIndex >= totalItems) {
                 currentIndex = 0;
                 scrollPosition = 0;
             }
             
             // Update dots
             dots.forEach((dot, index) => {
                 dot.classList.toggle('bg-primary-green', index === currentIndex);
                 dot.classList.toggle('bg-gray-300', index !== currentIndex);
             });
         }
         
         function startContinuousScroll() {
             if (!isAutoPlaying) return;
             
             function animate() {
                 if (isAutoPlaying) {
                     scrollPosition += scrollSpeed;
                     
                     // Reset position for seamless loop
                     const maxScroll = totalItems * (itemWidth + gap);
                     if (scrollPosition >= maxScroll) {
                         scrollPosition = 0;
                     }
                     
                     updateCarousel();
                     requestAnimationFrame(animate);
                 }
             }
             
             requestAnimationFrame(animate);
         }
         
         function startAutoPlay() {
             isAutoPlaying = true;
             startContinuousScroll();
         }
         
         function pauseAutoPlay() {
             isAutoPlaying = false;
         }
         
         function resetAutoPlay() {
             pauseAutoPlay();
             setTimeout(() => {
                 isAutoPlaying = true;
                 startContinuousScroll();
             }, 100);
         }
         
         // Initialize
         initCarousel();
         
         // Pause auto-play when tab is not visible
         document.addEventListener('visibilitychange', function() {
             if (document.hidden) {
                 pauseAutoPlay();
             } else {
                 startAutoPlay();
             }
         });
         
         console.log('Continuous scroll carousel initialized with', totalItems, 'items');
     });
     </script>
</body>
</html>
