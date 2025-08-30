<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Index dengan Navbar - Dusun Dagan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <!-- Test Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Test Index.php dengan Navbar Baru</h1>
            
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Perubahan yang Dilakukan:</h2>
                <ul class="list-disc list-inside space-y-2 text-gray-600">
                    <li>Header navigation lama diganti dengan navbar baru</li>
                    <li>Navbar menggunakan array PHP dengan nested menu</li>
                    <li>Menu disesuaikan dengan konten website (Budaya, Sejarah, UMKM, Tokoh, Kontak)</li>
                    <li>Logo konsisten dengan design yang ada</li>
                    <li>Responsive design untuk mobile dan desktop</li>
                    <li>Fixed positioning agar tetap di atas saat scroll</li>
                </ul>
            </div>
            
            <div class="bg-green-50 border border-green-200 rounded-lg p-6 mb-8">
                <h2 class="text-xl font-semibold text-green-700 mb-4">Cara Test:</h2>
                <div class="text-green-600 space-y-2">
                    <p><strong>1.</strong> Buka <code class="bg-green-100 px-2 py-1 rounded">index.php</code> di browser</p>
                    <p><strong>2.</strong> Test dropdown menu dengan hover pada desktop</p>
                    <p><strong>3.</strong> Test mobile menu dengan hamburger button</p>
                    <p><strong>4.</strong> Test scroll untuk memastikan navbar tetap fixed</p>
                    <p><strong>5.</strong> Test link navigation ke section yang sesuai</p>
                </div>
            </div>
            
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                <h2 class="text-xl font-semibold text-blue-700 mb-4">Struktur Menu Baru:</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-blue-600">
                    <div>
                        <h3 class="font-semibold mb-2">Profile</h3>
                        <ul class="list-disc list-inside text-sm ml-4">
                            <li>Sejarah</li>
                            <li>Peta</li>
                            <li>Budaya</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-2">Potensi</h3>
                        <ul class="list-disc list-inside text-sm ml-4">
                            <li>UMKM</li>
                            <li>Pertanian</li>
                            <li>Perkebunan</li>
                            <li>Peternakan</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-2">Contact</h3>
                        <ul class="list-disc list-inside text-sm ml-4">
                            <li>Alamat Dusun</li>
                            <li>Kode Pos</li>
                            <li>Telepon</li>
                            <li>Email</li>
                            <li>Website</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-2">Info Instansi</h3>
                        <ul class="list-disc list-inside text-sm ml-4">
                            <li>Jumlah Penduduk</li>
                            <li>Jumlah KK</li>
                            <li>Jumlah Laki-laki</li>
                            <li>Jumlah Perempuan</li>
                        </ul>
                    </div>
                    <div class="md:col-span-2">
                        <h3 class="font-semibold mb-2">Lembaga</h3>
                        <ul class="list-disc list-inside text-sm ml-4">
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
        </div>
    </div>
    
    <!-- Link ke index.php -->
    <div class="text-center py-8">
        <a href="index.php" class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition-colors">
            <i class="fas fa-external-link-alt mr-2"></i>
            Buka Index.php dengan Navbar Baru
        </a>
    </div>
</body>
</html>
