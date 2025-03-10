<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IRDO</title>
  <!-- Tambahkan SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
  <?php
  $activePage = 'registrasi';
  include 'komponen/navbar.php';
  ?>

  

  <?php
  session_start();
  $_SESSION["csrf_token"] = bin2hex(random_bytes(32));
  ?>
  <div class="container bg-body pb-3" style="padding-top: 120px;">
    <div class="container bg-light p-5 m-4 rounded shadow">
      <h1 class="text-center mb-4">Form Registrasi IRDO</h1>
      <form action="config/prosesRegistrasi" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="csrf_token" value="<?= $_SESSION["csrf_token"] ?>">
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
            <input type="number" class="form-control" id="nomor_hp" name="nomor_hp" required>
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
          <label for="bukti_pembayaran" class="form-label"><i class="bi bi-credit-card"></i> Bukti Pembayaran
            (Gambar)</label>
          <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran" accept="image/*"
            required>
        </div>

        <button type="submit" class="btn w-100" style="background-color :  #81cce3 !important;"><i
            class="bi bi-send"></i> Kirim Registrasi</button>
      </form>
    </div>
  </div>

  </div>



  <?php
  include 'komponen/footer.php';
  ?>

</body>

</html>