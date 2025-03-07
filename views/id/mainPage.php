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


  <div class="container text-center bg-body pb-3" style="padding-top: 120px;">
    <div class="row justify-content-center" style="font-family: 'Poppins', sans-serif;">
      <div class="col-12 my-3">
        <div class="d-flex justify-content-center align-items-center mb-3">
          <img src="img/ubl.png" alt="Logo UBL" class="logo mx-3">
          <img src="img/robotic.png" alt="Logo Robotic" class="logo mx-3">
        </div>
        <h2 class="title">IRDO</h2>
        <h3 class="subtitle">International Robot Design Olympiad</h3>
        <h3 class="university">Universitas Bandar Lampung</h3>
      </div>
    </div>
  </div>

  <div class="container-xxl">
    <div class="container text-center bg-body-secondary pb-3">
      <!-- <h4 class="pt-4">Cabang Perlombaan</h4> -->
      <div class="row pt-3 d-flex justify-content-center">
        <div class="col-md-4 d-flex justify-content-center align-items-center my-3">
          <div class="card" style="width: 20rem;">
            <img src="img/a.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Cabang Perlombaan</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center my-3">
          <div class="card" style="width: 20rem;">
            <img src="img/a.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Cabang Perlombaan</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    require 'config/database.php'; // Sesuaikan dengan koneksi database
    
    // Ambil semua berita
    $query = "SELECT Headline, Penulis, timeStamp,slug,foto FROM berita ORDER BY timeStamp DESC LIMIT 3";
    $result = $conn->query($query);

    // Jika tidak ada berita, tampilkan pesan
    if ($result->num_rows == 0) {
      echo "<h2>Tidak ada berita yang tersedia!</h2>";
      exit;
    }
    ?>

    <div class="container text-center bg-body-tertiary pb-3">
      <h5 class="pt-4" style="font-weight: bold; font-size: 18px; color: #81CCE3;">Berita</h5>
      <h4 class="pt-1">Berita Terbaru</h4>
      <div class="row pt-3 d-flex justify-content-center" style="min-height: 450px;">
      <?php while ($berita = $result->fetch_assoc()): ?>
        <div class="col-md-4 d-flex justify-content-center align-items-center my-3">
          <div class="card" style="width: 20rem;">
            <img src="img/<?= htmlspecialchars($berita['foto']) ?>" class="card-img-top" alt="Gambar Berita">
            <div class="card-body">
              <p class="d-inline-flex align-items-center">
                <i class="bi bi-person text-primary me-2"></i>
                <?= htmlspecialchars($berita['Penulis']) ?>
                <i class="bi bi-calendar4-week text-primary me-2 ps-3"></i>
                <?= date('d F Y', strtotime($berita['timeStamp'])) ?>
              </p>
              <p class="card-text text-start fw-bold"><?= htmlspecialchars($berita['Headline']) ?></p>
              <a href="id/detailBerita/<?= htmlspecialchars($berita['slug']) ?>" class="btn text-white"
                style="background-color: #283371;">Read More</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      </div>
      <a href="id/berita" class="btn py-2 text-white my-3" style="background-color: #F2713A ">Lihat Lebih Banyak</a>
    </div>


    <?php
    require 'config/database.php'; // Sesuaikan dengan koneksi database
    
    // Ambil semua berita
    $query = "SELECT * FROM pengumuman ORDER BY timeStamp DESC LIMIT 3";
    $result = $conn->query($query);

    // Jika tidak ada berita, tampilkan pesan
    if ($result->num_rows == 0) {
      echo "<h2>Tidak ada pengumuman yang tersedia!</h2>";
      exit;
    }
    ?>
    <div class="container text-center bg-body pb-3">
      <h5 class="pt-4" style="font-weight: bold; font-size: 18px; color: #81CCE3;">Pengumuman</h5>
      <h4 class="pt-1">Pengumuman Terbaru</h4>
      <div class="row pt-3 d-flex justify-content-center">
        <?php while ($pengumuman = $result->fetch_assoc()): ?>
          <div class="col-md-4 d-flex justify-content-center align-items-center my-3">
          <div class="card" style="width: 20rem;">
            <div class="card-body text-start">
              <p class="d-inline-flex align-items-center ">
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
      <a href="id/pengumuman" class="btn py-2 text-white my-3" style="background-color: #F2713A ">Lihat Lebih Banyak</a>
    </div>


    <?php
    require 'config/database.php'; // Sesuaikan dengan koneksi database
    
    // Ambil semua berita
    $query = "SELECT * FROM unduhan ORDER BY id DESC LIMIT 3";
    $result = $conn->query($query);

    // Jika tidak ada berita, tampilkan pesan
    if ($result->num_rows == 0) {
      echo "<h2>Tidak ada unduhan yang tersedia!</h2>";
      exit;
    }
    ?>

    <div class="container text-center bg-body-tertiary pb-3">
      <h5 class="pt-4" style="font-weight: bold; font-size: 18px; color: #81CCE3;">Unduhan</h5>
      <h4 class="pt-1">Unduhan Terbaru</h4>
      <div class="row pt-3 d-flex justify-content-center">

      <?php while ($unduhan = $result->fetch_assoc()): ?>
        <div class="col-md-4 d-flex justify-content-center align-items-center my-3">
          <div class="card" style="width: 20rem;">
            <div class="card-body">
              <h2 class="d-inline-flex align-items-center border-bottom">
              <?= htmlspecialchars($unduhan['jenisFile']) ?>
              </h2>
              <p class="card-text my-5 fw-semibold"><?= htmlspecialchars($unduhan['judul']) ?></p>
              <a href="unduhan/<?= htmlspecialchars($unduhan['namaFile']) ?>" class="btn text-white px-3 py-2" style="background-color: #F35D42"
                download>Unduh</a>
            </div>
          </div>
          <?php endwhile; ?>

        </div>
      </div>
      <a href="id/unduhan" class="btn py-2 text-white my-3" style="background-color: #F2713A ">Lihat Lebih Banyak</a>
    </div>

    <?php
    include 'config/database.php';

    // Query untuk mengambil 3 data terakhir dari tabel galeri
    $sql = "SELECT namaFile FROM galeri ORDER BY id DESC LIMIT 3";
    $result = $conn->query($sql);
    ?>

    <div class="container text-center bg-body pb-3">
      <h5 class="pt-4" style="font-weight: bold; font-size: 18px; color: #81CCE3;">Galeri</h5>
      <h4 class="pt-1">Galeri INRO 2023</h4>
      <div class="row pt-3 d-flex justify-content-center">
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $imagePath = "img/galeri/" . $row["namaFile"] . ".JPG";
            echo '<div class="col-md-4 d-flex justify-content-center align-items-center my-3 card12">
                        <img src="' . $imagePath . '" class="card-img-top" alt="Gambar Galeri">
                      </div>';
          }
        } else {
          echo "<p>Belum ada gambar di galeri.</p>";
        }
        ?>
      </div>
      <a href="id/galeri" class="btn py-2 text-white my-3" style="background-color: #F2713A">Lihat Lebih Banyak</a>
    </div>


    <?php
    include 'komponen/footer.php';
    ?>


</body>

</html>