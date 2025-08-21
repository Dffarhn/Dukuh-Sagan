# Landing Page Dusun Dagan

Landing page modern untuk Dusun Dagan yang menampilkan informasi budaya, sejarah, UMKM lokal, dan tokoh masyarakat. Dibangun dengan PHP, Tailwind CSS, dan JavaScript.

## 🚀 Fitur Utama

- **Responsive Design** - Mobile-first approach dengan Tailwind CSS
- **Dynamic Content** - Data UMKM, budaya, sejarah, dan tokoh dari JSON
- **Modern UI/UX** - Animasi smooth, hover effects, dan interaktivitas
- **SEO Optimized** - Meta tags, structured data, dan semantic HTML
- **Performance** - Optimized images, lazy loading, dan caching
- **Accessibility** - WCAG compliant dengan proper ARIA labels

## 📁 Struktur Project

```
dusun-dagan/
├── index.php                 # File utama
├── assets/
│   ├── css/
│   │   └── style.css        # Custom CSS
│   ├── js/
│   │   └── main.js          # JavaScript functionality
│   └── images/              # Gambar dan media
│       ├── hero/
│       ├── budaya/
│       ├── umkm/
│       └── tokoh/
├── data/                    # Data JSON
│   ├── umkm.json
│   ├── tokoh.json
│   ├── budaya.json
│   └── sejarah.json
├── includes/                # PHP components
│   ├── header.php
│   ├── hero.php
│   ├── budaya.php
│   ├── sejarah.php
│   ├── umkm.php
│   ├── tokoh.php
│   └── footer.php
├── config/
│   └── config.php          # Helper functions
├── .htaccess               # Apache configuration
├── README.md               # Dokumentasi
├── PRD.md                  # Product Requirements Document
└── ActionPlan.md           # Action Plan
```

## 🛠️ Teknologi yang Digunakan

- **Backend**: PHP 7.4+
- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Framework**: Tailwind CSS (via CDN)
- **Icons**: Font Awesome 6.4.0
- **Fonts**: Google Fonts (Inter, Poppins)
- **Server**: Apache (XAMPP)

## 📋 Prasyarat

- XAMPP atau server Apache dengan PHP
- PHP 7.4 atau lebih baru
- Web browser modern

## 🚀 Instalasi

1. **Clone atau download project**
   ```bash
   # Jika menggunakan git
   git clone [repository-url]
   
   # Atau download dan extract ke folder
   ```

2. **Pindahkan ke htdocs**
   ```bash
   # Pindahkan folder ke C:\xampp\htdocs\dusun-dagan\
   ```

3. **Start XAMPP**
   - Buka XAMPP Control Panel
   - Start Apache service
   - Pastikan port 80 tidak terpakai

4. **Akses website**
   ```
   http://localhost/dusun-dagan/
   ```

## 📝 Konfigurasi

### 1. Data JSON
Edit file di folder `data/` untuk mengubah konten:

- `umkm.json` - Data UMKM lokal
- `tokoh.json` - Data tokoh masyarakat
- `budaya.json` - Data budaya lokal
- `sejarah.json` - Data sejarah dusun

### 2. Customization
- **Warna**: Edit CSS variables di `assets/css/style.css`
- **Font**: Ganti Google Fonts di `includes/header.php`
- **Meta tags**: Update SEO tags di `index.php`

### 3. Images
- Tambahkan gambar ke folder `assets/images/`
- Update path di file JSON sesuai struktur folder
- Optimize gambar untuk web (compress, resize)

## 🎨 Customization

### Mengubah Warna
```css
:root {
    --primary-green: #16a34a;    /* Warna utama */
    --secondary-green: #22c55e;  /* Warna sekunder */
    --dark-green: #15803d;       /* Warna gelap */
    --light-green: #dcfce7;      /* Warna terang */
}
```

### Menambah UMKM Baru
```json
{
    "id": 5,
    "nama": "Nama UMKM",
    "deskripsi": "Deskripsi UMKM",
    "foto": "assets/images/umkm/foto.jpg",
    "kategori": "Kategori",
    "kontak": "08123456789"
}
```

## 🔧 Maintenance

### Update Content
1. Edit file JSON di folder `data/`
2. Refresh browser untuk melihat perubahan
3. Pastikan format JSON valid

### Backup
1. Backup seluruh folder project
2. Backup database jika menggunakan database
3. Backup file konfigurasi

### Performance
- Optimize gambar sebelum upload
- Minify CSS/JS untuk production
- Enable gzip compression di server
- Use CDN untuk static assets

## 📱 Responsive Breakpoints

- **Mobile**: < 768px
- **Tablet**: 768px - 1024px
- **Desktop**: > 1024px

## 🌐 Browser Support

- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+

## 🔒 Security

- Input validation di form contact
- XSS protection headers
- Content Security Policy
- Secure file access dengan .htaccess

## 📊 SEO Features

- Meta tags lengkap
- Open Graph tags
- Twitter Card tags
- Semantic HTML structure
- Alt text untuk gambar
- Structured data (JSON-LD)

## 🚀 Deployment

### Local Development
```bash
# Start XAMPP
# Akses http://localhost/dusun-dagan/
```

### Production
1. Upload ke hosting provider
2. Update domain di meta tags
3. Enable HTTPS
4. Configure caching
5. Test performance

## 📞 Support

Untuk bantuan dan pertanyaan:
- Email: info@dusundagan.com
- Phone: +62 812-3456-7890
- Website: http://dusundagan.com

## 📄 License

© 2024 Dusun Dagan. All rights reserved.

## 🔄 Changelog

### v1.0.0 (2024-01-XX)
- Initial release
- Responsive design
- Dynamic content dari JSON
- SEO optimization
- Performance optimization

---

**Dibuat dengan ❤️ untuk Dusun Dagan**
"# Dukuh-Sagan" 
