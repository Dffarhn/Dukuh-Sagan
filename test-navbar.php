<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Navbar - Dusun Dagan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Include Navbar -->
    <?php include 'includes/navbar.php'; ?>
    
    <!-- Test Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Test Navbar Dusun Dagan</h1>
            
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Fitur Navbar:</h2>
                <ul class="list-disc list-inside space-y-2 text-gray-600">
                    <li>Menu utama dengan dropdown submenu</li>
                    <li>Hover effect untuk menampilkan dropdown</li>
                    <li>Responsive design untuk mobile</li>
                    <li>Animasi smooth pada dropdown</li>
                    <li>Mobile hamburger menu</li>
                    <li>Sticky positioning</li>
                </ul>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Struktur Menu:</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <h3 class="font-semibold text-green-600 mb-2">Profile</h3>
                        <ul class="list-disc list-inside text-sm text-gray-600 ml-4">
                            <li>Sejarah</li>
                            <li>Peta</li>
                            <li>Budaya</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-green-600 mb-2">Potensi</h3>
                        <ul class="list-disc list-inside text-sm text-gray-600 ml-4">
                            <li>UMKM</li>
                            <li>Pertanian</li>
                            <li>Perkebunan</li>
                            <li>Peternakan</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-green-600 mb-2">Contact</h3>
                        <ul class="list-disc list-inside text-sm text-gray-600 ml-4">
                            <li>Alamat Dusun</li>
                            <li>Kode Pos</li>
                            <li>Telepon</li>
                            <li>Email</li>
                            <li>Website</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-green-600 mb-2">Info Instansi</h3>
                        <ul class="list-disc list-inside text-sm text-gray-600 ml-4">
                            <li>Jumlah Penduduk</li>
                            <li>Jumlah KK</li>
                            <li>Jumlah Laki-laki</li>
                            <li>Jumlah Perempuan</li>
                        </ul>
                    </div>
                    <div class="md:col-span-2">
                        <h3 class="font-semibold text-green-600 mb-2">Lembaga</h3>
                        <ul class="list-disc list-inside text-sm text-gray-600 ml-4">
                            <li>Pak Dukuh</li>
                            <li>Pak RT</li>
                            <li>LPMD</li>
                            <li>PKK</li>
                            <li>Posyandu</li>
                            <li>Karang Taruna</li>
                            <li>Jakawarga</li>
                            <li>KWT</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="bg-green-50 border border-green-200 rounded-lg p-6">
                <h2 class="text-xl font-semibold text-green-700 mb-4">Cara Penggunaan:</h2>
                <div class="text-green-600 space-y-2">
                    <p><strong>1.</strong> Include file navbar: <code class="bg-green-100 px-2 py-1 rounded"><?php include 'includes/navbar.php'; ?></code></p>
                    <p><strong>2.</strong> Navbar akan otomatis menggunakan tema hijau yang konsisten</p>
                    <p><strong>3.</strong> Dropdown muncul saat hover pada desktop</p>
                    <p><strong>4.</strong> Mobile menu dengan hamburger button</p>
                    <p><strong>5.</strong> Semua menu dapat dikustomisasi melalui array <code class="bg-green-100 px-2 py-1 rounded">$navItems</code></p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Dummy content untuk testing scroll -->
    <div class="h-screen bg-gradient-to-br from-green-100 to-emerald-100 flex items-center justify-center">
        <div class="text-center">
            <h2 class="text-2xl font-bold text-green-700 mb-4">Scroll Test</h2>
            <p class="text-green-600">Navbar tetap sticky di atas saat scroll</p>
        </div>
    </div>
</body>
</html>
