// Main JavaScript untuk Dusun Dagan Landing Page

// Font Awesome Load Check
function checkFontAwesome() {
    const testIcon = document.createElement('i');
    testIcon.className = 'fas fa-check';
    testIcon.style.position = 'absolute';
    testIcon.style.left = '-9999px';
    testIcon.style.visibility = 'hidden';
    document.body.appendChild(testIcon);
    
    const computedStyle = window.getComputedStyle(testIcon, ':before');
    const content = computedStyle.getPropertyValue('content');
    
    document.body.removeChild(testIcon);
    
    // Jika Font Awesome tidak terload, coba load ulang
    if (content === 'none' || content === 'normal' || content === '') {
        console.log('Font Awesome tidak terload, mencoba load ulang...');
        
        // Tambahkan class untuk menandakan Font Awesome gagal
        document.body.classList.add('font-awesome-failed');
        
        // Hapus link Font Awesome yang ada
        const existingLinks = document.querySelectorAll('link[href*="font-awesome"], link[href*="fontawesome"]');
        existingLinks.forEach(link => link.remove());
        
        // Load Font Awesome dari CDN alternatif
        const link = document.createElement('link');
        link.rel = 'stylesheet';
        link.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css';
        link.integrity = 'sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==';
        link.crossOrigin = 'anonymous';
        link.referrerPolicy = 'no-referrer';
        
        link.onload = function() {
            console.log('Font Awesome berhasil di-load ulang');
            document.body.classList.remove('font-awesome-failed');
            // Refresh halaman setelah Font Awesome terload
            setTimeout(() => {
                location.reload();
            }, 1000);
        };
        
        link.onerror = function() {
            console.log('Gagal load Font Awesome, menggunakan fallback');
            // Tetap gunakan class font-awesome-failed untuk menampilkan fallback
        };
        
        document.head.appendChild(link);
    } else {
        console.log('Font Awesome sudah terload dengan benar');
        document.body.classList.remove('font-awesome-failed');
    }
}

// Jalankan pengecekan Font Awesome setelah halaman terload
document.addEventListener('DOMContentLoaded', function() {
    // Tunggu sebentar untuk memastikan semua resource terload
    setTimeout(checkFontAwesome, 2000);
    
    // Loading Screen
    const loadingScreen = document.getElementById('loading-screen');
    
    // Simulate loading time
    setTimeout(() => {
        loadingScreen.classList.add('hidden');
        // Enable scroll after loading
        document.body.style.overflow = 'auto';
    }, 2500);
    
    // Disable scroll during loading
    document.body.style.overflow = 'hidden';
    
    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
        });
    }

    // Smooth Scroll untuk Navigation Links
    const navLinks = document.querySelectorAll('a[href^="#"]');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Close mobile menu if open
                if (mobileMenu && mobileMenu.classList.contains('active')) {
                    mobileMenu.classList.remove('active');
                }
            }
        });
    });

    // Sticky Header with Modern Scroll Effect
    const header = document.getElementById('header');
    let lastScrollTop = 0;
    
    if (header) {
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > 50) {
                header.classList.add('header-scrolled');
                console.log('Header scrolled - class added');
            } else {
                header.classList.remove('header-scrolled');
                console.log('Header not scrolled - class removed');
            }
            
            lastScrollTop = scrollTop;
        });
        
        console.log('Header scroll effect initialized');
    } else {
        console.log('Header element not found');
    }

    // Back to Top Button
    const backToTopBtn = document.getElementById('back-to-top');
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopBtn.classList.add('visible');
        } else {
            backToTopBtn.classList.remove('visible');
        }
    });
    
    backToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Intersection Observer untuk Animasi Fade In
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);
    
    // Observe semua elemen dengan class fade-in
    const fadeElements = document.querySelectorAll('.fade-in');
    fadeElements.forEach(el => observer.observe(el));

    // Lazy Loading untuk Gambar
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));

    // Modern UMKM Filter
    const filterButtons = document.querySelectorAll('.modern-filter-btn');
    const umkmCards = document.querySelectorAll('.modern-umkm-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.dataset.category;
            
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            // Animate filter transition
            umkmCards.forEach(card => {
                card.style.transform = 'scale(0.8)';
                card.style.opacity = '0';
                
                setTimeout(() => {
                    if (category === 'all' || card.dataset.category === category) {
                        card.style.display = 'block';
                        card.style.transform = 'scale(1)';
                        card.style.opacity = '1';
                    } else {
                        card.style.display = 'none';
                    }
                }, 200);
            });
        });
    });

    // Contact Form Handling
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const name = formData.get('name');
            const email = formData.get('email');
            const subject = formData.get('subject');
            const message = formData.get('message');
            
            // Simple validation
            if (!name || !email || !subject || !message) {
                alert('Mohon lengkapi semua field!');
                return;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Format email tidak valid!');
                return;
            }
            
            // Create WhatsApp message
            const whatsappMessage = `Halo! Saya ${name} ingin menghubungi Dusun Dagan.

Subjek: ${subject}
Email: ${email}

Pesan:
${message}

Terima kasih!`;
            
            // Encode message for URL
            const encodedMessage = encodeURIComponent(whatsappMessage);
            
            // Get WhatsApp number from PHP (you'll need to pass this to JavaScript)
            // For now, we'll use a default number
            const whatsappNumber = window.whatsappNumber || '6281234567890'; // Use from PHP or fallback
            
            // Create WhatsApp URL
            const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;
            
            // Open WhatsApp
            window.open(whatsappUrl, '_blank');
            
            // Show success message
            alert('Form berhasil dikirim! Anda akan diarahkan ke WhatsApp.');
            
            // Reset form
            this.reset();
        });
    }

    // Parallax Effect untuk Hero Section
    const heroSection = document.querySelector('.hero-section');
    if (heroSection) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            heroSection.style.transform = `translateY(${rate}px)`;
        });
    }

    // Counter Animation untuk Statistik (jika ada)
    const counters = document.querySelectorAll('.counter');
    const counterObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.dataset.target);
                const duration = 2000; // 2 seconds
                const increment = target / (duration / 16); // 60fps
                let current = 0;
                
                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = Math.floor(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target;
                    }
                };
                
                updateCounter();
                counterObserver.unobserve(counter);
            }
        });
    });
    
    counters.forEach(counter => counterObserver.observe(counter));

    // Initialize tooltips (jika menggunakan library tooltip)
    // Contoh untuk Bootstrap tooltips
    if (typeof bootstrap !== 'undefined') {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    }
});

// Utility Functions
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Throttle function untuk scroll events
function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}
