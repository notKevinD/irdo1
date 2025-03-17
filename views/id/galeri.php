<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Galeri</title>

    <link rel="icon" type="image/png" href="img/logo.png">

  <style>
    .gallery-item {
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }

    .gallery-item img {
        transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.1);
    }

    .view-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        opacity: 0;
        transition: opacity 0.3s ease;
        background-color: rgba(0, 0, 0, 0.6);
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        border: none;
    }

    .gallery-item:hover .view-btn {
        opacity: 1;
    }

    .modal-content {
        background-color: transparent;
        border: none;
    }

    .modal-body {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .modal-body img {
        min-width: 90%;
        /* min-height: 80%; */
        max-width: 100%;
        max-height: 100vh;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
    }

    /* Tombol Kiri & Kanan (Lebih Estetik) */
    .nav-btn {
        position: absolute;
        /* top: 50%; */
        background: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        transition: background 0.3s ease, transform 0.2s ease;
    }

    .nav-btn:hover {
        background: rgba(255, 255, 255, 0.7);
        color: black;
        transform: scale(1.1);
    }

    .prev-btn {
        left: -50px;
    }

    .next-btn {
        right: -50px;
    }
  </style>
</head>

<body>
<?php 
  $activePage = 'home'; 
  include 'komponen/navbar.php'; 
?>

<?php
include 'config/database.php';

// Query untuk mengambil gambar dari tabel galeri
$sql = "SELECT namaFile FROM galeri ORDER BY id DESC";
$result = $conn->query($sql);
?>

<div class="container text-center bg-body pb-3" style="padding-top: 120px;">
    <h1 class="pt-1">Galeri IRDO 2023</h1>
    <div class="row pt-3 d-flex justify-content-center">
        <?php
        $imageArray = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $imagePath = "img/galeri/" . $row["namaFile"] . ".JPG";
                $imageArray[] = $imagePath;
                echo '<div class="col-md-4 d-flex justify-content-center align-items-center my-3">
                        <div class="gallery-item">
                            <img src="' . $imagePath . '" class="card-img-top img-fluid" alt="Gambar Galeri" onclick="openModal(' . (count($imageArray) - 1) . ')">
                            <button class="view-btn" onclick="openModal(' . (count($imageArray) - 1) . ')">Lihat</button>
                        </div>
                      </div>';
            }
        } else {
            echo "<p>Belum ada gambar di galeri.</p>";
        }
        ?>
    </div>
</div>

<!-- Modal (Lightbox) -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button class="nav-btn prev-btn" onclick="prevImage()"><i class="bi bi-chevron-left"></i></button>
                <img id="lightboxImage" class="img-fluid">
                <button class="nav-btn next-btn" onclick="nextImage()"><i class="bi bi-chevron-right"></i></button>
            </div>
        </div>
    </div>
</div>

<?php include 'komponen/footer.php'; ?>


<script>
    let images = <?php echo json_encode($imageArray); ?>;
    let currentIndex = 0;

    function openModal(index) {
        currentIndex = index;
        document.getElementById("lightboxImage").src = images[currentIndex];
        let modal = new bootstrap.Modal(document.getElementById("galleryModal"));
        modal.show();
    }

    function prevImage() {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;
        document.getElementById("lightboxImage").src = images[currentIndex];
    }

    function nextImage() {
        currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
        document.getElementById("lightboxImage").src = images[currentIndex];
    }
</script>

</body>
</html>
