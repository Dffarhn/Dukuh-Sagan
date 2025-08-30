<?php
// Array menu navigasi dengan nested submenu
$navItems = [
    'Profile' => [
        'Sejarah',
        'Peta',
        'Budaya'
    ],
    'Potensi' => [
        'UMKM',
        'Pertanian',
        'Perkebunan',
        'Peternakan'
    ],
    'Contact' => [
        'Alamat Dusun',
        'Kode Pos',
        'Telepon',
        'Email',
        'Website'
    ],
    'Info Instansi' => [
        'Jumlah Penduduk',
        'Jumlah KK',
        'Jumlah Laki-laki',
        'Jumlah Perempuan'
    ],
    'Lembaga' => [
        'Pak Dukuh',
        'Pak RT',
        'LPMD',
        'PKK',
        'Posyandu',
        'Karang Taruna',
        'Jakawarga',
        'KWT'
    ]
];
?>

<nav class="navbar">
    <div class="nav-container">
        <div class="nav-logo">
            <?php
            // Determine the correct path prefix for logo link and image
            $currentPath = $_SERVER['REQUEST_URI'];
            $logoPathPrefix = '';
            $imagePathPrefix = '';
            
            // If we're in a subdirectory, we need to go up
            if (strpos($currentPath, '/pages/') !== false) {
                $logoPathPrefix = '../../';
                $imagePathPrefix = '../../';
            }
            ?>
            <a href="<?php echo $logoPathPrefix; ?>index.php" class="flex items-center hover:opacity-80 transition-opacity">
                <img src="<?php echo $imagePathPrefix; ?>assets/images/logo.png" alt="Dusun Dagan Logo" class="h-10 w-auto mr-3 logo-image">
                <span class="text-xl font-bold text-white hidden sm:block">Dusun Dagan</span>
            </a>
        </div>
        
        <ul class="nav-menu">
            <?php foreach ($navItems as $mainMenu => $subMenus): ?>
                <li class="nav-item">
                    <?php if (!empty($subMenus)): ?>
                        <a href="#" class="nav-link">
                            <?php echo $mainMenu; ?>
                            <span class="dropdown-arrow">▼</span>
                        </a>
                        
                        <ul class="dropdown-menu">
                            <?php foreach ($subMenus as $subMenu): ?>
                                <li class="dropdown-item">
                                    <?php
                                    // Generate file path based on menu structure
                                    $filePath = '';
                                    
                                    // Determine the correct path prefix based on current location
                                    $currentPath = $_SERVER['REQUEST_URI'];
                                    $pathPrefix = '';
                                    
                                    // If we're in a subdirectory, we need to go up
                                    if (strpos($currentPath, '/pages/') !== false) {
                                        $pathPrefix = '../../';
                                    }
                                    
                                    switch ($mainMenu) {
                                        case 'Profile':
                                            switch ($subMenu) {
                                                case 'Sejarah':
                                                    $filePath = $pathPrefix . 'pages/profile/sejarah.php';
                                                    break;
                                                case 'Peta':
                                                    $filePath = $pathPrefix . 'pages/profile/peta.php';
                                                    break;
                                                case 'Budaya':
                                                    $filePath = $pathPrefix . 'pages/profile/budaya.php';
                                                    break;
                                            }
                                            break;
                                        case 'Potensi':
                                            switch ($subMenu) {
                                                case 'UMKM':
                                                    $filePath = $pathPrefix . 'pages/potensi/umkm.php';
                                                    break;
                                                case 'Pertanian':
                                                    $filePath = $pathPrefix . 'pages/potensi/pertanian.php';
                                                    break;
                                                case 'Perkebunan':
                                                    $filePath = $pathPrefix . 'pages/potensi/perkebunan.php';
                                                    break;
                                                case 'Peternakan':
                                                    $filePath = $pathPrefix . 'pages/potensi/peternakan.php';
                                                    break;
                                            }
                                            break;
                                        case 'Contact':
                                            switch ($subMenu) {
                                                case 'Alamat Dusun':
                                                    $filePath = $pathPrefix . 'pages/contact/alamat-dusun.php';
                                                    break;
                                                case 'Kode Pos':
                                                    $filePath = $pathPrefix . 'pages/contact/kode-pos.php';
                                                    break;
                                                case 'Telepon':
                                                    $filePath = $pathPrefix . 'pages/contact/telepon.php';
                                                    break;
                                                case 'Email':
                                                    $filePath = $pathPrefix . 'pages/contact/email.php';
                                                    break;
                                                case 'Website':
                                                    $filePath = $pathPrefix . 'pages/contact/website.php';
                                                    break;
                                            }
                                            break;
                                        case 'Info Instansi':
                                            switch ($subMenu) {
                                                case 'Jumlah Penduduk':
                                                    $filePath = $pathPrefix . 'pages/info-instansi/jumlah-penduduk.php';
                                                    break;
                                                case 'Jumlah KK':
                                                    $filePath = $pathPrefix . 'pages/info-instansi/jumlah-kk.php';
                                                    break;
                                                case 'Jumlah Laki-laki':
                                                    $filePath = $pathPrefix . 'pages/info-instansi/jumlah-laki-laki.php';
                                                    break;
                                                case 'Jumlah Perempuan':
                                                    $filePath = $pathPrefix . 'pages/info-instansi/jumlah-perempuan.php';
                                                    break;
                                            }
                                            break;
                                        case 'Lembaga':
                                            switch ($subMenu) {
                                                case 'Pak Dukuh':
                                                    $filePath = $pathPrefix . 'pages/lembaga/pak-dukuh.php';
                                                    break;
                                                case 'Pak RT':
                                                    $filePath = $pathPrefix . 'pages/lembaga/pak-rt.php';
                                                    break;
                                                case 'LPMD':
                                                    $filePath = $pathPrefix . 'pages/lembaga/lpmd.php';
                                                    break;
                                                case 'PKK':
                                                    $filePath = $pathPrefix . 'pages/lembaga/pkk.php';
                                                    break;
                                                case 'Posyandu':
                                                    $filePath = $pathPrefix . 'pages/lembaga/posyandu.php';
                                                    break;
                                                case 'Karang Taruna':
                                                    $filePath = $pathPrefix . 'pages/lembaga/karang-taruna.php';
                                                    break;
                                                case 'Jakawarga':
                                                    $filePath = $pathPrefix . 'pages/lembaga/jakawarga.php';
                                                    break;
                                                case 'KWT':
                                                    $filePath = $pathPrefix . 'pages/lembaga/kwt.php';
                                                    break;
                                            }
                                            break;
                                    }
                                    ?>
                                    <a href="<?php echo $filePath; ?>" class="dropdown-link">
                                        <?php echo $subMenu; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <a href="#" class="nav-link">
                            <?php echo $mainMenu; ?>
                        </a>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
        
        <div class="nav-toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
