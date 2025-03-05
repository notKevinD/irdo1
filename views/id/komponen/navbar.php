<nav class="navbar navbar-expand-lg fixed-top shadow z-index-1030 py-3" data-bs-theme="dark" style="opacity: 99%;">
    <div class="container-xxl">
        <a class="navbar-brand ms-3" href="mainPage.php">IRDO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="mainPage.php" <?= ($activePage == 'home') ? 'style="color: #81CCE3 !important"' : '' ?>>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="tentang.php"  <?= ($activePage == 'tentang') ? 'style="color: #81CCE3 !important"' : '' ?>>Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="unduhan.php"  <?= ($activePage == 'unduhan') ? 'style="color: #81CCE3 !important"' : '' ?>>Unduhan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registrasi.php" <?= ($activePage == 'registrasi') ? 'style="color: #81CCE3 !important"' : '' ?> >Registrasi</a>
                </li>
            </ul>
        </div>
        <div class="dropdown">
            <a class="btn btn-danger dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Indonesia</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Indonesia</a></li>
                <li><a class="dropdown-item" href="#">English</a></li>
            </ul>
        </div>
    </div>
</nav>
