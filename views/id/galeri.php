<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IRDO</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <style>
     body {
      font-family: 'Poppins', sans-serif;
    }

    h4{
      font-size: 30px;
      font-weight: bold;
      color: #283371;
    }
    .navbar {
      background-color: #283371;
    }
    .navbar-brand, .nav-link, .dropdown-toggle {
      color: white !important;
    }
    .nav-item{
      font-size: 20px !important;
    }
    .dropdown-menu {
      background-color: #283371;
    }
    .dropdown-item {
      color: white !important;
    }
    .dropdown-item:hover {
      background-color: #F35D42;
    }
    .card, .card12 {
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
      transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out;
    }
    .card:hover, .card12:hover {
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.3);
      transform: translateY(-5px);
    }
    .footer {
      background-color: #161743;
      color: white;
      padding-top: 30px;
    }
    .footer a {
      color: white;
      text-decoration: none;
    }
    .footer a:hover {
      text-decoration: underline;
    }
    .footer-logo {
      max-height: 100px;
    }
    .footer-icons a {
      margin-right: 10px;
      font-size: 30px;
    }
    .footer-bottom {
      background-color: #0a0a0a;
      padding: 10px 0;
      text-align: center;
      font-size: 14px;
      margin-top: 20px;
    }
    .back-to-top {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #F35D42;
      color: white;
      padding: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .logo {
    max-width: 120px; /* Ukuran logo lebih seragam */
    height: auto;
  }

  .title {
    color: #1E3A8A; /* Biru dari palet warna */
    font-weight: 700;
    text-transform: uppercase;
  }

  .subtitle {
    font-size: 1.5rem;
    font-weight: 500;
    color: #333;
  }

  .university {
    font-size: 1.3rem;
    font-weight: 600;
    color: #F59E0B; /* Warna kuning/oranye */
  }

  .logo:hover {
    transform: scale(1.05);
    transition: 0.3s ease-in-out;
  }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-primary bg-gradient" data-bs-theme="dark">
    <div class="container-xxl" >
      <a class="navbar-brand" href="mainPage.php">IRDO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="mainPage.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tentang.php">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="unduhan.php">Unduhan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registrasi.php">Registrasi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php
include '../../config/database.php';

// Query untuk mengambil 3 data terakhir dari tabel galeri
$sql = "SELECT namaFile FROM galeri ORDER BY id DESC";
$result = $conn->query($sql);
?>

<div class="container text-center bg-body pb-3">
    <h5 class="pt-4" style="font-weight: bold; font-size: 18px; color: #81CCE3;">Galeri</h5>
    <h4 class="pt-1">Galeri INRO 2023</h4>
    <div class="row pt-3 d-flex justify-content-center">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $imagePath = "../../img/galeri/" . $row["namaFile"] . ".JPG";
                echo '<div class="col-md-3 d-flex justify-content-center align-items-center my-3 mx-1 card12">
                        <img src="' . $imagePath . '" class="card-img-top" alt="Gambar Galeri">
                      </div>';
            }
        } else {
            echo "<p>Belum ada gambar di galeri.</p>";
        }
        ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Left Column (Logo & Social Media) -->
            <div class="col-md-4 text-center text-md-start">
                <img src="../../img/ubl.png" alt="Logo" class="footer-logo mb-3 pe-4">
                <img src="../../img/robotic.JPG" alt="Logo" class="footer-logo mb-3 ps-4">
                <p>Situs ini dibawah naungan dari UKM Robotic Universitas Bandar Lampung</p>
                <div class="footer-icons">
                    <a href="#"><i class="bi bi-instagram"></i></a>
                </div>
            </div>

            <!-- Middle Column (Contact Info) -->
            <div class="col-md-4">
                <h5>Kontak Umum</h5>
                <p>Alamat: Jl. ZA. Pagar Alam No.26, Labuhan Ratu, Kec. Kedaton, Kota Bandar Lampung, Lampung 35142</p>
                <p>Telepon: +62 88291237471</p>
                <p>Email: inro1@gmail.com</p>
                <p>Fax: -</p>
            </div>

            <!-- Right Column (Quick Links) -->
            <div class="col-md-4 text-center text-md-start">
                <h5>Link</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Universitas Bandar Lampung</a></li>
                    <li><a href="#">UKM Robotic</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Bottom Section -->
    <div class="footer-bottom">
    Unit Kegiatan mahasiswa Robotic - Universitas Bandar Lampung
    </div>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>
    
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>

</html>
