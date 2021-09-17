<<<<<<< HEAD
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark ps-3">
        <!-- Sidebar Toggle-->
        
        <a class="navbar-brand ps-3 me-1" href="./">
            <img src="Assets/img/logosmkn2.png" alt="" class="img img-responsive shadow me-2" width="40">
            e-Sarpras
        </a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
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
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="./">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <div class="sb-sidenav-menu-heading">Menu Utama</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBarang" aria-expanded="false" aria-controls="collapseBarang">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Menu Barang
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseBarang" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?page=DaftarBarang">Daftar Barang</a>
                                    <a class="nav-link" href="index.php?page=TambahBarang">Tambah Barang</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBuku" aria-expanded="false" aria-controls="collapseBuku">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Menu Buku
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseBuku" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?page=DaftarBuku">Daftar Buku</a>
                                    <a class="nav-link" href="index.php?page=TambahBuku">Tambah Buku</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="bi bi-house-fill"></i></div>
                                Menu Ruang
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?page=addroom">Manajemen Ruang</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Pengaturan</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUser" aria-expanded="false" aria-controls="collapseUser">
                                <div class="sb-nav-link-icon"><i class="bi bi-person-circle"></i></div>
                                Akun
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseUser" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?page=Profile">Profile</a>
                                    <a class="nav-link" href="index.php?page=Userlist">Daftar User</a>
                                    <a class="nav-link" href="index.php?page=adduser">Tambah User</a>
                                    <a class="nav-link" href="Authentication/logout.php">Logout</a>
                                </nav>
                            </div>

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
=======
<div class="d-flex" id="wrapper">
            <!-- Sidebar Section -->
            <div class="bg-dark text-white" id="sidebar-wrapper">
                <a href="index.php">
                    <div class="sidebar-heading">
                        <img src="Assets/img/logosmkn2.png" alt="" width="50" class="">
                    </div>
                </a>
                <a href="index.php" style="color: white; text-decoration: none;">
                    <div class="sidebar-heading">Inventory Management</div>
                </a>
                <div class="list-group" id="listgroupnav">

                    <a class="nav-link nav-link-drop collapsed text-white pt-3" href="#" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                        Menu Barang
                        <div class="float-end">
                            <i class="bi bi-chevron-down"></i>
                        </div>
                    </a>
                    <div class="collapse ms-4" id="collapse1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <a class="nav-link text-white" href="index.php?page=DaftarBarang">Daftar Barang</a>
                        <a class="nav-link text-white" href="index.php?page=TambahBarang">Tambah Barang</a>
                    </div>

                    <a class="nav-link nav-link-drop collapsed text-white pt-3" href="#" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Menu Buku
                        <div class="float-end">
                            <i class="bi bi-chevron-down"></i>
                        </div>
                    </a>
                    <div class="collapse ms-4" id="collapse2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <a class="nav-link text-white" href="index.php?page=DaftarBuku">Daftar Buku</a>
                        <a class="nav-link text-white" href="index.php?page=TambahBuku">Tambah Buku</a>
                    </div>

                    <a class="nav-link nav-link-drop collapsed text-white pt-3" href="#" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        <i class="bi bi-person-circle"></i>
                        <span class="ms-2">Akun</span>
                        <div class="float-end">
                            <i class="bi bi-chevron-down"></i>
                        </div>
                    </a>
                    <div class="collapse ms-4" id="collapse3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <a class="nav-link text-white" href="index.php?page=UserDetail">
                            Profile
                        </a>
                        <a class="nav-link text-white" href="index.php?page=Userlist">
                            Daftar User
                        </a>
                        <a class="nav-link text-white" href="index.php?page=adduser">
                            Tambah User
                        </a>
                        <a class="nav-link text-white" href="Authentication/logout.php">Logout</a>
                    </div>

                    <!--Ruang section-->

                        <a class="nav-link nav-link-drop collapsed text-white pt-3" href="#" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                            <i class="bi bi-house-fill"></i>
                            Menu Ruang
                            <div class="float-end">
                                <i class="bi bi-chevron-down"></i>
                            </div>
                        </a>
                        <div class="collapse ms-4" id="collapse1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <a class="nav-link text-white" href="index.php?page=addroom">ManajemenRuang</a>
                            
                        </div>


                    
                   
                  
                    
                    

                </div>
            </div>
            <!-- Sidebar Section -->


            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <!-- Button Toggler Section -->
                <nav class="navbar navbar-dark bg-dark text-white border-bottom">
                    <div class="container-fluid ">
                        <button class="navbar-toggler" id="sidebarToggle"><span class="navbar-toggler-icon"></span></button>
                    </div>
                </nav>
                <!-- Button Toggler End -->
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a
