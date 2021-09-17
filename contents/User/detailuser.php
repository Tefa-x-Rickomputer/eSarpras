<?php 
    include 'config/userfunctions.php';
    $id = $_GET['id'];

    $user = query("SELECT * FROM tuser WHERE idUser = $id")[0];
<<<<<<< HEAD
=======

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
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a
?>


<main>
<<<<<<< HEAD
    <div class="container-fluid">
=======
	<div class="container-fluid">
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a
        <div class="row">
            <div class="col mt-5 text-center">
                <h1>Detail user</h1>
            </div>    
        </div>

<<<<<<< HEAD
        <div class="row mt-3 mb-5 card-user">
            <div class="col-md-4 col-xs-12 mt-3">
=======
		<div class="row mt-3 mb-5 card-user">
			<div class="col-md-4 col-xs-12 mt-3">
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a
                <div class="shadow">
                    <div class="card card-primary">
                        <div class="text-center">
                            <i class="bi bi-person-fill" style="font-size:10rem;"></i>
                        </div>

                    </div>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item mt-2 text-center display-6 pb-3"><?= $user['nama']; ?></li>
                        <li class="list-group-item mt-2">
                            <b>NIK</b>
                            <div class="float-end"><?= $user['nik']; ?></div>
                        </li>
                        <li class="list-group-item mt-2">
                            <b>Status</b>
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
<<<<<<< HEAD
                            <input type="text" class="form-control mt-3" disabled name="nama" value="<?= $user['nama']; ?>">
=======
                            <input type="text" class="form-control mt-3" name="nama" value="<?= $user['nama']; ?>">
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">NIK</label>
                        </div>
                        <div class="col-sm-5">
<<<<<<< HEAD
                            <input type="text" class="form-control mt-3" disabled name="nik" value="<?= $user['nik']; ?>">
=======
                            <input type="text" class="form-control mt-3" name="nik" value="<?= $user['nik']; ?>">
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Tanggal Lahir</label>
                        </div>
                        <div class="col-sm-3">
<<<<<<< HEAD
                            <input type="date" class="form-control mt-3" disabled name="tanggalLahir" value="<?= $user['tanggalLahir']; ?>">
=======
                            <input type="date" class="form-control mt-3" name="tanggalLahir" value="<?= $user['tanggalLahir']; ?>">
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Email</label>
                        </div>
                        <div class="col-sm-5">
<<<<<<< HEAD
                            <input type="email" class="form-control mt-3" disabled name="email" value="<?= $user['email']; ?>">
=======
                            <input type="email" class="form-control mt-3" name="email" value="<?= $user['email']; ?>">
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">No. Telp</label>
                        </div>
                        <div class="col-sm-5">
<<<<<<< HEAD
                            <input type="text" class="form-control mt-3" disabled name="telpon" value="<?= $user['telpon']; ?>">
=======
                            <input type="text" class="form-control mt-3" name="telpon" value="<?= $user['telpon']; ?>">
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Alamat</label>
                        </div>
                        <div class="col-sm-5">
<<<<<<< HEAD
                            <input type="text" class="form-control mt-3" disabled name="alamat" value="<?= $user['alamat']; ?>">
=======
                            <input type="text" class="form-control mt-3" name="alamat" value="<?= $user['alamat']; ?>">
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="agama" class="fw-bold fs-5 mt-3">Agama</label>
                        </div>
                        <div class="col-sm-5">
<<<<<<< HEAD
                            <input type="text" class="form-control mt-3" disabled name="agama" value="<?= $user['agama']; ?>">
                            <!-- <select name="agama" id="agama" disabled class="form-select mt-3">
=======
                            <select name="agama" id="agama" class="form-select mt-3">
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a
                                <?php 
                                if ($user['agama'] == 'Islam') {
                                    echo "<option value='Islam' selected>Islam</option>
                                        <option value='Kristen'>Kristen</option>
                                        <option value='Katholik'>Katholik</option>
                                        <option value='Buddha'>Buddha</option>
                                        <option value='Hindu'>Hindu</option>
                                        ";
                                    } else if ($user['agama'] == 'Kristen') {
                                        echo "<option value='Islam'>Islam</option>
                                            <option value='Kristen' selected>Kristen</option>
                                            <option value='Katholik'>Katholik</option>
                                            <option value='Buddha'>Buddha</option>
                                            <option value='Hindu'>Hindu</option>
                                            ";
                                    } else if ($user['agama'] == 'Katholik') {
                                        echo "<option value='Islam'>Islam</option>
                                            <option value='Kristen'>Kristen</option>
                                            <option value='Katholik' selected>Katholik</option>
                                            <option value='Buddha'>Buddha</option>
                                            <option value='Hindu'>Hindu</option>
                                            ";
                                    } else if ($user['agama'] == 'Buddha') {
                                        echo "<option value='Islam'>Islam</option>
                                            <option value='Kristen'>Kristen</option>
                                            <option value='Katholik'>Katholik</option>
                                            <option value='Buddha' selected>Buddha</option>
                                            <option value='Hindu'>Hindu</option>
                                            ";
                                    } else if ($user['agama'] == 'Hindu') {
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
                                
<<<<<<< HEAD
                            </select> -->
=======
                            </select>
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a
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
<<<<<<< HEAD
                                        <input class="form-check-input" disabled type="radio" name="gender" id="inlineRadio1" value="Laki-laki">
=======
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Laki-laki">
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a
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
<<<<<<< HEAD
                                        <input class="form-check-input" disabled type="radio" name="gender" id="inlineRadio2" value="Perempuan" >
=======
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Perempuan" >
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a
                                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                    </div>
                                    ';
                                }
                             ?>
                            
                            
                        </div>
                    </div>

<<<<<<< HEAD
=======
                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Foto Profile</label>
                        </div>
                        <div class="col-sm-5">
                            <input class="form-control mt-3" type="file" name="fotoProfil" id="formFile">
                        </div>
                    </div>

>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a
                </div>
                    
            </div>

        </div>
        <div class="row mb-5 text-center">
            <div class="col">
<<<<<<< HEAD
</form>
                <a href="index.php?page=Useredit&id=<?= $id; ?>" class='btn btn-warning'>Edit</a>
                <a href="index.php?page=Userdelete&id=<?= $id; ?>" id="deletebtn" class="btn btn-danger" onclick="return confirm('apakah yakin akan dihapus?')">Hapus</a>

            </div>
        </div>

    </div>
=======
                <button type="submit" name="edit" class="btn btn-success">Simpan</button>
</form>
                <a href="index.php?page=Userdelete&id=<?= $id; ?>" id="deletebtn" class="btn btn-danger" onclick="return confirm('apakah yakin akan dihapus?')">Hapus</a>
            </div>
        </div>

	</div>
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a
</main>