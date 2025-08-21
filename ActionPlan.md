# Action Plan: Landing Page Dusun Dagan (PHP + XAMPP)

## Phase 1: Setup Environment & Project Structure (30-45 menit)

### 1.1 Persiapan XAMPP
- [ ] Pastikan XAMPP sudah terinstall dan running (Apache)
- [ ] Buat folder project di `C:\xampp\htdocs\dusun-dagan\`
- [ ] Test akses di browser: `http://localhost/dusun-dagan/`

### 1.2 Struktur Folder Project
- [ ] Buat struktur folder:
  ```
  dusun-dagan/
  ├── index.php
  ├── assets/
  │   ├── css/
  │   │   └── style.css
  │   ├── js/
  │   │   └── main.js
  │   └── images/
  │       ├── hero/
  │       ├── budaya/
  │       ├── umkm/
  │       └── tokoh/
  ├── data/
  │   ├── umkm.json
  │   ├── tokoh.json
  │   ├── budaya.json
  │   └── sejarah.json
  ├── includes/
  │   ├── header.php
  │   ├── hero.php
  │   ├── budaya.php
  │   ├── sejarah.php
  │   ├── umkm.php
  │   ├── tokoh.php
  │   └── footer.php
  └── config/
      └── config.php
  ```

### 1.3 Setup CDN & Framework
- [ ] Tambahkan Tailwind CSS via CDN di header
- [ ] Tambahkan jQuery untuk interaktivitas
- [ ] Setup Google Fonts (Inter/Poppins)

## Phase 2: Persiapan Data JSON (45 menit)

### 2.1 Buat File JSON Data
- [ ] **data/umkm.json**:
  ```json
  [
    {
      "id": 1,
      "nama": "Kerajinan Bambu Pak Slamet",
      "deskripsi": "Kerajinan bambu berkualitas tinggi dengan desain modern dan tradisional",
      "foto": "assets/images/umkm/bambu1.jpg",
      "kategori": "Kerajinan",
      "kontak": "08123456789"
    },
    {
      "id": 2,
      "nama": "Warung Gudeg Bu Tini",
      "deskripsi": "Gudeg original dengan cita rasa khas Dusun Dagan",
      "foto": "assets/images/umkm/gudeg1.jpg",
      "kategori": "Kuliner",
      "kontak": "08198765432"
    }
  ]
  ```

- [ ] **data/tokoh.json**:
  ```json
  [
    {
      "id": 1,
      "nama": "Pak Sumarto",
      "jabatan": "Kepala Dusun",
      "foto": "assets/images/tokoh/kepala-dusun.jpg",
      "deskripsi": "Memimpin Dusun Dagan sejak 2015"
    },
    {
      "id": 2,
      "nama": "Bu Sari",
      "jabatan": "Ketua PKK",
      "foto": "assets/images/tokoh/ketua-pkk.jpg",
      "deskripsi": "Aktif mengembangkan UMKM lokal"
    }
  ]
  ```

- [ ] **data/budaya.json**:
  ```json
  [
    {
      "id": 1,
      "nama": "Tari Kuda Lumping",
      "deskripsi": "Tarian tradisional yang masih dilestarikan hingga kini",
      "foto": "assets/images/budaya/kuda-lumping.jpg"
    },
    {
      "id": 2,
      "nama": "Upacara Slametan",
      "deskripsi": "Tradisi syukuran yang rutin dilakukan warga",
      "foto": "assets/images/budaya/slametan.jpg"
    }
  ]
  ```

- [ ] **data/sejarah.json**:
  ```json
  [
    {
      "tahun": "1945",
      "peristiwa": "Berdirinya Dusun Dagan",
      "deskripsi": "Dusun Dagan didirikan oleh para pendahulu dengan semangat gotong royong"
    },
    {
      "tahun": "1980",
      "peristiwa": "Pembangunan Infrastruktur",
      "deskripsi": "Mulai dibangun jalan dan fasilitas umum untuk kemajuan dusun"
    },
    {
      "tahun": "2020",
      "peristiwa": "Era Digital",
      "deskripsi": "Dusun Dagan mulai mengembangkan potensi digital dan UMKM online"
    }
  ]
  ```

### 2.2 Buat Helper PHP untuk JSON
- [ ] **config/config.php**:
  ```php
  <?php
  function loadJSON($filename) {
      $path = __DIR__ . '/../data/' . $filename;
      if (file_exists($path)) {
          return json_decode(file_get_contents($path), true);
      }
      return [];
  }
  
  function getUMKM() {
      return loadJSON('umkm.json');
  }
  
  function getTokoh() {
      return loadJSON('tokoh.json');
  }
  
  function getBudaya() {
      return loadJSON('budaya.json');
  }
  
  function getSejarah() {
      return loadJSON('sejarah.json');
  }
  ?>
  ```

