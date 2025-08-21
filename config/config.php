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

// Konfigurasi Kontak
function getContactInfo() {
    return [
        'whatsapp' => [
            'number' => '6281234567890', // Nomor WhatsApp tanpa tanda +
            'display' => '+62 812-3456-7890', // Format tampilan
            'message' => 'Halo! Saya tertarik dengan produk Dusun Dagan. Bisa info lebih lanjut?' // Pesan default
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

// Fungsi untuk membuat link WhatsApp
function getWhatsAppLink($message = null) {
    $contact = getContactInfo();
    $number = $contact['whatsapp']['number'];
    $defaultMessage = $contact['whatsapp']['message'];
    
    $text = $message ? urlencode($message) : urlencode($defaultMessage);
    return "https://wa.me/{$number}?text={$text}";
}

// Fungsi untuk mendapatkan nomor WhatsApp yang sudah diformat
function getWhatsAppNumber() {
    $contact = getContactInfo();
    return $contact['whatsapp']['display'];
}

// Fungsi untuk mendapatkan nomor telepon yang sudah diformat
function getPhoneNumber() {
    $contact = getContactInfo();
    return $contact['phone']['display'];
}

// Fungsi untuk mendapatkan email
function getEmail() {
    $contact = getContactInfo();
    return $contact['email'];
}

// Fungsi untuk mendapatkan alamat lengkap
function getAddress() {
    $contact = getContactInfo();
    return $contact['address'];
}

// Fungsi untuk mendapatkan jam operasional
function getOperatingHours() {
    $contact = getContactInfo();
    return $contact['hours'];
}
?>