</nav>

<style>
/* Navbar Styles */
.navbar {
    background: linear-gradient(135deg, var(--green-600), var(--green-700));
    padding: 1rem 0;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
}

.nav-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-logo a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    font-family: 'Inter', sans-serif;
}

.nav-logo .logo-image {
    filter: brightness(0) invert(1);
}

.nav-menu {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    gap: 2rem;
}

.nav-item {
    position: relative;
}

.nav-link {
    color: white;
    text-decoration: none;
    padding: 0.5rem 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
    border-radius: 6px;
}

.nav-link:hover {
    background: rgba(255, 255, 255, 0.1);
    color: var(--green-200);
}

.dropdown-arrow {
    font-size: 0.8rem;
    transition: transform 0.3s ease;
}

.nav-item:hover .dropdown-arrow {
    transform: rotate(180deg);
}

/* Dropdown Menu */
.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    min-width: 220px;
    max-width: 280px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.3s ease;
    list-style: none;
    margin: 0;
    padding: 0.5rem 0;
    z-index: 1001;
    max-height: 400px;
    overflow-y: auto;
}

.nav-item:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.dropdown-item {
    margin: 0;
}

.dropdown-link {
    color: var(--green-700);
    text-decoration: none;
    padding: 0.75rem 1.5rem;
    display: block;
    transition: all 0.3s ease;
    font-size: 0.9rem;
}

.dropdown-link:hover {
    background: var(--green-50);
    color: var(--green-600);
    transform: translateX(5px);
}

/* Custom scrollbar for dropdown */
.dropdown-menu::-webkit-scrollbar {
    width: 4px;
}

.dropdown-menu::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 2px;
}

.dropdown-menu::-webkit-scrollbar-thumb {
    background: var(--green-400);
    border-radius: 2px;
}

.dropdown-menu::-webkit-scrollbar-thumb:hover {
    background: var(--green-500);
}

/* Mobile Toggle */
.nav-toggle {
    display: none;
    flex-direction: column;
    cursor: pointer;
}

.bar {
    width: 25px;
    height: 3px;
    background: white;
    margin: 3px 0;
    transition: 0.3s;
}

/* Responsive Design */
@media (max-width: 768px) {
    .nav-toggle {
        display: flex;
    }
    
    .nav-menu {
        position: fixed;
        left: -100%;
        top: 70px;
        flex-direction: column;
        background: linear-gradient(135deg, var(--green-600), var(--green-700));
        width: 100%;
        text-align: center;
        transition: 0.3s;
        box-shadow: 0 10px 27px rgba(0, 0, 0, 0.05);
        padding: 2rem 0;
        gap: 0;
    }
    
    .nav-menu.active {
        left: 0;
    }
    
    .nav-item {
        margin: 1rem 0;
    }
    
    .dropdown-menu {
        position: static;
        opacity: 1;
        visibility: visible;
        transform: none;
        background: rgba(255, 255, 255, 0.1);
        box-shadow: none;
        margin-top: 0.5rem;
        border-radius: 6px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }
    
    .nav-item:hover .dropdown-menu {
        max-height: 400px;
    }
    
    .dropdown-link {
        color: white;
        padding: 0.5rem 1rem;
    }
    
    .dropdown-link:hover {
        background: rgba(255, 255, 255, 0.1);
        color: var(--green-200);
        transform: none;
    }
}

/* Animation for mobile menu */
.nav-toggle.active .bar:nth-child(2) {
    opacity: 0;
}

.nav-toggle.active .bar:nth-child(1) {
    transform: translateY(8px) rotate(45deg);
}

.nav-toggle.active .bar:nth-child(3) {
    transform: translateY(-8px) rotate(-45deg);
}

/* Responsive padding adjustment for hero section */
@media (max-width: 768px) {
    .hero-section {
        margin-top: -70px !important;
        padding-top: 70px !important;
    }
}

/* Ensure navbar doesn't interfere with hero content */
.hero-section .relative.z-10 {
    z-index: 1;
}
</style>

<script>
// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const navToggle = document.querySelector('.nav-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    navToggle.addEventListener('click', function() {
        navMenu.classList.toggle('active');
        navToggle.classList.toggle('active');
    });
    
    // Close mobile menu when clicking on a link
    const navLinks = document.querySelectorAll('.nav-link, .dropdown-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navMenu.classList.remove('active');
            navToggle.classList.remove('active');
        });
    });
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.navbar')) {
            navMenu.classList.remove('active');
            navToggle.classList.remove('active');
        }
    });
});
</script>
