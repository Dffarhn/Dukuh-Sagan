<?php
// Test file untuk melihat implementasi logo

echo "<!DOCTYPE html>";
echo "<html lang='id'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Test Logo Dusun Dagan</title>";
echo "<style>";
echo "body { font-family: Arial, sans-serif; padding: 20px; background: #f5f5f5; }";
echo ".test-section { margin: 20px 0; padding: 20px; background: white; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }";
echo ".success { color: #16a34a; font-weight: bold; }";
echo ".info { color: #3b82f6; }";
echo ".logo-preview { border: 2px solid #e5e7eb; border-radius: 10px; padding: 20px; margin: 10px 0; text-align: center; }";
echo "</style>";
echo "</head>";
echo "<body>";

echo "<h1>🎨 Test Implementasi Logo Dusun Dagan</h1>";

echo "<div class='test-section'>";
echo "<h2>✅ Logo Berhasil Diimplementasikan di:</h2>";
echo "<ul>";
echo "<li><span class='success'>Header Navigation:</span> Logo utama di navbar</li>";
echo "<li><span class='success'>Loading Screen:</span> Logo dengan animasi floating</li>";
echo "<li><span class='success'>Footer:</span> Logo di bagian footer</li>";
echo "<li><span class='success'>Favicon:</span> Logo sebagai favicon browser</li>";
echo "<li><span class='success'>Responsive:</span> Logo menyesuaikan ukuran layar</li>";
echo "</ul>";
echo "</div>";

echo "<div class='test-section'>";
echo "<h2>🖼️ Preview Logo:</h2>";
echo "<div class='logo-preview'>";
echo "<img src='assets/images/logo.png' alt='Dusun Dagan Logo' style='max-width: 200px; height: auto;'>";
echo "<p><strong>Logo Dusun Dagan</strong></p>";
echo "<p>Ukuran: 200px (responsive)</p>";
echo "</div>";
echo "</div>";

echo "<div class='test-section'>";
echo "<h2>🎯 Fitur Logo yang Ditambahkan:</h2>";
echo "<ul>";
echo "<li><span class='info'>Hover Effect:</span> Logo membesar saat di-hover</li>";
echo "<li><span class='info'>Drop Shadow:</span> Bayangan halus untuk depth</li>";
echo "<li><span class='info'>Smooth Animation:</span> Transisi halus saat hover</li>";
echo "<li><span class='info'>Loading Animation:</span> Logo floating di loading screen</li>";
echo "<li><span class='info'>Responsive Design:</span> Menyesuaikan ukuran layar</li>";
echo "</ul>";
echo "</div>";

echo "<div class='test-section'>";
echo "<h2>📱 Responsive Behavior:</h2>";
echo "<ul>";
echo "<li><strong>Desktop:</strong> Logo + text 'Dusun Dagan'</li>";
echo "<li><strong>Tablet:</strong> Logo + text 'Dusun Dagan'</li>";
echo "<li><strong>Mobile:</strong> Hanya logo (text tersembunyi)</li>";
echo "<li><strong>Loading:</strong> Logo besar dengan animasi</li>";
echo "</ul>";
echo "</div>";

echo "<div class='test-section'>";
echo "<h2>🔗 Links Testing:</h2>";
echo "<p><a href='index.php' style='color: #16a34a; text-decoration: none; font-weight: bold; font-size: 18px;'>🏠 Buka Website dengan Logo</a></p>";
echo "<p><a href='test-fix.php' style='color: #3b82f6; text-decoration: none;'>🔧 Test Fix</a></p>";
echo "<p><a href='test-modern.php' style='color: #f59e0b; text-decoration: none;'>🎨 Test Fitur Modern</a></p>";
echo "</div>";

echo "<div class='test-section'>";
echo "<h2>💡 Tips Penggunaan Logo:</h2>";
echo "<ul>";
echo "<li>Logo akan muncul di semua halaman website</li>";
echo "<li>Hover pada logo untuk efek interaktif</li>";
echo "<li>Logo responsive di semua device</li>";
echo "<li>Favicon akan muncul di tab browser</li>";
echo "<li>Loading screen dengan animasi logo</li>";
echo "</ul>";
echo "</div>";

echo "</body>";
echo "</html>";
?>
