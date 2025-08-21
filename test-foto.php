<?php
// Test file untuk mengecek foto

require_once 'config/config.php';

echo "<h1>Test Foto Dusun Dagan</h1>";

// Test foto budaya
echo "<h2>1. Test Foto Budaya</h2>";
$budayaData = getBudaya();
foreach ($budayaData as $budaya) {
    $fotoPath = $budaya['foto'];
    echo "<h3>{$budaya['nama']}</h3>";
    echo "<p>Path: $fotoPath</p>";
    
    if (file_exists($fotoPath)) {
        echo "✅ File ada<br>";
        echo "<img src='$fotoPath' alt='{$budaya['nama']}' style='width: 200px; height: 150px; object-fit: cover; border: 2px solid green;'><br><br>";
    } else {
        echo "❌ File tidak ada<br>";
        echo "Periksa path: $fotoPath<br><br>";
    }
}

// Test foto UMKM
echo "<h2>2. Test Foto UMKM</h2>";
$umkmData = getUMKM();
foreach ($umkmData as $umkm) {
    $fotoPath = $umkm['foto'];
    echo "<h3>{$umkm['nama']}</h3>";
    echo "<p>Path: $fotoPath</p>";
    
    if (file_exists($fotoPath)) {
        echo "✅ File ada<br>";
        echo "<img src='$fotoPath' alt='{$umkm['nama']}' style='width: 200px; height: 150px; object-fit: cover; border: 2px solid green;'><br><br>";
    } else {
        echo "❌ File tidak ada<br>";
        echo "Periksa path: $fotoPath<br><br>";
    }
}

// Test foto tokoh
echo "<h2>3. Test Foto Tokoh</h2>";
$tokohData = getTokoh();
foreach ($tokohData as $tokoh) {
    $fotoPath = $tokoh['foto'];
    echo "<h3>{$tokoh['nama']}</h3>";
    echo "<p>Path: $fotoPath</p>";
    
    if (file_exists($fotoPath)) {
        echo "✅ File ada<br>";
        echo "<img src='$fotoPath' alt='{$tokoh['nama']}' style='width: 200px; height: 200px; object-fit: cover; border: 2px solid green;'><br><br>";
    } else {
        echo "❌ File tidak ada<br>";
        echo "Periksa path: $fotoPath<br><br>";
    }
}

// Cek struktur folder
echo "<h2>4. Struktur Folder Images</h2>";
$folders = ['assets/images/budaya', 'assets/images/umkm', 'assets/images/tokoh', 'assets/images/hero'];

foreach ($folders as $folder) {
    echo "<h3>Folder: $folder</h3>";
    if (is_dir($folder)) {
        echo "✅ Folder ada<br>";
        $files = scandir($folder);
        echo "Files: ";
        foreach ($files as $file) {
            if ($file != '.' && $file != '..') {
                echo "$file, ";
            }
        }
        echo "<br><br>";
    } else {
        echo "❌ Folder tidak ada<br><br>";
    }
}

echo "<h2>✅ Test Selesai!</h2>";
echo "<p><a href='index.php'>Kembali ke Website</a></p>";
?>
