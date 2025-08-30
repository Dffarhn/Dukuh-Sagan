# Layout Fix untuk Masalah Scrolling di Halaman Subfolder

## Masalah yang Ditemukan
Semua file di folder `pages/` tidak bisa di-scroll karena:
1. JavaScript di `main.js` mencari elemen `loading-screen` yang hanya ada di halaman utama
2. Ketika elemen tidak ditemukan, scrolling tetap dinonaktifkan
3. Tidak ada layout parent yang konsisten untuk semua halaman subfolder

## Solusi yang Diterapkan

### 1. Membuat Parent Layout (`includes/layout.php`)
File ini berisi:
- **CSS yang memaksa scrolling aktif**:
  ```css
  html, body {
      overflow-x: hidden;
      overflow-y: auto !important;
      height: auto !important;
      min-height: 100vh;
  }
  ```

- **JavaScript untuk memastikan scrolling selalu aktif**:
  ```javascript
  document.addEventListener("DOMContentLoaded", function() {
      // Force enable scrolling
      document.documentElement.style.overflow = "auto";
      document.body.style.overflow = "auto";
      document.body.style.overflowX = "hidden";
      document.body.style.overflowY = "auto";
  });
  ```

- **MutationObserver untuk memantau perubahan** yang mungkin menonaktifkan scrolling

### 2. Mengupdate Semua File di Folder `pages/`
Semua file PHP di subfolder sekarang include parent layout:

```php
<?php
require_once '../../config/config.php';
// Include parent layout untuk memastikan scrolling berfungsi
include '../../includes/layout.php';
?>
```

### 3. File yang Sudah Diupdate

#### Folder `pages/contact/`:
- ✅ `website.php`
- ✅ `email.php`
- ✅ `telepon.php`
- ✅ `kode-pos.php`
- ✅ `alamat-dusun.php`

#### Folder `pages/profile/`:
- ✅ `sejarah.php`
- ✅ `peta.php`
- ✅ `budaya.php`

#### Folder `pages/potensi/`:
- ✅ `umkm.php`
- ✅ `pertanian.php`
- ✅ `perkebunan.php`
- ✅ `peternakan.php`

## Hasil
Sekarang semua halaman di folder `pages/` memiliki:
- ✅ Scrolling yang berfungsi normal
- ✅ Layout yang konsisten
- ✅ Tidak terpengaruh oleh loading screen dari halaman utama
- ✅ Responsive design yang tetap terjaga

## Cara Kerja
1. **Parent Layout** di-include di setiap halaman subfolder
2. **CSS memaksa** `overflow-y: auto !important` pada body
3. **JavaScript memastikan** scrolling selalu aktif dan memantau perubahan
4. **MutationObserver** mendeteksi jika ada script lain yang menonaktifkan scrolling

## Testing
Untuk memastikan fix berhasil:
1. Buka salah satu halaman di folder `pages/` (misal: `pages/contact/website.php`)
2. Pastikan halaman bisa di-scroll dengan normal
3. Pastikan navbar tetap fixed di atas
4. Pastikan semua konten terlihat dan bisa diakses

## Catatan
- Fix ini tidak mempengaruhi halaman utama (`index.php`)
- Loading screen tetap berfungsi normal di halaman utama
- Semua fitur lain (navbar, responsive design, dll) tetap berfungsi
