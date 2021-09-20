<?php 
    include 'config/userfunctions.php';
    $id = $_GET['id'];

    $user = query("SELECT * FROM tuser WHERE idUser = $id")[0];

    if( isset($_POST['edit']) ) { 
        if( edit($_POST) > 0 ) {
            echo "<script>
                    alert('data berhasil di update');
                    document.location.href = 'index.php?page=UserDetail&id=$id';
                </script>";
        } else {
            echo "<script>
                    alert('data gagal di update');
                    document.location.href = 'index.php?page=UserDetail&id=$id';
                </script>";
        }
    }
?>


<main>
	<div class="container-fluid">
        <div class="row">
            <div class="col mt-5 text-center">
                <h1>Detail user</h1>
            </div>    
        </div>
        <div class="row mt-3 mb-5 card-user">
            <div class="col-md-4 col-xs-12 mt-3">
                <div class="shadow">
                    <div class="card card-primary">
                        <div class="text-center">
                            <img src="<?= $user['fotoProfil']; ?>" alt="">
                        </div>

                    </div>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item mt-2 text-center display-6 pb-3"><?= $user['nama']; ?></li>
                        <li class="list-group-item mt-2">
                            <b>NIK</b>
                            <div class="float-end"><?= $user['nik']; ?></div>
                        </li>
                        <li class="list-group-item mt-2">
                            <b>Jabatan</b>
                            <div class="float-end"><?= $user['status']; ?></div>
                        </li>
                        <li class="list-group-item mt-2">
                            <b>Role</b>
                            <div class="float-end"><?= $user['role']; ?></div>
                        </li>
                    </ul>
                </div>

            </div>


            <div class="col-md-8 col-xs-12 mt-3">

<form action="" method="POST">
                <input type="hidden" name="idUser" value="<?= $user['idUser']; ?>">
                <div class="card p-3 pt-1 shadow">
                    
                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Nama</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" disabled name="nama" value="<?= $user['nama']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">NIK</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" disabled name="nik" value="<?= $user['nik']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Tanggal Lahir</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="date" class="form-control mt-3" disabled name="tanggalLahir" value="<?= $user['tanggalLahir']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Email</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="email" class="form-control mt-3" disabled name="email" value="<?= $user['email']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">No. Telp</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" disabled name="telpon" value="<?= $user['telpon']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Alamat</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" disabled name="alamat" value="<?= $user['alamat']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="agama" class="fw-bold fs-5 mt-3">Agama</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" disabled name="agama" value="<?= $user['agama']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Jenis Kelamin</label>
                        </div>
                        <div class="col-sm-5">
                            <?php 
                                $kelamin = $user['gender'];
                                if ($kelamin == 'Perempuan') {
                                    echo '
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" disabled type="radio" name="gender" id="inlineRadio1" value="Laki-laki">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Laki-laki">
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
                <a href="index.php?page=Useredit&id=<?= $id; ?>" class='btn btn-warning shadow'>Edit</a>
                <a href="index.php?page=Userdelete&id=<?= $id; ?>" id="deletebtn" class="btn btn-danger shadow" onclick="return confirm('apakah yakin akan dihapus?')">Hapus</a>

            </div>
        </div>

    </div>
</main>