## Phase 3: Implementasi Layout & Style (2-3 jam)

### 3.1 Main Layout (index.php)
- [ ] Buat struktur HTML5 dasar
- [ ] Include semua section dengan PHP
- [ ] Setup responsive meta tags
- [ ] Link CSS dan JS

### 3.2 Header Component (includes/header.php)
- [ ] Logo Dusun Dagan
- [ ] Navigation menu dengan smooth scroll
- [ ] Mobile hamburger menu
- [ ] Sticky header effect

### 3.3 Hero Section (includes/hero.php)
- [ ] Background image atau gradient hijau
- [ ] Judul dan subtitle sesuai PRD
- [ ] CTA button "Jelajahi UMKM"
- [ ] Parallax effect (optional)

### 3.4 CSS Styling (assets/css/style.css)
- [ ] Setup Tailwind custom classes
- [ ] Green color scheme (primary colors)
- [ ] Responsive breakpoints
- [ ] Hover effects dan animasi
- [ ] Smooth scroll behavior

## Phase 4: Dynamic Content Implementation (2-3 jam)

### 4.1 Budaya Section (includes/budaya.php)
- [ ] Load data dari budaya.json
- [ ] Gallery layout dengan carousel atau grid
- [ ] Hover effects pada gambar
- [ ] Responsive design

### 4.2 Sejarah Section (includes/sejarah.php)
- [ ] Load data dari sejarah.json
- [ ] Timeline layout vertikal
- [ ] Scroll animations
- [ ] Interactive timeline points

### 4.3 UMKM Section (includes/umkm.php) - **PRIORITAS UTAMA**
- [ ] Load data dari umkm.json
- [ ] Card layout responsive (2-3 kolom)
- [ ] Hover effects dan transitions
- [ ] Filter berdasarkan kategori (optional)
- [ ] Contact information per UMKM

### 4.4 Tokoh Masyarakat (includes/tokoh.php)
- [ ] Load data dari tokoh.json
- [ ] Grid layout dengan foto dan info
- [ ] Hover effects untuk detail
- [ ] Responsive cards

### 4.5 Footer (includes/footer.php)
- [ ] Kontak informasi
- [ ] Social media links
- [ ] Copyright notice
- [ ] Back to top button

## Phase 5: Interactivity & Enhancement (1-2 jam)

### 5.1 JavaScript Functionality (assets/js/main.js)
- [ ] Smooth scroll navigation
- [ ] Mobile menu toggle
- [ ] Scroll animations (Intersection Observer)
- [ ] Image lazy loading
- [ ] Form handling (jika ada contact form)

### 5.2 Performance Optimization
- [ ] Optimize gambar (compress dan resize)
- [ ] Minify CSS dan JS
- [ ] Lazy loading untuk gambar
- [ ] Cache headers di .htaccess

## Phase 6: Testing & Final Touch (30-60 menit)

### 6.1 Testing
- [ ] Test di berbagai browser (Chrome, Firefox, Edge)
- [ ] Test responsive di mobile, tablet, desktop
- [ ] Test kecepatan loading
- [ ] Test semua link dan navigasi
- [ ] Test data JSON loading

### 6.2 SEO & Meta Tags
- [ ] Title dan meta description
- [ ] Open Graph tags untuk social media
- [ ] Alt text untuk semua gambar
- [ ] Structured data (JSON-LD) - optional

### 6.3 Deploy & Documentation
- [ ] Test final di localhost
- [ ] Buat dokumentasi singkat untuk maintenance
- [ ] Backup project
- [ ] Siap untuk deployment ke hosting

## Estimasi Waktu Total: 6-9 jam

## Tools yang Dibutuhkan di Cursor:
- PHP syntax highlighting extension
- HTML/CSS/JS support
- Live server preview (jika ada)
- File tree untuk navigasi folder

## Tips untuk Cursor:
1. Gunakan multi-cursor editing untuk membuat struktur repetitif
2. Manfaatkan code completion untuk PHP dan HTML
3. Gunakan find & replace untuk konsistensi naming
4. Preview changes secara real-time di browser

Apakah action plan ini sudah sesuai dengan kebutuhan Anda? Ada yang perlu saya adjust atau tambahkan?