

<main>
	<div class="container-fluid">
        <h1 class="mt-4">Tambah User</h1>

        <div class="notif">
            <?php 
                require 'config/userfunctions.php';
                if ( isset($_POST['submit']) ) {
                    // echo $username . $password . $role . $nama . $nik . $tanggalLahir . $email . $telpon . $alamat . $status . $agama . $gender . $fotoProfil;
                    if( adduser($_POST) > 0 ) {
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>Data Berhasil ditambahkan!.<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                    } else {
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>Data Gagal ditambahkan!.<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                    }
                }
             ?> 
        </div>


    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">

            <div class="col-md mt-3">
                <label for="username">Username</label>
                <input type="text" class="form-control shadow" name="username" required>
            </div>


           <div class="col-md mt-3">
                <label for="">Password</label>
                <input type="password" class="form-control shadow" name="password" required>
            </div>

            <div class="col-md mt-3">
                <label for="">Role</label>
                <select name="role" class="form-select shadow" required>
                    <option value="super">Super</option>
                    <option value="admin">Admin</option>
                    <option value="guest">Guest</option>
                </select>
            </div>

        </div>


        <div class="row">
            <div class="col-md mt-3">
                <label for="">Nama</label>
                <input type="text" class="form-control shadow" name="nama" required>
            </div>
            <div class="col-md mt-3">
                <label for="">NIK</label>
                <input type="text" class="form-control shadow" name="nik" required>
            </div>

              <div class="col-md mt-3">
                <label for="">Tanggal Lahir</label>
                <input type="date" class="form-control shadow" name="tanggalLahir" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md mt-3">
                <label for="">Email</label>
                <input type="email" class="form-control shadow" name="email" required>
            </div>

            <div class="col-md mt-3">
                <label for="">No. Telp</label>
                <input type="text" class="form-control shadow" name="telpon" required>
            </div>

            <div class="col-md mt-3">
                <label for="">Alamat</label>
                <input type="text" class="form-control shadow" name="alamat" required>
            </div>
        </div> 


        <div class="row mb-3">
            <div class="col-md mt-3">
                <label for="">Jabatan</label>
                <select name="status" class="form-select shadow" required>
                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                    <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                    <option value="Kepala Lab">Kepala Lab</option>
                    <option value="Staff">Staff</option>
                    <option value="Guru">Guru</option>
                    <option value="Siswa">Siswa</option>
                </select>
           </div>

            <div class="col-md mt-3">
                <label for="kondisiBuku">Agama</label>
                <select name="agama" class="form-select shadow" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Hindu">Hindu</option>
                </select>
            </div>

            <div class="col-md mt-3">
                <label for="">Jenis Kelamin</label>
                <select name="gender" class="form-select shadow" required>
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="col-md mt-3">
                <label for="">Gambar</label>
                <input type="file" class="form-control shadow" name="fotoProfil">      
            </div> 
        </div>

        <div class="row">
            <div class="col-md-2 mb-3 mt-3">
                <div class="d-grid">
                    <button class="btn btn-success shadow" type="submit" name="submit">Simpan</button>
                </div>
            </div>
        </div>

    </form>
	</div>


</main>