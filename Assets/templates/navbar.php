<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark ps-3">
        <!-- Sidebar Toggle-->
        
        <a class="navbar-brand me-1" href="./">
            <img src="Assets/img/logosmkn2.png" alt="" class="img img-responsive shadow me-2" width="40">
            e-Sarpras
        </a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Brand-->
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                
                <!-- <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a> -->
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav> 
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark shadow sidebar" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link mt-3" href="./">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt text-success"></i></div>
                                Dashboard
                            </a>

                            <div class="sb-sidenav-menu-heading">Menu Utama</div>

                            <!-- sarpras menu for admin and super -->
                            <a class="nav-link collapsed <?= eclGuest; ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBarang" aria-expanded="false" aria-controls="collapseBarang">
                                <div class="sb-nav-link-icon"><i class="fas fa-boxes text-success"></i></div>
                                Sarpras
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseBarang" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?page=DaftarBarang">Daftar Sarpras</a>
                                    <a class="nav-link <?= eclGuest; ?>" href="index.php?page=TambahBarang">Tambah Sarpras</a>
                                </nav>
                            </div>

                            <!-- sarpras menu for guest -->
                            <a class="nav-link <?= eclSuper; ?> <?= eclAdmin; ?>" href="index.php?page=DaftarBarang">
                                <div class="sb-nav-link-icon"><i class="fas fa-boxes text-success"></i></div>
                                Sarpras
                            </a>

                            <!-- buku menu for admin and super -->
                            <a class="nav-link collapsed <?= eclGuest; ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBuku" aria-expanded="false" aria-controls="collapseBuku">
                                <div class="sb-nav-link-icon"><i class="fas fa-book text-success"></i></div>
                                Buku
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseBuku" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?page=DaftarBuku">Daftar Buku</a>
                                    <a class="nav-link" href="index.php?page=TambahBuku">Tambah Buku</a>
                                </nav>
                            </div>

                            <!-- buku menu for guest -->
                            <a class="nav-link <?= eclSuper; ?> <?= eclAdmin; ?>" href="index.php?page=DaftarBuku">
                                <div class="sb-nav-link-icon"><i class="fas fa-book text-success"></i></div>
                                Buku
                            </a>

                            <a class="nav-link collapsed <?= eclAdmin; ?> <?= eclGuest; ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUser" aria-expanded="false" aria-controls="collapseUser">
                                <div class="sb-nav-link-icon"><i class="bi bi-person-lines-fill text-success"></i></div>
                                Manajemen User
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseUser" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?= eclAdmin; ?>" href="index.php?page=Userlist">Daftar User</a>
                                    <a class="nav-link <?= eclAdmin; ?>" href="index.php?page=adduser">Tambah User</a>
                                </nav>
                            </div>

                            <a class="nav-link" href="index.php?page=addroom">
                                <div class="sb-nav-link-icon"><i class="bi bi-house-fill text-success"></i></div>
                                Ruangan
                            </a>

                            <div class="sb-sidenav-menu-heading">Pengaturan</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAkun" aria-expanded="false" aria-controls="collapseAkun">
                                <div class="sb-nav-link-icon"><i class="bi bi-person-circle text-primary"></i></div>
                                Akun
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseAkun" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?page=Profile">Profile</a>
                                    <a class="nav-link" href="Authentication/logout.php">Logout</a>
                                </nav>
                            </div>
                            <a class="nav-link <?= eclAdmin; ?> <?= eclGuest; ?>" href="index.php?page=DaftarPemberitahuan">
                                <div class="sb-nav-link-icon"><i class="bi bi-megaphone-fill text-primary"></i></div>
                                Pemberitahuan
                            </a>
                            <a class="nav-link <?= eclAdmin; ?> <?= eclGuest; ?>" href="index.php?page=LoginLog">
                                <div class="sb-nav-link-icon"><i class="bi bi-clock-fill text-primary"></i></div>
                                Riwayat Login
                            </a>

                            <a class="nav-link <?= eclAdmin; ?> <?= eclGuest; ?>" href="index.php?page=PengaturanPDF">
                                <div class="sb-nav-link-icon"><i class="bi bi-gear-fill text-primary"></i></div>
                                Pengaturan PDF
                            </a>

                            <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div> -->
                            
                        </div>

                    </div>
            </nav>
        </div>
