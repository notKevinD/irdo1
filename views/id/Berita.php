<?php
require 'config/database.php'; // Sesuaikan dengan koneksi database

// Ambil semua berita
$query = "SELECT headline, penulis, timeStamp, foto,slug FROM berita ORDER BY timeStamp DESC";
$result = $conn->query($query);

// Jika tidak ada berita, tampilkan pesan
if ($result->num_rows == 0) {
  echo "<h2>Tidak ada berita yang tersedia!</h2>";
  exit;
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IRDO</title>
</head>

<body>
  <?php
  $activePage = 'home';
  include 'komponen/navbar.php';
  ?>

  <div class="container text-center bg-body pb-3" style="padding-top: 100px;">
    <h1 class="">Berita</h1>
    <div class="row pt-3 px-5 d-flex justify-content-center" style="min-height : 500px">

    <?php while ($berita = $result->fetch_assoc()): ?>
        <div class="col-md-4 d-flex justify-content-center align-items-center my-3">
          <div class="card" style="width: 20rem;">
            <img src="img/<?= htmlspecialchars($berita['foto']) ?>" class="card-img-top" alt="Gambar Berita">
            <div class="card-body">
              <p class="d-inline-flex align-items-center">
                <i class="bi bi-person text-primary me-2"></i>
                <?= htmlspecialchars($berita['penulis']) ?>
                <i class="bi bi-calendar4-week text-primary me-2 ps-3"></i>
                <?= date('d F Y', strtotime($berita['timeStamp'])) ?>
              </p>
              <p class="card-text text-start fw-bold"><?= htmlspecialchars($berita['headline']) ?></p>
              <a href="id/detailBerita/<?= htmlspecialchars($berita['slug']) ?>" class="btn text-white"
                style="background-color: #283371;">Read More</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>


    </div>


  </div>


  </div>




  <?php
  include 'komponen/footer.php';
  ?>
</body>

</html>