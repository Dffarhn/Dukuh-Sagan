<?php
// Test file untuk validasi data JSON dan fungsi PHP

require_once 'config/config.php';

echo "<h1>Test Dusun Dagan Landing Page</h1>";

// Test 1: Validasi file JSON
echo "<h2>1. Validasi File JSON</h2>";

$jsonFiles = ['umkm.json', 'tokoh.json', 'budaya.json', 'sejarah.json'];

foreach ($jsonFiles as $file) {
    $path = "data/$file";
    if (file_exists($path)) {
        $content = file_get_contents($path);
        $data = json_decode($content, true);
        
        if (json_last_error() === JSON_ERROR_NONE) {
            echo "✅ $file - Valid JSON (" . count($data) . " items)<br>";
        } else {
            echo "❌ $file - Invalid JSON: " . json_last_error_msg() . "<br>";
        }
    } else {
        echo "❌ $file - File tidak ditemukan<br>";
    }
}

// Test 2: Test fungsi helper
echo "<h2>2. Test Fungsi Helper</h2>";

try {
    $umkm = getUMKM();
    echo "✅ getUMKM() - " . count($umkm) . " items<br>";
    
    $tokoh = getTokoh();
    echo "✅ getTokoh() - " . count($tokoh) . " items<br>";
    
    $budaya = getBudaya();
    echo "✅ getBudaya() - " . count($budaya) . " items<br>";
    
    $sejarah = getSejarah();
    echo "✅ getSejarah() - " . count($sejarah) . " items<br>";
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "<br>";
}

// Test 3: Validasi struktur data
echo "<h2>3. Validasi Struktur Data</h2>";

// Test UMKM structure
if (!empty($umkm)) {
    $requiredFields = ['id', 'nama', 'deskripsi', 'foto', 'kategori', 'kontak'];
    $firstItem = $umkm[0];
    
    foreach ($requiredFields as $field) {
        if (isset($firstItem[$field])) {
            echo "✅ UMKM.$field - OK<br>";
        } else {
            echo "❌ UMKM.$field - Missing<br>";
        }
    }
}

// Test 4: PHP Info
echo "<h2>4. PHP Configuration</h2>";
echo "PHP Version: " . phpversion() . "<br>";
echo "JSON Extension: " . (extension_loaded('json') ? '✅ Loaded' : '❌ Not Loaded') . "<br>";
echo "File Permissions: " . (is_readable('data/umkm.json') ? '✅ Readable' : '❌ Not Readable') . "<br>";

// Test 5: File Structure
echo "<h2>5. File Structure Check</h2>";

$requiredFiles = [
    'index.php',
    'assets/css/style.css',
    'assets/js/main.js',
    'config/config.php',
    'includes/header.php',
    'includes/hero.php',
    'includes/budaya.php',
    'includes/sejarah.php',
    'includes/umkm.php',
    'includes/tokoh.php',
    'includes/footer.php'
];

foreach ($requiredFiles as $file) {
    if (file_exists($file)) {
        echo "✅ $file - Exists<br>";
    } else {
        echo "❌ $file - Missing<br>";
    }
}

// Test 6: Sample Data Display
echo "<h2>6. Sample Data Display</h2>";

if (!empty($umkm)) {
    echo "<h3>Sample UMKM Data:</h3>";
    echo "<pre>";
    print_r($umkm[0]);
    echo "</pre>";
}

if (!empty($tokoh)) {
    echo "<h3>Sample Tokoh Data:</h3>";
    echo "<pre>";
    print_r($tokoh[0]);
    echo "</pre>";
}

echo "<h2>✅ Test Selesai!</h2>";
echo "<p>Jika semua test berhasil, website siap digunakan.</p>";
echo "<p><a href='index.php'>Klik di sini untuk melihat website</a></p>";
?>
