<?php
// Ambil path request tanpa query string
$request = strtok($_SERVER['REQUEST_URI'], '?');

// Jika proyek ada di subfolder (misal: http://localhost/irdo1/), hapus bagian "/irdo1"
$base_path = '/irdo1'; // Sesuaikan dengan nama folder proyek
$request = str_replace($base_path, '', $request);

// Routing dengan path dinamis untuk detail berita
if (preg_match('/^\/id\/detailBerita\/([\w-]+)$/', $request, $matches)) {
    $_GET['slug'] = $matches[1]; // Ambil slug dari URL
    require 'views/id/detailBerita/berita.php';
} else {
    switch ($request) {
        case '/id/main':
            require 'views/id/mainPage.php';
            break;
        case '/id/tentang':
            require 'views/id/tentang.php';
            break;
        case '/id/galeri':
            require 'views/id/galeri.php';
            break;
        case '/id/registrasi':
            require 'views/id/registrasi.php';
            break;
        case '/id/unduhan':
            require 'views/id/unduhan.php';
            break;
        case '/id/pengumuman':
            require 'views/id/pengumuman.php';
            break;
        case '/id/berita':
            require 'views/id/berita.php';
            break;
        default:
            require 'views/id/404.php'; // Halaman tidak ditemukan
            break;
    }
}
?>
