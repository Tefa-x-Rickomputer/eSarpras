<?php 

include 'config/connect.php';

$cntRuangan = querySql("SELECT COUNT('*') FROM truangan WHERE isDeleted = 0")[0];
$cntAset = querySql("SELECT COUNT('*') FROM tbarang WHERE isDeleted = 0")[0];
$cntBuku = querySql("SELECT COUNT('*') FROM tbuku WHERE isDeleted = 0")[0];

$cntBarang = intval($cntBuku["COUNT('*')"]) + intval($cntAset["COUNT('*')"]);

?>

<main>
    <div class="container-fluid px-4 mb-3">
        <h1 class="my-4">Dashboard</h1>

        <!-- Contents -->

        <!-- Upper Row - Start -->

        <div class="row">
            <div class="col-sm">
                <div class="card text-light card-info mb-3 bg-dark border-0 border-start border-5 border-primary shadow">
                    <div class="row gy-0">
                        <h5 class="col-2 fs-1 m-1 mt-1 mx-2 bi bi-house"></h5>
                        <div class="col-9 ps-3 text-break">
                            <div class="row">
                                <span class="fs-5"><?= $cntRuangan["COUNT('*')"] ?></span>
                            </div>
                            <div class="row"> 
                                <span>Total Ruang</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-light card-info mb-3 bg-dark border-0 border-start border-5 border-primary shadow">
                    <div class="row gy-0">
                        <h5 class="col-2 fs-1 m-1 mt-1 mx-2 bi bi-box-seam"></h5>
                        <div class="col-9 ps-3 text-break">
                            <div class="row">
                                <span class="fs-5"><?= $cntAset["COUNT('*')"] ?></span>
                            </div>
                            <div class="row"> 
                                <span>Jumlah Aset</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-light card-info mb-3 bg-dark border-0 border-start border-5 border-primary shadow">
                <div class="row gy-0">
                        <h5 class="col-2 fs-1 m-1 mt-1 mx-2 bi bi-book"></h5>
                        <div class="col-9 ps-3 text-break">
                            <div class="row">
                                <span class="fs-5"><?= $cntBuku["COUNT('*')"] ?></span>
                            </div>
                            <div class="row"> 
                                <span>Jumlah Buku&nbsp;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card text-light card-info mb-3 bg-dark border-0 border-start border-5 border-primary shadow">
                <div class="row gy-0">
                        <h5 class="col-2 fs-1 m-1 mt-1 mx-2 bi bi-archive"></h5>
                        <div class="col-9 ps-3 text-break">
                            <div class="row">
                                <span class="fs-5"><?= $cntBarang ?></span>
                            </div>
                            <div class="row"> 
                                <span>Total Barang</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upper Row - End -->

        <!-- Lower Row - Start -->

        <div class="row gy-3">
            <!-- Notice - Start -->
            <div class="col col-lg-8">
                <div class="card card-perubahan shadow h-100">
                    <h5 class="card-header p-3 bg-dark text-light  border-0 border-bottom border-5 border-primary">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        <span class="title-perubahan">Pemberitahuan</span>
                    </h5>
                        <div class="card-body overflow-auto">
                            <div class="card-text">
                                <p>
                                    <i class="bi bi-caret-right-fill"></i>
                                    This is a notice, just a notice, self explanitory.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Notice - End -->

            <!-- Quick User Info - Start -->

            <div class="col-sm">
                <div class="card card-primary card-outline border-start-0 border-end-0 border-5 border-dark shadow">
                    <div class="card-header box-profile">
                        <div class="text-center">
                            <!-- <i class="bi bi-person-fill" style="font-size:6rem;"></i> -->
                            <img class="profile-photo" src="Assets/img/user/<?= $user["fotoProfil"] ?>" alt="Foto Profil" style="width: 96px;">
                            <h4><?= $user["nama"] ?></h2>
                        </div>
                    </div>
                    <div class="card-body bg-dark text-light pb-2">
                        <ul class="list-group list-group-unbordered mb-1 text-center fw-normal">
                            <li class="pb-2">
                                <i class="text-muted text-center"><?= $user["role"]; ?></i>
                            </li>
                            <li class="list-group-item border-start-0 border-end-0 border-bottom-0 bg-dark text-light">
                                <?= $user["status"]; ?>
                            </li>
                            <li class="list-group-item border-0 bg-dark text-light">
                                <?= $user["email"]; ?>
                            </li>
                            <li class="list-group-item border-0 bg-dark text-light">
                                <?= $user["telpon"]; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Quick User Info - End -->
        </div>

        <!-- Lower Row - End -->
        
    </div>
</main>