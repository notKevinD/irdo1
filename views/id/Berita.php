<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IRDO</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <link rel="stylesheet" href="../../style/main.css">
</head>

<body>
<?php 
  $activePage = 'home'; 
  include 'komponen/navbar.php'; 
  ?>


  <div class="container bg-body pb-3" style="padding-top: 120px;">
    <div class="container bg-body p-3">
      <h1 class="pt-1 text-center pb-5">Berita</h1>
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


<?php 
  include 'komponen/footer.php'; 
  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>

</html>
