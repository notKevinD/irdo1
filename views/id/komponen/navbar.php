<nav class="navbar navbar-expand-lg fixed-top shadow z-index-1030 py-3" data-bs-theme="dark" style="opacity: 99%;">
    <div class="container-xxl">
        <a class="navbar-brand ms-3" href="mainPage.php">IRDO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= ($activePage == 'home') ? 'active' : '' ?>" href="mainPage.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($activePage == 'tentang') ? 'active' : '' ?>" href="tentang.php">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($activePage == 'unduhan') ? 'active' : '' ?>" href="unduhan.php">Unduhan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($activePage == 'registrasi') ? 'active' : '' ?>" href="registrasi.php">Registrasi</a>
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
