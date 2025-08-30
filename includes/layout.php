<?php
// Parent Layout untuk semua halaman di folder pages/
// File ini akan di-include di setiap halaman subfolder

// Pastikan scrolling selalu aktif
echo '<style>
html, body {
    overflow-x: hidden;
    overflow-y: auto !important;
    height: auto !important;
    min-height: 100vh;
}

/* Pastikan tidak ada elemen yang memblokir scrolling */
* {
    box-sizing: border-box;
}

/* Pastikan body tidak memiliki overflow hidden */
body {
    overflow: auto !important;
    position: relative;
}

/* Pastikan konten bisa di-scroll */
.container, .hero-section, section {
    position: relative;
    overflow: visible;
}

/* Pastikan navbar tidak memblokir konten */
.navbar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
}

/* Pastikan hero section tidak tertutup navbar */
.hero-section {
    margin-top: 80px;
    padding-top: 20px;
}

@media (max-width: 768px) {
    .hero-section {
        margin-top: 70px;
        padding-top: 10px;
    }
}

/* Pastikan semua section bisa di-scroll */
section {
    position: relative;
    overflow: visible;
    min-height: auto;
}

/* Pastikan tidak ada loading screen yang memblokir */
.loading-screen {
    display: none !important;
    visibility: hidden !important;
    opacity: 0 !important;
}

/* Pastikan scrolling selalu aktif */
html {
    scroll-behavior: smooth;
    overflow-x: hidden;
}

body {
    overflow-y: auto !important;
    overflow-x: hidden;
}

/* Pastikan semua konten terlihat */
main, .main-content {
    position: relative;
    overflow: visible;
    min-height: auto;
}
</style>';

// Script untuk memastikan scrolling selalu aktif
echo '<script>
// Pastikan scrolling selalu aktif
document.addEventListener("DOMContentLoaded", function() {
    // Force enable scrolling
    document.documentElement.style.overflow = "auto";
    document.body.style.overflow = "auto";
    document.body.style.overflowX = "hidden";
    document.body.style.overflowY = "auto";
    
    // Remove any loading screen
    const loadingScreen = document.getElementById("loading-screen");
    if (loadingScreen) {
        loadingScreen.style.display = "none";
        loadingScreen.style.visibility = "hidden";
        loadingScreen.style.opacity = "0";
    }
    
    // Ensure body is scrollable
    document.body.style.position = "relative";
    document.body.style.height = "auto";
    document.body.style.minHeight = "100vh";
    
    console.log("Layout parent: Scrolling enabled");
});

// Override any overflow hidden
window.addEventListener("load", function() {
    document.documentElement.style.overflow = "auto";
    document.body.style.overflow = "auto";
    document.body.style.overflowX = "hidden";
    document.body.style.overflowY = "auto";
    
    console.log("Layout parent: Scrolling enforced on load");
});

// Monitor for any changes that might disable scrolling
const observer = new MutationObserver(function(mutations) {
    mutations.forEach(function(mutation) {
        if (mutation.type === "attributes" && mutation.attributeName === "style") {
            const body = document.body;
            if (body.style.overflow === "hidden") {
                body.style.overflow = "auto";
                body.style.overflowX = "hidden";
                body.style.overflowY = "auto";
                console.log("Layout parent: Scrolling re-enabled");
            }
        }
    });
});

// Start observing
document.addEventListener("DOMContentLoaded", function() {
    observer.observe(document.body, {
        attributes: true,
        attributeFilter: ["style"]
    });
});
</script>';
?>
