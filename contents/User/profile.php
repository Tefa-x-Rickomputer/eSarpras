<?php 

    $userSession = [
            "login" => $_SESSION["login"],
            "id" => $_SESSION["id"],
            "role" => $_SESSION["role"],
            "nama" => $_SESSION["nama"],
            "nik" =>  $_SESSION["nik"],
            "tanggalLahir" => $_SESSION["tanggalLahir"],
            "email" => $_SESSION["email"],
            "agama" => $_SESSION["agama"],
            "gender" => $_SESSION["gender"],
            "telpon" => $_SESSION["telpon"],
            "status" => $_SESSION["status"],
            "alamat" => $_SESSION["alamat"],
            "fotoProfil" =>  $_SESSION["fotoProfil"]
            ];

?>


<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col mt-5 text-center">
                <h1>Profile</h1>
            </div>    
        </div>

        <div class="row mt-3 mb-5 card-user">
            <div class="col-md-4 col-xs-12 mt-3">
                <div class="shadow">
                    <div class="card card-primary">
                        <div class="text-center">
                            <i class="bi bi-person-fill" style="font-size:10rem;"></i>
                        </div>

                    </div>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item mt-2 text-center display-6 pb-3"><?= $userSession['nama']; ?></li>
                        <li class="list-group-item mt-2">
                            <b>NIK</b>
                            <div class="float-end"><?= $userSession['nik']; ?></div>
                        </li>
                        <li class="list-group-item mt-2">
                            <b>Status</b>
                            <div class="float-end"><?= $userSession['status']; ?></div>
                        </li>
                        <li class="list-group-item mt-2">
                            <b>Role</b>
                            <div class="float-end"><?= $userSession['role']; ?></div>
                        </li>
                    </ul>
                </div>

            </div>


            <div class="col-md-8 col-xs-12 mt-3">

<form action="" method="POST">
                <div class="card p-3 pt-1 shadow">
                    
                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Nama</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" disabled name="nama" value="<?= $userSession['nama']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">NIK</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" disabled name="nik" value="<?= $userSession['nik']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Tanggal Lahir</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="date" class="form-control mt-3" disabled name="tanggalLahir" value="<?= $userSession['tanggalLahir']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Email</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="email" class="form-control mt-3" disabled name="email" value="<?= $userSession['email']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">No. Telp</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" disabled name="telpon" value="<?= $userSession['telpon']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Alamat</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" disabled name="alamat" value="<?= $userSession['alamat']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="agama" class="fw-bold fs-5 mt-3">Agama</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" disabled name="agama" value="<?= $userSession['agama']; ?>">
                            <!-- <select name="agama" id="agama" disabled class="form-select mt-3">
                                <?php 
                                if ($userSession['agama'] == 'Islam') {
                                    echo "<option value='Islam' selected>Islam</option>
                                        <option value='Kristen'>Kristen</option>
                                        <option value='Katholik'>Katholik</option>
                                        <option value='Buddha'>Buddha</option>
                                        <option value='Hindu'>Hindu</option>
                                        ";
                                    } else if ($userSession['agama'] == 'Kristen') {
                                        echo "<option value='Islam'>Islam</option>
                                            <option value='Kristen' selected>Kristen</option>
                                            <option value='Katholik'>Katholik</option>
                                            <option value='Buddha'>Buddha</option>
                                            <option value='Hindu'>Hindu</option>
                                            ";
                                    } else if ($userSession['agama'] == 'Katholik') {
                                        echo "<option value='Islam'>Islam</option>
                                            <option value='Kristen'>Kristen</option>
                                            <option value='Katholik' selected>Katholik</option>
                                            <option value='Buddha'>Buddha</option>
                                            <option value='Hindu'>Hindu</option>
                                            ";
                                    } else if ($userSession['agama'] == 'Buddha') {
                                        echo "<option value='Islam'>Islam</option>
                                            <option value='Kristen'>Kristen</option>
                                            <option value='Katholik'>Katholik</option>
                                            <option value='Buddha' selected>Buddha</option>
                                            <option value='Hindu'>Hindu</option>
                                            ";
                                    } else if ($userSession['agama'] == 'Hindu') {
                                        echo "<option value='Islam'>Islam</option>
                                            <option value='Kristen'>Kristen</option>
                                            <option value='Katholik'>Katholik</option>
                                            <option value='Buddha'>Buddha</option>
                                            <option value='Hindu' selected>Hindu</option>
                                            ";
                                    } else {
                                ?>
                                    <option value='Islam'>Islam</option>
                                    <option value='Kristen'>Kristen</option>
                                    <option value='Katholik'>Katholik</option>
                                    <option value='Buddha'>Buddha</option>
                                    <option value='Hindu'>Hindu</option>
                                <?php        
                                    }
                                 ?>
                                
                            </select> -->
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Jenis Kelamin</label>
                        </div>
                        <div class="col-sm-5">
                            <?php 
                                $kelamin = $userSession['gender'];
                                if ($kelamin == 'Perempuan') {
                                    echo '
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" disabled type="radio" name="gender" id="inlineRadio1" value="Laki-laki">
                                        <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                    </div>
                                    ';
                                    echo '
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Perempuan" checked>
                                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                    </div>
                                    ';
                                } else if ($kelamin == 'Laki-laki') {
                                    echo '
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Laki-laki" checked>
                                        <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                    </div>
                                    ';
                                    echo '
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" disabled type="radio" name="gender" id="inlineRadio2" value="Perempuan" >
                                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                    </div>
                                    ';
                                }
                             ?>
                            
                            
                        </div>
                    </div>

                </div>
                    
            </div>

        </div>
        <div class="row mb-5 text-center">
            <div class="col">
</form>
            <a href="index.php?page=Useredit&id=<?= $userSession['id']; ?>" class='btn btn-warning'>Edit</a>
            </div>
        </div>

    </div>
</main>