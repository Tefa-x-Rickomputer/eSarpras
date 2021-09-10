<div class="d-flex" id="wrapper">
            <!-- Sidebar Section -->
            <div class="bg-dark text-white" id="sidebar-wrapper">
                <div class="sidebar-heading">Inventory Barang</div>
                <div class="list-group" id="listgroupnav">

                    <a class="nav-link collapsed text-white p-3" href="#" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                        Barang
                    </a>
                    <div class="collapse ms-4" id="collapse1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link text-white" href="index.php?page=DaftarBarang">Daftar Barang</a>
                            <a class="nav-link text-white" href="index.php?page=TambahBarang">Tambah Barang</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed text-white p-3" href="#" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Buku
                    </a>
                    <div class="collapse ms-4" id="collapse2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link text-white" href="index.php?page=DaftarBuku">Daftar Buku</a>
                            <a class="nav-link text-white" href="index.php?page=TambahBuku">Tambah Buku</a>
                        </nav>
                    </div>

                </div>
                <div class="position-absolute bottom-0 p-3">
                    <div class="d-grid gap-3">
                        <a href="index.php?page=UserDetail" class="btn btn-secondary">Profile</a>
                        <a href="Authentication/login.php" class="btn btn-secondary">Logout</a>
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