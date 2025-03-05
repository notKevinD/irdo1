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


  <?php
include '../../config/database.php';

// Query untuk mengambil 3 data terakhir dari tabel galeri
$sql = "SELECT namaFile FROM galeri ORDER BY id DESC";
$result = $conn->query($sql);
?>

<div class="container text-center bg-body pb-3" style="padding-top: 120px;">
    <h5 class="pt-4" style="font-weight: bold; font-size: 18px; color: #81CCE3;">Galeri</h5>
    <h4 class="pt-1">Galeri INRO 2023</h4>
    <div class="row pt-3 d-flex justify-content-center">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $imagePath = "../../img/galeri/" . $row["namaFile"] . ".JPG";
                echo '<div class="col-md-4 d-flex justify-content-center align-items-center my-3 card12">
                        <img src="' . $imagePath . '" class="card-img-top img-fluid" alt="Gambar Galeri">
                      </div>';
            }
        } else {
            echo "<p>Belum ada gambar di galeri.</p>";
        }
        ?>
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
