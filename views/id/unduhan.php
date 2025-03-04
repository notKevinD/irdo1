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

  

    <div class="container text-center bg-body-tertiary pb-3" style="min-height: 800px;">
      <h4 class="pt-4">Unduhan</h4>
      <div class="row pt-3 d-flex justify-content-center">
        <div class="col-md-4 d-flex justify-content-center align-items-center my-3">
          <div class="card" style="width: 20rem;">
            <div class="card-body">
              <h2 class="d-inline-flex align-items-center border-bottom">
                PDF
              </h2>
              <p class="card-text my-5 fw-semibold">Petunjuk Teknis Lomba IRDO</p>
              <a href="#" class="btn btn-danger opacity-75 btn-opacity-25 text-white px-3 py-2">unduh</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 d-flex justify-content-center align-items-center my-3">
          <div class="card" style="width: 20rem;">
            <div class="card-body">
              <h2 class="d-inline-flex align-items-center border-bottom">
                PDF
              </h2>
              <p class="card-text my-5 fw-semibold">Petunjuk Teknis Lomba IRDO</p>
              <a href="#" class="btn btn-danger opacity-75 btn-opacity-25 text-white px-3 py-2">unduh</a>
            </div>
          </div>
        </div>
      </div>

      
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>

</html>
