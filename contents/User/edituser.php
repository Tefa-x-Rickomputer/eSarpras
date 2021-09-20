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
                <h1>Edit user</h1>
            </div>    
        </div>

    <form action="" method="POST">
        <div class="row mt-3 mb-5 card-user">
            <div class="col-md-8 mx-auto col-xs-12 mt-3">
                <div class="card p-3 pt-1 bg-light shadow">
                        <input type="hidden" name="idUser" value="<?= $user['idUser']; ?>">
                        <div class="row form-group">
                        <div class="col-sm-4">
                            <label for="" class="fw-bold float-xl-end fs-5 mt-3">Nama</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" name="nama" value="<?= $user['nama']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label for="" class="fw-bold float-xl-end fs-5 mt-3">NIK</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" name="nik" value="<?= $user['nik']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label for="" class="fw-bold float-xl-end fs-5 mt-3">Tanggal Lahir</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="date" class="form-control mt-3" name="tanggalLahir" value="<?= $user['tanggalLahir']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label for="" class="fw-bold float-xl-end fs-5 mt-3">Email</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="email" class="form-control mt-3" name="email" value="<?= $user['email']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label for="" class="fw-bold float-xl-end fs-5 mt-3">No. Telp</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" name="telpon" value="<?= $user['telpon']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label for="" class="fw-bold float-xl-end fs-5 mt-3">Alamat</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" name="alamat" value="<?= $user['alamat']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label for="agama" class="fw-bold float-xl-end fs-5 mt-3">Agama</label>
                        </div>
                        <div class="col-sm-5">
                            <select name="agama" id="agama" class="form-select mt-3">
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
                                
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label for="" class="fw-bold float-xl-end fs-5 mt-3">Jenis Kelamin</label>
                        </div>
                        <div class="col-sm-5">
                            <?php 
                                $kelamin = $user['gender'];
                                if ($kelamin == 'Perempuan') {
                                    echo '
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Laki-laki">
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
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Perempuan" >
                                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                    </div>
                                    ';
                                }
                             ?>
                            
                            
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label for="" class="fw-bold float-xl-end fs-5 mt-3">Foto Profile</label>
                        </div>
                        <div class="col-sm-5">
                            <input class="form-control mt-3" type="file" name="fotoProfil" id="formFile">
                        </div>
                    </div>
                </div>
                    
            </div>

        </div>
        <div class="row mt-3 mb-5 ">
            <div class="col-md-2 mx-auto">
                <button type="submit" name="edit" class="btn btn-success">Simpan</button>
                <a href="index.php?page=UserDetail&id=<?= $id; ?>" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </form>
    </div>
</main>