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