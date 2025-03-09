<nav class="navbar navbar-expand-lg fixed-top shadow z-index-1030 py-3" data-bs-theme="dark" style="opacity: 99%;">
    <div class="container-xxl">
        <a class="navbar-brand ms-3" href="id/main">IRDO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item px-2">
                    <a class="nav-link" href="id/main" <?= ($activePage == 'home') ? 'style="color: #81CCE3 !important"' : '' ?>>Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" <?= ($activePage == 'update') ? 'style="color: #81CCE3 !important"' : '' ?>>
                        Update
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="id/berita">Berita</a></li>
                        <li><a class="dropdown-item" href="id/pengumuman">Pengumuman</a></li>
                    </ul>
                    </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="id/tentang" <?= ($activePage == 'tentang') ? 'style="color: #81CCE3 !important"' : '' ?>>Tentang</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="id/unduhan" <?= ($activePage == 'unduhan') ? 'style="color: #81CCE3 !important"' : '' ?>>Unduhan</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="id/registrasi" <?= ($activePage == 'registrasi') ? 'style="color: #81CCE3 !important"' : '' ?>>Registrasi</a>
                </li>
            </ul>
            
            <!-- Dropdown Bahasa di Pojok Kanan -->
            <div class="dropdown ms-auto">
                <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Indonesia
                </button>
                <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="<?php 
                        echo str_replace('/id/', '/en/', $_SERVER['REQUEST_URI']); 
                    ?>">English</a>
                </li>


                </ul>
            </div>
        </div>
    </div>
</nav>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <base href="http://localhost/irdo1/">
  <link rel="stylesheet" href="style/main.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">