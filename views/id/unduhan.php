<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IRDO</title>
</head>

<body>
  <?php
  $activePage = 'unduhan';
  include 'komponen/navbar.php';
  ?>

  <div class="container text-center bg-body pb-3" style="padding-top: 100px;">
    <h1 class="pt-4">Unduhan</h1>
    <div class="row pt-3 d-flex justify-content-center" style="min-height : 500px">

      <?php
      require 'config/database.php'; // Sesuaikan dengan koneksi database
      
      // Ambil semua berita
      $query = "SELECT * FROM unduhan ORDER BY id DESC";
      $result = $conn->query($query);

      // Jika tidak ada berita, tampilkan pesan
      if ($result->num_rows == 0) {
        echo "<h2>Tidak ada unduhan yang tersedia!</h2>";
        exit;
      }
      ?>
      <?php while ($unduhan = $result->fetch_assoc()): ?>
        <div class="col-md-4 d-flex justify-content-center align-items-center my-3">
          <div class="card" style="width: 20rem;">
            <div class="card-body">
              <h2 class="d-inline-flex align-items-center border-bottom">
                <?= htmlspecialchars($unduhan['jenisFile']) ?>
              </h2>
              <p class="card-text my-5 fw-semibold"><?= htmlspecialchars($unduhan['judul']) ?></p>
              <a href="unduhan/<?= htmlspecialchars($unduhan['namaFile']) ?>" class="btn text-white px-3 py-2"
                style="background-color: #F35D42" download>Unduh</a>
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
