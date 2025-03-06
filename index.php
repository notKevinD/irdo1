<?php
// Ambil path request tanpa query string
$request = strtok($_SERVER['REQUEST_URI'], '?');

// Jika proyek ada di subfolder (misal: http://localhost/IRDO1/), hapus bagian "/IRDO1"
$base_path = '/irdo1'; // Sesuaikan dengan nama folder proyekmu
$request = str_replace($base_path, '', $request);

// Routing berdasarkan URL
echo $request;
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


    default:
        require 'views/id/404.php'; // Pastikan ada file ini
        break;
}
?>
