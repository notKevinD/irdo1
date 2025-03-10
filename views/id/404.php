<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IRDO</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <link rel="stylesheet" href="../../style/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  
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

<div class="container text-center bg-body pb-3" style="padding-top: 200px; min-height: 80vh;">
     <h1>Halaman Tidak Ditemukan</h1>

      
    </div>


<?php include 'komponen/footer.php'; ?>


</body>
</html>
