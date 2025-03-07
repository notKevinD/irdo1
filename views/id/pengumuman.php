<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IRDO</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <link rel="stylesheet" href="../../style/main.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</head>

<body>
<?php 
  $activePage = 'home'; 
  include 'komponen/navbar.php'; 
  ?>  

  <div class="container text-center bg-body pb-3" style="padding-top: 100px;">
      <h1 class="pt-4">Pengumuman</h1>
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>

</html>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>

</html>
