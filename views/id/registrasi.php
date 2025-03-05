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
  $activePage = 'registrasi'; 
  include 'komponen/navbar.php'; 
  ?>


  <div class="container bg-body pb-3" style="padding-top: 55px;">
    <div class="container bg-light p-5 mt-4 rounded shadow">
      <h1 class="text-center mb-4">Form Registrasi IRDO</h1>
      <form action="../config/proses_registrasi.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="nama_tim" class="form-label"><i class="bi bi-people"></i> Nama Tim</label>
          <input type="text" class="form-control" id="nama_tim" name="nama_tim" required>
        </div>
        <div class="mb-3">
          <label for="asal_sekolah" class="form-label"><i class="bi bi-building"></i> Asal Sekolah</label>
          <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" required>
        </div>
  
        <!-- Nama Anggota 1, 2, 3 dalam satu row -->
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="anggota1" class="form-label"><i class="bi bi-person"></i> Nama Anggota 1</label>
            <input type="text" class="form-control" id="anggota1" name="anggota1" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="anggota2" class="form-label"><i class="bi bi-person"></i> Nama Anggota 2</label>
            <input type="text" class="form-control" id="anggota2" name="anggota2">
          </div>
          <div class="col-md-4 mb-3">
            <label for="anggota3" class="form-label"><i class="bi bi-person"></i> Nama Anggota 3</label>
            <input type="text" class="form-control" id="anggota3" name="anggota3">
          </div>
        </div>
  
        <!-- Nama Pembimbing & Nomor HP dalam satu row -->
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="pembimbing" class="form-label"><i class="bi bi-person-badge"></i> Nama Pembimbing</label>
            <input type="text" class="form-control" id="pembimbing" name="pembimbing" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="nomor_hp" class="form-label"><i class="bi bi-telephone"></i> Nomor Handphone</label>
            <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" required>
          </div>
        </div>
  
        <div class="mb-3">
          <label for="email" class="form-label"><i class="bi bi-envelope"></i> Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
  
        <div class="mb-3">
          <label for="kategori" class="form-label"><i class="bi bi-trophy"></i> Kategori Lomba</label>
          <select class="form-select" id="kategori" name="kategori" required>
            <option selected disabled>Pilih Kategori</option>
            <option value="3on3soccer">3 on 3 Soccer</option>
            <option value="robotcreative">Robot Creative</option>
            <option value="capstoneproject">Capstone Project</option>
          </select>
        </div>
  
        <div class="mb-3">
          <label for="bukti_pembayaran" class="form-label"><i class="bi bi-credit-card"></i> Bukti Pembayaran (Gambar)</label>
          <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran" accept="image/*" required>
        </div>
  
        <button type="submit" class="btn w-100" style="background-color :  #81cce3 !important;"><i class="bi bi-send"></i> Kirim Registrasi</button>
      </form>
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




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>
</body>

</html>