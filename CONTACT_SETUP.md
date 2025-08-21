# 📞 Panduan Pengaturan Kontak Dusun Dagan

## 🎯 Cara Mengubah Nomor WhatsApp dan Kontak Lainnya

### 📍 Lokasi File Konfigurasi
Semua pengaturan kontak berada di file: `config/config.php`

### 🔧 Cara Mengubah Nomor WhatsApp

1. **Buka file** `config/config.php`
2. **Cari bagian** `getContactInfo()` function
3. **Ubah nomor WhatsApp** di bagian ini:

```php
'whatsapp' => [
    'number' => '6281234567890', // 👈 Ganti dengan nomor Anda (tanpa tanda +)
    'display' => '+62 812-3456-7890', // 👈 Format tampilan yang diinginkan
    'message' => 'Halo! Saya tertarik dengan produk Dusun Dagan. Bisa info lebih lanjut?' // 👈 Pesan default
],
```

### 📱 Format Nomor WhatsApp
- **Gunakan format**: `6281234567890` (tanpa tanda +)
- **Contoh**: Jika nomor Anda `+62 812-3456-7890`, maka tulis `6281234567890`

### 💬 Mengubah Pesan Default WhatsApp
Anda bisa mengubah pesan default yang muncul saat pengunjung klik WhatsApp:

```php
'message' => 'Halo! Saya tertarik dengan produk Dusun Dagan. Bisa info lebih lanjut?'
```

### 📧 Mengubah Email
```php
'email' => 'info@dusundagan.com', // 👈 Ganti dengan email Anda
```

### 🏠 Mengubah Alamat
```php
'address' => [
    'street' => 'Jl. Dusun Dagan No. 123', // 👈 Jalan
    'district' => 'Kecamatan, Kabupaten', // 👈 Kecamatan & Kabupaten
    'province' => 'Jawa Tengah, Indonesia' // 👈 Provinsi
],
```

### ⏰ Mengubah Jam Operasional
```php
'hours' => 'Senin - Minggu: 08:00 - 20:00', // 👈 Jam operasional
```

### 📱 Mengubah Social Media Links
```php
'social_media' => [
    'facebook' => 'https://facebook.com/dusundagan', // 👈 Link Facebook
    'instagram' => 'https://instagram.com/dusundagan', // 👈 Link Instagram
    'youtube' => 'https://youtube.com/dusundagan', // 👈 Link YouTube
    'whatsapp' => 'https://wa.me/6281234567890' // 👈 Link WhatsApp
]
```

## 🎯 Fitur Otomatis

### ✅ Yang Akan Berubah Otomatis
Setelah mengubah konfigurasi di `config/config.php`, semua link kontak akan berubah otomatis di:

1. **Footer** - Semua link social media dan kontak
2. **UMKM Cards** - Tombol "Hubungi" akan mengarah ke WhatsApp
3. **Tokoh Cards** - Social media links
4. **Contact Form** - Semua informasi kontak

### 🔗 Link WhatsApp Otomatis
- **Format**: `https://wa.me/NOMOR?text=PESAN`
- **Contoh**: `https://wa.me/6281234567890?text=Halo! Saya tertarik dengan produk Dusun Dagan`

## 📋 Contoh Konfigurasi Lengkap

```php
function getContactInfo() {
    return [
        'whatsapp' => [
            'number' => '6281234567890',
            'display' => '+62 812-3456-7890',
            'message' => 'Halo! Saya tertarik dengan produk Dusun Dagan. Bisa info lebih lanjut?'
        ],
        'phone' => [
            'number' => '6281234567890',
            'display' => '+62 812-3456-7890'
        ],
        'email' => 'info@dusundagan.com',
        'address' => [
            'street' => 'Jl. Dusun Dagan No. 123',
            'district' => 'Kecamatan, Kabupaten',
            'province' => 'Jawa Tengah, Indonesia'
        ],
        'hours' => 'Senin - Minggu: 08:00 - 20:00',
        'social_media' => [
            'facebook' => 'https://facebook.com/dusundagan',
            'instagram' => 'https://instagram.com/dusundagan',
            'youtube' => 'https://youtube.com/dusundagan',
            'whatsapp' => 'https://wa.me/6281234567890'
        ]
    ];
}
```

## 🚀 Tips Penggunaan

### 💡 Pesan WhatsApp yang Lebih Personal
Anda bisa membuat pesan yang lebih personal untuk setiap produk:

```php
// Untuk UMKM
getWhatsAppLink('Halo! Saya tertarik dengan produk ' . $umkm['nama'] . '. Bisa info lebih lanjut?')

// Untuk Tokoh
getWhatsAppLink('Halo! Saya ingin bertanya tentang ' . $tokoh['nama'] . '.')
```

### 📞 Link Telepon Otomatis
Nomor telepon akan otomatis menjadi link yang bisa diklik:
- **Desktop**: Akan membuka aplikasi telepon
- **Mobile**: Akan membuka aplikasi telepon default

### 📧 Link Email Otomatis
Email akan otomatis menjadi link yang membuka aplikasi email default.

## 🔄 Setelah Mengubah Konfigurasi

1. **Simpan file** `config/config.php`
2. **Refresh halaman** website
3. **Test semua link** kontak untuk memastikan berfungsi

## ❓ Troubleshooting

### 🔍 Link WhatsApp Tidak Berfungsi?
- Pastikan format nomor benar (tanpa tanda +)
- Pastikan nomor sudah terdaftar di WhatsApp
- Test link di browser: `https://wa.me/NOMOR`

### 📱 Link Telepon Tidak Berfungsi?
- Pastikan format: `tel:+62XXXXXXXXXX`
- Test di perangkat mobile

### 📧 Link Email Tidak Berfungsi?
- Pastikan format email benar
- Test di browser: `mailto:email@domain.com`

---

**🎉 Selamat! Sekarang Anda bisa mengelola semua kontak dari satu tempat saja!**
