<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Struktur Menu Navbar - Dusun Dagan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <!-- Include Navbar -->
    <?php include 'includes/navbar.php'; ?>
    
    <!-- Test Content -->
    <div class="container mx-auto px-4 py-8" style="margin-top: 100px;">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Struktur Menu Navbar Dusun Dagan</h1>
            
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Menu Utama dengan Submenu:</h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    
                    <!-- Profile -->
                    <div class="border border-green-200 rounded-lg p-4">
                        <h3 class="text-lg font-semibold text-green-700 mb-3 flex items-center">
                            <i class="fas fa-user-circle mr-2"></i>
                            Profile
                        </h3>
                        <ul class="space-y-2">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-history mr-2 text-green-500"></i>
                                Sejarah
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-map-marker-alt mr-2 text-green-500"></i>
                                Peta
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-theater-masks mr-2 text-green-500"></i>
                                Budaya
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Potensi -->
                    <div class="border border-blue-200 rounded-lg p-4">
                        <h3 class="text-lg font-semibold text-blue-700 mb-3 flex items-center">
                            <i class="fas fa-chart-line mr-2"></i>
                            Potensi
                        </h3>
                        <ul class="space-y-2">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-store mr-2 text-blue-500"></i>
                                UMKM
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-seedling mr-2 text-blue-500"></i>
                                Pertanian
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-tree mr-2 text-blue-500"></i>
                                Perkebunan
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-cow mr-2 text-blue-500"></i>
                                Peternakan
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Contact -->
                    <div class="border border-purple-200 rounded-lg p-4">
                        <h3 class="text-lg font-semibold text-purple-700 mb-3 flex items-center">
                            <i class="fas fa-address-book mr-2"></i>
                            Contact
                        </h3>
                        <ul class="space-y-2">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-map mr-2 text-purple-500"></i>
                                Alamat Dusun
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-mail-bulk mr-2 text-purple-500"></i>
                                Kode Pos
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-phone mr-2 text-purple-500"></i>
                                Telepon
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-envelope mr-2 text-purple-500"></i>
                                Email
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-globe mr-2 text-purple-500"></i>
                                Website
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Info Instansi -->
                    <div class="border border-orange-200 rounded-lg p-4">
                        <h3 class="text-lg font-semibold text-orange-700 mb-3 flex items-center">
                            <i class="fas fa-info-circle mr-2"></i>
                            Info Instansi
                        </h3>
                        <ul class="space-y-2">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-users mr-2 text-orange-500"></i>
                                Jumlah Penduduk
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-home mr-2 text-orange-500"></i>
                                Jumlah KK
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-male mr-2 text-orange-500"></i>
                                Jumlah Laki-laki
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-female mr-2 text-orange-500"></i>
                                Jumlah Perempuan
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Lembaga -->
                    <div class="border border-red-200 rounded-lg p-4 lg:col-span-2">
                        <h3 class="text-lg font-semibold text-red-700 mb-3 flex items-center">
                            <i class="fas fa-building mr-2"></i>
                            Lembaga
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <ul class="space-y-2">
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-user-tie mr-2 text-red-500"></i>
                                    Pak Dukuh
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-user mr-2 text-red-500"></i>
                                    Pak RT
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-users-cog mr-2 text-red-500"></i>
                                    LPMD
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-female mr-2 text-red-500"></i>
                                    PKK
                                </li>
                            </ul>
                            <ul class="space-y-2">
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-heartbeat mr-2 text-red-500"></i>
                                    Posyandu
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-users mr-2 text-red-500"></i>
                                    Karang Taruna
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-hands-helping mr-2 text-red-500"></i>
                                    Jakawarga
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-leaf mr-2 text-red-500"></i>
                                    KWT
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-green-50 border border-green-200 rounded-lg p-6 mb-8">
                <h2 class="text-xl font-semibold text-green-700 mb-4">Fitur Navbar:</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-green-600">
                    <div>
                        <h3 class="font-semibold mb-2">Desktop Features:</h3>
                        <ul class="list-disc list-inside space-y-1 text-sm">
                            <li>Hover dropdown menu</li>
                            <li>Smooth animations</li>
                            <li>Arrow rotation effect</li>
                            <li>Scrollable dropdown untuk menu panjang</li>
                            <li>Custom scrollbar styling</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-2">Mobile Features:</h3>
                        <ul class="list-disc list-inside space-y-1 text-sm">
                            <li>Hamburger menu button</li>
                            <li>Slide-in animation</li>
                            <li>Expandable submenu</li>
                            <li>Touch-friendly interactions</li>
                            <li>Auto-close on link click</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                <h2 class="text-xl font-semibold text-blue-700 mb-4">Cara Test:</h2>
                <div class="text-blue-600 space-y-2">
                    <p><strong>1.</strong> Hover pada menu utama untuk melihat dropdown (Desktop)</p>
                    <p><strong>2.</strong> Klik hamburger button untuk mobile menu</p>
                    <p><strong>3.</strong> Test scroll pada dropdown menu "Lembaga"</p>
                    <p><strong>4.</strong> Klik menu untuk test navigation</p>
                    <p><strong>5.</strong> Test responsive design di berbagai ukuran layar</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Link ke index.php -->
    <div class="text-center py-8">
        <a href="index.php" class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition-colors">
            <i class="fas fa-external-link-alt mr-2"></i>
            Buka Index.php dengan Menu Baru
        </a>
    </div>
</body>
</html>
