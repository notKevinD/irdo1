<?php
require 'config/database.php'; // Sesuaikan dengan koneksi database

// Ambil slug dari URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

// Ambil berita berdasarkan slug
$query = "SELECT timeStamp,headline,konten,slug,foto FROM pengumuman WHERE slug = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $slug);
$stmt->execute();
$result = $stmt->get_result();
$berita = $result->fetch_assoc();

// Jika berita tidak ditemukan, tampilkan error
if (!$berita) {
    echo "<h2>pengumuman tidak ditemukan!</h2>";
    exit;
}

// Ambil berita lainnya selain yang sedang dibuka
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($berita['headline']) ?></title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <?php $activePage = 'home';
    include 'views/id/komponen/navbar.php'; ?>

    <div class="container bg-body pb-5" style="padding-top: 120px;">
        <div class="container bg-body p-3">
            <h1 class="pt-1 text-center pb-5">Detail Pengumuman</h1>
            <div class="row border shadow">
                <!-- Bagian Kiri: Isi Berita -->
                <div class="col">
                    <h2 class="ms-3 text-center" style="font-size: 50px !important;font-weight: bold !important;">
                        <?= htmlspecialchars($berita['headline']) ?></h2>
                    <img src="img/<?= htmlspecialchars($berita['foto']) ?>" alt="Gambar Berita"
                        class="img-fluid w-100 p-5">
                    <p class="fs-4 ps-3" style="text-align: justify;">
                        <?= $berita['konten'] ?>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <?php include 'views/id/komponen/footer.php'; ?>
</body>

</html>