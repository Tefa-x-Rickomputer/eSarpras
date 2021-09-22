<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit Profile</h1>
        <div class="notif" id="notification">
            <?php
                include 'config/userfunctions.php';
                $id = $userSession['idUser'];
                $user = query("SELECT * FROM tuser WHERE idUser = $id")[0];
                
                if( isset($_POST['edit']) ) { 
                    if( edit($_POST) > 0 ) {
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>Data Berhasil diubah!.<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                    } else {
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>Data Gagal diubah!.<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                    }
                }
            ?>
        </div>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="idUser" value="<?= $user['idUser']; ?>">
        <input type="hidden" name="fotoProfil" value="<?= $user['fotoProfil']; ?>">
        <div class="row">
            <div class="col-md mt-3">
                <label for="">Nama</label>
                <input type="text" class="form-control shadow-sm" name="nama" value="<?= $user['nama']; ?>">
            </div>
            <div class="col-md mt-3">
                <label for="">NIK</label>
                <input type="text" class="form-control shadow-sm" name="nik" value="<?= $user['nik']; ?>">
            </div>

              <div class="col-md mt-3">
                <label for="">Tanggal Lahir</label>
                <input type="date" class="form-control shadow-sm" name="tanggalLahir" value="<?= $user['tanggalLahir']; ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-md mt-3">
                <label for="">Email</label>
                <input type="email" class="form-control shadow-sm" name="email" value="<?= $user['email']; ?>">
            </div>

            <div class="col-md mt-3">
                <label for="">No. Telp</label>
                <input type="text" class="form-control shadow-sm" name="telpon" value="<?= $user['telpon']; ?>">
            </div>

            <div class="col-md mt-3">
                <label for="">Alamat</label>
                <input type="text" class="form-control shadow-sm" name="alamat" value="<?= $user['alamat']; ?>">
            </div>
        </div> 


        <div class="row mb-3">
            <div class="col-md mt-3">
                <label for="">Jabatan</label>
                <select name="status" class="form-select shadow-sm">
                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                    <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                    <option value="Kepala Lab">Kepala Lab</option>
                    <option value="Guru">Guru</option>
                </select>
           </div>

            <div class="col-md mt-3">
                <label for="kondisiBuku">Agama</label>
                <select name="agama" id="" class="form-select shadow-sm">
                    <?php if($user['agama'] == 'Islam') { ?>
                        <option value='Islam' selected>Islam</option>
                        <option value='Kristen'>Kristen</option>
                        <option value='Katholik'>Katholik</option>
                        <option value='Buddha'>Buddha</option>
                        <option value='Hindu'>Hindu</option>
                    <?php }elseif($user['agama'] == 'Kristen') { ?>
                        <option value='Islam' >Islam</option>
                        <option value='Kristen' selected>Kristen</option>
                        <option value='Katholik'>Katholik</option>
                        <option value='Buddha'>Buddha</option>
                        <option value='Hindu'>Hindu</option>
                    <?php }elseif($user['agama'] == 'Katholik') { ?>
                        <option value='Islam' >Islam</option>
                        <option value='Kristen'>Kristen</option>
                        <option value='Katholik' selected>Katholik</option>
                        <option value='Buddha'>Buddha</option>
                        <option value='Hindu'>Hindu</option>
                    <?php }elseif($user['agama'] == 'Buddha') { ?>
                        <option value='Islam' >Islam</option>
                        <option value='Kristen'>Kristen</option>
                        <option value='Katholik'>Katholik</option>
                        <option value='Buddha' selected>Buddha</option>
                        <option value='Hindu'>Hindu</option>
                    <?php }elseif($user['agama'] == 'Hindu') { ?>
                        <option value='Islam' >Islam</option>
                        <option value='Kristen'>Kristen</option>
                        <option value='Katholik'>Katholik</option>
                        <option value='Buddha'>Buddha</option>
                        <option value='Hindu' selected>Hindu</option>
                    <?php }else { ?>
                        <option value='Islam' >Islam</option>
                        <option value='Kristen'>Kristen</option>
                        <option value='Katholik'>Katholik</option>
                        <option value='Buddha'>Buddha</option>
                        <option value='Hindu'>Hindu</option>
                    <?php } ?>
                    
                </select>
            </div>

            <div class="col-md mt-3">
                <label for="">Jenis Kelamin</label>
                <select name="gender" id="" class="form-select shadow-sm">
                    <?php if($user['gender'] == 'Laki-laki') { ?>
                        <option value="Laki-laki" selected>Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    <?php }elseif($user['gender'] == 'Perempuan') { ?>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan" selected>Perempuan</option>
                    <?php } ?>
                </select>
            </div>

            <div class="col-md mt-3">
                <label for="">Gambar</label>
                <input type="file" class="form-control shadow-sm" name="fotoProfil">      
            </div> 
        </div>

        <div class="row">
            <div class="col-md-2 mt-3 mb-3">
                <button class="shadow-sm btn btn-success" type="submit" name="edit">Simpan</button>
                <a href="index.php?page=Profile" class="shadow-sm btn btn-primary">Kembali</a>
            </div>
        </div>

    </form>

    </div>
</main>