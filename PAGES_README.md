# Dokumentasi Halaman Website Dusun Dagan

## Struktur Menu Navigasi

### 1. Profile
- **Sejarah** (`pages/profile/sejarah.php`) - Timeline sejarah Dusun Dagan
- **Peta** (`pages/profile/peta.php`) - Peta lokasi dan informasi geografis
- **Budaya** (`pages/profile/budaya.php`) - Informasi budaya dan tradisi

### 2. Potensi
- **UMKM** (`pages/potensi/umkm.php`) - Usaha Mikro Kecil Menengah
- **Pertanian** (`pages/potensi/pertanian.php`) - Potensi sektor pertanian
- **Perkebunan** (`pages/potensi/perkebunan.php`) - Potensi sektor perkebunan
- **Peternakan** (`pages/potensi/peternakan.php`) - Potensi sektor peternakan

### 3. Contact
- **Alamat Dusun** (`pages/contact/alamat-dusun.php`) - Alamat lengkap dusun
- **Kode Pos** (`pages/contact/kode-pos.php`) - Informasi kode pos
- **Telepon** (`pages/contact/telepon.php`) - Nomor telepon penting
- **Email** (`pages/contact/email.php`) - Alamat email resmi
- **Website** (`pages/contact/website.php`) - Informasi website dan sosial media

### 4. Info Instansi
- **Jumlah Penduduk** (`pages/info-instansi/jumlah-penduduk.php`) - Data demografis penduduk
- **Jumlah KK** (`pages/info-instansi/jumlah-kk.php`) - Data jumlah kepala keluarga
- **Jumlah Laki-laki** (`pages/info-instansi/jumlah-laki-laki.php`) - Data penduduk laki-laki
- **Jumlah Perempuan** (`pages/info-instansi/jumlah-perempuan.php`) - Data penduduk perempuan

### 5. Lembaga
- **Pak Dukuh** (`pages/lembaga/pak-dukuh.php`) - Profil dan informasi Pak Dukuh
- **Pak RT** (`pages/lembaga/pak-rt.php`) - Informasi RT dan pengurus
- **LPMD** (`pages/lembaga/lpmd.php`) - Lembaga Pemberdayaan Masyarakat Desa
- **PKK** (`pages/lembaga/pkk.php`) - Pemberdayaan Kesejahteraan Keluarga
- **Posyandu** (`pages/lembaga/posyandu.php`) - Pos Pelayanan Terpadu
- **Karang Taruna** (`pages/lembaga/karang-taruna.php`) - Organisasi kepemudaan
- **Jakawarga** (`pages/lembaga/jakawarga.php`) - Keamanan dan ketertiban
- **KWT** (`pages/lembaga/kwt.php`) - Kelompok Wanita Tani

## Fitur Umum Setiap Halaman

### Layout Konsisten
- Menggunakan `includes/layout.php` untuk memastikan scrolling berfungsi
- Navbar dinamis dengan `includes/navbar.php`
- Hero section dengan gradient hijau dan animasi floating elements
- Responsive design dengan Tailwind CSS

### Komponen Standar
1. **Hero Section**
   - Background gradient hijau
   - Badge modern dengan ikon
   - Judul dengan gradient text
   - Deskripsi singkat
   - Call-to-action buttons

2. **Content Sections**
   - Tentang/Overview
   - Program/Layanan
   - Struktur Organisasi (untuk lembaga)
   - Prestasi/Pencapaian
   - Statistik
   - Kontak

3. **Styling**
   - Warna tema: green, emerald, teal
   - Card design dengan shadow dan border
   - Gradient backgrounds untuk struktur organisasi
   - Icon Font Awesome untuk visual appeal

## File Utama

### Core Files
- `includes/layout.php` - Parent layout untuk semua subpages
- `includes/navbar.php` - Navbar dinamis dengan nested menus
- `assets/css/style.css` - Custom CSS styles
- `assets/js/main.js` - JavaScript functionality

### Data Files
- `data/budaya.json` - Data budaya
- `data/sejarah.json` - Data sejarah
- `data/tokoh.json` - Data tokoh
- `data/umkm.json` - Data UMKM

## Teknologi yang Digunakan

### Frontend
- **Tailwind CSS** - Utility-first CSS framework
- **Font Awesome** - Icon library
- **Google Fonts** - Typography (Inter)

### Backend
- **PHP** - Server-side scripting
- **JSON** - Data storage format

### Features
- **Responsive Design** - Mobile-first approach
- **Dynamic Navigation** - PHP-based menu generation
- **Smooth Scrolling** - Custom scroll behavior
- **Modern Animations** - CSS keyframes dan JavaScript
- **Consistent Layout** - Reusable components

## Struktur Folder

```
Dusun-Dagan/
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── main.js
│   └── images/
├── includes/
│   ├── layout.php
│   ├── navbar.php
│   ├── hero.php
│   ├── budaya.php
│   ├── sejarah.php
│   ├── tokoh.php
│   └── umkm.php
├── pages/
│   ├── profile/
│   ├── potensi/
│   ├── contact/
│   ├── info-instansi/
│   └── lembaga/
├── data/
├── config/
└── index.php
```

## Cara Penggunaan

1. **Navigasi**: Gunakan navbar untuk mengakses semua halaman
2. **Responsive**: Website responsive di semua device
3. **Scrolling**: Semua halaman dapat di-scroll dengan normal
4. **Konsistensi**: Layout dan styling konsisten di semua halaman

## Maintenance

### Menambah Halaman Baru
1. Buat file PHP di folder yang sesuai
2. Include `layout.php` dan `navbar.php`
3. Gunakan struktur hero section yang sama
4. Tambahkan link di `navbar.php` jika diperlukan

### Update Data
1. Edit file JSON di folder `data/`
2. Update konten di file PHP yang sesuai
3. Refresh browser untuk melihat perubahan

## Status Penyelesaian

✅ **SEMUA HALAMAN TELAH SELESAI DIBUAT**

- [x] Profile (3 halaman)
- [x] Potensi (4 halaman)
- [x] Contact (5 halaman)
- [x] Info Instansi (4 halaman)
- [x] Lembaga (8 halaman)

**Total: 24 halaman + 1 halaman utama = 25 halaman**

Website Dusun Dagan telah lengkap dengan semua halaman yang diminta dan siap digunakan!
