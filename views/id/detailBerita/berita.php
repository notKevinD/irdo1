<?php
require 'config/database.php'; // Sesuaikan dengan koneksi database

// Ambil slug dari URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

// Ambil berita berdasarkan slug
$query = "SELECT * FROM berita WHERE slug = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $slug);
$stmt->execute();
$result = $stmt->get_result();
$berita = $result->fetch_assoc();

// Jika berita tidak ditemukan, tampilkan error
if (!$berita) {
    echo "<h2>Berita tidak ditemukan!</h2>";
    exit;
}

// Ambil berita lainnya selain yang sedang dibuka
$query_lainnya = "SELECT Headline, slug, timeStamp, foto FROM berita ORDER BY timeStamp DESC LIMIT 4";
$stmt_lainnya = $conn->prepare($query_lainnya);
$stmt_lainnya->bind_param("s", $slug);
$stmt_lainnya->execute();
$result_lainnya = $stmt_lainnya->get_result();




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
            <h1 class="pt-1 text-center pb-5">Berita</h1>
            <div class="row">
                <!-- Bagian Kiri: Isi Berita -->
                <div class="col-md-9">
                    <h2 class="ms-3" style="font-size: 50px !important;font-weight: bold !important;">
                        <?= htmlspecialchars($berita['headline']) ?></h2>
                    <p class="d-inline-flex align-items-center ms-3 fs-5">
                        <i class="bi bi-person text-primary me-2"></i>
                        <?= htmlspecialchars($berita['penulis']) ?>
                        <i class="bi bi-calendar4-week text-primary me-2 ps-3"></i>
                        <?= date('d F Y', strtotime($berita['timeStamp'])) ?>
                    </p>
                    <img src="img/<?= htmlspecialchars($berita['foto']) ?>" alt="Gambar Berita"
                        class="img-fluid w-100 p-5">
                    <p style="text-align: justify;">
                        <?= $berita['konten'] ?>
                    </p>
                </div>

                <!-- Bagian Kanan: Berita Lainnya -->
                <div class="col-md-3">
                    <h4 class="fw-bold">Berita Lainnya</h4>
                    <ul class="list-unstyled pt-5 border-top border-black">
                        <?php while ($lain = $result_lainnya->fetch_assoc()): ?>
                            <li class="d-flex mb-3">
                                <img src="img/<?= htmlspecialchars($lain['foto'])?>" alt="Berita"
                                    class="img-fluid me-2" style="height: 80px;">
                                <div>
                                    <a href="/id/detailBerita/<?= $lain['slug'] ?>"
                                        class="text-dark fw-bold"><?= htmlspecialchars($lain['Headline']) ?></a>
                                    <p class="text-muted small"><?= date('l, d F Y', strtotime($lain['timeStamp'])) ?></p>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php include 'views/id/komponen/footer.php'; ?>
</body>

</html>