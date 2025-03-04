<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IRDO</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <style>
    .card {
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
      transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out;
    }

    .card:hover {
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.3);
      transform: translateY(-5px);
    }

    .card12 {
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
      transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out;
    }

    .card12:hover {
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.3);
      transform: translateY(-5px);
    }

    .footer {
            background-color: #111;
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
            max-height: 120px;
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
            background-color: salmon;
            color: white;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-primary bg-gradient" data-bs-theme="dark">
    <div class="container-xxl">
      <a class="navbar-brand ms-3" href="mainPage.php">IRDO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="mainPage.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="tentang.php">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="unduhan.php">Unduhan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registrasi.php">Registrasi</a>
          </li>
        </ul>
      </div>
      <div class="dropdown">
        <a class="btn btn-success dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Indonesia
        </a>

        <ul class="dropdown-menu">
          <li><a class="dropdown-item bg-primary" href="#">Indonesia</a></li>
          <li><a class="dropdown-item" href="#">English</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class=" bg-body-secondary">
    <div class="container bg-body p-3">
        <h1 class="text-center pb-5">Detail Berita</h1>
        <div class="row">
            <!-- Bagian Kiri: Isi Berita -->
            <div class="col-md-9">
              <h2 class="ms-3">KRI 2024 Resmi ditutup, Gelaran Bergengsi Telah Berjalan Lancar dan Tertib</h2>
              <p class="d-inline-flex align-items-center ms-3 fs-5">
                <i class="bi bi-person text-primary me-2"></i>
                admin
                <i class="bi bi-calendar4-week text-primary me-2 ps-3"></i>
                02 september 2022
              </p>
                <img src="../../img/ubl.png" alt="Logo" class="img-fluid w-100 p-5">
                <p style="text-align: justify;">
                    Kontes Robot Indonesia (KRI) adalah kegiatan kompetisi tahunan mahasiswa dalam bidang rancang bangun dan rekayasa robotika yang dapat diikuti oleh seluruh mahasiswa pada perguruan tinggi di wilayah Republik Indonesia, dari berbagai K/L atau kedinasan, yang tercatat pada Pangkalan Data Pendidikan Tinggi. KRI 2024 diselenggarakan oleh Balai Pengembangan Talenta Indonesia (BPTI) Pusat Prestasi Nasional (Puspresnas) Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi (Kemendikbudristek) Republik Indonesia. KRI pertama kali diselenggarakan pada tahun 2003 di bawah Direktorat Jenderal Pendidikan Tinggi, Departemen Pendidikan dan Kebudayaan pada saat itu.
                </p>

                <p style="text-align: justify;">
                    Kontes Robot Indonesia tahun 2024 mempertandingkan 7 (tujuh) divisi sebagai berikut:
                </p>
                <ol>
                    <li>Kontes Robot ABU Indonesia (KRAI);</li>
                    <li>Kontes Robot SAR Indonesia (KRSRI);</li>
                    <li>Kontes Robot Sepak Bola Indonesia (KRSBI) Beroda;</li>
                    <li>Kontes Robot Sepak Bola Indonesia (KRSBI) Humanoid;</li>
                    <li>Kontes Robot Seni Tari Indonesia (KRSTI);</li>
                    <li>Kontes Robot Tematik Indonesia (KRTMI);</li>
                    <li>Kontes Robot Bawah Air Indonesia (KRBAI).</li>
                </ol>

                <p style="text-align: justify;">
                    Kegiatan KRI Tahun 2024 diselenggarakan secara bertahap, yaitu Kontes Tingkat Wilayah dan Kontes Tingkat Nasional. KRI Tingkat Wilayah diselenggarakan secara daring (online), yang terbagi dalam 2 (dua) wilayah. KRI Wilayah I diikuti oleh peserta dari Indonesia bagian Barat dan KRI Wilayah II diikuti oleh peserta dari Indonesia bagian Timur. Sejumlah tim terbaik pada KRI Tingkat Wilayah akan diundang untuk ikut serta pada Kontes Robot Indonesia Tingkat Nasional. KRI 2024 Tingkat Nasional diselenggarakan secara luring (offline), dimana tim peserta mempertandingkan robotnya secara langsung pada lapangan pertandingan di Universitas Muhammadiyah Surakarta.
                </p>
            </div>

            <!-- Bagian Kanan: Berita Lainnya -->
            <div class="col-md-3">
                <h4 class="fw-bold">Berita Lainnya</h4>
                <ul class="list-unstyled pt-5 border-top border-black">
                    <li class="d-flex mb-3">
                        <img src="../../img/robotic.jpg" alt="Berita 1" class="img-fluid me-2" style="width: 80px; height: 50px;">
                        <div>
                            <a href="#" class="text-dark fw-bold">KRI 2024 Resmi Ditutup, Gelaran Bergengsi Telah Berjalan Lancar dan Tertib</a>
                            <p class="text-muted small">Sabtu, 6 Juli 2024</p>
                        </div>
                    </li>
                    <li class="d-flex mb-3">
                        <img src="../../img/robotic.jpg" alt="Berita 2" class="img-fluid me-2" style="width: 80px; height: 50px;">
                        <div>
                            <a href="#" class="text-dark fw-bold">Kontes Robot Indonesia 2024 di UMS Tampilkan Sajian Terbaik</a>
                            <p class="text-muted small">Sabtu, 6 Juli 2024</p>
                        </div>
                    </li>
                    <li class="d-flex mb-3">
                        <img src="../../img/robotic.jpg" alt="Berita 3" class="img-fluid me-2" style="width: 80px; height: 50px;">
                        <div>
                            <a href="#" class="text-dark fw-bold">Kali Keenam, ITS Boyong Juara Umum KRI Tingkat Nasional Tahun 2024 di UMS</a>
                            <p class="text-muted small">Sabtu, 6 Juli 2024</p>
                        </div>
                    </li>
                    <li class="d-flex">
                        <img src="../../img/robotic.jpg" alt="Berita 4" class="img-fluid me-2" style="width: 80px; height: 50px;">
                        <div>
                            <a href="#" class="text-dark fw-bold">KRI 2024 di UMS, Maestro Evo UNY Berhak Wakili Indonesia ke Abu Robocon Vietnam</a>
                            <p class="text-muted small">Jumat, 5 Juli 2024</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
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
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
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
