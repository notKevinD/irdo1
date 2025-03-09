<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IRDO</title>

</head>

<body>
<?php 
  $activePage = 'update'; 
  include 'komponen/navbar.php'; 
  ?>  

  <div class="container text-center bg-body pb-3" style="padding-top: 100px;">
      <h1 class="">Pengumuman</h1>
      <div class="row pt-3 px-5 d-flex justify-content-center" style="min-height : 500px">
      

      <?php
    require 'config/database.php'; // Sesuaikan dengan koneksi database
    
    // Ambil semua berita
    $query = "SELECT * FROM pengumuman ORDER BY timeStamp DESC";
    $result = $conn->query($query);

    // Jika tidak ada berita, tampilkan pesan
    if ($result->num_rows == 0) {
      echo "<h2>Tidak ada pengumuman yang tersedia!</h2>";
      exit;
    }
    ?>
        <?php while ($pengumuman = $result->fetch_assoc()): ?>
          <div class="col-md-4 d-flex justify-content-center align-items-center my-3">
          <div class="card" style="width: 20rem;">
            <div class="card-body text-start">
              <p class="d-inline-flex align-items-center ">
              <i class="bi bi-person text-primary me-2"></i>
                <i class="bi bi-calendar4-week text-primary me-2"></i>
                <?= date('d F Y', strtotime($pengumuman['timeStamp'])) ?>
              </p>
              <p class="card-text text-start fw-bold"><?= htmlspecialchars($pengumuman['headline']) ?></p>
              <a href="id/detailPengumuman/<?= htmlspecialchars($pengumuman['slug']) ?>" class="btn" style="background-color: #81CCE3; color: #283371">Selengkapnya</a>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      
      </div>

      
    </div>



  
  <?php 
  include 'komponen/footer.php'; 
  ?>

</body>

</html>

